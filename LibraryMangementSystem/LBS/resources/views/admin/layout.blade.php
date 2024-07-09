<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('backendasset/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('backendasset/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('backendasset/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('backendasset/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('backendasset/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('backendasset/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('backendasset/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('backendasset/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('backendasset/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backendasset/js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('backendasset/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('backendasset/images/favicon.png')}}" />
    <script src="{{asset('backendasset/vendors/tinymce/tinymce.min.js')}}"></script>

  </head>
  <body class="with-welcome-text">
    <div class="container-scroller">
     
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
          </div>
          <div>
            <a class="navbar-brand brand-logo" href="index.html">
              <img src="{{asset('backendasset/images/logo.svg')}}" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="index.html">
              <img src="{{asset('backendasset/images/logo-mini.svg')}}" alt="logo" />
            </a>
          </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
         
          <ul class="navbar-nav ms-auto">
          
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
              <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="{{asset('backendasset/images/faces/PB.png')}}"  style="width:50px;height:50px"alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="{{asset('backendasset/images/faces/PB.png')}}" style="width:50px;height:50px" alt="Profile image">
                @if(Session::get('username'))
                
                  <p class="mb-1 mt-3 fw-semibold">Welcome {{Session::get('username')}}</p>
                  @endif
                </div>
               <a class="dropdown-item" href="{{url('admin/logout')}}"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin/dashboard')}}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item nav-category">UI Elements</li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Categories</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('admin/categories')}}">Add Category</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('admin/categorylist')}}">Category List</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon mdi mdi-group"></i>
                <span class="menu-title">Author List</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="{{url('admin/addauthor')}}">Add Author</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{url('admin/authorlist')}}">Author List</a></li>

                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="menu-icon mdi mdi-book"></i>
                <span class="menu-title">Books</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('admin/addbook')}}">Add Book</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{url('admin/booklist')}}">Books List</a></li>

                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="menu-icon mdi mdi-checkbook"></i>
                <span class="menu-title">Borrow Request</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('admin/borrow')}}">Request List</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{url('admin/users')}}">
                <i class="menu-icon mdi mdi-account-check"></i>
                <span class="menu-title">Users</span>
              </a>
             
            </li>
          
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-sm-12">
                <div class="home-tab">
                 

@yield('admin.index')
@yield('admin.categories')
@yield('admin.categorylist')
  @yield('admin.categoryedit')
  
  @yield('admin.addauthor')
  @yield('admin.authorlist')   
  
  @yield('admin.addbook')
  @yield('admin.booklist')
  @yield('admin.bookedit')

  @yield('admin.borrow')
  @yield('admin.users')

                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
              <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('backendasset/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('backendasset/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('backendasset/vendors/chart.js')}}/chart.umd.js')}}"></script>
    <script src="{{asset('backendasset/vendors/progressbar.js')}}/progressbar.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('backendasset/js/off-canvas.js')}}"></script>
    <script src="{{asset('backendasset/js/template.js')}}"></script>
    <script src="{{asset('backendasset/js/settings.js')}}"></script>
    <script src="{{asset('backendasset/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('backendasset/js/todolist.js')}}"></script>
    <!-- endinject -->

    <!-- Custom js for this page-->
    <script src="{{asset('backendasset/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <script src="{{asset('backendasset/js/dashboard.js')}}"></script>
    <!-- <script src="{{asset('backendasset/js/Chart.roundedBarCharts.js')}}"></script> -->
    <!-- End custom js for this page-->
    <script src="{{asset('backendasset/js/main.js')}}"></script>

  </body>
  
</html>