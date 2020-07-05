<?php 
require 'db.php';
$obj->is_login();
 ?>

<!DOCTYPE html>
<html>

<head>
  <?php require 'linkhead.php'; ?>
</head>

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
          <div class="header-body">
          <!-- Card stats -->
          <div class="row justify-content-md-center">
            <div class="col-lg-4">
            <center><img src="assets/img/brand/2logo-usindh.png" class="img-responsive" alt="..."></center>
          </div>
          </div>
          
        </div> 
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="col-md-12">
                 <div class="table-responsive py-4">
                   <center><h2>Student Record</h2></center>  
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Father Name</th>
                    <th>Email</th>
                    <th>Roll #</th>
                    <th>Phone</th>
                    <th>CNIC</th>
                    <!-- <th>Account</th> -->
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <!-- <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Father Name</th>
                    <th>Roll #</th>
                    <th>Phone</th>
                    <th>CNIC</th>
                    <th>Account</th>
                    <th>Photo</th>
                  </tr>
                </tfoot> -->
<?php

$student = $obj->studentRecord();;
$batch = $obj->fetchBatch();
$department = $obj->fetchdept();
// var_dump($student);
  ?>
                <tbody>
                 <?php foreach ($student as $key => $value) { 
                  
                  ?>
                  <tr>
                    <td><?php echo $value['sId'] ?></td>
                    <td><?php echo $value['sName'] ?></td>
                    <td><?php echo $value['sFName'] ?></td>
                    <td><?php echo $value['sEmail'] ?></td>
                    <td><?php echo $value['batchYear']."-".$value['deptShortName']."-".$value['sRollNo'] ?></td>
                    <td><?php echo $value['phone'] ?></td>
                    <td><?php echo $value['sCnic'] ?></td>
                    <!-- <td><?php echo $value['sAc'] ?></td> --> 
                    <td><img alt="Image placeholder" src="uploads/students/<?php echo $value['sPhoto']  ?>" width="36px" height="36px" class="rounded-circle img-responsive"></td>
                    <td>
                      <a class="btn btn-warning btn-sm text-white" data-toggle="modal" data-target="#editStudent-<?php echo $value['sId']?>">Edit</a>



                      <div class="modal fade" id="editStudent-<?php echo $value['sId'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-default">Student Update Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <form action="studentUpdate.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <input class="form-control" placeholder="Name" name="sId" type="hidden" value="<?php echo $value['sId'] ?>">
                  </div>
                </div>
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-single-02 text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Name" name="sName" type="text" value="<?php echo $value['sName'] ?>">
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
                    <input class="form-control" placeholder="Father Name" type="text" name="sFName" value="<?php echo $value['sFName'] ?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Father Name" type="text" name="sEmail" value="<?php echo $value['sEmail'] ?>">
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
                    <input class="form-control" placeholder="Phone Number" type="number" name="phone" value="<?php echo $value['phone'] ?>">
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
                     <select class="form-control" name="sBatch" data-toggle="select" title="Simple select" data-live-search="true" data-live-search-placeholder="Search ..." >
                          <option value="<?php echo $value['batchId'] ?>"><?php echo $value['batchYear'] ?></option>
                          <?php 
                            $batchID = $value['batchId'];


                          foreach ($batch as $key => $data) {
                            if($batchID == $data['batchId']) continue;?>
                          <option value="<?php echo $data['batchId'] ?>"><?php echo $data['batchYear'] ?></option>
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
                          <option value="<?php echo $value['deptId'] ?>"><?php echo $value['deptName'] ?></option>
                          <?php 
                            $deptID = $value['deptId'];
                          foreach ($department as $key => $data){
                            if($deptID == $data['deptId'])continue;?>
                          <option value="<?php echo $data['deptId'] ?>"><?php echo $data['deptName'] ?></option>
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
                      <input class="form-control" placeholder="RollNo" type="number" name="sRollNo" value="<?php echo $value['sRollNo'] ?>">
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
                    <input class="form-control" placeholder="CNIC number" type="text" name="sCnic" value="<?php echo $value['sCnic'] ?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <label>Optional</label>
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-image text-primary"></i></span>
                    </div>
                    <div class="custom-file">
        <input type="file" class="custom-file-input" id="studentPic" name="photo" accept="image/*" onchange="loadFile(event)">
        <input type="hidden" name="old_pic" value="<?php echo $value['sPhoto']  ?>">
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
                
                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> 
                <button type="submit" class="btn btn-primary" name="sUpdate">Update</button>
            </div>
            </form>      
        </div>
    </div>
</div>





                      <button class="btn btn-sm btn-danger delete" id="<?php echo $value['sId'] ?>">Delete</button>
                    </td>
                  </tr>

                  <?php } ?>
                </tbody>
                 
              </table>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- ALL Records Update model forms -->
    <!-- Page content -->
  </div>
   <script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
  <!-- Argon Scripts -->
  <!-- Core -->
  <?php require 'linkfooter.php'; ?>

  <script type="text/javascript">
$(document).ready(function() {
  $('#datatable-basic').DataTable({
        // scrollY:        '50vh',
        // scrollCollapse: true
        // paging:         false
  });
} );
</script>
<script type="text/javascript">
  $(document).ready(function()
{
    $('.delete').click(function()
    {
        if (confirm("Are you sure you want to delete this row?"))
        {
          var element = this;
            // var id = $(this).parent().parent().attr('id');
            // // var data = id ;
            var parent = $(this).parent().parent();
          // console.log(data); 
            $.ajax(
            {     method:"POST",  
                  url:"deleteprocess.php",
                  data: {
                    "sId":$(element).attr('id'),
                                  },
                    cache: false,
                   success: function(status)
                   {
                    console.log(status)
                    parent.fadeOut('slow', function() {$(this).remove();});
                    // $( "#trows" ).load( "batchRecord.php #trows" );

                     // $("#datatable-4th").load(window.location + " #datatable-4th");
                   }
             });
        }
    });
 
    // style the table with alternate colors
    // sets specified color for every odd row
    $('.delete tr:odd').css('background',' #f23333');
});
</script>
</body>

</html>