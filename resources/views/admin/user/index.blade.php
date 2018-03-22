@extends('layouts.principal');
@section('title')
	<h1>Datos personales</h1>
@endsection
@section('content')
<div class="box">
	<div class="section" id="about">
		<div class="container">
			<div class="card" data-aos="fade-up" data-aos-offset="10">
				<div class="row">
					<div class="col-lg-6 col-md-12">
					<div class="card-body">
							<div class="h4 mt-0 title"><strong>Nombre</strong></div>
							<p>{{$user->name}}</p>
						<div class="h4 mt-0 title"><strong>Objetivo professional</strong></div>
						<p>{{$user->objetive}}</p>
					</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="card-body">
							<div class="h4 mt-0 title"></div>
							<div class="row">
							<div class="col-sm-4"><strong class="text-uppercase">Fecha de nacimiento:</strong></div>
							<div class="col-sm-8">{{$user->birthdate->toDateString()}}</div>
							</div>
							<p></p>
							<div class="row mt-3">
							<div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
							<div class="col-sm-8">{{$user->email}}</div>
							</div>
							<p></p>
							<div class="row mt-3">
							<div class="col-sm-4"><strong class="text-uppercase">Teléfono:</strong></div>
							<div class="col-sm-8">{{$user->phone}}</div>
							</div>
							<p></p>
							<div class="row mt-3">
							<div class="col-sm-4"><strong class="text-uppercase">Ciudad:</strong></div>
							<div class="col-sm-8">{{$user->address}}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<button type="button" class="btn btn-info" onclick="mostrar()">Editar</button>
			<p></p>
		</div>
	</div>
</div>


<div id='editar' class="box" style='display:none;'>
	<div class="section" id="about">
		<form role="form" method="post" action="{{action('UserController@update',['id' => $user->id])}}">
			{{csrf_field()}}
			<input name="_method" type="hidden" value="PUT">
			<div class="container">
					<div class="card" data-aos="fade-up" data-aos-offset="10">
						<div class="row">
							<div class="col-lg-6 col-md-12">
							<div class="card-body">
									<div><label>Nombre</label></div>
									<input type="text" name="name" value="{{$user->name}}">
								<div><label>Objetivo professional</label></div>
								<textarea id="editor1" name="objetive" rows="5" cols="80">{{$user->objetive}}</textarea>
							</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card-body">
									<div class="h4 mt-0 title"></div>
									<div class="row">
									<div class="row mt-3">
										<div class="col-sm-4"><label>Fecha de nacimiento</label></div>
										<div class="col-sm-8">
											<div class="input-group">
												<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
												</div>
												<div  class="col-lg-9 col-md-12">
													<input type="text" class="form-control" name="birthdate" value="{{$user->birthdate}}" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
												</div>
											</div>
											<!-- /.input group -->
										</div>
									</div>
									<div class="row mt-3">
									<div class="col-sm-4"><label>Email:</label></div>
									<div class="col-sm-8"><input type="email" name="email" value="{{$user->email}}"></div>
									</div>
									<div class="row mt-3">
									<div class="col-sm-4"><label>Teléfono:</label></div>
									<div class="col-sm-8">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-phone"></i>
											</div>
											<div class="col-lg-9 col-md-12">
												<input type="text" class="form-control" name="phone" data-inputmask='"mask": "(999) 999-9999"' data-mask value="{{$user->phone}}">
											</div>
										</div>	
									</div>
									</div>
									<div class="row mt-3">
									<div class="col-sm-4"><label>Ciudad:</label></div>
									<div class="col-sm-8"><input name="address" type="text" value="{{$user->address}}"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</div>
		</form>
	</div>
</div>

@endsection

@section('modal')

@endsection

<script>
function mostrar(){
	document.getElementById('editar').style.display = 'block';
}
</script>
