<div id="contact" class="s-contact">
    <div class="container">
        <div class="s-contact-line flex">
            <div class="s-contact-block block1">
                <div class="s-contact-info">
                    <h2 class="s-about-title">CONTACT US</h2>
                    <div class="s-contact-descr">
                        Send us a message
                    </div>
                    <div class="s-contact-form">
                        <form method="POST" action="{{ route('contact.submit') }}">
                            @csrf

                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                            <div class="s-contact-form-line flex">
                                <div class="s-contact-form-block">
                                    <div class="s-contact-form-item">
                                        <input type="text" name="name" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="s-contact-form-block">
                                    <div class="s-contact-form-item">
                                        <input type="text" name="company_name" placeholder="Company name">
                                    </div>
                                </div>
                                <div class="s-contact-form-block">
                                    <div class="s-contact-form-item">
                                        <input type="text" name="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="s-contact-form-block">
                                    <div class="s-contact-form-item">
                                        <input type="text" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="s-contact-form-block full">
                                    <div class="s-contact-form-item">
                                                <textarea name="message"
                                                          placeholder="Type your message here ..."></textarea>
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


                            @if(TwillAppSettings::get('contact.contact-details.social-media-links'))
                                @foreach(TwillAppSettings::get('contact.contact-details.social-media-links') as $item)

                                    @if ($item->content['platform'] === 'linkedin')
                                        <li><a target="_blank" href="{{$item->content['link']}}"><img src="/assets/frontend/img/icon-soc2.png" alt="img"></a></li>
                                    @endif

                                    @if ($item->content['platform'] === 'instagram')
                                        <li><a target="_blank" href="{{$item->content['link']}}"><img src="/assets/frontend/img/icon-soc1.png" alt="img"></a></li>
                                    @endif

                                        @if ($item->content['platform'] === 'threads')
                                            <li><a target="_blank" href="https://www.threads.net/{{$item->content['link']}}"><img style="width: 32px" src="/assets/frontend/img/Threads-Logo.png" alt="img"></a></li>
                                        @endif

                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="s-contact-item">
                        <h3 class="s-contact-subtitle">EMAIL US</h3>
                        <div class="s-contact-link">
                            <a href="mailto:{{TwillAppSettings::get('contact.contact-details.email')}}">{{TwillAppSettings::get('contact.contact-details.email')}}</a>
                        </div>
                    </div>
                    <div class="s-contact-item">
                        <h3 class="s-contact-subtitle">SPEAK TO US</h3>
                        <div class="s-contact-meeting">
                            <a target="_blank" href="{{TwillAppSettings::get('contact.contact-details.calendly')}}" class="s-contact-btn flex flexcenter flexalcenter"><img
                                    src="/assets/frontend/img/meeting-btn.png" alt="img"><span>SCHDULE A MEETING</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
