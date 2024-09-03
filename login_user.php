

<?php 
session_start();
include "./classes/db.php";
class credentials
{
    private $con;
    public function __construct()
    {
        $h= new Database();
        $this->con=$h->connect();
    }
   public function loginUser($email, $password){
		$q = $this->con->query("SELECT * FROM user_info WHERE email = '$email' LIMIT 1");
		if ($q->num_rows > 0) {
			$row = $q->fetch_assoc();
			if ($password == $row['password']) {
				$_SESSION['user_name'] = $row['first_name'];
				$_SESSION['user_id'] = $row['user_id'];
				//return ['status'=> 202, 'message'=> 'Login Successful'];
				
				
				    $page=$_SESSION['page'];
					if($page!= NULL)
					{

				
					header("location:$page"); }
					else
					{
						header("location:index.php");
					}

				
				
			}else{
				//return ['status'=> 303, 'message'=> 'Login Fail'];
			//	echo "<script>alert('Login failed');</script>";
				header("location:login.php?err=2");
			}
		}else{
			header("location:login.php?err=1");
			//echo "<script>alert('Login failed');</script>";
			
		}
	}

}

if (isset($_POST['user_login'])) {
	extract($_POST);
	if (!empty($email) && !empty($password)) {
		$c = new credentials();
		$result = $c->loginUser($email, $password);
		echo json_encode($result);
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Empty fields']);
		exit();
	}
}


?>