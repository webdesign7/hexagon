<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Hexagon</title>
    <link rel="stylesheet" href="/assets/frontend/css/libs.min.css">
    <link rel="stylesheet" href="/assets/frontend/css/main.css">
    <link rel="stylesheet" href="/assets/frontend/css/fonts.css">
    <link rel="stylesheet" href="/assets/frontend/css/anim.css">
    <link rel="stylesheet" href="/assets/frontend/css/my.css">
</head>
<body class="{{request()->route()->getName()}}">


    <div class="s-wrapper">
    <header class="s-header">
        <div class="container">
            <div class="s-header-logo">
                <a href="/">HEXAGON</a>
            </div>
            <ul class="s-header-menu">
                <li class="{{request()->route()->getName() === 'home' ? 'active': ''}}"><a href="{{route('home')}}">HOME</a></li>
                <li class="{{ request()->route()->getName() === 'about' ? 'active' : ''}}"><a href="{{route('about')}}">ABOUT US</a></li>
                <li><a href="/#services">SERVICES</a></li>
                <li class="{{ request()->route()->getName() === 'blogs' ? 'active' : ''}}"><a href="{{route('blogs')}}">NEWS</a></li>
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
    <div class="s-top">
        <div class="s-hero">

        </div>
    </div>
    <div class="s-page-inner">
        @yield('content')
    </div>
    </div>


<script src="/assets/frontend/js/libs.min.js"></script>
<script src="/assets/frontend/js/common.js"></script>

</body>
</html>
