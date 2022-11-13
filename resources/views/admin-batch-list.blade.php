<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin-Batch-List</title>
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
						<a class="list-group-item active" href="{{ route('admin_batch_list') }}">
							<i class="fas fa-user"></i>
							Batch List
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
								<th>Batch</th>
								<th>Picture</th>
								
								<th>Action</th>
							</tr>
						</thead>
						
						<tbody>
							@if (session()->has('msg'))
							<div class="alert alert-warning">
								{{ session()->get('msg')}}
							</div>
							@endif
							@foreach($data as $list)

							<tr>
								<td>{{$list->id}}</td>
								<td>{{$list->batch}}</td>
								<td><img class="" width="70px" height="70px" src="assets/image/{{ $list->profile_picture }}" ></td>
								<td><a href="{{route('admin_student_list',$list->batch)}}" class="btn btn-sm btn-outline-primary">View</a></td>
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