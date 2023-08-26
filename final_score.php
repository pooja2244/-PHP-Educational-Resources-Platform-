<?php
$conn=new mysqli('localhost','root','','prj2');
session_start();
echo $_SESSION['score'];
if(isset($_SESSION['score'])){
unset($_SESSION['score']);}
?>