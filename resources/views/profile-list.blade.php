<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Profile-List</title>
		<link rel="stylesheet" href="assets/css/login.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/all.min.css">
	</head>
	<body>
		<section class="slide_top_section">
						@include('include/navbar')

			
		</section>
		<section class="slide bg-dark">
			<div class="p-5">
				<div class="container slide_section my-5">
					<h3 class="text-center pt-5">BATCH PROFILE</h3>
					<div class="container p-5">
						<div class="row justify-content-around">
							@foreach($data as $row)
							<div class="col-lg-3 my-3">
								<a href="{{ url('student-list')}}/{{ $row->batch }}">
								<div class="card text-center py-5">
									
									<span class="card_image">
										<img class="img-fluid" src="assets/image/{{ $row->profile_picture }}" >
									</span>
									
									
								</div>
							</a>
							</div>
							@endforeach
							
							
						</div>
					</div>
				</div>
				<div class="custom_form container">
					<div class="row justify-content-center" >
						<div class="col-lg-8 outer_form_div p-5">
							<div class="form p-5">
								<form class="container">
									<h3 class="mb-5">Feel free to reach out if you have any questions</h3>
					
								<div class="form-group py-2">
									<label for="your_name" class="py-1">Your Name</label>
									<input type="text" class="text-center form-control" id="your_name" aria-describedby="emailHelp" placeholder="Type your name">
									
								</div>
								<div class="form-group py-2">
									<label for="exampleInputEmail1" class="py-1">Your Email</label>
									<input type="email" class="text-center form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type your email">
									
								</div>
								<div class="form-group py-2">
								    <label for="exampleFormControlTextarea1" class="py-1">Message</label>
								    <textarea class="text-center form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Type your message"></textarea>
								  </div>

								<button type="submit" class="form_submit_button px-3 py-1 mt-4">Submit</button>
							</form>
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