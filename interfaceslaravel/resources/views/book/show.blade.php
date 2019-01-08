@extends('base')
@section('content')

<div class="col-sm-8">
	<h1>
		<div class="col-sm-10">
		<div class="alert alert-info" role="alert">
		<strong>{{$book->titulo}}</strong>
	</div>
</div>
		<a href="{{route('books.index')}}" class="btn btn-info pull-right">
			<span class="glyphicon glyphicon-share-alt"></span>Volver
		</a>
	</h1>
	<h2>
		<div class="col-sm-10">
		<div class="alert alert-info" role="alert">
		<strong>Autor  :</strong>
		@foreach($authors as $author)
		@if($book->author_id==$author->id)
			{{$author->nombres}}		
		@endif
		@endforeach
	
	</div>
		</div>
	</h2>
	<h3>
		<div class="col-sm-10">
		<div class="alert alert-info">
		<strong>Tipo  : </strong>	{{$book->tipo}}
	</div>
		</div>
		
	</h3>
	<h3>
		<div class="col-sm-10">
		<div class="alert alert-info" role="alert">
		<strong>Disponible  :	</strong>{{$book->disponible? 'SI' :'NO'}}
					
	</div>
		</div>
	</h3>
	<h3>
		<div class="col-sm-10">
		<div class="alert alert-info" role="alert">
		<strong>Ejemplares  :</strong> {{$book->ejemplares}}
	</div>
		</div>
	</h3>
	<h3>
		<div class="col-sm-10">
			<div class="alert alert-info" role="alert">
		<strong>Edición  : </strong>	{{$book->edicion}}
	</div>
</div>
	</h3>
	<h8>
		
		<div class="col-sm-10">
	<img src="/images/{{ $book->imagen}}"class="img-thumbnail" title="{{ $book->titulo}}">

</div>
	</h8>


</div>
<div class="col-sm-4">
	
</div>
@endsection