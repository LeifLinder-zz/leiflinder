<?php include( '../classes/class.about.view.php');?>
<?php include( '../classes/class.resume.view.php');?>
<?php include( '../classes/class.education.view.php');?>
<?php $resume = new resume;?>
<?php $education = new education;?>
<?php $resumetexts = new about;?>
<div class="container">
   <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="active nav-item tab_menu_link"><a data-toggle="tab" class="nav-link active" href="#about">About</a></li>
      <li class="nav-item tab_menu_link"><a data-toggle="tab" class="nav-link" href="#freetime">Free Time</a></li>
      <li class="nav-item tab_menu_link"><a data-toggle="tab" class="nav-link" href="#goals">Goals</a></li>
   </ul>

   <div class="tab-content">
      <div id="about" class="tab-pane fade show active">
         <div class="wrapper">
         <div class="main-wrapper clear_right">
         <?php $resumetexts->aboutme();?>
         </div>
            <div class="sidebar-wrapper">
               <div class="profile-container">
                  <img class="profile whiteborder resume_icons" src="./images/home-1001.png" alt="Resume Icon" /> 
                  <p class="myName">Leif Linder</p>
                  <p>Web Programmer</p>
               </div>
               <?PHP $resume->ContactInfo();?>
            </div>
            <br class="clear_left"/>
         </div>
      </div>



      <div id="freetime" class="tab-pane fade">
         <div class="wrapper">
            <div class="main-wrapper clear_right">
            <?php $resumetexts->freetime();?>
            </div>
            <div class="sidebar-wrapper">
               <div class="profile-container">
                  <a href="#">
                  <img class="profile whiteborder resume_icons" src="./images/freetime2-icon.png" alt="Skills Icon" />
                  </a>
                  <h3 class="name">Leif Linder</h3>
                  <p>Web Programmer</p>
               </div>
               <?PHP $resume->ContactInfo();?>
            </div>
            <br class="clear_left"/>
         </div>
      </div>


      <div id="goals" class="tab-pane fade"> 
         <div class="wrapper">
            <div class="main-wrapper clear_right">
                <?php $resumetexts->goals();?>
            </div>
            <div class="sidebar-wrapper">
               <div class="profile-container">
                  <a href="#">
                  <img class="profile whiteborder resume_icons" src="./images/goals-icon.png" alt="Skills Icon" />
                  </a>
                  <h3 class="name">Leif Linder</h3>
                  <p>Web Programmer</p>
               </div>
               <?PHP $resume->ContactInfo();?>
            </div>
            <br class="clear_left"/>
         </div>
      </div>

   </div>
</div>