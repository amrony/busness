<?php

namespace App\Http\Controllers;

use App\BusinessSize;
use App\BusinessStage;
use App\Country;
use App\Industry;
use App\Profession;
use App\Profile;
use App\ProfileInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:profile');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function myProfile()
    {
        return view('profile.dashboard.index');
    }
    public function edit(){

        $professions = Profession::all();
        $industries = Industry::all();
        $business_stages = BusinessStage::all();
        $business_sizes = BusinessSize::all();
        $countries = Country::all();
        $profileInfo = auth('profile')->user()->profileInfo;
        return view('profile.dashboard.create', compact(
            'countries',
            'professions',
              'industries',
              'business_stages',
              'business_sizes',
              'profileInfo'
        ));
    }

    public function update(Request $request){
//        return $request->all();
        $this->validate($request, [
//           'first_name' => 'required',
//           'last_name' => 'required',
           'profession_id' => 'required',
//           'your_self' => 'required',
           'industry_id' => 'required',
           'business_stage_id' => 'required',
           'business_size_id' => 'required',
           'country_id' => 'required',
        ]);

        $profile = auth('profile')->user()->profileInfo;

//        $profileId = auth('profile')->user()->id;

        $image = $request->file('image');
        $slug = str_slug($request->first_name);
        $profileInfo =  new ProfileInfo();

        if (isset($image))
        {
//          make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//                check category directory is exists
            if (!Storage::disk('public')->exists('profile_image'))
            {
                Storage::disk('public')->makeDirectory('profile_image');
            }

            // Delete Old News Image
            if (Storage::disk('public')->exists('``/'.$profileInfo->image))
            {
                Storage::disk('public')->delete('news/'.$profileInfo->image);
            }


//                resize image for category and upload
            $profileImage = Image::make($image)->resize(1600,479)->stream();
            Storage::disk('public')->put('profile_image/'.$imageName,$profileImage);
        } else{
            $imageName = "default.png";
        }

        $data =  $request->except('image');
        $data['image'] = $imageName;
        $data['slug'] = Str::slug(trim($request->first_name));
        $profile->update($data);


//        $profileInfo->profile_id = $profileId;
//        $profileInfo->first_name = $request->first_name;
//        $profileInfo->profession_id = $request->profession_id;
//        $profileInfo->your_self = $request->your_self;
//        $profileInfo->about_me = $request->about_me;
//        $profileInfo->skill = $request->skill;
//        $profileInfo->image = $imageName;
//        $profileInfo->business_name = $request->business_name;
//        $profileInfo->job_title = $request->job_title;
//        $profileInfo->industry_id = $request->industry_id;
//        $profileInfo->business_stage_id = $request->business_stage_id;
//        $profileInfo->business_size_id = $request->business_size_id;
//        $profileInfo->business_description = $request->business_description;
//        $profileInfo->web_link = $request->web_link;
//        $profileInfo->country_id = $request->country_id;
//        $profileInfo->city = $request->city;
//        $profileInfo->zip = $request->zip;
//        $profileInfo->street_address = $request->street_address;
//        $profileInfo->phone = $request->phone;
//        $profileInfo->facebook_page = $request->facebook_page;
//        $profileInfo->facebook_profile = $request->facebook_profile;
//        $profileInfo->linked_in = $request->linked_in;
//        $profileInfo->twitter = $request->twitter;
//        $profileInfo->slug = Str::slug(trim($request->first_name));
//        $profileInfo->save();

        return back()->with('message', 'Profile Update Successfully');
    }

}
