<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>UpDate Profile</title>
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
			{{-- <section class="section_body container-fluid">
				
				
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
				
			</section> --}}
		</section>
		<section class="academic_section bg-dark">
			<div class="p-5">
				<div class="profile_inner_section slide_section my-5 container-fluid">
					<div class="container my-2">
						<h3 class="text-center pt-5">UPDATE PROFILE</h3>
						<div class="row justify-content-center p-3">
							<div class="col-lg-8">
								<div class="card p-5">
									<p class="text-left mb-5">PERSONAL INFORMATION</p>
									
									<div class="user_details p-5">
										<table class="table">
											<form method="POST" action="{{ route('update_profile')}}" enctype="multipart/form-data">
												@csrf
												<div class="form-group my-3">
													<label for="exampleInputEmail1">User Name</label>
													<input type="text" name="User_Name" class="form-control"  placeholder="Enter user name"
													value="<?php if(isset($user->user_name)){echo $user->user_name; } ?>">
													
												</div>
												@error('User_Name')
												
												<div class="alert alert-warning p-2 col-lg-6">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												<div class="form-group my-3">
													<label for="exampleInputEmail1">Date of Birth</label>
													<input type="date" name="Date_of_Birth" class="form-control"  placeholder="Enter date of birth" value="<?php if(isset($user->dob)){echo $user->dob; } ?>">
													
												</div>
												@error('Date_of_Birth')
												
												<div class="alert alert-warning p-2 col-lg-6">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												<div class="form-group my-3">
													<label for="exampleInputEmail1">Blood Group</label>
													<select name="Blood_Group" class="form-control" >
														<?php if(isset($user->blood_group)){ ?>
														<option value='{{ $user->blood_group }}'>{{ $user->blood_group }}</option>
														<?php } else {?>
														<option>Select Blood Group</option>
														
														<option value="A+">A+</option>
														<option value="B+">B+</option>
														<option value="AB+">AB+</option>
														<option value="O+">O+</option>
														<option value="A-">A-</option>
														<option value="B-">B-</option>
														<option value="AB-">AB-</option>
														<option value="O-">O-</option>
														<?php } ?>
													</select>
													
												</div>
												@error('Blood_Group')
												
												<div class="alert alert-warning p-2 col-lg-6">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												<div class="form-group my-3">
													<label for="exampleInputEmail1">Certificate Name</label>
													<input type="text" name="Certificate_Name" class="form-control"  placeholder="Enter Certificate Name" value="<?php if(isset($user->certificate_name)){echo $user->certificate_name; } ?>">
													
												</div>
												@error('Certificate_Name')
												
												<div class="alert alert-warning p-2 col-lg-6">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												<div class="form-group my-3">
													<label for="exampleInputEmail1">Roll Number</label>
													<input type="number" name="Roll" class="form-control"  placeholder="Enter roll Number" value="<?php if(isset($user->roll_number)){echo $user->roll_number; } ?>">
													
												</div>
												@error('Roll')
												
												<div class="alert alert-warning p-2 col-lg-6">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												<div class="form-group my-3">
													<label for="exampleInputEmail1">Batch</label>
													<select name="Batch" class="form-control" >
														<?php if(isset($user->batch)){ ?>
														<option value='{{ $user->batch }}'>{{ $user->batch }}</option>
														<?php } else {?>
														<option>Select Batch</option>
														
														<option value="2k12">2k12</option>
														<option value="2k13">2k13</option>
														<option value="2k14">2k14</option>
														<option value="2k15">2k15</option>
														<option value="2k16">2k16</option>
														<option value="2k17">2k17</option>
														<option value="2k18">2k18</option>
														<option value="2k19">2k19</option>
														<option value="2k20">2k20</option>
														<option value="2k21">2k21</option>
														
														<?php } ?>
													</select>
													
												</div>
												@error('Batch')
												
												<div class="alert alert-warning p-2 col-lg-6">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												<div class="form-group my-3">
													<label for="exampleInputEmail1">Department</label>
													
													<select name="Department" class="form-control" >
														<?php if(isset($user->department)){ ?>
														<option value='{{ $user->department }}'>{{ $user->department }}</option>
														<?php } else {?>
														<option>Select Batch</option>
														
														<option value="Textile">Textile Engineering</option>
														<option value="Textile">Textile Engineering</option>
														<option value="Textile">Textile Engineering</option>
														<option value="Textile">Textile Engineering</option>
														
														
														<?php } ?>
													</select>
													
												</div>
												@error('Department')
												
												<div class="alert alert-warning p-2 col-lg-6">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												<div class="form-group my-3">
													<label for="exampleInputEmail1">Institution</label>
													<input type="text" name="Institute" class="form-control"  placeholder="Enter Institution Name " value="<?php if(isset($user->institution)){echo $user->institution; } ?>">
													
												</div>
												@error('Institute')
												
												<div class="alert alert-warning p-2 col-lg-6">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												<div class="form-group my-3">
													<label for="exampleInputEmail1">Phone</label>
													<input type="text" name="Phone" class="form-control"  placeholder="Enter Phone Number" value="<?php if(isset($user->phone)){echo $user->phone; } ?>">
													
												</div>
												@error('Phone')
												
												<div class="alert alert-warning p-2 col-lg-6">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												<div class="form-group my-3">
													<label for="exampleInputEmail1">Facebook Id</label>
													<input type="text" name="facebook_id" class="form-control"  placeholder="Enter facebook Link " value="<?php if(isset($user->facebook_id)){echo $user->facebook_id; } ?>">
													
												</div>
												<div class="form-group my-3">
													<label for="exampleInputEmail1">LinkedIn ID</label>
													<input type="text" name="linkedin_id" class="form-control"  placeholder="Enter Linked In Link " value="<?php if(isset($user->linkedin_id)){echo $user->linkedin_id; } ?>">
													
												</div>
												<div class="form-group my-3">
													<label for="exampleInputEmail1">Status</label>
													<input type="text" name="Status" class="form-control"  placeholder="Enter Status " value="<?php if(isset($user->status)){echo $user->status; } ?>">
													
												</div>
												@error('Status')
												
												<div class="alert alert-warning p-2 col-lg-6">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												<div class="form-group my-3">
													<label for="exampleInputEmail1">Profile Picture</label><br>
													<img src="{{ asset('profile/'.$user->profile_picture) }}" class="img-thumbnail" width="200" height="200" alt="">
													<input type="file" name="Profile_Picure" class="form-control"  placeholder="Profile Picture ">
													
												</div>
												@error('Profile_Picure')
												
												<div class="alert alert-warning p-2 col-lg-6">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												
												
												
												<button type="submit" class="btn btn-primary my-2">Update</button>
											</form>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{-- <div class="container my-2">
						<div class="row justify-content-center p-3">
							<div class="col-lg-8">
								<div class="card p-5">
									<p class="text-left mb-5">ACADEMIC INFORMATION</p>
									<div class="user_details p-3">
										<table class="table">
											<tr>
												
												<th scope="col">Certificate Name :</th>
												<td class="ml-5">@ThisIsMob</td>
											</tr>
											<tr>
												<th scope="col">Roll Number :</th>
												<td class="ml-5">mobinmithun@gmail.com</td>
											</tr>
											<tr>
												<th scope="col">Batch :</th>
												<td class="ml-5">mobinmithun@gmail.com</td>
											</tr>
											<tr>
												<th scope="col">Department :</th>
												<td class="ml-5">11 September, 1997</td>
											</tr>
											<tr>
												<th scope="col">Institution :</th>
												<td class="ml-5">B+</td>
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
												<td class="ml-5">@ThisIsMob</td>
											</tr>
											<tr>
												<th scope="col">Facebook ID :</th>
												<td class="ml-5">@ThisIsMob</td>
											</tr>
											<tr>
												<th scope="col">LinkedIn ID :</th>
												<td class="ml-5">mobinmithun@gmail.com</td>
											</tr>
											<tr>
												<th scope="col">Status :</th>
												<td class="ml-5">11 September, 1997</td>
											</tr>
											<div>
												
											</div>
											
										</table>
									</div>
								</div>
							</div>
						</div>
					</div> --}}
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