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
					<a class="navbar-brand" href="{{ route('index') }}"><img src="assets/image/Picture2 1.png" class="img-fluid" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li class="nav-item px-4">
								<a class="nav-link" href="{{ route('home') }}">Home </a>
							</li>
							
							
							<li class="nav-item px-4">
								<a class="nav-link" href="{{ route('help') }}">Help</a>
							</li>
							<li class="nav-item px-4">
								<a class="nav-link" href="{{ route('submit') }}">Submit</a>
							</li>
							<li class="nav-item px-4">
								<a class="nav-link" href="{{ route('jobs') }}">Jobs</a>
							</li>
							<li class="nav-item px-4">
								<span class="nav-link green">|</span>
							</li>
							<li class="nav-item px-4 ">
								<a class="nav-link " href="{{ route('home') }}"><img src="assets/image/Group 190.png" alt=""></a>
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
				
				
				<div class="row justify-content-center py-5">
					<div class="col-lg-3 col-sm-3 col-3">
						<h1 class="student_name">@ {{ $user->user_name }}</h1>
					</div>
				</div>
				<div class="row justify-content-center py-5">
					
					<div class="col-lg-3 col-sm-3 col-10">
						<img class="img-fluid pro-pic" src="{{ asset('profile/'.$user->profile_picture) }} " width="350" height="350" class="p-3 bg-dark profile_pic" alt="">
					</div>
					
				</div>
				
			</section>
		</section>
		<section class="academic_section bg-dark">
			<div class="pb-2">
				<div class="profile_inner_section slide_section my-5 container-fluid">
					<div class="container my-2">
						<h3 class="text-center pt-5">UPDATE PROFILE</h3>
						<div class="row justify-content-center p-3">
							<div class="col-lg-8 col-sm-8 col-12">
								<div class="card p-5">
									<p class="text-left mb-3 fs-6">PERSONAL INFORMATION</p>
									
									<div class="user_details p-1" >
										<table class="table">
											<form method="POST" action="{{ route('update_profile')}}" enctype="multipart/form-data">
												@csrf
												<div class="form-group my-1">
													<label for="exampleInputEmail1">User Name</label>
													<input type="text" name="User_Name" class="form-control"  placeholder="Enter user name"
													value="<?php if(isset($user->user_name)){echo $user->user_name; } ?>">
													
												</div>
												@error('User_Name')
												
												<div class="alert alert-warning pb-2 col-lg-6 col-sm-6 col-12">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												<div class="form-group my-1">
													<label for="exampleInputEmail1">Date of Birth</label>
													<input type="date" name="Date_of_Birth" class="form-control"  placeholder="Enter date of birth" value="<?php if(isset($user->dob)){echo $user->dob; } ?>">
													
												</div>
												@error('Date_of_Birth')
												
												<div class="alert alert-warning pb-2 col-lg-6 col-sm-6 col-12">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												<div class="form-group my-1">
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
												
												<div class="alert alert-warning pb-2 col-lg-6 col-sm-6 col-12">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												<div class="form-group my-1">
													<label for="exampleInputEmail1">Certificate Name</label>
													<input type="text" name="Certificate_Name" class="form-control"  placeholder="Enter Certificate Name" value="<?php if(isset($user->certificate_name)){echo $user->certificate_name; } ?>">
													
												</div>
												@error('Certificate_Name')
												
												<div class="alert alert-warning pb-2 col-lg-6 col-sm-6 col-12">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												<div class="form-group my-1">
													<label for="exampleInputEmail1">Roll Number</label>
													<input type="number" name="Roll" class="form-control"  placeholder="Enter roll Number" value="<?php if(isset($user->roll_number)){echo $user->roll_number; } ?>">
													
												</div>
												@error('Roll')
												
												<div class="alert alert-warning pb-2 col-lg-6 col-sm-6 col-12">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												<div class="form-group my-1">
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
														<option value="2k22">2k22</option>
														
														<?php } ?>
													</select>
													
												</div>
												@error('Batch')
												
												<div class="alert alert-warning pb-2 col-lg-6 col-sm-6 col-12">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												<div class="form-group my-1">
													<label for="exampleInputEmail1">Department</label>
													
													<select name="Department" class="form-control" >
														<?php if(isset($user->department)){ ?>
														<option value='{{ $user->department }}'>{{ $user->department }}</option>
														<?php } else {?>
														<option>Select Batch</option>
														
														<option value="CE">Civil Engineering</option>
														<option value="URP">Urban & Regional Planning</option>
														<option value="BECM">Building Engineering and Construction Management</option>
														<option value="ARCH">Architecture </option>
														<option value="EEE">Electrical and Electronic Engineering</option>
														<option value="CSE">Computer Science and Engineering</option>
														<option value="ECE"> Electronics and Communication Engineering</option>
														<option value="BME"> Biomedical Engineering</option>
														<option value="MSE">Materials Science and Engineering</option>
														<option value="IEM">Industrial Engineering and Management</option>
														<option value="TE">Textile Engineering</option>
														<option value="LE">Leather Engineering</option>
														<option value="ESE">Energy Science and Engineering</option>
														<option value="ChE">Chemical Engineering</option>
														<option value="MtE">Mechatronics Engineering</option>
														
														
														<?php } ?>
													</select>
													
												</div>
												@error('Department')
												
												<div class="alert alert-warning pb-2 col-lg-6 col-sm-6 col-12">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												<div class="form-group my-1">
													<label for="exampleInputEmail1">Institution</label>
													<input type="text" name="Institute" class="form-control"  placeholder="Enter Institution Name " value="<?php if(isset($user->institution)){echo $user->institution; } ?>">
													
												</div>
												@error('Institute')
												
												<div class="alert alert-warning pb-2 col-lg-6 col-sm-6 col-12">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												<div class="form-group my-1">
													<label for="exampleInputEmail1">Phone</label>
													<input type="text" name="Phone" class="form-control"  placeholder="Enter Phone Number" value="<?php if(isset($user->phone)){echo $user->phone; } ?>">
													
												</div>
												@error('Phone')
												
												<div class="alert alert-warning pb-2 col-lg-6 col-sm-6 col-12">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												<div class="form-group my-1">
													<label for="exampleInputEmail1">Facebook Id</label>
													<input type="text" name="facebook_id" class="form-control"  placeholder="Enter facebook Link " value="<?php if(isset($user->facebook_id)){echo $user->facebook_id; } ?>">
													
												</div>
												<div class="form-group my-1">
													<label for="exampleInputEmail1">LinkedIn ID</label>
													<input type="text" name="linkedin_id" class="form-control"  placeholder="Enter Linked In Link " value="<?php if(isset($user->linkedin_id)){echo $user->linkedin_id; } ?>">
													
												</div>
												<div class="form-group my-1">
													<label for="exampleInputEmail1">Status</label>
													<input type="text" name="Status" class="form-control"  placeholder="Enter Status " value="<?php if(isset($user->status)){echo $user->status; } ?>">
													
												</div>
												@error('Status')
												
												<div class="alert alert-warning pb-2 col-lg-6 col-sm-6 col-12">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
												<div class="form-group my-1">
													<label for="exampleInputEmail1">Profile Picture</label><br>
													<img src="{{ asset('profile/'.$user->profile_picture) }}" class="img-thumbnail" width="200" height="200" alt="">
													<input type="file" name="Profile_Picure" class="form-control"  placeholder="Profile Picture ">
													
												</div>
												
												
												
												
												<button type="submit" class="btn btn-primary my-2">Update</button>
											</form>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
				@include('include/share-slide')
			</div>
			
			@include('include/footer')