@extends('base')
@section('content')
<div class="col-sm-8">
	<h2>
		Lista de Autores
		<a href="{{ route('authors.create')}}" class="btn btn-primary pull-right">
			<span class=" glyphicon glyphicon-plus"></span> Nuevo
		</a>
	</h2>
	@include('partials.info')
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th width="20px">ID</th>
				<th>Nombre</th>
				<th>E-mail</th>
				<th colspan="3">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			@foreach($authors as $author)
			<tr>
				<td>{{ $author ->id }}</td>
				<td>{{ $author ->nombres }}</td>
				<td>{{ $author ->email }}</td>
				<td>
					<a href="{{ route('authors.show',$author->id)}}" title="Ver" class="btn btn-link">
						<span class="glyphicon glyphicon-eye-open"></span>
					</a>
				</td>
				<td>
					<a href="{{ route('authors.edit',$author->id) }}" title="Editar" class="btn btn-link">
						<span class="glyphicon glyphicon-edit"></span>
					</a>
				</td>
				<td>
					<form action="{{route('authors.destroy',$author->id)}}" method="POST">
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
	{!! $authors->render() !!}
	
</div>
<div class="col-sm-4">
	@include('partials.aside')
	
</div>
@endsection

