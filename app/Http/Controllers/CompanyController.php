<?php

namespace App\Http\Controllers;

use App\Company;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.company.add-company');
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
           'name'=> 'required',
           'email'=> 'required',
           'number'=> 'required',
           'address'=> 'required',
        ]);



        $image = $request->file('logo');
        $slug  = str_slug($request->name,'_');

        if (isset($image)){

            $currentDate = Carbon::now()->toDateString();
            $imageName   = $slug.'_'.$currentDate.'_'.uniqid().'.'.$image->getClientOriginalExtension();

            if (!file_exists('image/company')){
                mkdir('image/company',0777,true);
            }
            $company_image = Image::make($image)->resize(170,93)->stream();
            $image->move('image/company',$imageName,$company_image);

        }else{

            $imageName = 'default.jpg';

        }

        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->number = $request->number;
        $company->address = $request->address;
        $company->logo = $imageName;
        $company->save();


        return redirect('/company/index')->with('message', 'Insert Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        $companies = Company::all();
        return view('admin.company.view-company', ['companies'=>$companies]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('admin.company.edit-company', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {

        $image = $request->file('logo');
        $slug  = str_slug($request->name,'_');

        $company = Company::find($request->company_id);

        if (isset($image)){

            $currentDate = Carbon::now()->toDateString();
            $imageName   = $slug.'_'.$currentDate.'_'.uniqid().'.'.$image->getClientOriginalExtension();

            if (!file_exists('image/company')){
                mkdir('image/company',0777,true);
            }

            if ($company->logo != 'default.jpg'){
                unlink('image/company/'.$company->logo);
            }

            $image->move('image/company',$imageName);

        }else{

            $imageName = $company->logo;

        }

        $company->name = $request->name;
        $company->email = $request->email;
        $company->number = $request->number;
        $company->address = $request->address;
        $company->logo = $imageName;
        $company->save();


        return redirect('/company/show')->with('message', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);

        if ($company->logo != 'default.jpg'){
            unlink('image/company/'.$company->logo);
        }

        $company->delete();

        return redirect('/company/show')->with('message', 'Delete Successfully');
    }
}
