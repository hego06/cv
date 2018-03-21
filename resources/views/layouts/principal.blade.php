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
  <!-- daterange picker -->
  <link rel="stylesheet" href='{{asset("bower_components/bootstrap-daterangepicker/daterangepicker.css")}}'>
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href='{{asset("bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css")}}'>
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href='{{asset("plugins/iCheck/all.css")}}'>
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href='{{asset("bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css")}}'>
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href='{{asset("plugins/timepicker/bootstrap-timepicker.min.css")}}'>
  <!-- Select2 -->
  <link rel="stylesheet" href='{{asset("bower_components/select2/dist/css/select2.min.css")}}'>
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
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
        <li class=" active treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Perfil</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Editar</a></li>
            <li><a href="#">Ver</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Skills</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Editar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Experiencia</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Editar</a></li>
          </ul>
        </li>
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
          <h4 class="modal-title">Default Modal</h4>
        </div>
        <div class="modal-body">
            @section('modal')
              This is the master sidebar.
            @show
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
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

<!-- Select2 -->
<script src='{{asset("bower_components/select2/dist/js/select2.full.min.js")}}'></script>
<!-- InputMask -->
<script src='{{asset("plugins/input-mask/jquery.inputmask.js")}}'></script>
<script src='{{asset("plugins/input-mask/jquery.inputmask.date.extensions.js")}}'></script>
<script src='{{asset("plugins/input-mask/jquery.inputmask.extensions.js")}}'></script>
<!-- date-range-picker -->
<script src='{{asset("bower_components/moment/min/moment.min.js")}}'></script>
<script src='{{asset("bower_components/bootstrap-daterangepicker/daterangepicker.js")}}'></script>
<!-- bootstrap datepicker -->
<script src='{{asset("bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js")}}'></script>
<!-- bootstrap color picker -->
<script src='{{asset("bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js")}}'></script>
<!-- bootstrap time picker -->
<script src='{{asset("plugins/timepicker/bootstrap-timepicker.min.js")}}'></script>
<!-- SlimScroll -->
<script src='{{asset("bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}'></script>
<!-- iCheck 1.0.1 -->
<script src='{{asset("plugins/iCheck/icheck.min.js")}}'></script>
<!-- FastClick -->
<script src='{{asset("bower_components/fastclick/lib/fastclick.js")}}'></script>
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
      //Datemask2 mm/dd/yyyy
      // $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      // //Money Euro
      $('[data-mask]').inputmask()
  
      // //Date range picker
      // $('#reservation').daterangepicker()
      // //Date range picker with time picker
      // $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
      //Date range as a button
      // $('#daterange-btn').daterangepicker(
      //   {
      //     ranges   : {
      //       'Today'       : [moment(), moment()],
      //       'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      //       'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
      //       'Last 30 Days': [moment().subtract(29, 'days'), moment()],
      //       'This Month'  : [moment().startOf('month'), moment().endOf('month')],
      //       'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      //     },
      //     startDate: moment().subtract(29, 'days'),
      //     endDate  : moment()
      //   },
      //   function (start, end) {
      //     $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      //   }
      // )
  
      //Date picker
      // $('#datepicker').datepicker({
      //   autoclose: true
      // })
  
      // //iCheck for checkbox and radio inputs
      // $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      //   checkboxClass: 'icheckbox_minimal-blue',
      //   radioClass   : 'iradio_minimal-blue'
      // })
      // //Red color scheme for iCheck
      // $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      //   checkboxClass: 'icheckbox_minimal-red',
      //   radioClass   : 'iradio_minimal-red'
      // })
      // //Flat red color scheme for iCheck
      // $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      //   checkboxClass: 'icheckbox_flat-green',
      //   radioClass   : 'iradio_flat-green'
      // })
  
      // //Colorpicker
      // $('.my-colorpicker1').colorpicker()
      // //color picker with addon
      // $('.my-colorpicker2').colorpicker()
  
      //Timepicker
      // $('.timepicker').timepicker({
      //   showInputs: false
      // })
    })
  </script>

</body>
</html>