
<link rel="stylesheet" href="./css/resume.css">

<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">About Me</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="freetime-tab" data-toggle="tab" href="#freetime" role="tab" aria-controls="freetime" aria-selected="false">Freetime</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="goals-tab" data-toggle="tab" href="#goals" role="tab" aria-controls="goals" aria-selected="false">Goals</a>
        </li>
    </ul>
</div>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab">
        <div class="wrapper">
            <?php include('./includes/sidebar.php');?>
            <div class="main-wrapper">
            <section class="section summary-section">
                <h2 class="section-title">About Me</h2>
                <div class="summary">
            <?php // include( './includes/my_story.php');?>
            <p>About value from XML file</p>
            </div><!--//summary-->
            </section><!--//section-->
        </div><!--//main-body-->
        </div>
    </div>

    <div class="tab-pane fade show active" id="freetime" role="tabpanel" aria-labelledby="freetime-tab">
        <div class="wrapper">
            <?php include('./includes/sidebar.php');?>
            <div class="main-wrapper">
            <section class="section summary-section">
                <h2 class="section-title">Freetime</h2>
                <div class="summary">
            <?php // include( './includes/my_story.php');?>
            <p>Freetime value from XML file</p>
            </div><!--//summary-->
            </section><!--//section-->
        </div><!--//main-body-->
</div>
</div>

    <div class="tab-pane fade show active" id="goals" role="tabpanel" aria-labelledby="goals-tab">
        <div class="wrapper">
            <?php include('./includes/sidebar.php');?>
            <div class="main-wrapper">
                <section class="section summary-section">
                    <h2 class="section-title">Freetime</h2>
                    <div class="summary">
                <?php // include( './includes/my_story.php');?>
                <p>Goals value from XML file</p>
            </div><!--//summary-->
            </section><!--//section-->
        </div><!--//main-body-->
    </div>
    

</div>