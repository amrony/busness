<?php

namespace App\Http\Controllers;

use App\BusinessProfile;
use Illuminate\Http\Request;

class BusinessProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businessProfiles = BusinessProfile::all();
//        dd($businessProfiles);
        return view('admin.business-profile.index',compact('businessProfiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.business-profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $attributes = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'link' => 'required',
            'short_description' => 'required',
            'long_description' => 'required'
        ]);
        BusinessProfile::create($attributes);

        return redirect('/business-profile/create')->with('message', 'Insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BusinessProfile  $businessProfile
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessProfile $businessProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BusinessProfile  $businessProfile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $businessProfile = BusinessProfile::find($id);
        return view('admin.business-profile.edit', compact('businessProfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BusinessProfile  $businessProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessProfile $businessProfile)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'link' => 'required',
            'short_description' => 'required',
            'long_description' => 'required'
        ]);
        $businessProfile->update($attributes);

//        $businessProfile->name = $request->name;
//        $businessProfile->email = $request->email;
//        $businessProfile->link = $request->link;
//        $businessProfile->short_description = $request->short_description;
//        $businessProfile->long_description = $request->long_description;
//        $businessProfile->save();

        return redirect('/business-profile')->with('message','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BusinessProfile  $businessProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $businessProfile = BusinessProfile::find($id);
        $businessProfile->delete();
        return redirect('/business-profile')->with('message','Delete Successfully');
    }
}
