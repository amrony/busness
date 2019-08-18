<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>About</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('back-end/images') }}/favicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('back-end/css/bootstrap.css')  }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/mercury.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/lightgallery.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/lg-fb-comment-box.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/lg-transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/style.css') }}">
</head>
<body id="about_s">
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div class="page">
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
                                    <a class="brand" href="index-2.html">
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
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!--RD Navbar Panel-->

                        <div class="rd-navbar-main-element">
                            <div class="rd-navbar-nav-wrap">
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="index-2.html">Business Basics</a>
                                    </li>

                                    <li class="rd-nav-item nav"><a class="rd-nav-link" href="about.html">Career</a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Post</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Post</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Post</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="rd-nav-item"><a class="rd-nav-link" href="services.html">Finance</a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item">
                                                <a class="rd-dropdown-link" href="single-service.html">Single service</a>
                                            </li>
                                            <li class="rd-dropdown-item">
                                                <a class="rd-dropdown-link" href="single-service.html">Single service</a>
                                            </li>
                                            <li class="rd-dropdown-item">
                                                <a class="rd-dropdown-link" href="single-service.html">Single service</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="blog.html">Human Resources</a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item">
                                                <a class="rd-dropdown-link" href="blog-post.html">Blog Post</a>
                                            </li>
                                            <li class="rd-dropdown-item">
                                                <a class="rd-dropdown-link" href="blog-post.html">Blog Post</a>
                                            </li>
                                            <li class="rd-dropdown-item">
                                                <a class="rd-dropdown-link" href="blog-post.html">Blog Post</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">Marketing</a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Blog Post</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Blog Post</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Blog Post</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Technology</a>
                                    </li>
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
                    <p class="intro-description wow fadeInRight">Feel free to learn more about our team and company on this page. We are always happy to help you!</p>
                </div>
            </div>
        </div>
    </section>


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
                                <h3><a href="singelpage.html">Postage Meters Can Save Your Business Time and Money 2019</a></h3>
                                <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
                            </div>

                            <div class="text_secL">
                                <div class="text_l" >
                                    <a href="singelpage.html">
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                        <h4><a href="singelpage.html">Lorem ipsum dolor sit amet</a></h4>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </a>
                                </div>
                                <div class="text_l">
                                    <a href="singelpage.html">
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                        <h4><a href="singelpage.html">Lorem ipsum dolor sit amet</a></h4>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                        </p>
                                </div>
                                <div class="text_l">
                                    <p>
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                    <h4><a href="singelpage.html">Lorem ipsum dolor sit amet</a></h4>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </p>
                                </div>
                                <div class="text_l">
                                    <p>
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                    <h4><a href="singelpage.html">Lorem ipsum dolor sit amet</a></h4>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </p>
                                </div>
                                <div class="text_l">
                                    <p>
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                    <h4><a href="singelpage.html">Lorem ipsum dolor sit amet</a></h4>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </p>
                                </div>
                                <div class="text_l">
                                    <p>
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </p>
                                </div>
                                <div class="text_l">
                                    <p>
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </p>
                                </div>
                                <div class="text_l">
                                    <p>
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- second tabs -->
                    <div id="Paris" class="tabcontent">
                        <div class="container first_tab">
                            <img src="{{ asset('back-end/images') }}/img_nature_wide.jpg" alt="Notebook" style="width:100%;">
                            <div class="content first_text">
                                <h3>Postage Meters Can Save Your Business Time and Money 2019</h3>
                                <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
                            </div>

                            <div class="text_secL">
                                <div class="text_l  1" >
                                    <a href="singelpage.html">
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                        <h4>Lorem ipsum dolor sit amet</h4>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </a>
                                </div>
                                <div class="text_l  2">
                                    <a href="singelpage.html">
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                        <h4>Lorem ipsum dolor sit amet</h4>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </a>
                                </div>
                                <div class="text_l  3">
                                    <a href="singelpage.html">
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                        <h4>Lorem ipsum dolor sit amet</h4>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </a>
                                </div>
                                <div class="text_l  4">
                                    <p>
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </p>
                                </div>
                                <div class="text_l  5">
                                    <p>
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </p>
                                </div>
                                <div class="text_l  6">
                                    <p>
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </p>
                                </div>
                                <div class="text_l  7">
                                    <p>
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </p>
                                </div>
                                <div class="text_l  8">
                                    <p>
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </p>
                                </div>
                                <button class="tablinks" onclick="openCity(event, 'London')">More Buying Guides</button>
                            </div>
                        </div>
                    </div>
                    <!-- third tabs -->
                    <div id="Tokyo" class="tabcontent">
                        <div class="container first_tab">
                            <img src="{{ asset('back-end/images') }}/img_nature_wide.jpg" alt="Notebook" style="width:100%;">
                            <div class="content first_text">
                                <h3>Postage Meters Can Save Your Business Time and Money 2019</h3>
                                <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
                            </div>

                            <div class="text_secL">
                                <div class="text_l  1" >
                                    <a href="singelpage2.html">
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                        <h4>Lorem ipsum dolor sit amet</h4>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </a>
                                </div>
                                <div class="text_l  2">
                                    <a href="singelpage2.html">
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                        <h4>Lorem ipsum dolor sit amet</h4>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </a>
                                </div>
                                <div class="text_l  3">
                                    <a href="singelpage2.html">
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                        <h4>Lorem ipsum dolor sit amet</h4>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </a>
                                </div>
                                <div class="text_l  4">
                                    <a href="singelpage2.html">
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                        <h4>Lorem ipsum dolor sit amet</h4>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </a>
                                </div>
                                <div class="text_l  5">
                                    <a href="singelpage2.html">
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                        <h4>Lorem ipsum dolor sit amet</h4>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </a>
                                </div>
                                <div class="text_l  6">
                                    <a href="singelpage2.html">
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                        <h4>Lorem ipsum dolor sit amet</h4>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </a>
                                </div>
                                <div class="text_l  7">
                                    <a href="singelpage2.html">
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                        <h4>Lorem ipsum dolor sit amet</h4>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </a>
                                </div>
                                <div class="text_l  8">
                                    <a href="singelpage2.html">
                                        <img src="{{ asset('back-end/images') }}/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                        <h4>Lorem ipsum dolor sit amet</h4>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                                    </a>
                                </div>
                                <button class="tablinks" onclick="openCity(event, 'London')">More Buying Guides</button>
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
                                                <h4>What do you consider as some of the top concerns for an SEO or marketing agency in 2019?</h4>
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
                    <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager here at business.com! I will be your go-to resource for the business.com community.</div>
                </div>
            </div>
            <div class="col-sm">
                <div class="gallery">
                    <a target="_blank" href="img_forest.jpg">
                        <img src="{{ asset('back-end/images') }}/user-1-216x216.jpg" alt="Forest" width="600" height="400">
                    </a>
                    <h4>Jeff Ropelato</h4>
                    <p class="disabled">Marketing Strategy Expert US.</p>
                    <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager here at business.com! I will be your go-to resource for the business.com community.</div>
                </div>
            </div>
            <div class="col-sm">
                <div class="gallery">
                    <a target="_blank" href="img_forest.jpg">
                        <img src="{{ asset('back-end/images') }}/textim3.jpg" alt="Forest" width="600" height="400">
                    </a>
                    <h4>Jeff Ropelato</h4>
                    <p class="disabled">Marketing Strategy Expert US.</p>
                    <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager here at business.com! I will be your go-to resource for the business.com community.</div>
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
                    <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager here at business.com! I will be your go-to resource for the business.com community.</div>
                </div>
            </div>
            <div class="col-sm">
                <div class="gallery">
                    <a target="_blank" href="img_forest.jpg">
                        <img src="{{ asset('back-end/images') }}/user-1-216x216.jpg" alt="Forest" width="600" height="400">
                    </a>
                    <h4>Jeff Ropelato</h4>
                    <p class="disabled">Marketing Strategy Expert US.</p>
                    <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager here at business.com! I will be your go-to resource for the business.com community.</div>
                </div>
            </div>
            <div class="col-sm">
                <div class="gallery">
                    <a target="_blank" href="img_forest.jpg">
                        <img src="{{ asset('back-end/images') }}/textim3.jpg" alt="Forest" width="600" height="400">
                    </a>
                    <h4>Jeff Ropelato</h4>
                    <p class="disabled">Marketing Strategy Expert US.</p>
                    <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager here at business.com! I will be your go-to resource for the business.com community.</div>
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
                    <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager here at business.com! I will be your go-to resource for the business.com community.</div>
                </div>
            </div>
            <div class="col-sm">
                <div class="gallery">
                    <a target="_blank" href="img_forest.jpg">
                        <img src="{{ asset('back-end/images') }}/user-1-216x216.jpg" alt="Forest" width="600" height="400">
                    </a>
                    <h4>Jeff Ropelato</h4>
                    <p class="disabled">Marketing Strategy Expert US.</p>
                    <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager here at business.com! I will be your go-to resource for the business.com community.</div>
                </div>
            </div>
            <div class="col-sm">
                <div class="gallery">
                    <a target="_blank" href="img_forest.jpg">
                        <img src="{{ asset('back-end/images') }}/textim3.jpg" alt="Forest" width="600" height="400">
                    </a>
                    <h4>Jeff Ropelato</h4>
                    <p class="disabled">Marketing Strategy Expert US.</p>
                    <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager here at business.com! I will be your go-to resource for the business.com community.</div>
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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                <button class="tablinks six_no_tabs" onclick="openCity(event, 'London')">Learn More</button>
                </p>
            </div>
            <div class="text_l  2">
                <p>
                    <img src="{{ asset('back-end/images') }}/textim2.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                <h4>Lorem ipsum dolor sit amet</h4>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                <button class="tablinks six_no_tabs" onclick="openCity(event, 'London')">Learn More</button>
                </p>
            </div>
            <div class="text_l  3">
                <p>
                    <img src="{{ asset('back-end/images') }}/textim2.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                <h4>Lorem ipsum dolor sit amet</h4>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                <button class="tablinks six_no_tabs" onclick="openCity(event, 'London')">Learn More</button>
                </p>
            </div>
            <div class="text_l  4">
                <p>
                    <img src="{{ asset('back-end/images') }}/textim2.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                <h4>Lorem ipsum dolor sit amet</h4>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                <button class="tablinks six_no_tabs" onclick="openCity(event, 'London')">Learn More</button>
                </p>
            </div>
            <div class="text_l  5">
                <p>
                    <img src="{{ asset('back-end/images') }}/textim2.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                <h4>Lorem ipsum dolor sit amet</h4>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                <button class="tablinks six_no_tabs" onclick="openCity(event, 'London')">Learn More</button>
                </p>
            </div>
            <div class="text_l  6">
                <p>
                    <img src="{{ asset('back-end/images') }}/textim2.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                <h4>Lorem ipsum dolor sit amet</h4>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                <button class="tablinks six_no_tabs" onclick="openCity(event, 'London')">Learn More</button>
                </p>
            </div>
            <div class="text_l  7">
                <p>
                    <img src="{{ asset('back-end/images') }}/textim2.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                <h4>Lorem ipsum dolor sit amet</h4>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
                <button class="tablinks six_no_tabs" onclick="openCity(event, 'London')">Learn More</button>
                </p>
            </div>
            <div class="text_l  8">
                <p>
                    <img src="{{ asset('back-end/images') }}/textim2.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                <h4>Lorem ipsum dolor sit amet</h4>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim .
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
<!--Footer-->
<footer class="section footer-classic section-sm">
    <div class="container">
        <div class="row row-30">
            <div class="col-lg-3 wow fadeInLeft">
                <!--Brand--><a class="brand" href="index-2.html"><img class="brand-logo-dark" src="{{ asset('back-end/images') }}/logo-default-162x34.png" alt="img" /><img class="brand-logo-light" src="{{ asset('back-end/images') }}/logo-inverse-162x34.png" alt="img" /></a>
                <p class="footer-classic-description offset-top-0 offset-right-25">Cemeriss provides a full range of business consulting & advisory services to small, medium, and international companies worldwide. We use innovations and experience to drive your success.</p>
            </div>
            <div class="col-lg-3 col-sm-8 wow fadeInUp">
                <P class="footer-classic-title">contact info</P>
                <div class="d-block offset-top-0">2164 Wall St, New York<span class="d-lg-block">NY 10122, USA</span></div><a class="d-inline-block accent-link" href="#"><span class="__cf_email__" data-cfemail="8ce5e2eae3cce8e9e1e3e0e5e2e7a2e3feeb">info@demolink.org</span></a><a class="d-inline-block" href="tel:#">+1 800 123 45 67</a>
                <ul>
                    <li>Mon-Thu:<span class="d-inline-block offset-left-10 text-white">9:30 AM - 9:00 PM</span></li>
                    <li>Fri:<span class="d-inline-block offset-left-10 text-white">10:00 AM - 9:00 PM</span></li>
                    <li>Sat:<span class="d-inline-block offset-left-10 text-white">10:00 AM - 3:00 PM</span></li>
                </ul>
            </div>
            <div class="col-lg-2 col-sm-4 wow fadeInUp" data-wow-delay=".3s">
                <P class="footer-classic-title">Quick Links</P>
                <ul class="footer-classic-nav-list">
                    <li><a href="index-2.html">Home</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                </ul>
            </div>
            <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".2s">
                <P class="footer-classic-title">newsletter</P>
                <form class="rd-mailform text-left footer-classic-subscribe-form" data-form-output="form-output-global" data-form-type="contact">
                    <div class="form-wrap">
                        <label class="form-label" for="subscribe-email">Your Email Address</label>
                        <input class="form-input" id="subscribe-email" type="email" name="email" data-constraints="@Email @Required">
                    </div>
                    <div class="form-button group-sm text-center text-lg-left">
                        <button class="button button-primary button-circle" type="submit">sign up</button>
                    </div>
                </form>
                <p>Be the first to find out about our latest news, updates, and special offers.</p>
            </div>
        </div>
    </div>
    <div class="container wow fadeInUp" data-wow-delay=".4s">
        <div class="footer-classic-aside">
            <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Cemeriss</span><span>.&nbsp;</span><span>All rights reserved.</span><span>&nbsp;</span><span>Terms and Conditions</span><span>&nbsp;</span><span>|</span><span>&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a></p>
            <ul class="social-links">
                <li><a class="fa fa fa-linkedin" href="#"></a></li>
                <li><a class="fa fa fa fa-twitter" href="#"></a></li>
                <li><a class="fa fa fa-facebook" href="#"></a></li>
                <li><a class="fa fa fa-instagram" href="#"></a></li>
            </ul>
        </div>
    </div>
</footer>
</div>
<div class="snackbars" id="form-output-global"></div>
<script src="{{ asset('back-end') }}/js/jQuery.js"></script>
<script src="{{ asset('back-end') }}/js/Cookie.js"></script>
<script src="{{ asset('back-end') }}/js/Device.js"></script>
<script src="{{ asset('back-end') }}/js/ResizeEvent.js"></script>
<script src="{{ asset('back-end') }}/js/Easing.js"></script>
<script src="{{ asset('back-end') }}/js/TouchSwipe.js"></script>
<script src="{{ asset('back-end') }}/js/Popper.js"></script>
<script src="{{ asset('back-end') }}/js/Bootstrap.js"></script>
<script src="{{ asset('back-end') }}/js/Regula.js"></script>
<script src="{{ asset('back-end') }}/js/Form.js"></script>
<script src="{{ asset('back-end') }}/js/Owl-carousel.js"></script>
<script src="{{ asset('back-end') }}/js/RDInputLabel.js"></script>
<script src="{{ asset('back-end') }}/js/Isotope.js"></script>
<script src="{{ asset('back-end') }}/js/RD-Navbar.js"></script>
<script src="{{ asset('back-end') }}/js/UIToTop.js"></script>
<script src="{{ asset('back-end') }}/js/Materianize-Parallax.js"></script>
<script src="{{ asset('back-end') }}/js/Swiper.js"></script>
<script src="{{ asset('back-end') }}/js/CountTo.js"></script>
<script src="{{ asset('back-end') }}/js/jquery-circle-progress.js"></script>
<script src="{{ asset('back-end') }}/js/TimeCircles.js"></script>
<script src="{{ asset('back-end') }}/js/Lightgallery.js"></script>
<script src="{{ asset('back-end') }}/js/WOW.js"></script>
<script src="{{ asset('back-end') }}/js/Mousewheel.js"></script>
<script src="{{ asset('back-end') }}/js/PageTransition.js"></script>
<script src="{{ asset('back-end') }}/js/Parallax.js"></script>
<script src="{{ asset('back-end') }}/js/Waypoints.js"></script>
<script src="{{ asset('back-end') }}/js/script.js"></script>




<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
</body>
</html>