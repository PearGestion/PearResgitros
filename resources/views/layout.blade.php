<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pear Solución Informáticas | Gestión</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset("assets/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("assets/bower_components/font-awesome/css/font-awesome.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset("assets/bower_components/Ionicons/css/ionicons.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("assets/dist/css/AdminLTE.min.css")}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset("assets/dist/css/skins/_all-skins.min.css")}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset("assets/bower_components/morris.js/morris.css")}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset("assets/bower_components/jvectormap/jquery-jvectormap.css")}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset("assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css")}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset("assets/bower_components/bootstrap-daterangepicker/daterangepicker.css")}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset("assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Inicio Header -->
  @include("header")
  <!-- Fin Header -->
  <!-- Inicio Aside -->
  @include("aside")
  <!-- Fin Aside -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content">
          @yield('contenido')
      </section>
  </div>
  <!--Inicio Footer -->
  @include("footer")
  <!-- Fin Footer -->
</div>
<script src="{{asset("assets/bower_components/jquery/dist/jquery.min.js")}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset("assets/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<!-- SlimScroll -->
<script src="{{asset("assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
<!-- FastClick -->
<script src="{{asset("assets/bower_components/fastclick/lib/fastclick.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/dist/js/adminlte.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
@yield("scriptsPlugins")
<script src="{{asset("assets/js/jquery-validation/jquery.validate.min.js")}}"></script>
<script src="{{asset("assets/js/jquery-validation/localization/messages_es.min.js")}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{asset("assets/js/scripts.js")}}"></script>
<script src="{{asset("assets/js/funciones.js")}}"></script>
@yield("scripts")
</body>

</html>