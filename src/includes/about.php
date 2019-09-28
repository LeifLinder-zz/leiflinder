<?php include( '../classes/class.about.view.php');?>
<?php include( '../classes/class.resume.view.php');?>
<?php include( '../classes/class.education.view.php');?>
<?php $resume = new resume;?>
<?php $education = new education;?>
<?php $resumetexts = new about;?>
<link rel="stylesheet" href="./css/resume.css">
<div class="container">
   <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="active nav-item"><a data-toggle="tab" class="nav-link active" href="#about">About</a></li>
      <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#freetime">Freetime</a></li>
      <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#goals">Goals</a></li>
   </ul>
   <div class="tab-content">
      <div id="about" class="tab-pane fade show active">
         <div class="wrapper">
            <div class="sidebar-wrapper">
               <img class="profile whiteborder" src="http://localhost/leiflinder05/src/images/home-1001.png" alt="Skills Icon" width="150px" />
               <?PHP $resume->ContactInfo();?>
            </div>
            <div class="main-wrapper">
               <!-- <h3>HOME</h3> -->
               <?php $resumetexts->aboutme();?>
            </div>
         </div>
      </div>
      <div id="freetime" class="tab-pane fade">
         <div class="wrapper">
            <div class="sidebar-wrapper">
               <img class="profile whiteborder" src="http://localhost/leiflinder05/src/images/freetime-icon.png" alt="Freetime Icon" width="150px" />
               <!--
                  <h1 class="name">Leif Linder</h1>
                  <h3 class="tagline">Web Programmer</h3>
                  -->
               <?PHP $resume->ContactInfo();?>
            </div>
            <div class="main-wrapper">
               <!--  <h3>Freetime</h3>-->
               <?php $resumetexts->freetime();?>
            </div>
         </div>
      </div>
      <div id="goals" class="tab-pane fade">
         <div class="wrapper">
            <div class="sidebar-wrapper">
               <img class="profile whiteborder" src="http://localhost/leiflinder05/src/images/goals-icon.png" alt="Skills Icon" width="150px" />
               </a>
               <?PHP $resume->ContactInfo();?>
            </div>
            <div class="main-wrapper">
               <!-- <h3>Goals</h3>-->
               <?php $resumetexts->goals();?>
            </div>
         </div>
      </div>
   </div>
</div>