<div class=" custom_navbar">
	<nav class="container navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="#"><img src="assets/image/Picture2 1.png" class="img-fluid" alt=""></a>
		<button  class="navbar-toggler p-1"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fa-solid fa-bars toggler_button"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item px-4">
					<a class="nav-link" href="#">Home </a>
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