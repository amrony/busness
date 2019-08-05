@extends('front-end.master')
@section('title')
    businesgossip
    @endsection

@push('css')

    @endpush

@section('body')
    <section class="section main-section parallax-scene-js"
             style="background:url{{ asset('front-end/images/background-1-1700x803.jpg') }} no-repeat center center; background-size:cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-12">
                    <div class="main-decorated-box text-center text-xl-left">
                        <h1 class="text-white text-xl-center wow slideInRight" data-wow-delay=".3s"><span
                                    class="align-top offset-top-30 d-inline-block font-weight-light prefix-text">the</span><span
                                    class="big font-weight-bold d-inline-flex offset-right-170">best</span><span
                                    class="biggest d-block d-xl-flex font-weight-bold">Solutions.</span></h1>
                        <div class="decorated-subtitle text-italic text-white wow slideInLeft">Fresh Ideas for Your
                            Business
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center offset-top-75" data-wow-delay=".2s"><a
                            class="button-way-point d-inline-block text-center d-inline-flex flex-column justify-content-center"
                            href="#" data-custom-scroll-to="about"><span class="fa fa-chevron-down"></span></a></div>
            </div>
        </div>
        <div class="decorate-layer">
            <div class="layer-1">
                <div class="layer" data-depth=".20"><img src="{{ asset('back-end/images') }}/parallax-item-1-563x532.png" alt="img"/>
                </div>
            </div>
            <div class="layer-2">
                <div class="layer" data-depth=".30"><img src="{{ asset('back-end/images') }}/parallax-item-2-276x343.png" alt="img"/>
                </div>
            </div>
            <div class="layer-3">
                <div class="layer" data-depth=".40"><img src="{{ asset('back-end/images') }}/parallax-item-3-153x144.png" alt="img"/>
                </div>
            </div>
            <div class="layer-4">
                <div class="layer" data-depth=".20"><img src="{{ asset('back-end/images') }}/parallax-item-4-69x74.png" alt="img"/>
                </div>
            </div>
            <div class="layer-5">
                <div class="layer" data-depth=".40"><img src="{{ asset('back-end/images') }}/parallax-item-5-72x75.png" alt="img" />
                </div>
            </div>
            <div class="layer-6">
                <div class="layer" data-depth=".30"><img src="{{ asset('back-end/images') }}/parallax-item-6-45x54.png" alt="img"/>
                </div>
            </div>
        </div>
    </section>
    <!--About-->
    <section class="section section-sm position-relative" id="about">
        <div class="container">
            <div class="row row-30">
                <div class="col-lg-6">
                    <div class="block-decorate-img wow fadeInLeft" data-wow-delay=".2s"><img
                                src="{{ asset('back-end/images') }}/home-1-570x703.jpg" alt="img" />
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="block-sm offset-top-45">
                        <div class="section-name wow fadeInRight" data-wow-delay=".2s">About us</div>
                        <h3 class="wow fadeInLeft text-capitalize devider-bottom" data-wow-delay=".3s">What We<span
                                    class="text-primary"> Do</span></h3>
                        <p class="offset-xl-40 wow fadeInUp" data-wow-delay=".4s">Small or big, your business will love
                            our financial help and business consultations! We are happy when our clients are too...
                            Actually, this is quite simple to achieve - because each time we help them in sorting out
                            different accounting intricacies or save the day before filing the taxes, they are happy
                            indeed! And so are we!</p>
                        <p class="wow fadeInUp"
                           data-wow-delay=".4s">We have over fifteen years of successful experience in financial sphere
                            in the US business market.</p><a
                                class="button-width-190 button-primary button-circle button-lg button offset-top-30"
                                href="#">read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="decor-text decor-text-1">ABOUT</div>
    </section>
    <!--Features-->
    <section class="section custom-section position-relative section-md">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-12">
                    <div class="section-name wow fadeInRight">our features</div>
                    <h3 class="text-capitalize devider-left wow fadeInLeft" data-wow-delay=".2s">Why Businesses<span
                                class="text-primary"> Choose us</span></h3>
                    <p>With over 20 years of experience in business consulting, we have a lot to offer to our clients.
                        Here are some reasons why companies worldwide choose us.</p>
                    <div class="row row-15">
                        <div class="col-xl-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="box-default">
                                <div class="box-default-title">Innovative Solutions</div>
                                <p class="box-default-description">Our services and solutions are built on business
                                    innovations.</p><span
                                        class="box-default-icon novi-icon icon-lg mercury-icon-lightbulb-gears"></span>
                            </div>
                        </div>
                        <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="box-default">
                                <div class="box-default-title">Strategic Thinking</div>
                                <p class="box-default-description">Cemeriss works strategically to forge the best path
                                    for your business.</p><span
                                        class="box-default-icon novi-icon icon-lg mercury-icon-target-2"></span>
                            </div>
                        </div>
                        <div class="col-xl-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="box-default">
                                <div class="box-default-title">Experienced Team</div>
                                <p class="box-default-description">We employ the best consultants with more than 10
                                    years of experience.</p><span
                                        class="box-default-icon novi-icon icon-lg mercury-icon-user"></span>
                            </div>
                        </div>
                        <div class="col-xl-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="box-default">
                                <div class="box-default-title">Creative Approach</div>
                                <p class="box-default-description">Every project we work on is based on the creative
                                    solutions of any issues.</p><span
                                        class="box-default-icon novi-icon icon-lg mercury-icon-partners"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="image-left-side wow slideInRight" data-wow-delay=".5s"><img src="{{ asset('back-end/images') }}/home-2-636x480.jpg"
                                                                                alt="img"/>
        </div>
        <div class="decor-text decor-text-2 wow fadeInUp" data-wow-delay=".3s"></div>
    </section>
    <!--Counters-->
    <section class="section"
             style="background: url('{{ asset('back-end/images') }}/bg-image-2-1700x257.jpg')no-repeat; background-size:cover;">
        <div class="container section-md">
            <div class="row row-30 text-center">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="counter-classic">
                        <div class="counter-classic-number"><span
                                    class="icon-lg novi-icon offset-right-10 mercury-icon-time"></span><span
                                    class="counter text-white" data-speed="2000">2007</span>
                        </div>
                        <div class="counter-classic-title">Year of Establishment</div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="counter-classic">
                        <div class="counter-classic-number"><span
                                    class="icon-lg novi-icon offset-right-10 mercury-icon-folder"></span><span
                                    class="counter text-white" data-speed="2000">547</span>
                        </div>
                        <div class="counter-classic-title">Successful Projects</div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="counter-classic">
                        <div class="counter-classic-number"><span
                                    class="icon-lg novi-icon offset-right-10 mercury-icon-users"></span><span
                                    class="counter text-white" data-speed="2000">45</span><span
                                    class="symbol text-white">+</span>
                        </div>
                        <div class="counter-classic-title">Global Partners</div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="counter-classic">
                        <div class="counter-classic-number"><span
                                    class="icon-lg novi-icon offset-right-10 mercury-icon-group"></span><span
                                    class="counter text-white" data-speed="2000">1500</span>
                        </div>
                        <div class="counter-classic-title">Team Members</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Pricing-->
    <section class="section section-md bg-xs-overlay"
             style="background:url('{{ asset('back-end/images') }}/bg-image-3-1700x883.jpg')no-repeat;background-size:cover">
        <div class="container">
            <div class="row row-50 justify-content-center">
                <div class="col-12 text-center col-md-10 col-lg-8">
                    <div class="section-name wow fadeInRight" data-wow-delay=".2s">Pricing Options</div>
                    <h3 class="wow fadeInLeft text-capitalize" data-wow-delay=".3s">Find the perfect plan for<span
                                class="text-primary"> your business</span></h3>
                    <p>We offer three different pricing plans that completely cover the needs of our clients. Feel free
                        to select a preferable plan or learn more about each of them below.</p>
                </div>
            </div>
            <div class="row row-30 justify-content-center">
                <div class="col-xl-4 col-md-6 col-12 wow fadeInDown" data-wow-delay=".3s">
                    <div class="pricing-box bg-gray-dark">
                        <div class="pricing-box-tittle">Starter</div>
                        <p>Perfect for startups</p>
                        <hr/>
                        <div class="pricing-box-inner"><span class="pricing-box-symbol">$</span><span
                                    class="pricing-box-price">39</span></div>
                        <div class="pricing-box-label bg-gray">MONTHLY</div>
                        <p>Business Strategy <br>
                            Financial Advisory <br>
                            Operations Management  <br>
                            Strategic Planning <br>
                            Quality Engineering
                        </p>
                        <a class="button button-190 button-circle btn-primary-rounded" href="#">get started</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <div class="pricing-box bg-gray-primary">
                        <div class="pricing-box-tittle">Professional</div>
                        <p>Designed for businesses</p>
                        <hr/>
                        <div class="pricing-box-inner"><span class="pricing-box-symbol">$</span><span
                                    class="pricing-box-price">69</span></div>
                        <div class="pricing-box-label bg-gray-primary-light">MONTHLY</div>
                        <p>Business Strategy <br>
                            Financial Advisory <br>
                            Operations Management  <br>
                            Strategic Planning <br>
                            Quality Engineering
                        </p>
                        <a class="button button-190 button-circle btn-rounded-outline" href="#">get started</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 wow fadeInDown" data-wow-delay=".3s">
                    <div class="pricing-box bg-gray-dark">
                        <div class="pricing-box-tittle">Premium</div>
                        <p>For international enterprises</p>
                        <hr/>
                        <div class="pricing-box-inner"><span class="pricing-box-symbol">$</span><span
                                    class="pricing-box-price">89</span></div>
                        <div class="pricing-box-label bg-gray">MONTHLY</div>
                        <p>Business Strategy <br>
                            Financial Advisory <br>
                            Operations Management  <br>
                            Strategic Planning <br>
                            Quality Engineering
                        </p>
                        <a class="button button-190 button-circle btn-primary-rounded" href="#">get started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Owl Carousel-->
    <section class="section section-md bg-gray-lighten">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="section-name wow fadeInRight text-center" data-wow-delay=".2s">testimonials</div>
                    <h3 class="wow fadeInLeft text-capitalize text-center" data-wow-delay=".3s">What People Say<span
                                class="text-primary"> About Us</span></h3>
                    <div class="owl-carousel review-carousel" data-items="1" data-dots="true" data-nav="false"
                         data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="true"
                         data-autoplay="false">
                        <div class="item">
                            <div class="item-preview wow fadeInDown" data-wow-delay=".2s"><img
                                        src="{{ asset('back-end/images') }}/user-1-216x216.jpg" alt="img"/>
                            </div>
                            <div class="item-description wow fadeInUp" data-wow-delay=".3s">
                                <p>I was impressed by the quality of what your specialists did. They quickly found out
                                    what was the main problem of my company and helped me to form a correct strategy,
                                    which worked perfectly and set my business on the right path.</p>
                                <div class="item-subsection"><span class="item-subsection-title devider-left">Heather Perry</span><span>Regular Client</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-preview wow fadeInDown" data-wow-delay=".2s"><img
                                        src="{{ asset('back-end/images') }}/user-2-216x216.jpg" alt="img" />
                            </div>
                            <div class="item-description wow fadeInUp" data-wow-delay=".3s">
                                <p>I appreciate what you’ve done to help my small company develop and thrive in that
                                    market niche that we specialize in. Your business consulting experts are the best in
                                    the whole industry and I’m going to recommend you to my partners!</p>
                                <div class="item-subsection"><span class="item-subsection-title devider-left">Donald Hughes</span><span>Regular Client</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-preview wow fadeInDown" data-wow-delay=".2s"><img
                                        src="{{ asset('back-end/images') }}/user-3-216x216.jpg" alt="img" />
                            </div>
                            <div class="item-description wow fadeInUp" data-wow-delay=".3s">
                                <p>My cooperation with your team helped me understand that you really care about your
                                    clients – it was proved by a lot of positive reviews already – and that's why I
                                    chose you. Thank you for a great job, you are true professionals!</p>
                                <div class="item-subsection"><span class="item-subsection-title devider-left">Anthony Parker</span><span>Regular Client</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-preview wow fadeInDown" data-wow-delay=".2s"><img
                                        src="{{ asset('back-end/images') }}/user-4-216x216.jpg" alt="img" />
                            </div>
                            <div class="item-description wow fadeInUp" data-wow-delay=".3s">
                                <p>Two years after Cemeriss’s involvement, we are remarkably successful and the leader
                                    in served markets. This brought industry knowledge, best practices, and real-world
                                    solutions to the intricate challenges we faced.</p>
                                <div class="item-subsection"><span class="item-subsection-title devider-left">Jennifer Coleman</span><span>Regular Client</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News-->
    <section class="section section-md bg-gray-dark position-relative custom-index">
        <div class="container position-relative">
            <div class="row row-30 justify-content-center">
                <div class="col-8 text-center text-center">
                    <div class="section-name wow fadeInRight text-white">Our blog</div>
                    <h3 class="text-capitalize wow fadeInLeft text-white" data-wow-delay=".2s">Recent<span
                                class="text-primary"> News</span></h3>
                    <p class="text-accent-gray">Discover the latest news of business consulting, useful tips for your
                        company, and interviews with financial and business experts in our blog, which is updated
                        daily.</p>
                </div>
            </div>
            <div class="row row-30 justify-content-center">
                <div class="col-xl-4 col-md-6 col-12 wow fadeInDown">
                    <div class="post-classic-wrap post-classic-toggle-bg-1">
                        <div class="post-classic-photo"><img src="{{ asset('back-end/images') }}/box-img-1-370x355.jpg" alt="img"/>
                        </div>
                        <div class="post-classic-label button-sm text-uppercase font-weight-normal">business</div>
                        <div class="post-classic-date">JULY 21, 2019</div>
                        <h5><a class="offset-top-10 font-weight-bold" href="#">6 Strategies to Building a Great
                                Business</a></h5>
                        <div class="post-classic-author">By SOPHIA SMITH</div>
                        <div class="post-classic-toggle offset-top-30"
                             data-custom-toggle=".post-classic-toggle-bg-1"></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 wow fadeInDown">
                    <div class="post-classic-wrap post-classic-toggle-bg-2">
                        <div class="post-classic-photo"><img src="{{ asset('back-end/images') }}/box-img-2-370x355.jpg" alt="img"/>
                        </div>
                        <div class="post-classic-label button-sm text-uppercase font-weight-normal">business</div>
                        <div class="post-classic-date">JULY 15, 2019</div>
                        <h5><a class="offset-top-10 font-weight-bold" href="#">12 Ways to Increase Your Income Consulting</a></h5>
                        <div class="post-classic-author">By SOPHIA SMITH</div>
                        <div class="post-classic-toggle offset-top-30"
                             data-custom-toggle=".post-classic-toggle-bg-2"></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 wow fadeInDown">
                    <div class="post-classic-wrap post-classic-toggle-bg-3">
                        <div class="post-classic-photo"><img src="{{ asset('back-end/images') }}/box-img-3-370x355.jpg" alt="img"/>
                        </div>
                        <div class="post-classic-label button-sm text-uppercase font-weight-normal">business</div>
                        <div class="post-classic-date">JULY 12, 2019</div>
                        <h5><a class="offset-top-10 font-weight-bold" href="#">How to Find the Right Consulting Firm</a>
                        </h5>
                        <div class="post-classic-author">By SOPHIA SMITH</div>
                        <div class="post-classic-toggle offset-top-30"
                             data-custom-toggle=".post-classic-toggle-bg-3"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="decor-text decor-text-3 section-sm wow fadeInUp" data-wow-delay=".3s">news</div>
    </section>
    <!--Contacts-->
    <section class="section position-relative">
        <div class="contacts-custom-wrap section-md">
            <div class="container">
                <div class="row justify-content-lg-start justify-content-center">
                    <div class="col-xl-6 col-sm-12 col-12 col-lg-6">
                        <div class="section-name wow fadeInRight">Contact Us</div>
                        <h3 class="devider-left text-capitalize wow fadeInLeft" data-wow-delay=".2s">Get in<span
                                    class="text-primary"> Touch</span></h3>
                        <p class="text-accent-gray">You can contact us any way that is convenient for you. We are
                            available 24/7 via fax, email or telephone. You can also use a quick contact form below.</p>
                        <form class="rd-mailform text-left home-form" data-form-output="form-output-global"
                              data-form-type="contact">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-name">Name<span
                                            class="req-symbol">*</span></label>
                                <input class="form-input" id="contact-name" type="text" name="name"
                                       data-constraints="@Required">
                            </div>
                            <div class="form-wrap">
                                <label class="form-label" for="contact-phone">Phone<span
                                            class="req-symbol">*</span></label>
                                <input class="form-input" id="contact-phone" type="text" name="phone"
                                       data-constraints="@Required @PhoneNumber">
                            </div>
                            <div class="form-wrap">
                                <label class="form-label" for="contact-email">E-Mail<span
                                            class="req-symbol">*</span></label>
                                <input class="form-input" id="contact-email" type="email" name="email"
                                       data-constraints="@Required @Email">
                            </div>
                            <div class="form-wrap">
                                <label class="form-label label-textarea" for="contact-message">Message</label>
                                <textarea class="form-input" id="contact-message" name="message"
                                          data-constraints="@Required"></textarea>
                            </div>
                            <div class="form-button group-sm text-center text-lg-left">
                                <button class="button button-primary button-circle button-lg" type="submit">Send
                                    Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="decor-text decor-text-4 wow fadeInUp" data-wow-delay=".3s">contacts</div>
        <div class="custom-contact-wrap">
            <div class="google-map" id="google-map" data-hue="" data-lightness="1" data-map-style="2"
                 data-saturation="-99" data-longitude="105.831398" data-latitude="21.590348" data-pin-icon=""
                 data-zoom="14" data-map-type="ROADMAP"></div>
        </div>
    </section>

@push('js')

    @endpush
@endsection

