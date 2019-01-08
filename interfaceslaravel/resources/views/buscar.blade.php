<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Plataforma de Desarrollo Pladdes">
        <meta name="author" content="embi2v">
        <link rel="shortcut icon" href="img/favicon.png">

        <title>PLADDES</title>
        <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('backend/assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/AdminLTE.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/skins/skin-brown.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/vis.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/responsive.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/chat.css')}}">    </head>
    <body class="hold-transition skin-brown sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
    <a href="#" class="logo">
        <span class="logo-mini"><b>TD</b></span>
        <span class="logo-lg"><b>UNSAAC</b></span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown messages-menu" style="display:none;">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="label label-success">4</span>
                  </a>
                  <ul class="dropdown-menu">
                      <li class="header">You have 4 messages</li>
                      <li>
                          <ul class="menu">
                            <li>
                              <a href="#">
                                <div class="pull-left">
                                  <img src="{{asset('backend/assets/img/user.jpg')}}" class="img-circle" alt="Invitado">
                                </div>
                                <h4>
                                  Support Team
                                  <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                </h4>
                                <p>Why not buy a new awesome theme?</p>
                              </a>
                            </li><!-- end message -->
                        </ul>
                      </li>
                      <li class="footer"><a href="#">See All Messages</a></li>
                  </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu" style="display:none;">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu" style="display:none;">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown messages-menu" style="/*display:none;*/">
                  <a href="http://tramite.unsaac.edu.pe/tramite/?id=1">
                      <i class="fa fa-line-chart"></i>
                  </a>
              </li>

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="http://tramite.unsaac.edu.pe/assets/img/user.jpg" class="user-image" alt="Invitado">
                  <span class="hidden-xs">Invitado</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{asset('backend/assets/img/user.jpg')}}" class="img-circle" alt="Invitado">
                    <p>
                      Invitado                      <!--<small><a href="#" class="btn btn-default btn-flat">Mi Perfil</a></small>-->
                    </p>
                  </li>
                  <li class="user-footer" style="border: 1px solid #6f1521">
                    <div class="pull-left" style="width:50%;text-align: left;">
                      <a href="{{asset('backend/login/cambiar_pass')}}" class="btn btn-default btn-flat" style="background: #6f1521; color: rgba(255,255,255,0.8);width: 90%;">Cambiar <br>Contraseña</a>
                    </div>
                    <div class="pull-right" style="width:50%;text-align: right;">
                      <a href="/admins" class="btn btn-default btn-flat" style="background: #6f1521; color: rgba(255,255,255,0.8);width: 90%;">Cerrar <br>Sesión</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <!--
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
              -->
            </ul>
        </div>
    </nav>
</header>
            <aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img id="laImagen" src="http://tramite.unsaac.edu.pe/assets/img/user.jpg" class="img-circle" alt="Invitado">
            </div>
            <div class="pull-left info">
                <p id="laNombre">Invitado</p>
                <p id="laUsuario" style="display:none;">Invitado</p>
                <a href="#"><i class="fa fa-circle text-success"></i><label id="laOficina">Externo</label></a>
            </div>
        </div>
        <div class="form-group" id="div_ListaOficinas" style="display: none;">
            <select class="form-control" id="cbListaOficinas" onchange="setear_oficina();" style="font-size: 11px;">
            </select>
        </div>
        <hr>
        <ul class="sidebar-menu">
                    </ul>
    </section>
</aside>            <div class="content-wrapper">
                <section class="content-header">
    <ol class="breadcrumb">
        <li><a href="/buscar"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="/buscar">Tramite Documentario</a></li>
        <li class="active" style="font-size: 14px;"><b>Ver Seguimiento</b></li>
    </ol>
    <h1>&nbsp;</h1>
</section>                <section class="content">
                    <div class="box">
                        <section class="panel">
                            <div class="panel-body">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"><b>Año :</b></label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" id="tbAnio" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"><b>Buscar por :</b></label>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="tbTipo" onchange="cambiar();">
                                                <option>NRO DE EXPEDIENTE</option>
                                                <option>NRO DE DOCUMENTO</option>
                                                <option>INTERESADO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" id="div_expediente" style="display:none;">
                                        <label class="col-sm-2 control-label"><b>Expediente :</b></label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="Nro Expediente" id="tbNroExpediente" onkeypress="return numeros(event);"/>
                                        </div>
                                        <a class="btn btn-default" href="#" onclick="realizar_busqueda();" data-toggle="tooltip" title="Buscar"><span class="ion-ios-search-strong"></span> Buscar</a>
                                    </div>
                                    <div class="form-group" id="div_documento" style="display:none;">
                                        <label class="col-sm-2 control-label"><b>Origen :</b></label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="Ofic. Origen" id="tbOrigen"/>
                                        </div>
                                        <label class="col-sm-1 control-label" style="width:10%;"><b>Tipo Doc. :</b></label>
                                        <div class="col-sm-2">
                                            <select class="form-control" id="tbTipoDocumento"></select>
                                        </div>
                                        <label class="col-sm-1 control-label" style="width:10%;"><b>Nro. Doc. :</b></label>
                                        <div class="col-sm-1" style="width:140px;">
                                            <input type="text" class="form-control" placeholder="Nro Doc." id="tbNroDocumento" onkeypress="return numeros(event);"/>
                                        </div>
                                        <a class="btn btn-default" href="#" onclick="realizar_busqueda();" data-toggle="tooltip" title="Buscar"><span class="ion-ios-search-strong"></span> Buscar</a>
                                    </div>
                                    <div class="form-group" id="div_interesado" style="display:none;">
                                        <label class="col-sm-2 control-label"><b>Interesado :</b></label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="Interesado" id="tbInteresado"/>
                                        </div>
                                        <a class="btn btn-default" href="#" onclick="realizar_busqueda();" data-toggle="tooltip" title="Buscar"><span class="ion-ios-search-strong"></span> Buscar</a>
                                    </div>
                                </div>
                                <table id="tablaDetalle" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="border: 1px solid #acacac">
                                    <thead>
                                        <tr style="background: #d2d6de;">
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> NRO</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> FECHA</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> DOCUMENTO</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> FOLIOS</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> INTERESADO</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> DESTINO</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> ASUNTO</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> ESTADO</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_cogs"></i> ACCIÓN</th>
                                        </tr>
                                    </thead>
                                    <tbody id="taDetalle">
                                        <tr>
                                            <td colspan="9" style="text-align:center;vertical-align: middle;">No hay datos para mostrar</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </section>
            </div>
            <footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Versión</b> 1.0.0
    </div>
    <strong>2019 - Pladdes. </strong>
</footer>
<div style="position: fixed; top: 0; right: 0; bottom: 0; left: 0; z-index: 9999; background-color: #000000; opacity: 0.8; display:none;" id="slash">
	<div id="caja" style="background: white;position: fixed;opacity: 1;width: 200px;height: 150px;top: 50%;left: 50%;
    margin: -100px 0px 0px -75px;border-radius: 4px;vertical-align: bottom;text-align: center;font-weight: bold;">
		<div class="spinner"></div>
		Cargando...
	</div>
</div>
<div id="modal_Mensaje" class="modal fade" style="z-index: 99999;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="alert" id="alert_div" style="background-color: #5bc363;text-align: center;color: white;">
				  	<strong id="alert_mensaje"></strong> .
				</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Aceptar</button>
            </div>  
        </div>
    </div>
</div>            <!--
<aside class="control-sidebar control-sidebar-dark">
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript::;">
                        <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                            <p>Will be 23 on April 24th</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript::;">
                        <i class="menu-icon fa fa-user bg-yellow"></i>
                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                            <p>New phone +1(800)555-1234</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript::;">
                        <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                            <p>nora@example.com</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript::;">
                        <i class="menu-icon fa fa-file-code-o bg-green"></i>
                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                            <p>Execution time 5 seconds</p>
                        </div>
                    </a>
                </li>
            </ul>
            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript::;">
                        <h4 class="control-sidebar-subheading">
                            Custom Template Design
                            <span class="label label-danger pull-right">70%</span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript::;">
                        <h4 class="control-sidebar-subheading">
                            Update Resume
                            <span class="label label-success pull-right">95%</span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript::;">
                        <h4 class="control-sidebar-subheading">
                            Laravel Integration
                            <span class="label label-warning pull-right">50%</span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript::;">
                        <h4 class="control-sidebar-subheading">
                            Back End Framework
                            <span class="label label-primary pull-right">68%</span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="tab-pane" id="control-sidebar-stats-tab"></div>
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <h3 class="control-sidebar-heading" style="width: 100%;background-color: #3C8DBC;text-align: center;margin: 0;border-left: 1px solid #222D32;border-right: 1px solid #222D32;border-top: 1px solid #222D32;font-weight: bolder">CHAT</h3>
            <ul class="control-sidebar-menu" style="border: 1px solid #222D32;background-color: #F4F4F4;">
                <li style="max-height: 200px; margin: 0; padding: 0px;border-bottom: 1px solid;border-top: 1px solid;">
                    <a href="#">
                        <div class="pull-left">
                            <img src="../assets/img/user2-160x160.jpg" class="img-circle" alt="User Image"
                            style="margin: auto 10px auto auto;width: 20px; height: 20px;">
                        </div>
                        <h4 style="padding-top: 4px; margin: 0 0 0 30px; color: #444444; font-size: 12px; position: relative;">
                            Support Team
                        </h4>
                    </a>
                </li>
                <li style="max-height: 200px; margin: 0; padding: 0;border-bottom: 1px solid;border-top: 1px solid;">
                    <a href="#">
                        <div class="pull-left">
                            <img src="../assets/img/user3-128x128.jpg" class="img-circle" alt="User Image"
                            style="margin: auto 10px auto auto;width: 20px; height: 20px;">
                        </div>
                        <h4 style="padding-top: 4px; margin: 0 0 0 30px; color: #444444; font-size: 12px; position: relative;">
                            AdminLTE Design Team
                        </h4>
                    </a>
                </li>
                <li style="max-height: 200px; margin: 0; padding: 0;border-bottom: 1px solid;border-top: 1px solid;">
                    <a href="#">
                        <div class="pull-left">
                            <img src="../assets/img/user4-128x128.jpg" class="img-circle" alt="User Image"
                            style="margin: auto 10px auto auto;width: 20px; height: 20px;">
                        </div>
                        <h4 style="padding-top: 4px; margin: 0 0 0 30px; color: #444444; font-size: 12px; position: relative;">
                            Developers
                        </h4>
                    </a>
                </li>
                <li style="max-height: 200px; margin: 0; padding: 0;border-bottom: 1px solid;border-top: 1px solid;">
                    <a href="#">
                        <div class="pull-left">
                            <img src="../assets/img/user3-128x128.jpg" class="img-circle" alt="User Image"
                            style="margin: auto 10px auto auto;width: 20px; height: 20px;">
                        </div>
                        <h4 style="padding-top: 4px; margin: 0 0 0 30px; color: #444444; font-size: 12px; position: relative;">
                            Sales Department
                        </h4>
                    </a>
                </li>
                <li style="max-height: 200px; margin: 0; padding: 0;border-bottom: 1px solid;border-top: 1px solid;">
                    <a href="#">
                        <div class="pull-left">
                            <img src="../assets/img/user4-128x128.jpg" class="img-circle" alt="User Image"
                            style="margin: auto 10px auto auto;width: 20px; height: 20px;">
                        </div>
                        <h4 style="padding-top: 4px; margin: 0 0 0 30px; color: #444444; font-size: 12px; position: relative;">
                            Reviewers
                        </h4>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
-->        </div>
       
<script type="text/javascript">
	$(document).on('ready', inicializar); <div id="modal_Seguimiento" class="modal fade">
            <div class="modal-dialog" style="width:80%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><b>SEGUIMIENTO DE TRÁMITES</b></h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">EXPEDIENTE :</label>
                                <div class="col-sm-2">
                                    <input class="form-control" id="tbSeguimiento_Expediente" disabled/>
                                </div>
                                <label class="col-sm-2 control-label">INTERESADO :</label>
                                <div class="col-sm-5">
                                    <input class="form-control" id="tbSeguimiento_Interesado" disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">ASUNTO :</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="tbSeguimiento_Asunto" disabled/>
                                </div>
                            </div>
                            <div class="row" id="div_grafico" style="height: 400px;overflow: auto;">
                                <div id="mynetwork" style="width: 100%; height: 400px; border: 1px solid lightgray;"></div>
                            </div>
                            <div class="row" id="div_grilla" style="padding-left: 20px; padding-right: 20px;height: 0px;overflow: auto;">
                                <table id="tablaSeguimiento" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="border: 1px solid #acacac;">
                                    <thead>
                                        <tr style="background: #d2d6de;">
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> NRO. EXP.</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> FECHA</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> DOCUMENTO</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> FOLIOS</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> ORIGEN</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> ASUNTO</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> DESTINO</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_cogs"></i> ESTADO</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_cogs"></i> OBSERVACIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablaSeguimiento_Cuerpo">
                                        <tr>
                                            <td colspan="9" style="text-align:center;">No hay datos para mostrar</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-default pull-left" href="#" onclick="ver_grilla();"><i id="icono_grilla" class="ion-ios-list-outline" title="Ver Seguimiento en TABLA"></i></a>
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Aceptar</button>
                        <button type="button" class="btn btn-default pull-right" onclick="imprimir_seguimiento();">imprimir</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal_Seguimiento_Detalle" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><b>SEGUIMIENTO A DETALLE</b></h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal">
                            <table class="table table-striped table-bordered table-hover" cellspacing="0" style="border: 2px solid #acacac">
                                <tr>
                                    <td style="font-weight: bolder;text-align: right;">DOCUMENTO : </td>
                                    <td style="text-align: left;"><label id="modal_seg_documento"></label></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bolder;text-align: right;">ORIGEN : </td>
                                    <td style="text-align: left;"><label id="modal_seg_origen"></label></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bolder;text-align: right;">DESTINO : </td>
                                    <td style="text-align: left;"><label id="modal_seg_destino"></label></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bolder;text-align: right;">FECHA ENVÍO : </td>
                                    <td style="text-align: left;"><label id="modal_seg_envio"></label></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bolder;text-align: right;">FECHA RECEPCIÓN : </td>
                                    <td style="text-align: left;"><label id="modal_seg_recepcion"></label></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal_Adjunto" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><b>ARCHIVOS ADJUNTADOS</b></h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal">
                            <table id="tablaAdjuntoDetalle" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="border: 1px solid #acacac">
                                    <thead>
                                        <tr style="background: #d2d6de;">
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> NRO</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> DOCUMENTO</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_cogs"></i> ACCIÓN</th>
                                        </tr>
                                    </thead>
                                    <tbody id="taAdjuntoDetalle">
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{asset('backend/assets/js/build.js')}}"></script>
<script src="{{asset('backend/assets/js/highcharts.js')}}"></script>
<script src="{{asset('backend/assets/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/assets/js/socket.io.js')}}"></script>
<script src="{{asset('backend/assets/js/chat.js')}}"></script>
	function inicializar()
	{
        $.ajax({
            type: "POST",
            url: "tramite/listar_oficinas_atencion",
            success: function (data) 
            {	
            	data = JSON.parse(data);
                var Texto = '';
                for (var i = 0; i < data.length; i++) 
                {
                    Texto += '<option value="'+data[i].idnodo+'">'+data[i].descripcion+'</option>';
                }
                $('#cbListaOficinas').empty();
                $('#cbListaOficinas').append(Texto);

                var id_ = obtener_id_oficina(data, $('#laOficina').text());
                $('#cbListaOficinas').val(id_);
                if (data.length > 0)
                    $('#div_ListaOficinas').show();
                else
                    $('#div_ListaOficinas').hide();
            },
            accept: 'application/json'
        });
	}
    function obtener_id_oficina(lista_, item_)
    {
        for (var i = 0; i < lista_.length; i++) 
        {
            if (lista_[i].descripcion == item_)
                return lista_[i].idnodo;
        }
        return -1;
    }
    function setear_oficina()
    {
        var id_oficina_ = $('#cbListaOficinas').val();
        var oficina_ = $("#cbListaOficinas option:selected").html();
        $.ajax({
            type: "POST",
            url: "tramite/setear_oficina",
            success: function (data) 
            {
                location.reload();
            },
            data :
            {
                id_oficina : id_oficina_,
                oficina : oficina_
            },
            accept: 'application/json'
        });
    }
</script>
<!--
    <script src="http://tramite.unsaac.edu.pe/assets/js/jquery.min.js"></script>
    <script src="http://tramite.unsaac.edu.pe/assets/js/bootstrap.min.js"></script>
    <script src="http://tramite.unsaac.edu.pe/assets/js/bootstrap-typehead.js"></script>
    <script src="http://tramite.unsaac.edu.pe/assets/js/jquery.dataTables.min.js"></script>
    <script src="http://tramite.unsaac.edu.pe/assets/js/dataTables.bootstrap.min.js"></script>
    <script src="http://tramite.unsaac.edu.pe/assets/js/vis.js"></script>
    <script src="http://tramite.unsaac.edu.pe/assets/js/app.min.js"></script>
    <script src="http://tramite.unsaac.edu.pe/assets/js/demo.js"></script>
-->        <script type="text/javascript">
            var nodes = null;
            var edges = null;
            var network = null;
            var navegacion = null;
            var iniciado = false;
            var datos = null;
            function destroy() {
                if (network !== null)
                {
                    network.destroy();
                    network = null;
                }
            }
            function listar_tipo_documentos()
            {
                $('#tbTipoDocumento').empty();
                $.ajax({
                    type: "POST",
                    url: "../mantenimiento/tipodocumentos/listar",
                    success: function (data)
                    {
                        Lista = JSON.parse(data);
                        var Texto = '';
                        var Texto2 ='';
                        for (var i = 0; i < Lista.length; i++)
                        {
                            Texto += '<option value="'+Lista[i].idtipodocumento+'">'+Lista[i].nombre+'</option>';
                        };
                        $('#tbTipoDocumento').append(Texto);
                    },
                    accept: 'application/json'
                });
            }
            $(document).on('ready', ini);
            function ini()
            {
                var fecha = new Date();
                var Anio = fecha.getFullYear();
                $('#tbAnio').val(Anio);
                
                cambiar();
                listar_instituciones();
                listar_tipo_documentos();
            }
            function cambiar()
            {
                var tipo_ = $('#tbTipo').val();
                if (tipo_ == 'NRO DE EXPEDIENTE')
                {
                    $('#div_expediente').show();
                    $('#div_documento').hide();
                    $('#div_interesado').hide();
                }
                else if (tipo_ == 'NRO DE DOCUMENTO')
                {
                    $('#div_expediente').hide();
                    $('#div_documento').show();
                    $('#div_interesado').hide();
                }
                else if (tipo_ == 'INTERESADO')
                {
                    $('#div_expediente').hide();
                    $('#div_documento').hide();
                    $('#div_interesado').show();
                }    
            }
            function listar_instituciones()
            {
                $.ajax({
                    type: "POST",
                    url: "tramite/listar_destinos_completo",
                    success: function (data)
                    {
                        Lista = JSON.parse(data);
                        var Texto = '';
                        var Lista_Destinos = Array();
                        for (var i = 0; i < Lista.length; i++)
                        {
                            Lista_Destinos.push(new Elemento( Lista[i].iddestino, Lista[i].nombre));
                        };
                        control_typeahead('tbOrigen', Lista_Destinos);
                    },
                    accept: 'application/json'
                });
            }
            function realizar_busqueda()
            {
                var nroexpediente_ = $('#tbNroExpediente').val();
                var interesado_ = $('#tbInteresado').val();
                var origen_ = $('#tbOrigen').val();
                var tipodocumento_ = $('#tbTipoDocumento').val();
                var nrodocumento_ = $('#tbNroDocumento').val();
                var tipo_ = $('#tbTipo').val();
                var tipobusqueda_ = '';
                var anio_ = $('#tbAnio').val();
                if (tipo_ == 'NRO DE EXPEDIENTE')
                {
                    mostrarCharging(true);
                    $.ajax({
                        type: "POST",
                        url: "tramite/buscar_expediente",
                        success: function (data)
                        {
                            mostrarCharging(false);
                            var Lista = JSON.parse(data);

                            var Texto = '';
                            $('#taDetalle').empty();
                            if (Lista.length == 0)
                            {
                                $('#taDetalle').append('<tr><td colspan="9" style="text-align:center;">No hay datos para mostrar</td></tr>');
                            }
                            else
                            {
                                for (var i = 0; i < Lista.length; i++)
                                {
                                    Texto += '<tr><td style="text-align:center;vertical-align: middle;">'+Lista[i].nroexpediente+'</td>';
                                    Texto += '<td style="text-align:center;vertical-align: middle;">'+Lista[i].fecha+'</td>';
                                    var documento_ = Lista[i].tipodocumento;
                                    if (Lista[i].nrodocumento != '0')
                                        documento_ += ' ' + Lista[i].nrodocumento;
                                    else
                                        documento_ += ' S/N';
                                    Texto += '<td style="text-align:center;vertical-align: middle;">'+documento_ +'</td>';
                                    var folios_ = Lista[i].nrofolios;
                                    if (Lista[i].adjuntootros != '')
                                        folios_ += '; ' + Lista[i].adjuntootros;
                                    Texto += '<td style="vertical-align: middle;">'+folios_+'</td>';
                                    Texto += '<td style="vertical-align: middle;">'+Lista[i].origen+'</td>';
                                    Texto += '<td style="vertical-align: middle;">'+Lista[i].destino+'</td>';
                                    Texto += '<td style="vertical-align: middle;">'+Lista[i].asunto+'</td>';
                                    Texto += '<td style="vertical-align: middle;">'+Lista[i].detalle+'</td>';
                                    Texto += '<td style="text-align:center;vertical-align: middle;"><div class="btn-group" style="display:inline-flex;">';
                                    Texto += '<a class="btn btn-default" href="#" data-toggle="tooltip" title="Ver Documento Adjunto" onclick="ver_adjunto(\''+Lista[i].documentofisico+'\')"><i class="ion-link"></i></a>';
                                    Texto += '<a class="btn btn-default" href="#" data-toggle="tooltip" title="Ver Seguimiento" onclick="seguimiento('+Lista[i].idtramitedetalle+')"><i class="glyphicon glyphicon-list-alt"></i></a></div></td></tr>';
                                };

                                if (datos != null)
                                {
                                    datos.clear();
                                    datos.destroy();
                                }
                                $('#taDetalle').append(Texto);
                                datos = $('#tablaDetalle').DataTable( {
                                    "searching": false,
                                    "responsive": true,
                                    "columns": [ { "type": "num" }, { "type": "date" }, null, { "type": "num" },
                                        null,
                                        null,
                                        null,
                                        null,
                                        null
                                      ],
                                    "bDestroy": true}).draw();
                                if (Lista.length == 1)
                                {
                                    seguimiento(Lista[0].idtramitedetalle);   
                                }
                            }
                            $('#tbNroExpediente').val('');
                        },
                        data:
                        {
                            anio : anio_,
                            nroexpediente : nroexpediente_
                        },
                        accept: 'application/json'
                    });
                }
                else if (tipo_ == 'NRO DE DOCUMENTO')
                {
                    if (nrodocumento_ != '')
                    {
                        mostrarCharging(true);
                        $.ajax({
                            type: "POST",
                            url: "tramite/buscar_expediente_x_nro",
                            success: function (data)
                            {
                                mostrarCharging(false);
                                var Lista = JSON.parse(data);

                                var Texto = '';
                                $('#taDetalle').empty();
                                if (Lista.length == 0)
                                {
                                    $('#taDetalle').append('<tr><td colspan="9" style="text-align:center;">No hay datos para mostrar</td></tr>');
                                }
                                else
                                {
                                    for (var i = 0; i < Lista.length; i++)
                                    {
                                        Texto += '<tr><td style="text-align:center;vertical-align: middle;">'+Lista[i].nroseguimiento+'</td>';
                                        Texto += '<td style="text-align:center;vertical-align: middle;">'+formatoFecha(Lista[i].fecha)+'</td>';
                                        var documento_ = Lista[i].tipodocumento;
                                        if (Lista[i].nrodocumento != '0')
                                            documento_ += ' ' + Lista[i].nrodocumento;
                                        else
                                            documento_ += ' S/N';
                                        Texto += '<td style="text-align:center;vertical-align: middle;">'+documento_ +'</td>';
                                        var folios_ = Lista[i].nrofolios;
                                        if (Lista[i].adjuntootros != '')
                                            folios_ += '; ' + Lista[i].adjuntootros;
                                        Texto += '<td style="vertical-align: middle;">'+folios_+'</td>';
                                        Texto += '<td style="vertical-align: middle;">'+Lista[i].origen+'</td>';
                                        Texto += '<td style="vertical-align: middle;">'+Lista[i].destino+'</td>';
                                        Texto += '<td style="vertical-align: middle;">'+Lista[i].asunto+'</td>';
                                        Texto += '<td style="vertical-align: middle;">'+Lista[i].detalle+'</td>';
                                        Texto += '<td style="text-align:center;vertical-align: middle;"><div class="btn-group" style="display:inline-flex;">';
                                        Texto += '<a class="btn btn-default" href="#" data-toggle="tooltip" title="Ver Adjunto" onclick="ver_adjunto(\''+Lista[i].documentofisico+'\')"><i class="ion-link"></i></a>';
                                        Texto += '<a class="btn btn-default" href="#" data-toggle="tooltip" title="Ver Seguimiento" onclick="seguimiento('+Lista[i].idtramitedetalle+')"><i class="glyphicon glyphicon-list-alt"></i></a></div></td></tr>';
                                    };
                                    if (datos != null)
                                    {
                                        datos.clear();
                                        datos.destroy();
                                    }
                                    $('#taDetalle').append(Texto);
                                    datos = $('#tablaDetalle').DataTable( {
                                        "searching": false,
                                        "responsive": true,
                                         "columns": [ { "type": "num" }, { "type": "date" }, null, { "type": "num" },
                                            null,
                                            null,
                                            null,
                                            null,
                                            null
                                          ],
                                        "bDestroy": true}).draw();
                                }
                            },
                            data:
                            {
                                anio : anio_,
                                oficina : origen_,
                                tipodocumento : tipodocumento_,
                                nrodocumento : nrodocumento_
                            },
                            accept: 'application/json'
                        });
                    }
                    else
                        mostrar_alerta(false, 'Error!! Debe escribir un número de Documento');
                }
                else if (tipo_ == 'INTERESADO')
                {
                    if (interesado_ != '')
                    {
                        mostrarCharging(true);
                        $.ajax({
                            type: "POST",
                            url: "tramite/buscar_expediente_interesado",
                            success: function (data)
                            {
                                mostrarCharging(false);
                                var Lista = JSON.parse(data);

                                var Texto = '';
                                $('#taDetalle').empty();
                                if (Lista.length == 0)
                                {
                                    $('#taDetalle').append('<tr><td colspan="9" style="text-align:center;">No hay datos para mostrar</td></tr>');
                                }
                                else
                                {
                                    for (var i = 0; i < Lista.length; i++)
                                    {
                                        Texto += '<tr><td style="text-align:center;vertical-align: middle;">'+Lista[i].nroexpediente+'</td>';
                                        Texto += '<td style="text-align:center;vertical-align: middle;">'+formatoFecha(Lista[i].fecha)+'</td>';
                                        var documento_ = Lista[i].tipodocumento;
                                        if (Lista[i].nrodocumento != '0')
                                            documento_ += ' ' + Lista[i].nrodocumento;
                                        else
                                            documento_ += ' S/N';
                                        Texto += '<td style="text-align:center;vertical-align: middle;">'+documento_ +'</td>';
                                        var folios_ = Lista[i].nrofolios;
                                        if (Lista[i].adjuntootros != '')
                                            folios_ += '; ' + Lista[i].adjuntootros;
                                        Texto += '<td style="vertical-align: middle;">'+folios_+'</td>';
                                        Texto += '<td style="vertical-align: middle;">'+Lista[i].origen+'</td>';
                                        Texto += '<td style="vertical-align: middle;">'+Lista[i].destino+'</td>';
                                        Texto += '<td style="vertical-align: middle;">'+Lista[i].asunto+'</td>';
                                        Texto += '<td style="vertical-align: middle;">'+Lista[i].detalle+'</td>';
                                        Texto += '<td style="text-align:center;vertical-align: middle;"><div class="btn-group" style="display:inline-flex;">';
                                        Texto += '<a class="btn btn-default" href="#" data-toggle="tooltip" title="Ver Adjunto" onclick="ver_adjunto(\''+Lista[i].documentofisico+'\')"><i class="ion-link"></i></a>';
                                        Texto += '<a class="btn btn-default" href="#" data-toggle="tooltip" title="Ver Seguimiento" onclick="seguimiento('+Lista[i].idtramitedetalle+')"><i class="glyphicon glyphicon-list-alt"></i></a></div></td></tr>';
                                    };
                                    if (datos != null)
                                    {
                                        datos.clear();
                                        datos.destroy();
                                    }
                                    $('#taDetalle').append(Texto);
                                    datos = $('#tablaDetalle').DataTable( {
                                        "searching": false,
                                        "responsive": true,
                                        "columns": [ { "type": "num" }, { "type": "date" }, null, { "type": "num" },
                                            null,
                                            null,
                                            null,
                                            null,
                                            null
                                          ],
                                        "bDestroy": true}).draw();
                                }
                                $('#tbInteresado').val('');
                            },
                            data:
                            {
                                anio : anio_,
                                interesado : interesado_
                            },
                            accept: 'application/json'
                        });
                    }
                    else
                        mostrar_alerta(false, 'Error!! Debe digitar el campo interesado');
                }
            }
            function ver_adjunto(ruta_archivo)
            {
                if (ruta_archivo != "undefined" && ruta_archivo != "null" && ruta_archivo != "")
                {
                    ruta_archivo = ruta_archivo.substring(0, ruta_archivo.length);
                    var lista = ruta_archivo.split("|||");
                    $('#taAdjuntoDetalle').empty();
                    var Texto = '';
                    for (var i = 0; i < lista.length; i++)
                    {
                        var cont = i+1;
                        var item = lista[i].substring(29);
                        Texto += '<tr><td style="text-align:center;"><b>'+cont+'</b></td><td style="text-align:left;">'+item+'</td><td style="text-align:center;"><div class="btn-group" style="display:inline-flex;"><a class="btn btn-default" href="#" data-toggle="tooltip" title="Ver Documento Adjunto" onclick="ver_archivo(\''+lista[i]+'\')"><i class="ion-document"></i></a></td></tr>';
                    }
                    $('#taAdjuntoDetalle').append(Texto);
                    $('#modal_Adjunto').modal('show');
                }
                else
                    mostrar_alerta(false, 'No tiene ningun archivo asociado');
            }
            function ver_archivo(ruta_archivo)
            {
                window.open('../assets/' + ruta_archivo, 'Archivo Adjunto', 'WIDTH=800px, HEIGHT=600px');
            }
            function control_typeahead(control, lista)
            {
                $('#'+control).typeahead(
                {
                    source: lista,
                    updater: function (item) {
                        var clave = item.substring(0, item.indexOf('-'));
                        var valor = item.substring(item.indexOf('-')+1);
                        $('#'+control).data('clave', parseInt(clave));
                        return valor;
                    }
                });
            }
            function Elemento(clave_, valor_)
            {
                this.clave = clave_;
                this.valor = valor_;
                this.toLowerCase = function () { if (this.valor!=undefined) { return this.valor.toLowerCase();} };
                this.indexOf = function (texto_) { if (this.valor!=undefined) { return this.valor.indexOf(texto_);} };
                this.replace = function (old_, new_) { if (this.valor!=undefined) { return this.valor.replace(old_, new_);} };
                this.toString = function(){ if (this.valor!=undefined) { return this.clave.toString() +'-'+ this.valor.toString();} };
            }
            function numeros(evt)
            {
                var charCode = (evt.which) ? evt.which : event.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;
                else
                    return true;
            }
            function seguimiento(idtramitedetalle_)
            {
                mostrarCharging(true);
                $.ajax({
                    type: "POST",
                    url: "tramite/ver_seguimiento",
                    success: function (data)
                    {
                        $('#modal_Seguimiento').data('indicador', 1);
                        $('#div_grafico').height('0px');
                        $('#div_grilla').height('400px');
                        $('#icono_grilla').removeClass('ion-ios-list-outline');
                        $('#icono_grilla').addClass('ion-network');
                        $('#icono_grilla').prop('title', 'Ver Seguimiento GRÁFICO');

                        data = JSON.parse(data);
                        for (var i = 0; i < data.length; i++)
                        {
                            if (data[i].estado == 'R')
                            {
                                var origen_ = obtener_origen(data, data[i].idinicio);
                                data[i].origen = origen_;
                                data[i].destino = 'ARCHIVADO';
                            }
                            else if (data[i].estado == 'T')
                            {
                                var origen_ = obtener_origen(data, data[i].idinicio);
                                data[i].origen = origen_;
                                data[i].destino = 'ATENDIDO';
                            }
                        }
                        graficar(data);
                        ver_seguimiento_grilla(idtramitedetalle_);
                        mostrarCharging(false);
                    },
                    data :
                    {
                        idtramitedetalle : idtramitedetalle_
                    },
                    accept: 'application/json'
                });
            }
            function ver_seguimiento_grilla(idtramitedetalle_)
            {
                mostrarCharging(true);
                $('#tablaSeguimiento_Cuerpo').data('idtramitedetalle', idtramitedetalle_);
                $.ajax({
                    type: "POST",
                    url: "tramite/ver_seguimiento_grilla",
                    success: function (data)
                    {
                        data = JSON.parse(data);
                        var Texto = '';
                        $('#tablaSeguimiento_Cuerpo').empty();
                        for (var i = 0; i < data.length; i++)
                        {
                            if (i == 0)
                            {
                                $('#tbSeguimiento_Expediente').val(data[i].expediente);
                                $('#tbSeguimiento_Interesado').val(data[i].origen);
                                $('#tbSeguimiento_Asunto').val(data[i].asunto);
                            }
                            
                            var cont = i + 1;
                            Texto += '<tr><td style="text-align:center;">'+data[i].expediente+'</td>';
                            Texto += '<td style="text-align:center;">'+formatoFecha(data[i].fecha)+'</td>';
                            var documento_ = '';
                            if (data[i].nrodocumento == 0)
                                documento_ = data[i].tipodocumento + ' S/N';
                            else
                                documento_ = data[i].tipodocumento + data[i].nrodocumento;
                            Texto += '<td style="text-align:center;">'+documento_+'</td>';
                            Texto += '<td style="text-align:center;">'+data[i].nrofolios+'</td>';
                            Texto += '<td style="text-align:center;">'+data[i].origen+'</td>';
                            Texto += '<td style="text-align:center;">'+data[i].asunto+'</td>';
                            Texto += '<td style="text-align:center;">'+data[i].destino+'</td>';
                            Texto += '<td style="text-align:center;">'+data[i].estado+'</td>';
                            Texto += '<td style="text-align:center;">'+data[i].observaciones+'</td></tr>';
                        }
                        if (data.length == 0)
                        {
                            $('#tablaSeguimiento_Cuerpo').append('<tr><td colspan="9" style="text-align:center;">No hay datos para mostrar</td></tr>');
                        }
                        else
                        {
                            $('#tablaSeguimiento_Cuerpo').append(Texto);
                        }
                            mostrarCharging(false);
                    },
                    data :
                    {
                        idtramitedetalle : idtramitedetalle_
                    },
                    accept: 'application/json'
                });
            }
            function imprimir_seguimiento()
            {
                var idtramitedetalle_ = $('#tablaSeguimiento_Cuerpo').data('idtramitedetalle');
                $.ajax(
                {
                    type: "POST",
                    url: "tramite/imprimir_seguimiento",
                    success: function (data)
                    {
                        ver_archivo(data);
                    },
                    data:
                    {
                        "idtramitedetalle": idtramitedetalle_
                    },
                    accept: 'application/json'
                });
            }
            function obtener_origen(lista_, idfin_)
            {
                for (var i = 0; i < lista_.length; i++)
                {
                    if (lista_[i].idfin == idfin_)
                        return lista_[i].destino;
                }
                return '';
            }
            function UbicarNodo(lista_aux_, nodo_)
            {
                for (var i = 0; i < lista_aux_.length; i++)
                {
                    if (lista_aux_[i].label == nodo_)
                        return parseInt(lista_aux_[i].id);
                }
                return -1;
            }
            function graficar(data)
            {
                var n_ = Array();
                var e_ = Array();

                var cont = 0;
                for (var i = 0; i < data.length; i++)
                {
                    console.log(data[i]);
                    var indicador_ = UbicarNodo(n_, data[i].origen);
                    var color = '#D2E5FF';
                    if (data[i].estado == 'N')
                        color = '#FFC0CB';
                    else if (data[i].estado == 'R' || data[i].estado == 'T')
                        color = '#BFBFBF';

                    if (indicador_ < 0)
                    {
                        cont += 1;
                        n_.push(new visElemento(cont, data[i].origen, '#D2E5FF', data[i].idinicio, data[i].idfin, data[i].idseguimiento));
                    }

                    indicador_ = UbicarNodo(n_, data[i].destino);
                    if (indicador_ < 0)
                    {
                        cont += 1;
                        n_.push(new visElemento(cont, data[i].destino, color, data[i].idinicio, data[i].idfin, data[i].idseguimiento));
                    }
                }
                for (var i = 0; i < data.length; i++)
                {
                    var id1 = UbicarNodo(n_, data[i].origen);
                    var id2 = UbicarNodo(n_, data[i].destino);
                    e_.push(new edgeElemento(id1, id2, 'to'));
                }
                nodes = new vis.DataSet(n_);
                edges = new vis.DataSet(e_);

                // create a network
                var container = document.getElementById('mynetwork');
                var data = {
                    nodes: nodes,
                    edges: edges
                };
                var options = {
                    interaction: {
                      navigationButtons: true,
                      keyboard: true
                    }
                  };
                var network = new vis.Network(container, data, options);
                navegacion = network.interactionHandler.navigationHandler;
                iniciado = true;
                $('#modal_Seguimiento').modal('show');
                setInterval(function()
                {
                    if (iniciado)
                    {
                        navegacion._fit();
                        iniciado = false;
                    }
                }, 2000);
                network.on("click", function (params)
                {
                    if (params.nodes.length)
                    {
                        var nodo_actual = params.nodes[0];
                        var idseguimiento_ = nodes._data[nodo_actual].idseguimiento;
                        var idtramitedetalle_ = nodes._data[nodo_actual].idfin;
                        var nombre_ = nodes._data[nodo_actual].label;

                        if (nombre_ != 'ARCHIVADO' && nombre_ != 'ATENDIDO')
                        {
                            $.ajax({
                                type: "POST",
                                url: "tramite/ver_detalle_seguimiento",
                                success: function (data)
                                {
                                    $('#modal_seg_documento').text('');
                                    $('#modal_seg_origen').text('');
                                    $('#modal_seg_envio').text('');
                                    $('#modal_seg_destino').text('');
                                    $('#modal_seg_recepcion').text('');

                                    data = JSON.parse(data);
                                    data = data[0];
                                     $('#modal_seg_documento').text(data.tipodocumento + ' ' + data.nrodocumento);
                                    if (data.origen == nombre_)
                                    {
                                        $('#modal_seg_origen').text('--');
                                        $('#modal_seg_envio').text('--');
                                        $('#modal_seg_destino').text(data.origen);
                                        $('#modal_seg_recepcion').text(data.fecha);
                                    }
                                    else if (data.destino == nombre_)
                                    {
                                        $('#modal_seg_origen').text(data.origen);
                                        $('#modal_seg_envio').text(data.fecha);
                                        $('#modal_seg_destino').text(data.destino);
                                        if (data.estado == 'N')
                                            $('#modal_seg_recepcion').text('--');
                                        else
                                            $('#modal_seg_recepcion').text(data.fecha);
                                    }
                                    $('#modal_Seguimiento_Detalle').modal('show');
                                },
                                data :
                                {
                                    idseguimiento : idseguimiento_,
                                    idtramitedetalle : idtramitedetalle_
                                },
                                accept: 'application/json'
                            });
                        }
                    }
                });
            }
            function ver_grilla()
            {
                var indicador_ = $('#modal_Seguimiento').data('indicador');
                if (indicador_ == 1)
                {
                    $('#div_grafico').height('400px');
                    $('#div_grilla').height('0px');
                    $('#icono_grilla').removeClass('ion-network');
                    $('#icono_grilla').addClass('ion-ios-list-outline');
                    $('#icono_grilla').prop('title', 'Ver Seguimiento en TABLA');
                }
                else if (indicador_ == -1)
                {
                    $('#div_grafico').height('0px');
                    $('#div_grilla').height('400px');
                    $('#icono_grilla').removeClass('ion-ios-list-outline');
                    $('#icono_grilla').addClass('ion-network');
                    $('#icono_grilla').prop('title', 'Ver Seguimiento GRÁFICO');
                }
                indicador_ = indicador_ * -1;
                $('#modal_Seguimiento').data('indicador', indicador_);
            }
            function visElemento(id_, label_, color_, idinicio_, idfin_, idseguimiento_)
            {
                this.id = id_;
                this.label = label_;
                this.color = color_;
                this.idinicio = idinicio_;
                this.idfin = idfin_;
                this.idseguimiento = idseguimiento_;
            }
            function edgeElemento(from_, to_, arrows_)
            {
                this.from = from_;
                this.to = to_;
                this.arrows = arrows_;
            }
            function formatoFecha(fecha_)
            {
                var hora = fecha_.substring(11);
                var hora = hora.substring(0,5);
                var monthNames = ["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago", "Set", "Oct", "Nov", "Dic"];

                var date = new Date(fecha_);
                var day = date.getDate();
                var monthIndex = date.getMonth();
                var year = date.getFullYear();
                if (parseInt(day) < 10)
                    day = '0'+day;
                return day+'/'+monthNames[monthIndex]+'/'+year + '<br>' +hora + ' hrs.';
            }
            function mostrarCharging(indicador_)
            {
                if (indicador_)
                    $('#slash').show();
                else
                    $('#slash').hide();
            }
            function mostrar_alerta(indicador_, mensaje_)
            {
                if (indicador_)
                    $('#alert_div').css('background-color', '#5bc363');
                else
                    $('#alert_div').css('background-color', '#ce5b59');
                $('#alert_mensaje').text(mensaje_);
                $('#modal_Mensaje').modal('show')
            }
        </script>
    </body>
</html>