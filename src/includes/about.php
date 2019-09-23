<?php include( '../classes/class.about.view.php');?>
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
               <div class="profile-container">
                  <a href="#">
                  <img class="img-fluid rounded-circle mb-3 mb-md-0 center border1" id="leifpic" src="./assets/leif-1012.png" alt="">
                  </a>
                  <?php $resumetexts->personalinfo();?>
               </div>
            </div>
            <div class="main-wrapper">
               <h3>HOME</h3>
               <p>Some content.</p>
               <?php $resumetexts->aboutme();?>
            </div>
         </div>
      </div>
      <div id="freetime" class="tab-pane fade">
         <div class="wrapper">
            <div class="sidebar-wrapper">
               <div class="profile-container">
                  <a href="#">
                  <img class="img-fluid rounded-circle mb-3 mb-md-0 center border1" id="leifpic" src="./assets/leif-1012.png" alt="">
                  </a>
                  <?php $resumetexts->personalinfo();?>
               </div>
            </div>
            <div class="main-wrapper">
               <h3>Freetime</h3>
               <?php $resumetexts->freetime();?>
            </div>
         </div>
      </div>
      <div id="goals" class="tab-pane fade">
         <div class="wrapper">
            <div class="sidebar-wrapper">
               <div class="profile-container">
                  <a href="#">
                  <img class="img-fluid rounded-circle mb-3 mb-md-0 center border1" id="leifpic" src="./assets/leif-1012.png" alt="">
                  </a>
                  <?php $resumetexts->personalinfo();?>
               </div>
            </div>
            <div class="main-wrapper">
               <h3>Goals</h3>
               <?php $resumetexts->goals();?>
            </div>
         </div>
      </div>
   </div>
</div>