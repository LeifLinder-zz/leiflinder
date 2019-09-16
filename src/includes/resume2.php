<?php include('../classes/class.resume.view.php');?>

<link rel="stylesheet" href="./css/resume.css">


<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="resume-tab" data-toggle="tab" href="#resume" role="tab" aria-controls="resume" aria-selected="true">About Me</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="skills-tab" data-toggle="tab" href="#skills" role="tab" aria-controls="skills" aria-selected="false">Skills</a>
        </li>
    </ul>
</div>




<div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" src="assets/images/Leif_Linder.png" alt="Leif Linder : Central Park NYC 2009" width="150px" />
                <h1 class="name">Leif Linder</h1>
                <h3 class="tagline">PHP Developer</h3>
        </div><!--//profile-container-->
    <div class="contact-container container-block">
            <?php $personal = new codeskills;?>
            <?php $personal->showPersonalArray($personal->personal_array);?>
    </div><!--//contact-container-->
 </div>
        
        <div class="main-wrapper">


        <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="wrapper">
            <?PHP include( './includes/sidebar.php');?>
            <?php $personal->showIntroText();?>
            </div>
    </div>


    <div class="tab-pane fade" id="freetime" role="tabpanel" aria-labelledby="profile-tab">
        <div class="wrapper">
            <?PHP include( './includes/sidebar.php');?>
        <?php $jobs = new codeskills;?>
        <?php //$jobs->showJobsArray($jobs->codeskills_array);?>
    </div>

    </div>
          </div>
        </div><!--//main-body-->
    </div>
    <p>&nbsp;</p>

