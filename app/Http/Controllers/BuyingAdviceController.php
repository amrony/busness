<?php

namespace App\Http\Controllers;

use App\AdditionalBuyingAdvice;
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
        $buyingAdvices = BuyingAdvice::all();
//        dd($buyingAdvice);
        return view('admin.buying-advice.index',compact('buyingAdvices'));
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
//        dd($request->all());
        $attributes = $request->validate([
            'article_category_id' => 'required|not_in:0',
            'article_sub_category_id' => 'required|not_in:0',
            'title' => 'required',
            'body' => 'required',
            'additional_title.*' => '',
            'additional_body.*>' => ''
        ]);
//        dd($request->all());
        $buyingAdvice = BuyingAdvice::create($attributes);
//        dd($request->input('group-a'));
        foreach ($request->input('group-a') as $key => $v ){
            $additionalBuyingAdvice = new AdditionalBuyingAdvice();
            $additionalBuyingAdvice->buying_advice_id = $buyingAdvice->id;
            $additionalBuyingAdvice->additional_title = $v['additional_title'];
            $additionalBuyingAdvice->additional_body = $v['additional_body'];
            $additionalBuyingAdvice->save();
        }
        return redirect('/buying-advice/create')->with('message','Insert Successfully');
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
    public function edit($id)
    {
        $buyingAdvice = BuyingAdvice::find($id);
        $articleCategories = ArticleCategory::all();
        $articleSubCategories = ArticleSubCategory::all();
//        dd($buyingAdvice);
        return view('admin.buying-advice.edit', compact
        (
            'buyingAdvice',
            'articleCategories',
            'articleSubCategories'

        ));
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
        $attributes = $request->validate([
            'article_category_id' => 'required|not_in:0',
            'article_sub_category_id' => 'required|not_in:0',
            'title' => 'required',
            'body' => 'required',
            'additional_title' => '',
            'additional_body' => ''
        ]);
//        dd($request->all());
//        $buyingAdvice = BuyingAdvice::create($attributes);
        $buyingAdvice = BuyingAdvice::find($request->id);
        $buyingAdvice->update($attributes);


        foreach ($request->add_buyingAdvice_id as $key => $add_buyingAdvice_id){
            $additionalBuyingAdvice = AdditionalBuyingAdvice::find($add_buyingAdvice_id);
            $additionalBuyingAdvice->additional_title = $request->additional_title[$key];
            $additionalBuyingAdvice->additional_body = $request->additional_body[$key];
            $additionalBuyingAdvice->save();
//            dd($additionalBuyingAdvice);
        }
        if ($request->add_additional_title != null){
//            dd($request->all());
            foreach ($request->add_additional_title as $key => $add_additional_title){
//                dd($add_additional_title);
                $additionalBuyingAdvice = new AdditionalBuyingAdvice();
//                dd($additionalBuyingAdvice);
                $additionalBuyingAdvice->buying_advice_id = $buyingAdvice->id;
                $additionalBuyingAdvice->additional_title = $add_additional_title;
                $additionalBuyingAdvice->additional_body = $request->additional_body[$key];
                $additionalBuyingAdvice->save();
//                dd($additionalBuyingAdvice);

            }
        }
        return redirect('/buying-advice')->with('message','Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BuyingAdvice  $buyingAdvice
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuyingAdvice $buyingAdvice, $id)
    {
        $buyingAdvice = BuyingAdvice::find($id);
        $buyingAdvice->delete();
        return redirect('/buying-advice')->with('message','Delete Successfully');
    }
}
