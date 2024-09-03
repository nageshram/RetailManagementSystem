
<?php 
session_start();  
require_once('./classes/Admin.php');
if (!isset($_SESSION['vendor_id'])) {
  header("location:login.php");
}

include "./templates/top.php"; 

?>
 
<?php include "./templates/navbar.php"; ?>

<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <h2>My Details</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Store Name</th>
              <th>Email</th>
              <th>Mobile</th>
              <th>Address</th>
              <th></th>
            </tr>
          </thead>
          <tbody id="admin_list">
          <tr>   
            <?php  $a = new Admin();
	                 $value= $a->getAdminList()   ?>
										<td>#</td>
										<td> <?php echo $value['vendor_name'];  ?>  </td>
										<td><?php echo $value['store_name'];  ?>  </td>
										<td> <?php echo $value['email'];  ?>  </td>
										<td>  <?php echo $value['mobile'];  ?>  </td>
										<td> <?php echo $value['address1'];
                          echo $value['address2'];  ?> </td>
									</tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/admin.js"></script>