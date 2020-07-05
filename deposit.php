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
          <!-- <div class="row"> -->
            <div class="col-md-12">
              <!-- <div class="card"> -->
                <!-- <div class="col-md-12"> -->
                 <center><h2 class="text-white">Deposit Amount</h2></center> 
                <div class="form-group">
                  <form id="accNoForm">
                    <div class="row justify-content-md-center">
                      <div class="col-md-4"> 
                        <div class="form-group has-success">
                          <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-lock-circle-open text-primary"></i></span>
                          </div>
                          <input class="form-control is-valid accountnumber" placeholder="Account Number" name="" type="number" autocomplete="off" >
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- </div> -->
              <!-- </div> -->
            </div>
          <!-- </div> -->
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="card-body">
                <form id="depositForm">
                    <div class="row">
                      <div class="col-md-6"> 
                        <input type="hidden" id="sId" name="sId">
                        <div class="form-group">
                          <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-single-02 text-primary"></i></span>
                          </div>
                          <input class="form-control is-valid" placeholder="Full Name" name="" id="sName" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6"> 
                        <div class="form-group">
                          <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-circle-08 text-primary"></i></span>
                          </div>
                          <input class="form-control is-valid" placeholder="Father Name" name="" type="text" id="sFName">
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
                          <input class="form-control is-valid" placeholder="Roll Number" name="" type="text" id="sBatch" >

                          </div>
                        </div>
                      </div>
                      <div class="col-md-6"> 
                        <div class="form-group">
                          <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-money-coins text-primary"></i></span>
                          </div>
                          <input class="form-control is-valid" placeholder="Personal Balance" name="" id="dBal" type="text" >
                          </div>
                        </div>
                      </div>  
                    </div>
                    <hr>

                    <div class="row justify-content-md-center">
                      <div class="col-md-6"> 
                        <div class="form-group">
                          <div id="dInput" class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-money-coins text-primary"></i></span>
                          </div>
                          <input class="form-control is-valid" placeholder="New Deposit Amount" name="" type="text" id="sBDeposit">
                          </div>
                        </div>
                      </div>
                    </div>
                     <center><button type="submit" class="btn btn-md bg-gradient-danger text-white submitDeposit" id="deposit">Deposit</button></center> 
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



<script type="text/javascript">
  $(document).ready(function(){
    var timeout;
    var delay = 200;   // 2 seconds
  $('.accountnumber').keyup(function(){
    console.log("User Start Typing...");
    if(timeout) {
            clearTimeout(timeout);
        }
        timeout = setTimeout(function() {
            myFunction();
        }, delay);

  function myFunction(){
    var $this = $('.accountnumber');
  var accountnumber = $this.val();  
  
    $.ajax(
            {     method:"POST",  
                  url:"paymentprocess.php",
                  data: {
                    "sAc":accountnumber,
                                  },
                    cache: false,
                   success: function(status)
                   {
                   console.log(status);
                   ress = $.parseJSON(status);
                   // console.log(ress.data);
                   // console.log(ress.bal);
                   // console.log(ress.data.sId);
                    $('#sId').val(ress.data.sId);
                    $('#sName').val(ress.data.sName);
                    $('#sFName').val(ress.data.sFName);
                    $('#sBatch').val(ress.data.batchYear+"-"+ress.data.deptShortName+"-"+ress.data.sRollNo);
                    // $('#sDept').val(ress.deptShortName);
                    // $('#sRollNo').val(ress.sRollNo);

                    // $('#dBal').css('border','');
                    $('#dBal').val(ress.bal); 
                   }
             });
  }
});
});

$(document).ready(function(){

  $('.submitDeposit').click(function(e){
    e.preventDefault();
    var sId = $('#sId').val();
    var sBDeposit = $('#sBDeposit').val();

    // var $nonnumric = ["!","@","#","$","%","^","&","*","(",")",",","-","_","~",".","/","|",";",":","<",">","?","+","=","[","]","{","}"];


    if (sId == ''){
       $("#modal-notification .display-4").text('Invalid ID, Please Search Correct Account');
      $('#modal-notification').modal('show'); 
    }
    else if (sBDeposit == '') {
       $('#dInput').css('border','2px solid crimson');
       $('#sBDeposit').attr('placeholder','Please Enter Amount');
    }
    else if (sBDeposit <= 0){
      $('#dInput').css('border','2px solid crimson');
      $("#modal-notification .display-4").text('Value Must Be Greater Than Zero');
      $('#modal-notification').modal('show'); 
    }
    // else if (sBDeposit == $nonnumric){
    //   $('#dInput').css('border','2px solid crimson');
    //   alert("nonnumric not allow");
    //    $('#depositForm')[0].reset();
    //               $('#accNoForm')[0].reset();
    // }
    else{
          $('#dInput').css('border','');
          $.ajax({
            method:"POST",
            url:"paymentprocess.php",
            data:{
              "deposit":0,
              "sId": sId,
              "sBDeposit": sBDeposit,
            },
            dataType: "text",
                success: function(response){
                  console.log(response);
                  $('#depositForm')[0].reset();
                  $('#accNoForm')[0].reset();
                }

        });
        }
        // $("#depositForm")[0].reset();
        
  });
});
</script>

</body>

</html>