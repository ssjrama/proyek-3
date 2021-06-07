<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pemesanan Treatment</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./laundry/plugins/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./laundry/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <!-- <nav class="main-header navbar navbar-expand navbar-white navbar-light"> -->
    <!-- Left navbar links -->
    <!-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul> -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <!-- Logo -->
                <div class="header-left">
                    <div class="logo">
                        <a href="index.html"><img src="laundry/img/logo/logo.png" alt=""></a>
                    </div>
                    <div class="menu-wrapper  d-flex align-items-center">
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="home">Home</a></li>
                                    <li><a href="about">About</a></li>
                                    <li  class="active"><a href="/services">Treatment</a></li>
                                    {{-- <li><a href="blog.html">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog_details.html">Blog Details</a></li>
                                            <li><a href="elements.html">Element</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-right d-none d-lg-block">
                @auth
                    <div class="header-btn2">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
                        </form>
                    </div>
                    @else
                    <a href="#" class="header-btn1"><img src="laundry/img/icon/call.png" alt=""> +62 896-8536-6681</a>
                    <a href="/login" class="header-btn2">Login</a>
                    @endauth
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> -->
       <!-- CSS here -->
    <link rel="stylesheet" href="laundry/css/bootstrap.min.css">
    <link rel="stylesheet" href="laundry/css/owl.carousel.min.css">
    <link rel="stylesheet" href="laundry/css/slicknav.css">
    <link rel="stylesheet" href="laundry/css/flaticon.css">
    <link rel="stylesheet" href="laundry/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="laundry/css/gijgo.css">
    <link rel="stylesheet" href="laundry/css/animate.min.css">
    <link rel="stylesheet" href="laundry/css/animated-headline.css">
    <link rel="stylesheet" href="laundry/css/magnific-popup.css">
    <link rel="stylesheet" href="laundry/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="laundry/css/themify-icons.css">
    <link rel="stylesheet" href="laundry/css/slick.css">
    <link rel="stylesheet" href="laundry/css/nice-select.css">
    <link rel="stylesheet" href="laundry/css/style.css">

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Order Treatment</h1>
          </div>
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right"> -->
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Order Treatment</li>
            </ol> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <form action= "">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <!-- <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div> -->
            

            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nama Pemesan</label>
                <input type="text" id="user_id" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Merk/Nama Sepatu</label>
                <input type="text" id="" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Alamat</label>
                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputDescription">Deskripsi</label>
                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
              </div>
            </div>
           
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
        <!-- <div class="col-md-6">
          <div class="card card-secondary">
            <div> -->
              <!-- <h3 class="card-title">Budget</h3> -->

              <!-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div> -->
            <!-- </div> -->
            <!-- <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Estimated budget</label>
                <input type="number" id="inputEstimatedBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Total amount spent</label>
                <input type="number" id="inputSpentBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Estimated project duration</label>
                <input type="number" id="inputEstimatedDuration" class="form-control">
              </div>
            </div>
            /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <button type="submit" class="btn btn-success">Pesan Treatment</button>
          <input type="submit" value="Cancel" class="btn btn-secondary ">
        </div>
      </div>
    </section>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer> -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- JS here -->

<script src="./laundry/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./laundry/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./laundry/js/popper.min.js"></script>
<script src="./laundry/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./laundry/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./laundry/js/owl.carousel.min.js"></script>
<script src="./laundry/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./laundry/js/wow.min.js"></script>
<script src="./laundry/js/animated.headline.js"></script>
<script src="./laundry/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./laundry/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./laundry/js/jquery.nice-select.min.js"></script>
<script src="./laundry/js/jquery.sticky.js"></script>
<!-- Progress -->
<script src="./laundry/js/jquery.barfiller.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./laundry/js/jquery.counterup.min.js"></script>
<script src="./laundry/js/waypoints.min.js"></script>
<script src="./laundry/js/jquery.countdown.min.js"></script>
<script src="./laundry/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./laundry/js/contact.js"></script>
<script src="./laundry/js/jquery.form.js"></script>
<script src="./laundry/js/jquery.validate.min.js"></script>
<script src="./laundry/js/mail-script.js"></script>
<script src="./laundry/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="./laundry/js/plugins.js"></script>
<script src="./laundry/js/main.js"></script>
<!-- jQuery -->
<script src="./laundry/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./laundry/plugins/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./laundry/js/adminlte.min.js"></script>
<!-- Ad\\\\\minLTE for demo purposes -->
<script src="./laundry/js/demo.js"></script>
</body>
</html>