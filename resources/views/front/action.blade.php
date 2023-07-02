@extends('front.layout')

@push('styles')
<style>
.bg-image {
    @if($data['data']->bg==null)
        background: url('{{ asset("vendor/img/action-bg.jpg") }}') no-repeat center center fixed; 
    @else
        background: url('{{ asset($data['data']->bg) }}') no-repeat center center fixed; 
    @endif
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>
@endpush

@section('content')

<div class="row">
    <div class="col-xs-12">
        <nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li><li class="breadcrumb-item active" aria-current="page">{{ $data['data']->title_en }}</li></ol>
        </nav>
    </div>
</div>

<div class="col-xs-12 col-md-12 text-tengah">
    <h3 class="tm-about-title text-center text-judul-action">
        <span>{{ $data['data']->title_en }}</span>
    </h3>
    <div class="text-action">
        {!! $data['data']->desc_en !!}
    </div>
</div>

<div class="row justify-content-center tm-services-row">

@if(!$data['activities']->isEmpty())
    @foreach($data['activities'] as $item)
        <div class="col-xs-12 col-sm-6 col-md-4">
            <img class="action-country" src="{{ asset($item->logo) }}">
            <div class="action-image">
                <a href="{{ url('activity').'/'.$item->slug }}">
                    @if($item->photo_cover == NULL)
                        <img loading="lazy" src="{{ asset('vendor/img/default-img.jpg') }}">
                    @else
                        <img src="{{ asset($item->photo_cover) }}" class="img-fluid" alt="">
                    @endif
                    
                    <h3>
                        <span>{{ $item->title_en }}</span>
                    </h3>
                    <div class="text-action">
                    {{ Str::limit(strip_tags($item->desc_en), 150) }}
                    </div>
                </a>
            </div>
        </div>
    @endforeach
@else
    <div class="no-data">
        <img src="{{ asset('vendor/img/no-data.png') }}" alt="Image" class="img-responsive tm-pad-0">
    </div>
@endif
    
</div>
<!-- .row .tm-services-row -->
@endsection

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ asset('assets/vendor/parallax/parallax.min.js') }}"></script>

<script type="text/javascript">

</script>
@endpush
