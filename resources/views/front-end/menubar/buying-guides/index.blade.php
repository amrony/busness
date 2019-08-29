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
                        @foreach($addBuyingAdvices as $addBuyingAdvice)
                        <li><a href="#section{{ $addBuyingAdvice->id }}">{{ $addBuyingAdvice->additional_title }}</a></li>
                        @endforeach
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

                    @foreach($addBuyingAdvices as $addBuyingAdvice)
                    <div id="section{{ $addBuyingAdvice->id }}">
                        <h3 style="color: #ffffff00;">2.Trends to Look for in 2019</h3>
                        <h3>{{ $addBuyingAdvice->additional_title }}</h3>
                        <p>{{ $addBuyingAdvice->additional_body }}</p>
                    </div>
                    @endforeach
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
