@section('title', $page->title)
@section('description', 'About')

@extends('site.layouts.block')
@section('content')
<div class="s-page-inner" >
    <div class="s-hero1 about">
        <div class="s-hero-content">
            <div class="container">
                <h2 class="s-about-title">
                    ABOUT
                </h2>
                <ul class="s-breadcrumb">
                    <li><a href="#">HOME</a></li>
                    <li>ABOUT</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="p-about">
        <div class="p-about-bg"></div>
        <div class="container">
            <div class="p-about-line">

                <div class="p-about-block block1 anim">
                    <div class="p-about-img">
                        <img src="/assets/frontend/img/page-about-img1.jpg" alt="img">
                    </div>
                </div>
                <div class="p-about-block block2 ">
                    <div class="p-about-item">
                        <h2 class="p-about-item-title">OUR MISSION</h2>
                        <div class="p-about-item-text">
                            {!! $page->mission !!}
                        </div>
                    </div>
                </div>
                <div class="p-about-block block3 anim">
                    <div class="p-about-item">
                        <h2 class="p-about-item-title">
                            OPTIMISED OPERATIONS. EXPERIENCE AND EXPERTISE. DELIVERING IMPACT FOR MEMBERS
                        </h2>
                        <div class="p-about-item-text">
                            {!! $page->description !!}
                        </div>
                    </div>


                </div>
                <div class="p-about-block block4 anim">
                    <div class="p-about-img">
                        <img src="/assets/frontend/img/page-about-img2.jpg" alt="img">
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
                        <h2 class="p-about-item-title">WHAT WE DO</h2>
                        <div class="p-about-item-text">
                            {!!  $page->what_we_do !!}
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
