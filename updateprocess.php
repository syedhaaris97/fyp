<?php 
require 'db.php';
if (isset($_POST['busUpdate'])) {
	// var_dump($_POST);
	$data = $obj->BusesUpdate($_POST);
	if (!$data) {
		echo "not update";
	}
	else{
		header('location:busrecord.php');
	}
}

if (isset($_POST['stopUpdate'])) {
	$data = $obj->StopUpdate($_POST);
	if (!$data) {
		echo " stop not update";
	}
	else{
		header('location:stoprecord.php');
	}
}



if (isset($_POST['conUpdate'])) {
	$data = $obj->conductorUpdate($_POST);
	if (!$data) {
		echo " conductor not update";
	}
	else{
		header('location:conductorRecord.php');
	}
}

if (isset($_POST['dUpdate'])) {
	$data = $obj->DriverUpdate($_POST);
	if (!$data) {
		echo " driver not update";
	}
	else{
		header('location:driverrecord.php');
	}
}

if (isset($_POST['deptUpdate'])) {
	var_dump($_POST);
	$data = $obj->DepartmentUpdate($_POST);
	if (!$data) {
		echo " department not update";
	}
	else{
		header('location:deptrecord.php');
	}
}





 ?>