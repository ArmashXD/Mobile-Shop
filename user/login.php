<?php 
include('header.php'); 


if ($_SERVER["REQUEST_METHOD"] == "POST"){  
  $email = htmlentities($_POST['email']);
  $password = htmlentities($_POST['password']);
  
  $login = $user->login($email,$password);  
  if($login){  
     header("location:../index.php");  
  }
  else
  {  
   print("
    <div aria-live='polite' aria-atomic='true' class='d-flex justify-content-center align-items-center' style='min-height: 200px;'>
    
      <!-- Then put toasts within -->
      <div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
        <div class='toast-header'>
          <strong class='mr-auto'>Error</strong>
          <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>
        <div class='toast-body'>
          Some error Occured, Please make sure you provided right details. Thank you!
        </div>
      </div>
    </div>");
  }  
}  
?>
    <!-- Login form start -->
    <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <h5 class="card-title text-center">Sign In</h5>
                <form class="form-signin" method="POST" name="login">
                  <div class="form-label-group">
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputEmail">Email address</label>
                  </div>
    
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">Password</label>
                  </div>
  
                  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="btn_login_submit">Sign in</button>
                  <hr class="my-4">
                  <a href="register.php" class="text-center">Sign Up</a>
                  <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
                  <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Login form end -->
    <?php include('footer.php')?>
