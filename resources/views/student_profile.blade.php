<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Student-Profile</title>
		<link rel="stylesheet" href="assets/css/login.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/all.min.css">
	</head>
	<body>
		<section class="profile_section">
			<div class=" custom_navbar">
				<nav class="container navbar navbar-expand-lg navbar-light">
					<a class="navbar-brand" href="{{ route('index') }}"><img src="assets/image/Picture2 1.png" class="img-fluid" alt=""></a>
					<button  class="navbar-toggler p-1"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa-solid fa-bars toggler_button"></i>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item px-4">
								<a class="nav-link" href="{{ route('index') }}">Home </a>
							</li>
							<li class="nav-item px-4">
								<a class="nav-link" href="#academic">File</a>
							</li>
							<li class="nav-item px-4">
								<a class="nav-link" href="#explore">Explore</a>
							</li>
							<li class="nav-item px-4">
								<a class="nav-link" href="{{ route('help') }}">Help</a>
							</li>
							<li class="nav-item px-4">
								<a class="nav-link" href="{{ route('submit') }}">Submit</a>
							</li>
							<li class="nav-item px-4">
								<a class="nav-link" href="{{ route('view_update_profile') }}">Update Profile</a>
							</li>
							<li class="nav-item px-4">
								<span class="nav-link green">|</span>
							</li>
							@guest
							@if (Route::has('login'))
							<li class="nav-item px-4 ">
								<a class="nav-link login " href="{{ route('login') }}">LOGIN</a>
							</li>
							@endif
							@if (Route::has('register'))
							<li class="nav-item px-4">
								<a class="nav-link signup" href="{{ route('register') }}">SIGN UP</a>
							</li>
							@endif
							@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->user_name }}
								</a>
								<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
									
									<a class="dropdown-item" href="{{ route('home') }}"
										>
										{{ __('Profile') }}
									</a>
									<a class="dropdown-item" href="{{ route('logout') }}"
										onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</div>
							</li>
							@endguest
							
							
							
						</ul>
					</div>
				</nav>
			</div>
			<section class="section_body container-fluid">
				
				
				<div class="row justify-content-around py-5">
					<div class="col-lg-3">
						<h1 class="student_name">@ {{ $user->user_name }}</h1>
					</div>
				</div>
				<div class="row justify-content-center py-5">
					
					<div class="col-lg-3">
						<img src="{{ asset('profile/'.$user->profile_picture) }} " width="350" height="350" class="p-3 bg-dark profile_pic" alt="">
					</div>
					
				</div>
				
			</section>
		</section>
		<section class="academic_section bg-dark">
			<div class="p-5">
				<div class="profile_inner_section slide_section my-5 container-fluid">
					<div class="container my-2">
						<h3 class="text-center pt-5">DASHBOARD</h3>
						<div class="row justify-content-center p-3">
							<div class="col-lg-8">
								<div class="card p-5">
									<p class="text-left mb-5">PERSONAL INFORMATION</p>
									<div class="user_details p-3">
										<table class="table">
											<tr>
												<th scope="col">User Name :</th>
												<td class="ml-5">{{ $user->user_name }}</td>
											</tr>
											<tr>
												<th scope="col">Email :</th>
												<td class="ml-5">{{ $user->email }}</td>
											</tr>
											<tr>
												<th scope="col">Date Of Birth :</th>
												<td class="ml-5">{{ $user->dob }}</td>
											</tr>
											<tr>
												<th scope="col">Blood Group :</th>
												<td class="ml-5">{{ $user->blood_group }}</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container my-2">
						<div class="row justify-content-center p-3">
							<div class="col-lg-8">
								<div class="card p-5">
									<p class="text-left mb-5">ACADEMIC INFORMATION</p>
									<div class="user_details p-3">
										<table class="table">
											<tr>
												
												<th scope="col">Certificate Name :</th>
												<td class="ml-5">{{ $user->certificate_name }}</td>
											</tr>
											<tr>
												<th scope="col">Roll Number :</th>
												<td class="ml-5">{{ $user->roll_number }}</td>
											</tr>
											<tr>
												<th scope="col">Batch :</th>
												<td class="ml-5">{{ $user->batch }}</td>
											</tr>
											<tr>
												<th scope="col">Department :</th>
												<td class="ml-5">{{ $user->department }}</td>
											</tr>
											<tr>
												<th scope="col">Institution :</th>
												<td class="ml-5">{{ $user->institution }}</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container my-2">
						<div class="row justify-content-center p-3">
							<div class="col-lg-8">
								<div class="card p-5">
									<p class="text-left mb-5">CONTACT INFORMATION</p>
									<div class="user_details p-3">
										<table class="table">
											<tr>
												<th scope="col">Phone Number :</th>
												<td class="ml-5">{{ $user->phone }}</td>
											</tr>
											<tr>
												<th scope="col">Facebook ID :</th>
												<td class="ml-5">{{ $user->facebook_id }}</td>
											</tr>
											<tr>
												<th scope="col">LinkedIn ID :</th>
												<td class="ml-5">{{ $user->linkedin_id }}</td>
											</tr>
											<tr>
												<th scope="col">Status :</th>
												<td class="ml-5">{{ $user->status }}</td>
											</tr>
											
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="container share_link_home">
					<div class="row mt-3 justify-content-around">
						<div class="col-lg-2 ">
							<img src="assets/image/person.png"  alt="">
						</div>
						<div class="col-lg-4 ">
							<div class="share_link_section">
								<h2 class="text-right">SHARE YOUR DRIVE LINK HERE</h2>
								<p class="text-right">YOUR CONTRIBUTION IS MUCH APPRICIATED</p>
								<button><span>SUBMIT</span></button>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
			@include('include/footer')