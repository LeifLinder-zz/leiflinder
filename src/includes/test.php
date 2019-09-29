<?php include( '../classes/class.resume.view.php');?>
<?php include( '../classes/class.education.view.php');?>
<?php $resume = new resume;?>
<?php $education = new education;?>

<link rel="stylesheet" href="./css/resume.css">

<div class="container">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="active nav-item"><a data-toggle="tab" class="nav-link active" href="#resume">Resume</a></li>
  <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#skills">Skills</a></li>
  <!--
  <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#achievments">Completed Projects</a></li>
  -->
  <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#eduction">Training / Education</a></li>
</ul>

<div class="tab-content">
 <div id="resume" class="tab-pane fade show active">
  <div class="wrapper">
      <div class="sidebar-wrapper">
			<div class="profile-container">
                <img class="profile whiteborder" src="http://localhost/leiflinder05/src/images/resume-icon2.png" alt="Resume Icon" width="150px" />
                <h1 class="name">Leif Linder</h1>
                <h3 class="tagline">Web Programmer</h3>
      </div><!--//profile-container-->
      <?PHP $resume->ContactInfo();?>
</div>
    <div class="main-wrapper">   
      <!-- cool feature that shows raw XML in modal ---- 
    <div class="XMLDatasource"><span><a href="#" data-toggle="modal" data-target="#resumeXML">XML Datasource</a></span></div>-->
    <section class="section summary-section">
            <section class="section experiences-section">
                <h2 class="section-title">Work History</h2>
                <?php $resume->jobs();?>
          </section>
    </div>
  </div>
</div>


  <div id="skills" class="tab-pane fade">
  <div class="wrapper">
  <div class="sidebar-wrapper">
					<div class="profile-container">
                    <a href="#">
                    <img class="profile whiteborder" src="http://localhost/leiflinder05/src/images/skills-icon.png" alt="Skills Icon" width="150px" />
          </a>
          <h1 class="name">Leif Linder</h1>
                <h3 class="tagline">Web Programmer</h3>
      </div><!--//profile-container-->
          <?PHP $resume->ContactInfo();?>
          </div>
    <div class="main-wrapper"> 
    <section class="section experiences-section">
    <h2 class="section-title">Coding Skills</h2>
    <?php $resume->skills();?>
</section>
</div>
  </div>
</div>



<div id="eduction" class="tab-pane fade">
  <div class="wrapper">
				<div class="sidebar-wrapper">
        <div class="profile-container">
                    <a href="#">
                    <img class="profile whiteborder" src="http://localhost/leiflinder05/src/images/training-icon.png" alt="Training Icon" width="150px" />
          </a>
          <h1 class="name">Leif Linder</h1>
                <h3 class="tagline">Web Programmer</h3>
      </div><!--//profile-container-->
          <?PHP $resume->ContactInfo();?>
          </div>
    <div class="main-wrapper"> 
    <?php $education->showEducation();?>
</div>
  </div>
</div>

</div>
</div>


<!--- MODALS ---------------------------------->

<div class="modal fade photoLargeModal" id="resumeXML" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="photo-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">XML Document</h5>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </button>
      </div>
    </div>
  </div>
</div>