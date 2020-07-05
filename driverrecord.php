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
    <div class="header bg-gradient-danger pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="col-md-12">
                 <div class="table-responsive py-4">
                   <center><h2>Driver Data Record</h2></center>  
              <table class="table table-flush" id="datatable-2nd">
                <thead class="thead-light">
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>CNIC</th>
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

$driver = $obj->driverRecord() ?>
                <tbody>
                 <?php foreach ($driver as $key => $value) { ?>
                  <tr>
                    <td><?php echo $value['dId'] ?></td>
                    <td><?php echo $value['dName'] ?></td>
                    <td><?php echo $value['dCnic']?></td>
                    <td>
                      <a class="btn btn-warning btn-sm text-white" data-toggle="modal" data-target="#editDriver-<?php echo $value['dId']?>">Edit</a>

                        <div class="modal fade" id="editDriver-<?php echo $value['dId']?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-default">Driver Reg: Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <form action="updateprocess.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <input class="form-control" placeholder="Name" type="hidden" name="dId" value="<?php echo $value['dId'] ?>" >
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-single-02 text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Name" type="text" name="dName" value="<?php echo $value['dName'] ?>" >
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
                    <input class="form-control" placeholder="CNIC number" type="text" name="dCnic" value="<?php echo $value['dCnic']?>" >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> 
                <button type="submit" class="btn btn-primary" name="dUpdate">Update</button>
            </div>
            </form>      
        </div>
    </div>
</div>


                       <button class="btn btn-sm btn-danger delete" id="<?php echo $value['dId'] ?>">Delete</button>
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
  $('#datatable-2nd').DataTable();
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
                    "dId":$(element).attr('id'),
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