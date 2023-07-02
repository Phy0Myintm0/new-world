@extends('front.layout')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/post.css') }}">
@endpush

@section('content')

<div class="row">
	<div class="col-xs-12">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
				<li class="breadcrumb-item"><a href="#!">Story</a></li>
				<li class="breadcrumb-item active" aria-current="page">{{ $data['data']->title }}</li>
			</ol>
		</nav>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-md-11 offset-md-1 text-tengah">
		<h3 class="tm-about-title">
			<span>{{ $data['data']->title }}</span>
		</h3>
	</div>
</div>

<main>
	<article>
		<span class="post-date">
			February 21, 2022 · Indonesia
		</span>
		<div class="share-button">
			<!-- AddToAny BEGIN -->
			<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
			<a class="a2a_dd" href="https://www.addtoany.com/share#url={{url()->full()}}"></a>
			<a class="a2a_button_facebook"></a>
			<a class="a2a_button_twitter"></a>
			<a class="a2a_button_email"></a>
			</div>
			<script async src="https://static.addtoany.com/menu/page.js"></script>
			<!-- AddToAny END -->
		</div>
		<hr>
		<header>
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/dead-horse-point-state-park-2x.jpg" alt="">
		</header>
		<div class="multicol">
			<h3>Land of Salt and Rock</h3>
			<!-- <h2>Five Days in Utah</h2> -->
			<p>“Why Utah?”</p>
			<p>The question was posed to me pretty much every time I told someone where I was headed on my next
				adventure.</p>
		</div>
		<!-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/route-89-2x.jpg" alt=""> -->
		<hr>
		<div class="multicol">
			<p>Driving out of Nevada, through parts of Arizona, and into Utah is nothing short of awe-inspiring, with
				the scenery morphing from yellow to red to beige. Reaching Amangiri feels like approaching a secluded
				fortress, with a private winding road that snakes through the mountainous rocks.</p>
			<p>“We’ve been expecting you!” the receptionist says as we buzz for entry through Amangiri’s locked gate.
				Finally reaching the resort itself, my partner and I are greeted by a team of friendly staff who
				immediately whisk our bags away as a host escorts us up the paved stairs. It is nighttime when we
				arrive, and the building is lined with glowing lanterns that light our path.</p>
			<p>Inside, the lobby flows into the dining room and open kitchen, which in turn leads to an inner courtyard.
				Past the dazzling pool and hot tub, we are guided to our room, where check-in is as simple as signing
				our names.</p>
			<p>Inspired by the area’s native Navajo people, Amangiri is so in touch with its surroundings that it seems
				as if it grew from the ground itself. Exposed concrete in soft greys; contemporary furnishings in muted
				yellows; a handmade dreamcatcher presented on the bed as a welcome gift—this place knows service, and
				knows detail. Want to go for a walk? There is an umbrella in case it rains. Partake in stargazing? They
				bring in an expert astronomer. Eat a delicious meal? Pull up a seat in the dining room and indulge in
				tortilla soup for dinner or huevos rancheros for breakfast, all the while never having to sign a bill or
				even give your room number. Guests here are friendly, too, and you never know who you might be talking
				to—that brunette woman dining solo might just have designed sets for 1995’s <cite>Outbreak</cite>.</p>
			<p>Amangiri offers free guided hikes right from the property that explore the surrounding terrain, but it is
				also only a few hours’ drive from Zion National Park. Along the way, watch the rock formations change,
				perhaps stopping at the Grand-Staircase Escalante for a short detour to see some toadstools. That is the
				beauty of this land: even small journeys on the side of the highway turn into momentous adventures.</p>
			<p>If visiting Zion in the off-season, you can take your car right through the park, stopping as many or as
				few times as desired (if there during peak season, shuttles are used to take explorers to the different
				viewpoints). The rock patterns on these red mountains seem to swirl and swish like ice cream cones, and
				a short hike down along the Lower Emerald Pool Trail makes me feel as though I’ve encountered a rugged
				stony jungle.</p>
		</div>
		<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/monument-valley-2x.jpg" alt="">
		<div class="multicol">
			<p>On the way back to Amangiri, we detour to the Coral Pink Sand Dunes State Park and revel in the fact that
				we are the only two people in the entire place. Traipsing over mountains of Kool-Aid-coloured sand, I
				bend down to feel it between my fingers. It’s silky and light, almost whimsical.</p>
			<p>If looking to stop for a bite somewhere along the way, consider Kanab Creek Bakery, located in the town
				of Kanab that sits between Amangiri and Zion; pop in for a humungous turkey sandwich on freshly baked
				bread.</p>
			<p>Back at Amangiri, we indulge in a couple’s massage at the onsite spa, taking in the pre-treatment sage
				smudging and post-treatment steam shower. I then spend a few moments alone in the outdoor wading pool,
				letting the darkness of the night envelop me.</p>
			<p>Come morning, we bid a sad farewell to Amangiri and head for Bryce Canyon National Park. Known for its
				chillingly beautiful sea of spire rock formations called hoodoos, Bryce is best enjoyed from Sunset
				Point, where the amphitheatre of hoodoos can be seen in full force, and adventurers can even walk down
				into the basin to stand right next to them. Also not to miss is the Natural Bridge viewpoint, which
				looks out onto a majestic arch-like wonder.</p>
			<p>From Bryce Canyon, the road leads us north to the state capital, Salt Lake City. Host of the 2002 Winter
				Olympics, Salt Lake’s close proximity to six ski resorts makes it a great jumping off point for
				snowbirds. Our home for two nights is The Grand America Hotel, a luxury property with old world charms.
				Indeed, as the receptionist prepares the room key—shaped like an actual key, not the typical swipe
				card—he says, “We like to keep things a bit old-fashioned.”</p>
			<p>For food, head to Pago for kale Caesar salad and bavette steak, or to HSL for pork chops, fried chicken,
				and General Tso-style cauliflower. Craft beer can be found at many places including the notable Uinta
				Brewing (because yes, alcohol is allowed and even produced in this Mormon state), and coffee is good at
				the Rose Establishment. The cafe is our final stop on the way to the Salt Lake airport, one last hurrah
				before leaving the splendid landscapes behind and heading back home to tell everyone exactly what can be
				found in this land of salt and rock.</p>

			<p class="credits">Text by <a
					href="http://montecristomagazine.com/magazine/spring-2018/five-days-in-utah">Sarah Harowitz</a></p>
			<p class="credits">Photographs by <a
					href="https://www.flickr.com/photos/pedrosz/albums/72157645897945460">Pedro Szekely</a>, used under
				a <a href="https://creativecommons.org/licenses/by-nc-sa/2.0/">Creative Commons
					Attribution-NonCommercial-ShareAlike 2.0 Generic license</a></p>
		</div>
		
		<hr>
		<span class="post-date">
		February 21, 2022 · Indonesia
		</span>
		<div class="share-button">
			<!-- AddToAny BEGIN -->
			<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
			<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
			<a class="a2a_button_facebook"></a>
			<a class="a2a_button_twitter"></a>
			<a class="a2a_button_email"></a>
			</div>
			<script async src="https://static.addtoany.com/menu/page.js"></script>
			<!-- AddToAny END -->
		</div>

		<div class="row story-page section">
			<div class="col-xs-12 text-tengah">
				<div class="section-header">
					<h3><span>Related Stories</span></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<a href="#!">
						<div class="card mb-4 box-shadow">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<span class="label label-default"><i class="fa fa-clock-o"></i> February 21, 2022</span></h1>
								</div>
								<h5>Short Title TEst Asdas</h5>
								<p class="card-text">Short Description lorasfsd asdfa sdfasdf.</p>
							</div>
							<img class="card-img-top"
								data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
								alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
								src="https://picsum.photos/seed/agung/500/300"
								data-holder-rendered="true">
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<div class="card mb-4 box-shadow">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-center">
								<span class="label label-default">2023年 7月 2日</span></h1>
							</div>
							<p class="card-text">Lorem ipsum asda AsdasdafaaLorem ipsum asda.</p>
						</div>
						<img class="card-img-top"
							data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
							alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
							src="https://picsum.photos/seed/dddww/500/300"
							data-holder-rendered="true">
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mb-4 box-shadow">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-center">
								<span class="label label-default">2023年 4月 3日</span></h1>
							</div>
							<p class="card-text">Lorem ipsum asda Asdasdafaa. asdasdsa sadasdas sssss.</p>
						</div>
						<img class="card-img-top"
							data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
							alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
							src="https://picsum.photos/seed/aacv/500/300"
							data-holder-rendered="true">
					</div>
				</div>
			</div>
			<!-- .row-fluid -->
		</div>
	</article>
</main>



<div class="row section">
	<div class="col-md-12">
		<div id="disqus_thread"></div>
		<script>
			/**
			*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
			*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
			/*
			var disqus_config = function () {
			this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
			this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
			};
			*/
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');
			s.src = 'https://cwb-world.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	</div>
</div>

@endsection

@push('scripts')
<script type="text/javascript">

</script>
@endpush
