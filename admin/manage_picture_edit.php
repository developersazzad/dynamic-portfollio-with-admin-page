<?php
require_once("header.php");
if(!isset($_SESSION['USER_EMAIL_LOGIN'])){
  header("location:login.php");
  die();
}
$pic_name='';
$pic_src='';
if(isset($_REQUEST['id'])){
  $picture_id=mysqli_real_escape_string($connect,$_REQUEST['id']);
  $sql_callect_data=mysqli_fetch_assoc(mysqli_query($connect,"SELECT `images`, `name` FROM `sazzad_portfollio_picture` WHERE id='$picture_id'"));
  $pic_src=$sql_callect_data['images'];
  $pic_name=$sql_callect_data['name'];
}
?>

<div class="content pb-0">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-lg-8">
             <h4 class="text-dark">Images position : <?php echo $pic_name?></h4>
             <br>
           <form enctype="multipart/form-data" method ="post" class="form">
             <div class="form-group">
               <labelclass="form-text">Images source :</label>
               <input class="form-control" type="file" name="profilepic1"/>
            </div>
           <input style="width:100px" name="submit_btn" class="form-control btn btn-primary btn-block spicfic_btn btn-sm" type="submit" value="submit"/>
           </form >
         </div>
        <div class="col-lg-4">
          <h4 class="text-primary">This picture on : </h4>
          <img src="../images/<?php echo $pic_src?>" alt="">
        </div>
      </div>
   </div>
</div>


<?php require_once("footer.php")?>
<?php
if(isset($_REQUEST['submit_btn'])){
  $imgname=$_FILES["profilepic1"];
  $img_name=$imgname["name"];
  $tump_name=$imgname["tmp_name"];
  $img_type=$imgname["type"];
  move_uploaded_file("$tump_name","../images/$pic_src");
  $update_sql=mysqli_query($connect,"UPDATE `sazzad_portfollio_picture` SET `images`='$pic_src' WHERE id='$picture_id'");
  ?>
<script>
window.location.href="index.php";
</script>
  <?php
}

?>
