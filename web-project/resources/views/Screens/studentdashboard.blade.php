<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student Dashboard</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">

          <img src="images/faces/light.png" alt="profile" width="150px" />
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face5.jpg" alt="profile" />
              <span class="nav-profile-name">Welcome, Neranjana</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href="{{url('/profile')}}">
            <i class="typcn typcn-cog-outline text-primary"></i>
                                    Profile
                                </a>
             
                
                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                      <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        <i class="typcn typcn-eject text-primary"></i>
                                        Logout
                                    </a>
                                </form>
              
            </div>
          </li>

        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-date dropdown">
            <a class="nav-link d-flex justify-content-center align-items-center" href="javascript:;">
              <h6 class="date mb-0">Today : Mar 23</h6>
              <i class="typcn typcn-calendar"></i>
            </a>
          </li>

        </ul>

      </div>
    </nav>
    <!-- partial -->
    <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">

      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item ml-0">
            <h4 class="mb-0">Dashboard</h4>
          </li>

        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-search d-none d-md-block mr-0">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search..." aria-label="search" aria-describedby="search">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="typcn typcn-zoom"></i>
                </span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>

<br>

    <!-- partial -->
    <div class="container-fluid">
      <div class="content-wrapper">



        <div class="row">
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card" style="background-color:#7cddf7;" >
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                  <div >
                    <p class="mb-2 text-md-center text-lg-left">Total Mahapola Installements</p>
                    <h1 class="mb-0">40</h1>
                  </div>
                  <i class="typcn typcn-briefcase icon-xl text-secondary"></i>
                  
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card" style="background-color:#91f78f;">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                  <div>
                    <p class="mb-2 text-md-center text-lg-left">Received Mahapola Installements</p>
                    <h1 class="mb-0">20</h1>
                  </div>
                  <i class="typcn typcn-chart-pie icon-xl text-secondary"></i>
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card" style="background-color:#f03a61;">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                  <div>
                    <p class="mb-2 text-md-center text-lg-left">Outstanding Installements for this month</p>
                    <h1 class="mb-0">5</h1>
                  </div>
                  <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="table-responsive pt-3">
                <table class="table table-striped project-orders-table">
                  <thead>
                    <tr>
                      <th class="ml-5">ID</th>
                      <th>Date</th>
                      <th>Amount(Rs)</th>
                      <th>Status</th>
                      <th>Description</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>01/01/2024</td>
                      <td>5000.00</td>
                      <td>Received</td>
                      <td>The monthly payment of mahapola has been received</td>

                    </tr>
                    <tr>
                      <td>2</td>
                      <td>01/02/2024</td>
                      <td>5000.00</td>
                      <td>Received</td>
                      <td>The monthly payment of mahapola has been received</td>

                    </tr>
                    <tr>
                      <td>3</td>
                      <td>01/03/2024</td>
                      <td>5000.00</td>
                      <td>Received</td>
                      <td>The monthly payment of mahapola has been received</td>

                    </tr>
                    <tr>
                      <td>4</td>
                      <td>01/04/2024</td>
                      <td>5000.00</td>
                      <td>Received</td>
                      <td>The monthly payment of mahapola has been received</td>

                    </tr>
                    <tr>
                      <td>5</td>
                      <td>01/05/2024</td>
                      <td>5000.00</td>
                      <td>Received</td>
                      <td>The monthly payment of mahapola has been received</td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
      
      <!-- partial:partials/_footer.html -->
      <footer class="footer">
        <div class="card">
          <div class="card-body">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; 2024.All rights reserved</span>
            </div>
          </div>
        </div>
      </footer>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  
  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>