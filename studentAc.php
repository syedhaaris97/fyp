<?php 
require 'db.php';


$driver = $obj->fetchDriver();
$conductor = $obj->fetchConductor();
$stops = $obj->fetchBusStop();
$dept = $obj->fetchdept();
$Batch = $obj->fetchBatch();
$obj->is_login();
 ?>

<!DOCTYPE html>
<html>

<head>
 <?php require 'linkhead.php'; ?>
</head>
<style type="text/css">
  .row1{
    margin-top: 2rem;
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
          <div class="row justify-content-md-center">
            <div class="col-lg-4">
            <center><img src="assets/img/brand/2logo-usindh.png" class="img-responsive" alt="..."></center>
          </div>
          </div>
          
        </div>  
          <!-- header body -->
      </div>
    </div>

    <div class="container-fluid">
      <div class="header-body">
        <div  class="row row1">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0" data-toggle="modal" data-target="#newAcForm">
                <img class="card-img-top" src="assets/img/admin/st.jpg">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                     <center><h4 class="card-title text-uppercase text-muted mb-0 text-white  btn bg-gradient-danger">Create Student Account</h4></center> 
                    </div>
                  </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0 " data-toggle="modal" data-target="#card1st">
                <img class="card-img-top" src="assets/img/admin/card.jpg">

                <div class="card-body">
                  <div class="row">
                    <div class="col">
                   <center><h4 class="card-title text-uppercase text-muted mb-0 text-white btn bg-gradient-danger">Generate Student Card</h4></center>   
                    </div>
                  </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0" data-toggle="modal" data-target="#newDepartmentAccount">
                <img class="card-img-top" src="assets/img/admin/other.jpg">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                  <center> <h4 class="card-title text-uppercase text-muted mb-0 text-white btn bg-gradient-danger">Register Department</h4></center>   
                    </div>
                  </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0 " data-toggle="modal" data-target="#newBatchAccount">
                <img class="card-img-top" src="assets/img/admin/batch.jpg">

                <div class="card-body">
                  <div class="row">
                    <div class="col">
                    <center><h4 class="card-title text-uppercase text-muted mb-0 text-white btn bg-gradient-danger">Register Batch year</h4></center>  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div  class="row row1">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0 " data-toggle="modal" data-target="#newBusAccount">
                <img class="card-img-top" src="assets/img/admin/point.jpg">

                <div class="card-body">
                  <div class="row">
                    <div class="col">
                   <center><h4 class="card-title text-uppercase text-muted mb-0 text-white btn bg-gradient-danger">Bus/Point Registration</h4></center>   
                    </div>
                  </div>
                  </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0" data-toggle="modal" data-target="#newDriverAccount">
                <img class="card-img-top" src="assets/img/admin/driver.jpg">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                 <center> <h4 class="card-title text-uppercase text-muted mb-0 text-white btn bg-gradient-danger">Register Driver</h4></center>    
                    </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0" data-toggle="modal" data-target="#newConductorAccount">
                <img class="card-img-top" src="assets/img/admin/condutor.jpg">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                  <center> <h4 class="card-title text-uppercase text-muted mb-0 text-white btn bg-gradient-danger">Register Conductor</h4></center>   
                    </div>
                  </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0 " data-toggle="modal" data-target="#newDestinationAccount">
                <img class="card-img-top" src="assets/img/admin/stop.jpg">

                <div class="card-body">
                  <div class="row">
                    <div class="col">
                    <center><h4 class="card-title text-uppercase text-muted mb-0 text-white btn bg-gradient-danger">Register Destination</h4></center>  
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <!-- <div class="card card-stats mb-4 mb-xl-0 btn bg-gradient-danger" data-toggle="modal" data-target="#newDestinationAccount">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="card-title text-uppercase text-muted mb-0 text-white">Register Destination</h4>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
      </div>
    </div>
    
    <!-- Page content -->

<!-- Modal Form Student Registration -->
     <div class="modal fade" id="newAcForm" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
         
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-default">Student Registration Form</h3>
                <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <form action="processsStundetAc.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group has-success">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-single-02 text-primary"></i></span>
                    </div>
                    <input class="form-control is-valid" placeholder="Name" name="sName" type="text" >
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-single-02 text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Father Name" type="text" name="sFName">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-world-2 text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Phone Number" type="number" name="phone">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-single-copy-04 text-primary"></i></span>
                    </div>
                     <select class="form-control" name="sBatch" data-toggle="select" title="Simple select" data-live-search="true" data-live-search-placeholder="Search ...">
                          <option disabled="" selected="">BATCH</option>
                          <?php foreach ($Batch as $key => $value) {?>
                          <option value="<?php echo $value['batchId'] ?>"><?php echo $value['batchYear'] ?></option>
                          <?php } ?>
                     </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-planet text-primary"></i></span>
                    </div>
                     <select class="form-control" name="sDept" data-toggle="select" title="Simple select" data-live-search="true" data-live-search-placeholder="Search ...">
                          <option disabled="" selected="">Dept:</option>
                          <?php foreach ($dept as $key => $value) {?>
                          <option value="<?php echo $value['deptId'] ?>"><?php echo $value['deptName'] ?></option>
                          <?php } ?>
                     </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-badge text-primary"></i></span>
                    </div>
                      <input class="form-control" placeholder="RollNo" type="number" name="sRollNo">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-credit-card text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Username" type="text" name="sEmail" required>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-credit-card text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="text" name="sPassword" required>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-credit-card text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="CNIC number" type="text" name="sCnic" >
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-image text-primary"></i></span>
                    </div>
                    <div class="custom-file">
        <input type="file" class="custom-file-input" id="studentPic" name="photo" accept="image/*" onchange="loadFile(event)">
        <label class="custom-file-label" for="customFileLang"></label>
    </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                <center> <img id="output" class="img-fluid rounded-circle shadow-lg" style="width: 150px;" ></center> 
                </div>
              </div>
            </div>
            

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="sRegister">Register</button>
                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> 
            </div>
            </form>
           
            
            
            
        </div>
    </div>
</div>



<!-- Department Modal Form -->
<div class="modal fade" id="newDepartmentAccount" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-default">Department Reg: Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <form id="dept" action="" method="" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-building text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Department Name" type="text" name="deptName" id="deptName">
                    </div>
                  </div>
                </div>
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-building text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Department Short Name" type="text" name="deptShortName" id="deptShortName">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="departmentRegister" id="departmentRegister">Register</button>
                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> 
                
            </div>
            </form>      
        </div>
    </div>
</div>
<!-- Department Modal End -->


<!-- Departmetn Model Script -->
<!-- Batch Modal Form -->
<div class="modal fade" id="newBatchAccount" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-default">Department Reg: Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <form id="batchForm" action="" method="" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-building text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Batch" type="text" name="batchYear" >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="BatchRegister" id="BatchRegister">Register</button>
                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> 
            </div>
            </form>      
        </div>
    </div>
</div>
<!-- Batch Modal End  -->



<!-- Driver Modal Form -->
<div class="modal fade" id="newDriverAccount" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-default">Driver Reg: Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <form id="DriverForm" action="" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-single-02 text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Name" type="text" name="dName" >
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-credit-card text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="CNIC number" type="text" name="dCnic" >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="dRegister">Register</button>
                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> 

            </div>
            </form>      
        </div>
    </div>
</div>
<!-- Driver Modal Form End -->

<!-- Conductor Modal Form  -->
<div class="modal fade" id="newConductorAccount" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-default">Conductor Reg: Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <form id="conductorForm" action="" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-single-02 text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Name" type="text" name="cName" >
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-credit-card text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="CNIC number" type="text" name="cCnic" >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" id="cRegister">Register</button>
                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> 
            </div>
            </form>      
        </div>
    </div>
</div>

<!-- Conductor Modal Form  -->

<!-- Destination Modal Form -->
<div class="modal fade" id="newDestinationAccount" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-default">Destination Reg: Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <form id="stopForm" action="" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-square-pin text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Point Stop Name" type="text" name="stopName" >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="stopRegister">Register</button>
                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> 
            </div>
            </form>      
        </div>
    </div>
</div>

<!-- Destination Modal End  -->

<!-- Bus Modal Form -->
<div class="modal fade" id="newBusAccount" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-default">Bus/Point Reg: Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <form id="busForm" action="" method="" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-bus-front-12 text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Bus / Point Number" type="text" name="bNo"  >
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-bus-front-12 text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Point A/c Password" type="text" name="bPss"  >
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-user-run text-primary"></i></span>
                    </div>
                    <select class="form-control" name="bDriverId" data-toggle="select" title="Simple select" data-live-search="true" data-live-search-placeholder="Search ...">
                          <option disabled="" selected="">Driver</option>
                          <?php foreach ($driver as $key => $value) { ?>
                            <option value="<?php echo $value['dId'] ?>"><?php echo $value['dName'] ?></option>
                      <?php    } ?>
                     </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-user-run text-primary"></i></span>
                    </div>
                   
                    <select class="form-control" name="bConId" data-toggle="select" title="Simple select" data-live-search="true" data-live-search-placeholder="Search ...">
                          <option disabled="" selected="">Conductor</option>
                          <?php foreach ($conductor as $key => $value) {  ?>
                          <option value="<?php echo $value['conId'] ?>"><?php echo $value['conName'] ?></option>
                          <?php } ?>
                     </select>
                   
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-square-pin text-primary"></i></span>
                    </div>
                    <select class="form-control" name="bStopId" data-toggle="select" title="Simple select" data-live-search="true" data-live-search-placeholder="Search ...">
                          <option disabled="" selected="">Bus/Point Stop</option>
                          <?php foreach ($stops as $key => $value) {?>
                          <option value="<?php echo $value['stopId'] ?>"><?php echo $value['stopName'] ?></option>
                          <?php } ?>
                     </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-delivery-fast text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Number of Seats" type="number" name="TotalSeats" >
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-money-coins text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Point Fare" type="number" name="bFare" >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="busRegister" id="busRegister">Register</button>
                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> 
                
            </div>
            </form>      
        </div>
    </div>
</div>
<!-- Bus Modal End  -->
<!-- Card Modal 1st -->
<div class="modal fade" id="card1st" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-default">Card</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <form action="cards.php" method="POST" enctype="multipart/form-data"  target="_blank">
            <div class="modal-body" >

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-single-copy-04 text-primary"></i></span>
                    </div>




                     <select class="form-control" name="sBatch" data-toggle="select" title="Simple select" data-live-search="true" data-live-search-placeholder="Search ...">
                          <option disabled="" selected="">BATCH</option>
                          <?php foreach ($Batch as $key => $value) {?>
                          <option value="<?php echo $value['batchId'] ?>"><?php echo $value['batchYear'] ?></option>
                          <?php } ?>
                     </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-planet text-primary"></i></span>
                    </div>


                     <select class="form-control" name="sDept" data-toggle="select" title="Simple select" data-live-search="true" data-live-search-placeholder="Search ...">
                          <option disabled="" selected="">Dept:</option>
                          <?php foreach ($dept as $key => $value) {?>
                          <option value="<?php echo $value['deptId'] ?>"><?php echo $value['deptName'] ?></option>
                          <?php } ?>
                     </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-badge text-primary"></i></span>
                    </div>
                      <input class="form-control" placeholder="RollNo" type="number" name="sRollNo">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"  name="cardG"  target="_blank" >Generate Card</button>
                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> 
            </div>
            </form>
           
            
            
            
        </div>
    </div>
</div>
<!-- End Card modal 1st -->


</div>














      <!-- Dark table -->
      
      <!-- Footer -->
      
    </div>
  </div>

  <!-- Image script -->
  <script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>








  <!-- Argon Scripts -->
  
  <!-- Core -->
  <?php require 'linkfooter.php'; ?>



<!-- Department Insert script  -->
<?php require 'modalscript.php' ?>
<!-- Department script End      -->
</body>

</html>