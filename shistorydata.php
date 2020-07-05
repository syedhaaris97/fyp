<?php 

require 'db.php';

if (isset($_POST['shistory'])) {
$shistory = $obj->studentHistory($_POST);
		// var_dump($_POST);
		// $data1 =  $obj->findAttendance($_POST);
		// // var_dump($data1);

		// $data2 = $obj->totalWorkingHours($_POST);
		// // var_dump($data2);

  //   $data3 = $obj->leavesNo($_POST);
}
?>

 
<html>
    <head>
       <title>..</title>
  
  <style>
  
         #header h1{
           margin-top: -4rem;
           margin-bottom: 2rem;
           margin-left: 9rem;
         }
          body{
          font-size: 12px;
          font-family: "verdana", Geneva, sans-serif;

         }
         th{
          font-weight: bold;
          font-size: 13px;
          padding-left:  4px;
          text-align: left;
         }
         #service td{
          border:solid 1px;
          padding: 2px;
          font-size: 12px;
          /*border-left: none;
          border-top: none;
          border-right: none;*/

         }
         #headingTable th{
          text-align: left;
          font-size: 13px;
         }

         #headingTable td{
          text-align: left;
          font-size: 12px;
         }
         table{
          border-collapse: collapse;
            border: 1px;
         }
  body{
    margin: 5px;
    
  }
</style>
    </head>
    <center>
    <body>
        <!-- Define header and footer blocks before your content -->
        <!-- Wrap the content of your PDF inside a main tag -->
        <div id="header">
         <!--  <img src="" width="100px" height="100px"/> -->
          <center><img src="assets/img/brand/2logo-usindh.png" width= "20%" height="100px"  /></center>
           <h3><u><b>STUDENT TRANSACTIONS HISTORY</b></u></h3>
     
        </div>
        <hr style="border: 1px solid black; width: 98%" />
        <div>
       <table style="width:90%" id="headingTable" >
          
          <tr>
            <th >Student Name:</th><td style="font-weight: bold;"><?php echo $shistory[0]['sName'] ?></td>
            <th>Father Name</th><td style="font-weight: bold;"><?php echo $shistory[0]['sFName']?></td>
            <th>Roll #:</th><td style="font-weight: bold;"><?php echo $shistory[0]['batchYear']."-".$shistory[0]['deptShortName']."-".$shistory[0]['sRollNo']?></td>
            <!-- <th>Designation:</th><td style="font-weight: bold;"><?php echo $shistory[0]['pName']?></td> -->
          </tr>
          <!-- </table>
          <br>
          <br>
        <table style="width:98%" > -->
          
          <tr>
            <th >From: </th><td style="font-weight: bold;"><?php echo $_POST['date1'] ?></td>
            <th>To: </th><td style="font-weight: bold;"><?php echo $_POST['date2'] ?></td>
            <th>Today's Date: </th><td style="font-weight: bold;"><?php echo date("Y-m-d")?></td>
            
          </tr>
          
          </table>
        </div>
        <hr style="border: 1px solid black; width: 98%" />
      <div>
      
      </div>
    
       

        <br>
<table style="width:90%; class="table table-striped table-bordered table-hover" id="service">
         <thead>
              <tr>
                <th>#</th>
                <th>Student Id </th>
                <th>Account #</th>
                <th>Deposit</th>
                <th>Withdraw</th>
                <th>Operator</th>
                <th>Date</th>
                <!-- <th>Working Time</th> -->
                <!-- <th>Absent</th> -->

              </tr>
          </thead>
          <tbody>
          <?php  $counter = 1;
            foreach ($shistory as $key => $value) { 
          		 ?>
            <tr>
              <td><?php echo $counter; ?></td>
              <td><?php echo $value['sId']?></td>
              <td><?php echo $value['sAc'] ?></td>
              <td><?php echo $value['sBDeposit'] ?></td>
              <td><?php if (isset( $value['sBWithdraw'])) { echo "-".$value['sBWithdraw']; }?></td>
              <td><?php echo $value['oName'] ?></td>
              <td><?php echo $value['sBDate'] ?></td>
               <!-- <td><?php echo $value['workTime'] ?></td> -->



            </tr>
         <?php $counter++; } ?>
       </tbody>
    </table>






      <br>

    </body> 
  </center>
</html>
