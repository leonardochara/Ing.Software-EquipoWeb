@if(Session::has('mensaje'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
		&times;
		
	</button>
	{{Session::get('mensaje')}}
	
</div>
@endif
@if(Session::has('mensajee'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
		&times;
		
	</button>
	{{Session::get('mensajee')}}
	
</div>
@endif