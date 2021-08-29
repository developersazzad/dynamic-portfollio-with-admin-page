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
            <h4 class="box-title">portfollio picture </h4>
          </div>
          <div class="card-body--">
            <div class="table-stats order-table ov-h">
              <table class="table ">
                <thead>
                  <tr>
                    <th class="serial">#</th>
                    <th class="avatar">Avatar</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="serial">1.</td>
                    <td class="avatar">
                      <div class="round-img">
                        <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                      </div>
                    </td>
                    <td> #5469 </td>
                    <td> <span class="name">Louis Stanley</span> </td>
                    <td> <span class="product">iMax</span> </td>
                    <td><span class="count">231</span></td>
                    <td>
                      <span class="badge badge-complete">Complete</span>
                    </td>
                  </tr>
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
