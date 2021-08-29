<?php require_once("header.php");
if(!isset($_SESSION['USER_EMAIL_LOGIN'])){
  header("location:login.php");
  die();
}
?>
<div class="content pb-0">
  <div class="orders">
    <div class="row">
      <div class="col-xl-12">
        <div class="card">
          <div class="card-body">
            <h4 class="box-title">Orders </h4>
          </div>
          <div class="card-body--">
            <div class="table-stats order-table ov-h">
              <table class="table ">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name of text</th>
                    <th class="text-left">Text</th>
                    <th class="text-center">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql=mysqli_query($connect,"SELECT `id`, `text_name`, `text`, `date` FROM `main_text_portfollio` WHERE 1");
                  while($data=mysqli_fetch_assoc($sql)){
                    $id=$data['id'];
                    $name=$data['text_name'];
                    $text=$data['text'];
                    ?>
                  <tr>
                     <td><?php echo $id?></td>
                     <td> <span class="name"><?php echo $name?></span> </td>
                     <td> <span class="product"><?php echo $text?></span> </td>
                     <td>
                      <a class="btn btn-success px-3 text-white btn-sm" href="manage_text_portfollio_edit.php?id=<?php echo $id?>" style="padding: 5px 20px;
                      font-family: oswald;">edit</a></span>
                     </td>
                  </tr>
                  <?php };?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once("footer.php");?>
