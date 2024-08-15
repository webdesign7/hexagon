<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Hexagon - @yield('title')</title>
    <meta name="description" content="@yield('description')">
    <link rel="stylesheet" href="/assets/frontend/css/libs.min.css">
    <link rel="stylesheet" href="/assets/frontend/css/main.css?v5">
    <link rel="stylesheet" href="/assets/frontend/css/fonts.css">
    <link rel="stylesheet" href="/assets/frontend/css/anim.css">
    <link rel="stylesheet" href="/assets/frontend/css/my.css?v5">

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
</head>
<body class="{{request()->route()->getName()}}">


    <div class="s-wrapper">
        <section class="hero-image"></section>
    <header class="s-header">
        <div class="container">
            <div class="s-header-logo">
                <a href="/">HEXAGON</a>
            </div>
            <ul class="s-header-menu">
                <li class="{{request()->route()->getName() === 'home' ? 'active': ''}}"><a href="{{route('home')}}">HOME</a></li>
                <li class="{{ request()->route()->getName() === 'about' ? 'active' : ''}}"><a href="{{route('about')}}">ABOUT US</a></li>
                <li><a href="/#services">SERVICES</a></li>
                <li class="{{ request()->route()->getName() === 'blogs' ? 'active' : ''}}"><a href="{{route('blogs')}}">BLOG</a></li>
            </ul>
            <a href="/#contact" class="b-btn"><span>CONTACT</span></a>
            <div class="s-header-toggle js-toggle">
					<span class="icon-menu-burger">
						<span class="icon-menu-burger-line"></span>
					</span>
            </div>
        </div>
    </header>
    <div class="s-menu">
        <div class="container">
            <div class="s-menu-inner">
                <div class="s-header-logo">
                    <a href="{{route('home')}}">HEXAGON</a>
                </div>
                <ul class="s-header-menu">
                    <li class="{{request()->route()->getName() === 'home' ? 'active': ''}}"><a href="{{route('home')}}">HOME</a></li>
                    <li class="{{ request()->route()->getName() === 'about' ? 'active' : ''}}"><a href="{{route('about')}}">ABOUT US</a></li>
                    <li><a href="/#services">SERVICES</a></li>
                    <li class="{{ request()->route()->getName() === 'blogs' ? 'active' : ''}}"><a href="{{route('blogs')}}">NEWS</a></li>
                </ul>
                <a href="/#contact" class="b-btn"><span>CONTACT</span></a>
            </div>
        </div>
    </div>
    <div class="s-page-inner">
        @yield('content')
    </div>
    </div>

<script src="/assets/frontend/js/libs.min.js"></script>
<script src="/assets/frontend/js/common.js?v2"></script>

    <!-- Cookie Consent by FreePrivacyPolicy.com https://www.FreePrivacyPolicy.com -->
    <script type="text/javascript" src="//www.freeprivacypolicy.com/public/cookie-consent/4.1.0/cookie-consent.js" charset="UTF-8"></script>
    <script type="text/javascript" charset="UTF-8">
        document.addEventListener('DOMContentLoaded', function () {
            cookieconsent.run({"notice_banner_type":"simple","consent_type":"implied","palette":"light","language":"en","page_load_consent_levels":["strictly-necessary","functionality","tracking","targeting"],"notice_banner_reject_button_hide":false,"preferences_center_close_button_hide":false,"page_refresh_confirmation_buttons":false,"website_name":"Hexagon","website_privacy_policy_url":"https://demo.hexagonpolicy.com/page/privacy-policy"});
        });
    </script>
</body>
</html>
