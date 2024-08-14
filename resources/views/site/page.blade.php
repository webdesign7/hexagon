@section('title', $page->meta_title)
@section('description', $page->meta_description)

@extends('site.layouts.block')
@section('content')
    <div class="s-page-inner" >
        <div class="s-hero1 about js-anim">
            <img class="jarallax-img" src="/assets/frontend/img/services-bg1.jpg" alt="">
            <div class="s-hero-content">
                <div class="container">
                    <h2 class="s-about-title article">
                        {{$page->title}}
                    </h2>
                    <ul class="s-breadcrumb article">
                        <li><a href="{{route('home')}}">HOME</a></li>
                        <li>{{$page->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="p-about">
            <div class="p-about-bg"></div>
            <div class="container">
                <div class="p-about-article">
                    <div class="p-about-article-cont">
                        <div class="p-about-article-cont-inner">
                            <h2 class="p-about-article-title">
                                {{$page->title}}
                            </h2>

                            <div class="p-about-article-descr">
                                {!! $page->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.footer')
    </div>
@endsection
