<?php
require_once("header.php");
if(!isset($_SESSION['USER_EMAIL_LOGIN'])){
  header("location:login.php");
  die();
}
$pic_name='';
$pic_src='';
if(isset($_REQUEST['id'])){
  $text_id=mysqli_real_escape_string($connect,$_REQUEST['id']);
  $sql_callect_data=mysqli_fetch_assoc(mysqli_query($connect,"SELECT `id`, `text_name`, `text`, `date` FROM `main_text_portfollio` WHERE id='$text_id'"));
  $text_name=$sql_callect_data['text_name'];
  $main_text=$sql_callect_data['text'];
}
?>

<div class="content pb-0">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-lg-8">
           <h4 class="text-white bg-primary p-2 text-center"style="font-family:oswald;"><span class="" style="font-size:26px;">Text name : </span><?php echo $text_name?></h4>
           <br>
           <form method ="post" class="form">
          <div class="form-group">
            <label class="form-text ">Main text :</label>
            <textarea class="form-control" name="text_sazzad" value="" name="name" rows="3"><?php echo $main_text?></textarea>
          </div>
           <input style="width:100px" name="submit_btn" class="form-control btn btn-primary btn-block spicfic_btn" type="submit" value="submit"/>
           </form >
         </div>
         <br>
        <div class="col-lg-4">
          <h4 class="text-primary" style="font-family:oswald;">This text on : </h4>
          <h3><?php echo $main_text?></h3>
        </div>
      </div>
   </div>
</div>


<?php require_once("footer.php")?>
<?php
if(isset($_REQUEST['submit_btn'])){
  $update_text=mysqli_real_escape_string($connect,$_REQUEST['text_sazzad']);
  $update_sql=mysqli_query($connect,"UPDATE `main_text_portfollio` SET `text`='$update_text' WHERE id='$text_id'");
?>
<script>
window.location.href="portfollio_text.php";
</script>
<?php
}
?>
