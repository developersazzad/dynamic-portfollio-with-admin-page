<?php
require_once("connection.php");

function get_images($connect,$images_name=''){
  $sql="SELECT `id`, `images`, `name`, `date` FROM `sazzad_portfollio_picture` WHERE `name`='$images_name'";
   $run_sql=mysqli_query($connect,$sql);
   $data=array();
   while($row=mysqli_fetch_assoc($run_sql)){
     $data[]=$row;
   }
   return $data;
}
//callect text======================//
function get_text($connect,$text_name=''){
  $sql="SELECT `id`, `text_name`, `text`, `date` FROM `main_text_portfollio` WHERE text_name='$text_name'";
   $run_sql=mysqli_query($connect,$sql);
   $data=array();
   while($row=mysqli_fetch_assoc($run_sql)){
     $data[]=$row;
   }
   return $data;
}
?>
