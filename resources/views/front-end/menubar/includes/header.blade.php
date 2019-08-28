<header class="section page-header">
    <!--RD Navbar-->
    <div class="rd-navbar-wrap ab_nav">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
             data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
             data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static"
             data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
             data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px"
             data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                 data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer rd-navbar-collapse bg-gray-dark">
                <div class="rd-navbar-aside">

                    <ul class="social-links">
                        <li  style="color: black;">
                            <div class="rd-navbar-brand">
                                <a class="brand" href="{{ url('/') }}">
                                    <img class="brand-logo-dark"src="{{ asset('back-end/images') }}/logo-default-162x34.png"alt="img"/><img
                                            class="brand-logo-light" src="{{ asset('back-end/images') }}/logo-inverse-162x34.png" alt="img"/>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-inline navbar-contact-list">
                        <li>
                            <div class="rd-navbar-search">
                                <button class="rd-navbar-search-toggle rd-navbar-fixed-element-2"
                                        data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                                <form class="rd-search" action="http://ledthanhdat.vn/cemeriss/search-results.html"
                                      data-search-live="rd-search-results-live" method="GET">
                                    <div class="form-wrap">
                                        <label class="form-label" for="rd-navbar-search-form-input">Search</label>
                                        <input class="rd-navbar-search-form-input form-input"
                                               id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                        <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                    </div>
                                    <button class="rd-search-form-submit fa fa-search" type="submit"></button>
                                </form>
                            </div>
                        </li>
                        <li>
                            <div><a href="singlepage3.html">LOGIN</a></div>
                        </li>
                        <li>
                            <div><a href="singlepage3.html">JOIN FOR FREE</a></div>
                        </li>
                        <li>
                            <ul class="social-links">
                                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa fa-linkedin" href="#"></a></li>
                                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa fa-twitter" href="#"></a></li>
                                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa fa-facebook" href="#"></a></li>
                                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa fa-instagram" href="#"></a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
            {{--                @dd($articleCategories);--}}
            <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                    <!--RD Navbar Panel-->

                    <div class="rd-navbar-main-element">
                        <div class="rd-navbar-nav-wrap">
                            <ul class="rd-navbar-nav">
                                @foreach($articleCategories as $articleCategory )
                                    <li class="rd-nav-item nav"><a class="rd-nav-link" href="{{ url('articles/news?cat_id=').$articleCategory->id }}">{{ $articleCategory->name }}</a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item">
                                                @foreach($articleCategory->article_sub_categories as $article_sub_category)
                                                    <a class="rd-dropdown-link" href="{{ url('/articles/news?id=').$articleCategory->id.'&sub_cat_id='.$article_sub_category->id }}">{{ $article_sub_category->name }}</a>
                                                @endforeach
                                            </li>
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="rd-navbar-search">
                        <ul class="nav_one">
                            <li><a href="">Expert Advice</a></li>
                        </ul>
                        <ul class="nav_one">
                            <li><a href="">Free Report Card</a></li>
                        </ul>
                        <ul class="nav_one">
                            <li class="rd-nav-item"><a class="#" href="#">Reviews</a>
                                <ul class="rd-menu rd-navbar-megamenu">
                                    <li class="rd-megamenu-item">
                                        <h6 class="rd-megamenu-title">Pages 1</h6>
                                        <ul class="rd-megamenu-list">
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Typography</a>
                                            </li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="buttons.html">Buttons</a>
                                            </li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="forms.html">Forms</a>
                                            </li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tabs-and-accordions.html">Tabs and accordions</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="progress-bars.html">Progress bars</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tables.html">Tables</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="rd-megamenu-item">
                                        <h6 class="rd-megamenu-title">Pages 2</h6>
                                        <ul class="rd-megamenu-list">
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="grid-system.html">Grid system</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="privacy-policy.html">Privacy policy</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="under-construction.html">Under Construction</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="search-results.html">Search results</a></li>
                                        </ul>
                                    </li>
                                    <li class="rd-megamenu-item">
                                        <h6 class="rd-megamenu-title">Pages 3</h6>
                                        <ul class="rd-megamenu-list">
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="grid-system.html">Grid system</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="privacy-policy.html">Privacy policy</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="under-construction.html">Under Construction</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="search-results.html">Search results</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<section id="sec_two" class="section section-intro context-dark">
    <div class="intro-bg" style="background: url({{ asset('back-end/images') }}/intro-bg-1.jpg) no-repeat;background-size:cover;background-position: top center; "></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <h1 class="font-weight-bold wow fadeInLeft">All Content</h1>
                <p class="intro-description wow fadeInRight">Feel free to learn more about our team and company on this page.
                    We are always happy to help you!</p>
            </div>
        </div>
    </div>
</section>
