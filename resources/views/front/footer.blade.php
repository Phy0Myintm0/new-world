<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                <a href="/" class="logo d-flex align-items-center">
                    <span><img src="{{ asset('assets/img/white_drip.png') }}" alt=""></span>
                </a>
                <p>The Food and Drug Administration has not evaluated the services provided by The Drip Wellness Bali. The products offered are not intended to diagnose, treat, cure or prevent any disease. The material on this website is provided for informational purposes only and is not medical advice. Always consult your physician before beginning any therapy program.</p>
                <div class="social-links d-flex mt-4">
                    <!--<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>-->
                    <!--<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>-->
                    <a href="https://www.instagram.com/drip.wellnessbali/" class="instagram"><i class="bi bi-instagram"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6 footer-links">
                <h4>Drip Packages</h4>
                <ul>
                    @foreach($data['footer_menu'] as $item)
                    <li><a href="/package/{{ $item->slug }}">{{ $item->title }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p>
                    <!-- A108 Adam Street <br>
                    New York, NY 535022<br>
                    United States <br><br> -->
                    <strong>WA/Call:</strong>{{ CRUDBooster::getSetting('whatsapp') }}<br>
                    <strong>Email:</strong> {{ CRUDBooster::getSetting('e_mail') }}<br>
                </p>

            </div>

        </div>
    </div>

    <div class="container mt-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Drip Wellness Bali</span></strong>. @if(Date('Y')!='2022') 2022 - @endif {{ Date('Y') }}. All Rights Reserved. <br><small>Made with ❤ by PCS Bali</small>
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
    </div>

</footer><!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>
