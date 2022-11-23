<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin-Drive</title>
		<link rel="stylesheet" href="assets/css/login.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/all.min.css">
	</head>
	<body>
		<section class="bg-primary text-white container-fluid p-4 mb-2">
			<div class="row">
				<div class="col-lg-3">
					<h2 class=" ">TexBot</h2>
				</div>
				
			</section>
			<div class="row container-fluid" >
				<div class="col-lg-3">
					<div class="list-group">
						<a class="list-group-item " href="{{ route('admin_profile') }}">
							<i class="fas fa-user"></i>
							Pending Resume
						</a>
						<a class="list-group-item" href="{{ route('admin_batch_list') }}">
							<i class="fas fa-user"></i>
							Batch List
						</a>
						<a class="list-group-item " href="{{ route('admin_job_list') }}">
							<i class="fas fa-user"></i>
							Jobs
						</a>
						<a class="list-group-item active" href="{{ route('admin_drive_link_list') }}">
							<i class="fas fa-user"></i>
							Drive Link
						</a>
						
						<a class="list-group-item " href="{{ route('admin_logout') }}">
							<i class="fas fa-sign-out-alt"></i>
							Logout
						</a>
					</div>
				</div>
				<div class="col-lg-9">
					
					<table class="table table-hover p-0">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Batch</th>
								<th>Link</th>
								
								<th>Action</th>
							</tr>
						</thead>
						
						<tbody>
							@foreach($data as $list)
							<tr>
								<td scope="row">{{ $list->id }}</td>
								<td scope="row">{{ $list->user_name }}</td>
								<td scope="row">{{ $list->batch }}</td>
								<td scope="row">{{ $list->drive_link }}</td>
								
								<td scope="row">
									<a href="{{ $list->drive_link }}" class="btn btn-primary btn-sm">Go</a>
									<a onclick="return confirm('Are You Sure To Delete This Profile !!')" href="{{route('admin_drive_list',$list->id)}}" class="btn btn-danger btn-sm">Delete</a>
									
								</td>
								
							</tr>
							@endforeach
						</tbody>
						
					</table>
					
				</div>
			</div>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
			<script src="assets/js/all.min.js"></script>
		</body>
	</html>