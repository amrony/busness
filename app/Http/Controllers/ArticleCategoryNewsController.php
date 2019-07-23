<?php

namespace App\Http\Controllers;

use App\ArticleCategoryNews;
use Illuminate\Http\Request;

class ArticleCategoryNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.article-category-news.add-news');
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
        // create new task
        $rows = $request->input('rows');
        foreach ($rows as $row)
        {
            $articleNews[] = new ArticleCategoryNews(array(
                'title'=>$row['title'],
                'subtitle'=>$row['subtitle'],
                'image'=>$row['image'],

            ));
        }
        ArticleCategoryNews::create($articleNews);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ArticleCategoryNews  $articleCategoryNews
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleCategoryNews $articleCategoryNews)
    {
        return view('admin.article-category-news.view-news');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ArticleCategoryNews  $articleCategoryNews
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleCategoryNews $articleCategoryNews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ArticleCategoryNews  $articleCategoryNews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleCategoryNews $articleCategoryNews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArticleCategoryNews  $articleCategoryNews
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleCategoryNews $articleCategoryNews)
    {
        //
    }
}
