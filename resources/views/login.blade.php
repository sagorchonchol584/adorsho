<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"> </script>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/main.css')}}">
	<link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/css/sidebar.css') }}" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


	<!--======================================End=========================================================-->
</head>

<body>


	<h1>login </h1>
	@if($errors->any())
		@foreach($errors->all() as $error)
			<div class="alert alert-danger">{{$error}} </div>
		@endforeach
	@endif


	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{route('loginpage')}}" method="post">
					<?php echo csrf_field(); ?>
					<span class="login100-form-title p-b-26">
						Welcome
					</span>

					<span class="login100-form-title p-b-48"> </span>

					<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
						<input class="input100" type="text" name="email" value="ferkey.net@gmail.com">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class='bx bxs-show bx-sm'></i>
						</span>
						<input class="input100" type="password" name="password" value="102030">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>

	<script src="{{ asset('frontend/js/bootstrap.min.js') }}"> </script>
	<script src="{{ asset('frontend/js/sweetalert.min.js') }}"> </script>
	<script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('frontend/js/main.js') }}"> </script>

</body>

</html>