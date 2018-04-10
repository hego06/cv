@extends('layouts.principal')
@section('title')
<h1>Agregar nuevo</h1>
@endsection 
@section('content')
<div class="col-md-8">
	<div class="box box-primary">
		<form role="form" method="post" action="{{route('education.store')}}">
			{{csrf_field()}}
			@include('admin.education.partials.fields')
		</form>
	</div>
</div>
@endsection