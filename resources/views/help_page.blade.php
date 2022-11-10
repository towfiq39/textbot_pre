<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Help</title>
		<link rel="stylesheet" href="assets/css/login.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/all.min.css">
	</head>
	<body>
		<section class="section">
			@include('include/navbar')
			<section class="section_body container-fluid">
				
				
				<div class="row py-5">
					<div class="col-lg-2"></div>
					<div class="col-lg-7 body_text">
						<h3>KUET  <span class="px-2 tex"> TEX</span><span class='bot'>BOT</span></h3>
						<h1>WE HELP YOU EXPLORE</h1>
						<h1>THE <span class="academic_resource">ACADEMIC RESOURCES</span></h1>
						<button class="mt-5"><span>MORE ABOUT US</span></button>
						
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-2 col-md-2 col-sm-1 custom_image pl-3">
						<img src="assets/image/Picture1.png" class="img-fluid" alt="">
					</div>
				</div>
				
			</section>
		</section>
		<section class="slide bg-dark">
			<div class="p-5">
				<div class="container slide_section my-5">
					<h3 class="text-center pt-5">1ST YEAR</h3>
					<div class="container p-5">
						<div class="row justify-content-around">
							
							<div class="col-lg-5 col-md-6 col-sm-10 my-1">
								<div class="card text-center py-5">
									
									<span class="card_image">
										<img class="img-fluid" src="assets/image/Group 1905.png" >
									</span>
									
									<div class="card-body">
										<div class="first_row">
											<a href=""><button class="button px-3 p-2 m-2">TEXBOT 2.0</button></a>
											<a href=""><button class="button px-3 p-2 m-2">???</button></a>
											<a href=""><button class="button px-3 p-2 m-2">CONTACT ADMIN</button></a>
											<p class="card-text mt-5">ASSISTANCE</p>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-lg-5 col-md-6 col-sm-10 my-1">
								<div class="card text-center py-5">
									
									<span class="card_image">
										<img class="img-fluid" src="assets/image/Group 1906.png" >
									</span>
									
									<div class="card-body">
										<div class="first_row">
											<a href="https://www.kuet.ac.bd/index.php/welcome/automation"><button class="button p-2 m-2">MEAL ON/OFF</button></a>
											<a href="https://library.kuet.ac.bd/"><button class="button p-2 m-2">RENEW BOOKS</button></a>
											<a href="https://academic.kuet.ac.bd/"><button class="button p-2 m-2">COURSE REG</button></a> <br>
											<p class="card-text mt-5">AUTOMATION</p>
										</div>
										<div class="second_row"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@include('include/contact-form')
				@include('include/share-slide')
			</div>
			
			@include('include/footer')