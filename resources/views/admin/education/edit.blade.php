@extends('layouts.principal');
@section('title')
	<h1>Educacion</h1>
@endsection
@section('content')
<div class="box box-primary">
	<form role="form" method="post" action="{{action('EducationController@update',['id' => $education->id])}}">
		{{csrf_field()}}
		<input name="_method" type="hidden" value="PUT">
		<div class="box-body">
		<div class="form-group">
			<label for="degree">Grado</label>
			<input type="text" class="form-control" id="degree" name="degree" value="{{$education->degree}}">
		</div>
		<div class="form-group">
			<label for="name">Titulo</label>
			<input type="text" class="form-control" id="name" name="name" value="{{$education->name}}">
		</div>
		<div class="form-group">
			<label for="institution">Institución</label>
			<input type="text" class="form-control" id="institution" name="institution" value="{{$education->institution}}">
		</div>
		<div class="form-group">
			<label>Fecha inicial:</label>
			<div class="input-group">
				<div class="input-group-addon">
				<i class="fa fa-calendar"></i>
				</div>
				<input type="text" class="form-control" name="initialdate" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask value="{{$education->initialdate->toDateString()}}">
			</div>
		</div>
		<div class="form-group">
			<label>Fecha final:</label>
			<div class="input-group">
				<div class="input-group-addon">
				<i class="fa fa-calendar"></i>
				</div>
				<input type="text" class="form-control" name="finaldate" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask value="{{$education->finaldate->toDateString()}}">
			</div>
		</div>
		</div>
		<div class="box-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
	</form>
</div>

@endsection
