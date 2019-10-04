<?php
class resume
{
    var $xml_array = Array();
    var $xml_object;
    var $jobs = Array();
    var $personal_array = Array();
    var $resume_texts = Array();
    var $skills = Array();
    var $goals = Array();
    var $resume_texts_intro_p = Array();
   
    function __construct()
    {
        // load XML into object
        $xml_object = simplexml_load_file('../XML/resume.xml');
        $this->xml_object = $xml_object;
        // $this->xml_object_thing=$xml_object;
        // encode object into json file
        $json = json_encode($xml_object);
        // $this->jason_encode_object = $json;
        // decode json fil into multidimensional array
        $xml_array = json_decode($json, true);
        $this->xml_array = $xml_array;
        // $this->xml_array_thing = $xml_array;
        // extract array and assign to its own array
        // save as class property
        $this->jobs = $xml_array['jobs'];
        $this->personal_array = $xml_array['personalinfo'];       
        $this->resume_texts = $xml_array['resumetexts'];
        $this->resume_texts_intro_p = $xml_array['resumetexts']['intro']['p'];
        $this->skills = $xml_array['skills'];
        $this->goals = $xml_array['goals'];
    }
    
    function print_resume_intro_p(){
        $size = sizeof($this->resume_texts_intro_p);
        $resume_texts_intro_p = $this->resume_texts_intro_p;
        for($i=0;$i<$size;$i++){
            print('<p>'.$resume_texts_intro_p[$i].'</p');
        }
    }   

    function jobs()
    {
        $jobs = $this->jobs;
        $size = sizeOf($jobs['job']);      
        for ($i = 0; $i < $size; $i++) {
            $jobid       = $jobs['job'][$i]['jobid'];
            $jobtitle    = $jobs['job'][$i]['jobtitle'];
            $joblocation = $jobs['job'][$i]['joblocation'];
            $jobstart =   $jobs['job'][$i]['jobstart'];
            $jobstartyear =   $jobs['job'][$i]['jobstartyear'];
            $jobfinish =   $jobs['job'][$i]['jobfinish'];
            $jobfinishyear =   $jobs['job'][$i]['jobfinishyear'];
            $companyname = $jobs['job'][$i]['companyname'];
            $jobdescription = $jobs['job'][$i]['jobdescription'];            
        
            print('<div class="item">');
            print('<div class="meta">');
            print('<div class="upper-row">');
            print('<h3 class="job-title">'.$jobtitle.'</h3>');
            print('<div class="time">'.$jobstartyear.' - '.$jobfinishyear.'</div>');
            print('</div><!-- upper-row-->');
            print('</div><!--meta-->');
            print('<div class="company">');
            print($companyname);
            print('</div><!-- company -->');
            print('<div class="details"><p>');
            print($jobdescription);
            print('</p></div><!--//details-->');
            print('</div><!-- item -->');
        
        }
    }

    function ContactInfo(){
        print('
        <ul class="list-unstyled contact-list">

            <li class="phone"><strong>USA</strong> <a href="tel:12063304784">1 206 330 4784</a></li>

            <li class="phone"><strong>Norway</strong> <a href="tel:+47 46 901 863">+47 46 901 863</a></li>
            <br/>
            <li class="email"><i class="fa fa-envelope"></i><a href="mailto: leif@leiflinder.com">leif@leiflinder.com</a></li>

            <br/>

            <li class="linkedin"><i class="fab fa-linkedin-in"></i><a href="https://no.linkedin.com/in/leiflinder" target="_blank">linkedin</a></li>

            <li class="github"><i class="fab fa-github"></i> <a href="https://github.com/LeifLinder" target="_blank">github</a></li>

            <br/>
            <!--
            <li class="website"><i class="fa fa-globe"></i> <a href="http://punkmother.com" target="_blank">PUNKMOTHER</a></li>

            <li class="website"><i class="fa fa-globe"></i> <a href="http://leifmedia.com" target="_blank">LEIFMEDIA</a></li>

            <li class="website"><i class="fa fa-globe"></i> <a href="http://lindercreative.com" target="_blank">LINDERCREATIVE</a></li>
            -->
        </ul>
    ');
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
            $skills = $this->skills;
            $skilltitle = $skills['skill'][$i]['skilltitle']; 
            $skilldescription = $skills['skill'][$i]['skilldescription'];  
            print('<div class="item">');
            print('<div class="meta">');
            print('<div class="upper-row">');
            print('<h3 class="job-title">'.$skilltitle .'</h3>');
            print('<div class="time"></div>');
            print('</div><!--//upper-row-->');
            print('</div><!--//meta-->');
            print('<div class="details">');
            print($skilldescription);
            print('</div><!--//details-->');
            print('</div>');
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

    function print_XML_as_text(){ 
        $xml = new SimpleXMLElement('../XML/resume.xml'); 
       $output =  $xml->asXML();
    print($output);
    }
}
?>