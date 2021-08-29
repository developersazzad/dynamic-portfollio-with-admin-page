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
                    <th class="serial">#</th>
                    <th class="avatar">Avatar</th>
                    <th>ID</th>
                    <th>picture Name</th>
                    <th>Img Source</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql=mysqli_query($connect,"SELECT `id`, `images`, `name`, `date` FROM `sazzad_portfollio_picture` WHERE 1");
                  while($data=mysqli_fetch_assoc($sql)){
                    $id=$data['id'];
                    $name=$data['name'];
                    $images=$data['images'];
                    ?>
                  <tr>
                    <td class="serial">1.</td>
                    <td class="avatar">
                      <div class="round-img">
                        <a href="#"><img style="height:50px;width:80px" class="rounded-circle images_admin_data" src="../images/<?php echo $images?>" alt=""></a>
                      </div>
                    </td>
                    <td> <?php echo $id?> </td>
                    <td> <span class="name"><?php echo $name?></span> </td>
                    <td> <span class="product"><?php echo $images?></span> </td>
                    <td>
                    <a class="btn btn-primary text-white" href="manage_picture_edit.php?id=<?php echo $id?>">Edit</a>
                    </td>
                  </tr>
                  <?php
                }
                ?>
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
