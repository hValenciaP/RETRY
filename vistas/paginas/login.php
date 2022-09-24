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
<body class="hold-transition login-page dark-mode">
<div class="wrapper">
          <div class="preloader flex-column justify-content-center align-items-center">
              <img class="animation__wobble" src="vistas/lib/dist/img/Logo.png" alt="SaturnoLogo" height="60" width="60">
          </div>
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-body">
            <form class="text-center p-5" action="" method="post">
                <b class="font-weight-bold">BOLT | LOGIN</b>
                <div class="mb-1 text-center">
                    <img src="vistas/lib/dist/img/Logo.png" alt="" width="55" height="50" class="mt-3">
                </div>
                <div class="col-xs-4 input-group mb-3">
                    <label for="" class="form-label"> </label>
                    <input autofocus placeholder="Usuario" maxlength="20" name="txt_user" type="text" class="form-control" id="txt_user" aria-describedby="emailHelp" >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 input-group mb-3">
                    <label for="" class="form-label"></label>
                    <input placeholder="Clave"  name="txt_clave" type="password" class="form-control" id="txt_clave" >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <div class="col-xs-4 input-group mb-3">
                        <div class="col-2">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Recuerdame
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2 col-12 mx-auto">
                        <button style="background-color:#00559C;color: #FFFFFF;" class="btn btn-block my-3 shadow" type="submit" name="" value="">Iniciar sesión</button>
                    </div>

                    <hr>
                    <div class="col-md-12">
                        <span>
                            <p class="text-center text-secondary">© Innovación y Transformación Digital 2022</p>
                        </span>
                    </div>
                </div>
    <?php
    $obj_Login = new ControladorUsuario();
    $obj_Login -> ctrLoginUsuario();
    ?>

            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->
</div>
</div>

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