
<link rel="stylesheet" href="./css/resume.css">

<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About Me</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="freetime-tab" data-toggle="tab" href="#freetime" role="tab" aria-controls="freetime" aria-selected="false">What I Like</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">What I Want</a>
        </li>
    </ul>
</div>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="wrapper">
            <?PHP include( './includes/sidebar.php');?>
            <div class="main-wrapper">
            <section class="section summary-section">
                <h2 class="section-title">About Me</h2>
                <div class="summary">
            <?PHP // include( './includes/my_story.php');?>
            </div><!--//summary-->
            </section><!--//section-->
        </div><!--//main-body-->
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
