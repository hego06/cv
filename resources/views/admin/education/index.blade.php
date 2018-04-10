@extends('layouts.principal')
@section('title')
	<h1>Educación</h1>
@endsection
@section('content')
<div class="box">
	<div class="box-header">
        <a href="{{route('education.create')}}" class="btn btn-info pull-right"> <i class="fa fa-plus"></i> Nuevo</a>
    </div>
	<div class="box-body no-padding">
		<table class="table table-striped">
		<tr>
			<th>Grado</th>
			<th>Título</th>
			<th>Institución</th>
			<th>Inicio</th>
			<th>Final</th>
			<th>Acciones</th>
		</tr>
		@foreach ($educations as $education)
		<tr>
			<td>{{$education->degree}}</td>
			<td><p>{{$education->name}}</p></td>
			<td><p>{{$education->institution}}</p></td>
			<td>{{$education->initialdate->toDateString()}}</td>
			<td>{{$education->finaldate->toDateString()}}</td>
			<td>
				<a href="{{route('education.edit', $education)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
				<form method="POST" action="{{route('education.destroy', $education)}}" style="display:inline">
					{{csrf_field()}} {{method_field('delete')}}
					<button class="btn btn-xs btn-danger" onClick="return confirm('Estas seguro que deseas eliminar este recurso?')"><i class="fa fa-times"></i></button>
				</form>
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
