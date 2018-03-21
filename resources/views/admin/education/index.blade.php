@extends('layouts.principal');
@section('title')
	<h1>Educacion</h1>
@endsection
@section('content')
@foreach ($educations as $education)
<div class="box">
	<!-- /.box-header -->
	<div class="box-body no-padding">
		<table class="table table-striped">
		<tr>
			<th>Grado</th>
			<th>Titulo</th>
			<th>Institución</th>
			<th>Inincio</th>
			<th>Final</th>
			<th>Acciones</th>
		</tr>
		<tr>
			<td>{{$education->degree}}</td>
			<td><p>{{$education->name}}</p></td>
			<td><p>{{$education->institution}}</p></td>
			<td>{{$education->initialdate->toDateString()}}</td>
			<td>{{$education->finaldate->toDateString()}}</td>
			<td>
				{!!link_to_route('education.edit', $title ='Editar', $parameters = $education->id, $attributes = ['class' =>'btn btn-primary']);!!}
				<button type="button" class="btn btn-primary"  onclick="mostrar()">Eliminar</button>
			</td>
		</tr>
		</table>
	</div>
	<!-- /.box-body -->
</div>
@endforeach

@endsection

<script>
function mostrar(){
	document.getElementById('editar').style.display = 'block';
}
</script>
