<?php

namespace PHPBrew\DIG\Variants;

class Xml extends \PHPBrew\DIG\Variant
{
    public function test()
    {
        $res = $this->testFs(array(
            'libxml_get_errors' => '--disable-libxml',
            'xml_parse' => '--disable-xml',
        ));
        if ($res != '') {
            return $res;
        }
        return $this->testCs(array(
            'DOMDocument' => '--disable-dom',
            'SimpleXMLElement' => '--disable-simplexml',
            'XMLReader' => '--disable-xmlreader',
            'XMLWriter' => '--disable-xmlwriter',
        ));
    }
    /**
     * @return array
     */
    public function args($phpVer, $debianVer)
    {
        return array('+xml');
    }
}
