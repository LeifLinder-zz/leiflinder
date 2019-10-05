<?php include( '../classes/class.resume.view.php');?>
<?php include( '../classes/class.education.view.php');?>
<?php $resume = new resume;?>
<?php $education = new education;?>
<!--<link rel="stylesheet" href="./css/resume.css">-->
<div class="container">
   <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="active nav-item tab_menu_link"><a data-toggle="tab" class="nav-link active" href="#resume">Resume</a></li>
      <li class="nav-item tab_menu_link"><a data-toggle="tab" class="nav-link" href="#skills">Skills</a></li>
      <li class="nav-item tab_menu_link"><a data-toggle="tab" class="nav-link" href="#eduction">Education</a></li>
   </ul>
<!--
<style>
    .sidebar-wrapper{
        display:block;
        float:right;
        width:28%;
    }
    .main-wrapper {
        display:block;
        float:left;
        width:70%;
        clear:both;
    }
    @media screen and (max-width: 700px) {
            .sidebar-wrapper{
            float:none;
            width:100%;
        }
            .main-wrapper {
            float:none;
            width:100%;
        }
        .resume_icons {
            width:30%;
        }
   }

</style>
-->

   <div class="tab-content">
      <div id="resume" class="tab-pane fade show active">
         <div class="wrapper">
         <div class="main-wrapper clear_right">
            <?php $resume->jobs();?>
         </div>
            <div class="sidebar-wrapper">
               <div class="profile-container">
                  <img class="profile whiteborder resume_icons" src="./images/resume-icon2.png" alt="Resume Icon" /> 
                  <p class="myName">Leif Linder</p>
                  <P>Web Programmer</p>
               </div>
               <?PHP $resume->ContactInfo();?>
            </div>
            <br class="clear_left"/>
         </div>
      </div>



      <div id="skills" class="tab-pane fade">
         <div class="wrapper">
            <div class="main-wrapper clear_right">
                <?php $resume->skills();?>
            </div>
            <div class="sidebar-wrapper">
               <div class="profile-container">
                  <a href="#">
                  <img class="profile whiteborder resume_icons" src="./images/skills-icon.png" alt="Skills Icon" />
                  </a>
                  <h3 class="name">Leif Linder</h3>
                  <h4 class="tagline">Web Programmer</h4>
               </div>
               <?PHP $resume->ContactInfo();?>
            </div>
            <br class="clear_left"/>
         </div>
      </div>


      <div id="eduction" class="tab-pane fade"> 
         <div class="wrapper">
            <div class="main-wrapper clear_right">
                <?php $education->showEducation();?>
            </div>
            <div class="sidebar-wrapper">
               <div class="profile-container">
                  <a href="#">
                  <img class="profile whiteborder resume_icons" src="./images/training-icon.png" alt="Skills Icon" />
                  </a>
                  <h3 class="name">Leif Linder</h3>
                  <h4 class="tagline">Web Programmer</h4>
               </div>
               <?PHP $resume->ContactInfo();?>
            </div>
            <br class="clear_left"/>
         </div>
      </div>

   </div>
</div>
