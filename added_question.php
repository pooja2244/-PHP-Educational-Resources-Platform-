<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
<?php
$conn= new mysqli('localhost','root','','prj2');
$q_num=$_GET['n'];
$query="select * from questions where question_no=$q_num";
$result=mysqli_query($conn,$query);
$row =mysqli_fetch_assoc($result);
?>
</body>
</html>