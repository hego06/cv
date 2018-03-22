<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href='{{asset("bower_components/bootstrap/dist/css/bootstrap.min.css")}}'>

    <!-- Custom styles for this template -->
    <link href='{{asset("css/floating-labels.css")}}' rel="stylesheet">
  </head>

  <body>
    <form class="form-signin" id="login" method="POST" acction="{{route('login')}}">
        {{csrf_field()}}

      <div class="form-label-group">
        <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Correo" required="" autofocus="">
        <label for="inputEmail">Email address</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Contraseña" required="">
        <label for="inputPassword">Password</label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted text-center">© 2017-2018</p>
    </form>
<script src='{{asset("bower_components/bootstrap/dist/js/bootstrap.min.js")}}'></script>

