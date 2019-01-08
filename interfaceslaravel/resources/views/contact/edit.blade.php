<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TESITECA</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('backend/assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/AdminLTE.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/skins/skin-brown.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/vis.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/responsive.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/chat.css')}}">    </head>

    <body class="hold-transition login-page" style="background-color: white;">
        <header class="main-header" style="background-image: url('/assets/img/logo.jpg'); max-height:150px;background-repeat:round;">
            <a href="#" class="logo" style="height: 150px;width:500px;">
                <!--<span class="logo-lg"><b>PLADDES</b></span>-->
                <img src="http://tramite.unsaac.edu.pe//assets/img/logoprincipal1.png">
            </a>
            <nav class="navbar navbar-static-top" role="navigation" style="min-height:150px;">
            </nav>
        </header>
        <section>
            <div class="row">
                <div class="hidden-xs hidden-sm col-md-6">
                    <div style="margin: 40px; text-align: right;">
                        <img src="http://tramite.unsaac.edu.pe//assets/img/unsaac.jpg" style="top: 0; left: 0; border: 2px darkgray;
    border-style: groove;">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="login-box" style="border: 1px solid gray;margin-top: 80px;">
                        <div class="login-box-title" style="text-align: center;">
                            <h3><b>TRÁMITE DOCUMENTARIO</b></h3>
                        </div>
                        <div class="login-box-body">
                            <p class="login-box-msg">Ingresar tu usuario y contraseña</p>
                            <form class="login-form" action="http://tramite.unsaac.edu.pe/login/verificar/" method="post">
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="Usuario" autofocus name="tbUsuario">
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control" placeholder="Contraseña" name="tbPassword">
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>
                                <div style="text-align:center;">
                                    <a href="http://tramite.unsaac.edu.pe/tramite/seguimiento">¿Seguimiento de Documentos?</a>
                                </div>
                                <div style="text-align:center;">
                                    <label></label>
                                </div>
                                <div class="row">
                                    <div class="col-xs-8"></div>
                                    <div class="col-xs-4"><button type="submit" class="btn btn-primary btn-block btn-flat">INGRESAR</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="main-footer" style="margin-left: 0px;position: fixed;bottom: 0px;width: 100%;">
            <div class="pull-right hidden-xs">
                <b>Versión</b> 1.0.0
            </div>
            <strong></strong>
        </footer>
    <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/bootstrap.min.js')}}"></script> 
    </body>
</html>