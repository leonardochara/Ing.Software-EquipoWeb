@extends('base')
@section('content')
<div class="col-sm-8">
	<h2>
		{{$student->apellido}} {{$student->nombre}}
		<a href="{{route('students.index')}}" class="btn btn-info pull-right">
			<span class="glyphicon glyphicon-share-alt"></span>Volver
		</a>
	</h2>
	<h3>
		{{$student->nota1}}
	</h3>
	<h4>
		{{$student->nota2}}
	</h4>
</div>
<div class="col-sm-4">
	
</div>
@endsection