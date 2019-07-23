<?php

namespace App\Http\Controllers;

use App\ArticleCategory;
use App\ArticleSubCategory;
use Illuminate\Http\Request;

class ArticleSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articleCategories = ArticleCategory::all();
        return view('admin.article-sub-category.add-sub-article', compact('articleCategories'));
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
        $this->validate($request, [
            'article_category_id' => 'required',
            'name' => 'required|max:30',
        ]);
        $subCategory = new ArticleSubCategory();
        $subCategory->article_category_id = $request->article_category_id;
        $subCategory->name = $request->name;
        $subCategory->save();

        return redirect('/article/sub/category/index')->with('message', 'Insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ArticleSubCategory  $articleSubCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleSubCategory $articleSubCategory)
    {
        $subCategories = ArticleSubCategory::with('article_category')->get();
        return view('admin.article-sub-category.view-sub-article', compact('subCategories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ArticleSubCategory  $articleSubCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleSubCategory $articleSubCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ArticleSubCategory  $articleSubCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleSubCategory $articleSubCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArticleSubCategory  $articleSubCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleSubCategory $articleSubCategory)
    {
        //
    }

    public function news_body(){
        return view('admin.article-sub-category.add-news');
    }
}
