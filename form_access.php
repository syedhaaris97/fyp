<?php 

require"db.php";

if (isset($_POST['username'])) {	
	//var_dump($_POST);
		$username = $_POST['username'];
		$res= $obj->Validation_Of_Log_in_user_name($username);

		if ($res == false) {
			echo json_encode(array("status"=>"wrong_user_name"));
		}else{
			echo json_encode(array("status"=>"correct_user_name"));
		}
}

if (isset($_POST['password'])) {	
	//var_dump($_POST);
		$password = $_POST['password'];
		$res= $obj->Validation_Of_Log_in_user_password($password);

		if ($res == false) {
			echo json_encode(array("status"=>"wrong_user_pass"));
		}else{
			echo json_encode(array("status"=>"correct_user_pass"));
		}
}


if(isset($_POST['signIn'])){

	$data = $obj->admin_login($_POST);

	if($data){
		$obj->Create_session($data);
		header("location:dashboard.php");
	
	}else{
	 	header("location:index.php");
	}

}

if (isset($_POST['dName'])) {
	
	$driver = $obj->createDriverAccount($_POST);
}

if (isset($_POST['cName'])) {

	$conductor = $obj->createConductorAccount($_POST);
}

if (isset($_POST['stopName'])) 
{
	$stop = $obj->createStopAccount($_POST);
}


if (isset($_POST['bNo'])) 
	{
		var_dump($_POST);
		$bus = $obj->createBusAccount($_POST);
	}


if (isset($_POST['deptName'])) {
	var_dump($_POST);
	$dept =	$obj->createDepartment($_POST);
}

if (isset($_POST['batchYear'])) {
	// var_dump($_POST);
	$dept =	$obj->createBatch($_POST);
}
 ?>