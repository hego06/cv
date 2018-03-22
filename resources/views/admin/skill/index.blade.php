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
			<th>Nombre</th>
			<th>Nivel</th>
			<th>Acciones</th>
		</tr>
		@foreach ($userSkills as $userSkill)
		<tr>
			<td>{{$userSkill->name}}</td>
			<td><span class="badge bg-blue">{{$userSkill->pivot->level}}%</span></>
			<td>
				{{--  {!!link_to_route('experience.edit', $title ='Editar', $parameters = $userSkill->id, $attributes = ['class' =>'btn btn-primary']);!!}  --}}
				<button type="button" class="btn btn-primary" name="{{$userSkill->id}}" OnClick="mostrar(this)" data-toggle="modal" data-target="#modal-default">Editar</button>
			</td>
		</tr>
		@endforeach
		</table>
	</div>
	<!-- /.box-body -->
</div>

@endsection

@section('modal')
<form role="form" method="post" action="{{action('UserSkillController@update',['id' => '1'])}}">
	{{csrf_field()}}
	<input name="_method" type="hidden" value="PUT">
	<div class="box-body">
		<div class="form-group">
			<label for="level">Nivel</label>
			<input type="numeric" class="form-control" id="level" name="level" placeholder="Escribe el nivel de dominio de esta tecnologia">
			<input type="hidden" id="id" name="id" value="">
		</div>

	</div>
	<div class="box-footer">
		<button type="submit" class="btn btn-primary">Guardar cambios</button>
	</div>
</form>

@endsection

<script>
	function mostrar(btn)
	{
		console.log(btn.name);
		$("#id").val(btn.name);
	}
</script>
