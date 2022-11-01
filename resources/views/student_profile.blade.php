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
					<a class="navbar-brand" href="#"><img src="assets/image/Picture2 1.png" class="img-fluid" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li class="nav-item px-4">
								<a class="nav-link" href="#">Home </a>
							</li>
							<li class="nav-item px-4">
								<a class="nav-link" href="#">File</a>
							</li>
							<li class="nav-item px-4">
								<a class="nav-link" href="#">Explore</a>
							</li>
							<li class="nav-item px-4">
								<a class="nav-link" href="#">Help</a>
							</li>
							<li class="nav-item px-4">
								<a class="nav-link" href="#">Submit</a>
							</li>
							<li class="nav-item px-4">
								<span class="nav-link green">|</span>
							</li>
							<li class="nav-item px-4 ">
								<a class="nav-link " href="{{ route('view_update_profile') }}"><img src="assets/image/Group 190.png" alt=""></a>
							</li>
							<li class="nav-item px-4">
								<a class="nav-link signup" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOG OUT</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
									<input type="submit" value="logout">
								</form>
							</li>
							
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
			
			<div class="mt-5">
				<img src="assets/image/Group 1891.png" class="img-fluid">
			</div>
			<div class="p-5">
				<section class="footer_section">
					<div class="mt-5 container">
						<div class="row">
							<div class="col-lg-9">
								<div class="row justify-content-around">
									<div class="col-lg-2">
										<h4 class="footer_h4">ABOUT</h4>
										<a href="">About Us</a>
										<a href="">Career</a>
										<a href="">Help</a>
									</div>
									<div class="col-lg-3 footer_kuet_center">
										<h4 class="footer_h4">Contact</h4>
										<a href="">Khulna University of Engineering and Technology (KUET)</a>
										<p class="footer_mail_p">kuet.texbot@gmail.com</p>
									</div>
									<div class="col-lg-3">
										<h4 class="footer_h4">Socials</h4>
										<div class="row">
											<div class="col-lg-2">
												<i class="footer_icon fa-brands fa-facebook"></i> <br>
												<i class="footer_icon fa-brands fa-telegram"></i>
											</div>
											<div class="col-lg-10">
												<a href="">Facebook</a>
												<a href="">Telegram</a>
											</div>
										</div>
										
									</div>
									<div class="col-lg-3">
										<h4 class="footer_h4">Our App <small>(Coming Soon)</small></h4>
										<img src="assets/image/pngegg 2.png" class="img-fluid" alt="">
									</div>
								</div>
							</div>
							<div class="col-lg-3 align_right">
								<h4 class="">Join Us</h4>
								<input type="text" class="text_box form-control my-2" placeholder="Upload Your Resume Here">
								
								<input type="submit" value="Upload" class="footer_submit_button px-4 my-2">
								<div class="footer_text mt-5">
									<p>Join us and contribute your works to stay</p>
									<p>up to date our academic files, events and all the things!!</p>
								</div>
								
							</div>
						</div>
						<div class="footer_last_section ">
							<hr>
							<div class="row ">
								<div class="col-lg-3">
									<p>Copyright@ 2022 KUET TEXBOT | All Rights Reserved</p>
								</div>
								<div class="col-lg-7"></div>
								<div class="col-lg-1">
									<p>Privacy Policy</p>
								</div>
								<div class="col-lg-1">
									<p>Terms of Use</p>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			
		</section>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
		<script src="assets/js/all.min.js"></script>
	</body>
</html>