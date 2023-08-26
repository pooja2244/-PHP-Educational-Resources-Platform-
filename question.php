<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>question</title>
    <link rel="stylesheet" href="prj2.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="CalcSS3.css?version=1">
<link rel="stylesheet" href="index.css">
</head>
<body>
<?php
   $conn=new mysqli('localhost','root','','prj2');
   session_start();
   $q_num=$_GET['n'];
   $ques_number=$q_num;
   $query1="select * from questions where question_no= $ques_number";
   $result_ques=mysqli_query($conn,$query1);
   $question_col=mysqli_fetch_assoc($result_ques);
   $question_text=$question_col['question'];
   $query_opt="select * from answers where ques_no= $ques_number";
   $result_opt=mysqli_query($conn,$query_opt);
   $total="select * from questions";
   $result_total=mysqli_query($conn,$total);
   $total_questions=mysqli_num_rows($result_total);
 // echo $total_questions;
?>

<div class=" question_container">
        <div class="text-center question_navbar">
            <div class="h5 "><span id="number"> </span><?php echo $ques_number;  ?> of <?php echo $total_questions;  ?> </div>
            <div class="calc-time-btn">	
			<button class="calc_btn" id="calc_btn" > <img src="./images/calc-logo.png" alt="calculator image" class="calc_logo" height="50px" margin-top="2px"> </button> 
			</div>
        </div>
        <div class="h5 question_text"> <?php echo $question_text;  ?></div>
        <div class="pt-1">
           <?php  $rows=mysqli_fetch_assoc($result_opt);
            if(mysqli_num_rows($result_opt)==0){
                echo 'no Questions is available for you.';
                echo mysqli_num_rows($result_opt);
            }
           ?> <br><?php
           $opt_A= $rows['choice'];?> <br><?php
           $rows=mysqli_fetch_assoc($result_opt);
           $opt_B= $rows['choice'];?> <br><?php
           $rows=mysqli_fetch_assoc($result_opt);
           $opt_C =$rows['choice'];?> <br><?php
           $rows=mysqli_fetch_assoc($result_opt);
           $opt_D= $rows['choice'];?> <br><?php
           $final_button=($ques_number==$total_questions)?"Submit":"Next";
           $final_button2=($ques_number==$total_questions)?"Save and Submit":"Save and Next";
           ?>
             <form action="./scoring.php" method="GET"> 

<div class="funkyradio"><div class="option text-center">A</div><div class="optA"> <input type="checkbox" name="optA" id="checkbox1" /><label for="checkbox1"><?php echo $opt_A; ?></label> </div></div>
<div class="funkyradio"><div class="option text-center">B</div><div class="optB"> <input type="checkbox" name="optB" id="checkbox2" /><label for="checkbox2"><?php echo $opt_B; ?></label> </div></div>
<div class="funkyradio"><div class="option text-center">C</div><div class="optC"> <input type="checkbox" name="optC" id="checkbox3" /><label for="checkbox3"><?php echo $opt_C; ?></label> </div></div>
<div class="funkyradio"><div class="option text-center">D</div><div class="optD"> <input type="checkbox" name="optD" id="checkbox4" /><label for="checkbox4"><?php echo $opt_D; ?></label> </div></div>
                <input type="hidden" name="Question_number" value="<?php echo $q_num; ?>">
                 <div class="save_buttons"><input type="submit" class="btn btn-success" name="save" value="<?php echo $final_button2; ?>">
                <input type="submit" class="btn btn-success" name="next" value="<?php echo $final_button; ?>"></div> 
             </form>
             
        </div>  
    </div>
<!--                                                                 CALCULATOR                       -->   
<div class="calc-main">
<div class="calc-display">
 <span>0</span>
 <div class="calc-rad">Rad</div>
 <div class="calc-hold"></div>
 <div class="calc-buttons">
 <div class="calc-info">?</div>
 <div class="calc-smaller">&gt;</div>
 <div class="calc-ln">.</div>
 </div>
</div>
<div class="calc-left">
 <div><div>2nd</div></div>
 <div><div>(</div></div>
 <div><div>)</div></div>
 <div><div>%</div></div>
 <div><div>1/x</div></div>
 <div><div>x<sup>2</sup></div></div>
 <div><div>x<sup>3</sup></div></div>
 <div><div>y<sup>x</sup></div></div>
 <div><div>x!</div></div>
 <div><div>&radic;</div></div>
 <div><div class="calc-radxy">
 <sup>x</sup><em>&radic;</em><span>y</span>
 </div></div>
 <div><div>log</div></div>
 <div><div>sin</div></div>
 <div><div>cos</div></div>
 <div><div>tan</div></div>
 <div><div>ln</div></div>
 <div><div>sinh</div></div>
 <div><div>cosh</div></div>
 <div><div>tanh</div></div>
 <div><div>e<sup>x</sup></div></div>
 <div><div>Deg</div></div>
 <div><div>&pi;</div></div>
 <div><div>EE</div></div>
 <div><div>Rand</div></div>
</div>
<div class="calc-right">
 <div><div>mc</div></div>
 <div><div>m+</div></div>
 <div><div>m-</div></div>
 <div><div>mr</div></div>
 <div class="calc-brown"><div >AC</div></div>
 <div class="calc-brown"><div>+/&#8211;</div></div>
 <div class="calc-brown calc-f19"><div>&divide;</div></div>
 <div class="calc-brown calc-f21"><div>&times;</div></div>
 <div class="calc-black"><div>7</div></div>
 <div class="calc-black"><div>8</div></div>
 <div class="calc-black"><div>9</div></div>
 <div class="calc-brown calc-f18"><div>&#8211;</div></div>
 <div class="calc-black"><div>4</div></div>
 <div class="calc-black"><div >5</div></div>
 <div class="calc-black"><div>6</div></div>
 <div class="calc-brown calc-f18"><div>+</div></div>
 <div class="calc-black"><div>1</div></div>
 <div class="calc-black"><div>2</div></div>
 <div class="calc-black"><div>3</div></div>
 <div class="calc-blank"><textarea></textarea></div>
 <div class="calc-orange calc-eq calc-f17"><div>
 <div class="calc-down">=</div>
 </div></div>
 <div class="calc-black calc-zero"><div>
 <span>0</span>
 </div></div>
 <div class="calc-black calc-f21"><div>.</div></div>
</div>
</div>
 
<script type="text/javascript" src="js/CalcSS3/CalcSS3.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="CalcSS3.js"></script>
</body>
</html>