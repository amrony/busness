<?php

namespace App\Http\Controllers;

use App\ArticleCategory;
use App\ArticleSubCategory;
use App\BuyingAdvice;
use Illuminate\Http\Request;

class BuyingAdviceController extends Controller
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
        $articleCategories = ArticleCategory::all();
        $articleSubCategories = ArticleSubCategory::all();
//        dd($articleSubCategories);
        return view('admin.buying-advice.create',
            compact('articleCategories','articleSubCategories'));
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
     * @param  \App\BuyingAdvice  $buyingAdvice
     * @return \Illuminate\Http\Response
     */
    public function show(BuyingAdvice $buyingAdvice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BuyingAdvice  $buyingAdvice
     * @return \Illuminate\Http\Response
     */
    public function edit(BuyingAdvice $buyingAdvice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BuyingAdvice  $buyingAdvice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuyingAdvice $buyingAdvice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BuyingAdvice  $buyingAdvice
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuyingAdvice $buyingAdvice)
    {
        //
    }
}
