import argparse
import datetime
import glob
import json
import os
from sets import Set
import time

from flask import Flask, render_template, request, make_response, Response

import utils

app = Flask(__name__)
app.debug=True

VALID_HEADERS = ['x-meta-feed-type','x-meta-feed-parameters','x-meta-default-filename','x-meta-game-id','x-meta-competiiton-id','x-meta-season-id','x-meta-game-id','x-meta-gamesystem-id','x-meta-matchday','x-meta-game-status','x-meta-language','x-meta-production-server','x-meta-production-server-timeStamp','x-meta-production-server-module','x-meta-mime-type','x-meta-encoding','x-meta-sport-id','x-content-length','x-meta-id','x-feed_id','x-meta-date-created','x-meta-message-digest']

@app.route('/<tournament>/<year>/gameids.json', methods=['GET'])
def all_gameids(tournament, year):
    gameids = list(Set([x.split('-')[2] for x in glob.glob('%s/*F7*.xml' % utils.DATA_DIR)]))
    return Response(json.dumps(gameids), mimetype="application/json")

@app.route('/<tournament>/<year>/file/<filetype>.xml', methods=['GET'])
def xml_file(tournament, year, filetype):
    xml_files = glob.glob('%s/%s-*-%s-%s.xml' % (utils.DATA_DIR, filetype, year, tournament))
    files = sorted(xml_files, key=lambda x:x.split('-')[1], reverse=True)
    if len(files) > 0:
        with open(files[0], 'r') as readfile:
            return Response(readfile.read(), mimetype="text/xml")
    else:
        return ""

@app.route('/<tournament>/<year>/file/<filetype>.json', methods=['GET'])
def json_file(tournament, year, filetype):
    json_files = glob.glob('%s/%s-*-%s-%s-processed.json' % (utils.DATA_DIR, filetype, year, tournament))
    files = sorted(json_files, key=lambda x:x.split('-')[1], reverse=True)
    if len(files) > 0:
        with open(files[0], 'r') as readfile:
            return Response(readfile.read(), mimetype="application/json")
    else:
        return ""

@app.route('/<tournament>/<year>/game/<gameid>.xml', methods=['GET'])
def latest_xml(tournament, year, gameid):
    xml_files = glob.glob('%s/F7-*-%s-%s-%s.xml' % (utils.DATA_DIR, gameid, year, tournament))
    files = sorted(xml_files, key=lambda x:x.split('-')[1], reverse=True)
    if len(files) > 0:
        with open(files[0], 'r') as readfile:
            return Response(readfile.read(), mimetype="text/xml")
    else:
        return ""

@app.route('/<tournament>/<year>/game/<gameid>.json', methods=['GET'])
def latest_json(tournament, year, gameid):
    json_files = glob.glob('%s/F7-*-%s-%s-%s-processed.json' % (utils.DATA_DIR, gameid, year, tournament))
    files = sorted(json_files, key=lambda x:x.split('-')[1], reverse=True)
    if len(files) > 0:
        print files[0]
        with open(files[0], 'r') as readfile:
            return Response(readfile.read(), mimetype="application/json")
    else:
        return ""

@app.route('/<tournament>/<year>/create/', methods=['POST', 'GET'])
def parse_xml(tournament, year):
    if request.method == 'GET':
        return "Listening"

    if request.method == 'POST':

        timestamp = int(time.mktime(datetime.datetime.now().timetuple()))

        xml = request.get_data()

        headers = {}
        headers['tournament'] = tournament
        headers['year'] = year
        headers['timestamp'] = timestamp

        for k,v in request.headers.items():
            if k.lower() in VALID_HEADERS:
                headers[k.lower()] = v

        utils.process_xml(xml, headers)
        return ""

if __name__ == '__main__':
    parser = argparse.ArgumentParser()
    parser.add_argument('-p', '--port')
    args = parser.parse_args()
    server_port = 8000

    if args.port:
        server_port = int(args.port)

    app.run(host='0.0.0.0', port=server_port, debug=True)