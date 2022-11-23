<!doctype html>
<html lang="en">
	<head>
		<base href="/public">
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
					<h3 class="text-center pt-5">JOB DETAILS</h3>
					<div class="container p-5">
						<div class="row justify-content-around">
							
							<div class="col-lg-12 col-md-10 col-sm-10">
								<table class="table table-bordered table-hover table-dark">
								  <tr>
								  	<td class="w-25">#</td>
								  	<td>{{$data->id}}</td>
								  </tr>
								  <tr>
								  	<td>Job Title</td>
								  	<td>{{$data->job_title}}</td>
								  </tr>
								  <tr>
								  	<td>Job Description</td>
								  	<td>{{$data->job_description}}</td>
								  </tr>
								   <tr>
								  	<td>Salary</td>
								  	<td>{{$data->salary}}</td>
								  </tr>
								  <tr>
								  	<td>Company</td>
								  	<td>{{$data->company}}</td>
								  </tr>
								  <tr>
								  	<td>Job Location</td>
								  	<td>{{$data->job_location}}</td>
								  </tr>
								  <tr>
								  	<td>Job Type</td>
								  	<td>{{$data->job_type}}</td>
								  </tr>
								  
								</table>
								<a href="" class="btn btn-outline-light">Apply</a>
								<a href="" class="btn btn-outline-primary">Back</a>
							</div>
							
						</div>
					</div>
				</div>
				@include('include/contact-form')
				@include('include/share-slide')
			</div>
			
			@include('include/footer')