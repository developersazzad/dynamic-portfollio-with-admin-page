<?php
$host="localhost";
 $db_user="sazzad_hossain";
 $db_user_pwd="shamima##00";
 $db_name="sazzad_portfolio";
 session_start();
$connect=mysqli_connect( $host,$db_user,$db_user_pwd,$db_name);

if($connect==false){
		echo"Error!";
};
?>
