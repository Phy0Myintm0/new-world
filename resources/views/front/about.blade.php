@extends('front.layout')

@push('styles')
@endpush

@section('content')

<div class="row">
    <div class="col-xs-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Who we are</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row tm-services-row detail">
    <div class="col-xs-12 text-tengah">
        <h3 class="text-xs-center">
            <span>
            Who we are
            </span>
        </h3>
        {!! CRUDBooster::getSetting('about') !!}
    </div>
</div>
<!-- .row .tm-services-row -->
@endsection

@push('scripts')
<script type="text/javascript">

</script>
@endpush
