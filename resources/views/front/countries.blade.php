@extends('front.layout')

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="{{ asset('css/countries.css') }}">
@endpush

@section('content')

<div class="row">
	<div class="col-xs-12">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">{{ $data['data']->title }}</li>
			</ol>
		</nav>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-md-11 offset-md-1 text-tengah">
		<h3 class="tm-about-title">
			<span>CWB {{ $data['data']->title }}</span>
		</h3>
	</div>
</div>

<div class="container-fluid">
	<div class="col-md-3">
		<img class="country" src="{{ asset('img/'.$data['data']->title.'.png') }}">
	</div>
	<div class="col-md-8">
		Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, enim numquam. Asperiores quod dicta ab, sed
		dolorum aperiam dolores qui, consectetur delectus dolorem aspernatur molestias odio rerum nesciunt repudiandae
		fugiat! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem explicabo, assumenda dignissimos nulla
		facere officia, unde tempore ex, dolores natus excepturi voluptatem eveniet porro debitis inventore. Consequatur
		vero a ea? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia impedit ut debitis rerum in nihil
		repellendus blanditiis aperiam ipsum hic veniam voluptatum aliquam, sapiente, voluptas nulla explicabo, est
		possimus sed?
	</div>
</div>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto:wght@300&display=swap"
	rel="stylesheet">

<div class="container-fluid">
	<div class="card">
		<figure class="card__thumb">
			<img src="https://source.unsplash.com/75S9fpDJVdo/300x510" alt="Picture by Kyle Cottrell"
				class="card__image">
			<figcaption class="card__caption">
				<h2 class="card__title">NASA Has Found Hundreds Of Potential New Planets</h2>
				<p class="card__snippet">NASA released a list of 219 new “planet candidates” discovered by the Kepler
					space telescope, 10 of which are similar to Earth’s size and may be habitable by other life forms.
				</p>
				<a href="/post/example-success-story-post" class="card__button">Read more</a>
			</figcaption>
		</figure>
	</div>

	<div class="card">
		<figure class="card__thumb">
			<img src="https://source.unsplash.com/71u2fOofI-U/300x510" alt="Picture by Nathan Dumlao"
				class="card__image">
			<figcaption class="card__caption">
				<h2 class="card__title">This Is Your Body And Brain On Coffee</h2>
				<p class="card__snippet">Drinking more caffeine during the coronavirus lockdown? Here's how it can
					affect you over time and advice on making it better for you.</p>
				<a href="" class="card__button">Read more</a>
			</figcaption>
		</figure>
	</div>

	<div class="card">
		<figure class="card__thumb">
			<img src="https://source.unsplash.com/qXMpNtNp1uE/300x510" alt="Picture by Daniel Lincoln"
				class="card__image">
			<figcaption class="card__caption">
				<h2 class="card__title">Why You Should Bring Your Dog To Work</h2>
				<p class="card__snippet">On Friday, offices around the country celebrated the 15th annual Take Your Dog
					to Work Day. Though the event's primary goal is to raise awareness for pet adoption, the
					unanticipated impact may be a slightly more relaxing work environment for any office choosing to
					participate.</p>
				<a href="" class="card__button">Read more</a>
			</figcaption>
		</figure>
	</div>
</div>

<div class="row section">
	<div class="col-xs-12 text-tengah">
		<div class="section-header">
			<h3><span>{{ $data['data']->title }}'s Activities</span></h3>
			<p>These are activities we do on this country.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="blog_slider_area owl-carousel">
				<div class="box-area">
					<div class="single-blog">
						<div class="post-img">
							<img src="img/1.jpg" alt="" />
						</div>
						<div class="single_blog">
							<a href="#">
								<h3 class="post-title">Web Design Agency</h3>
							</a>
							<ul class="icon-area">
								<li><i class="fa fa-clock-o"></i>February 21,2022 </li>
							</ul>
							<p class="blog-text">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
								has been the industry's standard.
							</p>
							<div class="btn-area">
								<a href="#" class="btn btn-default main_btn">read more</a>
							</div>
						</div>
					</div>
				</div>

				<div class="box-area">
					<div class="single-blog wow fadeInUp">
						<div class="post-img">
							<img src="img/2.jpg" alt="" />
						</div>
						<div class="single_blog">
							<a href="#">
								<h3 class="post-title">Web Design Agency</h3>
							</a>
							<ul class="icon-area">
								<li><i class="fa fa-clock-o"></i>February 21,2022 </li>
							</ul>
							<p class="blog-text">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
								has been the industry's standard.
							</p>
							<div class="btn-area">
								<a href="#" class="btn btn-default main_btn">read more</a>
							</div>
						</div>
					</div>
				</div> <!-- END SINGLE blogS -->

				<div class="box-area">
					<div class="single-blog wow fadeInUp">
						<div class="post-img">
							<img src="img/3.jpg" alt="" />
						</div>
						<div class="single_blog">
							<a href="#">
								<h3 class="post-title">Web Design Agency</h3>
							</a>
							<ul class="icon-area">
								<li><i class="fa fa-clock-o"></i>February 21,2022 </li>
							</ul>
							<p class="blog-text">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
								has been the industry's standard.
							</p>
							<div class="btn-area">
								<a href="#" class="btn btn-default main_btn">read more</a>
							</div>
						</div>
					</div>
				</div> <!-- END SINGLE blogS -->

				<div class="box-area">
					<div class="single-blog wow fadeInUp">
						<div class="post-img">
							<img src="img/4.jpg" alt="" />
						</div>
						<div class="single_blog">
							<a href="#">
								<h3 class="post-title">Web Design Agency</h3>
							</a>
							<ul class="icon-area">
								<li><i class="fa fa-clock-o"></i>February 21,2022 </li>
							</ul>
							<p class="blog-text">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
								has been the industry's standard.
							</p>
							<div class="btn-area">
								<a href="#" class="btn btn-default main_btn">read more</a>
							</div>
						</div>
					</div>
				</div> <!-- END SINGLE blogS -->

				<div class="box-area">
					<div class="single-blog wow fadeInUp">
						<div class="post-img">
							<img src="img/5.jpg" alt="" />
						</div>
						<div class="single_blog">
							<a href="#">
								<h3 class="post-title">Web Design Agency</h3>
							</a>
							<ul class="icon-area">
								<li><i class="fa fa-clock-o"></i>February 21,2022 </li>
							</ul>
							<p class="blog-text">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
								has been the industry's standard.
							</p>
							<div class="btn-area">
								<a href="#" class="btn btn-default main_btn">read more</a>
							</div>
						</div>
					</div>
				</div> <!-- END SINGLE blogS -->

				<div class="box-area">
					<div class="single-blog wow fadeInUp">
						<div class="post-img">
							<img src="img/6.jpg" alt="" />
						</div>
						<div class="single_blog">
							<a href="#">
								<h3 class="post-title">Web Design Agency</h3>
							</a>
							<ul class="icon-area">
								<li><i class="fa fa-clock-o"></i>February 21,2022 </li>
							</ul>
							<p class="blog-text">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
								has been the industry's standard.
							</p>
							<div class="btn-area">
								<a href="#" class="btn btn-default main_btn">read more</a>
							</div>
						</div>
					</div>
				</div> <!-- END SINGLE blogS -->
			</div>
		</div>
	</div>
	<!-- .row-fluid -->
</div>

<div class="row section">
	<div class="col-xs-12 text-tengah">
		<div class="section-header">
			<h3><span>Photos on {{ $data['data']->title }}</span></h3>
			<p>These are our photos doing some activities with the young and others in {{ $data['data']->title }}.</p>
		</div>
	</div>

	<div class="col-xs-12">
		<article class='gallery'>
			<a class='gallery-link' href='https://unsplash.it/1400/1000?image=1081'>
				<figure class='gallery-image'>
					<img height='1000' src='https://unsplash.it/1400/1000?image=1081' width='1400'>
					<figcaption>Photo caption</figcaption>
				</figure>
			</a>
			<a class='gallery-link' href='https://unsplash.it/1200/1400?image=1014'>
				<figure class='gallery-image'>
					<img height='1400' src='https://unsplash.it/1200/1400?image=1014' width='1200'>
					<figcaption>Photo caption</figcaption>
				</figure>
			</a>
			<a class='gallery-link' href='https://unsplash.it/1000/1000?image=267'>
				<figure class='gallery-image'>
					<img height='1000' src='https://unsplash.it/1000/1000?image=267' width='1000'>
					<figcaption>Photo caption</figcaption>
				</figure>
			</a>
			<a class='gallery-link' href='https://unsplash.it/1200/1200?image=266'>
				<figure class='gallery-image'>
					<img height='1200' src='https://unsplash.it/1200/1200?image=266' width='1200'>
					<figcaption>Photo caption</figcaption>
				</figure>
			</a>
			<a class='gallery-link' href='https://unsplash.it/1000/1200?image=634'>
				<figure class='gallery-image'>
					<img height='1200' src='https://unsplash.it/1000/1200?image=634' width='1000'>
					<figcaption>Photo caption</figcaption>
				</figure>
			</a>
			<a class='gallery-link' href='https://unsplash.it/1000/1000?image=923'>
				<figure class='gallery-image'>
					<img height='1000' src='https://unsplash.it/1000/1000?image=923' width='1000'>
					<figcaption>Photo caption</figcaption>
				</figure>
			</a>
			<a class='gallery-link' href='https://unsplash.it/1200/1000?image=682'>
				<figure class='gallery-image'>
					<img height='1000' src='https://unsplash.it/1200/1000?image=682' width='1200'>
					<figcaption>Photo caption</figcaption>
				</figure>
			</a>
			<a class='gallery-link' href='https://unsplash.it/1400/1000?image=173'>
				<figure class='gallery-image'>
					<img height='1000' src='https://unsplash.it/1400/1000?image=173' width='1400'>
					<figcaption>Photo caption</figcaption>
				</figure>
			</a>
			<a class='gallery-link' href='https://unsplash.it/1000/1000?image=943'>
				<figure class='gallery-image'>
					<img height='1000' src='https://unsplash.it/1000/1000?image=943' width='1000'>
					<figcaption>Photo caption</figcaption>
				</figure>
			</a>
		</article>
	</div>

</div>

<div class="row section">
	<div class="col-xs-12 text-tengah">
		<div class="section-header">
			<h3><span>CWB {{ $data['data']->title }}'s Link</span></h3>
			<p>All URL, SNS, Social Media link that related to CWB {{ $data['data']->title }}.</p>
		</div>
	</div>

	<div class="col-xs-12">
		<ul class="justify-content-md-center">
			@foreach($data['actions'] as $item)
			<li class="tm-tab-link-item col-md-4">
				<a id="tab2" href="{{ url('action').'/'.$item->slug }}" class="tm-tab-link">
					<i class="fa fa-{{ $item->img }} tm-tab-icon"></i>
					<span class="tm-tab-link-label">
						{{ $item->title_jp }}
						<br>{{ $item->title_en }}
					</span>
				</a>
			</li>
			@endforeach
		</ul>
	</div>

</div>

@endsection

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ asset('assets/vendor/parallax/parallax.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script>
	$(".blog_slider_area").owlCarousel({
		autoplay: true,
		slideSpeed: 1000,
		items: 3,
		loop: true,
		nav: false,
		margin: 30,
		dots: true,
		responsive: {
			320: {
				items: 1
			},
			767: {
				items: 2
			},
			600: {
				items: 2
			},
			1000: {
				items: 3
			}
		}

	});
</script>

<script src="{{ asset('js/magnific-popup.js') }}"></script>
<script type="text/javascript">
$(document).ready(function ($) {
  $('.gallery-link').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    mainClass: 'mfp-with-zoom mfp-img-mobile',
    image: {
      verticalFit: true,
      titleSrc: function(item) {
        return item.el.find('figcaption').text() || item.el.attr('title');
      }
    },
    zoom: {
      enabled: true
    },
    // duration: 300
    gallery: {
      enabled: true,
      navigateByImgClick: false,
      tCounter: ''
    },
    disableOn: function() {
      return $(window).width() > 640;
    }
  });

});

//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFBQSxDQUFBLENBQUUsZUFBRixDQUFrQixDQUFDLGFBQW5CLENBQ0U7SUFBQSxJQUFBLEVBQU0sT0FBTjtJQUNBLG1CQUFBLEVBQXFCLElBRHJCO0lBRUEsY0FBQSxFQUFnQixLQUZoQjtJQUdBLFNBQUEsRUFBVyw4QkFIWDtJQUlBLEtBQUEsRUFDRTtNQUFBLFdBQUEsRUFBYSxJQUFiO01BQ0EsUUFBQSxFQUFVLFFBQUEsQ0FBQyxJQUFELENBQUE7ZUFDUixJQUFJLENBQUMsRUFBRSxDQUFDLElBQVIsQ0FBYSxZQUFiLENBQTBCLENBQUMsSUFBM0IsQ0FBQSxDQUFBLElBQXFDLElBQUksQ0FBQyxFQUFFLENBQUMsSUFBUixDQUFhLE9BQWI7TUFEN0I7SUFEVixDQUxGO0lBUUEsSUFBQSxFQUNFO01BQUEsT0FBQSxFQUFTO0lBQVQsQ0FURjs7SUFXQSxPQUFBLEVBQ0U7TUFBQSxPQUFBLEVBQVMsSUFBVDtNQUNBLGtCQUFBLEVBQW9CLEtBRHBCO01BRUEsUUFBQSxFQUFVO0lBRlYsQ0FaRjtJQWVBLFNBQUEsRUFBVyxRQUFBLENBQUEsQ0FBQTthQUNULENBQUEsQ0FBRSxNQUFGLENBQVMsQ0FBQyxLQUFWLENBQUEsQ0FBQSxHQUFvQjtJQURYO0VBZlgsQ0FERjtBQUFBIiwic291cmNlc0NvbnRlbnQiOlsiJCgnLmdhbGxlcnktbGluaycpLm1hZ25pZmljUG9wdXBcbiAgdHlwZTogJ2ltYWdlJ1xuICBjbG9zZU9uQ29udGVudENsaWNrOiB0cnVlXG4gIGNsb3NlQnRuSW5zaWRlOiBmYWxzZVxuICBtYWluQ2xhc3M6ICdtZnAtd2l0aC16b29tIG1mcC1pbWctbW9iaWxlJ1xuICBpbWFnZTogXG4gICAgdmVydGljYWxGaXQ6IHRydWVcbiAgICB0aXRsZVNyYzogKGl0ZW0pIC0+XG4gICAgICBpdGVtLmVsLmZpbmQoJ2ZpZ2NhcHRpb24nKS50ZXh0KCkgfHwgaXRlbS5lbC5hdHRyKCd0aXRsZScpXG4gIHpvb206XG4gICAgZW5hYmxlZDogdHJ1ZVxuICAgICMgZHVyYXRpb246IDMwMFxuICBnYWxsZXJ5OlxuICAgIGVuYWJsZWQ6IHRydWVcbiAgICBuYXZpZ2F0ZUJ5SW1nQ2xpY2s6IGZhbHNlXG4gICAgdENvdW50ZXI6ICcnXG4gIGRpc2FibGVPbjogLT5cbiAgICAkKHdpbmRvdykud2lkdGgoKSA+IDY0MCAiXX0=
//# sourceURL=coffeescript
</script>
@endpush
