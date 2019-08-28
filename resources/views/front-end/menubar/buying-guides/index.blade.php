@extends('front-end.menubar.master')
@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    @endsection
@section('body')
    <section id="scrollspy">
{{--        <div class="container-fluid" style="background-color: #f5f5f5;color:#fff;height:10px;">--}}

{{--        </div>--}}
        <br>

        <div class="container">
            <div class="row">
                <nav class="navbar  col-sm-3" id="myScrollspy">
                    <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
                        <li><a href="#section1"> Best Product Survice</a></li>
                        <li><a href="#section2"> Trends to Look for in 2019</a></li>
                        <li><a href="#section3"> Reviews</a></li>
                        <li><a href="#section4"> Our Methodology</a></li>
                        <li><a href="#section5"> Pricing</a></li>
                        <li><a href="#section6"> Features</a></li>
                        <li><a href="#section7"> Best Providers</a></li>
                    </ul>
                </nav>
{{--                @dd($profileArticles->business_profile_articles);--}}

{{--                @dd($profileArticles);--}}

                <div class="col-sm-9">
                    <div class="spy-text">
                        <p>{{ $buyingGuide->body }}</p>
                    </div><br><br>

                    <div id="section1">
                        <div>
                            <h3>Best Product Survice</h3>
                        </div>
                        <br>
                    @foreach($profileArticles as $buyingGuide)
                        <div class="container">
                                <img src="{{  url('storage/business_profile/'
                                .$buyingGuide->business_profile_article->image) }}" alt="Pineapple"
                                     style="width: 150px; float: left;height: 120px;margin-right: 15px;">
                                <h4>{{ $buyingGuide->business_profile_article->title }}</h4>
                                <p>{{ $buyingGuide->business_profile_article->long_description }}</p>
{{--                            @dd($buyingGuide->business_profile_article->short_description)--}}
                        </div>
                            @endforeach
                    </div><br><br>

{{--                    <div id="section1">--}}
{{--                        <h3 style="color: #fff;">1. Join the right LinkedIn Groups.</h3><!-- dont edit this line -->--}}
{{--                        <h3>Best Product Survice</h3>--}}



{{--                        <div  class="tabcontent">--}}
{{--                            <div class="container first_tab">--}}
{{--                                <img src="{{ asset('back-end/images') }}/img_nature_wide.jpg" alt="Notebook" style="width:100%;">--}}
{{--                                <div class="content first_text">--}}
{{--                                    <h3>Postage Meters Can Save Your Business Time and Money 2019</h3>--}}
{{--                                    <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo,--}}
{{--                                        eum  cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro,--}}
{{--                                        pri  ponderum tractatos ei.</p>--}}
{{--                                </div>--}}

{{--                                <div class="text_secL">--}}
{{--                                        <div class="text_l  1" >--}}
{{--                                            <a href="">--}}
{{--                                                <img src="" alt="Pineapple"--}}
{{--                                                     style="width: 105px; float: left;height: 89px;margin-right: 15px;">--}}
{{--                                                <h4>Business Time and Money 2019</h4>--}}
{{--                                                <p>olor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo,--}}
{{--                                                    eum  cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro,--}}
{{--                                                    pri  ponderum tractatos ei.</p>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                 <button class="tablinks" onclick="openCity(event, 'London')">More Buying Guides</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- tabs start -->--}}

{{--                        <p>The first step to creating leads from LinkedIn Groups is finding and joining a group full of potential customers. To do that, decide who your ideal client or audience is. Once you know who you want to market and sell your product to, find a group the caters to that community. [See related article: How to Reach Your Target Audience.]--}}

{{--                            "Using that profile, go to the groups that have a large number of individuals as members," said Bill Corbett Jr., president of Corbett Public Relations. "For example, if you want to market to accountant groups, you go to accountant groups. To effectively convert sales, you have to be in a target-rich environment."--}}

{{--                            Popular LinkedIn groups for small business owners and entrepreneurs include Executive Suite, Band of Entrepreneurs, and Social Media Marketing. [For more great LinkedIn groups for small businesses, check out this article on Business News Daily.]--}}

{{--                            Carefully read the group's description to see if it fits your business, your goals and that the people posting in it are contributing valuable content rather than joining as many groups as they can.--}}

{{--                        </p>--}}
{{--                    </div>--}}
                    <div id="section2">
                        <h3 style="color: #ffffff00;">2.Trends to Look for in 2019</h3>
                        <h3>2. Trends to Look for in 2019..</h3>
                        <p>The first step to creating leads from LinkedIn Groups is finding and joining a group full of potential customers. To do that, decide who your ideal client or audience is. Once you know who you want to market and sell your product to, find a group the caters to that community. [See related article: How to Reach Your Target Audience.]

                            "Using that profile, go to the groups that have a large number of individuals as members," said Bill Corbett Jr., president of Corbett Public Relations. "For example, if you want to market to accountant groups, you go to accountant groups. To effectively convert sales, you have to be in a target-rich environment."

                            Popular LinkedIn groups for small business owners and entrepreneurs include Executive Suite, Band of Entrepreneurs, and Social Media Marketing. [For more great LinkedIn groups for small businesses, check out this article on Business News Daily.]

                            Carefully read the group's description to see if it fits your business, your goals and that the people posting in it are contributing valuable content rather than joining as many groups as they can.

                            "Spend some real time looking through the groups and thinking about who is genuinely a fit for what you do," said Oliver Roddy, sales and marketing manager at Catalyst Marketing Agency. "A scatter-gun approach will not work, and people will sense a salesy approach miles off, so just be real."

                            After you join a group, you can run a filtered search of members based on things like location, job title, and industry to identify your ideal prospective connections.

                            "Knowing the right people to connect [with] makes it easy for you to engage with them," said Asim Rais Siddiqui, CTO and co-founder of Tekrevol.

                            Avoid sending connection requests at random to whoever is in the group — this comes across as salesy, and can alienate several potential connections. Instead, take the time to see who is in the group and who can be most valuable to you and your business, then send a carefully thought-out invitation.</p>
                    </div>
                    <div id="section3">
                        <h3 style="color: #ffffff00;">3.Reviews</h3>
                        <h3>3. Reviews.</h3>
                        <p>The first step to creating leads from LinkedIn Groups is finding and joining a group full of potential customers. To do that, decide who your ideal client or audience is. Once you know who you want to market and sell your product to, find a group the caters to that community. [See related article: How to Reach Your Target Audience.]</p>

                        <!--========================= Carousal start ===========================-->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <!--   <h2>Trending <b>Products</b></h2> -->
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                                        <!-- Carousel indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                        </ol>
                                        <!-- Wrapper for carousel items -->
                                        <div class="carousel-inner">
                                            <div class="item carousel-item active">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="thumb-wrapper">
                                                            <div class="img-box">
                                                                <img src="assets/images/tabs_img.jpg" class="img-responsive img-fluid" alt="">
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h4>Apple iPad</h4>
                                                                <p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
                                                                <div class="star-rating">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <div><a href="#">Read More</a></div>
                                                                </div>

                                                                <a href="#" class="btn btn-primary">Compare Quotes </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="thumb-wrapper">
                                                            <div class="img-box">
                                                                <img src="assets/images/tabs_img.jpg" class="img-responsive img-fluid" alt="">
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h4>Apple iPad</h4>
                                                                <p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
                                                                <div class="star-rating">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <div><a href="#">Read More</a></div>
                                                                </div>

                                                                <a href="#" class="btn btn-primary">Compare Quotes </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="thumb-wrapper">
                                                            <div class="img-box">
                                                                <img src="assets/images/tabs_img.jpg" class="img-responsive img-fluid" alt="">
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h4>Apple iPad</h4>
                                                                <p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
                                                                <div class="star-rating">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <div><a href="#">Read More</a></div>
                                                                </div>

                                                                <a href="#" class="btn btn-primary">Compare Quotes </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="thumb-wrapper">
                                                            <div class="img-box">
                                                                <img src="assets/images/tabs_img.jpg" class="img-responsive img-fluid" alt="">
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h4>Apple iPad</h4>
                                                                <p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
                                                                <div class="star-rating">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <div><a href="#">Read More</a></div>
                                                                </div>

                                                                <a href="#" class="btn btn-primary">Compare Quotes </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item carousel-item">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="thumb-wrapper">
                                                            <div class="img-box">
                                                                <img src="assets/images/tabs_img.jpg" class="img-responsive img-fluid" alt="">
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h4>Apple iPad</h4>
                                                                <p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
                                                                <div class="star-rating">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <div><a href="#">Read More</a></div>
                                                                </div>

                                                                <a href="#" class="btn btn-primary">Compare Quotes </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="thumb-wrapper">
                                                            <div class="img-box">
                                                                <img src="assets/images/tabs_img.jpg" class="img-responsive img-fluid" alt="">
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h4>Apple iPad</h4>
                                                                <p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
                                                                <div class="star-rating">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <div><a href="#">Read More</a></div>
                                                                </div>

                                                                <a href="#" class="btn btn-primary">Compare Quotes </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="thumb-wrapper">
                                                            <div class="img-box">
                                                                <img src="assets/images/tabs_img.jpg" class="img-responsive img-fluid" alt="">
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h4>Apple iPad</h4>
                                                                <p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
                                                                <div class="star-rating">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <div><a href="#">Read More</a></div>
                                                                </div>

                                                                <a href="#" class="btn btn-primary">Compare Quotes </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="thumb-wrapper">
                                                            <div class="img-box">
                                                                <img src="assets/images/tabs_img.jpg" class="img-responsive img-fluid" alt="">
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h4>Apple iPad</h4>
                                                                <p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
                                                                <div class="star-rating">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <div><a href="#">Read More</a></div>
                                                                </div>

                                                                <a href="#" class="btn btn-primary">Compare Quotes </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item carousel-item">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="thumb-wrapper">
                                                            <div class="img-box">
                                                                <img src="assets/images/tabs_img.jpg" class="img-responsive img-fluid" alt="">
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h4>Apple iPad</h4>
                                                                <p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
                                                                <div class="star-rating">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <div><a href="#">Read More</a></div>
                                                                </div>

                                                                <a href="#" class="btn btn-primary">Compare Quotes </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="thumb-wrapper">
                                                            <div class="img-box">
                                                                <img src="assets/images/tabs_img.jpg" class="img-responsive img-fluid" alt="">
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h4>Apple iPad</h4>
                                                                <p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
                                                                <div class="star-rating">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <div><a href="#">Read More</a></div>
                                                                </div>

                                                                <a href="#" class="btn btn-primary">Compare Quotes </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="thumb-wrapper">
                                                            <div class="img-box">
                                                                <img src="assets/images/tabs_img.jpg" class="img-responsive img-fluid" alt="">
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h4>Apple iPad</h4>
                                                                <p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
                                                                <div class="star-rating">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <div><a href="#">Read More</a></div>
                                                                </div>

                                                                <a href="#" class="btn btn-primary">Compare Quotes </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="thumb-wrapper">
                                                            <div class="img-box">
                                                                <img src="assets/images/tabs_img.jpg" class="img-responsive img-fluid" alt="">
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h4>Apple iPad</h4>
                                                                <p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
                                                                <div class="star-rating">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <div><a href="#">Read More</a></div>
                                                                </div>

                                                                <a href="#" class="btn btn-primary">Compare Quotes </a>
                                                            </div>
                                                        </div>
                                                    </div></div>
                                            </div>
                                        </div>
                                        <!-- Carousel controls -->
                                        <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--========================= Carousal End ===========================-->

                    </div>
                    <div id="section4">
                        <h3 style="color: #fff;">1. Join the right LinkedIn Groups.</h3>
                        <h3>4. Methodology.</h3>
                        <p>The first step to creating leads from LinkedIn Groups is finding and joining a group full of potential customers. To do that, decide who your ideal client or audience is. Once you know who you want to market and sell your product to, find a group the caters to that community. [See related article: How to Reach Your Target Audience.]

                            "Using that profile, go to the groups that have a large number of individuals as members," said Bill Corbett Jr., president of Corbett Public Relations. "For example, if you want to market to accountant groups, you go to accountant groups. To effectively convert sales, you have to be in a target-rich environment."

                            Popular LinkedIn groups for small business owners and entrepreneurs include Executive Suite, Band of Entrepreneurs, and Social Media Marketing. [For more great LinkedIn groups for small businesses, check out this article on Business News Daily.]

                            Carefully read the group's description to see if it fits your business, your goals and that the people posting in it are contributing valuable content rather than joining as many groups as they can.</p>
                        <ul style="list-style-type:square;">
                            <li>Printer size</li>
                            <li>Price</li>
                            <li>Printing speed</li>
                            <li>Printing quality</li>
                            <li>Customer service options</li>
                            <li>Warranties</li>
                        </ul>
                    </div>
                    <div id="section5">
                        <h3 style="color: #fff;">5. Join the right LinkedIn Groups.</h3>
                        <h3>5. Pricing.</h3>
                        <p>The first step to creating leads from LinkedIn Groups is finding and joining a group full of potential customers. To do that, decide who your ideal client or audience is. Once you know who you want to market and sell your product to, find a group the caters to that community. [See related article: How to Reach Your Target Audience.]

                            "Using that profile, go to the groups that have a large number of individuals as members," said Bill Corbett Jr., president of Corbett Public Relations. "For example, if you want to market to accountant groups, you go to accountant groups. To effectively convert sales, you have to be in a target-rich environment."

                            Popular LinkedIn groups for small business owners and entrepreneurs include Executive Suite, Band of Entrepreneurs, and Social Media Marketing. [For more great LinkedIn groups for small businesses, check out this article on Business News Daily.]

                            Carefully read the group's description to see if it fits your business, your goals and that the people posting in it are contributing valuable content rather than joining as many groups as they can.

                            "Spend some real time looking through the groups and thinking about who is genuinely a fit for what you do," said Oliver Roddy, sales and marketing manager at Catalyst Marketing Agency. "A scatter-gun approach will not work, and people will sense a salesy approach miles off, so just be real."

                            After you join a group, you can run a filtered search of members based on things like location, job title, and industry to identify your ideal prospective connections.

                            "Knowing the right people to connect [with] makes it easy for you to engage with them," said Asim Rais Siddiqui, CTO and co-founder of Tekrevol.

                            Avoid sending connection requests at random to whoever is in the group — this comes across as salesy, and can alienate several potential connections. Instead, take the time to see who is in the group and who can be most valuable to you and your business, then send a carefully thought-out invitation.</p>
                    </div>

                    <div id="section6">
                        <h3 style="color: #fff;">5. Join the right LinkedIn Groups.</h3>
                        <h3>5. Features.</h3>
                        <p>The first step to creating leads from LinkedIn Groups is finding and joining a group full of potential customers. To do that, decide who your ideal client or audience is. Once you know who you want to market and sell your product to, find a group the caters to that community. [See related article: How to Reach Your Target Audience.]

                            "Using that profile, go to the groups that have a large number of individuals as members," said Bill Corbett Jr., president of Corbett Public Relations. "For example, if you want to market to accountant groups, you go to accountant groups. To effectively convert sales, you have to be in a target-rich environment."

                            Popular LinkedIn groups for small business owners and entrepreneurs include Executive Suite, Band of Entrepreneurs, and Social Media Marketing. [For more great LinkedIn groups for small businesses, check out this article on Business News Daily.]

                            Carefully read the group's description to see if it fits your business, your goals and that the people posting in it are contributing valuable content rather than joining as many groups as they can.

                            "Spend some real time looking through the groups and thinking about who is genuinely a fit for what you do," said Oliver Roddy, sales and marketing manager at Catalyst Marketing Agency. "A scatter-gun approach will not work, and people will sense a salesy approach miles off, so just be real."

                            After you join a group, you can run a filtered search of members based on things like location, job title, and industry to identify your ideal prospective connections.

                            "Knowing the right people to connect [with] makes it easy for you to engage with them," said Asim Rais Siddiqui, CTO and co-founder of Tekrevol.

                            Avoid sending connection requests at random to whoever is in the group — this comes across as salesy, and can alienate several potential connections. Instead, take the time to see who is in the group and who can be most valuable to you and your business, then send a carefully thought-out invitation.</p>
                    </div>
                    <div id="section7">
                        <h3 style="color: #fff;">1. Join the right LinkedIn Groups.</h3>

                        <h3> Best Providers.</h3>
                        <h4>List of the The Best Wide-Format Printers of 2019</h4><br>

                        <div class="new-services">
                            <div class="col-md-2">
                                <img src="assets/images/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                            </div>
                            <div class="col-md-10">
                                <h5>Canon imagePROGRAF iPF840</h5>
                                <a href="#">https://www.bd.ourbusniss.com</a>
                                <h5>Canon's imagePROGRAF iPF840 leverages dye-based ink to print on a variety of large-format media.</h5>
                                <p> <a href="#">Visit Canon imagePROGRAF iPF840</a></p>
                            </div>
                        </div>
                        <div class="new-services">
                            <div class="col-md-2">
                                <img src="assets/images/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                            </div>
                            <div class="col-md-10">
                                <h5>Canon imagePROGRAF iPF840</h5>
                                <a href="#">https://www.bd.ourbusniss.com</a>
                                <h5>Canon's imagePROGRAF iPF840 leverages dye-based ink to print on a variety of large-format media.</h5>
                                <p> <a href="#">Visit Canon imagePROGRAF iPF840</a></p>
                            </div>
                        </div>
                        <div class="new-services">
                            <div class="col-md-2">
                                <img src="assets/images/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                            </div>
                            <div class="col-md-10">
                                <h5>Canon imagePROGRAF iPF840</h5>
                                <a href="#">https://www.bd.ourbusniss.com</a>
                                <h5>Canon's imagePROGRAF iPF840 leverages dye-based ink to print on a variety of large-format media.</h5>
                                <p> <a href="#">Visit Canon imagePROGRAF iPF840</a></p>
                            </div>
                        </div>
                        <div class="new-services">
                            <div class="col-md-2">
                                <img src="assets/images/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                            </div>
                            <div class="col-md-10">
                                <h5>Canon imagePROGRAF iPF840</h5>
                                <a href="#">https://www.bd.ourbusniss.com</a>
                                <h5>Canon's imagePROGRAF iPF840 leverages dye-based ink to print on a variety of large-format media.</h5>
                                <p> <a href="#">Visit Canon imagePROGRAF iPF840</a></p>
                            </div>
                        </div>
                        <div class="new-services">
                            <div class="col-md-2">
                                <img src="assets/images/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                            </div>
                            <div class="col-md-10">
                                <h5>Canon imagePROGRAF iPF840</h5>
                                <a href="#">https://www.bd.ourbusniss.com</a>
                                <h5>Canon's imagePROGRAF iPF840 leverages dye-based ink to print on a variety of large-format media.</h5>
                                <p> <a href="#">Visit Canon imagePROGRAF iPF840</a></p>
                            </div>
                        </div>
                        <div class="new-services">
                            <div class="col-md-2">
                                <img src="assets/images/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                            </div>
                            <div class="col-md-10">
                                <h5>Canon imagePROGRAF iPF840</h5>
                                <a href="#">https://www.bd.ourbusniss.com</a>
                                <h5>Canon's imagePROGRAF iPF840 leverages dye-based ink to print on a variety of large-format media.</h5>
                                <p> <a href="#">Visit Canon imagePROGRAF iPF840</a></p>
                            </div>
                        </div>
                        <div class="new-services">
                            <div class="col-md-2">
                                <img src="assets/images/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                            </div>
                            <div class="col-md-10">
                                <h5>Canon imagePROGRAF iPF840</h5>
                                <a href="#">https://www.bd.ourbusniss.com</a>
                                <h5>Canon's imagePROGRAF iPF840 leverages dye-based ink to print on a variety of large-format media.</h5>
                                <p> <a href="#">Visit Canon imagePROGRAF iPF840</a></p>
                            </div>
                        </div>
                    </div><br><br>


                    <div class="join-page">
                        <p>Like the article? Sign up for more great content.</p>
                        <button class="tablinks join-n" onclick="openCity(event, 'London')">JOIN OUR COMMUNITY</button>
                        <p>Already a member? <a href=""> Sign in.</a></p>
                    </div>
                </div>
            </div>
            </div>
    </section>


   @section('js')
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

       <script>
           $(document).ready(function(){
               // Add scrollspy to <body>
               $('body').scrollspy({target: ".navbar", offset: 50});

               // Add smooth scrolling on all links inside the navbar
               $("#myScrollspy a").on('click', function(event) {
                   // Make sure this.hash has a value before overriding default behavior
                   if (this.hash !== "") {
                       // Prevent default anchor click behavior
                       event.preventDefault();

                       // Store hash
                       var hash = this.hash;

                       // Using jQuery's animate() method to add smooth page scroll
                       // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                       $('html, body').animate({
                           scrollTop: $(hash).offset().top
                       }, 800, function(){

                           // Add hash (#) to URL when done scrolling (default click behavior)
                           window.location.hash = hash;
                       });
                   }  // End if
               });
           });
       </script>
   @endsection
@endsection
