@extends('base')
@section('content')
<body style="background-color:#FFCE3A;">

<div class="col-sm-8">
	<h1>
		<div class="col-sm-8">
		<div class="alert alert-info" role="alert">
		<strong>{{$bookstore->razon_social}}</strong>
	</div>
</div>
</h1>
		<a href="{{route('bookstores.index')}}" class="btn btn-info pull-right">
			<span class="glyphicon glyphicon-share-alt"></span>Volver
		</a>
	
	<h3>
		<div class="col-sm-8">
		<div class="alert alert-info" role="alert">
		<strong>Dirección: </strong>{{$bookstore->direccion}}

		</div>
	</h3>
	<h3>
		<div class="col-sm-8">
			<div class="alert alert-info" role="alert">
		<strong>URL:</strong> {{$bookstore->url}}

		</div>
		
	</h3>

</div>
<div class="col-sm-4">
	
</div>
</body>
@endsection