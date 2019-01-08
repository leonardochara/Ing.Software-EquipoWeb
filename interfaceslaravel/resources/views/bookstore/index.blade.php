@extends('base')
@section('content')
<div class="col-sm-8">
	<h2>
		Lista de Editoriales
		<a href="{{ route('bookstores.create')}}" class="btn btn-primary pull-right">
			<span class=" glyphicon glyphicon-plus"></span> Nuevo
		</a>
	</h2>
	@include('partials.info')
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th width="20px">ID</th>
				<th>Razón Social</th>
				<th>Dirección</th>
				<th>Url</th>
				<th colspan="3">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			@foreach($bookstores as $bookstore)
			<tr>
				<td>{{ $bookstore ->id }}</td>
				<td>{{ $bookstore ->razon_social }}</td>
				<td>{{ $bookstore ->direccion}}</td>
				<td>{{ $bookstore ->url}}</td>
				<td>
					<a href="{{ route('bookstores.show',$bookstore->id)}}" title="Ver" class="btn btn-link">
						<span class="glyphicon glyphicon-eye-open"></span>
					</a>
				</td>
				<td>
					<a href="{{ route('bookstores.edit',$bookstore->id) }}" title="Editar" class="btn btn-link">
						<span class="glyphicon glyphicon-edit"></span>
					</a>
				</td>
				<td>
					<form action="{{route('bookstores.destroy',$bookstore->id)}}" method="POST">
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
	{!! $bookstores->render() !!}
	
</div>
<div class="col-sm-4">
	@include('partials.aside')
	
</div>
@endsection

