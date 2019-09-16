<?PHP 
include('./includes/header.php');
?>

<div lcass="container">
    <div id="widthdiv"></div>
</div>
<!-- Page Content -->
<div class="container" style="min-height:850px;">

    <!-- Page Heading -->

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Library</li>
        </ol>
    </nav>

    <div class="row text-center text-lg-left">
        <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail"
                    src="http://localhost/leiflinder05/src/assets/Color/Vertical/10038.png" alt="">
            </a>
        </div>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->

<!-- Footer -->
<?PHP 
include('./includes/footer.php');
?>