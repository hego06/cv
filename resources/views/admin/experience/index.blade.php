@extends('layouts.principal');
@section('title')
	<h1>Experiencia</h1>
@endsection
@section('content')
<div class="box">
	<!-- /.box-header -->
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
				{!!link_to_route('experience.edit', $title ='Editar', $parameters = $experience->id, $attributes = ['class' =>'btn btn-primary']);!!}
				<button type="button" class="btn btn-primary"  onclick="mostrar()">Eliminar</button>
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
