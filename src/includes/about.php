<?php include('../classes/class.codeskills.view.php');?>
<?php include('../classes/class.about.view.php');?>
<?php $resumetexts = new about;?>

	<link rel="stylesheet" href="./css/resume.css">

	<div class="container">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item"> <a class="nav-link active" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="resume" aria-selected="true">About</a>
			</li>
			<li class="nav-item"> <a class="nav-link" id="freetime-tab" data-toggle="tab" href="#freetime" role="tab" aria-controls="freetime" aria-selected="false">Freetime</a>
			</li>
			<li class="nav-item"> <a class="nav-link" id="goals-tab" data-toggle="tab" href="#goals" role="tab" aria-controls="goals" aria-selected="false">Goals</a>
			</li>
		</ul>
	</div>


	<div class="tab-content" id="tabcontent">

		<div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="resume-tab">
			<div class="wrapper">
				<div class="sidebar-wrapper">
					<div class="profile-container">
						<p>Side panel</p>
					</div>
				</div>
				<div class="main-wrapper">
					<h4>About Me</h4>
					<?php // $resumetexts->aboutme();?>
					<?php // $resumetexts->personality();?>
				</div>
			</div>
		</div>
	


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

		
		<div class="tab-pane fade" id="goals" role="tabpanel" aria-labelledby="goals-tab">
			<div class="wrapper">
				<div class="sidebar-wrapper">
					<div class="profile-container">
						<?php //$personal->showPersonalArray($personal->personal_array);?>
						<h3>Side panel</h3>
					</div>
				</div>
				<div class="main-wrapper">
					<p>Goals</p>
				</div>
			</div>
		</div>
	</div>