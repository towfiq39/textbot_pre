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
				@include('include/contact-form')
				@include('include/share-slide')
			</div>
			
			@include('include/footer')