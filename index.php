<!DOCTYPE html>
<html>

<head>
  <?php require 'linkhead.php';  ?>
</head>
<style type="text/css">
  .card{
    margin-top: 12rem;
    background-color: #f8f9fe59;

  }
  .text-light {
    color: black !important;
}
  body{
     background:url(assets/img/bg/usind.jpg)  no-repeat center center fixed;
     -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

  }
</style>
<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <!-- Header -->

    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
              <div class="btn-wrapper text-center">
                          <center><img src="assets/img/brand/2logo-usindh.png" width="80%;"></center>       
          
            
                
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <a href="#" class="btn btn-neutral btn-icon">
                  <!-- <span class="btn-inner--icon"><img src="assets/img/brand/2logo-usindh.png"></span> -->
                  <span class="btn-inner--text justify-content-center">Welcome to DTS Accounts</span>
                </a>
              </div>
              <form role="form" method="POST" action="form_access.php">
                <div id="userInput" class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83 text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="text" name="username" id="username" autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <div id="passInput" class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password" id="password">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <!-- <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin"> -->
                   <!--  <span class="text-muted">Remember me</span> -->
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4" name="signIn">Sign in</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
   <!-- <?php require 'footer.php'; ?> -->
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.0.0"></script>
</body>

<script type="text/javascript">
  $(document).ready(function () {
      
      $('#username').focusout(function () {
          CheckUsername();          
      });

      $('#password').focusout(function () {
          CheckPassword();       
      });


      function CheckPassword() {        
        blankpass = $('#password').val();

        if (blankpass =='') {
          $('#passInput').css('border','1px solid red');
          $('#password').attr('placeholder','Please Enter Password');

        }else{
          $('#password').css('border','');
        }
      }

      function CheckUsername() {
        blankUsername = $('#username').val();

        if (blankUsername == '') {
          $('#passInput').css('border','1px solid red');
          $('#username').attr('placeholder','Please Enter Email');
          
          }else{
            $('#username').css('border','');
          }
      }
  })
</script>

<script type="text/javascript">
    $(document).ready(function () {
            
        $('#username').focusout(function () {
            username = $('#username').val();
           $.ajax({
                type: "POST",
                url: "form_access.php",
                data: {
                   username  : username,      
                },
                    
                success: function (result) {
                      var res = $.parseJSON(result);

                           console.log(res.status);
                       if (res.status == "wrong_user_name") {

                    $('#userInput').css('border','2px solid red',);
                    $('#userInput').css('border-radius', '8px');
                     $('#username').val('');
                        $('#username').attr('placeholder','Wrong User Name');
                        
                       }else{
                          $('#userInput').css('border','');
                       }
                }
        });
        })
})
</script>

<script type="text/javascript">
    $(document).ready(function () {
            
        $('#password').focusout(function () {
            password = $('#password').val();
           $.ajax({
                type: "POST",
                url: "form_access.php",
                data: {
                   password  : password,      
                },
                    
                success: function (result) {
                      var res = $.parseJSON(result);

                           console.log(res.status);
                       if (res.status == "wrong_user_pass") {

                    $('#passInput').css('border','2px solid red',);
                    $('#passInput').css('border-radius', '8px');
                     $('#password').val('');
                        $('#password').attr('placeholder','Wrong Password');
                        
                       }else{
                          $('#passInput').css('border','');
                       }
                }
        });
        })
})
</script>

</html>