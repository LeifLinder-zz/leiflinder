<?php
include('./includes/header.php');
?>

    <div id="content">

        <div class="container">
            <div class="row">
            <div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">Log in or create account.</p>
  <hr class="my-4">
  <form method="post" action="page.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
            </div>
        </div>

    </div>
    <!-- /.container -->
    <!-- Footer -->
    <?php
include('./includes/footer.php');
?>