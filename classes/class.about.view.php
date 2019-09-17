<?php
class about
{
    var $xml_array = Array();
    var $texts = Array();
    var $resumetexts = Array();
    var $personalinfo = Array();
    var $goals = Array();
   
    function __construct()
    {
        // load XML into object
        $xml_object = simplexml_load_file('../XML/about.xml');
        // $this->xml_object_thing=$xml_object;
        // encode object into json file
        $json = json_encode($xml_object);
        // $this->jason_encode_object = $json;
        // decode json fil into multidimensional array
        $xml_array = json_decode($json, true);
        // $this->xml_array_thing = $xml_array;
        // extract array and assign to its own array
        // save as class property
        $this->personalinfo = $xml_array['personalinfo'];     
        $this->resumetexts = $xml_array['resumetexts'];
        $this->goals = $xml_array['goals'];
    }

    function aboutme(){
        $resumetexts = $this->resumetexts;
        $size = sizeof($resumetexts['intro']['p']);
        for ($i=0;$i<$size;$i++) {
            print('<p>'.$resumetexts['intro']['p'][$i].'</p>');
        }
    }
    function freetime(){
        $resumetexts = $this->resumetexts;
        $size = sizeof($resumetexts['freetime']['p']);
        for ($i=0;$i<$size;$i++) {
            print('<p>'.$resumetexts['freetime']['p'][$i].'</p>');
        }
    }
    function personalinfo(){
        $personalinfo = $this->personalinfo;
        print('<h5>Personality type: '.$personalinfo['myname'].'</h5>');
        /*
        $size = sizeof($personality['personality']['p']);
        for ($i=0;$i<$size;$i++) {
            print('<p>'.$personality['personality']['p'][$i].'</p>');
        }
        */
    }
    function goals(){
        $goals = $this->goals;
        $size = sizeof($goals['p']);
        for ($i=0;$i<$size;$i++) {
            print('<p>'.$goals['p'][$i].'</p>');
        }
    }
}

?> 