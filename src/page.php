<?PHP 
include('./includes/header.php');
?>
   <div class="container" id="page"> 

<?PHP
 if(isset($_GET['page'])){
     //resume
     //portfolio
     //resume
     switch ($_GET['page']) {
        case "about":
            include('includes/about.php');
            break;
        case "photography":
            include('includes/photography.php');
            break;
        case "design":
            include('includes/design.php');
            break;
        case "code":
            include('includes/code.php');
            break;
        case "portfolio":
            include('includes/portfolio.php');
            break;
        case "resume":
            include('includes/resume.php');
            break;
        case "skills":
            include('includes/skills.php');
            break;
        case "skill_php":
            include('includes/skill_php.php');
            break;
        case "skill_javascript":
            include('includes/skill_javascript.php');
            break;
        case "skill_backend":
            include('includes/skill_backend.php');
            break;
        case "skill_frontend":
            include('includes/skill_frontend.php');
            break;
        case "cmswork":
            include('includes/cmswork.php');
            break;
        case "projects_php":
            include('includes/skill_php.php');
            break;
        default:
            echo "<p>Undefined</p>";
            include('includes/index.php');
    }
 }else{
  echo "<p>Undefined</p>";
  include('includes/index.php');
 // header('Location: ./index.php');
 }
?>

    </div><!-- /.container -->
    <!-- Footer -->
<?PHP
include('./includes/footer.php');
?>
