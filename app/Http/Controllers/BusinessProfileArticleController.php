<?php

namespace App\Http\Controllers;

use App\BusinessProfileArticle;
use Illuminate\Http\Request;

class BusinessProfileArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.business-profile.profile-article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BusinessProfileArticle  $businessProfileArticle
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessProfileArticle $businessProfileArticle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BusinessProfileArticle  $businessProfileArticle
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessProfileArticle $businessProfileArticle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BusinessProfileArticle  $businessProfileArticle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessProfileArticle $businessProfileArticle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BusinessProfileArticle  $businessProfileArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessProfileArticle $businessProfileArticle)
    {
        //
    }
}
