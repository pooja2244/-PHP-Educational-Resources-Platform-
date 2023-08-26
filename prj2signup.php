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
    <div class="signupdiv">
<div class="signup-form">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="GET">
		<h2>Sign Up</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group"><input type="text" class="form-control" name="username" placeholder="Username" required="required"></div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>        
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="./prj2signin.php">Sign in</a></div>
</div>
</div>
<?php
$conn= new mysqli('localhost','root','','prj2') or die("connection failed: ".mysqli_connect_error());
$fname=mysqli_real_escape_string($conn,$_GET['first_name']);
$lname=mysqli_real_escape_string($conn,$_GET['last_name']);
$username=mysqli_real_escape_string($conn,$_GET['username']);
$email=mysqli_real_escape_string($conn,$_GET['email']);
$password=mysqli_real_escape_string($conn,md5($_GET['password']));
$confirm_password=mysqli_real_escape_string($conn,md5($_GET['confirm_password']));
$sqluser = "select username from sign_up_table where username= '$username' limit 1";
if(isset($_GET['submit'])) {
  $fname=mysqli_real_escape_string($conn,$_GET['first_name']);
$lname=mysqli_real_escape_string($conn,$_GET['last_name']);
$username=mysqli_real_escape_string($conn,$_GET['username']);
$email=mysqli_real_escape_string($conn,$_GET['email']);
$password=mysqli_real_escape_string($conn,md5($_GET['password']));
$confirm_password=mysqli_real_escape_string($conn,md5($_GET['confirm_password']));
$sqluser = "select username from sign_up_table where username= '$username' limit 1";
if($result=(mysqli_query($conn,$sqluser))){
   $rnum= mysqli_num_rows($result);
   if($rnum==0){
         $sql1 = "select email from sign_up_table where email='$email' limit 1"; 
         $sql2 ="insert into sign_up_table (first_name,last_name,username,email,password) values (?,?,?,?,?)";
        if($result=mysqli_query($conn,$sql1)){
           $rnum= mysqli_num_rows($result);
           echo $rnum;
          if( $rnum==0){
            
            $stmt = $conn->prepare($sql2);
            $stmt->bind_param("sssss",$fname,$lname,$username,$email,$password);
            $stmt->execute();
            $stmt->close();?>
            
            <?php
           
          }
           else{
            echo '<div class="alert2 alert alert-danger">This Email is already registered</div>';
           }
        }else{
            echo "sorry connection failed";          
         }
        }
        else{
          echo '<div class="alert2 alert alert-danger" role="alert">Username already exists</div>';
        }
   }
   else{
    echo '<div class="alert2 alert alert-danger" role="alert">Error</div>';
   }
}
header("location: http://localhost/project2/prj2signin.php");
?>
</body>
</html>