<!doctype html>
<html lang="en">
	<head>
		<base href="/public">
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
				<div class="col-lg-4">
					<form class="form-inline" action="{{ route('admin_student_search')}}" method="POST">
						@csrf
						<div class="form-group">
							<div class="input-group">
								<input type="text" name="roll" class="form-control" id="inputPassword2" placeholder="search by roll number">
								<button type="submit" class="btn btn-outline-light">Search</button>
							</div>
							
						</div>
						
					</form>
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
								<th>Name</th>
								<th>Roll</th>
								<th>Department</th>
								<th>Phone</th>
								<th>Picture</th>
								
								<th>Action</th>
							</tr>
						</thead>
						<?php
							$i=1;
						?>
						<tbody>
							@foreach($data as $list)
							<tr>
								<td>{{$i++}}</td>
								<td>{{$list->certificate_name}}</td>
								<td>{{$list->roll_number}}</td>
								<td>{{$list->department}}</td>
								<td>{{$list->phone}}</td>
								<td><img class="" width="70px" height="70px" src="{{ asset('profile/'.$list->profile_picture) }}" ></td>
								<td>
									<a  href="{{route('admin_edit_student',$list->id)}}" class="btn btn-sm btn-outline-primary">Edit</a>
									<a onclick="return confirm('Are You Sure To Delete This Profile !!')" href="{{route('admin_delete_student',$list->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
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