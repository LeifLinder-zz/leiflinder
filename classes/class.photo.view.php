<?php
class photos
{
var $photos_array = Array();
var $BW_Vertical = Array();
var $BW_Horizontal = Array();
var $Color_Vertical = Array();
var $Color_Horizontal = Array();

    function __construct()
    { 
        // load XML into object
        $xml_object = simplexml_load_file('http://localhost/leiflinder05/XML/photos.xml');
        // encode object into json file
        $json = json_encode($xml_object);
        // decode json fil into multidimensional array
        $xml_array = json_decode($json, true);
        // extract photo array and assign to its own array
        // save as class property
        $this->photos_array = $xml_array['photo'];
        // extract types of photos and build
        // new arrays by Type and Orientation
        $size = sizeOf($this->photos_array);
        for ($i = 0;$i < $size;$i++)
        {
            // create class property array for BW Vertical
            if(($this->photos_array[$i]['type']=="BW")&&($this->photos_array[$i]['orientation']=="Vertical")){
                $this->BW_Vertical[]=array(
                    'photoid'=>$this->photos_array[$i]['photoid'],
                    'title'=>$this->photos_array[$i]['title'],
                    'imgsrc'=>$this->photos_array[$i]['imgsrc'],
                    'imgsrcLarge'=>$this->photos_array[$i]['imgsrcLarge'],
                    'type'=>$this->photos_array[$i]['type'],
                    'orientation'=>$this->photos_array[$i]['orientation']
                );
            }
            // create class property array for BW Horizontal
            if(($this->photos_array[$i]['type']=="BW")&&($this->photos_array[$i]['orientation']=="Horizontal")){
                $this->BW_Horizontal[]=array(
                    'photoid'=>$this->photos_array[$i]['photoid'],
                    'title'=>$this->photos_array[$i]['title'],
                    'imgsrc'=>$this->photos_array[$i]['imgsrc'],
                    'imgsrcLarge'=>$this->photos_array[$i]['imgsrcLarge'],
                    'type'=>$this->photos_array[$i]['type'],
                    'orientation'=>$this->photos_array[$i]['orientation']
                );
            }
            // create class property array for Color Vertical
            if(($this->photos_array[$i]['type']=="Color")&&($this->photos_array[$i]['orientation']=="Vertical")){
                $this->Color_Vertical[]=array(
                    'photoid'=>$this->photos_array[$i]['photoid'],
                    'title'=>$this->photos_array[$i]['title'],
                    'imgsrc'=>$this->photos_array[$i]['imgsrc'],
                    'imgsrcLarge'=>$this->photos_array[$i]['imgsrcLarge'],
                    'type'=>$this->photos_array[$i]['type'],
                    'orientation'=>$this->photos_array[$i]['orientation']
                );
            }
            // create class property array for Color Horizontal
            if(($this->photos_array[$i]['type']=="Color")&&($this->photos_array[$i]['orientation']=="Horizontal")){
                $this->Color_Horizontal[]=array(
                    'photoid'=>$this->photos_array[$i]['photoid'],
                    'title'=>$this->photos_array[$i]['title'],
                    'imgsrc'=>$this->photos_array[$i]['imgsrc'],
                    'imgsrcLarge'=>$this->photos_array[$i]['imgsrcLarge'],
                    'type'=>$this->photos_array[$i]['type'],
                    'orientation'=>$this->photos_array[$i]['orientation']
                );
            }
        }

    }

    function photos_view($type = "BW", $orientation = "Horizontal")
    {
        if($type=="BW"&&$orientation == "Horizontal"){
            $this->photos_array = $this->BW_Horizontal;
        }elseif($type=="BW"&&$orientation == "Vertical"){
            $this->photos_array = $this->BW_Vertical;
        }elseif($type=="Color"&&$orientation == "Horizontal"){
            $this->photos_array = $this->Color_Horizontal;
        }elseif($type=="Color"&&$orientation == "Vertical"){
            $this->photos_array = $this->Color_Horizontal;
        }else{
            $this->photos_array = $this->BW_Horizontal;
        }

        $size = sizeOf($this->photos_array);
        for ($i = 0;$i < $size;$i++)
        {
            $photoid = $this->photos_array[$i]['photoid'];
            $title = $this->photos_array[$i]['title'];
            $imgsrc = $this->photos_array[$i]['imgsrc'];
            //$image_path = './assets/BW/Vertical/10026.png';
            print ('<div class="col-lg-3 col-md-4 col-xs-6"><a href="#" class="d-block mb-4 h-100 photo-div">
            <img class="img-fluid img-thumbnail"
            src="'.$imgsrc.'" alt="">
            </a>
            <p>ID: ' . $photoid . '</p>
            </div>');
        }
    }


    function picCharger($imageArray){
       // print(gettype($imageArray));
        $size = sizeOf($imageArray);
        for ($i = 0;$i < $size;$i++)
        {
            $photoid = $imageArray[$i]['photoid'];
            $title = $imageArray[$i]['title'];
            $imgsrc = $imageArray[$i]['imgsrc'];
            $imgsrcLarge = $imageArray[$i]['imgsrcLarge'];
            $orientation = $imageArray[$i]['orientation'];

            print ('<div class="col-lg-3 col-md-4 col-xs-6">
                <a href="#" data-toggle="modal" data-target="#ImageID'.$photoid.'" class="d-block mb-4 h-100 photo-div">
                    <img class="img-fluid img-thumbnail" src="'.$imgsrc.'" alt="">
                </a>
            </div>
            
            <!-- Modal -->
<div class="modal fade photoLargeModal '.$orientation.'" id="ImageID'.$photoid.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="photo-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">'.$title.'</h5>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </button>
      </div>
      <div class="modal-body">
        <img src="'.$imgsrcLarge.'" alt=""/>
      </div>
    </div>
  </div>
</div>');
        }
    }

}
?>
