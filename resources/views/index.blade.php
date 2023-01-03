<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Index</title>
		<link rel="stylesheet" href="assets/css/login.css">
		<link rel="stylesheet" href="assets/css/home-cards.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/all.min.css">
	</head>
	<body>
		<section class="section">
			
			@include('include/navbar')
			<section class="section_body container-fluid">

			<!-- Stars -->
			<section>
				<span class='star'></span>
				<span class='star'></span>
				<span class='star'></span>
				<span class='star'></span>
				<span class='star'></span>
				<span class='star'></span>
				<span class='star'></span>
				<span class='star'></span>
				<span class='star'></span>
				<span class='star'></span>
				<span class='star'></span>
			</section>
			<!-- Star end -->
						
				
				<div class="row py-5">
					<div class="col-lg-2"></div>
					<div class="col-lg-7 body_text">
						<h3>KUET  <span class="px-2 tex"> TEX</span><span class='bot'>BOT</span></h3>
						<h1>WE HELP YOU EXPLORE</h1>
						<h1>THE <span class="academic_resource mx-2"> ACADEMIC RESOURCES</span></h1>
						<button class="mt-5" href="{{ route('about_us') }}"><span>MORE ABOUT US</span></button>
						
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-2 custom_image pl-3">
						<img src="assets/image/Picture1.png" class="img-fluid" alt="">
					</div>
				</div>
				
			</section>
		</section>
		<section class="academic_section bg-dark">
			<div class="p-5">
				<div class="new_section academic my-5 container-fluid">
					<div class="container">
						<h3 class="text-center pt-5">ACADEMIC FILE</h3>
						<div class="row justify-content-center p-5" id="academic">

							<div class="col-lg-3 col-md-6 col-sm-6 my-1">
								<a href="{{ route('slide_page') }}">
									<div class="card card-animated text-center py-5">
										
										<span class="">
											<img class="img-fluid" src="assets/image/Group 1887.png" >
										</span>
										
										<div class="card-body ">
											<p class="card-text">SLIDES & BOOKS</p>
										</div>
									</div>
								</a>
							</div>

							<div class="col-lg-3 col-md-6 col-sm-6 my-1">
								<a href="{{ route('notes_page') }}">
									<div class="card card-animated text-center py-5">
										
										<span class="">
											<img class="img-fluid" src="assets/image/Group 1888.png" >
										</span>
										
										<div class="card-body">
											<p class="card-text">NOTES</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 my-1">
								<a href="{{ route('recent_drives_page') }}">
									<div class="card card-animated text-center py-5">
										
										<span class="">
											<img class="img-fluid" src="assets/image/Group 1889.png" >
										</span>
										
										<div class="card-body">
											<p class="card-text">RECENT DRIVES</p>
										</div>
									</div>
								</a>
							</div>
							
							<div class="col-lg-3 col-md-6 col-sm-6 my-1">
								<a href="https://drive.google.com/drive/folders/12FRufgZVmPH3yYDfuXPdKyARp1WuEs95?fbclid=IwAR2A49Au4BZIiEyqdMKZXzHKCRZQJSnBod_Htab3XBcpSxgzBQTGlLsZdss">
									<div class="card card-animated text-center py-5">
										
										<span class="">
											<img class="img-fluid" src="assets/image/Group 1890.png" >
										</span>
										
										<div class="card-body">
											<p class="card-text">OTHER DOCS</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="new_section other my-5 container-fluid">
					<div class="container">
						<h3 class="text-center pt-5">EXPLORE</h3>
						<div class="row justify-content-center p-5" id="explore">
							
							<div class="col-lg-3 col-md-6 col-sm-6 my-1">
								<a href="{{ route('batch_profile') }}">
									<div class="card card-animated text-center py-5">
										
										<span class="">
											<img class="img-fluid" src="assets/image/Group 1892.png" >
										</span>
										
										<div class="card-body">
											<p class="card-text">PROFILE</p>
										</div>
									</div>
								</a>
							</div>
							
							
							<div class="col-lg-3 col-md-6 col-sm-6 my-1">
								<a href="https://drive.google.com/drive/folders/1k1jpAczwmcqy65UtTGTXK7yLrkOrp_Cv?fbclid=IwAR2A49Au4BZIiEyqdMKZXzHKCRZQJSnBod_Htab3XBcpSxgzBQTGlLsZdss">
									<div class="card card-animated text-center py-5">
										
										<span class="">
											<img class="img-fluid" src="assets/image/Group 1886.png" >
										</span>
										
										<div class="card-body">
											<p class="card-text">LIBRARY</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 my-1">
								<a href="{{ route('under_construction') }}">
									<div class="card card-animated text-center py-5">
										
										<span class="">
											<img class="img-fluid" src="assets/image/Group 1894.png" >
										</span>
										
										<div class="card-body">
											<p class="card-text">HIGHER STUDY </p>
										</div>
									</div>
								</a>
							</div>
							
							<div class="col-lg-3 col-md-6 col-sm-6 my-1">
								<a href="{{ route('under_construction') }}">
									<div class="card card-animated text-center py-5">
										
										<span class="">
											<img class="img-fluid" src="assets/image/Group 1893.png" >
										</span>
										
										<div class="card-body">
											<p class="card-text">CLUBS & GROUPS</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>


				<div class="new_section pricing my-5 container-fluid">
					<div class="container">
						<h3 class="text-center pt-5">Pricing</h3>
						<div class="row justify-content-center p-5" id="academic">

							<div class="col-lg-4 col-md-4 col-sm-4 my-1">
								<a href="">
									<div class="card card-animated text-center py-5">
										
										<span class="">
											<img class="img-fluid" src="assets/image/Group 1887.png" >
										</span>
										
										<div class="card-body ">
											<h2 class="card-text" style="color:white;">FREE</h2>
											<h4 style="color:orange;">0 BDT/month </h4>
											<ul class="features" style="color:white;">
												<li>Academic Files</li>
												<li>Simple Profile</li>
												<li>Chat Room Access</li>
												<li>Job Posting</li>
												<li><s>Library Access</s></li>
												<li><s>Higher Study Resources</s></li>
												<li><s>Premium Profile</s></li>
												<li><s>Online Courses</s></li>
												<li><s>3D Machines</s></li>
											</ul>
										</div>
									</div>
								</a>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-4 my-1">
								<a href="">
									<div class="card card-animated text-center py-5">
										
										<span class="">
											<img class="img-fluid" src="assets/image/Group 1888.png" >
										</span>
										
										<div class="card-body">
											<h2 class="card-text" style="color:white;">BASIC</h2>
											<h4 style="color:orange;">100 BDT/ 6 months </h4>

											<ul class="features" style="color:white;">
												<li>Academic Files</li>
												<li>Simple Profile</li>
												<li>Chat Room Access</li>
												<li>Job Posting</li>
												<li>Library Access</li>
												<li>Higher Study Resources</li>
												<li>Premium Profile</li>
												<li>Online Courses</li>
												<li>3D Machines</li>
											</ul>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 my-1">
								<a href="">
									<div class="card card-animated text-center py-5">
										
										<span class="">
											<img class="img-fluid" src="assets/image/Group 1889.png" >
										</span>
										
										<div class="card-body">
											<h2 class="card-text" style="color:white;">PRO</h2>

											<h4 style="color:orange;">180 BDT/ 12 months </h4>

											<ul class="features" style="color:white;">
												<li>Academic Files</li>
												<li>Simple Profile</li>
												<li>Chat Room Access</li>
												<li>Job Posting</li>
												<li>Library Access</li>
												<li>Higher Study Resources</li>
												<li>Premium Profile</li>
												<li>Online Courses</li>
												<li>3D Machines</li>
											</ul>
										</div>
									</div>
								</a>
							</div>
							
						</div>
					</div>
				</div>





				@include('include/share-slide')
			</div>
			
			@include('include/footer')