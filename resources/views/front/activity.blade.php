@extends('front.layout')

@push('styles')
@endpush

@section('content')

<div class="row">
        <div class="col-xs-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('keyword').'/'.$data['data']->keyword_slug }}">{{ $data['data']->keyword_jp }} - {{ $data['data']->keyword_en }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $data['data']->title_en }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row tm-services-row detail">
        <div class="col-xs-12 col-sm-12 col-md-4 tm-services-col-left">
            <div>
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/{{ $data['data']->youtube }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <span class="badge badge-primary">{{ $data['data']->action_en }}</span>
                <div class="menu-detail tm-header-gallery">
                    <!-- <a href="img/list-1.jpg">
                        <img src="img/list-1.jpg" alt="Image"
                        class="img-fluid tm-header-img col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-pad-0">
                    </a>
                    <a href="img/detail-1.jpg">
                        <img src="img/detail-1.jpg" alt="Image"
                        class="img-fluid tm-header-img col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-pad-0">
                    </a>
                    <a href="img/detail-2.jpg">
                        <img src="img/detail-2.jpg" alt="Image"
                        class="img-fluid tm-header-img col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-pad-0">
                    </a>
                    <a href="img/detail-3.jpg">
                        <img src="img/detail-3.jpg" alt="Image"
                        class="img-fluid tm-header-img col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-pad-0">
                    </a> -->
                </div>
                <ul class="list-group">
                    @foreach($data['links'] as $item)
                    <li class="list-group-item">
                        <a target="_BLANK" href="@if($item->file!=null) {{ asset($item->file) }} @else {{ url($item->url) }} @endif"><i class="fa fa-chevron-right"></i> {{ $item->title }} [@if($item->file!=null){{"PDF"}}@else{{"URL"}}@endif]</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-8 tm-services-col-right">
            <div class="tm-services-box detail">
                <p class="country-text tm-blue-text">Myanmar</p>
                <h3>{{ $data['data']->title_en }}</h3>
                <p>{!! $data['data']->desc_en !!}</p>

                <hr>
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
        </div>
    </div>
    <!-- .row .tm-services-row -->


@endsection

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ asset('assets/vendor/parallax/parallax.min.js') }}"></script>

<script type="text/javascript">

</script>
@endpush
