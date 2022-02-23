<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Slider;
use  App\Models\SubCategory;
use  App\Models\Item;

use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      // flash('Welcome Aboard!');

      $categories = Slider::where(function ($q) use ($request) {
        if ($request->search) {
            $q->where('text', 'LIKE', '%' . $request->search . '%');
        }

    })->paginate(10);

        return view("/dashboard/sliders/index",["categories"=>  $categories ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/dashboard/sliders/create');
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


            'photo.required'=>"صورة السليدر مطلوبة",
            'photo.mimes'=>" يجب ان تكون الصورة jpg او jpeg او png  ",
            'photo.max'=>" الحد الاقصي للصورة 4 ميجا ",
            "num.required"=>"ترتيب السليدر مطلوب"


           ];


        $validator =  Validator::make($request->all(), [


            'photo' => 'required|mimes:jpg,webp,jpeg,png|max:4100',
            "num"=>  " required"

        ], $messeges);



        if ($validator->fails()) {
            Alert::error('error', $validator->errors()->first());
            return back();
        }

        $img =  $request->photo ;
        //add new name for img
        $new_name_img = time().uniqid().".".$img->getClientOriginalExtension();

        //move img to folder
       $move = $img->move(public_path("upload/sliders"), $new_name_img);


         $new = "upload/sliders/".$new_name_img ;
         $request->merge(['img' => $new]);


        $category= Slider::create($request->except(['photo']));
        if ($category){

            session()->flash('success', "success");
         if(session()->has("success")){
            Alert::success('Success Title', 'Success Message');
         }

            return redirect()->route('sliders.index');

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
        $category=Slider::findOrFail($id);
        return view('/dashboard/sliders/edit',["category"=>$category]);
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


            'photo.mimes'=>" يجب ان تكون الصورة jpg او jpeg او png  ",
            'photo.max'=>" الحد الاقصي للصورة 4 ميجا ",
            "num.required"=>"ترتيب السليدر مطلوب"


           ];


        $validator =  Validator::make($request->all(), [


            'photo' => 'mimes:jpg,jpeg,webp,png|max:4100',
            "num"=>  " required"

        ], $messeges);






        if ($validator->fails()) {
            Alert::error('error', $validator->errors()->first());
            return back();
        }
        $category= Slider::findOrFail($id);

        if($request->photo){
            $img =  $request->photo ;
            // dd($img);
            if (file_exists(public_path($category->img))) {
                unlink(public_path($category->img));
            }
            //add new name for img
            $new_name_img = time().uniqid().".".$img->getClientOriginalExtension();


            //move img to folder
           $move = $img->move(public_path("upload/sliders"), $new_name_img);
          // dd(public_path("upload"));
          // $move2= move_uploaded_file( $_FILES["logo"]["tmp_name"],public_path("upload")."/".$new_name_img) ;
          // dd($move2);

             $new = "upload/sliders/".$new_name_img ;
             $request->merge(['img' => $new]);
        }
        $category= $category->update($request->except(['photo']));
        if ($category){

            session()->flash('success', "success");
         if(session()->has("success")){
            Alert::success('Success ', 'Success Message');
         }

            return redirect()->route('sliders.index');

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

      $category= Slider::findOrFail($id);
      if(file_exists(public_path( $category->img))){
        unlink(public_path($category->img));
            }



      $category->delete();
     // session()->flash('success', __('site.deleted_successfully'));



     session()->flash('success', "success");
     if(session()->has("success")){
      Alert::success('Success Title', 'Success Message');
     }
      return redirect()->route('sliders.index');

    }
}
