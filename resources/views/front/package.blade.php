@extends('front.layout')

@push('styles')
@endpush

@section('content')
@php
if ($data['data']->img_header == NULL) {
    $img_header = asset('assets/img/iv-people.jpg');
} else {
    $img_header = asset($data['data']->img_header);
}

// footer 
if ($data['data']->img_bg == NULL) {
    $img_bg = asset('assets/img/iv-2.jpg');
} else {
    $img_bg = asset($data['data']->img_bg);
}
@endphp

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs hero custom parallax-window" data-speed="0.3" data-bleed="10" data-parallax="scroll" data-image-src="{{ $img_header }}">
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>{{ $data['data']->title }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row justify-content-center gy-4">

                    <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div class="content-logo">
                            @if($data['data']->img == NULL)
                                <img src="{{ asset('assets/img/drip-package.png') }}" class="img-fluid" alt="">
                            @else
                                <img src="{{ asset($data['data']->img) }}" class="img-fluid" alt="">
                            @endif
                        </div>
                    </div>
                    <!--End Icon Box -->

                </div>
            </div>
        </div>
        <!-- .icon -->

        <section class="transparan-bg portfolio-details stats-counter">
        <div class="container">
            <div class="row justify-content-between gy-4">

                <div class="offset-lg-2 col-lg-8">
                    <div class="portfolio-description text-center" data-aos="fade-up">
                        <div class="section-header custom">
                            <h2>{{ $data['data']->title }}</h2>
                        </div>
                        <div class="row justify-content-between mb-5">
                            <div class="col-md-4">
                                <div class="stats-item align-items-center">
                                    <h3>Price</h3>
                                    <p>Rp {{ shortNumber($data['data']->price) }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="stats-item align-items-center">
                                    <h3>Time</h3>
                                    <p>{{ $data['data']->time }}</p>
                                </div>
                            </div>

                        </div>
                        <p>
                            {!! $data['data']->desc !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- .container -->
        </section>

        <!-- <nav>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Package</li>
                    <li>{{ $data['data']->title }}</li>
                </ol>
            </div>
        </nav> -->
    </div><!-- End Breadcrumbs -->

    <section id="portfolio-details" class="portfolio-details stats-counter sections-bg">
        <div class="container">

            <div class="row justify-content-between gy-4">
                    
                <div class="offset-lg-2 col-lg-8">
                    <div class="portfolio-description text-center" data-aos="fade-up" data-aos-delay="100">
                        <h5 class="best-use">
                            Best Uses for {{ $data['data']->title }}
                        </h5>
                        <div class="row justify-content-between aos-init aos-animate services">
                            @foreach($data['bestuse'] as $item)
                            <div class="col-lg-3 col-md-6">
                                <div class="service-item  position-relative">
                                    <div class="icon">
                                        <i style="color:{{ $item->color }}" class="bi bi-{{ $item->img }}"></i>
                                    </div>
                                    <h3>{{ $item->title }}</h3>
                                </div>
                            </div><!-- End Service Item -->
                            @endforeach
                            
                        </div>
                    </div>
                </div>

            </div>
            <!-- .row -->
        </div>
    </section>
    <section id="portfolio-details" class="portfolio-details parallax-window" data-speed="0.3" data-bleed="10" data-parallax="scroll" data-image-src="{{ $img_bg }}">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-between gy-4">
                <div class="offset-lg-2 col-lg-8 includes">
                    <b>What is in it?</b>
                    <hr>
                    {!! $data['data']->include !!}
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio-details" class="portfolio-details stats-counter" style="background:#fff;">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-between gy-4">
                <div class="offset-lg-2 col-lg-8">
                    <div class="portfolio-info">
                        <h3>Booking Information</h3>
                        <p>If we have booking availability, we can usually arrive on-site within an hour. We recommend
                            calling for last minute bookings.</p><br>
                        <ul>
                            <li><a target="_blank" href="https://wa.me/{{ CRUDBooster::getSetting('whatsapp') }}?text=Hey,%20I%20want%20to%20book%20your%20{{ $data['data']->title }}%20package"
                                    class="btn-visit align-self-start">Book Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ asset('assets/vendor/parallax/parallax.min.js') }}"></script>

<script type="text/javascript">

</script>
@endpush
