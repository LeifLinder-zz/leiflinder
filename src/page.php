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
        case "index":
            include('includes/index.php');
            break;
        case "about":
            include('includes/about.php');
            break;
            case "about3":
            include('includes/about3.php');
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
        default:
        include('includes/index.php');
       // print('<h3>Index Include</h3>');
    }
 }else{
     include('includes/index.php');
   // print('<h3>Index Include</h3>');
 }
?>

    </div><!-- /.container -->
    <!-- Footer -->
<?PHP
include('./includes/footer.php');
?>
