<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add_Quetions_page</title>
<link rel="stylesheet" href="prj2.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn= new mysqli('localhost','root','','prj2');
$total="select * from questions";
$result_total=mysqli_query($conn,$total);
$next_quest=mysqli_num_rows($result_total)+1;

/*$check_already_question="select question_no from questions where question_no=$quest_no";
$result_already_question=mysqli_query($conn,$check_already_question);
if(mysqli_num_rows($result_already_question)>0){
   echo '<div class="alert alert-danger"> This question can not be added</div>';
}*/
/*else{
$total="select * from questions";
$result=mysqli_query($conn,$total);
$next_quest= mysqli_num_rows($result);
$next_quest+=1;
}*/?>

<div class="question_form">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="GET">
  Question_Number <div class="question_no"> <input  type="number" name="quest_no" value="<?php echo $next_quest; ?>" ></div>
  <div class="form-group qset">
   <textarea  cols="150" rows="6" name="question" class="form-control" placeholder="Put your question here"></textarea>
  </div>
  <div class="form-group opset">
       <div class="form-row">
         <input type="checkbox" name="optA" >
       </div>
    <textarea  cols="150" rows="3" name="A" class="form-control" placeholder="Option A"></textarea>
  </div>
  <div class="form-group opset">
  
      <div class="form-row">
      <input type="checkbox" name="optB" >
      </div>  
    <textarea  cols="150" rows="3" name="B" class="form-control" placeholder="Option B"></textarea>
  </div>
  <div class="form-group opset">
    <div class="form-row">
    <input type="checkbox" name="optC" >
   </div>
    <textarea  cols="150" rows="3" name="C" class="form-control" placeholder="option C"></textarea>
  </div>
  <div class="form-group opset">
    <div class="form-row">
      <input type="checkbox" name="optD" >
      </div> 
    <textarea  cols="150" rows="3" name="D" class="form-control" placeholder="option D"></textarea>
 
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php
if(isset($_GET['submit'])){
$quest_no= mysqli_real_escape_string($conn, $_GET['quest_no']);
$question= mysqli_real_escape_string($conn,$_GET['question']);
$a= mysqli_real_escape_string($conn,$_GET['A']);
$b= mysqli_real_escape_string($conn,$_GET['B']);
$c= mysqli_real_escape_string($conn,$_GET['C']);
$d= mysqli_real_escape_string($conn,$_GET['D']);

$sql_ques="insert into questions (question,question_no) values('{$question}','{$quest_no}')";
if($result1=mysqli_query($conn,$sql_ques)){
$a1= (isset($_GET['optA']))?1:0;
$b1= (isset($_GET['optB']))?1:0;
$c1= (isset($_GET['optC']))?1:0;
$d1= (isset($_GET['optD']))?1:0;
$sql_opt1="insert into answers (ques_no,is_correct,choice) values('{$quest_no}','{$a1}','{$a}')";
$resultcheck=mysqli_query($conn,$sql_opt1);

$sql_opt2="insert into answers (ques_no,is_correct,choice) values('{$quest_no}','{$b1}','{$b}')";
$result2=mysqli_query($conn,$sql_opt2);
$sql_opt3="insert into answers (ques_no,is_correct,choice) values('{$quest_no}','{$c1}','{$c}')";
$result2=mysqli_query($conn,$sql_opt3);
$sql_opt4="insert into answers (ques_no,is_correct,choice) values('{$quest_no}','{$d1}','{$d}')";
$result2=mysqli_query($conn,$sql_opt4);
}
if($result1 && $result2){
    echo "Your Question Added successfully";
}
else{
    die("Error");
}

}
?>
if(isset($_GET['submit'])){
<a  class="btn btn-success" href="added_question.php?n="<?php echo $quest_no ?>></a>
  <input type="hidden" name="q" value="<?php echo $quest_no ?>">
}
</body>
</html>

