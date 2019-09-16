<?php
class about
{
    
    var $resume_array = Array();
    var $personal_array = Array();
    var $resume_texts = Array();
   
    function __construct()
    {
        // load XML into object
        $xml_object = simplexml_load_file('../XML/resume.xml');
        // $this->xml_object_thing=$xml_object;
        // encode object into json file
        $json = json_encode($xml_object);
        // $this->jason_encode_object = $json;
        // decode json fil into multidimensional array
        $xml_array = json_decode($json, true);
        // $this->xml_array_thing = $xml_array;
        // extract array and assign to its own array
        // save as class property
        $this->resume_array = $xml_array['jobs'];
        $this->personal_array = $xml_array['personalinfo'];       
        $this->resume_texts = $xml_array['resumetexts'];
    }
    

    
    function showJobsArray($jobsdone)
    {
        // print(gettype($imageArray));
        $size = sizeOf($jobsdone['job']);
        /*
        print('<pre>');
        print_r($jobsdone);
        print('</pre>');
        */
        
        for ($i = 0; $i < $size; $i++) {
            $jobid       = $jobsdone['job'][$i]['jobid'];
            $jobtitle    = $jobsdone['job'][$i]['jobtitle'];
            $joblocation = $jobsdone['job'][$i]['joblocation'];
            
            
            print('<div class="spec"><div class="card linder-card">
      <div class="card-body">
        <h4 class="card-title">' . $jobid . '</h4>
        <p class="card-text">' . $jobtitle . '</p>
        <p><a href="#">' . $joblocation . ' GitHub</a></p>
    </div>
</div></div>');
        }     
       // print('<p>'.$size.'</p>');  
    }

    function showPersonalArray($personalArray)
    {
        /*
        print('<pre>');
        print_r($this->personal_array);
        print('</pre>');
        */
        foreach($this->personal_array AS $key => $value){
           // print('<p>'.is_array($value).'</p>');
           // print('<p>'.is_string($value).'</p>');
            if(is_string($value)==1){
                print('<p>'.$value.'</p>');
            }elseif(is_array($value)==1){
               // print('<p>'.sizeof($value).'</p>');
                for($i=0;$i<sizeof($value);$i++){
                    foreach ($value[$i] as $index => $content){
                        print('<p>'.$content.'</p>');
                    }
                  //  print('<pre>');
                  //  print_r($value[$i]);
                  //  print('</pre>');
                }
            }else{
                print('<p>I have no idea what this is</p>');
            }
            /*
            if(is_array($value)==TRUE){
                for($i=0;$i<sizeof($value);$i++){
                    print($value[$i]);
                }
            }
            else{
                print('<p>'.$key.' '.$value.'</p>');
            }
            */
        }
       // $size = sizeOf($personalArray['personalinfo']);
        /*
        for ($i = 0; $i < $size; $i++) {
            $myname       = $personalArray['personalinfo'][$i]['myname'];
            $myemail    = $personalArray['personalinfo'][$i]['myemail'];
            $mylinkin = $personalArray['personalinfo'][$i]['mylinkin'];

            print('<div class="spec"><div class="card linder-card">
      <div class="card-body">
        <h4 class="card-title">' . $myname . '</h4>
        <p class="card-text">' . $myemail . '</p>
        <p><a href="#">' . $mylinkin . ' GitHub</a></p>
    </div>
</div></div>');
        }
        */
    }
    /*
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
    */
}
?>