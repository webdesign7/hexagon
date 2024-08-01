<footer class="s-footer">
    <div class="container">
        <div class="s-footer-inner">
            <div class="s-footer-logo">
                <a href="/">HEXAGON</a>
            </div>
            <div class="s-footer-menus flex flexbetween flexalcenter">
                <ul class="s-footer-menu flex">
                    <li><a href="{{route('home')}}">HOME</a></li>
                    <li><a href="{{route('about')}}">ABOUT</a></li>
                    <li><a href="/#services">SERVICES</a></li>
                    <li><a href="/#contact">CONTACT</a></li>
                </ul>
                <ul class="s-footer-menu flex">
                    <li><a href="{{route('page', \App\Models\Page::find(1)->slug)}}">TERMS & CONDITIONS</a></li>
                    <li><a href="{{route('page', \App\Models\Page::find(2)->slug)}}">PRIVACY POLICY</a></li>
                </ul>
            </div>
            <div class="s-footer-copy">Copyright © {{date('Y')}} Hexagon Ltd. All rights reserved.</div>
        </div>
        <div class="s-footer-text">HEXAGON</div>
    </div>
</footer>
