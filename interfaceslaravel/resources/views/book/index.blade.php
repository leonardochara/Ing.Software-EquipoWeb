@extends('base')

@section('content')
	<div class="col-sm-10">
		<h2>
			Lista de Libros
			<a href="{{ route('books.create')}}" class="btn btn-success pull-right">
			<span class=" glyphicon glyphicon-plus"></span> Nuevo
		</a>
	</h2>

	@include('partials.info')

	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th width="20px">ID</th>
				<th>Titulo</th>
				<th>Edicion</th>
				<th>Tipo</th>
				<th>Disponible</th>
				<th>Stock</th>
				<th>Autor</th>
				<th>Editorial</th>
				<th colspan="2">&nbsp;</th
			</tr>
		</thead>
		<tbody>
			@foreach($books as $book)
			<tr>
				<td>{{ $book ->id }}</td>
				<td>{{ $book ->titulo }}</td>
				<td>{{ $book ->edicion }}</td>
				<td>{{ $book ->tipo }}</td>
				<td>{{$book->disponible? 'SI' :'NO'}}</td>
				<td>{{ $book ->ejemplares}}</td>

				@foreach($authors as $author)
					@if($book->author_id==$author->id)
					<td>{{$author->nombres}}</td>
					@endif
				@endforeach

				@foreach($bookstores as $bookstore)
					@if($book->bookstore_id==$bookstore->id)
					<td>{{$bookstore->razon_social}}</td>
					@endif
				@endforeach

				<td>
					<a href="{{ route('books.show', $book->id)}}" title="" class="btn btn-link">
						<span class="glyphicon glyphicon-eye-open"></span>
					</a>
				</td>

				<td>
					<a href="{{ route('books.edit',$book->id)}}" title="Editar" class="btn btn-link">
						<span class="glyphicon glyphicon-edit"></span>
					</a>
				</td>
				<td>
					<form action="{{route('books.destroy',$book->id)}}" method="POST">
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
	{!! $books->render() !!}
	
</div>
<div class="col-sm-2">
	@include('partials.aside')
	
</div>
@endsection

