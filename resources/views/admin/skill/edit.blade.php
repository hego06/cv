@extends('layouts.principal');
@section('title')
	<h1>Educacion</h1>
@endsection
@section('content')
<div class="box box-primary">
	<form role="form" method="post" action="{{action('ExperienceController@update',['id' => $experience->id])}}">
		{{csrf_field()}}
		<input name="_method" type="hidden" value="PUT">
		<div class="box-body">
		<div class="form-group">
			<label for="degree">Puesto</label>
			<input type="text" class="form-control" id="degree" name="degree" value="{{$experience->name}}">
		</div>
		<div class="form-group">
			<label for="name">Lugar</label>
			<input type="text" class="form-control" id="place" name="place" value="{{$experience->place}}">
		</div>
		<div class="form-group">
			<label for="institution">Descripción</label>
			<input type="text" class="form-control" id="description" name="description" value="{{$experience->description}}">
		</div>
		<div class="form-group">
			<label>Fecha inicial:</label>
			<div class="input-group">
				<div class="input-group-addon">
				<i class="fa fa-calendar"></i>
				</div>
				<input type="text" class="form-control" name="initialdate" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask value="{{$experience->initialdate->toDateString()}}">
			</div>
		</div>
		<div class="form-group">
			<label>Fecha final:</label>
			<div class="input-group">
				<div class="input-group-addon">
				<i class="fa fa-calendar"></i>
				</div>
				<input type="text" class="form-control" name="finaldate" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask value="{{$experience->finaldate->toDateString()}}">
			</div>
		</div>
		</div>
		<div class="box-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
	</form>
</div>

@endsection
