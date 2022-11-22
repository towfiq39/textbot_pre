<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Post Jobs</title>
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
					<h3 class="text-center pt-5">POST A JOB</h3>
					<div class="container p-5">
						<div class="row justify-content-around">
							<div class="col-lg-8 col-md-10 col-sm-10 ">
								<form action="{{ route('post_free_job')}}" method="POST">
									@csrf
									<div class="form-group">
										<label class="text-white">Job Title</label>
										<input type="text" class="form-control" name="job_title" placeholder="job title">
									</div>
									<div class="form-group">
										<label class="text-white">Company</label>
										<input type="text" class="form-control" name="company" placeholder="company name">
									</div>
									<div class="form-group">
										<label class="text-white">Job Location</label>
										<input type="text" class="form-control" name="job_location" placeholder="job Location">
									</div>
									<label for="exampleFormControlInput1" class="text-white">Job Description</label>
									<div class="form-group">
										<textarea class="form-control" name="job_description" rows="3"></textarea>
									</div>
									<div class="form-group">
										<label for="exampleFormControlSelect1" class="text-white">Job Type</label>
										<select class="form-control" name="job_type">
											<option value="fulltime">Full-Time</option>
											<option value="parttime">Part-Time</option>
											<option value="contract">Contract</option>
											<option value="internship">Internship</option>
											<option value="remote">Remote</option>
											
										</select>
									</div>
									<div class="form-group">
										<label class="text-white">Salary</label>
										<input type="text" class="form-control" name="salary" placeholder="salary">
									</div>
									<div class="d-flex justify-content-center mt-3">
										
										<input type="submit" class="btn btn-outline-light" value="POST">
									</div>
								</form>
							</div>
						</div>
						
					</div>
					@include('include/contact-form')
					@include('include/share-slide')
				</div>
				
				@include('include/footer')