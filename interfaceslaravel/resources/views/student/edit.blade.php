@extends('base')
@section('content')
<div class="col-sm-8">
	<h2>
		Editar un estudiante
		<a href="{{route('students.index')}}" class="btn btn-info pull-right">
			<span class="glyphicon glyphicon-share-alt"></span>Volver
		</a>
	</h2>
	@include('partials.error')
	<form class="form-horizontal" action="{{route('students.update',$student->id)}}" method="POST">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label class="control-label col-sm-2" for="nombre">Nombre:</label>
			
			<div class="col-sm-10">
				<input type="text" class="form-control" name="nombre" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				value="{{ $student->nombre }}">
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="apellido">Apellido:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="apellido" value="{{ $student->apellido }}">
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="nota1">Nota1:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="nota1" value="{{ $student->nota1 }}">
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="nota2">Nota2:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="nota2" value="{{ $student->nota2 }}">
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