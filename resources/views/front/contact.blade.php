@extends('front.layout')

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
@endpush

@section('content')

<div class="row">
    <div class="col-xs-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 text-tengah">
        <h3 class="text-xs-center">
            <span>
            Contact us
            </span>
        </h3>
    </div>
    <div class="col-md-6">
        <form>
            <div class="form-group">
                <label for="inputAddress">Name</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Your Name">
            </div>
            <div class="form-group">
                <label for="inputAddress2">e-mail</label>
                <input type="email" class="form-control" id="inputAddress2"
                    placeholder="your@emailaddress">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Message</label>
                <textarea class="form-control" name="" id="" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col-md-6">
        <div id="map" style="width: 100%; height: 400px;"></div>
    </div>
</div>
<!-- .row .tm-services-row -->

@endsection

@push('scripts')
<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
<script type="text/javascript">
    /* Google map
    ------------------------------------------------*/
    const map = L.map('map').setView([51.505, -0.09], 13);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    const marker = L.marker([51.5, -0.09]).addTo(map)
        .bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();

    const circle = L.circle([51.508, -0.11], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 500
    }).addTo(map).bindPopup('I am a circle.');

    const polygon = L.polygon([
        [51.509, -0.08],
        [51.503, -0.06],
        [51.51, -0.047]
    ]).addTo(map).bindPopup('I am a polygon.');


    const popup = L.popup()
        .setLatLng([51.513, -0.09])
        .setContent('I am a standalone popup.')
        .openOn(map);

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent(`You clicked the map at ${e.latlng.toString()}`)
            .openOn(map);
    }

    map.on('click', onMapClick);

</script>
@endpush
