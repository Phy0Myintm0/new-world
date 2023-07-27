@extends('front.layout')

@push('styles')
@endpush

@section('content')

<div class="row">
    <div class="col-xs-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Join Us</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row tm-services-row detail">
    <div class="col-xs-12 text-tengah">
        <h1 class="text-xs-center">
            <span>
            Join Us
            </span>
        </h1>
        {!! CRUDBooster::getSetting('joinus') !!}
    </div>
</div>
<!-- .row .tm-services-row -->
@endsection

@push('scripts')
<script type="text/javascript">

</script>
@endpush
