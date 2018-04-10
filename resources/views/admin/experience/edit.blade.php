@extends('layouts.principal')
@section('title')
	<h1>Editar</h1>
@endsection
@section('content')
<div class="col-md-8">
	<div class="box box-primary">
	<form role="form" method="post" action="{{action('ExperienceController@update',['id' => $experience->id])}}">
		{{csrf_field()}}
		{{ method_field('PUT')}}
		@include('admin.experience.partials.fields')
	</form>
</div>
</div>
@endsection
