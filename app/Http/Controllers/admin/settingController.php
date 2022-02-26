<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

use App\Models\Setting;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class settingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      // flash('Welcome Aboard!');

      $setting = Setting::first();


        return view("/dashboard/settings/index",["setting"=>  $setting  ]);
    }
    public function show_contact(){

        $contacts = Contact::orderBy('created_at','DESC')->paginate(10);
        return view("/dashboard/contacts/index",["contacts"=>  $contacts  ]);


    }

    /**

     *
     * @return \Illuminate\Http\Response
     */
    public function statistics()
    {
      $record = Statistic::first();


      return view("/dashboard/settings/statistic",["record"=>  $record  ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update_statistics(Request $request)
    {
 //dd($request->name);

$record = Statistic::first();

//dd($request->all());
$Statistic= $record->update($request->except("1"));
if($Statistic){

    session()->flash('success', "success");
           if(session()->has("success")){
           Alert::success('Success ', 'Success ');
            return back();
            }
  }else{

   session()->flash('error', "error");
          if(session()->has("error")){
           Alert::error('error ', 'error ');
          return back();

           }
}


    }












    public function update(Request $request)
    {
        //dd($request->name);
        $validator =  Validator::make($request->all(), [

            'about_app_ar' => '',
            'wats' => '',
            'tw_link' => '',
            'fb_link' => '',
            'contact_email' => '',
            'contact_phone' => '',
            'insta_link' => '',
            'yt_link' => '',
            'status' => '',
            'name' => 'required',
            'name_en' => 'required',
           'logo' => 'mimes:jpg,jpeg,png',



        ]);






        if ($validator->fails()) {
            Alert::error('error', $validator->errors()->first());
            return back();
        }
      //  dd(json_encode($request->all())) ;

        //upload file logo
     if($request->img  ){
     $img =  $request->img ;
      //add new name for img
      $new_name_img = time().uniqid().".".$img->getClientOriginalExtension();

      //move img to folder
     $move = $img->move(public_path("upload"), $new_name_img);
    // dd(public_path("upload"));
    // $move2= move_uploaded_file( $_FILES["logo"]["tmp_name"],public_path("upload")."/".$new_name_img) ;
    // dd($move2);

       $new = "upload/".$new_name_img ;
       $request->merge(['logo' => $new]);

     }
     $setting = Setting::first();

     if ($request->hasfile('logo')) {
        // $images .= 'yes';

        $image = $request->file('logo');
        $original_name = strtolower(trim($image->getClientOriginalName()));
        $file_name = time() . rand(100, 999) . $original_name;
        $path = 'uploads/logos/images/';

        if (!Storage::exists($path)) {
            Storage::disk('public')->makeDirectory($path);
        }

//            return (storage_path('app/public/'.$cat->image_url));

        if($setting->logo != null){
            if(file_exists(storage_path('app/public/'.$setting->logo)))
            {
                unlink(storage_path('app/public/'.$setting->logo));
            }
        }

        $setting->logo = $image->storeAs($path, $file_name, 'public');
        $setting->save();

    }



        if( $setting){
			request()->fullUrlWithQuery(['token ' => null]);
         // dd( $request->query() );
            $update= $setting->update($request->except(["2","logo"]));


                 if($update){

                  session()->flash('success', "success");
                         if(session()->has("success")){
                         Alert::success('Success ', 'Success Message');
                          return back();
                          }
                }else{

                 session()->flash('error', "error");
                        if(session()->has("error")){
                         Alert::error('error ', 'error Message');
                        return back();

                         }
            }
        }else{

                $setting= Setting::create($request->all());
                if($setting){

                    session()->flash('success', "success");
                           if(session()->has("success")){
                           Alert::success('Success ', 'Success Message');
                            return back();
                            }
                  }else{

                   session()->flash('error', "error");
                          if(session()->has("error")){
                           Alert::error('error ', 'error Message');
                          return back();

                           }
              }

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

      $contact= ContactMesseg::findOrFail($id);
       $contact->delete();
      if($contact){
       session()->flash('success', "success");
     if(session()->has("success")){
      Alert::success('Success Title', 'Success Message');
      return back();
     }
      }else{
        session()->flash('error', "error");
       if(session()->has("error")){
       Alert::error('error Title', 'error Message');
       return back();

      }

    }
}
}
