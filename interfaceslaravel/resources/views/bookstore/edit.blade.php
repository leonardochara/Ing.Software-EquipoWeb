@extends('base')
@section('content')
<div class="col-sm-8">
	<h2>
		Editar una Editorial
		<a href="{{route('bookstores.index')}}" class="btn btn-info pull-right">
			<span class="glyphicon glyphicon-share-alt"></span>Volver
		</a>
	</h2>
	@include('partials.error')
	<form class="form-horizontal" action="{{route('bookstores.update',$bookstore->id)}}" method="POST">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label class="control-label col-sm-2" for="razon_social">Nombre:</label>
			
			<div class="col-sm-10">
				<input type="text" class="form-control" name="razon_social" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				value="{{ $bookstore->razon_social}}">
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2" for="direccion">Dirección:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="direccion" value="{{ $bookstore->direccion }}">
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="url">URL:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="url" value="{{ $bookstore->url }}">
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-success">
					<span class="glyphicon glyphicon-floppy-saved"></span>Guardar
					
				</button>
			</div>
			
		</div>
		
	</form>
	
</div>
<div class="col-sm-4">
	
</div>
@endsection