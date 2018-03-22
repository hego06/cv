<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href='{{asset("bower_components/bootstrap/dist/css/bootstrap.min.css")}}'>
  <!-- Font Awesome -->
  <link rel="stylesheet" href='{{asset("bower_components/font-awesome/css/font-awesome.min.css")}}'>
  <!-- Ionicons -->
  <link rel="stylesheet" href='{{asset("bower_components/Ionicons/css/ionicons.min.css")}}'>
  <!-- Theme style -->
  <link rel="stylesheet" href='{{asset("dist/css/AdminLTE.min.css")}}'>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href='{{asset("dist/css/skins/_all-skins.min.css")}}'>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesnt work if you view the page via file: -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <form method="POST" action="{{route('logout')}}">
                {{csrf_field()}}
                  <span><button class="btn btn-danger">Salir</button></span>
            </form>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="{{ url('admin') }}"><i class="fa fa-user-circle"></i> <span>Perfil</span></a></li>
        <li><a href="{{ url('education') }}"><i class="fa fa-book"></i> <span>Education</span></a></li>
        <li><a href="{{ url('experience') }}"><i class="fa fa-briefcase"></i> <span>Experiencia</span></a></li>
        <li><a href="{{ url('skill') }}"><i class="fa fa-wrench"></i> <span>Skill</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        @section('title')
        @show
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->

</div>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Editar</h4>
        </div>
        <div class="modal-body">
            @section('modal')
              This is the master sidebar.
            @show
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src='{{asset("bower_components/jquery/dist/jquery.min.js")}}'></script>

<!-- InputMask -->
<script src='{{asset("plugins/input-mask/jquery.inputmask.js")}}'></script>
<script src='{{asset("plugins/input-mask/jquery.inputmask.date.extensions.js")}}'></script>
<script src='{{asset("plugins/input-mask/jquery.inputmask.extensions.js")}}'></script>

<!-- Bootstrap 3.3.7 -->
<script src='{{asset("bower_components/bootstrap/dist/js/bootstrap.min.js")}}'></script>
<script src='{{asset("dist/js/adminlte.min.js")}}'></script>

<!-- AdminLTE App -->
<script src='{{asset("dist/js/adminlte.min.js")}}'></script>
<!-- AdminLTE for demo purposes -->
<script src='{{asset("dist/js/demo.js")}}'></script>
<!-- Page script -->
<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
  
      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })

      $('[data-mask]').inputmask()
    })
  </script>

</body>
</html>