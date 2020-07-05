<?php 
require 'db.php';

if (isset($_POST['sAc'])) {
	
	$res = $obj->DepositData($_POST);
	// $data = $obj->depositeTotal($_POST);
}

if (isset($_POST['deposit'])) {
	var_dump($_POST);
	$res = $obj->depositStudentBalance($_POST);

}

if (isset($_POST['Withdraw'])) {
	extract($_POST);
	$res = $obj->WithDrawStudentBalance($sId,$sBWithdraw);
}

if (isset($_POST['bNo'])) {
	// var_dump($_POST);
	$res = $obj->busDepositData($_POST);
}

if (isset($_POST['busDeposit'])) {
	var_dump($_POST);
	$res = $obj->depositBusesBalance($_POST);
}

if (isset($_POST['busWithdraw'])) {
	extract($_POST);
	$res = $obj->WithDrawBusesBalance($bId,$btWithdraw);
}
 ?>