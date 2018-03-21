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

@section('modal')
<div id="editar" class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Quick Example</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		
		<form role="form">
			<div class="box-body">
			<div class="form-group">
				<div class="col-lg-2">
					<label for="exampleInputEmail1">Grado</label>
				</div>
				<div class="col-lg-10">
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-2">
					<label for="exampleInputEmail1">Titulo</label>
				</div>
				<div class="col-lg-10">
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-2">
					<label for="exampleInputEmail1">Institucion</label>
				</div>
				<div class="col-lg-10">
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-2">
					<label for="exampleInputEmail1">Inicio</label>
				</div>
				<div class="col-lg-10">
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-2">
					<label for="exampleInputEmail1">Final</label>
				</div>
				<div class="col-lg-10">
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
			</div>
			</div>
			<div class="box-footer">
			<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
@endsection

<script>
function mostrar(){
	document.getElementById('editar').style.display = 'block';
}
</script>
