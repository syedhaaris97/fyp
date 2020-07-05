<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="dashboard.php">
        <img src="assets/img/brand/2logo-usindh.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="uploads/operators/<?php echo $_SESSION['user']['oPhoto'] ?>">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="profile.php" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="signout.php" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="dashboard.php">
                <img src="assets/img/brand/2logo-usindh.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
       <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <i class="ni ni-archive-2 text-purple"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="studentAc.php">
                <i class="ni ni-ungroup text-orange"></i>
                <span class="nav-link-text">Create Accounts</span>
              </a>
            </li>
            <!-- Drop Down  -->
            <li class="nav-item">
              <a class="nav-link active" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Records</span>
              </a>
              <div class="collapse" id="navbar-dashboards">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="records.php" class="nav-link">Student Record</a>
                  </li>
                  <li class="nav-item">
                    <a href="deptrecord.php" class="nav-link">Department Record</a>
                  </li>
                  <li class="nav-item">
                    <a href="batchrecord.php" class="nav-link">Batch Record</a>
                  </li>
                  <li class="nav-item">
                    <a href="busrecord.php" class="nav-link">Bus Record</a>
                  </li>
                  <li class="nav-item">
                    <a href="driverrecord.php" class="nav-link active">Driver Record</a>
                  </li>
                  <li class="nav-item">
                    <a href="conductorRecord.php" class="nav-link active">Conductor Record</a>
                  </li>
                  <li class="nav-item">
                    <a href="stoprecord.php" class="nav-link active">Stop Record</a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Drop down end -->
            
            <li class="nav-item">
              <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="ni ni-money-coins text-green"></i>
                <span class="nav-link-text">Payment</span>
              </a>
              <div class="collapse " id="navbar-examples">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="deposit.php" class="nav-link">Deposit</a>
                  </li>
                  <li class="nav-item">
                    <a href="Withdraw.php" class="nav-link">Withdraw</a>
                  </li>
                 <!--  <li class="nav-item">
                    <a href="../../pages/examples/login.html" class="nav-link">Online</a>
                  </li> -->
                  <!-- <li class="nav-item">
                    <a href="../../pages/examples/register.html" class="nav-link">Register</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/examples/lock.html" class="nav-link">Lock</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/examples/timeline.html" class="nav-link">Timeline</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/examples/profile.html" class="nav-link">Profile</a>
                  </li> -->
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-examples2" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples2">
                <i class="ni ni-money-coins text-green"></i>
                <span class="nav-link-text">Bus Payments</span>
              </a>
              <div class="collapse " id="navbar-examples2">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="busDeposit.php" class="nav-link">Deposit</a>
                  </li>
                  <li class="nav-item">
                    <a href="busWithdraw.php" class="nav-link">Withdraw</a>
                  </li>
                 <!--  <li class="nav-item">
                    <a href="../../pages/examples/login.html" class="nav-link">Online</a>
                  </li> -->
                  <!-- <li class="nav-item">
                    <a href="../../pages/examples/register.html" class="nav-link">Register</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/examples/lock.html" class="nav-link">Lock</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/examples/timeline.html" class="nav-link">Timeline</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/examples/profile.html" class="nav-link">Profile</a>
                  </li> -->
                </ul>
              </div>
            </li>

           <!--  <li class="nav-item">
              <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                <i class="ni ni-ui-04 text-info"></i>
                <span class="nav-link-text">Components</span>
              </a>
              <div class="collapse" id="navbar-components">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="../../pages/components/buttons.html" class="nav-link">Buttons</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/components/cards.html" class="nav-link">Cards</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/components/grid.html" class="nav-link">Grid</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/components/notifications.html" class="nav-link">Notifications</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/components/icons.html" class="nav-link">Icons</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/components/typography.html" class="nav-link">Typography</a>
                  </li>
                  <li class="nav-item">
                    <a href="#navbar-multilevel" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-multilevel">Multi level</a>
                    <div class="collapse show" id="navbar-multilevel" style="">
                      <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                          <a href="#!" class="nav-link ">Third level menu</a>
                        </li>
                        <li class="nav-item">
                          <a href="#!" class="nav-link ">Just another link</a>
                        </li>
                        <li class="nav-item">
                          <a href="#!" class="nav-link ">One last link</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="#navbar-forms" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms">
                <i class="ni ni-single-copy-04 text-pink"></i>
                <span class="nav-link-text">Forms</span>
              </a>
              <div class="collapse" id="navbar-forms">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="../../pages/forms/elements.html" class="nav-link">Elements</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/forms/components.html" class="nav-link">Components</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/forms/validation.html" class="nav-link">Validation</a>
                  </li>
                </ul>
              </div>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-align-left-2 text-default"></i>
                <span class="nav-link-text">Tables</span>
              </a>
              <div class="collapse" id="navbar-tables">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="../../pages/tables/tables.html" class="nav-link">Tables</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/tables/sortable.html" class="nav-link">Sortable</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/tables/datatables.html" class="nav-link">Datatables</a>
                  </li>
                </ul>
              </div>
            </li> -->
           <!--  <li class="nav-item">
              <a class="nav-link" href="#navbar-maps" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-maps">
                <i class="ni ni-map-big text-primary"></i>
                <span class="nav-link-text">Maps</span>
              </a>
              <div class="collapse" id="navbar-maps">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="../../pages/maps/google.html" class="nav-link">Google</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/maps/vector.html" class="nav-link">Vector</a>
                  </li>
                </ul>
              </div>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="../../pages/widgets.html">
                <i class="ni ni-archive-2 text-green"></i>
                <span class="nav-link-text">Widgets</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/charts.html">
                <i class="ni ni-chart-pie-35 text-info"></i>
                <span class="nav-link-text">Charts</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/calendar.html">
                <i class="ni ni-calendar-grid-58 text-red"></i>
                <span class="nav-link-text">Calendar</span>
              </a>
            </li> -->
          </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <!-- <h6 class="navbar-heading text-muted">Documentation</h6> -->
        <h6 class="navbar-heading text-muted">Accounts History</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="shistory.php">
              <i class="ni ni-align-center"></i> Students History
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bhistory.php">
              <i class="ni ni-align-center"></i> Buses History
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ni ni-ui-04"></i> Project Thesis
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

