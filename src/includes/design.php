
<ul class="list-group list-group-horizontal phototypes">
<a href="./page.php?page=design&type=website"><li class="list-group-item">Web Mockups</li></a>
<a href="./page.php?page=design&type=design"><li class="list-group-item">Design</li></a>
<a href="./page.php?page=design&type=logo"><li class="list-group-item">Logo</li></a>
</ul>
    
<?PHP
$type="website";
 if (isset($_GET['page'])) {
     if (isset($_GET['type'])) {
         $type = $_GET['type'];
     } else {
         $type = "website";
     }
 }
?>
<?php
    include('../classes/class.design.view.php');
    $designclass = new designs;
?>



    <div class="row text-center text-lg-left">
    <?php
    //$photoclass->photos_view($type, $orientation);  
    ?>
    <?php

    switch ($type) {
      case 'website':
      $designclass->picCharger($designclass->Website);
          break;
      case 'design':
     // $designclass->design_banner_pic('1011h');
      $designclass->picCharger($designclass->Design);
          break;
      case 'logo':
      $designclass->picCharger($designclass->Logo);
          break;
      default:
    print('<p>Not Found</p>');
  }
    
    ?>

    </div>
