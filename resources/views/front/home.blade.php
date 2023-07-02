@extends('front.layout')

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
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
<div class="row">
    <div class="card-body" id="map" style="width: 100%; height: 400px;"></div>
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
        <h3 class="text-xs-center big-font">
            <span><i>C</i>ommunity <i>N</i>etwork <i>W</i>ithout <i>B</i>order</span>
        </h3>
        <div class="text-center intro-page">
            {!! CRUDBooster::getSetting("intro_text") !!}
        </div>
    </div>
</div>

<div class="row story-page section">
    <div class="col-xs-12 text-tengah">
        <div class="section-header">
            <h3><span>Success Story</span></h3>
            <p>These articles below are our success story with the communities around the world.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="#!">
                <div class="card mb-4 box-shadow">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="label label-default"><i class="fa fa-clock-o"></i> February 21, 2022</span>
                            </h1>
                        </div>
                        <h5>Short Title TEst Asdas</h5>
                        <p class="card-text">Short Description lorasfsd asdfa sdfasdf.</p>
                    </div>
                    <img class="card-img-top"
                        data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                        alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                        src="https://picsum.photos/seed/agung/500/300" data-holder-rendered="true">
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
                    src="https://picsum.photos/seed/dddww/500/300" data-holder-rendered="true">
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
                    src="https://picsum.photos/seed/aacv/500/300" data-holder-rendered="true">
            </div>
        </div>
    </div>
    <!-- .row-fluid -->
</div>

<div class="row section cwb-category">
    <div class="col-xs-12 text-tengah">
        <div class="section-header">
            <h3><span>CWB Category</span></h3>
            <p>These are our comunity work, these community work divided into some category.</p>
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

<div class="row story-page section">
    <div class="col-xs-12 text-tengah">
        <div class="section-header">
            <h3><span>Photo Gallery</span></h3>
            <p>These are our photos doing some activities with the young and others in each of the community.</p>
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
            <h3><span>Instagram</span></h3>
            <p>Our activites on social media.</p>
        </div>
    </div>

    <div class="col-md-12">
        <script src="https://s.electricblaze.com/widget.js" defer></script>
        <div class="electricblaze-id-2Uhx9Oy"></div>
    </div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

@endsection

@push('scripts')
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<script>
    $(function () {
        setLocation = [17.8852266, 100.7893092];
        var map = L.map('map', null, {
            zoomControl: false
        }).setView(setLocation, 14);
        map.removeControl(map.zoomControl);
        // 
        L.tileLayer('https://{s}.basemaps.cartocdn.com/light_nolabels/{z}/{x}/{y}{r}.png', {
            // L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.jpg', {
            maxZoom: 4,
            minZoom: 4,
        }).addTo(map);
        map.attributionControl.setPrefix(false);
        // var marker = new L.marker(setLocation, {
        //     draggable: false
        // });
        // map.addLayer(marker);

        const LeafIcon = L.Icon.extend({
            options: {
                shadowUrl: 'leaf-shadow.png',
                iconSize: [45, 45],
                iconAnchor: [22, 94],
                shadowAnchor: [4, 62],
                popupAnchor: [-3, -76]
            }
        });

        const greenIcon = new LeafIcon({
            iconUrl: 'img/indonesia.png'
        });
        const redIcon = new LeafIcon({
            iconUrl: 'img/cambodia.png'
        });
        const orangeIcon = new LeafIcon({
            iconUrl: 'img/japan.png'
        });
        const indiaIcon = new LeafIcon({
            iconUrl: 'img/india.png'
        });

        const mGreen = L.marker([-0.663646, 113.280315], {
            icon: greenIcon
        }).bindPopup('<a href="countries/indonesia">CWB Indonesia</a>').addTo(map);
        const mRed = L.marker([11.561753, 104.667034], {
            icon: redIcon
        }).bindPopup('<a href="countries/cambodia">CWB Cambodia</a>').addTo(map);
        const mOrange = L.marker([31.161974, 130.682658], {
            icon: orangeIcon
        }).bindPopup('Japan').addTo(map);
        const mIndia = L.marker([20.998287, 79.969769], {
            icon: indiaIcon
        }).bindPopup('India').addTo(map);
    })

    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function () {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

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
                titleSrc: function (item) {
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
            disableOn: function () {
                return $(window).width() > 640;
            }
        });

    });

    //# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFBQSxDQUFBLENBQUUsZUFBRixDQUFrQixDQUFDLGFBQW5CLENBQ0U7SUFBQSxJQUFBLEVBQU0sT0FBTjtJQUNBLG1CQUFBLEVBQXFCLElBRHJCO0lBRUEsY0FBQSxFQUFnQixLQUZoQjtJQUdBLFNBQUEsRUFBVyw4QkFIWDtJQUlBLEtBQUEsRUFDRTtNQUFBLFdBQUEsRUFBYSxJQUFiO01BQ0EsUUFBQSxFQUFVLFFBQUEsQ0FBQyxJQUFELENBQUE7ZUFDUixJQUFJLENBQUMsRUFBRSxDQUFDLElBQVIsQ0FBYSxZQUFiLENBQTBCLENBQUMsSUFBM0IsQ0FBQSxDQUFBLElBQXFDLElBQUksQ0FBQyxFQUFFLENBQUMsSUFBUixDQUFhLE9BQWI7TUFEN0I7SUFEVixDQUxGO0lBUUEsSUFBQSxFQUNFO01BQUEsT0FBQSxFQUFTO0lBQVQsQ0FURjs7SUFXQSxPQUFBLEVBQ0U7TUFBQSxPQUFBLEVBQVMsSUFBVDtNQUNBLGtCQUFBLEVBQW9CLEtBRHBCO01BRUEsUUFBQSxFQUFVO0lBRlYsQ0FaRjtJQWVBLFNBQUEsRUFBVyxRQUFBLENBQUEsQ0FBQTthQUNULENBQUEsQ0FBRSxNQUFGLENBQVMsQ0FBQyxLQUFWLENBQUEsQ0FBQSxHQUFvQjtJQURYO0VBZlgsQ0FERjtBQUFBIiwic291cmNlc0NvbnRlbnQiOlsiJCgnLmdhbGxlcnktbGluaycpLm1hZ25pZmljUG9wdXBcbiAgdHlwZTogJ2ltYWdlJ1xuICBjbG9zZU9uQ29udGVudENsaWNrOiB0cnVlXG4gIGNsb3NlQnRuSW5zaWRlOiBmYWxzZVxuICBtYWluQ2xhc3M6ICdtZnAtd2l0aC16b29tIG1mcC1pbWctbW9iaWxlJ1xuICBpbWFnZTogXG4gICAgdmVydGljYWxGaXQ6IHRydWVcbiAgICB0aXRsZVNyYzogKGl0ZW0pIC0+XG4gICAgICBpdGVtLmVsLmZpbmQoJ2ZpZ2NhcHRpb24nKS50ZXh0KCkgfHwgaXRlbS5lbC5hdHRyKCd0aXRsZScpXG4gIHpvb206XG4gICAgZW5hYmxlZDogdHJ1ZVxuICAgICMgZHVyYXRpb246IDMwMFxuICBnYWxsZXJ5OlxuICAgIGVuYWJsZWQ6IHRydWVcbiAgICBuYXZpZ2F0ZUJ5SW1nQ2xpY2s6IGZhbHNlXG4gICAgdENvdW50ZXI6ICcnXG4gIGRpc2FibGVPbjogLT5cbiAgICAkKHdpbmRvdykud2lkdGgoKSA+IDY0MCAiXX0=
    //# sourceURL=coffeescript

</script>
@endpush
