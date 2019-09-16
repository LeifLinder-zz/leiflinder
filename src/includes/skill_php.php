 <!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col-sm-12 order-sm-1 col-md-8 order-md-12">
        <?php
        if($_GET['content']="section_php"){
          include('includes/project_php_intro.php');
          include('includes/widget_project_timeczar.php');
          include('includes/widget_project_tomato.php');
          include('includes/widget_project_norsk220.php');
          include('includes/widget_project_marathon_info.php');
          include('includes/widget_project_course_ent.php');
        }elseif($_GET['content']="timeczar"){
          print('<p>TimeCzar</p>');
        }else{
          print('<p>No content specified</p>');
        }
        ?>
    </div>
    <div class="col-sm-12 order-sm-12 order-sm-1 col-md-4 order-md-1">
      <?php
        include('./includes/widget_sidemenu_php.php');
      ?>
    </div>
  </div>
</div><!-- /.container -->