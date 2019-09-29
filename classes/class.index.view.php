<?php
class index
{
    var $xml_array = Array();
    var $modules = Array();

    function __construct()
    {
        // load XML into object
        $xml_object = simplexml_load_file('../XML/index.xml');
        // $this->xml_object_thing=$xml_object;
        // encode object into json file
        $json = json_encode($xml_object);
        // $this->jason_encode_object = $json;
        // decode json fil into multidimensional array
        $xml_array = json_decode($json, true);
        // $this->xml_array_thing = $xml_array;
        // extract array and assign to its own array
        // save as class property
        $this->xml_array = $xml_array;
        $this->modules = $xml_array['modules'];     

    }

    function print_list_items($array){
        $count = count($array);
        print('<ul class="linderlist">');
            for($i=0;$i<$count;$i++){
                print('<li>'.$array[$i].'</p>');
            }
        print('</ul>');
    }

    function showmodules(){
        
        $modules = $this->modules;
        $size = sizeof($modules['module']);
        for ($i=0;$i<$size;$i++) {
            $image = $modules['module'][$i]['image'];
            $column1title = $modules['module'][$i]['column1title'];
            $imagelink = $modules['module'][$i]['imagelink'];
            $column1title = $modules['module'][$i]['column1title'];
            $colum1 = $modules['module'][$i]['colum1'];
            $column2title = $modules['module'][$i]['column2title'];
            $colum2 = $modules['module'][$i]['colum2'];
            $githubtext = $modules['module'][$i]['githubtext'];
            $githuhref = $modules['module'][$i]['githuhref'];

            print('<div class="row skillsrow">');
            print('<div class="col-md-4 image-column">');
            print('<a href="http://localhost/leiflinder05/src/page.php?page='.$imagelink.'">');
            print('<img class="img-fluid rounded-circle mb-3 mb-md-0 center" src="./assets/'.$image.'.png" alt=""></a></div>');
            print('<div class="col-md-4 hidefrommobile">');
            print('<h3>'.$column1title.'</h3>');
            /*
            the XML file may or may not have list items instead of text
            in colum1. If it list items exist and if they are more than 1
            interate through them, otherwise print colum1 as just a single paragraph
            */
            if (isset($colum1['list']['listitem'])) {
                if (count($colum1['list']['listitem'])>1) {
                    // print out array with this nifty function
                    $this->print_list_items($colum1['list']['listitem']);
                } else {
                    print('<p>'.$colum1.'</p>');
                }
            }else{
                print('<p>'.$colum1.'</p>');
            }

            print('</div>');
            print('<div class="col-md-4">');
            print('<h3>'.$column2title.'</h3>');
            print('<p>'.$colum2); 
            /*
            print('<span><a href="'.$modules['module'][$i]['githuhref'].'">'.$modules['module'][$i]['githubtext'].'</a></span>');
            */
            print('</p>');
            print('</div></div>');
        }
    }
}
?>

