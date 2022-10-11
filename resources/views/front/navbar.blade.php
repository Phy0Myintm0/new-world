<!-- ======= Header ======= -->
<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a
                    href="{{ CRUDBooster::getSetting('e_mail') }}">{{ CRUDBooster::getSetting('e_mail') }}</a></i>
            <i class="bi bi-phone d-flex align-items-center"><span><a target="_blank" href="https://wa.me/{{ CRUDBooster::getSetting('whatsapp') }}">{{ CRUDBooster::getSetting('whatsapp') }}</a></span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
    </div>
</section><!-- End Top Bar -->

<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/white_drip.png') }}" alt="">
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ url('/') }}/#hero">Home</a></li>
                <li><a href="{{ url('/') }}/#about">About</a></li>
                <li class="dropdown"><a href="#"><span>Drips</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        @foreach($data['footer_menu'] as $item)
                        <li><a href="{{ url('/package').'/'.$item->slug }}">{{ $item->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ url('/faq') }}">FAQ</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/service-area') }}">Service Area</a></li>
            </ul>
        </nav><!-- .navbar -->

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header><!-- End Header -->
<!-- End Header -->
