i<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

  // Check if username is empty
  if(empty(trim($_POST["username"]))){
    $username_err = "Please enter username.";
  } else{
    $username = trim($_POST["username"]);
  }
  
  // Check if password is empty
  if(empty(trim($_POST["password"]))){
    $password_err = "Please enter your password.";
  } else{
    $password = trim($_POST["password"]);
  }
  
  // Validate credentials
  if(empty($username_err) && empty($password_err)){
    if ($username == "scg" && $password == "Holly2014") {
      session_start();
      
      // Store data in session variables
      $_SESSION["loggedin"] = true;
      $_SESSION["id"] = $id;
      $_SESSION["username"] = $username;                            
      
      // Redirect user to welcome page
      header("location: index.php");
    }
  }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    .card {
      width: 350px;
    }
  </style>
  <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5 justify-content-center">
            <div class="col-auto">
                <div class="card">
                    <h2 class="card-header">Login</h2>
                    <div class="card-body">
                        <p>Please fill in your credentials to login.</p>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group ">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                                <span class="invalid-feedback"><?php echo $username_err; ?></span>
                            </div>    
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control  <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Login">
                            </div>
                            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
                        </form>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</body>
</html>