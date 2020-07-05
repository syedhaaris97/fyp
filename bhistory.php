<?php 
require 'db.php';
$obj->is_login();
 ?>

<!DOCTYPE html>
<html>

<head>
  <?php require 'linkhead.php'; ?>
</head>
<style type="text/css">
.card{
  margin-top: -8rem;
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
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card shadow">
            <div class="card-header bg-transparent">
                <center><h3>Buses Account History</h3></center> 
              <div class="card-body">
                <form id="depositForm">
                    <div class="row justify-content-md-center">
                      <div class="col-md-6"> 
                        <input type="hidden" id="sId" name="sId">
                        <div class="form-group">
                          <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-single-02 text-primary"></i></span>
                          </div>
                          <input class="form-control is-valid" placeholder="Account #" name="" id="sName" type="text" >
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-6"> 
                        <div class="form-group">
                          <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-badge text-primary"></i></span>
                          </div>
                          <input class="form-control is-valid" name="" type="date" id="">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6"> 
                        <div class="form-group">
                          <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-money-coins text-primary"></i></span>
                          </div>
                          <input class="form-control is-valid" name="" id="" type="date" >
                          </div>
                        </div>
                      </div>  
                    </div>
                    <hr>

                     <center><button type="submit" class="btn btn-md bg-gradient-danger text-white submitDeposit" id="">Find</button></center> 
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">

            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-notification">Your attention is required</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4">You should read this!</h4>
                    <p class="display-4"></p>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Ok, Got it</button>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div> 


  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <?php require 'linkfooter.php'; ?>

</body>

</html>