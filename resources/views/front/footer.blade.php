<!-- ======= Footer ======= -->
<footer class="bg-light text-lg-start">
	<!-- Grid container -->
	<div class="container p-4">
		<!--Grid row-->
		<div class="row">
			<!--Grid column-->
			<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
				<h6>About Us</h6>

				<p>
					Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
					molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
					aliquam voluptatem veniam, est atque cumque eum delectus sint!
				</p>
				<br>

				<h6>Tags/Keywords</h6>

				<p>
				@foreach($data['nav_footer']['foot_keyword'] as $item)
					<a class="bn" href="{{ url('keyword').'/'.$item->slug }}">
						<span class="badge-normal badge-primary">
							{{ $item->title_en }}
						</span>
					</a>
				@endforeach
				</p>
			</div>
			<!--Grid column-->

			<!--Grid column-->
			<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
				<h5 class="text-uppercase">Community Without Border</h5>

				<p>
					Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
					molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
					aliquam voluptatem veniam, est atque cumque eum delectus sint!
				</p>
				<br>

				<div>
				<!-- flag countries -->
				@foreach($data['nav_footer']['nav_country'] as $item)
					<a href="{{ url('countries').'/'.$item->slug }}"><img class="flag-small" src="{{ asset($item->logo) }}"></a>
				@endforeach
				</div>
			</div>
			<!--Grid column-->
		</div>
		<!--Grid row-->
	</div>
	<!-- Grid container -->

	<!-- Copyright -->
	<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
	<small>Copyright © 2023 Community Work without Border</small>
	</div>
	<!-- Copyright -->
</footer>
<!-- End Footer -->