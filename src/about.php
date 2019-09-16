<?php include( '../classes/class.about.view.php');?>
<?php include( './includes/header.php');?>
<link rel="stylesheet" href="./css/resume.css">

<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#about" role="tab" aria-controls="home" aria-selected="true">About Me</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="freetime-tab" data-toggle="tab" href="#freetime" role="tab" aria-controls="freetime" aria-selected="false">Freetime</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">What I Want</a>
        </li>
    </ul>
</div>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab">
        <div class="wrapper">
            <?PHP include( './includes/sidebar.php');?>
            <?PHP include( './includes/my_story.php');?>
        </div>
    </div>
    <div class="tab-pane fade" id="freetime" role="tabpanel" aria-labelledby="profile-tab">
        <div class="wrapper">
            <?PHP include( './includes/sidebar.php');?>
            <?PHP include( './includes/my_fun.php');?>
        </div>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="wrapper">
            <?PHP include( './includes/sidebar.php');?>
            <?PHP include( './includes/my_ambitions.php');?>
        </div>
    </div>
</div>
<?php include( './includes/footer.php');?>