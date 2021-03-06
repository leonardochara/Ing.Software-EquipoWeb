@extends('base')
@section('content')
<div class="col-sm-8">
	<h2>
		Editar un libro
		<a href="{{route('notes.index')}}" class="btn btn-info pull right">
			<span class="glyphicon glyphicon-share-alt"></span>Volver
		</a>
	</h2>
	@include('partials.error')
	<form class="form-horizontal" action="{{route('notes.update',$note->id)}}" method="POST">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label class="control-label col-sm-2" for="titulo">Titulo:</label>
			
			<div class="col-sm-10">
				<input type="text" class="form-control" name="titulo" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				value="{{ $note->titulo }}">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="url">Url:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="url" value="{{ $note->url }}">
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