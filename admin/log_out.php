<?php
session_start();
unset($_SESSION['USER_EMAIL_LOGIN']);
unset($_SESSION['USER_NAME_LOGIN']);
header("location:login.php");
?>
