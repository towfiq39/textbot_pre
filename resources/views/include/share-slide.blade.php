<div class="container share_link_home mb-sm-5">
	<div class="row mt-3 justify-content-around">
		<div class="col-lg-2 col-md-2  col-sm-10">
			<img src="assets/image/person.png"  alt="">
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="share_link_section">
				<h2 class="text-right">SHARE YOUR DRIVE LINK HERE</h2>
				<p class="text-right">YOUR CONTRIBUTION IS MUCH APPRICIATED</p>
				<form action="{{ route('upload_drive')}}" method="POST">
					@csrf
					<input type="text" class="form-control my-1" name="drive_link" placeholder="Share Drive Link">
					<input type="submit" class="btn btn btn-outline-light">
					
				</form>
				
			</div>
			
		</div>
	</div>
</div>