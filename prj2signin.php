<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Bootstrap Simple Registration Form</title>
<link rel="stylesheet" href="prj2.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="guru.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <div class="sign">
          <div class="signup_link btn btn-outline-success my-2 my-sm-0"><a href="./prj2signup.php">Sign Up</a></div>
            <div class="signup_link btn btn-outline-success my-2 my-sm-0"><a href="./prj2signin.php">Sign In</a></div>
          </div>
          <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    <div class="logindiv">
<div class="signup-form">
    <form action="prj2signin.php" method="POST">
		<h2>Sign In</h2>
		<p class="hint-text">Login and continue Learning from where you left.</p>
      <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>  
		<div class="form-group">
            <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Sign In</button>
        </div>
    </form>
	<div class="text-center no_account"> <a href="#">Forget Password?</a><br>
        Don't have an account? &nbsp<a href="prj2signup.php">Sign Up</a></div>


        
</div>
</div>
<?php
$conn= new mysqli('localhost','root','','prj2') or die("connection failed: ".mysqli_connect_error());
 if(isset($_POST['submit'])) {
  $email_login=mysqli_real_escape_string($conn,$_POST['email']);
  $password_login=mysqli_real_escape_string($conn,md5($_POST['password']));
  $email_login=stripcslashes($email_login);
  $password_login= stripcslashes($password_login);
 $sqlemail = "select * from sign_up_table where email= '$email_login' limit 1"; 
 //$sqlpassword= "select password from sign_up_table where email= '$email' limit 1";
 if($result=mysqli_query($conn,$sqlemail)){
    $rnum=mysqli_num_rows($result);
 if($rnum==1){
 //   if($result=mysqli_query($conn,$sqlpassword)){
       $row_matched=mysqli_fetch_assoc($result);
       if($row_matched ['password'] == $password_login){
          session_start();
          $_SESSION ['username'] =$row_matched['username'];
            header("location: http://localhost/project2/loggedin.php");
         }
         else{
            echo '<div class="alert2 alert alert-warning"> your Password is Incorrect<div>';
         }
 //   }
  }
  else{
      echo '<div class="alert2 alert alert-warning">This Email is not registered Please <a class="al-link" href="./prj2signup.php">Sign Up<a><div>';
  }
  $conn->close();
}
else{
   echo "connection error: ".mysqli_error();
}
}
?>

</body>
</html>