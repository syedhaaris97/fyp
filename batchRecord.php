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
                 <div class="table-responsive py-4" >
                   <center><h2>Batch Data Record</h2></center>  
              <table class="table table-flush" id="datatable-4th">
                <thead class="thead-light">
                  <tr>
                    <th>ID</th>
                    <th>Batch</th>
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
$batch = $obj->fetchBatch();
 ?>                
                <tbody >
                 <?php foreach ($batch as $key => $value) { ?>
                  <tr id="delete<?php echo $value['batchId'] ?>">
                    <td><?php echo $value['batchId'] ?></td>
                    <td><?php echo $value['batchYear'] ?></td>
                    <td>
                      <a class="btn btn-success btn-sm text-white" data-toggle="modal" data-target="#editstop-<?php echo $value['batchId'] ?>">Edit</a>

                      <div class="modal fade" id="editstop-<?php echo $value['batchId'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-default">Destination Stop Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <form action="updateprocess.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12"> 
                  <div class="form-group">
                    <input class="form-control" placeholder="Point Stop Name" type="hidden" name="batchId" value="<?php echo $value['batchId'] ?>">
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-square-pin text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Point Stop Name" type="text" name="batchYear" value="<?php echo $value['batchYear'] ?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> 
                <button type="submit" class="btn btn-primary" name="stopUpdate">Update</button>
            </div>
            </form>      
        </div>
    </div>
</div>                  
                        <button class="btn btn-sm btn-danger delete" id="<?php echo $value['batchId'] ?>">Delete</button>
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
  $('#datatable-4th').DataTable();
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
                    "batchId":$(element).attr('id'),
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