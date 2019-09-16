
<ul class="list-group list-group-horizontal phototypes">
<a href="./page.php?page=photography&type=BW&orientation=Horizontal"><li class="list-group-item">BW Horizontal</li></a>
<a href="./page.php?page=photography&type=BW&orientation=Vertical"><li class="list-group-item">BW Vertical</li></a>
<a href="./page.php?page=photography&type=Color&orientation=Horizontal"><li class="list-group-item">Color Horizontal</li></a>
<a href="./page.php?page=photography&type=Color&orientation=Vertical"><li class="list-group-item">Color Vertical</li></a>
</ul>
    
<?PHP
$orientation="orientaiton";
$type="type";
 if(isset($_GET['page'])){
   if(isset($_GET['type'])){
     $type = $_GET['type'];
   }else{
    $type = "BW";
   }
   if(isset($_GET['orientation'])){
    $orientation = $_GET['orientation'];
  }else{
   $orientation = "Horizontal";
  }
 }else{
 }
?>
<?php
    include('../classes/class.photo.view.php');
    $photoclass = new photos;
?>


    <div class="row text-center text-lg-left">
    <p><?php //print($type.' -- '.$orientation);?></p>
    <!--
    <p> BW_Vertical <?php print(sizeof($photoclass->BW_Vertical))?> </p>
    <p> BW_Horizontal <?php print(sizeof($photoclass->BW_Horizontal))?> </p> 
    <p> Color_Horizontal <?php print(sizeof($photoclass->Color_Horizontal))?> </p> 
    <p> Color_Vertical <?php print(sizeof($photoclass->Color_Vertical))?> </p> 
    -->
    </div>

    <div class="row text-center text-lg-left">
    <?php
    //$photoclass->photos_view($type, $orientation);  
    ?>
    <?php
            if(($type=="BW") && ($orientation == "Horizontal")){
              $photoclass->picCharger($photoclass->BW_Horizontal);
        }elseif(($type=="BW") && ($orientation == "Vertical")){
          //print(sizeof($photoclass->BW_Vertical));
          $photoclass->picCharger($photoclass->BW_Vertical);
        }elseif(($type=="Color") && ($orientation == "Horizontal")){
         // print(sizeof($photoclass->Color_Horizontal));
          $photoclass->picCharger($photoclass->Color_Horizontal);
        }elseif(($type=="Color") && ($orientation = "Vertical")){
         // print(sizeof($photoclass->Color_Vertical));
          $photoclass->picCharger($photoclass->Color_Vertical);
        }else{
          //print(sizeof($photoclass->BW_Horizontal));
            $photoclass->picCharger($photoclass->BW_Horizontal);
        }
    ?>

    </div>
