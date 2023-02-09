<div class=" custom_navbar">
	<nav class="container navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="{{ route('index') }}"><img src="assets/image/Picture2 1.png" class="img-fluid" alt=""></a>
		<button 
		 class="navbar-toggler p-1"  
		 type="button" data-bs-toggle="collapse" 
		 data-bs-target="#navbarNav" 
		 aria-controls="navbarNav" aria-expanded="false" 
		 aria-label="Toggle navigation">
		<i class="fa-solid fa-bars toggler_button"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item px-4">
					<a class="nav-link" href="{{ route('index') }}">Home </a>
				</li>
				<li class="nav-item px-4">
					<a class="nav-link" href="#academic">File</a>
				</li>
				<li class="nav-item px-4">
					<a class="nav-link" href="#explore">Explore</a>
				</li>
				<li class="nav-item px-4">
					<a class="nav-link" href="{{ route('help') }}">Help</a>
				</li>
				<li class="nav-item px-4">
					<a class="nav-link" href="{{ route('submit') }}">Submit</a>
				</li>
				<li class="nav-item px-4">
					<a class="nav-link" href="{{ route('jobs') }}">Jobs</a>
				</li>
				<li class="nav-item px-4">
					<span class="nav-link green">|</span>
				</li>
				@guest
				@if (Route::has('login'))
				<li class="nav-item px-4 ">
					<a class="nav-link login ps-3" href="{{ route('login') }}">LOGIN</a>
				</li>
				@endif
				@if (Route::has('register'))
				<li class="nav-item px-4 ">
					<a class="nav-link signup ps-3" href="{{ route('register') }}">SIGN UP</a>
				</li>
				@endif
				@else
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->user_name }}
					</a>
					<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
						
						<a class="dropdown-item" href="{{ route('home') }}"
							>
							{{ __('Profile') }}
						</a>
						<a class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					</div>
				</li>
				@endguest
				
				
				
			</ul>
		</div>
	</nav>
</div>
{{-- 				<nav class="container navbar navbar-expand-lg navbar-light">
	<a class="navbar-brand" href="#"><img src="assets/image/Picture2 1.png" class="img-fluid" alt=""></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav">
			<li class="nav-item px-4">
				<a class="nav-link" href="{{ route('index') }}">Home </a>
			</li>
			<li class="nav-item px-4">
				<a class="nav-link" href="{{ route('login') }}">File</a>
			</li>
			<li class="nav-item px-4">
				<a class="nav-link" href="#">Explore</a>
			</li>
			<li class="nav-item px-4">
				<a class="nav-link" href="{{ route('help') }}">Help</a>
			</li>
			<li class="nav-item px-4">
				<a class="nav-link" href="{{ route('submit') }}">Submit</a>
			</li>
			<li class="nav-item px-4">
				<span class="nav-link green">|</span>
			</li>
			<li class="nav-item px-4 ">
				<a class="nav-link login " href="{{ route('login') }}">LOGIN</a>
			</li>
			<li class="nav-item px-4">
				<a class="nav-link signup" href="{{ route('register') }}">SIGN UP</a>
			</li>
			
		</ul>
	</div>
</nav>
</div>
--}}