<script type="text/javascript">
     // $(document).ready(function(){

     //  function validateDate(key){
     //    var name = $("#deptName").val();
     //    var shortname = $("#deptShortName").val();

     //    if(isNotEmpty(name) && isNotEmpty(shortname)){
     //       alert('Here');
     //    }
     //  }


     //  function isNotEmpty(caller) {
     //        if (caller.val() == '') {
     //            caller.css('border', '1px solid red');
     //            return false;
     //        } else
     //            caller.css('border', '');

     //        return true;
     //    }



     // }); 


    $(document).ready(function(){

        $('#departmentRegister').click(function(e){
            e.preventDefault();
            $.ajax({
                url: "form_access.php",
                method: "post",
                data: $('#dept').serialize(),
                dataType: "text",
                success: function(strMessage){
                  // alert(strMessage);
                      $('#newDepartmentAccount').modal('hide');
                      $('#dept')[0].reset();
                }
            });
        });


        $('#BatchRegister').click(function(e){
            e.preventDefault();
            $.ajax({
                url: "form_access.php",
                method: "post",
                data: $('#batchForm').serialize(),
                dataType: "text",
                success: function(strMessage){
                  // alert(strMessage);
                      $('#newBatchAccount').modal('hide');
                      $('#batchForm')[0].reset();
                }
            });
        });


      $('#busRegister').click(function(e){
            e.preventDefault();
            $.ajax({
                url: "form_access.php",
                method: "post",
                data: $('#busForm').serialize(),
                dataType: "text",
                success: function(strMessage){
                  // alert(strMessage);
                      $('#newBusAccount').modal('hide');
                      $('#busForm')[0].reset();
                }
            });
        });

      $('#cRegister').click(function(e){
            e.preventDefault();
            $.ajax({
                url: "form_access.php",
                method: "post",
                data: $('#conductorForm').serialize(),
                dataType: "text",
                success: function(strMessage){
                  // alert(strMessage);
                      $('#newConductorAccount').modal('hide');
                      $('#conductorForm')[0].reset();
                }
            });
        });


      $('#dRegister').click(function(e){
            e.preventDefault();
            $.ajax({
                url: "form_access.php",
                method: "post",
                data: $('#DriverForm').serialize(),
                dataType: "text",
                success: function(strMessage){
                  // alert(strMessage);
                      $('#newDriverAccount').modal('hide');
                      $('#DriverForm')[0].reset();
                }
            });
        });

      $('#stopRegister').click(function(e){
            e.preventDefault();
            $.ajax({
                url: "form_access.php",
                method: "post",
                data: $('#stopForm').serialize(),
                dataType: "text",
                success: function(strMessage){
                  // alert(strMessage);
                      $('#newDestinationAccount').modal('hide');
                      $('#stopForm')[0].reset();
                }
            });
        });



     });
    </script>
