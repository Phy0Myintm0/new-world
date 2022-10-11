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
                
                <li class="spread">
                    <a class="unit" href="list.html">
                        <span class="text-bunder">森 - 土地<br>Forest/land</span>
                    </a>
                </li>
                
                <li class="spread">
                    <a class="unit" href="list.html">
                        <span class="text-bunder">森<br>Water</span>
                    </a>
                </li>
                
                <li class="spread">
                    <a class="unit" href="list.html">
                        <span class="text-bunder">草<br>Herbs</span>
                    </a>
                </li>
                
                <li class="spread">
                    <a class="unit" href="list.html">
                        <span class="text-bunder">協同組合<br>Cooperative</span>
                    </a>
                </li>
                
                <li class="spread">
                    <a class="unit" href="list.html">
                        <span class="text-bunder">食<br>Food</span>
                    </a>
                </li>
                
                <li class="spread">
                    <a class="unit" href="list.html">
                        <span class="text-bunder">手芸<br>Handicraft</span>
                    </a>
                </li>
                
                <li class="spread">
                    <a class="unit" href="list.html">
                        <span class="text-bunder">伝統文化<br>Traditional Culture</span>
                    </a>
                </li>
                
                <li class="spread">
                    <a class="unit" href="list.html">
                        <span class="text-bunder">畑<br>Field</span>
                    </a>
                </li>
                
                <li class="spread">
                    <a class="unit" href="list.html">
                        <span class="text-bunder">田んぼ<br>Rice Field</span>
                    </a>
                </li>

                
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
    <li class="tm-tab-link-item col-md-3">
        <a id="tab2" href="actions.html" class="tm-tab-link">
            <i class="fa fa-object-group tm-tab-icon"></i>
            <span class="tm-tab-link-label">
                ワークショップ
                <br>Workshop
            </span>
        </a>
    </li>

    <li class="tm-tab-link-item col-md-3">
        <a id="tab3" href="actions.html" class="tm-tab-link">
            <i class="fa fa-gamepad tm-tab-icon"></i>
            <span class="tm-tab-link-label">
                学び
                <br>Learn/Game
            </span>
        </a>
    </li>

    <li class="tm-tab-link-item col-md-3">
        <a id="tab4" href="actions.html" class="tm-tab-link">
            <i class="fa fa-suitcase tm-tab-icon"></i>
            <span class="tm-tab-link-label">
                ツアー
                <br>Tour
            </span>
        </a>
    </li>

    <li class="tm-tab-link-item col-md-3">
        <a id="tab5" href="actions.html" class="tm-tab-link">
            <i class="fa fa-lightbulb-o tm-tab-icon"></i>
            <span class="tm-tab-link-label">
                アイデア
                <br>Idea
            </span>
        </a>
    </li>
    <li class="tm-tab-link-item col-md-3">
        <a id="tab6" href="actions.html" class="tm-tab-link">
            <i class="fa fa-shopping-bag tm-tab-icon"></i>
            <span class="tm-tab-link-label">
                買物
                <br>Shopping
            </span>
        </a>
    </li>
    <li class="tm-tab-link-item col-md-3">
        <a id="tab7" href="actions.html" class="tm-tab-link">
            <i class="fa fa-users tm-tab-icon"></i>
            <span class="tm-tab-link-label">
                起業家サポート
                <br>Entrepreneur Support
            </span>
        </a>
    </li>
    <li class="tm-tab-link-item col-md-3">
        <a id="tab8" href="actions.html" class="tm-tab-link">
            <i class="fa fa-user-plus tm-tab-icon"></i>
            <span class="tm-tab-link-label">
                アバターとして参加する
                <br>Join as Avatar
            </span>
        </a>
    </li>
</ul>
@endsection

@push('scripts')
<script type="text/javascript">
    
</script>
@endpush
