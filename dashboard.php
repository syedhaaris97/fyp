<?php 
require 'db.php';

$obj->is_login();
$totalstudent = $obj->countTotalStudent();
$totalbuses = $obj->countTotalBuses();
$studentbalance = $obj->countTotalStudentAmount();
if ($studentbalance) {
  $remAmm = ($studentbalance['totaldeposit'] - $studentbalance['totalWithdraw']);
  // return $remAmm;
}

$busesBalance = $obj->countTotalBusesAmount();
// var_dump($busesBalance);
if ($busesBalance) {
      $remAmmBus = ($busesBalance['BTD'] - $busesBalance['BTW']);
}


$studentTranc = $obj->FetchstudentTransaction();

$busTranc = $obj->FetchBusesTransaction();
?>

<!DOCTYPE html>
<html>

<head>
  <?php require 'linkhead.php'; ?>
</head>
<style>
td{
  font-weight: bold;
}
th{
  font-weight: bold;
}
</style>
<body>
  <!-- Sidenav -->
  <?php require 'linksidebar.php'; ?>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <?php require 'linknav.php'; ?>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Students</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $totalstudent['totalStudent']; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                        <!-- fas fa-chart-bar -->
                      </div>
                    </div>
                  </div>
                  <!-- <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Registered Buses</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $totalbuses['totalBuses'] ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="ni ni-bus-front-12"></i>
                      </div>
                    </div>
                  </div>
                 <!--  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                    <span class="text-nowrap">Since last week</span>
                  </p> -->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Students Amount</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $remAmm; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                  <!-- <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                    <span class="text-nowrap">Since yesterday</span>
                  </p> -->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Buses Amount</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $remAmmBus; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="ni ni-money-coins "></i>
                      </div>
                    </div>
                  </div>
                  <!-- <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Students Transactions</h3>
                </div>
              </div>
            </div>
            <div class="row justify-content-md-center">
              <div class="col-lg-11">
              <div class="table-responsive">
                
              <!-- Projects table -->
              <table class="table table-flush" id="datatable-5th">
                <thead class="thead-light">
                  <tr>
                    <th>#</th>
                    <th>Student ID</th>
                    <th>Deposit</th>
                    <th>Withdraw</th>
                    <th>Bus Number</th>
                    <th>Operator Name</th>
                    <th>Date</th>
                    <!-- <th>Action</th> -->
                  </tr>
                </thead>
                <tbody>

                 <?php $counter = 1;
                 foreach ($studentTranc as $key => $value) { ?>
                  <tr>
                    <td><?php echo $counter; ?></td>
                    <td><?php echo $value['sId'] ?></td>
                    <td><?php echo $value['sBDeposit'] ?></td>
                    <td><?php if (isset($value['sBWithdraw'])){ echo "-".$value['sBWithdraw']; }?></td>
                    <td><?php echo $value['bNo'] ?></td>
                    <td><?php echo $value['oName'] ?></td> 
                    <td><?php echo $value['sBDate']?></td>
                    
                  </tr>
                  <?php $counter++; } ?>
                </tbody> 
              </table>
              <!-- Table data -->
            </div>
            </div>
            </div>
            <br>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Buses Transactions</h3>
                </div>
                
              </div>
            </div>
            <div class="row justify-content-md-center">
              <div class="col-lg-11">
              <div class="table-responsive">
              <!-- Projects table -->
              <table class="table table-flush" id="datatable-6th">
                <thead class="thead-light">
                  <tr>
                    <th>#</th>
                    <th>Bus ID</th>
                    <th>Deposit</th>
                    <th>Student ID</th>
                    <th>Withdraw</th>
                    <th>Operator Id</th>
                    <th>Date</th>
                    <!-- <th>Action</th> -->
                  </tr>
                </thead>
                <tbody>
                 <?php $counter =1;
                  foreach ($busTranc as $key => $value) { ?>
                  <tr>
                    <td><?php echo $counter; ?></td>
                    <td><?php echo $value['bId'] ?></td>
                    <td><?php echo $value['btDeposit'] ?></td>
                    <td><?php echo $value['studentId'] ?></td>
                    <td><?php if (isset($value['btwidthdraw'] )){echo "-".$value['btwidthdraw'];}?></td>
                    <td><?php echo $value['oName'] ?></td> 
                    <td><?php echo $value['btDate']?></td>
                  </tr>
                  <?php $counter++; } ?>
                </tbody> 
              </table>
              <!-- Table data -->
            </div>
            </div>
            </div>
            <br>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <?php require 'footer.php'; ?>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <?php require 'linkfooter.php'; ?>

  <script type="text/javascript">
$(document).ready(function() {
  $('#datatable-5th').DataTable();
} );
 </script> 
 <script type="text/javascript">
$(document).ready(function() {
  $('#datatable-6th').DataTable();
} );
 </script> 
</body>

</html>