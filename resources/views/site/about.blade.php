@section('title', $page->meta_title)
@section('description', $page->meta_description)

@extends('site.layouts.block')
@section('content')
<div class="s-page-inner" >

    <div class="p-about" id="pabout">
        <div class="container">
            <div class="p-about-line">
                <div class="p-about-block full">
                    <h2 class="s-about-title">
                        ABOUT
                    </h2>
                    <ul class="s-breadcrumb">
                        <li><a href="{{route('home')}}">HOME</a></li>
                        <li>ABOUT</li>
                    </ul>
                </div>
                <div class="p-about-block block1">
                    <div class="p-about-img">
                        <img src="/assets/frontend/img/about-1.jpg" alt="img">
                    </div>
                </div>
                <div class="p-about-block block2 anim">
                    <div class="p-about-item">
                        <h2 class="p-about-item-title">OUR MISSION</h2>
                        <div class="p-about-item-text">
                            {!! $page->mission !!}
                        </div>
                    </div>
                </div>
                <div class="p-about-block block3">
                    <div class="p-about-item">
                        <h2 class="p-about-item-title">
                            WHAT WE DO
                        </h2>
                        <div class="p-about-item-text">
                            {!!  $page->what_we_do !!}
                        </div>
                    </div>


                </div>
                <div class="p-about-block block4 anim">
                    <div class="p-about-img">
                        <img src="/assets/frontend/img/about-2.jpg" alt="img">
                    </div>
                </div>
                <div class="p-about-block block5 anim">
                    <div class="p-about-item center">
                        <h2 class="p-about-item-title">UNRIVALLED EXPERTISE</h2>
                        <div class="p-about-item-text">
                            {!!  $page->unrivalled !!}
                        </div>
                    </div>
                </div>
                <div class="p-about-block block6 anim">
                    <div class="p-about-item">
                        <h2 class="p-about-item-title">OPTIMISED OPERATIONS. EXPERIENCE AND EXPERTISE. DELIVERING IMPACT FOR MEMBERS</h2>
                        <div class="p-about-item-text">
                            {!! $page->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('partials.contact')
    @include('partials.footer')
</div>
@endsection
