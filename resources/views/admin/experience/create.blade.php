@extends('layouts.principal')
@section('title')
	<h1>Nueva experiencia</h1>
@endsection
@section('content')
<div class="col-md-8">
	<div class="box box-primary">
	    <form role="form" method="post" action="{{route('experience.store')}}">
		    {{csrf_field()}}
		    @include('admin.experience.partials.fields')
	    </form>
    </div>
</div>
@endsection