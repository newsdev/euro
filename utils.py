import json
import os

from lxml import etree, objectify

DATA_DIR = os.environ.get('EURO_DATA_DIR', '/tmp/euro')

if not os.path.isdir(DATA_DIR):
    os.system('mkdir %s' % DATA_DIR)

def process_xml(xml, headers):
    with open('%s/%s-%s-%s.xml' % (DATA_DIR, headers['timestamp'], headers['year'], headers['tournament']), 'w') as writefile:
        writefile.write(xml)

    with open('%s/%s-%s-%s-headers.json' % (DATA_DIR, headers['timestamp'], headers['year'], headers['tournament']), 'w') as writefile:
        writefile.write(json.dumps(headers))

    payload = xml_to_json(xml)

    with open('%s/%s-%s-%s-processed.json' % (DATA_DIR, headers['timestamp'], headers['year'], headers['tournament']), 'w') as writefile:
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
        print unicode(xml_element).encode('utf8').strip()
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
