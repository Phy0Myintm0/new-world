<!-- Navigation -->
<div class="row">
    <div class="col-lg-12 head">
        <nav class="navbar">
            
            <div id="tmNavbar">
                <div class="nav navbar-nav tm-nav">
                    
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0 tm-nav-item-pair tm-dummy-nav-item">
                        <div class="nav-item none">
                            @if(Request::segment(1) != null)
                                <a href="{{ url('/') }}"><img class="white-logo" src="{{ asset('vendor/img/new-world-putih.png') }}" alt="logo new world"></a>
                            @endif
                        </div>
                        <div class="nav-item none">
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0 tm-nav-item-pair">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 nav-item">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 nav-item">
                            <a class="nav-link" href="{{ url('about') }}">Who we are</a>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0 tm-nav-item-pair">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 nav-item">
                            <a class="nav-link" href="{{ url('contact') }}">Contact us</a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 nav-item">
                            <a class="nav-link" href="#!">Eng/日本語</a>
                        </div>
                    </div>                            
                    
                </div>    
            </div>                    
        </nav>     
    </div>
</div> <!-- row -->
