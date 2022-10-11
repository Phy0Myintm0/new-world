@extends('front.layout')

@push('styles')
@endpush

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <!-- <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Package</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div> -->
        <nav>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li>{{ $data['data']->title }}</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                <div class="col-lg-8">

                    <article class="blog-details">

                        <div class="post-img">
                            <img src="{{ asset($data['data']->img) }}" alt="Image of {{ $data['data']->title }}" class="img-fluid">
                        </div>

                        <h2 class="title">{{ $data['data']->title }}</h2>

                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                        href="#!">Admin</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="#!"><time datetime="{{ $data['data']->created_at }}">{{ $data['data']->created_at }}</time></a></li>
                                        
                                <li class="d-flex align-items-center"><i class="bi bi-folder"></i> <a
                                        href="#!">{{ $data['data']->cat }}</a></li>
                            </ul>
                        </div><!-- End meta top -->

                        <div class="content">
                            {!! $data['data']->desc !!}

                        </div><!-- End post content -->

                    </article><!-- End blog post -->

                    <!-- <div class="post-author d-flex align-items-center">
                        <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
                        <div>
                            <h4>{{ CRUDBooster::getSetting('appname') }}</h4>
                            <div class="social-links">
                                <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                            </div>
                            <p>
                                
                            </p>
                        </div>
                    </div> -->

                    <div class="comments">
                        <!-- <h4 class="comments-count">Comments</h4> -->

                    </div><!-- End blog comments -->

                </div>

                <div class="col-lg-4">

                    <div class="sidebar">

                        <div class="sidebar-item categories">
                            <h3 class="sidebar-title">Categories</h3>
                            <ul class="mt-3">
                                @foreach($data['categories'] as $item)
                                <li><a href="{{ url('blog/category').'/'.$item->id }}">{{ $item->title }} <span>(#)</span></a></li>
                                @endforeach
                            </ul>
                        </div><!-- End sidebar categories-->

                        <div class="sidebar-item recent-posts">
                            <h3 class="sidebar-title">Recent Posts</h3>

                            <div class="mt-3">
                                @foreach($data['recents'] as $item)
                                <div class="post-item mt-3">
                                    <img src="{{ asset($item->img) }}" alt="Image of {{ $item->title }}">
                                    <div>
                                        <h4><a href="{{ url('post').'/'.$item->slug }}">{{ $item->title }}</a></h4>
                                        <time datetime="{{ $item->created_at }}">{{ $item->created_at }}</time>
                                    </div>
                                </div><!-- End recent post item-->
                                @endforeach

    
                            </div>

                        </div><!-- End sidebar recent posts-->
                        <br>

                        <!-- <div class="sidebar-item tags">
                            <h3 class="sidebar-title">Tags</h3>
                            <ul class="mt-3">
                                <li><a href="#">App</a></li>
                                
                            </ul>
                        </div> -->
                        <!-- End sidebar tags-->

                    </div><!-- End Blog Sidebar -->

                </div>
            </div>

        </div>
    </section><!-- End Blog Details Section -->

</main><!-- End #main -->
@endsection

@push('scripts')
<script type="text/javascript">

</script>
@endpush
