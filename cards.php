<?php 
require 'db.php';

if (isset($_POST['cardG'])) {
  $data = $obj->cardData($_POST);
  // var_dump($data);

}

 ?>


<!DOCTYPE html>
<html>
<head>
  <?php require 'linkhead.php'; ?>
  <script src="html2canvas/dist/html2canvas.js"></script>
  <script src="html2canvas/dist/html2canvas.min.js"></script>

  <title></title>
  <style type="text/css">
   #heading{
    text-align: center;
    margin-top: -1rem;
   }
   #qr{
    float: right;
    margin-top: -6rem;  
   }
   #hr{
    margin-top: -1rem;
   }
   #dp{
    float: left;
    margin-top: -1rem;

   }
   #info{
    text-align: center;
    /*margin-top: -2rem;*/
   }
  
  </style>
</head>
<body>

<div  class="container">
  <div class="col-md-6 offset-3">
    <div  id="capture" class="card">
  <div class="card-body" id="capture">
     <h1 id="heading">UNIVERSITY OF SINDH</h1> 
    <h4  id="heading" class="card-title">Institute of Information and Communication Technology</h4>
    <hr id="hr">
    
    <img id="dp" src="uploads/Students/<?php echo $data[0]['sPhoto'] ?>" class="img-fluid rounded-circle" width="100px" height="100px;">
    
   

  <table id="info" width="50%">
      
      <tbody>
        <tr>
          <th>Name: <?php echo $data[0]['sName'] ?></td>
        </tr>
        <tr>
          <th>Roll Number: <?php echo $data[0]['batchYear']."-".$data[0]['deptShortName']."-".$data[0]['sRollNo']?></th>
        </tr>
        <tr>
          <th>Account #: <?php echo $data[0]['sAc'] ?></th>
        </tr>
      </tbody> 
    </table>

     <img id="qr" src="cards/<?php echo $data[0]['sAc'].".png"?>"width="100px" height="100px;">
 <!--   <div class="card-footer text-muted">
    2 days ago
  </div> -->
</div> 
</div>
  
</div>
</div>
<center><button type="submit" id="download" class="btn btn-primary" onclick="myfunction()">Download</button></center>
</body>
<script type="text/javascript">
  function myfunction(){

document.getElementById("download").addEventListener("click", function() {

    html2canvas(document.querySelector('#capture')).then(function(canvas) {

        console.log(canvas);
        saveAs(canvas.toDataURL(), '<?php echo $data[0]['sAc'] ?>.png');
    });
});


function saveAs(uri, filename) {

    var link = document.createElement('a');

    if (typeof link.download === 'string') {

        link.href = uri;
        link.download = filename;

        //Firefox requires the link to be in the body
        document.body.appendChild(link);

        //simulate click
        link.click();

        //remove the link when done
        document.body.removeChild(link);

    } else {

        window.open(uri);

    }
}
}
</script>



<?php require 'linkfooter.php'; ?>
</html>