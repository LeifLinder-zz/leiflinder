<?PHP 
include('./includes/header.php');
?>
   <div class="container" id="page"> 

<?PHP
 if(isset($_GET['page'])){
     switch ($_GET['page']) {
        case "index":
            include('includes/index.php');
            break;
        case "about":
            include('includes/about.php');
            break;
        case "about2":
            include('includes/about2.php');
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
        case "contact":
            include('includes/contact.php');
            break;
        case "privacy":
            include('includes/privacy.php');
            break;
        default:
            include('includes/index.php');
    }
 }else{
     include('includes/index.php');
 }
?>

    </div><!-- /.container -->
    <!-- Footer -->
<?PHP
include('./includes/footer.php');
?>
