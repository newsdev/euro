import json
import os
import xmltodict

DATA_DIR = os.environ.get('EURO_DATA_DIR', '/tmp/euro')

if not os.path.isdir(DATA_DIR):
    os.system('mkdir %s' % DATA_DIR)

def process_xml(xml, headers):

    if headers.get('x-meta-game-id', None):
        FILE_ROOT = '%s/%s-%s-%s-%s-%s' % (
            DATA_DIR,
            headers['x-meta-feed-type'],
            headers['timestamp'],
            headers['x-meta-game-id'],
            headers['year'],
            headers['tournament']
        )

        with open('%s.xml' % FILE_ROOT, 'w') as writefile:
            writefile.write(xml)

        with open('%s-headers.json' % FILE_ROOT, 'w') as writefile:
            writefile.write(json.dumps(headers))

        payload = xmltodict.parse(xml)

        with open('%s-processed.json' % FILE_ROOT, 'w') as writefile:
            writefile.write(json.dumps(payload))

    else:
        FILE_ROOT = '%s/%s-%s-%s-%s' % (
            DATA_DIR,
            headers['x-meta-feed-type'],
            headers['timestamp'],
            headers['year'],
            headers['tournament']
        )

        with open('%s.xml' % FILE_ROOT, 'w') as writefile:
            writefile.write(xml)

        with open('%s-headers.json' % FILE_ROOT, 'w') as writefile:
            writefile.write(json.dumps(headers))

        payload = xmltodict.parse(xml)

        with open('%s-processed.json' % FILE_ROOT, 'w') as writefile:
            writefile.write(json.dumps(payload))
