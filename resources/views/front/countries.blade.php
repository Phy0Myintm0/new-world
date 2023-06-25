@extends('front.layout')

@push('styles')
<style>
    .container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  width: 100%;
  margin: 20px 0 80px;
}

.card {
  width: 300px;
  margin: 10px;
  background-color: white;
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.5);
}
.card:hover .card__caption {
  top: 50%;
  transform: translateY(-50%);
}
.card:hover .card__image {
  transform: translateY(-10px);
}
.card:hover .card__thumb::after {
  top: 0;
}
.card:hover .card__snippet {
  margin: 20px 0;
}
.card__thumb {
  position: relative;
  max-height: 400px;
  overflow: hidden;
}
@media (min-width: 1024px) {
  .card__thumb {
    max-height: 500px;
  }
}
.card__thumb::after {
  position: absolute;
  top: 0;
  display: block;
  content: "";
  width: 100%;
  height: 100%;
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.5) 40%, rgba(255, 255, 255, 0) 100%);
  transition: 0.3s;
}
@media (min-width: 1024px) {
  .card__thumb::after {
    top: calc(100% - 140px);
  }
}
.card__image {
  transition: 0.5s ease-in-out;
}
.card__caption {
  position: absolute;
  top: 50%;
  z-index: 1;
  padding: 0 20px;
  color: white;
  transform: translateY(-50%);
  text-align: center;
  transition: 0.3s;
}
@media (min-width: 1024px) {
  .card__caption {
    top: calc(100% - 110px);
    transform: unset;
  }
}
.card__title {
  display: -webkit-box;
  max-height: 85px;
  overflow: hidden;
  font-family: "Playfair Display", serif;
  font-size: 23px;
  line-height: 28px;
  text-shadow: 0px 1px 5px black;
  text-overflow: ellipsis;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
}
.card__snippet {
  display: -webkit-box;
  max-height: 150px;
  margin: 20px 0;
  overflow: hidden;
  font-family: "Roboto", sans-serif;
  font-size: 16px;
  line-height: 20px;
  text-overflow: ellipsis;
  transition: 0.5s ease-in-out;
  -webkit-line-clamp: 5;
  -webkit-box-orient: vertical;
}
@media (min-width: 1024px) {
  .card__snippet {
    margin: 60px 0;
  }
}
.card__button {
  display: inline-block;
  padding: 10px 20px;
  color: white;
  border: 1px solid white;
  font-family: "Roboto", sans-serif;
  font-size: 12px;
  text-transform: uppercase;
  text-decoration: none;
  transition: 0.3s;
}
.card__button:hover {
  color: black;
  background-color: white;
}

.card {
  margin: 10px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  width: 300px;
}
.card-header img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}
.card-body {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  padding: 20px;
  min-height: 250px;
}

.tag {
  background: #cccccc;
  border-radius: 50px;
  font-size: 12px;
  margin: 0;
  color: #fff;
  padding: 2px 10px;
  text-transform: uppercase;
  cursor: pointer;
}
.tag-teal {
  background-color: #47bcd4;
}
.tag-purple {
  background-color: #5e76bf;
}
.tag-pink {
  background-color: #cd5b9f;
}

.card-body p {
  font-size: 13px;
  margin: 0 0 40px;
}
.user {
  display: flex;
  margin-top: auto;
}

.user img {
  border-radius: 50%;
  width: 40px;
  height: 40px;
  margin-right: 10px;
}
.user-info h5 {
  margin: 0;
}
.user-info small {
  color: #545d7a;
}


</style>
@endpush

@section('content')

<div class="row">
    <div class="col-xs-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $data['data']->title }}</li>
            </ol>
            </nav>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-11 offset-md-1 text-tengah">
        <h3 class="tm-about-title">
            <span>{{ $data['data']->title }}</span>
        </h3>
    </div>
</div>

<div class="container">
    <div class="col-xs-12 offset-md-1 col-md-10">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, enim numquam. Asperiores quod dicta ab, sed dolorum aperiam dolores qui, consectetur delectus dolorem aspernatur molestias odio rerum nesciunt repudiandae fugiat! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem explicabo, assumenda dignissimos nulla facere officia, unde tempore ex, dolores natus excepturi voluptatem eveniet porro debitis inventore. Consequatur vero a ea? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia impedit ut debitis rerum in nihil repellendus blanditiis aperiam ipsum hic veniam voluptatum aliquam, sapiente, voluptas nulla explicabo, est possimus sed?
    </div>
</div>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto:wght@300&display=swap" rel="stylesheet">

<div class="container">
	<div class="card">
		<figure class="card__thumb">
			<img src="https://source.unsplash.com/75S9fpDJVdo/300x510" alt="Picture by Kyle Cottrell" class="card__image">
			<figcaption class="card__caption">
				<h2 class="card__title">NASA Has Found Hundreds Of Potential New Planets</h2>
				<p class="card__snippet">NASA released a list of 219 new “planet candidates” discovered by the Kepler space telescope, 10 of which are similar to Earth’s size and may be habitable by other life forms.</p>
				<a href="/post/example-success-story-post" class="card__button">Read more</a>
			</figcaption>
		</figure>
	</div>

	<div class="card">
		<figure class="card__thumb">
			<img src="https://source.unsplash.com/71u2fOofI-U/300x510" alt="Picture by Nathan Dumlao" class="card__image">
			<figcaption class="card__caption">
				<h2 class="card__title">This Is Your Body And Brain On Coffee</h2>
				<p class="card__snippet">Drinking more caffeine during the coronavirus lockdown? Here's how it can affect you over time and advice on making it better for you.</p>
				<a href="" class="card__button">Read more</a>
			</figcaption>
		</figure>
	</div>

	<div class="card">
		<figure class="card__thumb">
			<img src="https://source.unsplash.com/qXMpNtNp1uE/300x510" alt="Picture by Daniel Lincoln" class="card__image">
			<figcaption class="card__caption">
				<h2 class="card__title">Why You Should Bring Your Dog To Work</h2>
				<p class="card__snippet">On Friday, offices around the country celebrated the 15th annual Take Your Dog to Work Day. Though the event's primary goal is to raise awareness for pet adoption, the unanticipated impact may be a slightly more relaxing work environment for any office choosing to participate.</p>
				<a href="" class="card__button">Read more</a>
			</figcaption>
		</figure>
	</div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-tengah">
        <h3 class="">
            <span>{{ $data['data']->title }}'s Activities</span>
        </h3>
    </div>
</div>

<ul class="row justify-content-md-center">
    @foreach($data['actions'] as $item)
    <li class="tm-tab-link-item col-md-4">
        <a id="tab2" href="{{ url('action').'/'.$item->slug }}" class="tm-tab-link">
            <i class="fa fa-{{ $item->img }} tm-tab-icon"></i>
            <span class="tm-tab-link-label">
                {{ $item->title_jp }}
                <br>{{ $item->title_en }}
            </span>
        </a>
    </li>
    @endforeach
</ul>

<br><br><br>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-tengah">
        <h3 class="">
            <span>Photos on {{ $data['data']->title }}</span>
        </h3>
    </div>
</div>

<div class="row story-page">
    <div class="col-md-3">
        <div class="card mb-4 box-shadow">

            <img class="card-img-top"
                data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                src="https://picsum.photos/seed/sasd/300/300"
                data-holder-rendered="true">
                <br>
                <p class="text-center">Lorem ipsum asda Asdasdafaa. asdasdsa sadasdas sssss.</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-4 box-shadow">

            <img class="card-img-top"
                data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                src="https://picsum.photos/seed/ffffvv/300/300"
                data-holder-rendered="true">
                <br>
                <p class="text-center">Lorem ipsum asda Asdasdafaa. asdasdsa sadasdas sssss.</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-4 box-shadow">

            <img class="card-img-top"
                data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                src="https://picsum.photos/seed/picsum/300/300"
                data-holder-rendered="true">
                <br>
                <p class="text-center">Lorem ipsum asda Asdasdafaa. asdasdsa sadasdas sssss.</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-4 box-shadow">

            <img class="card-img-top"
                data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                src="https://picsum.photos/seed/asdas/300/300"
                data-holder-rendered="true">
                <br>
                <p class="text-center">Lorem ipsum asda Asdasdafaa. asdasdsa sadasdas sssss.</p>
        </div>
    </div>
</div>

<br><br><br>

@endsection

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ asset('assets/vendor/parallax/parallax.min.js') }}"></script>

<script type="text/javascript">

</script>
@endpush
