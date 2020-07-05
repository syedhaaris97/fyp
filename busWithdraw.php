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
#invalidID{
  margin-top: -3rem;
  margin-left: 7rem;  

}

</style>
        
<body>
  <!-- bIdenav -->
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
                  
                 <center><h2 class="text-white">Buses Withdraw Amount</h2></center> 
                <div class="form-group">
                  <form id="accNoForm">
                    <div class="row justify-content-md-center">
                      <div class="col-md-4"> 

                        <div class="form-group has-success">

                          <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-lock-circle-open text-primary"></i></span>
                          </div>
                          <input class="form-control is-valid busnumber" placeholder="Bus Number" name="" type="text" autocomplete="off" >
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
                <form id="withdrawForm">
                    <div class="row">
                      <div class="col-md-6"> 
                        <input type="hidden" id="bId" name="bId">
                        <div class="form-group">
                          <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-single-02 text-primary"></i></span>
                          </div>
                          <input class="form-control is-valid" placeholder="Driver Name" name="" id="dName" type="text" >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6"> 
                        <div class="form-group">
                          <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-circle-08 text-primary"></i></span>
                          </div>
                          <input class="form-control is-valid" placeholder="Conductor Name" name="" type="text" id="conName">
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
                          <input class="form-control is-valid" placeholder="Point Area/Location" name="" type="text" id="stopName" >

                          </div>
                        </div>
                      </div>
                      <div class="col-md-6"> 
                        <div class="form-group">
                          <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-money-coins text-primary"></i></span>
                          </div>
                          <input class="form-control is-valid" placeholder="Available Balance" name="" id="dBal" type="text" >
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
                          <input class="form-control is-valid" placeholder="New Withdraw Amount" name="" type="text" id="btWithdraw">
                          </div>
                        </div>
                      </div>
                    </div>
                     <center><button type="submit" class="btn btn-md bg-gradient-danger text-white submitWithdraw" id="deposit">Withdraw</button></center> 
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- <button type="button" class="btn btn-block btn-warning mb-3" data-toggle="modal" data-target="#modal-notification">Notification</button> -->
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
  <div>
    
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <?php require 'linkfooter.php'; ?>



<script type="text/javascript">
  $(document).ready(function(){
    var timeout;
    var delay = 100;   // 2 seconds
  $('.busnumber').keyup(function(){
    console.log("User Start Typing...");
    if(timeout) {
            clearTimeout(timeout);
        }
        timeout = setTimeout(function() {
            myFunction();
        }, delay);

  function myFunction(){
    var $this = $('.busnumber');
  var busnumber = $this.val();  
  
    $.ajax(
            {     method:"POST",  
                  url:"paymentprocess.php",
                  data: {
                    "bNo":busnumber,
                                  },
                    cache: false,
                   success: function(status)
                   {
                   console.log(status);
                   ress = $.parseJSON(status);
                   // console.log(ress.data);
                   // console.log(ress.bal);
                   // console.log(ress.data.bId);
                    $('#bId').val(ress.data.bId);
                    $('#dName').val(ress.data.dName);
                    $('#conName').val(ress.data.conName);
                    $('#stopName').val(ress.data.stopName);
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

  $('.submitWithdraw').click(function(e){
    e.preventDefault();
    var bId = $('#bId').val();
    var btWithdraw = $('#btWithdraw').val();

    // var $nonnumric = ["!","@","#","$","%","^","&","*","(",")",",","-","_","~",".","/","|",";",":","<",">","?","+","=","[","]","{","}"];


    if (bId == ''){
   $("#modal-notification .display-4").text('Invalid ID, Please Search Correct Account');
   $('#modal-notification').modal('show'); 
    }
    else if (btWithdraw == '') {
       $('#dInput').css('border','2px solid crimson');
       $('#btWithdraw').attr('placeholder','Please Enter Amount');
    }
    else if (btWithdraw <= 0){
      $('#dInput').css('border','2px solid crimson');
      $("#modal-notification .display-4").text('Value Must Be Greater Than Zero');
      $('#modal-notification').modal('show'); 
    }
    // else if (btWithdraw == $nonnumric){
    //   $('#dInput').css('border','2px solid crimson');
    //   alert("nonnumric not allow");
    //    $('#withdrawForm')[0].reset();
    //               $('#accNoForm')[0].reset();
    // }
    else{
          $('#dInput').css('border','');
          $.ajax({
            method:"POST",
            url:"paymentprocess.php",
            data:{
              "busWithdraw":0,
              "bId": bId,
              "btWithdraw": btWithdraw,
            },
            dataType: "text",
                success: function(response){
                 console.log(response);
                  // console.log(sId);
                  $('#withdrawForm')[0].reset();
                  $('#accNoForm')[0].reset();
                  var ress = $.parseJSON(response);
                  
                  if (ress.status == "insufficient balance") {
                        $('#WInput').css('border','2px solid crimson');
                       $("#modal-notification .display-4").text('Insufficient Balance');

                        $('#modal-notification').modal('show'); 
                        $('#withdrawForm')[0].reset();
                        $('#accNoForm')[0].reset();
                    }
                    else if (ress.status != "insufficient balance") {
                        $('#withdrawForm')[0].reset();
                        $('#accNoForm')[0].reset();
                    }
                }

        });
        }
        // $("#withdrawForm")[0].reset();
        
  });
});
</script>

</body>

</html>