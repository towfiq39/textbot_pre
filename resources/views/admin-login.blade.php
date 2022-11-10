<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin-Login</title>
		<link rel="stylesheet" href="assets/css/login.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/all.min.css">
	</head>
	<body style="background-color: lightgrey;">
		<section class="container-fluid mt-5">
			<div class=" row justify-content-center">
				<div class="col-lg-4 col-md-10 col-sm-11 col-11 ">
					<form class=" p-5 bg-light my-5" action="{{ route('admin_login_check')}}" style="box-shadow: 0px 7px 5px #888888; border-radius: 10px;" method="POST">
						@csrf
						<h2 class="text-center mb-3">
						<i class="fas fa-stethoscope text-primary"></i>
						Admin Login
						</h2>
						<div class="form-group my-2">
							<i class="fas fa-envelope mr-2 text-primary"></i><label for="email">Email address:</label>
							<input type="email" class="form-control" placeholder="Enter email" id="email" name="email" required >
							
						</div>
						<div class="form-group my-2">
							<i class="fas fa-key mr-2 text-primary"></i><label for="pwd">Password:</label>
							<input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password" required>
						</div>
						
						<div class=" my-3 ">
							<input type="submit" class="btn btn-primary mr-3" value="Login">
							
							<a href="{{ route('index') }}" class="btn btn-outline-secondary">Back to Home</a>
						</div>
						@if (session()->has('msg'))
						<div class="alert alert-warning">
							{!! session()->get('msg')!!}
						</div>
						@endif
					</form>
				</div>
			</div>
		</section>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
		<script src="assets/js/all.min.js"></script>
	</body>
</html>