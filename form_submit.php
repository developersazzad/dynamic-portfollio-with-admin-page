<?php
require_once("connection.php");
$name=mysqli_real_escape_string($connect,$_POST['name']);
$email=mysqli_real_escape_string($connect,$_POST['email']);
$password=mysqli_real_escape_string($connect,$_POST['password']);
$massage=mysqli_real_escape_string($connect,$_POST['massage']);
$insert_sql=mysqli_query($connect,"INSERT INTO `sazzad_portfollio`( `name`, `email`, `password`,`massage`) VALUES ('$name','$email','$password','$massage')");
if($insert_sql==true){
  echo "success";
}
?>
