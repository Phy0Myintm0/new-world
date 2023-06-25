@extends('front.layout')

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

<style>
    #map {
        min-height: 500px;
    }
    .electricblaze-yxyKslpMBkjKVPcsWvD4 {
        display: none;
    }

</style>
@endpush

@section('content')
<div class="row tm-content-boxes-row">

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 img-logo">
        <img src="{{ asset('vendor/img/new-world.png') }}" alt="new-world-logo">
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 offset-md-6">

        <form class="form-inline">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </form>
        <p>Please choose keywords from the circle to start!</p>

    </div>
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
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-tengah">
        <h3 class="text-xs-center big-font">
            <span>Community Network Without Border</span>
        </h3>
        <div class="text-center intro-page">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum facilisis est id
                condimentum. Vivamus dignissim tellus quis fringilla posuere. Pellentesque habitant morbi tristique
                senectus et netus et malesuada fames ac turpis egestas. Interdum et malesuada fames ac ante ipsum primis
                in faucibus. Sed consectetur ut massa quis pretium. Integer id erat metus. Nulla aliquam rutrum enim,
                eget viverra risus. Nullam est lorem, cursus sit amet dignissim ut, pretium eget mi. Praesent in lorem
                aliquam, venenatis ex non, dictum nisi. Quisque vel pulvinar lacus. Ut iaculis, mi vitae tristique
                placerat, turpis ipsum vulputate orci, in scelerisque mauris quam sit amet dolor. Mauris pellentesque a
                nunc at malesuada. Vestibulum tristique lacinia turpis ac vulputate.</p>
            <p>
                Curabitur cursus ipsum nibh, eget egestas enim ornare non. Donec vitae mi mauris. Nulla quis scelerisque
                erat. Nulla iaculis ligula vitae mauris lacinia, vulputate sagittis metus sodales. Vestibulum sed
                dignissim urna, id dignissim dolor. Nunc molestie sapien ac aliquet lobortis. Cras vulputate maximus
                varius. Nullam quis elementum velit, in aliquam tellus. Aliquam laoreet fermentum sapien quis ultricies.
                Etiam felis libero, ultrices eget mauris sed, iaculis bibendum ligula. Integer orci lectus, gravida
                interdum sem tincidunt, molestie efficitur erat. Proin tellus elit, sodales et mollis dictum, lobortis a
                orci. Phasellus semper, orci blandit maximus blandit, sapien mauris maximus lorem, at tempus erat turpis
                a arcu.
            </p>
        </div>
    </div>
</div>


<br><br><br>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-tengah">
        <h3 class="">
            <span>Success Story</span>
        </h3>
    </div>
</div>

<div class="row story-page">
    <div class="col-md-4">
        <div class="card mb-4 box-shadow">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="label label-default">2023年 1月 13日</span></h1>
                </div>
                <p class="card-text">This is a wider card with supporting text.</p>
            </div>
            <img class="card-img-top"
                data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                src="https://picsum.photos/seed/agung/500/300"
                data-holder-rendered="true">
        </div>
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

<br><br><br>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-tengah">
        <h3 class="">
            <span>Category</span>
        </h3>
    </div>
</div>

<ul class="row justify-content-md-center">
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

<br><br><br>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-tengah">
        <h3 class="">
            <span>Photos</span>
        </h3>
    </div>
</div>

<div class="row story-page">
    <div class="col-md-3">
        <div class="card mb-4 box-shadow">

            <img class="card-img-top"
                data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                src="https://picsum.photos/seed/sasd/300/300"
                data-holder-rendered="true">
                <br>
                <p class="text-center">Lorem ipsum asda Asdasdafaa. asdasdsa sadasdas sssss.</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-4 box-shadow">

            <img class="card-img-top"
                data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                src="https://picsum.photos/seed/ffffvv/300/300"
                data-holder-rendered="true">
                <br>
                <p class="text-center">Lorem ipsum asda Asdasdafaa. asdasdsa sadasdas sssss.</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-4 box-shadow">

            <img class="card-img-top"
                data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                src="https://picsum.photos/seed/picsum/300/300"
                data-holder-rendered="true">
                <br>
                <p class="text-center">Lorem ipsum asda Asdasdafaa. asdasdsa sadasdas sssss.</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-4 box-shadow">

            <img class="card-img-top"
                data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                src="https://picsum.photos/seed/asdas/300/300"
                data-holder-rendered="true">
                <br>
                <p class="text-center">Lorem ipsum asda Asdasdafaa. asdasdsa sadasdas sssss.</p>
        </div>
    </div>
</div>

<br><br><br>

<div class="row">

    <div class="col-md-12">
        <h2>RSS</h2>
        <script src="https://s.electricblaze.com/widget.js" defer></script>
        <div class="electricblaze-id-2Uhx9Oy"></div>
    </div>
</div>

<br><br><br>
@endsection

@push('scripts')
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<script>
    $(function () {
        setLocation = [21.2442454, 94.6914487];
        var map = L.map('map').setView(setLocation, 14);
        L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors',
            maxZoom: 4,
        }).addTo(map);
        map.attributionControl.setPrefix(false);
        // var marker = new L.marker(setLocation, {
        //     draggable: false
        // });
        // map.addLayer(marker);

        const LeafIcon = L.Icon.extend({
            options: {
                shadowUrl: 'leaf-shadow.png',
                iconSize:     [45, 45],
                iconAnchor:   [22, 94],
                shadowAnchor: [4, 62],
                popupAnchor:  [-3, -76]
            }
        });

        const greenIcon = new LeafIcon({iconUrl: 'img/indonesia.png'});
        const redIcon = new LeafIcon({iconUrl: 'img/cambodia.png'});
        const orangeIcon = new LeafIcon({iconUrl: 'img/japan.png'});
        const indiaIcon = new LeafIcon({iconUrl: 'img/india.png'});

        const mGreen = L.marker([-0.663646, 113.280315], {icon: greenIcon}).bindPopup('<a href="countries/indonesia">Indonesia</a>.').addTo(map);
        const mRed = L.marker([11.561753, 104.667034], {icon: redIcon}).bindPopup('<a href="countries/cambodia">Cambodia</a>').addTo(map);
        const mOrange = L.marker([31.161974, 130.682658], {icon: orangeIcon}).bindPopup('Japan').addTo(map);
        const mIndia = L.marker([20.998287, 79.969769], {icon: indiaIcon}).bindPopup('India').addTo(map);
    })

</script>
@endpush
