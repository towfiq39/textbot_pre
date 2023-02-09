<!doctype html>
<html lang="en">
	<head>
		<base href="/public">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Profiles</title>
		<link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
		<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}} ">
	</head>
	<body>
		<section class="slide_top_section">
			@include('include/navbar')
			
		</section>
		<section class="slide bg-dark">
			<div class="p-5">
				<div class="container slide_section my-5">
					<h3 class="text-center pt-5">BATCH {{ $id }}</h3>
					<div class="container p-5">
						<div class="row justify-content-around">
							@foreach($data as $row)
							<div class="col-lg-3 py-3">
								<div class="card  text-center py-5">
									
									
										<div>
											<a href="">
												<img class=" img-fluid p-2 profile_pic_student_list pro-pic"  src="{{ asset('profile/'.$row->profile_picture) }}" >
											</a>
											
									
										</div>
										
									
									<div class="card-body">
										<h1 class="roll">{{ $row->roll_number }}</h1>
										<h3 class="position">{{ $row->certificate_name }}</h3>
										
									</div>
									<div>
										<a href="{{ $row->facebook }}"><img width="80px" src="assets/image/Group 1910.png" class="" alt=""></a>
										<a href="{{ $row->linkedin }}"><img width="80px" src="assets/image/Group 1913.png" class="" alt=""></a>
									</div>
								</div>
							</div>
							
							@endforeach
						</div>
					</div>
				</div>
			</div>
			
			@include('include/footer')