<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logged_in_page</title>
    <link rel="stylesheet" href="prj2.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<?php
echo '<div class="alert alert-success">Thanks You are logged in we will create a session for you soon</div>';
?>
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
          <div class="userbox">
          <div class="userlogo"><img src="./images/whiteuser.png" alt="logo"> </div>
          <?php
          $conn= new mysqli('localhost','root','','prj2');
          session_start();
          $username=$_SESSION["username"];
          $query1="select * from sign_up_table";
          $result=mysqli_query($conn,$query1);
          $rnum=mysqli_num_rows($result);
          ?>
          <div class="logged_in_username"> <?php echo $_SESSION['username']; ?></div>;
            <a href="logout.php" class="btn btn-danger"><span>Log out <img class="logout-logo" src="./images/logout.png" alt="logo"></span></a>						
          </div>
           </form>
        </div>
      </nav>
      <div class="quiz about-quiz"> <strong>This is Test to check Your Basic Knowledge<br>
      Total No of Question: </strong><?php echo $rnum;?> &nbsp;
     <br> <strong>Total Time: </strong><?php echo $rnum*(4);?> minutes &nbsp;
     <strong>Total Score: </strong><?php echo 4*$rnum;?>
     <div class="instructions"> <ol>
     <li><strong>Full Marks: </strong> +4 - If all the correct option(s) is/are selected.</li>
     <li><strong>Partial Mark: </strong>
     <ul><li>+3 - If all the four options are correct but only three options are chosen. </li>
     <li> +2 - If three or more options are correct but only two options are chosen, both of which are correct options.</li>
     <li>+1 - If two or more options are correct but only one option is chosen and it is a correct option.</li></ul> 
     </li>
     <li><strong>Zero Marks: </strong>No marks will be awarded if no attempt is made</li>
     <li><strong>Negative Marking</strong>-2 In all other cases</li>
     </ol></div>
     </div>
     <div class="start_quiz">
     <form action="question.php" method="GET">
    <div><input type="checkbox" class="accept_exam_policies" required="required"> <strong>Accept the policies</strong></div>
    <div><input type="submit" class="btn btn-success" name="Start Quiz" value="Start Quiz"></div>
     <?php $n=1; ?>
    <input type="hidden" name="n" value=" <?php echo $n; ?>">
    </div>
    </form>
  
</body>
</html>
