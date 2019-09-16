<?php
class codeskills
{
var $codeskills_array = Array();

    function __construct()
    {
        // load XML into object
        $xml_object = simplexml_load_file('../XML/code.xml');
        // $this->xml_object_thing=$xml_object;
        // encode object into json file
        $json = json_encode($xml_object);
       // $this->jason_encode_object = $json;
        // decode json fil into multidimensional array
        $xml_array = json_decode($json, true);
       // $this->xml_array_thing = $xml_array;
        // extract array and assign to its own array
        // save as class property
        $this->codeskills_array = $xml_array['code'];
        /*
        $size = sizeOf($this->codeskills_array);
        for ($i = 0;$i < $size;$i++) {
                $this->codeskills_array[]=array(
                    'codetitle'=>$this->codeskills_array[$i]['codetitle'],
                    'codeid'=>$this->codeskills_array[$i]['codeid'],
                    'description'=>$this->codeskills_array[$i]['description'],
                    'github'=>$this->codeskills_array[$i]['github']
                );

        }
        */
    }

    function showCodeSkillsArray($codeskills){
       // print(gettype($imageArray));
        $size = sizeOf($codeskills);
        for ($i = 0;$i < $size;$i++)
        {
            $codetitle = $codeskills[$i]['codetitle'];
            $codeid = $codeskills[$i]['codeid'];
            $description = $codeskills[$i]['description'];
            $github = $codeskills[$i]['github'];

print('<div class="spec"><div class="card linder-card">
      <div class="card-body">
        <h4 class="card-title">'.$codetitle.'</h4>
        <p class="card-text">'.$description.'</p>
        <p><a href="#">'.$codetitle.' GitHub</a></p>
    </div>
</div></div>');
        }
    }

    function showCodeSkillsOnCondition($codeskills, $GET_id){
        // print(gettype($imageArray));
         $size = sizeOf($codeskills);
         for ($i = 0;$i < $size;$i++)
         {
             $codetitle = $codeskills[$i]['codetitle'];
             $codeid = $codeskills[$i]['codeid'];
             $description = $codeskills[$i]['description'];
             $github = $codeskills[$i]['github'];

             if($codeskills[$i]['codeid']==$GET_id) {
                 print('<div class="spec"><div class="card linder-card">
                    <div class="card-body">
                        <h4 class="card-title">'.$codetitle.'</h4>
                        <p class="card-text">'.$description.'</p>
                        <p><a href="#">'.$codetitle.' GitHub</a></p>
                    </div>
                </div></div>');
             }else{
                // do nothing
             }
         }
     }
}
?>
