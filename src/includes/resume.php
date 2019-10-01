<?php include( '../classes/class.resume.view.php');?>
<?php include( '../classes/class.education.view.php');?>
<?php $resume = new resume;?>
<?php $education = new education;?>
<!--<link rel="stylesheet" href="./css/resume.css">-->
<div class="container">
   <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="active nav-item"><a data-toggle="tab" class="nav-link active" href="#resume">Resume</a></li>
      <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#skills">Skills</a></li>
      <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#eduction">Education</a></li>
   </ul>

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
        border:solid red 2px;
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


   <div class="tab-content" style="border:solid green 2px;">
      <div id="resume" class="tab-pane fade show active">
         <div class="wrapper">
         <div class="main-wrapper clear_right">
            <?php $resume->jobs();?>
         </div>
            <div class="sidebar-wrapper" style="border:solid red 2px;">
               <div class="profile-container">
                  <img class="profile whiteborder resume_icons" src="http://localhost/leiflinder05/src/images/resume-icon2.png" alt="Resume Icon" />
                  <h1 class="name">Leif Linder</h1>
                  <h3 class="tagline">Web Programmer</h3>
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
            <div class="sidebar-wrapper" style="border:solid red 2px">
               <div class="profile-container">
                  <a href="#">
                  <img class="profile whiteborder resume_icons" src="http://localhost/leiflinder05/src/images/skills-icon.png" alt="Skills Icon" />
                  </a>
                  <h1 class="name">Leif Linder</h1>
                  <h3 class="tagline">Web Programmer</h3>
               </div>
               <!--//profile-container-->
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
            <div class="sidebar-wrapper" style="border:solid red 2px">
               <div class="profile-container">
                  <a href="#">
                  <img class="profile whiteborder resume_icons" src="http://localhost/leiflinder05/src/images/training-icon.png" alt="Skills Icon" />
                  </a>
                  <h1 class="name">Leif Linder</h1>
                  <h3 class="tagline">Web Programmer</h3>
               </div>
               <!--//profile-container-->
               <?PHP $resume->ContactInfo();?>
            </div>
            <br class="clear_left"/>
         </div>
      </div>

   </div>
</div>
