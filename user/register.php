<?php
  include('header.php');

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $fname = htmlentities($_POST['fname']);
  $lname = htmlentities($_POST['lname']);
  $email = htmlentities($_POST['email']);
  $password = htmlentities($_POST['password']);
    

  $register = $user->register($fname,$lname,$email,$password);

  if($register){
    header("Location:login.php");
  }
  else{
    echo "Error !";
  }
  }
?>

<!-- Register form start -->

<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign Up</h5>
            <form class="form-signin" method="POST">
              <div class="form-label-group">
                <input type="text" name="fname" id="inputFname" class="form-control" placeholder="Enter first name" required autofocus>
                <label for="inputFname">first name</label>
              </div>

              <div class="form-label-group">
                <input type="text" name="lname" id="inputLname" class="form-control" placeholder="Enter last name" required>
                <label for="inputLname">last name</label>
              </div>
              <div class="form-label-group">
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Enter email" required>
                <label for="inputEmail">Email</label>
              </div>       
              
              <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Enter password" required>
                <label for="inputPassword">Password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="" >Sign uP</button>
              <hr class="my-4">
              <a href="register.php" class="text-center">Sign In</a>

              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Register form end -->

<?php include('footer.php')?>