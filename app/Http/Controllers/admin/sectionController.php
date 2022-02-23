<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

use App\Models\Section;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class sectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $section = Section::first();


        return view("/dashboard/sections/index", ["section" =>  $section]);
    }






    public function update(Request $request)
    {
        //dd($request->name);
        $validator =  Validator::make($request->all(), [
            'service_content_ar' => 'required',
            'service_content_en' => 'required',
            'service_img' => 'mimes:jpg,webp,jpeg,png',
            'about_content_en' => 'required',
            'about_content_ar' => 'required',
            'about_img' => 'mimes:jpg,webp,jpeg,png',

        ]);






        if ($validator->fails()) {
            Alert::error('error', $validator->errors()->first());
            return back();
        }

        $section = Section::first();


        //upload service_img start

        if ($request->hasFile('service_img1')) {

            $image = $request->file('service_img1');
            $original_name = strtolower(trim($image->getClientOriginalName()));
            $file_name = time() . rand(100, 999) . $original_name;
            $path = 'uploads/sections/images/';

            if (!Storage::exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }

            if (file_exists(storage_path('app/public/' . $section->service_img))) {
                unlink(storage_path('app/public/' . $section->service_img));
            }
            // $img = \Image::make($image)->resize(310,416);
            $img = \Image::make($image);
            $img->save(public_path('storage/' . $path . $file_name), 90);
            $new = $path.$file_name ;
            // dd($new);
            $request->merge(['service_img' => $new]);

        }
        //upload service_img end


        //upload about_img start
        if ($request->hasFile('about_img1')) {

            $image = $request->file('about_img1');
            $original_name = strtolower(trim($image->getClientOriginalName()));
            $file_name = time() . rand(100, 999) . $original_name;
            $path = 'uploads/sections/images/';

            if (!Storage::exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }

            if (file_exists(storage_path('app/public/' . $section->about_img))) {
                unlink(storage_path('app/public/' . $section->about_img));
            }
            // $img = \Image::make($image)->resize(310,416);
            $img = \Image::make($image);
            $img->save(public_path('storage/' . $path . $file_name), 90);
            $new = $path.$file_name ;
            // dd($new);
            $request->merge(['about_img' => $new]);

        }
        //upload about_img end



        // dd($request->all());
        if ($section) {
            request()->fullUrlWithQuery(['token ' => null]);
            // dd( $request->query() );
            $update = $section->update($request->except(["1", "service_img1",'about_img1']));


            if ($update) {

                session()->flash('success', "success");
                if (session()->has("success")) {
                    Alert::success('Success ', 'Success Message');
                    return back();
                }
            } else {

                session()->flash('error', "error");
                if (session()->has("error")) {
                    Alert::error('error ', 'error Message');
                    return back();
                }
            }
        } else {

            $section = Section::create($request->except(["1", "service_img",'about_img']));
            if ($section) {

                session()->flash('success', "success");
                if (session()->has("success")) {
                    Alert::success('Success ', 'Success Message');
                    return back();
                }
            } else {

                session()->flash('error', "error");
                if (session()->has("error")) {
                    Alert::error('error ', 'error Message');
                    return back();
                }
            }
        }
    }
}
