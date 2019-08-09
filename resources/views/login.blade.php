<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('open-iconic/font/css/open-iconic-bootstrap.min.css') }}">

<html>
	<head>
		<title>Login Coffee Tea Party</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
	</head>
	
	<body>

@if(count($errors) > 0)
<div class="alert alert-danger">
	<strong>Perhatian</strong>
	<br />
	<ul>
		@foreach ($errors->all () as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

		<div class="container">
			<section class="login-box">
			
		<h2> <i class="oi oi-account-login"></i>  Login </br>Coffee Tea Party</h2>
			<form  action="{{ url('login') }}" method="POST">
				@csrf
				<input type="text" placeholder="Username" name="username" value="{{ old('username', @$login->username) }}">
				<input type="password" placeholder="Password" name="password">
				<input type="submit" value="LOGIN">
			</form>
		</div>
	</body>
</html>