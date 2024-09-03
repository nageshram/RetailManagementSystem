<?php

/**
 * 
 */
class Admin
{
	
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getAdminList(){
		$vid = $_SESSION['vendor_id'];
		$query = $this->con->query("SELECT vendor_id, vendor_name, store_name, email, mobile, address1 , address2 FROM vendor_info WHERE vendor_info.vendor_id = '$vid' LIMIT 1");
		$row = $query->fetch_assoc();
		
		return $row;
	
	}
 
}



?>