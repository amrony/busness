@extends('front-end.menubar.master')

@section('body')
    <section class="tabs_sec">
        <div class="col-md-12">
            <div class="col tab ">
                <button class="tablinks" onclick="openCity(event, 'London')"id="defaultOpen">Latest</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">News</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Buying Guides</button>
                <button class="tablinks" onclick="openCity(event, 'China')">Expert Advice</button>
                <button class="tablinks" onclick="openCity(event, 'America')">Experts</button>
                <button class="tablinks" onclick="openCity(event, 'Jordan')" >Business Listings</button>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- =============================first tabs =================================-->
                    <div id="London" class="tabcontent first_tab">

                        <div class="container first_tab">

                            <img src="{{ asset('back-end/images') }}/img_nature_wide.jpg" alt="Notebook" style="width:100%;">

                            <div class="top-text">
                                <h3><a href="singelpage.html"> Postage Meters Can Save Your Business Time and Money 2019</a></h3>
                                <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo,
                                    eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro,
                                    pri ponderum tractatos ei.</p>
                            </div>

                            <div class="text_secL">
                                @foreach($latestNews as $latestNew)
                                    <div class="text_l" >
                                        <a href="singelpage.html">
                                            <img src="{{ url('storage/news/'.$latestNew->image) }}" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                            <h4><a href="singelpage.html">{{ $latestNew->title }}</a></h4>
                                            <p>{{ $latestNew->body }}</p>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- second tabs -->
                    <div id="Paris" class="tabcontent">
                        <div class="container first_tab">
                            <img src="{{ asset('back-end/images') }}/img_nature_wide.jpg" alt="Notebook" style="width:100%;">
                            <div class="content first_text">
                                <h3>Postage Meters Can Save Your Business Time and Money 2019</h3>
                                <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo,
                                    eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro,
                                    pri ponderum tractatos ei.</p>
                            </div>

                            <div class="text_secL">
                                <div class="text_l  1" >
                                    @foreach($news as $new)
                                        <a href="singelpage.html">
                                            <img src="{{ url('storage/news/'.$new->image) }}" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                            <h4>{{ $new->title }}</h4>
                                            {{ $new->body }}
                                        </a>
                                    @endforeach
                                </div>

                                {{--                                <button class="tablinks" onclick="openCity(event, 'London')">More Buying Guides</button>--}}
                            </div>
                        </div>
                    </div>
                    <!-- third tabs -->

                    {{--                    @dd($buyingAdvices)--}}
                    <div id="Tokyo" class="tabcontent">
                        <div class="container first_tab">
                            <img src="{{ asset('back-end/images') }}/img_nature_wide.jpg" alt="Notebook" style="width:100%;">
                            <div class="content first_text">
                                <h3>Postage Meters Can Save Your Business Time and Money 2019</h3>
                                <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo,
                                    eum  cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro,
                                    pri  ponderum tractatos ei.</p>
                            </div>

                            <div class="text_secL">
                                @foreach($buyingAdvices as $buyingAdvice)
                                    <div class="text_l  1" >
                                        <a href="{{ route('buying-guides', $buyingAdvice->id) }}">
                                            <img src="{{ url('storage/buying_advice/'.$buyingAdvice->image) }}" alt="Pineapple"
                                                 style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                            <h4>{{ $buyingAdvice->title }}</h4>
                                            <p>{{ str_limit($buyingAdvice->body, 200) }}</p>
                                        </a>
                                    </div>
                                @endforeach
                                {{--                                <button class="tablinks" onclick="openCity(event, 'London')">More Buying Guides</button>--}}
                            </div>
                        </div>
                    </div>
                    <!-- tourth tabs -->
                    <div id="China" class="tabcontent">
                        <div class="container first_tab">

                            <div class="text_secL">
                                <div class="text_l  1" >
                                    <p><div class="col-md-12">
                                            <div class="col-md-11">
                                                <h4>What do you consider as some of the top concerns for an SEO or
                                                    marketing agency in 2019?</h4>
                                    <p style="line-height: 0px;padding: 10px;">2 DAYS AGO</p>
                                </div>
                                <div class="col-md-1 tourth_text">
                                    <ul>
                                        <li>2</li>
                                        <li>Respanses</li>
                                    </ul>
                                </div>
                            </div></p>
                        </div>
                        <div class="text_l  2">
                            <p><div class="col-md-12">
                                    <div class="col-md-11">
                                        <h4>What do you consider as some of the top concerns for an SEO or marketing
                                            agency in 2019?</h4>
                            <p style="line-height: 0px;padding: 10px;">2 DAYS AGO</p>
                        </div>
                        <div class="col-md-1 tourth_text">
                            <ul>
                                <li>2</li>
                                <li>Responses</li>
                            </ul>
                        </div>
                    </div></p>
                </div>
                <div class="text_l  3">
                    <p><div class="col-md-12">
                            <div class="col-md-11">
                                <h4>What do you consider as some of the top concerns for an SEO or marketing agency in 2019?</h4>
                    <p style="line-height: 0px;padding: 10px;">2 DAYS AGO</p>
                </div>
                <div class="col-md-1 tourth_text">
                    <ul>
                        <li>2</li>
                        <li>Responses</li>
                    </ul>
                </div>
            </div></p>
        </div>
        <div class="text_l  4">
            <p><div class="col-md-12">
                    <div class="col-md-11">
                        <h4>What do you consider as some of the top concerns for an SEO or marketing agency in 2019?</h4>
            <p style="line-height: 0px;padding: 10px;">2 DAYS AGO</p>
        </div>
        <div class="col-md-1 tourth_text">
            <ul>
                <li>2</li>
                <li>Responses</li>
            </ul>
        </div>
        </div></p>
        </div>
        <div class="text_l  5">
            <p><div class="col-md-12">
                    <div class="col-md-11">
                        <h4>What do you consider as some of the top concerns for an SEO or marketing agency in 2019?</h4>
            <p style="line-height: 0px;padding: 10px;">2 DAYS AGO</p>
        </div>
        <div class="col-md-1 tourth_text">
            <ul>
                <li>2</li>
                <li>Responses</li>
            </ul>
        </div>
        </div></p>
        </div>
        <div class="text_l  6">
            <p><div class="col-md-12">
                    <div class="col-md-11">
                        <h4>What do you consider as some of the top concerns for an SEO or marketing agency in 2019?</h4>
            <p style="line-height: 0px;padding: 10px;">2 DAYS AGO</p>
        </div>
        <div class="col-md-1 tourth_text">
            <ul>
                <li>2</li>
                <li>Responses</li>
            </ul>
        </div>
        </div></p>
        </div>
        <div class="text_l  7">
            <p><div class="col-md-12">
                    <div class="col-md-11">
                        <h4>What do you consider as some of the top concerns for an SEO or marketing agency in 2019?</h4>
            <p style="line-height: 0px;padding: 10px;">2 DAYS AGO</p>
        </div>
        <div class="col-md-1 tourth_text">
            <ul>
                <li>2</li>
                <li>Responses</li>
            </ul>
        </div>
        </div></p>
        </div>
        <div class="text_l  8">
            <p><div class="col-md-12">
                    <div class="col-md-11">
                        <h4>What do you consider as some of the top concerns for an SEO or marketing agency in 2019?</h4>
            <p style="line-height: 0px;padding: 10px;">2 DAYS AGO</p>
        </div>
        <div class="col-md-1 tourth_text">
            <ul>
                <li>2</li>
                <li>Responses</li>
            </ul>
        </div>
        </div></p>
        </div>
        <button class="tablinks" onclick="openCity(event, 'London')">More Buying Guides</button>
        </div>
        </div>
        </div>
        <!-- fifth tabs -->
        <div id="America" class="tabcontent">
            <div class="container">
                <div class="row">

                    <div class="col-sm">
                        <div class="gallery">
                            <a target="_blank" href="img_forest.jpg">
                                <img src="{{ asset('back-end/images') }}/textim3.jpg" alt="Forest" width="600" height="400">
                            </a>
                            <h4>Jeff Ropelato</h4>
                            <p class="disabled">Marketing Strategy Expert US.</p>
                            <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager here at business.com!
                                I will be your go-to resource for the business.com community.</div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="gallery">
                            <a target="_blank" href="img_forest.jpg">
                                <img src="{{ asset('back-end/images') }}/user-1-216x216.jpg" alt="Forest" width="600" height="400">
                            </a>
                            <h4>Jeff Ropelato</h4>
                            <p class="disabled">Marketing Strategy Expert US.</p>
                            <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager here at business.com!
                                I will be your go-to resource for the business.com community.</div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="gallery">
                            <a target="_blank" href="img_forest.jpg">
                                <img src="{{ asset('back-end/images') }}/textim3.jpg" alt="Forest" width="600" height="400">
                            </a>
                            <h4>Jeff Ropelato</h4>
                            <p class="disabled">Marketing Strategy Expert US.</p>
                            <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager here at business.com!
                                I will be your go-to resource for the business.com community.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-sm">
                        <div class="gallery">
                            <a target="_blank" href="img_forest.jpg">
                                <img src="{{ asset('back-end/images') }}/textim3.jpg" alt="Forest" width="600" height="400">
                            </a>
                            <h4>Jeff Ropelato</h4>
                            <p class="disabled">Marketing Strategy Expert US.</p>
                            <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager
                                here at business.com! I will be your go-to resource for the business.com community.</div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="gallery">
                            <a target="_blank" href="img_forest.jpg">
                                <img src="{{ asset('back-end/images') }}/user-1-216x216.jpg" alt="Forest" width="600" height="400">
                            </a>
                            <h4>Jeff Ropelato</h4>
                            <p class="disabled">Marketing Strategy Expert US.</p>
                            <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content
                                Manager here at business.com! I will be your go-to resource for the business.com community.</div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="gallery">
                            <a target="_blank" href="img_forest.jpg">
                                <img src="{{ asset('back-end/images') }}/textim3.jpg" alt="Forest" width="600" height="400">
                            </a>
                            <h4>Jeff Ropelato</h4>
                            <p class="disabled">Marketing Strategy Expert US.</p>
                            <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager
                                here at business.com! I will be your go-to resource for the business.com community.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-sm">
                        <div class="gallery">
                            <a target="_blank" href="img_forest.jpg">
                                <img src="{{ asset('back-end/images') }}/textim3.jpg" alt="Forest" width="600" height="400">
                            </a>
                            <h4>Jeff Ropelato</h4>
                            <p class="disabled">Marketing Strategy Expert US.</p>
                            <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager
                                here at business.com! I will be your go-to resource for the business.com community.</div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="gallery">
                            <a target="_blank" href="img_forest.jpg">
                                <img src="{{ asset('back-end/images') }}/user-1-216x216.jpg" alt="Forest" width="600" height="400">
                            </a>
                            <h4>Jeff Ropelato</h4>
                            <p class="disabled">Marketing Strategy Expert US.</p>
                            <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager
                                here at business.com! I will be your go-to resource for the business.com community.</div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="gallery">
                            <a target="_blank" href="img_forest.jpg">
                                <img src="{{ asset('back-end/images') }}/textim3.jpg" alt="Forest" width="600" height="400">
                            </a>
                            <h4>Jeff Ropelato</h4>
                            <p class="disabled">Marketing Strategy Expert US.</p>
                            <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager
                                here at business.com! I will be your go-to resource for the business.com community.</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- ==============================six no tabs ====================================-->
        <div id="Jordan" class="tabcontent">
            <div class="container first_tab">

                <div class="text_secL">
                    <div class="text_l  1" >
                        <p>
                            <img src="{{ asset('back-end/images') }}/textim2.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet,
                        nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                        <button class="tablinks six_no_tabs" onclick="openCity(event, 'London')">Learn More</button>
                        </p>
                    </div>
                    <div class="text_l  2">
                        <p>
                            <img src="{{ asset('back-end/images') }}/textim2.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum,
                        nisi lorem egestas odio, vitae scelerisque enim .
                        <button class="tablinks six_no_tabs" onclick="openCity(event, 'London')">Learn More</button>
                        </p>
                    </div>
                    <div class="text_l  3">
                        <p>
                            <img src="{{ asset('back-end/images') }}/textim2.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum,
                        nisi lorem egestas odio, vitae scelerisque enim .
                        <button class="tablinks six_no_tabs" onclick="openCity(event, 'London')">Learn More</button>
                        </p>
                    </div>
                    <div class="text_l  4">
                        <p>
                            <img src="{{ asset('back-end/images') }}/textim2.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum,
                        nisi lorem egestas odio, vitae scelerisque enim .
                        <button class="tablinks six_no_tabs" onclick="openCity(event, 'London')">Learn More</button>
                        </p>
                    </div>
                    <div class="text_l  5">
                        <p>
                            <img src="{{ asset('back-end/images') }}/textim2.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum,
                        nisi lorem egestas odio, vitae scelerisque enim .
                        <button class="tablinks six_no_tabs" onclick="openCity(event, 'London')">Learn More</button>
                        </p>
                    </div>
                    <div class="text_l  6">
                        <p>
                            <img src="{{ asset('back-end/images') }}/textim2.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum,
                        nisi lorem egestas odio, vitae scelerisque enim .
                        <button class="tablinks six_no_tabs" onclick="openCity(event, 'London')">Learn More</button>
                        </p>
                    </div>
                    <div class="text_l  7">
                        <p>
                            <img src="{{ asset('back-end/images') }}/textim2.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum,
                        nisi lorem egestas odio, vitae scelerisque enim .
                        <button class="tablinks six_no_tabs" onclick="openCity(event, 'London')">Learn More</button>
                        </p>
                    </div>
                    <div class="text_l  8">
                        <p>
                            <img src="{{ asset('back-end/images') }}/textim2.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum,
                        nisi lorem egestas odio, vitae scelerisque enim .
                        <button class="tablinks six_no_tabs" onclick="openCity(event, 'London')">Learn More</button>
                        </p>
                    </div>
                    <button class="tablinks" onclick="openCity(event, 'London')">More Buying Guides</button>
                </div>
            </div>
        </div>
        </div>
        <!-- ==============================tabs Right side bar ===============================-->
        <div class="col-md-4 box_right">

            <div class="container">
                <div class="text_secL">
                    <div class="text_l  1" >
                        <h4>Business Advice</h4>
                        <p>How should I approach business competition?</p>
                        <p style="color: #ec950e;line-height: 0.1;margin-bottom: 8px;">10 total answers</p>
                    </div>
                    <div class="text_l  2">
                        <p>How should I approach business competition?</p>
                        <p style="color: #ec950e;line-height: 0.1;margin-bottom: 8px;">12 total answers</p>
                    </div>
                    <div class="text_l  3">
                        <p>How should I approach business competition?</p>
                        <p style="color: #ec950e;line-height: 0.1;margin-bottom: 8px;">9 total answers</p>
                    </div>
                    <div class="text_l  4">
                        <p>How should I approach business competition?</p>
                        <p style="color: #ec950e;line-height: 0.1;margin-bottom: 8px;">10 total answers</p>
                    </div>
                    <div class="text_l  5">
                        <p>How should I approach business competition?</p>
                        <p style="color: #ec950e;line-height: 0.1;margin-bottom: 8px;">11 total answers</p>
                    </div>
                    <div class="text_l  6">
                        <p>How should I approach business competition?</p>
                        <p style="color: #ec950e;line-height: 0.1;margin-bottom: 8px;">13 total answers</p>
                    </div>
                    <div class="text_l  7">
                        <p>How should I approach business competition?</p>
                        <p style="color: #ec950e;line-height: 0.1;margin-bottom: 8px;">10 total answers</p>
                    </div>
                    <div class="text_l  8">
                        <p>How should I approach business competition?</p>
                        <p style="color: #ec950e;line-height: 0.1;margin-bottom: 8px;">11 total answers</p>
                    </div>
                </div>
            </div>
            <button class="tablinks" onclick="openCity(event, 'London')">Ask a Question</button>
        </div>
        </div>

        </div>
        </div>
    </section>
    <!-- About page about section-->
    <section class="section section-md">
        <div class="container">
            <div class="row row-30 justify-content-center">



                <div class="col-lg-6 col-12">
                    <div class="offset-top-45 offset-lg-right-45">
                        <div class="section-name wow fadeInRight" data-wow-delay=".2s">About us</div>
                        <h3 class="wow fadeInLeft text-capitalize" data-wow-delay=".3s">A Few Words<span class="text-primary"> about us</span></h3>
                        <p class="font-weight-bold text-gray-dark wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum nulla ac tincidunt malesuada. Sed volutpat semper elit quis pharetra. Etiam sodales a sem vitae fermentum.</p>
                        <p class="wow fadeInUp" data-wow-delay=".4s">Sapien eget mi proin sed libero enim sed faucibus turpis. Placerat in egestas erat imperdiet sed euismod nisi. Vulputate eu scelerisque felis imperdiet. Lorem donec massa sapien faucibus. Volutpat diam.</p>
                        <p class="wow fadeInUp" data-wow-delay=".4s">Adipiscing enim eu turpis egestas pretium aenean pharetra magna. Nullam non nisi est sit amet facilisis magna etiam. Nec feugiat in fermentum posuere urna nec.</p>
                        <div class="offset-top-20">
                            <!--Linear progress bar-->
                            <article class="progress-linear">
                                <div class="progress-header progress-header-simple">
                                    <p>Management</p><span class="progress-value">85</span>
                                </div>
                                <div class="progress-bar-linear-wrap">
                                    <div class="progress-bar-linear"></div>
                                </div>
                            </article>
                            <!--Linear progress bar-->
                            <article class="progress-linear">
                                <div class="progress-header progress-header-simple">
                                    <p>Marketing</p><span class="progress-value">45</span>
                                </div>
                                <div class="progress-bar-linear-wrap">
                                    <div class="progress-bar-linear"></div>
                                </div>
                            </article>
                            <!--Linear progress bar-->
                            <article class="progress-linear">
                                <div class="progress-header progress-header-simple">
                                    <p>Analysis</p><span class="progress-value">90</span>
                                </div>
                                <div class="progress-bar-linear-wrap">
                                    <div class="progress-bar-linear"></div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-10 col-12">
                    <div class="block-decorate-img wow fadeInLeft" data-wow-delay=".2s"><img src="{{ asset('back-end/images') }}/about-1-570x703.jpg" alt="img"  />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our team-->





    <section class="section section-md bg-gray-lighten">
        <div class="container">
            <div class="row row-50 justify-content-center">
                <div class="col-md col-12 text-center">
                    <div class="section-name wow fadeInRight" data-wow-delay=".2s">People Behind Our Success</div>
                    <h3 class="wow fadeInLeft text-capitalize" data-wow-delay=".3s">Meet Our<span class="text-primary"> Team</span></h3>
                    <p class="block-675">Mi proin sed libero enim sed faucibus. Metus dictum at tempor commodo. Viverra justo nec ultrices dui sapien eget mi. Eget felis eget nunc lobortis.</p>
                </div>
            </div>
            <div class="row row-50 justify-content-center">
                <div class="col-xl-4 col-sm-6 col-10 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="team-classic-wrap">
                        <div class="team-classic-img"><img src="{{ asset('back-end/images') }}/team-classic-1-370x397.jpg" alt="img"  />
                        </div>
                        <div class="block-320 text-center">
                            <h4 class="font-weight-bold">William Johnson</h4><span class="d-block">CEO, Founder</span>
                            <p>Placerat duis ultricies lacus sed turpis tincidunt id aliquet. Et pharetra pharetra massa massa ultricies.</p>
                            <hr class="offset-top-40"/>
                            <ul class="justify-content-center social-links offset-top-30">
                                <li><a class="fa fa fa-linkedin" href="#"></a></li>
                                <li><a class="fa fa fa fa-twitter" href="#"></a></li>
                                <li><a class="fa fa fa-facebook" href="#"></a></li>
                                <li><a class="fa fa fa-instagram" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-10 wow fadeInUp" data-wow-delay=".3s">
                    <div class="team-classic-wrap">
                        <div class="team-classic-img"><img src="{{ asset('back-end/images') }}/team-classic-2-370x397.jpg" alt="img"  />
                        </div>
                        <div class="block-320 text-center">
                            <h4 class="font-weight-bold">Jane McMillan</h4><span class="d-block">Business Advisor</span>
                            <p>Ut morbi tincidunt augue interdum velit. Sed euismod nisi porta lorem nisl rhoncus mattis rhoncus urna sed.</p>
                            <hr class="offset-top-40"/>
                            <ul class="justify-content-center social-links offset-top-30">
                                <li><a class="fa fa fa-linkedin" href="#"></a></li>
                                <li><a class="fa fa fa fa-twitter" href="#"></a></li>
                                <li><a class="fa fa fa-facebook" href="#"></a></li>
                                <li><a class="fa fa fa-instagram" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-10 wow fadeInRight" data-wow-delay=".3s">
                    <div class="team-classic-wrap">
                        <div class="team-classic-img"><img src="{{ asset('back-end/images') }}/team-classic-3-370x397.jpg" alt="img"  />
                        </div>
                        <div class="block-320 text-center">
                            <h4 class="font-weight-bold">Robert Smith</h4><span class="d-block">Marketing Manager</span>
                            <p>Vitae aliquet nec ullamcorper sit amet risus nullam eget felis. Euismod lacinia at quis risus sed vulputate.</p>
                            <hr class="offset-top-40"/>
                            <ul class="justify-content-center social-links offset-top-30">
                                <li><a class="fa fa fa-linkedin" href="#"></a></li>
                                <li><a class="fa fa fa fa-twitter" href="#"></a></li>
                                <li><a class="fa fa fa-facebook" href="#"></a></li>
                                <li><a class="fa fa fa-instagram" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brands-->
    <section class="section section-md">
        <div class="container">
            <div class="row">
                <!-- Owl Carousel-->
                <div class="owl-carousel text-center owl-brand" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="3" data-xl-items="5" data-xxl-items="5" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false" data-autoplay="true">
                    <div class="item"><img src="{{ asset('back-end/images') }}/brand-1-200x48.png" alt="img"/>
                    </div>
                    <div class="item"><img src="{{ asset('back-end/images') }}/brand-2-200x48.png" alt="img"/>
                    </div>
                    <div class="item"><img src="{{ asset('back-end/images') }}/brand-3-200x48.png" alt="img"/>
                    </div>
                    <div class="item"><img src="{{ asset('back-end/images') }}/brand-4-200x48.png" alt="img"/>
                    </div>
                    <div class="item"><img src="{{ asset('back-end/images') }}/brand-5-200x48.png" alt="img"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Cta section-->
    <section class="section section-md" style="background:url({{ asset('back-end/images') }}/bg-image-4-1700x394.jpg) no-repeat; background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-12 text-center"><span class="text-white d-block cta-big-text font-weight-medium">Still Have Some Questions Left?</span>
                    <h2 class="text-white"><span class="d-block">Get in Touch with Us:<a class="underline-link" href="tel:#"> 855-456-7634</a></span></h2>
                    <p class="text-white">Feel free to contact our team to learn more about the services provided by us and multiple offers for Your business!</p><a class="button-circle button-default-outline button button-lg button-width-210" href="contacts.html">contact us</a>
                </div>
            </div>
        </div>
    </section>
    @endsection