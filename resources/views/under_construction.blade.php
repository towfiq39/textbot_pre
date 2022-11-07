<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>under-Construction</title>
		<link rel="stylesheet" href="assets/css/login.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/all.min.css">
	</head>
	<body>
		<section class="slide_top_section">
			@include('include/navbar')
			<section class="slide bg-dark">
				<div class="p-5">
					<div class="under_construction mb-5">
						<div class="row justify-content-center">
							<div class="col-lg-5">
								<img src="assets/image/158667 1.png" class="img-fluid" alt="">
							</div>
						</div>
						<div class="row justify-content-center text-white my-5">
							<div class="col-lg-6">
								<p class="text-center construction_p "> Our Website is <span class="text-warning">Under Construction</span> , <br> But We’re Ready to Go!!</p>
								<p class="text-center construction_p my-3"> We’re Preparing Something Amazing and Exciting for You Special Surprise for Our Subscribers Only.</p>
							</div>
						</div>
					</div>
					<div class="custom_form container">
						<div class="row justify-content-center" >
							<div class="col-lg-8 outer_form_div p-5">
								<div class="form p-5">
									<form class="container">
										<h3 class="mb-5 fs-1">Feel free to reach out if you have any questions</h3>
						
									<div class="form-group py-2">
										<label for="your_name" class="py-1">Your Name</label>
										<input type="text" class="text-center form-control form-control-lg form-control-sm" id="your_name" aria-describedby="emailHelp" placeholder="Type your name">
										
									</div>
									<div class="form-group py-2">
										<label for="exampleInputEmail1" class="py-1">Your Email</label>
										<input type="email" class="text-center form-control form-control-lg form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type your email">
										
									</div>
									<div class="form-group py-2">
									    <label for="exampleFormControlTextarea1" class="py-1">Message</label>
									    <textarea class="text-center form-control form-control-lg form-control-sm" id="exampleFormControlTextarea1" rows="3" placeholder="Type your message"></textarea>
									  </div>

									<button type="submit" class="form_submit_button px-3 py-1 mt-4">Submit</button>
								</form>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
				
				@include('include/footer')