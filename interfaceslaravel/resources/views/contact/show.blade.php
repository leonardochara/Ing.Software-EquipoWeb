@extends('base')
@section('content')
    <head>

<link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('backend/assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/AdminLTE.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/skins/skin-brown.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/vis.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/responsive.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/chat.css')}}">   
 </head>
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
                                                <option>AUTOR</option>
                                                <option>ASESOR</option>
                                                <option>TITULO</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"><b>Expediente :</b></label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="Nro Expediente" id="tbNroExpediente"/>
                                        </div>
                                        <a class="btn btn-default" href="#" onclick="realizar_busqueda();" data-toggle="tooltip" title="Buscar"><span class="ion-ios-search-strong"></span> Buscar</a>
                                    </div>

                                 </div> 

                                </div>
                                <table id="tablaDetalle" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="border: 1px solid #acacac">
                                    <thead>
                                        <tr style="background: #d2d6de;">
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> NRO</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> FECHA</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> TITULO</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> AUTORES</th>
                                            <th style="text-align:center;vertical-align: middle;"><i class="icon_profile"></i> ASESORES</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody id="taDetalle">
                                        <tr>
                                            <td colspan="9" style="text-align:center;vertical-align: middle;">No hay datos para mostrar</td>
                                        </tr>

                                </table>
                            </div>
                        </section>


 
            <footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Versión</b> 1.0.0
    </div>
    <strong>2019 - TESITECA. </strong>
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
</div>  
@endsection