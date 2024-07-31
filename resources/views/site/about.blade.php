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

                <div class="p-about-block block1">
                    <div class="p-about-img">
                        <img src="/assets/frontend/img/page-about-img1.jpg" alt="img">
                    </div>
                </div>
                <div class="p-about-block block2">
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
                            OPTIMISED OPERATIONS. EXPERIENCE AND EXPERTISE. DELIVERING IMPACT FOR MEMBERS
                        </h2>
                        <div class="p-about-item-text">
                            {!! $page->description !!}
                        </div>
                    </div>


                </div>
                <div class="p-about-block block4">
                    <div class="p-about-img">
                        <img src="/assets/frontend/img/page-about-img2.jpg" alt="img">
                    </div>
                </div>
                <div class="p-about-block block5">
                    <div class="p-about-item center">
                        <h2 class="p-about-item-title">WHAT WE STAND FOR</h2>
                        <div class="p-about-item-text">
                            <p>I'm a paragraph. Click here to add your own text and edit me.
                                It’s easy. Just click “Edit Text” or double click me to add your own
                                content and make changes to the font. Feel free to drag and drop
                                me anywhere you like on your page</p>
                        </div>
                    </div>
                </div>
                <div class="p-about-block block6">
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
    <div class="s-contact">
        <div class="container">
            <div class="s-contact-line flex">
                <div class="s-contact-block block1">
                    <div class="s-contact-info">
                        <h2 class="s-about-title">CONTACT US</h2>
                        <div class="s-contact-descr">
                            Send us a message
                        </div>
                        <div class="s-contact-form">
                            <form action="mail.php">
                                <div class="s-contact-form-line flex">
                                    <div class="s-contact-form-block">
                                        <div class="s-contact-form-item">
                                            <input type="text" name="name" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="s-contact-form-block">
                                        <div class="s-contact-form-item">
                                            <input type="text" name="cname" placeholder="Company name">
                                        </div>
                                    </div>
                                    <div class="s-contact-form-block">
                                        <div class="s-contact-form-item">
                                            <input type="text" name="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="s-contact-form-block">
                                        <div class="s-contact-form-item">
                                            <input type="text" name="emaile" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="s-contact-form-block full">
                                        <div class="s-contact-form-item">
                                            <textarea name="mes" placeholder="Type your message here ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="s-contact-form-block full">
                                        <div class="s-contact-form-btn">
                                            <button type="submit" class="b-btn"><span>SUBMIT</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="s-contact-block block2">
                    <div class="s-contact-items">
                        <div class="s-contact-item">
                            <h3 class="s-contact-subtitle">SOCIAL</h3>
                            <ul class="s-contact-soc">
                                <li><a href="#"><img src="/assets/frontend/img/icon-soc1.png" alt="img"></a></li>
                                <li><a href="#"><img src="/assets/frontend/img/icon-soc2.png" alt="img"></a></li>
                            </ul>
                        </div>
                        <div class="s-contact-item">
                            <h3 class="s-contact-subtitle">EMAIL US</h3>
                            <div class="s-contact-link">
                                <a href="mailto:info@hexagonpolicy.com">info@hexagonpolicy.com</a>
                            </div>
                        </div>
                        <div class="s-contact-item">
                            <h3 class="s-contact-subtitle">SPEAK TO US</h3>
                            <div class="s-contact-meeting">
                                <a href="#" class="s-contact-btn flex flexcenter flexalcenter"><img src="/assets/frontend/img/meeting-btn.png" alt="img"><span>SCHDULE A MEETING</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="s-footer">
        <div class="container">
            <div class="s-footer-inner">
                <div class="s-footer-logo">
                    <a href="/">HEXAGON</a>
                </div>
                <div class="s-footer-menus flex flexbetween flexalcenter">
                    <ul class="s-footer-menu flex">
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">SERVICES</a></li>
                        <li><a href="#">NEWS</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>
                    <ul class="s-footer-menu flex">
                        <li><a href="#">PRIVACY POLICY</a></li>
                        <li><a href="#">COOKIES</a></li>
                    </ul>
                </div>
                <div class="s-footer-copy">Copyright © 2024 Hexagon Ltd. All rights reserved.</div>
            </div>
            <div class="s-footer-text">HEXAGON</div>
        </div>
    </footer>
</div>
@endsection
