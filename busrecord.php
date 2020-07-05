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
                   <center><h2>Bus Data Record</h2></center>  
              <table class="table table-flush" id="datatable-5th">
                <thead class="thead-light">
                  <tr>
                    <th>ID</th>
                    <th>Bus Number</th>
                    <th>Driver</th>
                    <th>Conductor</th>
                    <th>Location</th>
                    <th>Total Seats</th>
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
$buses = $obj->BusesRecord();
$driver = $obj->fetchDriver();
$conductor = $obj->fetchConductor();
$busStop = $obj->fetchBusStop();
 ?>

                <tbody>
                 <?php foreach ($buses as $key => $value) { ?>
                  <tr>
                    <td><?php echo $value['bId'] ?></td>
                    <td><?php echo $value['bNo'] ?></td>
                    <td><?php echo $value['dName'] ?></td>
                    <td><?php echo $value['conName'] ?></td>
                    <td><?php echo $value['stopName'] ?></td> 
                    <td><?php echo $value['TotalSeats']?></td>
                    <td>
                      <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editbus-<?php echo $value['bId'] ?>">Edit</button>
                      <!-- Bus Update Modal Form  -->
                        <div class="modal fade" id="editbus-<?php echo $value['bId'] ?>" tabindex="-1" role="dialog" aria-labelledby="busEditLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="busEditLabel">Bus Edit Form</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form method="POST" action="updateprocess.php">
                              <div class="modal-body">
                               <div class="form-group">
                                 <div class="input-group input-group-alternative">
                    <input class="form-control" placeholder="Bus / Point Number" type="hidden" name="bId"  value="<?php echo $value['bId'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-bus-front-12 text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Bus / Point Number" type="text" name="bNo"  value="<?php echo $value['bNo'] ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-bus-front-12 text-primary"></i></span>
                    </div>
                    <select class="form-control" name="bDriverId" data-toggle="select" title="Simple select" data-live-search="true" data-live-search-placeholder="Search ..." >
                          <option value="<?php echo $value['dId'] ?>"><?php echo $value['dName'] ?></option>
                          <?php 
                            $DriverID = $value['dId'];


                          foreach ($driver as $key => $data) {
                            if($DriverID == $data['dId']) continue;?>
                          <option value="<?php echo $data['dId'] ?>"><?php echo $data['dName'] ?></option>
                          <?php } ?>
                     </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-bus-front-12 text-primary"></i></span>
                    </div>
                    <select class="form-control" name="bConId" data-toggle="select" title="Simple select" data-live-search="true" data-live-search-placeholder="Search ..." >
                          <option value="<?php echo $value['conId'] ?>"><?php echo $value['conName'] ?></option>
                          <?php 
                            $ConductorID = $value['conId'];


                          foreach ($conductor as $key => $data) {
                            if($ConductorID == $data['conId']) continue;?>
                          <option value="<?php echo $data['conId'] ?>"><?php echo $data['conName'] ?></option>
                          <?php } ?>
                     </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-bus-front-12 text-primary"></i></span>
                    </div>
                    <select class="form-control" name="bStopId" data-toggle="select" title="Simple select" data-live-search="true" data-live-search-placeholder="Search ..." >
                          <option value="<?php echo $value['stopId'] ?>"><?php echo $value['stopName'] ?></option>
                          <?php 
                            $stopID = $value['stopId'];


                          foreach ($busStop as $key => $data) {
                            if($stopID == $data['stopId']) continue;?>
                          <option value="<?php echo $data['stopId'] ?>"><?php echo $data['stopName'] ?></option>
                          <?php } ?>
                     </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-ungroup text-primary"></i></span>
                    </div>
                    <input class="form-control" placeholder="Bus / Point Number" type="text" name="TotalSeats"  value="<?php echo $value['TotalSeats'] ?>">
                    </div>

                               </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="busUpdate" class="btn btn-primary">Update</button>
                              </div>
                            </form>
                            </div>
                          </div>
                        </div>

                        <!-- Buses Update Modal Form End -->
                      <button class="btn btn-sm btn-danger delete" id="<?php echo $value['bId'] ?>">Delete</button>
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
  $('#datatable-5th').DataTable();
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
                    "bId":$(element).attr('id'),
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