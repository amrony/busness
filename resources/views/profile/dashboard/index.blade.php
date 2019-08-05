@extends('profile.master')

@push('css')
    @endpush

@section('body')
    <section id="sec_two" class="section section-intro context-dark">
        <div class="intro-bg" style="background: url({{ asset('back-end') }}/images/intro-bg-1.jpg) no-repeat;background-size:cover;background-position: top center;"></div>
    </section>


    <section class="section position-relative">
        <div class= section-md">
            <br><br>
            <div class="container">
                <div class="row justify-content-lg-start justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="profile_header col-lg-12">
                            <h3 class="text-capitalize wow fadeInLeft" data-wow-delay=".2s">Profile <span class="text-primary">Image</span></h3>
                            <img src="{{ asset('back-end') }}/images/boss.PNG" alt="Boss" class="rounded-circle" height="160" width="150">
                        </div>
                        <br>
                        <div class="profile_bottom col-lg-12">
                            <div class="col-lg-8">
                                <a href="#" type="btn" class="mb-1">View Profile</a> |
                                <a href="{{ route('profile-edit') }}" type="btn" class="mb-1">Edit Profile</a>
                            </div>

                        </div>
                        <br>
                    </div>
{{--                    <div class="col-xl-6 col-sm-12 col-12 col-lg-8">--}}
{{--                        <h3 class="text-capitalize wow fadeInLeft" data-wow-delay=".2s">About<span class="text-primary"> Me</span></h3>--}}
{{--                        <form class="rd-mailform text-left home-form" data-form-output="form-output-global" data-form-type="contact">--}}


{{--                            <div class="form-row">--}}
{{--                                <div class="col">--}}
{{--                                    <label>First Name<span class="req-symbol">*</span></label>--}}
{{--                                    <input type="text" class="form-control" placeholder="First name">--}}
{{--                                </div>--}}
{{--                                <div class="col">--}}
{{--                                    <label>Last Name<span class="req-symbol">*</span></label>--}}
{{--                                    <input type="text" class="form-control" placeholder="Last name">--}}
{{--                                </div>--}}
{{--                            </div><br>--}}
{{--                            <label>I am currently</label>--}}
{{--                            <div class="form-group">--}}
{{--                                <select class="form-control form-control-sm">--}}
{{--                                    <option>Running Business</option>--}}
{{--                                    <option>Developer</option>--}}
{{--                                    <option>Designer</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="introduceYourself">Introduce Yourself <span class="req-symbol">*</span></label>--}}
{{--                                <textarea class="form-control" id="introduceYourself" rows="4"></textarea>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="aboutMe">About Me</label>--}}
{{--                                <textarea class="form-control" id="aboutMe" rows="4"></textarea>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="skill">Skills </label>--}}
{{--                                <textarea class="form-control" id="skill" rows="4"></textarea>--}}
{{--                            </div><br>--}}

{{--                            <h4>Business Information</h4><br>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="businessInformation">Business Name</label>--}}
{{--                                <textarea class="form-control" id="businessInformation" rows="4"></textarea>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="jobTitle">Job Title</label>--}}
{{--                                <textarea class="form-control" id="jobTitle" rows="4"></textarea>--}}
{{--                            </div>--}}

{{--                            <label for="jobTitle">Industry</label>--}}
{{--                            <div class="form-group">--}}
{{--                                <select class="form-control">--}}
{{--                                    <option>One</option>--}}
{{--                                    <option>Two</option>--}}
{{--                                    <option>Three</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}

{{--                            <label for="jobTitle">Business Stage</label>--}}
{{--                            <div class="form-group">--}}
{{--                                <select class="form-control">--}}
{{--                                    <option>Choose One</option>--}}
{{--                                    <option>Choose Two</option>--}}
{{--                                    <option>Choose Three</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}

{{--                            <label for="jobTitle">Business Size</label>--}}
{{--                            <div class="form-group">--}}
{{--                                <select class="form-control">--}}
{{--                                    <option>Choose One</option>--}}
{{--                                    <option>Choose Two</option>--}}
{{--                                    <option>Choose Three</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label>Business Description</label>--}}
{{--                                <textarea class="form-control" rows="4"></textarea>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label>Website Link </label>--}}
{{--                                <input type="text" class="form-control" placeholder="Website Link">--}}
{{--                            </div><br>--}}

{{--                            <h4>Contact Information</h4><br>--}}

{{--                            <label >Country<span class="req-symbol">*</span></label>--}}
{{--                            <div class="form-group">--}}
{{--                                <select class="form-control">--}}
{{--                                    <option>Bangladesh</option>--}}
{{--                                    <option>India</option>--}}
{{--                                    <option>Pakistan</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}



{{--                            <div class="form-row">--}}
{{--                                <div class="col">--}}
{{--                                    <label>City</label>--}}
{{--                                    <input type="text" class="form-control" placeholder="City Name">--}}
{{--                                </div>--}}
{{--                                <div class="col">--}}
{{--                                    <label>Zip</label>--}}
{{--                                    <input type="text" class="form-control" placeholder="Enter Zip Code">--}}
{{--                                </div>--}}
{{--                            </div></br>--}}

{{--                            <div class="form-group">--}}
{{--                                <label>Street Address</label>--}}
{{--                                <input type="text" class="form-control" placeholder="Enter Street Address">--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label>Phone</label>--}}
{{--                                <input type="text" class="form-control" placeholder="Enter Phone Number">--}}
{{--                            </div><br>--}}

{{--                            <h4>Social Media Link</h4><br>--}}

{{--                            <div class="form-group">--}}
{{--                                <label>Facebook Page</label>--}}
{{--                                <input type="text" class="form-control" placeholder="Enter Facebook Page">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Facebook Profile</label>--}}
{{--                                <input type="text" class="form-control" placeholder="Enter Facebook Profile">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Google Plus</label>--}}
{{--                                <input type="text" class="form-control" placeholder="Enter Google Plus Link">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>LinkedIn</label>--}}
{{--                                <input type="text" class="form-control" placeholder="Enter LinkedIn Link">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Pinterest</label>--}}
{{--                                <input type="text" class="form-control" placeholder="Enter Pinterest Link">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Twitter</label>--}}
{{--                                <input type="text" class="form-control" placeholder="Enter Twitter Link">--}}
{{--                            </div>--}}
{{--                            <div class="form-button group-sm text-center text-lg-left">--}}
{{--                                <button class="button button-primary button-circle button-lg" type="submit">Sign Up</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                        <br>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>

    @endsection