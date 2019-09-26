<?php
class education
{
var $education_array = Array();

    function __construct()
    { 
        // load XML into object
        $xml_object = simplexml_load_file('http://localhost/leiflinder05/XML/education.xml');
        // encode object into json file
        $json = json_encode($xml_object);
        // decode json fil into multidimensional array
        $xml_array = json_decode($json, true);
        // extract photo array and assign to its own array
        // save as class property
        $this->education_array = $xml_array['module'];
        // extract types of photos and build
        // new arrays by Type and Orientation
        $size = sizeOf($this->education_array);
    }

    function showEducation(){
        print('<h4 class="eduheader">Academic</h4>');
        for ($i=0;$i<sizeof($this->education_array);$i++) {
            if ($this->education_array[$i]['type']=="Academic") {
            print('<div class="card" style="width: 90;">
            <div class="card-body">
              <h5 class="card-title">'.$this->education_array[$i]['title'].'</h5>
              <h6 class="card-subtitle mb-2 text-muted">'.$this->education_array[$i]['school'].'</h6>
              <a target="_blank" href="'.$this->education_array[$i]['certlink'].'" class="card-link">'.$this->education_array[$i]['achievment'].'</a>
              <a href="#" class="card-link">'.$this->education_array[$i]['year'].'</a>
            </div>
          </div>');        
            }
        }
        print('<h4 class="eduheader">Professional</h4>');
        for ($i=0;$i<sizeof($this->education_array);$i++) {
            if ($this->education_array[$i]['type']=="Professional") {
            print('<div class="card" style="width: 90;">
            <div class="card-body">
              <h5 class="card-title">'.$this->education_array[$i]['title'].'</h5>
              <h6 class="card-subtitle mb-2 text-muted">'.$this->education_array[$i]['school'].'</h6>
              <a target="_blank" href="'.$this->education_array[$i]['certlink'].'" class="card-link">'.$this->education_array[$i]['achievment'].'</a>
              <a href="#" class="card-link">'.$this->education_array[$i]['year'].'</a>
            </div>
          </div>');        
            }
        }

    }

}
?>
