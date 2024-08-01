@section('title', 'News')
@section('description', 'About')

@extends('site.layouts.block')
@section('content')


    <div class="s-hero1 about">
        <div class="s-hero-content">
            <div class="container">
                <h2 class="s-about-title article">
                    {{ $item->title }}
                </h2>
                <ul class="s-breadcrumb article">
                    <li><a href="#">HOME</a></li>
                    <li><a href="{{route("blogs")}}">NEWS</a></li>
                    <li> {{ $item->title }}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="p-about">
        <div class="p-about-bg"></div>
        <div class="container">
            <div class="p-about-article">
                <div class="p-about-article-img">
                    <img src="{{$item->cmsImage('image','default')}}" alt="img">
                </div>
                <div class="p-about-article-cont">
                    <div class="p-about-article-cont-inner">
                        <h2 class="p-about-article-title">How 2024 Cannes Award-Winning Campaigns Resonate with the
                            Over 50s</h2>
                        <div class="p-about-article-descr">
                           {!! $item->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')

@endsection
