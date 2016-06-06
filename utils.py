import json
import os

from lxml import etree, objectify

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

        payload = xml_to_json(xml)

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

        payload = xml_to_json(xml)

        with open('%s-processed.json' % FILE_ROOT, 'w') as writefile:
            writefile.write(json.dumps(payload))

def _flatten_attributes(property_name, lookup, attributes):
    if attributes is None:
        return lookup

    if not isinstance(lookup, dict):
        return dict(attributes.items() + [(property_name, lookup)])

    return dict(lookup.items() + attributes.items())


def _xml_element_to_json(xml_element, attributes):
    if isinstance(xml_element, objectify.BoolElement):
        return _flatten_attributes(xml_element.tag, bool(xml_element), attributes)

    if isinstance(xml_element, objectify.IntElement):
        return _flatten_attributes(xml_element.tag, int(xml_element), attributes)

    if isinstance(xml_element, objectify.FloatElement):
        return _flatten_attributes(xml_element.tag, float(xml_element), attributes)

    if isinstance(xml_element, objectify.StringElement):
        return _flatten_attributes(xml_element.tag, unicode(xml_element).encode('utf8').strip(), attributes)

    return _flatten_attributes(xml_element.tag, _xml_to_json(xml_element.getchildren()), attributes)


def _xml_to_json(xml_object):
    attributes = None
    if hasattr(xml_object, "attrib") and not xml_object.attrib == {}:
        attributes = xml_object.attrib

    if isinstance(xml_object, objectify.ObjectifiedElement):
        return _xml_element_to_json(xml_object, attributes)

    if isinstance(xml_object, list):
        if len(xml_object) > 1 and all(xml_object[0].tag == item.tag for item in xml_object):
            return [_xml_to_json(attr) for attr in xml_object]

        return dict([(item.tag, _xml_to_json(item)) for item in xml_object])

    return Exception("Not a valid lxml object")


def xml_to_json(xml):
    xml_object = xml if isinstance(xml, objectify.ObjectifiedElement) \
                     else objectify.fromstring(xml)
    return json.dumps({xml_object.tag: _xml_to_json(xml_object)})
