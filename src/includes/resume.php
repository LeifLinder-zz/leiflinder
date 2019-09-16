<?php include('../classes/class.resume.view.php');?>
<?php $personal = new codeskills;?>
<link rel="stylesheet" href="./css/resume.css">

<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="resume-tab" data-toggle="tab" href="#resume" role="tab" aria-controls="resume" aria-selected="true">Resume</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="skills-tab" data-toggle="tab" href="#skills" role="tab" aria-controls="skills" aria-selected="false">Skills</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="achievements-tab" data-toggle="tab" href="#achievements" role="tab" aria-controls="achievements" aria-selected="false">Achievments</a>
        </li>
    </ul>
</div>

<div class="tab-content" id="resumeTab">

    <div class="tab-pane fade show active" id="resume" role="tabpanel" aria-labelledby="resume-tab">
        <div class="wrapper">
        <div class="sidebar-wrapper">
        <div class="profile-container">
        <?php $personal->showPersonalArray($personal->personal_array);?>
        </div>
        </div>
            <h3>Resume</h3>
            <?php $personal->showIntroText(); ?>
        </div>
    </div>

    
    <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
        <div class="wrapper">
        <div class="sidebar-wrapper">
        <div class="profile-container">
        <?php $personal->showPersonalArray($personal->personal_array);?>
        </div>
        </div>
            <p>Skills</p>
        </div>
    </div>


    <div class="tab-pane fade" id="achievements" role="tabpanel" aria-labelledby="achievements-tab">
        <div class="wrapper">
            <div class="sidebar-wrapper">
                <div class="profile-container">
                <?php $personal->showPersonalArray($personal->personal_array);?>
                </div>
           </div>
            <p>Achievements</p>
        </div>
    </div>

</div>
