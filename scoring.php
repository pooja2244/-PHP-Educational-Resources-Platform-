<?php
$conn= new mysqli('localhost','root','','prj2');
session_start();
$q_num=$_GET['Question_number'];
if(!(isset($_SESSION['score']))&&($q_num==1)){
$_SESSION['score']=0;
}
$a1= (isset($_GET['optA']))?1:0;
$b1= (isset($_GET['optB']))?1:0;
$c1= (isset($_GET['optC']))?1:0;
$d1= (isset($_GET['optD']))?1:0;
$total="select * from questions";
$result_total=mysqli_query($conn,$total);
$total_questions=mysqli_num_rows($result_total);
$query_ans="select * from answers where ques_no=$q_num";
$result_opt=mysqli_query($conn,$query_ans); 
$next=$q_num+1; ?>
<?php  $rows=mysqli_fetch_assoc($result_opt);
if(mysqli_num_rows($result_opt)==0){
    echo 'no columns matching';
    echo mysqli_num_rows($result_opt);
}
else{
?> <br> <?php
if(isset($_GET['save'])&&(isset($_SESSION['score']))){
$is_correct_A= $rows['is_correct'];?> <br><?php
$rows=mysqli_fetch_assoc($result_opt);
$is_correct_B= $rows['is_correct'];?> <br><?php
$rows=mysqli_fetch_assoc($result_opt);
$is_correct_C =$rows['is_correct'];?> <br><?php
$rows=mysqli_fetch_assoc($result_opt);
$is_correct_D= $rows['is_correct'];?> <br><?php

?>
<?php
$incorrect=(($a1==1)&&($is_correct_A==0))||(($b1==1)&&($is_correct_B==0))||(($c1==1)&&($is_correct_C==0))||(($d1==1)&&($is_correct_D==0));
echo $incorrect;
$fully_correct=($is_correct_A==$a1)&&($is_correct_B==$b1)&&($is_correct_C==$c1)&&($is_correct_D==$d1);
/*if($fully_correct==true){
    echo "Yes you are absolutely right";
}
if($incorrect==true){
    echo "no you are wrong";
}*/
if($incorrect==true){
    $_SESSION['score']-=2;
}
else if($fully_correct==true){
    $_SESSION['score']+=4;  
}

else{
    $partial=(($a1==1)&&($is_correct_A==1))+(($b1==1)&&($is_correct_B==1))+(($c1==1)&&($is_correct_C==1))+(($d1==1)&&($is_correct_D==1));
    $_SESSION['score']+=$partial;  
}
}
if($q_num==$total_questions){
    header("location: http://localhost/project2/final_score.php");
   echo $_SESSION['score'];
}
else{
    header("location: http://localhost/project2/question.php?n=".$next);
}
}
?>  