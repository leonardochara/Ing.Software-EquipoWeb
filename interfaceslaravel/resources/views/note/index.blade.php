@extends('base')
@section('content')
<div class="col-sm-8">
	<h2>
		Lista de Libros
		<a href="{{ route('notes.create')}}" class="btn btn-primary pull-right">
			<span class=" glyphicon glyphicon-plus"></span> Nuevo
		</a>
	</h2> 
	@include('partials.info')
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th width="20px">ID</th>
				<th>Titulo</th>
				<th>Url</th>
				<th colspan="3">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			@foreach($notes as $note)
			<tr>
				<td>{{ $note ->id }}</td>
				<td>{{ $note ->titulo }}</td>
				<td>{{ $note->url}}</td>
				<td>
					<a href="{{ route('notes.show',$note->id)}}" title="Ver" class="btn btn-link">
						<span class="glyphicon glyphicon-eye-open"></span>
					</a>
				</td>
				<td>
					<a href="{{ route('notes.edit',$note->id) }}" title="Editar" class="btn btn-link">
						<span class="glyphicon glyphicon-edit"></span>
					</a>
				</td>
				<td>
					<form action="{{route('notes.destroy',$note->id)}}" method="POST">
						@csrf
						@method('DELETE')
						<button class="btn btn-link" title="Eliminar">
							<span class="glyphicon glyphicon-remove"></span>
						</button>
						
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{!! $notes->render() !!}
	
</div>
<div class="col-sm-4">
	@include('partials.aside')
	
</div>
@endsection