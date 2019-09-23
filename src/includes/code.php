<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Code</li>
   </ol>
</nav>
<!-- Page Content -->
<div class="container">
   <div class="row">
      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
         <?PHP include('./includes/widget_frontend.php');?>
         <?PHP include('./includes/widget_backend.php');?>
      </div>
      <div class="col-md-8">
         <?php include('../classes/class.codeskills.view.php');?>
         <?php $codeskills = new codeskills; ?>
         <?php       
            if(isset($_GET['codeid'])){
             $codeid = $_GET['codeid'];
            }else{
             $_GET['codeid']=1000;
             $codeid = $_GET['codeid'];
            }
            if ($_GET['codeid'] != 1000) {
              $codeid = $_GET['codeid'];
              $codeskills->showCodeSkillsOnCondition($codeskills->codeskills_array, $codeid);
            }else{
             $codeskills->showCodeSkillsArray($codeskills->codeskills_array);
            }
            ?>
      </div>
   </div>
   <!-- /.row -->
</div>
<!-- /.container -->