<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{$title}}</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href={{asset('assets/admin/plugins/fontawesome-free/css/all.min.css')}}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}>
  <link rel="stylesheet" href={{asset('assets/admin/dist/css/adminlte.min.css')}}>
  <link rel="stylesheet" href={{asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}>
  <link rel="stylesheet" href={{asset('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}>
  <link rel="stylesheet" href={{asset('assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('home')}}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src={{asset('assets/admin/dist/img/avatar.png')}} class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Частное лицо
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('people.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Весь список</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('people.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Добавить новую запись</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
  </aside>

  <div class="content-wrapper">
    <section class="content">
        @yield('content')
    </section>
  </div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Talgat</b>
    </div>
  </footer>
  <aside class="control-sidebar control-sidebar-dark">

  </aside>
</div>

<!-- jQuery -->
<script src={{asset('assets/admin/plugins/jquery/jquery.min.js')}}></script>
<!-- Bootstrap 4 -->
<script src={{asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}></script>
<!-- AdminLTE App -->
<script src={{asset('assets/admin/dist/js/adminlte.min.js')}}></script>
<script src={{asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}></script>
<script src={{asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}></script>
<script src={{asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}></script>
<script src={{asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}></script>
<script src={{asset('assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}></script>
<script src={{asset('assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}></script>

</body>
</html>
