@extends('layouts.principal')
@section('title')
	<h1>Experiencia</h1>
@endsection
@section('content')
<div class="box">
	<div class="box-header">
		<a href="{{route('experience.create')}}" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Nuevo</a>
	</div>
	<div class="box-body no-padding">
		<table class="table table-striped">
		<tr>
			<th>Puesto</th>
			<th>Lugar</th>
			<th>Descripción</th>
			<th>Fecha inicio</th>
			<th>Fecha final</th>
			<th>Acciones</th>
		</tr>
		@foreach ($experiences as $experience)
		<tr>
			<td>{{$experience->name}}</td>
			<td><p>{{$experience->place}}</p></td>
			<td><p>{{$experience->description}}</p></td>
			<td>{{$experience->initialdate->toDateString()}}</td>
			<td>{{$experience->finaldate->toDateString()}}</td>
			<td>
				<a href="{{route('experience.edit', $experience)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
				<form method="POST" action="{{route('experience.destroy', $experience)}}" style="display:inline">
					{{csrf_field()}} {{method_field('delete')}}
					<button class="btn btn-xs btn-danger" onClick="return confirm('Estas seguro de eliminar este recurso?')"><i class="fa fa-times"></i></button>
				<form>
			</td>

		</tr>
		@endforeach
		</table>
	</div>
	<!-- /.box-body -->
</div>

@endsection

<script>
function mostrar(){
	document.getElementById('editar').style.display = 'block';
}
</script>
