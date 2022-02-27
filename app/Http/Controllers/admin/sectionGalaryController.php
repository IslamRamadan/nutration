<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SectionImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class sectionGalaryController extends Controller
{
    public function index(Request $request,$type)
    {
        $sections = SectionImg::where("type",$type)->get();
        // dd($type);
        // flash('Welcome Aboard!');



        return view("/dashboard/sections_galary/index",["sections"=>  $sections,"type"=>$type ]);
    }

    public function store(Request $request,$type)
    {
//        dd($request->all());

        if (!$request->hasfile('img')){

            Alert::success('error ', 'لم تقم بتحميل اي صورة');
            return back();
        }

        $imgs = $request->img ;

        if(count($imgs) >10 ){

            Alert::success('error ', 'الحد الاقصي للتحميل في المرة الواحدة 10 صور');
            return back();

        }


        $messeges = [

            'img.required'=>" الصورة مطلوبة",
            'img.mimes'=>" يجب ان تكون الصورة jpg او jpeg او png ",
            'img.max'=>" الحد الاقصي للصورة 4 ميجا ",


        ];


        $validator =  Validator::make($request->all(), [

            'img.*' => 'mimes:jpg,webp,jpeg,png|max:4100',
            "img"=>"required"

        ], $messeges);



        if ($validator->fails()) {
            Alert::error('error', $validator->errors()->first());
            return back();
        }



        $error = 0 ;
        foreach($imgs as $img){




            //add new name for img
            $new_name_img = time().uniqid().".".$img->getClientOriginalExtension();

            //move img to folder
            $img1 = \Image::make($img);
            $img1->save(public_path('upload/sections/'.$new_name_img),90);
            // $img->move(public_path("upload/sections"), $new_name_img);

            $section= SectionImg::create([
                "img"=>  "upload/sections/".$new_name_img ,
                "type"=>$type

            ]);
//            dd($section);

            if(!$section){
                $error++ ;
            }




        }

        if ($error == 0){

            session()->flash('success', "success");
            if(session()->has("success")){
                Alert::success('Success Title', 'Success Message');
            }

            return redirect()->route('section_galaries.index',$type);

        }else{

            session()->flash('error', "بعض الصور او جميعها لم يتم تحميلها");
            if(session()->has("error")){
                Alert::success('error Title', 'error Message');
            }

        }



    }



    public function destroy($id)
    {

        $section= SectionImg::findOrFail($id);
        if(file_exists(public_path( $section->img))){
            unlink(public_path($section->img));
        }
        $section->delete();
        // session()->flash('success', __('site.deleted_successfully'));
        session()->flash('success', "success");
        if(session()->has("success")){
            Alert::success('Success Title', 'Success Message');
        }
        return redirect()->route('section_galaries.index',$section->type);

    }


}
