<?php
class resume
{
    
    var $jobs = Array();
    var $personal_array = Array();
    var $resume_texts = Array();
    var $skills = Array();
    var $goals = Array();
   
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
        $this->jobs = $xml_array['jobs'];
        $this->personal_array = $xml_array['personalinfo'];       
        $this->resume_texts = $xml_array['resumetexts'];
        $this->skills = $xml_array['skills'];
        $this->goals = $xml_array['goals'];
    }
    

    
    function jobs()
    {
        $jobs = $this->jobs;
        $size = sizeOf($jobs['job']);      
        for ($i = 0; $i < $size; $i++) {
            $jobid       = $jobs['job'][$i]['jobid'];
            $jobtitle    = $jobs['job'][$i]['jobtitle'];
            $joblocation = $jobs['job'][$i]['joblocation'];    
            print('<div class="spec"><div class="card linder-card">
      <div class="card-body">
        <h4 class="card-title">' . $jobid . '</h4>
        <p class="card-text">' . $jobtitle . '</p>
        <p><a href="#">' . $joblocation . ' GitHub</a></p>
    </div>
</div></div>');
        }      
    }

    function showPersonalArray()
    {
        $personalArray = $this->personal_array;
        foreach($this->personal_array AS $key => $value){
            if(is_string($value)==1){
                print('<p>'.$value.'</p>');
            }elseif(is_array($value)==1){
                for($i=0;$i<sizeof($value);$i++){
                    foreach ($value[$i] as $index => $content){
                        print('<p>'.$content.'</p>');
                    }
                }
            }else{
                print('<p>I have no idea what this is</p>');
            }
        }
    }

    function skills()
    {
        $skills = $this->skills;
        $size = sizeOf($skills['skill']);      
        for ($i = 0; $i < $size; $i++) {
            $skill = $skills['skill'][$i];   
            print('<p>'.$skill.'</p>');
        }      
    }
    function goals()
    {
        $goals = $this->goals;
        $size = sizeOf($goals['goal']);      
        for ($i = 0; $i < $size; $i++) {
            $goal = $goals['goal'][$i];   
            print('<p>'.$goal.'</p>');
        }      
    }
}
?>