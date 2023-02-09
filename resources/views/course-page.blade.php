<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Courses</title>
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
			<section class="staar">
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
						
				
				<div class="row bg py-5">
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
				

				<div class="new_section courses my-5 container-fluid">
					<div class="container">
						<h3 class="text-center pt-5">Topic</h3>
						<div class="row justify-content-center p-5" id="explore">
							
							<div class="col-lg-4 col-md-4 col-sm-4 my-1">
								<a href="https://youtube.com/playlist?list=PLkeQwaJxiD7ijEx-QkpX-YC4ye0xod8am" target="_blank">
									<div class="card card-animated text-center py-5">
										
										<span class="">
											<img class="img-fluid" src="assets/image/yarn.svg" >
										</span>
										
										<div class="card-body">
											<p class="card-text">Yarn</p>
										</div>
									</div>
								</a>
							</div>
							
							
							<div class="col-lg-4 col-md-4 col-sm-4 my-1">
								<a href="https://youtube.com/playlist?list=PLcQnPFHcQw1V9l7gabY7QOdA12caw0S_l" target="_blank">
									<div class="card card-animated text-center py-5">
										
										<span class="">
											<img class="img-fluid" src="assets/image/fabric.png" >
										</span>
										
										<div class="card-body">
											<p class="card-text">Fabric</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 my-1">
								<a href="https://youtube.com/playlist?list=PLCqbURa8d1m7nwuXMulHoAxo3nTzEZDxa" target="_blank">
									<div class="card card-animated text-center py-5">
										
										<span class="">
											<img class="img-fluid" src="assets/image/Apparel.svg" >
										</span>
										
										<div class="card-body">
											<p class="card-text">Apparel</p>
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