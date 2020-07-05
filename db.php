<?php
session_start();
class Mydb{

	private $conn = '';

	public function Mydb($host='localhost', $username="root", $password="", $db="fyp")
	{

		$this->conn = new mysqli($host,$username,$password,$db) or die("connection field");
		mysqli_set_charset($this->conn,"utf8");


	}

	public function Hacking_away($string)
	{
		return mysqli_real_escape_string($this->conn,$string);

	}

	public function create_admin($data)
	{
		extract($data);
		var_dump($data);

			
	
			$date = new DateTime("now",new DateTimeZone('Asia/Karachi'));
 	 		$tm = $date->format("h:i:sa");
			$dt = date("Y-m-d");

			$image = $_FILES['photo']["name"];
			$random_digit=rand(0000,9999);
			$new_image=$opName.$random_digit.$image;

			$tempname = $_FILES['photo']["tmp_name"];
			$ext = pathinfo($image,PATHINFO_EXTENSION);
			$folder = "uploads/operators/".$new_image;
			move_uploaded_file($tempname,$folder);
	
		$Query = "INSERT INTO operator(oName, oType, oUsername, oPassword, oPhoto, oDate) values ('$opName', '$opType', '$opUsername', '$opPwd', '".$new_image."', '$dt')";
		$res = $this->conn->query($Query);
		return $res;
	}

	// this function checking user authentic or not using ajax
	public function Validation_Of_Log_in_user_name($username)
{
	$Query = "SELECT * FROM operator WHERE oStatus = 'y' and oUsername = '".$username."'"; 
    
		$res = $this->conn->query($Query);
		if ($res->num_rows>0) {
		
		$data = $res->fetch_assoc();
		$user_name_db = $data['oUsername'];

		if ($user_name_db != $username) {
			
			return false;
		}else{
			return true;
		}
	}
}


public function Validation_Of_Log_in_user_password($password)
{
	$Query = "SELECT *  FROM operator WHERE oStatus = 'y' and oPassword='".$password."'";
	$res = $this->conn->query($Query);

	if ($res->num_rows>0) {
		$data = $res->fetch_assoc();
		$user_pass_db = $data['oPassword'];

		if ($user_pass_db != $password) {
			return false;
		}else{
			return true;
		}
	}
}


	public function admin_login($data)
	{
		extract($data);
		$Query = "SELECT * FROM operator WHERE oUsername = $this->Hacking_away('$username') AND  oPassword  = $this->Hacking_away('$password') AND oStatus = 'y' ";
		$res = $this->conn->query($Query);

		if($res->num_rows > 0)
			{
				$fetch = $res->fetch_assoc();
			//$_SESSION['user'] = $fetch['user_name'];
				return $fetch;
			}
			else
			{
				return false;
			}
	}


	public function create_session($data)
	{
		$_SESSION['user'] = $data;
	}

	public function is_login()
	{
			if (!$_SESSION['user']) {
				header("location:index.php");
			}
			// if (isset($_SESSION['timeout'])) {
			// 	# code...
			// }
	}
	public function logout()
	{
		session_unset();
		session_destroy();
		header('location:index.php');
	}

	public function createStudentAcc($data){
		extract($data);

		$date = new DateTime("now",new DateTimeZone('Asia/Karachi'));
 	 		$tm = $date->format("h:i:sa");
			$dt = date("Y-m-d");

			$image = $_FILES['photo']["name"];
			$random_digit=rand(0000,9999);
			$new_image=$sName.$random_digit.$image;

			$tempname = $_FILES['photo']["tmp_name"];
			$ext = pathinfo($image,PATHINFO_EXTENSION);
			$folder = "uploads/students/".$new_image;
			move_uploaded_file($tempname,$folder);

			$year = date("Y");
			$Ac_digit=mt_rand(10,99);
			$Ac = $sRollNo.$Ac_digit.$year;
			$opId = $_SESSION['user']['oId'];
		$Query = "INSERT INTO student (sName, sFName, sBatch, sRollNo, sDept, phone, sEmail, sPassword, sCnic, sAc, sPhoto, opId, sDate) VALUES ('$sName', '$sFName', '$sBatch', '$sRollNo', '$sDept', '$phone', '$sEmail', '$sPassword', '$sCnic', '".$Ac."', '".$new_image."', '".$opId."', '".$dt."')";
		$res = $this->conn->query($Query);

		return $res;
	}

	public function createDriverAccount($data){
		extract($data);
		$date = new DateTime("now",new DateTimeZone('Asia/Karachi'));
 	 		$tm = $date->format("h:i:sa");
			$dt = date("Y-m-d");
			$opId = $_SESSION['user']['oId'];
		$Query = "INSERT INTO driver (dName, dCnic, opId, dDate)VALUES('$dName', '$dCnic','".$opId."', '$dt')";
		$res = $this->conn->query($Query);
		return $res;
	}
	public function createConductorAccount($data){
		extract($data);
		$date = new DateTime("now",new DateTimeZone('Asia/Karachi'));
 	 		$tm = $date->format("h:i:sa");
			$dt = date("Y-m-d");
			$opId = $_SESSION['user']['oId'];
		$Query = "INSERT INTO conductor(conName, conCnic, opId, conDate)VALUES('$cName', '$cCnic','".$opId."', '$dt')";
		$res = $this->conn->query($Query);
		return $res;
	}

	public function createStopAccount($data){
		extract($data);
		$date = new DateTime("now",new DateTimeZone('Asia/Karachi'));
 	 		$tm = $date->format("h:i:sa");
			$dt = date("Y-m-d");
			$opId = $_SESSION['user']['oId'];
		$Query = "INSERT INTO stop(stopName, opId, stopCreatedDate)VALUES('$stopName', '".$opId."', '$dt')";
		$res = $this->conn->query($Query);
		return $res;
	}

	public function createBusAccount($data){
		extract($data);
		$date = new DateTime("now",new DateTimeZone('Asia/Karachi'));
 	 		$tm = $date->format("h:i:sa");
			$dt = date("Y-m-d");
			$opId = $_SESSION['user']['oId'];
		$Query = "INSERT INTO bus(bNo, bPss, bFare, bDriverId, bConId, bStopId, TotalSeats, opId, bDate)VALUES('$bNo', '$bPss', '$bFare', '$bDriverId', '$bConId', '$bStopId', '$TotalSeats', '".$opId."', '$dt')";
		$res = $this->conn->query($Query);
		return $res;
	}

	public function createDepartment($data){
		extract($data);
		$opId = $_SESSION['user']['oId'];

		$Query = "INSERT INTO department(deptName,deptShortName,opId)VALUES('$deptName','$deptShortName','".$opId."')";
		$res = $this->conn->query($Query);
		return $res;

	}

	public function createBatch($data){
		extract($data);
		$opId = $_SESSION['user']['oId'];

		$Query = "INSERT INTO batch(batchYear,opId)VALUES('$batchYear','".$opId."')";
		$res = $this->conn->query($Query);
		return $res;

	}

	private function pkTimeZone(){
		date_default_timezone_set('Asia/Karachi');
		$datetime = new DateTime();
		$timezone = new DateTimeZone('Asia/Karachi');
		$datetime->setTimezone($timezone);
		$dt = $datetime->format('Y-m-d');
		return $dt;
	}

	public function depositStudentBalance($data){
		extract($data);
		$opId = $_SESSION['user']['oId'];
		$dt = $this->pkTimeZone();

		$Query = "INSERT INTO studentbalance (sId, sBDeposit, sBOpId,sBDate) VALUES ('$sId','$sBDeposit','".$opId."','".$dt."')";
		$res = $this->conn->query($Query);
		return $res;
	}

	public function WithDrawStudentBalance($sId,$sBWithdraw){
		// extract($data);
		$opId = $_SESSION['user']['oId'];
		$dt = $this->pkTimeZone();


		$Query = "SELECT sId, SUM(sBDeposit) AS totaldeposit, SUM(sBWithdraw) AS totalWithdraw FROM `studentbalance` WHERE sId = '$sId' AND sBStatus = 'y'";
		$res = $this->conn->query($Query);
		if ($res->num_rows > 0 ) {
			
			$data = $res->fetch_assoc();
			$remAmm = ($data['totaldeposit'] - $data['totalWithdraw']);

			if ($remAmm < $sBWithdraw) {
				
				// return false;
				echo json_encode(array("status"=>"insufficient balance"));
			}
			else 
			{
					$Query = "INSERT INTO studentbalance (sId, sBWithdraw, sBOpId,sBDate) VALUES ('$sId','$sBWithdraw','".$opId."','".$dt."')";
					$res = $this->conn->query($Query);
					return $res;
			}
	}
}

public function WithDrawBusesBalance($bId,$btWithdraw){
		// extract($data);
		$opId = $_SESSION['user']['oId'];
		$dt = $this->pkTimeZone();

		$Query = "SELECT bId, SUM(btDeposit) AS BTD, SUM(btwidthdraw) AS BTW FROM `bustransactions` WHERE bId = '$bId' AND btStatus = 'y'";
		$res = $this->conn->query($Query);
		if ($res->num_rows > 0 ) {
			
			$data = $res->fetch_assoc();
			$remAmm = ($data['BTD'] - $data['BTW']);

			if ($remAmm < $btWithdraw) {
				
				echo json_encode(array("status"=>"insufficient balance"));
			}
			else 
			{
					$Query = "INSERT INTO bustransactions (bId, btwidthdraw, opId, btDate) VALUES ('$bId','$btWithdraw','".$opId."','".$dt."')";
					$res = $this->conn->query($Query);
					return $res;
			}
	}
}

	public function depositBusesBalance($data){
		extract($data);
		$opId = $_SESSION['user']['oId'];
		$dt = $this->pkTimeZone();

		$Query = "INSERT INTO bustransactions (bId, btDeposit, opId, btDate) VALUES ('$bId','$btDeposit','".$opId."','".$dt."')";
		$res = $this->conn->query($Query);
		return $res;
	}

	public function qrData(){
		$Query = "SELECT * FROM student
				 WHERE sId = (SELECT MAX(sId) FROM student)";
		$res = $this->conn->query($Query);
			if ($res->num_rows > 0) 
			{
				$fetch = $res->fetch_assoc();
				return $fetch;
			}
			else
			{
				return false;
			}
	}


	public function cardData($data){
		extract($data);

		$Query = "SELECT * FROM student
		INNER JOIN batch ON (student.sBatch = batch.batchId)
		INNER JOIN department ON (student.sDept = department.deptId)
		WHERE sBatch = '$sBatch' AND sDept = '$sDept' AND sRollNo = '$sRollNo'";
		$res = $this->conn->query($Query);
		$i = 0;
			$a = array();
			while ($rows = $res->fetch_assoc()) {
				foreach ($rows as $key => $value) {
					$a[$i][$key] = $value;
				}
				$i++;
			}
			return $a;
	}

	public function fetchDriver(){

		$Query = "SELECT * FROM driver
		WHERE dStatus = 'y'";
		$res = $this->conn->query($Query);
		$i = 0;
			$a = array();
			while ($rows = $res->fetch_assoc()) {
				foreach ($rows as $key => $value) {
					$a[$i][$key] = $value;
				}
				$i++;
			}
			return $a;
	}

	public function fetchConductor(){

		$Query = "SELECT * FROM conductor
		WHERE conStatus = 'y'";
		$res = $this->conn->query($Query);
		$i = 0;
			$a = array();
			while ($rows = $res->fetch_assoc()) {
				foreach ($rows as $key => $value) {
					$a[$i][$key] = $value;
				}
				$i++;
			}
			return $a;
	}

	public function fetchBusStop(){

		$Query = "SELECT * FROM stop
		WHERE stopStatus = 'y'";
		$res = $this->conn->query($Query);
		$i = 0;
			$a = array();
			while ($rows = $res->fetch_assoc()) {
				foreach ($rows as $key => $value) {
					$a[$i][$key] = $value;
				}
				$i++;
			}
			return $a;	
	}

	public function fetchdept(){

		$Query = "SELECT * FROM department
		WHERE deptStatus = 'y'";
		$res = $this->conn->query($Query);
		$i = 0;
			$a = array();
			while ($rows = $res->fetch_assoc()) {
				foreach ($rows as $key => $value) {
					$a[$i][$key] = $value;
				}
				$i++;
			}
			return $a;	
	}

	public function fetchBatch(){

		$Query = "SELECT * FROM batch
		WHERE batchStatus = 'y'";
		$res = $this->conn->query($Query);
		$i = 0;
			$a = array();
			while ($rows = $res->fetch_assoc()) {
				foreach ($rows as $key => $value) {
					$a[$i][$key] = $value;
				}
				$i++;
			}
			return $a;	
	}


	public function studentRecord(){

		$Query = "SELECT * FROM student
		INNER JOIN batch ON (student.sBatch = batch.batchId)
		INNER JOIN department ON (student.sDept = department.deptId)
		WHERE sStatus = 'y'";
		$res = $this->conn->query($Query);
		$i = 0;
			$a = array();
			while($rows = $res->fetch_assoc()){
				foreach ($rows as $key => $value) {
					$a[$i][$key] = $value;
				}
				$i++;
			}
			return $a;
	}

	public function driverRecord(){
		$Query = "SELECT * FROM driver
		WHERE dStatus = 'y'";
		$res = $this->conn->query($Query);
		$i = 0;
			$a = array();
			while ($rows = $res->fetch_assoc()) {
					foreach ($rows as $key => $value) {
					$a[$i][$key] = $value;
				}
				$i++;
			}
			return $a;
	}


	public function ConductorRecord(){
		$Query = "SELECT * FROM conductor
		WHERE conStatus = 'y'";
		$res = $this->conn->query($Query);
		$i = 0;
			$a = array();
			while ($rows = $res->fetch_assoc()) {
					foreach ($rows as $key => $value) {
					$a[$i][$key] = $value;
				}
				$i++;
			}
			return $a;
	}

	public function StopsRecord(){
		$Query = "SELECT * FROM stop
		WHERE StopStatus = 'y'";
		$res = $this->conn->query($Query);
		$i = 0;
			$a = array();
			while ($rows = $res->fetch_assoc()) {
					foreach ($rows as $key => $value) {
					$a[$i][$key] = $value;
				}
				$i++;
			}
			return $a;
	}

	public function BusesRecord(){
		$Query = "SELECT * FROM bus
		INNER JOIN driver ON (bus.bDriverId = driver.dId)
		INNER JOIN conductor ON (bus.bConId = conductor.conId)
		INNER JOIN stop ON (bus.bStopId = stop.stopId)
		WHERE bStatus = 'y'";
		$res = $this->conn->query($Query);
		$i = 0;
			$a = array();
			while ($rows = $res->fetch_assoc()) {
					foreach ($rows as $key => $value) {
					$a[$i][$key] = $value;
				}
				$i++;
			}
			return $a;
	}

	public function DepositData($data){
		extract($data);
		$Query = "SELECT student.sId, student.sName, student.sFName,student.sRollNo,batch.batchYear, department.deptShortName FROM student 
		INNER JOIN batch ON (student.sBatch = batch.batchId) 
		INNER JOIN department ON (student.sDept = department.deptId)
		WHERE student.sRollNo = '$sAc' AND student.sStatus = 'y'";
		$res = $this->conn->query($Query);
		
		if ($res->num_rows > 0) 
		{
			$fetch = $res->fetch_assoc();
			$Query = "SELECT student.sId,student.sRollNo, studentbalance.sId, sum(studentbalance.sBDeposit) AS totalDeposit, sum(studentbalance.sBWithdraw) AS totalWithdraw FROM student
		INNER JOIN studentbalance ON (student.sId = studentbalance.sId) 
		WHERE student.sRollNo = '$sAc' AND student.sStatus = 'y' AND studentbalance.sBStatus = 'y' ";
		$res = $this->conn->query($Query);
				if ($res->num_rows > 0) {
					$data = $res->fetch_assoc();
					$remAmm = ($data['totalDeposit'] - $data['totalWithdraw']);

					$sRoll_DB = $data['sRollNo'];
					if ($sRoll_DB != $sAc) {
						// echo json_encode(array("bal"=>"0"));
						echo json_encode(array("data"=>$fetch,"bal"=>"0"));
						return false;
					}else{
						echo json_encode(array("data"=>$fetch,"bal"=>$remAmm));
						// echo json_encode(array("bal"=>$remAmm));
						return true;
					}

				}
		}
	}


	public function busDepositData($data){
		extract($data);
		$Query = "SELECT bus.bId, bus.bNo, driver.dName, conductor.conName, stop.stopName FROM bus
		INNER JOIN driver ON(bus.bDriverId = driver.dId)
		INNER JOIN conductor ON(bus.bConId = conductor.conId)
		INNER JOIN stop ON(bus.bStopId = stop.stopId)
		WHERE bus.bNo = '$bNo' AND bus.bStatus = 'y'";
		$res = $this->conn->query($Query);
		if ($res->num_rows > 0) {

			$fetch = $res->fetch_assoc();
			// echo json_encode($fetch);
			$Query = "SELECT bus.bId, bus.bNo, bustransactions.bId, sum(bustransactions.btDeposit) AS BTD, sum(bustransactions.btwidthdraw) AS BTW FROM bus
			INNER JOIN bustransactions ON (bus.bId = bustransactions.bId)
			WHERE bus.bNo = '$bNo' AND bus.bStatus = 'y' AND bustransactions.btStatus = 'y'";
			$res = $this->conn->query($Query);
			if ($res->num_rows >0) {
				$data = $res->fetch_assoc();
				$remAmm = ($data['BTD'] - $data['BTW']);

				$bNo_DB = $data['bNo'];
				if ($bNo_DB != $bNo){
					
					echo json_encode(array("data"=>$fetch,"bal"=>"0"));
						return false;
				}else{
						echo json_encode(array("data"=>$fetch,"bal"=>$remAmm));
						// echo json_encode(array("bal"=>$remAmm));
						return true;
					}

			}
		
		
		}
	}














	// public function depositeTotal($data){
	// 	extract($data);
	// 	$Query = "SELECT student.sId,student.sRollNo, studentbalance.sId, sum(studentbalance.sBDeposit) AS totalDeposit, sum(studentbalance.sBWithdraw) AS totalWithdraw FROM student
	// 	INNER JOIN studentbalance ON (student.sId = studentbalance.sId) 
	// 	WHERE student.sRollNo = '$sAc' AND student.sStatus = 'y' ";
	// 	$res = $this->conn->query($Query);
	// 	if ($res->num_rows > 0) {
	// 		$data = $res->fetch_assoc();
	// 		$remAmm = ($data['totalDeposit'] - $data['totalWithdraw']);

	// 		$sRoll_DB = $data['sRollNo'];
	// 		if ($sRoll_DB != $sAc) {
	// 			echo json_encode(array("bal"=>"0"));
	// 			return false;
	// 		}else{
	// 			echo json_encode(array("bal"=>$remAmm));
	// 			return true;
	// 		}
	// 	}


	// }

	public function StudentAcUpdate($data){
		extract($data);

		$old_pic = $_POST['old_pic'];

		if (isset($_FILES['photo']["name"]) && 	($_FILES['photo']["name"] !="")) {
			
			$image = $_FILES['photo']["name"];
			$random_digit=rand(0000,9999);
			$new_image=$sName.$random_digit.$image;

			$tempname = $_FILES['photo']["tmp_name"];
			$ext = pathinfo($image,PATHINFO_EXTENSION);
			$folder = "uploads/students/".$new_image;
			// 1st delete Old file from folder
			unlink("uploads/students/$old_pic");
			// new file upload to folder
			move_uploaded_file($tempname,$folder);
		}
		else{
			$new_image = $old_pic;
		}

		$Query = "UPDATE student SET 
		sName 	= '$sName', 
		sFName 	= '$sFName' , 
		sBatch 	= '$sBatch', 
		sRollNo	= '$sRollNo', 
		sDept   = '$sDept', 
		sEmail  = '$sEmail',
		phone 	= '$phone', 
		sCnic	= '$sCnic',
		sPhoto 	= '$new_image'
		WHERE sId = '$sId' AND sStatus = 'y'";
		$res = $this->conn->query($Query);
		return $res;
			
	}



	public function BusesUpdate($data){
		extract($data);

		$Query = "UPDATE bus SET bNo = '$bNo', bDriverId = '$bDriverId', bConId = '$bConId', bStopId = '$bStopId', TotalSeats = '$TotalSeats'
		WHERE bId = '$bId' AND bStatus = 'y' ";
		$res = $this->conn->query($Query);
		return $res;
	}

	public function StopUpdate($data){
		extract($data);

		$Query = "UPDATE stop SET stopName = '$stopName'
		WHERE stopId = '$stopId'AND stopStatus = 'y' ";
		$res = $this->conn->query($Query);
		return $res;
	}

	public function conductorUpdate($data){
		extract($data);

		$Query = "UPDATE conductor SET conName = '$conName', conCnic = '$conCnic'
		WHERE conId = '$conId'AND conStatus = 'y' ";
		$res = $this->conn->query($Query);
		return $res;
	}

	public function DriverUpdate($data){
		extract($data);

		$Query = "UPDATE driver SET dName = '$dName', dCnic = '$dCnic'
		WHERE dId = '$dId'AND dStatus = 'y' ";
		$res = $this->conn->query($Query);
		return $res;
	}

	public function DepartmentUpdate($data){
		extract($data);

		$Query = "UPDATE department SET deptName = '$deptName', deptShortName = '$deptShortName'
		WHERE deptId = '$deptId'AND deptStatus = 'y' ";
		$res = $this->conn->query($Query);
		return $res;
	}


	public function StudentDelete($data){
		extract($data);

		$Query = "UPDATE student SET sStatus = 'n'
		WHERE sId = '$sId'";
		$res = $this->conn->query($Query);
		return $res;
	}

	public function BusesDelete($data){
		extract($data);

		$Query = "UPDATE bus SET bStatus = 'n'
		WHERE bId = '$bId'";
		$res = $this->conn->query($Query);
		return $res;
	}

	public function StopDelete($data){
		extract($data);

		$Query = "UPDATE stop SET stopStatus = 'n'
		WHERE stopId = '$stopId'";
		$res = $this->conn->query($Query);
		return $res;
	}

	public function ConductorDelete($data){
		extract($data);

		$Query = "UPDATE conductor SET conStatus = 'n'
		WHERE conId = '$conId'";
		$res = $this->conn->query($Query);
		return $res;
	}

	public function DriverDelete($data){
		extract($data);

		$Query = "UPDATE driver SET dStatus = 'n'
		WHERE dId = '$dId'";
		$res = $this->conn->query($Query);
		return $res;
	}

	public function DepartmentDelete($data){
		extract($data);

		$Query = "UPDATE department SET deptStatus = 'n'
		WHERE deptId = '$deptId'";
		$res = $this->conn->query($Query);
		return $res;
	}

	public function BatchDelete($data){
		extract($data);

		$Query = "UPDATE batch SET batchStatus = 'n'
		WHERE batchId = '$batchId'";
		$res = $this->conn->query($Query);
		return $res;
	}
	

	public function countTotalStudent(){
		$Query = "SELECT count(sId) AS totalStudent FROM student
		WHERE sStatus = 'y'";
		$res = $this->conn->query($Query);
			if ($res->num_rows > 0) 
			{
				$fetch = $res->fetch_assoc();
				return $fetch;
			}
			else
			{
				return false;
			}
	}	

	public function countTotalBuses(){
		$Query = "SELECT count(bId) AS totalBuses FROM bus
		WHERE bStatus = 'y'";
		$res = $this->conn->query($Query);
			if ($res->num_rows > 0) 
			{
				$fetch = $res->fetch_assoc();
				return $fetch;
			}
			else
			{
				return false;
			}
	}	

	public function countTotalStudentAmount(){

		$Query = "SELECT SUM(sBDeposit) AS totaldeposit, SUM(sBWithdraw) AS totalWithdraw FROM `studentbalance` WHERE sBStatus	 = 'y'";
		$res = $this->conn->query($Query);
		if ($res->num_rows > 0 ) {
			
			$fetch = $res->fetch_assoc();
			return $fetch;
			// $remAmm = ($data['totaldeposit'] - $data['totalWithdraw']);
			// return $remAmm;
			
		}
		else{
			return false;
		}
	}	

	public function countTotalBusesAmount(){
		$Query = "SELECT SUM(btDeposit) AS BTD, SUM(btwidthdraw) AS BTW FROM bustransactions WHERE btStatus = 'y'";
		$res = $this->conn->query($Query);
		if ($res->num_rows > 0 ) {
			
			$fetch = $res->fetch_assoc();
			return $fetch;
			// $remAmm = ($data['BTD'] - $data['BTW']);
			// return $remAmm;
		}
		else{
			return false;
		}
	}

	public function FetchstudentTransaction(){
		$Query = "SELECT * FROM studentbalance
		LEFT JOIN bus ON (studentbalance.sBBusId = bus.bId)
		LEFT JOIN operator ON (studentbalance.sBOpId = operator.oId)
		WHERE studentbalance.sBStatus = 'y'";
		$res = $this->conn->query($Query);
		$i = 0;
			$a = array();
			while ($rows = $res->fetch_assoc()) {
					foreach ($rows as $key => $value) {
					$a[$i][$key] = $value;
				}
				$i++;
			}
			return $a;
	}

	public function FetchBusesTransaction(){
		$Query = "SELECT * FROM bustransactions
		-- LEFT JOIN bus ON (studentbalance.sBId = bus.bId)
		LEFT JOIN operator ON (operator.oId = bustransactions.opId)
		WHERE bustransactions.btStatus = 'y'";
		$res = $this->conn->query($Query);
		$i = 0;
			$a = array();
			while ($rows = $res->fetch_assoc()) {
					foreach ($rows as $key => $value) {
					$a[$i][$key] = $value;
				}
				$i++;
			}
			return $a;
	}

	public function studentHistory($data){
		extract($data);
		$Query = "SELECT * FROM studentbalance
		INNER JOIN student ON (student.sId = studentbalance.sId)
		INNER JOIN department ON (department.deptId = student.sDept)
		INNER JOIN batch ON (batch.batchId = student.sBatch)
		LEFT JOIN bus ON (studentbalance.sBBusId = bus.bId)
		LEFT JOIN operator ON (studentbalance.sBOpId = operator.oId)
		WHERE studentbalance.sId = '$sId' AND studentbalance.sBDate  BETWEEN '$date1' AND '$date2' AND studentbalance.sBStatus = 'y'";
		$res = $this->conn->query($Query);
		$i = 0;
			$a = array();
			while ($rows = $res->fetch_assoc()) {
					foreach ($rows as $key => $value) {
					$a[$i][$key] = $value;
				}
				$i++;
			}
			return $a;
	}
}
$obj = new Mydb();
?>