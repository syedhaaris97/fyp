<?php 
require 'db.php';

if (isset($_POST['bId'])) {
	$data = $obj->BusesDelete($_POST);
}

if (isset($_POST['stopId'])) {
	$data = $obj->StopDelete($_POST);
}

if (isset($_POST['conId'])) {
	$data = $obj->ConductorDelete($_POST);
}


if (isset($_POST['dId'])) {
	$data = $obj->DriverDelete($_POST);
}

if (isset($_POST['deptId'])) {
	$data = $obj->DepartmentDelete($_POST);
}

if (isset($_POST['batchId'])) {
	$data = $obj->BatchDelete($_POST);
}

if (isset($_POST['sId'])) {
	$data = $obj->StudentDelete($_POST);
}
 ?>