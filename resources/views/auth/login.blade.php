<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
		<link rel="stylesheet" href="{{asset('css/auth/login.css')}}">
	</head>
	<body>
		<div class="container-fluid login-form-container">
			<div class="row w-100">
				<div class="col-md-4 col-sm-12"></div>
				<div class="col-md-4 col-sm-12">
					<form class="border p-3" style="background: #ffffff;border-radius: 8px;box-shadow: 3px 2px 3px #8a8484;" action="{{ route('login') }}" method="POST">
						<div><h1 class="text-center mb-5">Login Here</h1></div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="input-group mb-3">
							<span class="input-group-text" id="email">@</span>
							<input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="password"><i class="bi bi-briefcase-fill"></i></span>
							<input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password">
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<button type="submit" class="btn btn-primary"><span>Signin</span></button>
							<a href="{{ route('register') }}" style="text-decoration: none;">Create new account</a>
						</div>
					</form>
				</div>
				<div class="col-md-4 col-sm-12"></div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>