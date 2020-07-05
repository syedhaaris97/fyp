<?php   
require 'db.php';
$data = $obj->qrData();
$id = $data['sRollNo'];
$account = $data['sAc'];




require_once 'phpqrcode/qrlib.php';

$path = 'cards/';
$file = $path.$account.".png";

    $codeContents = '';
    $codeContents .= 'Account:'.$account.",".'Id:'.$id;  
    // $codeContents .= 'Id:'.$id; 
QRcode::png($codeContents, $file, QR_ECLEVEL_H, 20, 2);
// png ($content, $file, ECC_LEVEL, Pixel_size, frame_sie)

header('location:studentAc.php');
  

?>