<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Jobs</title>
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
					<h3 class="text-center pt-5">JOB LIST</h3>
					<div class="container p-5">
						<div class="row justify-content-around">
							@foreach($data as $list)
							<div class="col-lg-4 col-md-4 col-sm-10 my-1">
								<div class="card text-center">
									
									
									<div class="card-body">
										<div class="first_row">
											
											<p class="card-text mt-5">Job Title : {{$list->job_title}}</p>
											<p class="card-text mt-5">Job LocaTion : {{$list->job_location}}</p>
											<p class="card-text mt-5">Salary : {{$list->salary}}</p>
											<p class="card-text mt-5">Company : {{$list->company}}</p>
											<p class="card-text mt-5">Job Type : {{$list->job_type}}</p>
											<a href="{{route('job_detail',$list->id)}}" class="btn btn-sm btn-outline-light">See More</a>
										</div>
										
									</div>
								</div>
							</div>
							@endforeach
						</div>
						@if(method_exists($list,'links'))
						<div class="d-flex justify-content-center text-white">
							
							
								{!! $list->appends(Request::all())->links("pagination::bootstrap-5") !!}
								
							
						</div>
						@endif
						<div class="d-flex justify-content-center mt-3">
							
							
								<a href="{{ route('post_job') }}" class="btn btn-outline-light">Post a Free Job</a>
							
						</div>
					</div>
					@include('include/contact-form')
					@include('include/share-slide')
				</div>
				
				@include('include/footer')