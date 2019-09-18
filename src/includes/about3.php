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


 <!-- bootstrap 3  <div id="about" class="tab-pane fade in active"> -->
 <div id="about" class="tab-pane fade show active"> <!-- bootstrap 4 -->
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

<!--
<div class="tab-pane fade show active" id="freetime" role="tabpanel" aria-labelledby="resume-tab">
			<div class="wrapper">
				<div class="sidebar-wrapper">
					<div class="profile-container">
						<?php // $personal->showPersonalArray($personal->personal_array);?>
						<p>Side panel</p>
					</div>
				</div>
				<div class="main-wrapper">
					<h3>Freetime</h3>
					<?php //$resumetexts->freetime();?>
				</div>
			</div>
		</div>
-->
