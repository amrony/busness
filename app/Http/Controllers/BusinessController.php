<?php

namespace App\Http\Controllers;

use App\AdditionalBuyingAdvice;
use App\ArticleCategory;
use App\ArticleSubCategory;
use App\BuyingAdvice;
use App\BuyingAdviceBusinessProfileArticle;
use App\News;
use Illuminate\Http\Request;
use App\Page;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front-end.home.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function profileLogin(){
        return view('front-end.profile.login');
    }
    public function profileSignup(){
        return view('front-end.profile.signup');
    }
    public function viewProfile(){
        return view('profile.home.profile');
    }

    public function article_news(Request $request){
//        $articleCategories = ArticleCategory::get();
        if($request->has('cat_id')){
            $news = News::where('article_category_id', $request->cat_id)
                ->get();
            $latestNews = News::where('article_category_id', $request->cat_id)
                ->latest()
                ->take(25)
                ->get();
        }
        else if($request->has('id') && $request->has('sub_cat_id')){
            $news = News::where('article_category_id', $request->id)
                ->where('article_sub_category_id', $request->sub_cat_id)
                ->get();
            $latestNews = News::where('article_category_id', $request->id)
                ->where('article_sub_category_id', $request->sub_cat_id)
                ->latest()
                ->take(25)
                ->get();
        }else{
            $news = News::get();
            $latestNews = News::latest()->take(25)->get();
        }

//        if ($request->has('id'))

        if($request->has('cat_id')){
            $buyingAdvices = BuyingAdvice::where('article_category_id', $request->cat_id)
                ->get();
        }

        else if($request->has('id') && $request->has('sub_cat_id')){
            $buyingAdvices = BuyingAdvice::where('article_category_id', $request->id)
                ->where('article_sub_category_id', $request->sub_cat_id)
                ->get();
        }else{
            $buyingAdvices = News::get();
//            $latestNews = News::latest()->take(25)->get();
        }

//        $buyingAdvices = BuyingAdvice::get();
//        dd($buyingAdvices);




        return view('front-end.menubar.articles.index', compact(
            'news',
            'latestNews',
            'buyingAdvices'
        ));
    }

    public function viewBuying($id){
        $buyingGuide = BuyingAdvice::find($id);
        $profileArticles = BuyingAdviceBusinessProfileArticle::where('buying_advice_id', $id)->get();
        $addBuyingAdvices = AdditionalBuyingAdvice::all();
//        dd($addBuyingAdvices);
        return view('front-end.menubar.buying-guides.index',
            compact(
                'buyingGuide',
                'profileArticles',
                'addBuyingAdvices'
            ));
    }


}
