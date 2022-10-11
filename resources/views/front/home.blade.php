@extends('front.layout')

@push('styles')
@endpush

@section('content')
<main>
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero parallax-window" data-speed="0.3" data-bleed="10" data-parallax="scroll" data-image-src="{{ asset('assets/img/beach.jpg') }}">
    <div class="container position-relative">
        <div class="row gy-5 parallax-slider" data-aos="fade-in">
            <div
                class="banner-beranda offset-lg-3 col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-lg-start" style="margin-bottom: 30px;">
                <img src="{{ asset('assets/img/drip_logo_no-text.png') }}" class="front-logo" alt="" data-aos="zoom-out" data-aos-delay="100">
                <h3>Welcome to</h3>
                <h2>Drip Wellness Bali</h2>
                <p>Mobile IV Infusions ~ Vitamins | Electrolytes ~ Home Care</p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#services" class="btn-get-started">Our Packages</a>
                </div>
            </div>
            
        </div>
    </div>



    </div>
</section>
<!-- End Hero Section -->

<!-- <main id="main"> -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="content ps-0 ps-lg-5">
                        <h3>What we do?</h3>
                        <p>
                        We offer on-demand iv drip blends with vitamins to defense, boosting and recovery immunity. Ours iv drip treatment blends with fluids & vitamins delivered through right into your bloodstream for highest level of supplementation and fastest absorptions. Farewell to low energy, hangovers, food poisoning, diarrhea, migraines, cold and dehydration. Say hay to health and energy like you’ve never imagined before. </p>
                        <p>The best part, we can give this to you without you have to leave you comport place. Prices have been included it all, without hidden fees. 
                        </p>

                        <!-- <div class="position-relative mt-4">
                            <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4"> 
                    <img style="width:50%" src="{{ asset('assets/img/patients.png') }}" class="img-fluid rounded-4 mb-4" alt="">
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Our Service Section ======= -->
    <section id="services" class="team image parallax-window" data-speed="0.3" data-bleed="10" data-parallax="scroll" data-image-src="{{ asset('assets/img/packages.jpg') }}">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Drip Packages</h2>
                <p>This is all of our packages. Experience all the benefits of IV therapy in the comfort of your own home. <br>Select from one of the following options:</p>
            </div>

            <div class="row justify-content-center gy-4">
            @foreach($data['packages'] as $item)
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="assets/img/drip-package.png" class="img-fluid" alt="">
                        <h4>{{ $item->title }}</h4>
                        <span>Rp {{ shortNumber($item->price) }}</span>
                        <div>
                            <a class="btn-info" href="/package/{{ $item->slug }}">More Info</a>
                        </div>
                    </div>
                </div><!-- End item -->
            @endforeach

            </div>

        </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Blog</h2>
                <p>Our recent blog posts</p>
            </div>

            <div class="row gy-4">
                @foreach($data['blog'] as $item)
                <div class="col-xl-4 col-md-6">
                    <article>

                        <div class="post-img">
                            <img src="{{ asset($item->img) }}" alt="Image of {{ $item->title }}" class="img-fluid">
                        </div>

                        <p class="post-category">{{ $item->cat }}</p>

                        <h2 class="title">
                            <a href="{{ url('post').'/'.$item->slug }}">{{ $item->title }}</a>
                        </h2>

                        <div class="d-flex align-items-center">
                            <div class="post-meta">
                                <p class="post-date">
                                    <time datetime="2022-01-01">{{ $item->created_at }}</time>
                                </p>
                            </div>
                        </div>

                    </article>
                </div><!-- End post list item -->
                @endforeach

            </div><!-- End recent posts list -->

        </div>
    </section><!-- End Recent Blog Posts Section -->

</main>
@endsection

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ asset('assets/vendor/parallax/parallax.min.js') }}"></script>

<script type="text/javascript">
    
</script>
@endpush
