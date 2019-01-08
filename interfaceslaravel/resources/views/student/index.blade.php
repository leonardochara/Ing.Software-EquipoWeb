@extends('base')
@section('content')
<div class="col-sm-8">
	<h2>
		Lista de Estudiantes
		<a href="{{ route('students.create')}}" class="btn btn-primary pull-right">
			<span class=" glyphicon glyphicon-plus"></span> Nuevo
		</a>
	</h2>
	@include('partials.info')
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th width="20px">ID</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Nombre Completo</th>
				<th>Nota1</th>
				<th>Nota2</th>
				<th>Promedio</th>
				<th colspan="2">&nbsp;</th
			</tr>
		</thead>
		<tbody>
			@foreach($students as $student)
			<tr>
				<td>{{ $student->id }}</td>
				<td>{{ $student ->nombre }}</td>
				<td>{{ $student ->apellido }}</td>
				<td>{{ $student ->apellido }} {{ $student ->nombre }}</td>
				<td>{{ $student ->nota1 }}</td>
				<td>{{ $student ->nota2 }}</td>
				
				<td>{{ ($student ->nota1 + $student ->nota2 )/2}}</td>

				<td>
					<a href="{{ route('students.show',$student->id)}}" title="Ver" class="btn btn-link">
						<span class="glyphicon glyphicon-eye-open"></span>
					</a>
				</td>
				<td>
					<a href="{{ route('students.edit',$student->id) }}" title="Editar" class="btn btn-link">
						<span class="glyphicon glyphicon-edit"></span>
					</a>
				</td>
				<td>
					<form action="{{route('students.destroy',$student->id)}}" method="POST">
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
	{!! $students->render() !!}
	
</div>
<div class="col-sm-4">
	@include('partials.aside')
	
</div>
@endsection

