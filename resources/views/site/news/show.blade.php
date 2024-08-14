@section('title', $item->meta_title)
@section('description', $item->meta_description)

@extends('site.layouts.block')
@section('content')
    <div class="s-hero1 about">
        <div class="s-hero-content">
            <div class="container">

            </div>
        </div>
    </div>
    <div class="p-about">
        <div class="p-about-bg"></div>
        <div class="container">
            <div class="p-about-article">
                <h2 class="s-about-title article">
                    {{ $item->title }}
                </h2>
                <ul class="s-breadcrumb article">
                    <li><a href="{{route("home")}}">HOME</a></li>
                    <li><a href="{{route("blogs")}}">NEWS</a></li>
                    <li>{{ $item->title }}</li>
                </ul>
                <div class="p-about-article-img">
                    <img src="{{$item->cmsImage('image','default')}}" alt="img">
                </div>
                <div class="p-about-article-cont">
                    <div class="p-about-article-cont-inner">
                        <h2 class="p-about-article-title">{{ $item->title }}</h2>
                        <div class="p-about-article-text">
                            {!! $item->description !!}
                        </div>
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
