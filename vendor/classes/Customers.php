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


	public function getCustomersOrder(){
		$vid = $_SESSION['vendor_id'];
		$query = $this->con->query("SELECT o.order_id, o.product_id, o.qty, o.o_date, o.d_status, o.payment , o.o_price, o.size,p.product_title, p.product_image, u.address1 , u.address2 FROM orders o JOIN products p ON o.product_id = p.product_id JOIN user_info u ON u.user_id = o.user_id WHERE o.vendor_id = '$vid'");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'no orders yet'];
	}
	

	

}


if (isset($_POST["GET_CUSTOMER_ORDERS"])) {
	if (isset($_SESSION['vendor_id'])) {
		$c = new Customers();
		echo json_encode($c->getCustomersOrder());
		exit();
	}
}



?>