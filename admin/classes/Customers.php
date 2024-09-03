<?php 
session_start();
/**
 * 
 */
class Customers
{
	
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getCustomers(){
		$query = $this->con->query("SELECT `user_id`, `first_name`, `last_name`, `email`, `mobile`, `address1`, `address2` FROM `user_info`");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'no customer data'];
	}
	public function getVendors(){
		$query = $this->con->query("SELECT `vendor_id`, `vendor_name`, `store_name`, `email`, `mobile`, `address1`, `address2` FROM `vendor_info`");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'no customer data'];
	}


	public function getCustomersOrder(){
		$query = $this->con->query("SELECT o.order_id, o.product_id, o.qty,o.size, o.payment, o.o_date, o.d_status, p.product_title, p.product_image FROM orders o JOIN products p ON o.product_id = p.product_id");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'no orders yet'];
	}
	public function deleteUser($pid = null){
		if ($pid != null) {
			$r=$this->con->query("DELETE FROM orders WHERE user_id='$pid'");
			$q = $this->con->query("DELETE FROM user_info WHERE user_id = '$pid'");
			if ($q && $r) {
				return ['status'=> 202, 'message'=> 'User removed Successfully'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid user id'];
		}

	}
	public function deleteVendor($pid = null){
		if ($pid != null) {
			$l=  $this->con->query("DELETE FROM products WHERE vendor_id='$pid'");
			$q = $this->con->query("DELETE FROM vendor_info WHERE vendor_id = '$pid'");
			if ($q && $l) {
				return ['status'=> 202, 'message'=> 'Vendor removed Successfully'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid vendor id'];
		}

	}
	

	

}


/*$c = new Customers();
echo "<pre>";
print_r($c->getCustomers());
exit();*/

if (isset($_POST["GET_CUSTOMERS"])) {
	if (isset($_SESSION['admin_id'])) {
		$c = new Customers();
		echo json_encode($c->getCustomers());
		exit();
	}
}

if (isset($_POST["GET_VENDORS"])) {
	if (isset($_SESSION['admin_id'])) {
		$c = new Customers();
		echo json_encode($c->getVendors());
		exit();
	}
}

if (isset($_POST["GET_CUSTOMER_ORDERS"])) {
	if (isset($_SESSION['admin_id'])) {
		$c = new Customers();
		echo json_encode($c->getCustomersOrder());
		exit();
	}
}


if (isset($_POST['DELETE_USER'])) {
	$p = new Customers();
	if (isset($_SESSION['admin_id'])) {
		if(!empty($_POST['pid'])){
			$pid = $_POST['pid'];
			echo json_encode($p->deleteUser($pid));
			exit();
		}else{
			echo json_encode(['status'=> 303, 'message'=> 'Invalid User id']);
			exit();
		}
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid Session']);
	}


}

if (isset($_POST['DELETE_VENDOR'])) {
	$p = new Customers();
	if (isset($_SESSION['admin_id'])) {
		if(!empty($_POST['pid'])){
			$pid = $_POST['pid'];
			echo json_encode($p->deleteVendor($pid));
			exit();
		}else{
			echo json_encode(['status'=> 303, 'message'=> 'Invalid Vendor id']);
			exit();
		}
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid Session']);
	}


}



?>