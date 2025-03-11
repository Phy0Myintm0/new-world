@extends('front.layout')

@push('styles')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<style>
  
</style>
@endpush

@section('content')
<!-- <div class="row tm-content-boxes-row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 offset-md-6">
		<form class="form-inline">
			<input class="form-control" type="search" placeholder="Search" aria-label="Search">
		</form>
		<p>Please choose keywords from the circle to start!</p>
	</div>
</div> -->
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 img-logo">
    <img src="{{ asset('vendor/img/new-world.png') }}" alt="new-world-logo">
</div>
<div id="map-container">
    <img src="{{ asset('img/asia-map.jpg') }}" alt="Asia Map" id="asia-map">
    
    <!-- Red Dots for Each Country -->
    <div class="country" data-slug="myanmar" style="position: absolute; top: 50%; left: 36%; width: 25px; height: 50px; background-color: transparent;
; border-radius: 50%; cursor: pointer;"></div>
    <div class="country" data-slug="cambodia" style="position: absolute; top: 65%; left: 45%; width: 20px; height: 20px; background-color: transparent;
; border-radius: 50%; cursor: pointer;"></div>
    <div class="country" data-slug="indonesia" style="position: absolute; top: 85%; left: 45%; width: 280px; height: 50px; background-color: transparent;
; border-radius: 0%; cursor: pointer;"></div>
    <div class="country" data-slug="japan" style="position: absolute; top: 25%; left: 80%; width: 80px; height: 20px; background-color: transparent;
; border-radius: 0%; cursor: pointer;"></div>
    <div class="country" data-slug="india" style="position: absolute; top: 45%; left: 15%; width: 80px; height: 80px; background-color: transparent;
; border-radius: 50%; cursor: pointer;"></div>
    <div class="country" data-slug="philippines" style="position: absolute; top: 65%; left: 65%; width: 20px; height: 20px; background-color: transparent;
; border-radius: 50%; cursor: pointer;"></div>
    <div class="country" data-slug="sri-lanka" style="position: absolute; top: 43%; left: 25%; width: 20px; height: 20px; background-color: transparent;
; border-radius: 50%; cursor: pointer;"></div>
    <!-- Tooltip -->
   
</div>

<!-- 
<div class="row tm-row-margin-b tm-content-boxes-row">
	<div class="col-md-12 bunderan">
		<div class="icon"><img src="{{ asset('vendor/img/new_world_center.png') }}" alt="">
			<ul class="menu">
			@foreach($data['keywords'] as $item)  
				<li class="spread">
					<a class="unit" href="{{ url('keyword').'/'.$item->slug }}">
						<span class="text-bunder">{{ $item->title_jp }}<br>{{ $item->title_en }}</span>
					</a>
				</li>
			@endforeach
			</ul>
		</div>
	</div>
</div> -->
<div class="row section intro">
    <div class="col-xs-12 text-tengah bg-text">
        <h1 class="text-xs-center big-font">
            <span><i>C</i>ommunity <i>N</i>etwork <i>W</i>ithout <i>B</i>order</span>
        </h1>
        <div class="text-center intro-page">
            {!! CRUDBooster::getSetting("intro_text") !!}
        </div>
    </div>
</div>

<!-- <div class="row story-page section">
    <div class="col-xs-12 text-tengah">
        <div class="section-header">
            <h2><span>Latest News</span></h2>
            <p>These articles below are our success story with the communities around the world.</p>
        </div>
    </div>
    <div class="row">
        @foreach($data['story'] as $item)
        <div class="col-md-4">
            <a href="{{ url('story').'/'.$item->slug }}">
                <div class="card mb-4 box-shadow">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="label label-default"><i class="fa fa-clock-o"></i>
                                {{ date('F d, Y', strtotime($item->created_at)) }}</span> <span
                                class="label label-default"> {{ $item->country_title }}</span>
                        </div>
                        <h5>{{ $item->title }}</h5>
                        <p class="card-text">{!! Str::limit(strip_tags($item->caption_desc), 150) !!}</p>
                    </div>
                    <img class="card-img-top" alt="Photo of {{ $item->title }}"
                        style="height: 225px; width: 100%; display: block;" src="{{ asset($item->img_header) }}"
                        data-holder-rendered="true">
                </div>
            </a>
        </div>
        @endforeach
    </div> -->
    <!-- .row-fluid -->

    <div class="row story-page section">
    <div class="col-xs-12 text-tengah">
        <div class="section-header">
            <h2><span>Latest News</span></h2>
            <p>These articles below are our success story with the communities around the world.</p>
        </div>
    </div>
    <div class="container mt-4">
        @if (!empty($data['latest_news']) && count($data['latest_news']) > 0)
            <div class="row">
                @foreach ($data['latest_news'] as $news)
                    <div class="col-md-4 mb-4 d-flex align-items-stretch">
                        <div class="card mb-4 box-shadow w-100">
                            <!-- Cover Image -->
                            <img class="card-img-top" alt="Photo of {{ $item->title }}"
                                style="height: 225px; width: 100%; display: block;" src="{{ asset($news->photo_cover) }}"
                                data-holder-rendered="true">

                            <div class="card-body d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="label label-default"><i class="fa fa-clock-o"></i>
                                        {{ date('F d, Y', strtotime($news->created_at)) }}
                                    </span>
                                    <span class="label label-default"> {{ $news->country_title }}</span>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title">{{ $news->title_en }}</h5>
                                <p class="card-text flex-grow-1">{!! Str::limit(strip_tags($news->desc_en), 150) !!}</p>

                                <!-- Read More Button -->
                                <a href="{{ route('activity', ['slug' => $news->slug]) }}" class="btn btn-primary mt-auto">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No latest news available.</p>
        @endif
    </div>
</div>

<div class="row section cwb-category">
    <div class="col-12 text-center"> <!-- Center align text and ensure proper column usage -->
        <div class="section-header">
            <h2><span>Grass Roots Expo</span></h2>
            <p>These are our community work, divided into different categories.</p>
        </div>
    </div>

    <div class="row cards"> <!-- Cards container -->
        @php $i = 1; @endphp
        @foreach($data['actions'] as $item)
            @if($i == 8) @php $i = 1; @endphp @endif
            <div class="col-12 col-md-6 col-lg-3 mb-4"> <!-- Responsive grid layout -->
                <div class="card card-{{ $i++ }}">
                    <div class="card__icon">
                        <img src="{{ asset($item->img) }}" alt="Card Image">
                    </div>
                    <h4 class="card__title">{{ $item->title_en }}</h4>
                    <div class="card__body">
                        {!! Str::limit(strip_tags($item->desc_en), 100) !!}
                    </div>
                    <p class="card__apply">
                        <a class="card__link" href="{{ url('action').'/'.$item->slug }}">Read More <i class="fa fa-chevron-right"></i></a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="conceptual-arguments">
    <div class="section-header">
        <h2><span>Our Conceptual Arguments</span></h2>
    </div>

    <a href="https://cwb-team.net/newcivil/" target="_blank" class="gallery-link">
        <div class="gallery-container">
            <img src="{{ asset('img/cwb.png') }}" alt="CWB News" class="gallery-img">
            <div class="overlay">
                <span class="overlay-subtitle">CWB news in English</span>
            </div>
        </div>
    </a>
     <div class="col-12">
        <div class="insight-section">
            <h3 class="text-center">Insight by Bohemian Vayu</h3>
        </div>
    </div>
</div>






<!-- <div class="row story-page section">
    <div class="col-xs-12 text-tengah">
        <div class="section-header">
            <h2><span>Our Galleries</span></h2>
            <p>These are our photos doing some activities with the youngs and others in each of the CWB Community.</p>
        </div>
    </div>
    <div class="col-xs-12">
        <article class='gallery'>
            @foreach($data['gallery'] as $item)
            @if(!empty($item->slug))
            <a class='gallery-link' onclick="location.href='{{ url('activity').'/'.$item->slug }}';">
            @else
            <a class='gallery-link' href='{{ asset($item->img) }}'>
            @endif
                <figure class='gallery-image'>
                    <img height='1000' src='{{ asset($item->img) }}' width='1400'>
                    <figcaption>{{ $item->title }}</figcaption>
                </figure>
            </a>
                
            @endforeach
        </article>
    </div>
</div> -->

<!-- <div class="row section">
    <div class="col-xs-12 text-tengah">
        <div class="section-header">
            <h3><span>Instagram</span></h3>
            <p>Our activites on social media.</p>
        </div>
    </div>

    <div class="col-md-12">
        <script src="https://s.electricblaze.com/widget.js" defer></script>
        <div class="electricblaze-id-2Uhx9Oy"></div>
    </div>
</div> -->

<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

@endsection

@push('scripts')
    <script>
document.querySelectorAll('.country').forEach(country => {
    country.addEventListener('click', function () {
        let countrySlug = this.getAttribute('data-slug'); // Get slug from data attribute
        if (countrySlug) {
            window.location.href = '/countries/' + countrySlug; // Redirect to country page
        }
    });
});


</script>

<script src="{{ asset('js/magnific-popup.js') }}"></script>


   

</script>
@endpush
