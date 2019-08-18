@extends('profile.master')


@section('css')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />

@endsection

@section('body')
    <section id="sec_two" class="section section-intro context-dark">
        <div class="intro-bg" style="background: url({{ asset('back-end') }}/images/intro-bg-1.jpg) no-repeat;background-size:cover;background-position: top center;"></div>
    </section>

    {{--@dd($countries)--}}
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
                        <div class="profile_bottom col-lg-12">
                            <div class="list-group col-lg-8">
{{--                                <a href="#" type="btn" class="list-group-item list-group-item-action mb-1">Update Profile</a>--}}
                            </div>

                        </div>
                    </div>

{{--                    @dd($profileInfo);--}}

                    <div class="col-xl-6 col-sm-12 col-12 col-lg-8">
                        <h3 class="text-capitalize wow fadeInLeft" data-wow-delay=".2s">About<span class="text-primary"> Me</span></h3>
                        <form action="{{ route('profile-store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col">
                                    <label>Name<span class="req-symbol">*</span></label>
                                    <input type="text" name="first_name" value="{{ auth('profile')->user()->name }}" class="form-control" placeholder="First name">
                                    <span class="text-danger">{{ $errors->has('first_name') ? $errors->first('first_name') : '' }}</span>
                                </div>

{{--                                <input type="hidden" value="{{ auth('profile')->user()->id }}" name="profile_id">--}}
{{--                                {{ auth('profile')->user()->id }}--}}

                            </div><br>
                            <label>I am currently</label>
                            <div class="form-group">
                                <select class="form-control form-control-sm" name="profession_id">
                                    <option hidden>Choose One</option>
                                    @foreach($professions as $profession)
                                        <option value="{{ $profession->id }}">{{ $profession->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->has('profession_id') ? $errors->first('profession_id') : '' }}</span>
                            </div>


                            <div class="form-group">
                                <label for="introduceYourself">Introduce Yourself <span class="req-symbol">*</span></label>
                                <textarea class="form-control" name="your_self" id="introduceYourself" rows="4"></textarea>
                                <span class="text-danger">{{ $errors->has('your_self') ? $errors->first('your_self') : '' }}</span>
                            </div>

                            <div class="form-group">
                                <label for="aboutMe">About Me</label>
                                <textarea class="form-control" name="about_me" id="aboutMe" rows="4"></textarea>
                                <span class="text-danger">{{ $errors->has('about_me') ? $errors->first('about_me') : '' }}</span>
                            </div>

                            <div class="form-group">
                                <label for="skill">Skills </label>
                                <textarea class="form-control" name="skill" id="skill" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Image</label>
                                <input class="form-control" name="image" type="file">
                                <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
                            </div>
                            <br>

                            <h4>Business Information</h4><br>
                            <div class="form-group">
                                <label for="businessInformation">Business Name</label>
                                <input class="form-control" name="business_name" placeholder="Business Name">
                                <span class="text-danger">{{ $errors->has('business_name') ? $errors->first('business_name') : '' }}</span>
                            </div>

                            <div class="form-group">
                                <label for="jobTitle">Job Title</label>
                                <input class="form-control" name="job_title"  placeholder="Job Title">
                            </div>

                            <label for="jobTitle">Industry</label>
                            <div class="form-group">
                                <select class="form-control" name="industry_id">
                                    <option>Choose One</option>
                                    @foreach($industries as $industry)
                                        <option value="{{ $industry->id }}">{{ $industry->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->has('industry_id') ? $errors->first('industry_id') : '' }}</span>
                            </div>

                            <label for="jobTitle">Business Stage</label>
                            <div class="form-group">
                                <select class="form-control" name="business_stage_id">
                                    <option hidden>Choose One</option>
                                    @foreach($business_stages as $business_stage)
                                        <option value="{{ $business_stage->id }}">{{ $business_stage->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->has('business_stage_id') ? $errors->first('business_stage_id') : '' }}</span>
                            </div>

                            <label for="jobTitle">Business Size</label>
                            <div class="form-group">
                                <select class="form-control" name="business_size_id">
                                    <option hidden>Choose One</option>
                                    @foreach($business_sizes as $business_size)

                                    <option value="{{ $business_size->id  }}">{{ $business_size->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->has('business_size_id') ? $errors->first('business_size_id') : '' }}</span>
                            </div>

                            <div class="form-group">
                                <label>Business Description</label>
                                <textarea class="form-control" name="business_description" rows="4"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Website Link </label>
                                <input type="text" class="form-control" name="web_link" placeholder="Website Link">
                            </div><br>

                            <h4>Contact Information</h4><br>

                            <label >Country<span class="req-symbol">*</span></label>

                            <div class="form-group">
                                <select class="form-control select2" name="country_id">
                                    <option hidden>Choose One</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->has('country_id') ? $errors->first('country_id') : '' }}</span>
                            </div>



                            <div class="form-row">
                                <div class="col">
                                    <label>City</label>
                                    <input type="text" class="form-control" name="city">
                                </div>
                                <div class="col">
                                    <label>Zip</label>
                                    <input type="text" class="form-control" name="zip">
                                </div>
                            </div></br>

                            <div class="form-group">
                                <label>Street Address</label>
                                <input type="text" class="form-control" name="street_address" placeholder="Enter Street Address">
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
                            </div><br>

                            <h4>Social Media Link</h4><br>

                            <div class="form-group">
                                <label>Facebook Page</label>
                                <input type="text" class="form-control" name="facebook_page" placeholder="Enter Facebook Page">
                            </div>
                            <div class="form-group">
                                <label>Facebook Profile</label>
                                <input type="text" class="form-control" name="facebook_profile" placeholder="Enter Facebook Profile">
                            </div>

                            <div class="form-group">
                                <label>LinkedIn</label>
                                <input type="text" class="form-control" name="linked_in" placeholder="Enter LinkedIn Link">
                            </div>
                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text" class="form-control" name="twitter" placeholder="Enter Twitter Link">
                            </div>
                            <div class="form-button group-sm text-center text-lg-left">
                                <button class="button button-primary button-circle button-lg" type="submit">Save</button>
                            </div>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.select2').select2();
        });

    </script>


@endsection