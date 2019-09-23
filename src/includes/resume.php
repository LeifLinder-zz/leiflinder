<?php include( '../classes/class.resume.view.php');?>
<?php $resume = new resume;?>

<link rel="stylesheet" href="./css/resume.css">

<div class="container">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="active nav-item"><a data-toggle="tab" class="nav-link active" href="#resume">Resume</a></li>
  <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#skills">Skills</a></li>
  <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#achievments">Completed Projects</a></li>
  <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#eductiona">Training / Education</a></li>
</ul>

<div class="tab-content">
 <div id="resume" class="tab-pane fade show active">
  <div class="wrapper">
      <div class="sidebar-wrapper">
			<div class="profile-container">
                <a href="#">
            <img class="img-fluid rounded-circle mb-3 mb-md-0 center border1" id="leifpic" src="./assets/leif-1012.png" alt="">
          </a>
                 <?php $resume->showPersonalArray();?>
			</div>
        </div>
    <div class="main-wrapper">              
    <h3>Resume</h3>
    <p>Some content.</p>
    <?php $resume->jobs();?>
    </div>
  </div>
</div>


  <div id="skills" class="tab-pane fade">
  <div class="wrapper">
  <div class="sidebar-wrapper">
					<div class="profile-container">
                    <a href="#">
            <img class="img-fluid rounded-circle mb-3 mb-md-0 center border1" id="leifpic" src="./assets/leif-1012.png" alt="">
          </a>
                        <?php $resume->showPersonalArray();?>
					</div>
                </div>
    <div class="main-wrapper"> 
    <h3>Skills</h3>
    <?php $resume->skills();?>
</div>
  </div>
</div>


  <div id="achievments" class="tab-pane fade">
  <div class="wrapper">
				<div class="sidebar-wrapper">
					<div class="profile-container">
                    <a href="#">
            <img class="img-fluid rounded-circle mb-3 mb-md-0 center border1" id="leifpic" src="./assets/leif-1012.png" alt="">
          </a>
                        <?php $resume->showPersonalArray();?>
					</div>
                </div>
    <div class="main-wrapper"> 
    <h3>Goals</h3>
    <?php $resume->goals();?>
</div>
  </div>
</div>


<div id="education" class="tab-pane fade">
  <div class="wrapper">
				<div class="sidebar-wrapper">
					<div class="profile-container">
                    <a href="#">
            <img class="img-fluid rounded-circle mb-3 mb-md-0 center border1" id="leifpic" src="./assets/leif-1012.png" alt="">
          </a>
                        <?php $resume->showPersonalArray();?>
					</div>
                </div>
    <div class="main-wrapper"> 
    <h3>Goals</h3>
    <?php $resume->goals();?>
</div>
  </div>
</div>

</div>
</div>