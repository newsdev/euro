import json
import os

from lxml import etree

DATA_DIR = os.environ.get('EURO_DATA_DIR', '/tmp/euro')

if not os.path.isdir(DATA_DIR):
    os.system('mkdir %s' % DATA_DIR)

def process_xml(xml, headers):

    with open('%s/%s-%s-%s.xml' % (DATA_DIR, headers['timestamp'], headers['year'], headers['tournament']), 'w') as writefile:
        writefile.write(xml)

    with open('%s/%s-%s-%s.json' % (DATA_DIR, headers['timestamp'], headers['year'], headers['tournament']), 'w') as writefile:
        writefile.write(json.dumps(headers))


    """
    HERE IS WHERE THE XML PARSING BITS WILL GO
    """