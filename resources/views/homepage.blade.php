@section('title', strip_tags(__('homepage.header-title')))
@section('description', $homepage->description)

@extends('site.layouts.block')

@section('content')

    <div class="s-hero1">
        <div class="s-hero-content">
            <div class="container">
                <h2 class="s-hero-title">
                    <span class="text1">WE ARE </span>
                    <span class="text2">HEXAGON</span>
                    <span class="text3">Total Trade Association Management</span>
                </h2>
                <div class="s-hero-button">
                    <a href="/#services" class="b-btn"><span>SERVICES</span></a>
                </div>
                <div class="s-hero-arrow">
                    <a href="#about" class="s-hero-arrow-inner js-scroll">
                        <span class="chevron"></span>
                        <span class="chevron"></span>
                        <span class="chevron"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="s-about" id="about">
        <div class="container">
            <div class="s-about-line">
                <div class="s-about-block block1">
                    <div class="s-about-info">
                        <h2 class="s-about-title">ABOUT US.</h2>
                        <div class="s-about-descr">
                            Hexagon specialises in association management services for trade bodies.
                            With a deep understanding of industry dynamics, We offer a comprehensive suite of
                            services designed to enhance associations' operations, member engagement and
                            integrated communications. We design tailored solutions by leveraging our extensive
                            experience of founding, operating and restructuring trade associations,
                            helping you to secure success for your members.
                        </div>
                        <div class="s-about-button">
                            <a href="#" class="b-btn transparent"><span>LEARN MORE</span></a>
                        </div>
                    </div>
                </div>
                <div class="s-about-block block2">
                    <div class="s-about-imgs">
                        <div class="s-about-img img1">
                            <img src="/assets/frontend/img/about-img5.png" alt="img">
                        </div>
                        <div class="s-about-img img2">
                            <img src="/assets/frontend/img/about-img1.png" alt="img">
                        </div>
                        <div class="s-about-img img3">
                            <img src="/assets/frontend/img/about-img2.png" alt="img">
                        </div>
                        <div class="s-about-img img4">
                            <img src="/assets/frontend/img/about-img3.png" alt="img">
                        </div>
                        <div class="s-about-img img5">
                            <img src="/assets/frontend/img/about-img4.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="s-why" id="why">
        <div class="container">
            <div class="s-why-line flex">
                <div class="s-why-block block1">
                    <div class="s-why-inner"></div>
                </div>
                <div class="s-why-block block2">
                    <div class="s-why-info">
                        <div class="s-why-info-inner">
                            <h2 class="s-about-title">WHY HEXAGON? </h2>
                            <div class="s-why-text">
                                <div class="s-why-text-item">Hexagon is the leading provider of total Association Management for trade associations.</div>
                                <div class="s-why-text-item">
                                    <h3><span>WE ARE</span> Impartial:</h3>
                                    <p>We support all sectors. We are experts in optimising all
                                        trade association operations</p>
                                </div>
                                <div class="s-why-text-item">
                                    <h3><span>WE ARE</span> Specialist:</h3>
                                    <p>We know trade association dynamics. We specialise in managing
                                        the unique relationship politics of trade associations.</p>
                                </div>
                                <div class="s-why-text-item">
                                    <h3><span>WE ARE</span> Expert:</h3>
                                    <p>We know how to found, grow and promote associations.
                                        We have founded, operated, chaired and shaped associations
                                        in 6 countries across Europe</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="services" class="s-services">
        <div class="container">
            <h2 class="s-about-title">SERVICES</h2>
            <div class="s-services-descr">
                I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or
                double
                click me to add your own content and make changes to the font. I’m a great place for you t
                o tell a story and let your users know a little more about you.
            </div>
            <div class="s-services-line flex">
                @foreach($services as $service)
                    <div class="s-services-block">
                    <div class="s-services-item">
                        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                            <div class="flipper">
                                <div class="front">
                                    <div class="s-services-item-title">
                                        {{$service->title}}
                                    </div>
                                </div>
                                <div class="back">
                                    <div class="s-services-item-descr">
                                        {{$service->description}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="s-offer">
        <div class="container">
            <h2 class="s-about-title">Are you setting up a<br> trade or member association?</h2>
            <div class="s-offer-descr">
                Let Hexagon support every step of the process, from incorporation to brand identity through to
                launch.
            </div>
            <div class="s-offer-button">
                <a href="{{route('about')}}" class="b-btn transparent"><span>LEARN MORE</span></a>
            </div>
        </div>
    </div>
    @include('partials.contact')
    @include('partials.footer')
@endsection
