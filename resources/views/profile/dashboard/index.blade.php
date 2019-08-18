@extends('profile.master')

@push('css')
    @endpush

@section('body')
    <br><br>
    <section id="scrollspy">
        <div class="container-fluid" style="background-color: #f5f5f5;color:#fff;height:0px;">

        </div>
        <br>

        <div class="container">
            <div class="row">

                <div id="myScrollspy" class="profile col-sm-3">
                    <div class="profile">
{{--                        <img src="{{ asset('back-end/images') }}/single-post-2-368x293.jpg" class="rounded-circle"  width="128" height="128">--}}
                        <img src="{{ asset('back-end/images') }}/single-post-2-368x293.jpg" class="rounded-circle"  width="128" height="128">
                        <div class="prf-text">
                            <h5 class="prf-t">Abir Hossain</h5>
                            <a href="">View Profile |</a>
                            <a href="{{ route('profile-edit', [auth('profile')->user()->id] ) }}"> Edit Profile</a>
                        </div>
                        <nav class="navbar">
                            <ul>
                                <li><a href="#">My Dashboard</a></li>
                                <li><a href="#">My Settings</a></li>
                                <li><a href="#">My Messages</a></li>
                                <li><a href="#">My Alerts</a></li>
                                <li><a href="#">My Experts</a></li>
                                <li><a href="#">My Questions</a></li>
                                <li><a href="#">My Reviews</a></li>
                                <li><a href="#">My Offers</a></li>
                                <li><a href="#">Become a Contributor</a></li>
                                <li><a href="#">Free Report Card</a></li>
                                <li><a href="#">Badges</a></li>
                                <li><a href="#">Invitations</a></li>
                            </ul>
                        </nav>
                    </div><br>
                    <div class="section-second">
                        <p>
                            How Does Your Business Stack Up? <span>Get a Free Business Report Card!</span>
                        </p>
                        <button class="tablinks join-n" onclick="openCity(event, 'London')">Get My Report Card</button>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="spy-text">
                        <h5>Our community is a place for small business owners to connect, exchange advice, and help each other make smarter business decisions.</h5>
                        <div class="col-md-8">
                            <p>
                                You now have access to thousands of business articles, expert advice, and other business tools to help you succeed. We encourage you to start conversations and share your own business experiences. Each time a member contributes, our community becomes more robust.
                            </p>
                            <p>
                                Do you have more to say? Share informative content on Business.com. If accepted, we will link it back to your community profile for other small business owners and potential clients to see.
                            </p>
                        </div>
                        <div class="col-md-4 botton-ts">
                            <button class="tablinks join-n" onclick="openCity(event, 'London')">JOIN OUR COMMUNITY</button><br>
                            <button class="tablinks join-n" onclick="openCity(event, 'London')">JOIN OUR COMMUNITY</button>
                        </div>

                    </div> <br>
                    <div id="sectionl">
                        <!-- tabs start -->
                        <div class="tabs_sec">
                            <div class="col-md-12">
                                <div class="tab ">
                                    <button class="tablinks" onclick="openCity(event, 'London')"id="defaultOpen">Answer a Question</button>
                                    <button class="tablinks" onclick="openCity(event, 'Paris')">Ask a Question</button>
                                    <button class="tablinks" onclick="openCity(event, 'Tokyo')">Recent Activity</button>
                                </div>
                            </div><br>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 ">
                                        <!-- =============================first tabs =================================-->
                                        <div id="London" class="tabcontent first_tab">
                                            <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/single-post-2-368x293.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: 8px 0 0 0;"><a rel="nofollow" href="anser_view.html">How do I troubleshoot my smart tv?</a></h4>
                                                    <p>Asked in <a href="/advice/answers/video-multimedia">Video &amp; Multimedia</a> | 1 Answers | 1 hour ago</p>
                                                </div>
                                            </div>
                                            <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/single-post-2-368x293.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: 8px 0 0 0;"><a rel="nofollow" href="anser_view.html">How do I troubleshoot my smart tv?</a></h4>
                                                    <p>Asked in <a href="/advice/answers/video-multimedia">Video &amp; Multimedia</a> | 1 Answers | 1 hour ago</p>
                                                </div>
                                            </div>
                                            <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/single-post-2-368x293.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: 8px 0 0 0;"><a rel="nofollow" href="anser_view.html">How do I troubleshoot my smart tv?</a></h4>
                                                    <p>Asked in <a href="/advice/answers/video-multimedia">Video &amp; Multimedia</a> | 1 Answers | 1 hour ago</p>
                                                </div>
                                            </div>
                                            <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/single-post-2-368x293.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: 8px 0 0 0;"><a rel="nofollow" href="anser_view.html">How do I troubleshoot my smart tv?</a></h4>
                                                    <p>Asked in <a href="/advice/answers/video-multimedia">Video &amp; Multimedia</a> | 1 Answers | 1 hour ago</p>
                                                </div>
                                            </div>
                                            <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/single-post-2-368x293.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: 8px 0 0 0;"><a rel="nofollow" href="anser_view.html">How do I troubleshoot my smart tv?</a></h4>
                                                    <p>Asked in <a href="/advice/answers/video-multimedia">Video &amp; Multimedia</a> | 1 Answers | 1 hour ago</p>
                                                </div>
                                            </div>
                                            <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/single-post-2-368x293.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: 8px 0 0 0;"><a rel="nofollow" href="http://www.functravel.com/">How do I troubleshoot my smart tv?</a></h4>
                                                    <p>Asked in <a href="/advice/answers/video-multimedia">Video &amp; Multimedia</a> | 1 Answers | 1 hour ago</p>
                                                </div>
                                            </div>
                                            <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/single-post-2-368x293.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: 8px 0 0 0;"><a rel="nofollow" href="http://www.functravel.com/">How do I troubleshoot my smart tv?</a></h4>
                                                    <p>Asked in <a href="/advice/answers/video-multimedia">Video &amp; Multimedia</a> | 1 Answers | 1 hour ago</p>
                                                </div>
                                            </div>
                                            <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/single-post-2-368x293.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: 8px 0 0 0;"><a rel="nofollow" href="http://www.functravel.com/">How do I troubleshoot my smart tv?</a></h4>
                                                    <p>Asked in <a href="/advice/answers/video-multimedia">Video &amp; Multimedia</a> | 1 Answers | 1 hour ago</p>
                                                </div>
                                            </div>
                                            <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/single-post-2-368x293.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: 8px 0 0 0;"><a rel="nofollow" href="http://www.functravel.com/">How do I troubleshoot my smart tv?</a></h4>
                                                    <p>Asked in <a href="/advice/answers/video-multimedia">Video &amp; Multimedia</a> | 1 Answers | 1 hour ago</p>
                                                </div>
                                            </div>
                                            <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/single-post-2-368x293.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: 8px 0 0 0;"><a rel="nofollow" href="http://www.functravel.com/">How do I troubleshoot my smart tv?</a></h4>
                                                    <p>Asked in <a href="/advice/answers/video-multimedia">Video &amp; Multimedia</a> | 1 Answers | 1 hour ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- second tabs -->
                                        <div id="Paris" class="tabcontent form-comm">
                                            <div class="text_l">
                                                <section class="w320-hidden w768-visible">
                                                    <div class="container">
                                                        <div class="row">

                                                            <div class="col-sm">
                                                                <div class="block tile w1100-offset-2" style="border: 1px solid #fff;">
                                                                    <div class="content">
                                                                        <div class="digit">1</div>
                                                                        <i class="fa fa-gavel sizeColor" aria-hidden="true"></i>
                                                                        <p class="mt50 fsize">Ask your marketing, legal or other business question.</p></div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm">
                                                                <div class="block tile w1100-offset-1">
                                                                    <div class="content">
                                                                        <div class="digit">2</div>
                                                                        <i class="fa fa-share sizeColor" aria-hidden="true"></i>
                                                                        <p class="mt50 fsize">Experienced experts are ready to share their advice.</p></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm">
                                                                <div class="block tile w1100-offset-1">
                                                                    <div class="content"><div class="digit">3</div>
                                                                        <i class="fa fa-envelope sizeColor" aria-hidden="true"></i>
                                                                        <p class="mt50 fsize">Receive an email when answers are posted.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section><br>

                                                <section><div class="set mt50 ask-q">
                                                        <div class="block w320-12 w768-10 w768-offset-1 w1100-8 w1100-offset-2 mb200"><div class="content">
                                                                <div class="tile profile-content"><div class="tile-content">
                                                                        <p class="message_alert "></p>
                                                                        <form name="question" method="post"><div><label for="question_title" class="required">Question*</label>
                                                                                <input type="text" id="question_title" name="question[title]" required="required" placeholder="i.e. What do I need to know about blogging before starting one?"></div><div>

                                                                                <label for="question_description" class="required">Description*</label><textarea id="question_description" name="question[description]" required="required" placeholder="i.e. I want to start a blog for my restaurant but I don’t know how often or what to post. Is blogging a big time commitment? Will it really help me get more customers?" minlength="75"></textarea></div>

                                                                            <div><label for="question_category_group_id" class="required">Category*</label><select id="question_category_group_id" name="question[category_group_id]" required="required"><option value="" selected="selected">Please Select A Category</option><option value="1">Marketing</option><option value="2">Finance and Money</option><option value="3">Technology and Multimedia</option><option value="4">Management and Operations</option><option value="5">General</option></select></div>

                                                                            <div><label for="question_category_id" class="required">Subcategory*</label><select id="question_category_id" name="question[category_id]" required="required"><option value="" selected="selected">Please Select A Subcategory</option>
                                                                                    <option value="21">Advertising</option>
                                                                                    <option value="22">Branding</option>
                                                                                    <option value="8">Copywriting</option>
                                                                                    <option value="9">Event Planning/Promotion</option>
                                                                                    <option value="23">Graphic/Print Design</option>
                                                                                    <option value="4">Market Research</option>
                                                                                    <option value="24">Marketing</option>
                                                                                    <option value="25">Public Relations</option>
                                                                                    <option value="28">Accounting/Bookkeeping</option>
                                                                                    <option value="29">Banking</option>
                                                                                    <option value="56">Time Management</option>
                                                                                    <option value="57">Community Discussion</option>
                                                                                </select></div>

                                                                            <div><label for="question_tags">Tags (Separate tags with a comma)</label><input type="text" id="question_tags" name="question[tags]"></div><input type="hidden" id="question_user_id" name="question[user_id]" value="231163"><input type="hidden" id="question_category_tag" name="question[category_tag]"><div><button type="submit" id="question_submit" name="question[submit]" class="action medium color1 mt100">Submit</button></div><input type="hidden" id="question__token" name="question[_token]" value="95da40237ffe0d3ecb25a88e9ded85a890cd7fa0"></form></div></div></div></div></div></section>
                                            </div>
                                        </div>
                                        <!-- third tabs -->
                                        <div id="Tokyo" class="tabcontent">
                                            <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/bdc-placeholder.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: -6px 0 0 0;"><a rel="nofollow" href="anser_view.html">How do I troubleshoot my smart tv?</a></h4>
                                                    <h6 style="font-size: 12px;">Uber app connects the passenger and driver to hire a vehicle .Passengers can select the type of vehicle that they want to travel, the place where they want to be picked up from and the place they want... </h6>
                                                    <p>21 minutes ago</p>
                                                </div>
                                            </div>
                                            <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/bdc-placeholder.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: -6px 0 0 0;"><a rel="nofollow" href="anser_view.html">How do I troubleshoot my smart tv?</a></h4>
                                                    <h6 style="font-size: 12px;">Uber app connects the passenger and driver to hire a vehicle .Passengers can select the type of vehicle that they want to travel, the place where they want to be picked up from and the place they want... </h6>
                                                    <p>21 minutes ago</p>
                                                </div>
                                            </div>
                                            <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/bdc-placeholder.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: -6px 0 0 0;"><a rel="nofollow" href="anser_view.html">How do I troubleshoot my smart tv?</a></h4>
                                                    <h6 style="font-size: 12px;">Uber app connects the passenger and driver to hire a vehicle .Passengers can select the type of vehicle that they want to travel, the place where they want to be picked up from and the place they want... </h6>
                                                    <p>21 minutes ago</p>
                                                </div>
                                            </div>
                                            <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/bdc-placeholder.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: -6px 0 0 0;"><a rel="nofollow" href="anser_view.html">How do I troubleshoot my smart tv?</a></h4>
                                                    <h6 style="font-size: 12px;">Uber app connects the passenger and driver to hire a vehicle .Passengers can select the type of vehicle that they want to travel, the place where they want to be picked up from and the place they want... </h6>
                                                    <p>21 minutes ago</p>
                                                </div>
                                            </div>
                                            <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/bdc-placeholder.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: -6px 0 0 0;"><a rel="nofollow" href="anser_view.html">How do I troubleshoot my smart tv?</a></h4>
                                                    <h6 style="font-size: 12px;">Uber app connects the passenger and driver to hire a vehicle .Passengers can select the type of vehicle that they want to travel, the place where they want to be picked up from and the place they want... </h6>
                                                    <p>21 minutes ago</p>
                                                </div>
                                            </div> <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/bdc-placeholder.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: -6px 0 0 0;"><a rel="nofollow" href="anser_view.html">How do I troubleshoot my smart tv?</a></h4>
                                                    <h6 style="font-size: 12px;">Uber app connects the passenger and driver to hire a vehicle .Passengers can select the type of vehicle that they want to travel, the place where they want to be picked up from and the place they want... </h6>
                                                    <p>21 minutes ago</p>
                                                </div>
                                            </div>
                                            <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/bdc-placeholder.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: -6px 0 0 0;"><a rel="nofollow" href="anser_view.html">How do I troubleshoot my smart tv?</a></h4>
                                                    <h6 style="font-size: 12px;">Uber app connects the passenger and driver to hire a vehicle .Passengers can select the type of vehicle that they want to travel, the place where they want to be picked up from and the place they want... </h6>
                                                    <p>21 minutes ago</p>
                                                </div>
                                            </div> <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/bdc-placeholder.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: -6px 0 0 0;"><a rel="nofollow" href="anser_view.html">How do I troubleshoot my smart tv?</a></h4>
                                                    <h6 style="font-size: 12px;">Uber app connects the passenger and driver to hire a vehicle .Passengers can select the type of vehicle that they want to travel, the place where they want to be picked up from and the place they want... </h6>
                                                    <p>21 minutes ago</p>
                                                </div>
                                            </div>
                                            <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/bdc-placeholder.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: -6px 0 0 0;"><a rel="nofollow" href="anser_view.html">How do I troubleshoot my smart tv?</a></h4>
                                                    <h6 style="font-size: 12px;">Uber app connects the passenger and driver to hire a vehicle .Passengers can select the type of vehicle that they want to travel, the place where they want to be picked up from and the place they want... </h6>
                                                    <p>21 minutes ago</p>
                                                </div>
                                            </div> <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/bdc-placeholder.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: -6px 0 0 0;"><a rel="nofollow" href="anser_view.html">How do I troubleshoot my smart tv?</a></h4>
                                                    <h6 style="font-size: 12px;">Uber app connects the passenger and driver to hire a vehicle .Passengers can select the type of vehicle that they want to travel, the place where they want to be picked up from and the place they want... </h6>
                                                    <p>21 minutes ago</p>
                                                </div>
                                            </div>
                                            <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="{{ asset('back-end/images') }}/bdc-placeholder.jpg" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: -6px 0 0 0;"><a rel="nofollow" href="anser_view.html">How do I troubleshoot my smart tv?</a></h4>
                                                    <h6 style="font-size: 12px;">Uber app connects the passenger and driver to hire a vehicle .Passengers can select the type of vehicle that they want to travel, the place where they want to be picked up from and the place they want... </h6>
                                                    <p>21 minutes ago</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br><br>
                        <!-- tabs end -->

                    </div><br><br>

                    <div class="join-page">
                        <button class="tablinks join-n" onclick="openCity(event, 'London')">next</button>
                    </div>
                </div>

            </div></div>
    </section>
















{{--    <section class="section position-relative">--}}
{{--        <div class= section-md">--}}
{{--            <br><br>--}}
{{--            <div class="container">--}}
{{--                <div class="row justify-content-lg-start justify-content-center">--}}
{{--                    <div class="col-md-6 col-lg-4">--}}
{{--                        <div class="profile_header col-lg-12">--}}
{{--                            <h3 class="text-capitalize wow fadeInLeft" data-wow-delay=".2s">Profile <span class="text-primary">Image</span></h3>--}}
{{--                            <img src="{{ asset('back-end') }}/images/boss.PNG" alt="Boss" class="rounded-circle" height="160" width="150">--}}
{{--                        </div>--}}
{{--                        <br>--}}
{{--                        <div class="profile_bottom col-lg-12">--}}
{{--                            <div class="col-lg-8">--}}
{{--                                <a href="#" type="btn" class="mb-1">View Profile</a> |--}}
{{--                                <a href="{{ route('profile-edit', [auth('profile')->user()->id] ) }}" type="btn" class="mb-1">Edit Profile</a>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <br>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}













    @section('js')


        <!-- tabs js -->
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

        @endsection

    @endsection