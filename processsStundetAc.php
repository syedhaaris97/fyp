<?php
require 'db.php';
var_dump($_POST); 

$image = $_FILES['photo']["name"];
$tempname = $_FILES['photo']["tmp_name"];
$folder = "uploads/students/".$image;



$uploadOk = 1;
$imageFileType = pathinfo($folder,PATHINFO_EXTENSION);

if (isset($_POST['sRegister']))
{
  $check = getimagesize($_FILES["photo"]["tmp_name"]);
  if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
  } else {
      echo "File is not an image.";
      $uploadOk = 0;
  }
}


if (file_exists($folder)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}



// Check file size
if ($_FILES["photo"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// checking document file size

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
}
else {

	 $data = $obj->createStudentAcc($_POST);
   if ($data) {
     header('location:qrcode.php');
   }
   else
   {
    echo "not inserted";
   }
}
?>
