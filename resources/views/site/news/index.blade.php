@section('title', 'Hexagon Insights | Association Management Blog')
@section('description', 'Stay informed with Hexagon\'s blog, featuring expert insights on association management, policy, and strategy. Explore topics like boosting competitiveness and lessons learned from industry trends.')

@extends('site.layouts.block')
@section('content')
        <div class="p-about blog" id="pblogs">
            <div class="container">
                <div class="p-about-blog">
                    <h2 class="s-about-title">
                        BLOG
                    </h2>
                    <div class="p-about-descr">
                        The latest news and blogs across many topics impacting the trading consulting industry.<br> Explore our news and views
                    </div>
                    <ul style="display: none" class="p-about-switch">
                        <li><a href={{route('blogs-archive')}}>ARCHIVE</a></li>
                    </ul>

                    @php $i = 0; @endphp
                    @foreach($news as $item)
                        <div class="p-about-blog-line flex @if($i > 1) anim @endif">

                            <div class="p-about-blog-block">
                                <div class="p-about-blog-img">
                                    <img src="{{$item->cmsImage('image','list')}}" alt="img">
                                </div>
                            </div>
                            <div class="p-about-blog-block">
                                <div class="p-about-blog-item">
                                    <h2 class="p-about-blog-item-title">
                                        {{$item->title}}
                                    </h2>
                                    <div class="p-about-blog-item-text">
                                        {!! $item->short_description !!}
                                    </div>
                                    <div class="p-about-blog-item-button">
                                        <a href="{{route('blog-item', $item)}}" class="b-btn transparent"><span>READ MORE</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @php $i++; @endphp
                    @endforeach

                </div>
            </div>
        </div>



        @include('partials.footer')

@endsection
