<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\About;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class aboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //dd(icons()[0]["c"] );
      // flash('Welcome Aboard!');

      $services = About::where(function ($q) use ($request) {
        if ($request->search) {
            $q->where('name', 'LIKE', '%' . $request->search . '%');
        }
    })->orderBy("tag","asc")->paginate(10);

        return view("/dashboard/about/index",["services"=>  $services ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icons = icons();

        return view('/dashboard/about/create',[ "icons"=>  $icons]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messeges = [

            'name.max'=>"الحد الاقصي لاسم معلوماتنا 25 حرف",
            'name.min'=>"الحد الادني لاسم معلوماتنا 3 احرف",
            'text.max'=>"الحد الاقصي لوصف معلوماتنا 55 حرف",

            'text_en.max'=>"الحد الاقصي لوصف معلوماتنا بالانجليزية 55 حرف",

            'name_en.max'=>"الحد الاقصي لترجمة اسم  معلوماتنا 25 حرف",
            'name_en.min'=>"الحد الادني لترجمة اسم معلوماتنا 3 احرف",
            'name.required'=>"اسم معلوماتنا مطلوب",
            'name.unique'=>"اسم معلوماتنا موجود من قبل",
            'icon.required'=>" الايقونة مطلوبة",


           ];


        $validator =  Validator::make($request->all(), [

            'name' => 'required|unique:abouts,name|max:25|min:3',
            "icon"=>"required",
            "name_en"=>'required|unique:abouts,name_en|max:25|min:3',
            "text"=>'required|max:55',
            "text_en"=>'required|max:55',



        ], $messeges);



        if ($validator->fails()) {
            Alert::error('error', $validator->errors()->first());
            return back();
        }

        $Service= About::create($request->all());
        if ($Service){

            session()->flash('success', "success");
         if(session()->has("success")){
            Alert::success('Success Title', 'Success Message');
         }

            return redirect()->route('informations.index');

        }

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
        $icons = icons();

        $service= About::findOrFail($id);
        return view('/dashboard/about/edit',["service"=>$service,"icons"=>  $icons]);
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
        $messeges = [

            'name.max'=>"الحد الاقصي لاسم معلوماتنا 25 حرف",
            'name.min'=>"الحد الادني لاسم معلوماتنا 3 احرف",
            'text.max'=>"الحد الاقصي لوصف معلوماتنا 55 حرف",

            'text_en.max'=>"الحد الاقصي لوصف معلوماتنا بالانجليزية 55 حرف",
            
            'name_en.max'=>"الحد الاقصي لترجمة اسم  معلوماتنا 25 حرف",
            'name_en.min'=>"الحد الادني لترجمة اسم معلوماتنا 3 احرف",
            'name.required'=>"اسم معلوماتنا مطلوب",
            'name.unique'=>"اسم معلوماتنا موجود من قبل",
            'icon.required'=>" الايقونة مطلوبة",

           ];


        $validator =  Validator::make($request->all(), [

            'name' => 'required|max:25|min:3||unique:abouts,name,' .$id,
            'name' => 'required|max:25|min:3||unique:abouts,name_en,' .$id,
            "icon"=>"required",
            "text"=>'required|max:55',
            "text_en"=>'required|max:55',


        ], $messeges);



      



        if ($validator->fails()) {
            Alert::error('error', $validator->errors()->first());
            return back();
        }
        $Service= About::findOrFail($id);
        $Service= $Service->update($request->all());
        if ($Service){

            session()->flash('success', "success");
         if(session()->has("success")){
            Alert::success('Success Title', 'Success Message');
         }

            return redirect()->route('informations.index');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {

      $Service= About::findOrFail($id);

    
      $Service->delete();
     // session()->flash('success', __('site.deleted_successfully'));
     session()->flash('success', "success");
     if(session()->has("success")){
      Alert::success('Success Title', 'Success Message');
     }
      return redirect()->route('informations.index');

    }
}
