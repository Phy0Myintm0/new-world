@extends('front.layout')

@push('styles')
@endpush

@section('content')
<div class="row tm-row-margin-b tm-content-boxes-row">

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 img-logo">
        <img src="{{ asset('vendor/img/new-world.png') }}" alt="new-world-logo">
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 offset-md-6">
        
        <form class="form-inline">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </form>
        <p>Please choose keywords from the circle to start!</p>
        
    </div>

</div>

<div class="row tm-row-margin-b tm-content-boxes-row">
    <div class="col-md-12 bunderan">
        <div class="icon"><img src="{{ asset('vendor/img/new_world_center.png') }}" alt="">
            <ul class="menu">
            @foreach($data['keywords'] as $item)  
                <li class="spread">
                    <a class="unit" href="list.html">
                        <span class="text-bunder">{{ $item->title_jp }}<br>{{ $item->title_en }}</span>
                    </a>
                </li>
            @endforeach
            
            </ul>
        </div>
    </div>
    <!-- .col-md-12 -->

</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-tengah">
        <h3 class="text-xs-center">
            <span>Actions</span>
        </h3>
    </div>
</div>
<ul class="row">
    @foreach($data['actions'] as $item)
    <li class="tm-tab-link-item col-md-3">
        <a id="tab2" href="actions.html" class="tm-tab-link">
            <i class="fa fa-{{ $item->img }} tm-tab-icon"></i>
            <span class="tm-tab-link-label">
                {{ $item->title_jp }}
                <br>{{ $item->title_en }}
            </span>
        </a>
    </li>
    @endforeach

</ul>
@endsection

@push('scripts')
<script type="text/javascript">
    
</script>
@endpush
