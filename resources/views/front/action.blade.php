@extends('front.layout')

@push('styles')
@endpush

@section('content')

<div class="row">
    <div class="col-xs-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $data['data']->title_jp }} - {{ $data['data']->title_en }}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row justify-content-center tm-services-row">
    @foreach($data['activities'] as $item)
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="action-image">
                <a href="{{ url('activity').'/'.$item->slug }}">
                    <img loading="lazy" src="img/action-1.jpg">
                    <h3>
                        <span>{{ $item->title_jp }}</span>
                    </h3>
                </a>
            </div>
        </div>
    @endforeach
    
</div>
<!-- .row .tm-services-row -->
@endsection

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ asset('assets/vendor/parallax/parallax.min.js') }}"></script>

<script type="text/javascript">

</script>
@endpush
