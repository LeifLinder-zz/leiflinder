<?php
class designs
{
var $photos_array = Array();
var $Website = Array();
var $Design = Array();
var $Logo = Array();

    function __construct()
    {
        // load XML into object
        $xml_object = simplexml_load_file('http://localhost/leiflinder05/XML/designs.xml');
        // encode object into json file
        $json = json_encode($xml_object);
        // decode json fil into multidimensional array
        $xml_array = json_decode($json, true);
        // extract photo array and assign to its own array
        // save as class property
        $this->photos_array = $xml_array['design'];
        // extract types of photos and build
        // new arrays by Type and Orientation
        $size = sizeOf($this->photos_array);
        for ($i = 0;$i < $size;$i++) {
            // create class property array for BW Vertical
            if ($this->photos_array[$i]['type']=="Website") {
                $this->Website[]=array(
                    'designid'=>$this->photos_array[$i]['designid'],
                    'title'=>$this->photos_array[$i]['title'],
                    'imgsrc'=>$this->photos_array[$i]['imgsrc'],
                    'imgsrcLarge'=>$this->photos_array[$i]['imgsrcLarge'],
                    'type'=>$this->photos_array[$i]['type'],
                    'description'=>$this->photos_array[$i]['description'],
                    'builddate'=>$this->photos_array[$i]['builddate']
                );
            }
            if ($this->photos_array[$i]['type']=="Design") {
                $this->Design[]=array(
                    'designid'=>$this->photos_array[$i]['designid'],
                    'title'=>$this->photos_array[$i]['title'],
                    'imgsrc'=>$this->photos_array[$i]['imgsrc'],
                    'imgsrcLarge'=>$this->photos_array[$i]['imgsrcLarge'],
                    'type'=>$this->photos_array[$i]['type'],
                    'description'=>$this->photos_array[$i]['description'],
                    'builddate'=>$this->photos_array[$i]['builddate']
                );
            }
            if ($this->photos_array[$i]['type']=="Logo") {
                $this->Logo[]=array(
                    'designid'=>$this->photos_array[$i]['designid'],
                    'title'=>$this->photos_array[$i]['title'],
                    'imgsrc'=>$this->photos_array[$i]['imgsrc'],
                    'imgsrcLarge'=>$this->photos_array[$i]['imgsrcLarge'],
                    'type'=>$this->photos_array[$i]['type'],
                    'description'=>$this->photos_array[$i]['description'],
                    'builddate'=>$this->photos_array[$i]['builddate']
                );
            }
        }
    }

    function picCharger($imageArray){
       // print(gettype($imageArray));
        $size = sizeOf($imageArray);
        for ($i = 0;$i < $size;$i++)
        {
            $designid = $imageArray[$i]['designid'];
            $title = $imageArray[$i]['title'];
            $imgsrc = $imageArray[$i]['imgsrc'];
            $imgsrcLarge = $imageArray[$i]['imgsrcLarge'];
         

            print ('<div class="col-lg-3 col-md-4 col-xs-6">
                <a href="#" data-toggle="modal" data-target="#ImageID'.$designid.'" class="d-block mb-4 h-100 photo-div">
                    <img class="img-fluid img-thumbnail" src="'.$imgsrc.'" alt="">
                </a>
            </div>
            
            <!-- Modal -->
<div class="modal fade photoLargeModal Horizontal" id="ImageID'.$designid.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
