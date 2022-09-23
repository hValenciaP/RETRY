<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LISTADO RRHH</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="vistas/lib/plugins/fontsgoogle/fonts.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="vistas/lib/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="vistas/lib/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/lib/dist/css/adminlte.min.css">
   <!-- icheck bootstrap -->
  <link rel="stylesheet" href="vistas/lib/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">

  <!-- Contenido Dinamico -->
<?php  
if(isset($_SESSION['login']) && $_SESSION['login']=='ok'){
      echo ' 
    <div class="wrapper">
          <div class="preloader flex-column justify-content-center align-items-center">
              <img class="animation__wobble" src="vistas/lib/dist/img/Logo.png" alt="SaturnoLogo" height="60" width="60">
          </div>'; //Site wrapper
      echo ' <div class="content-wrapper">'; //Content Wrapper. Contains page content

      include 'vistas/modulos/header.php'; 
      include 'vistas/modulos/menu.php'; 

if(isset($_GET["pagina"])){
  if (
    $_GET["pagina"]=='login' ||
    $_GET["pagina"]=='inicio' ||
    $_GET["pagina"]=='listado' ||
    $_GET["pagina"]=='listado2017' ||
    $_GET["pagina"]=='salir' ) {
    include_once "paginas/".$_GET["pagina"].".php";
  }else{
    include_once "paginas/404.php";
  }
}
//include 'vistas/paginas/inicio.php';
include 'vistas/modulos/footer.php';
        echo '</div>';
        echo '</div>';
}else {
  include_once "paginas/login.php";
}
 ?>
 <!-- Contenido Dinamico -->
<!-- jQuery -->
<script src="vistas/lib/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vistas/lib/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="vistas/lib/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/lib/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="vistas/lib/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="vistas/lib/plugins/raphael/raphael.min.js"></script>
<script src="vistas/lib/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="vistas/lib/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="vistas/lib/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="vistas/lib/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="vistas/lib/dist/js/pages/dashboard2.js"></script>
</body>
</html>
