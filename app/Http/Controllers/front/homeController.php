<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
// use App\Models\Category;
// use App\Models\CategoryImg;
use App\Models\Contact;
use App\Models\Post;
// use App\Models\Service;
// use App\Models\ServiceImg;
// use App\Models\Work;
use Illuminate\Http\Request;
// use  App\Models\Item;
use App\Models\PostImg;
// use App\Models\ProdImg;
use App\Models\Product;
use  App\Models\Slider;



use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Alert;
use App\Models\Section;
use App\Models\Social;

class homeController extends Controller
{
    public function index()
    {
        $sliders=Slider::all();
        $section = Section::first();
        // dd($section);
        $social = Social::select('id','img', 'link')->get();

        return view('front.index',compact('sliders','section','social'));
    }



    // }
    public function services_index(){
        return view('front.all_services');
    }





    public function all_posts(){
       $posts=Post::select('id','img','title_en','title_ar','brief_en','brief_ar','content_en','content_ar','created_at')->get();
        // dd($posts);

        return view('front.all_posts',compact('posts'));


    }

    public function single_post($id){
        $post=Post::findOrFail($id);
        $post_img=PostImg::where('post_id',$id)->get();
        return view('front.single_post',compact('post','post_img'));
    }

    public function posts_index(){
        $posts=Post::all();
        return view('front.post',compact('posts'));
    }
    public function about(){
        return view('front.about');
    }

    public function contacts_index(){
        return view('front.contact');
    }

    public function contacts_store(Request $request){

        $messeges = [


            'name.required'=>"العنوان مطلوب",
            'email.required'=>"العنوان مطلوب",
            'phone.required'=>"رقم الهاتف مطلوب",
            "comment.required"=>"محتوي الرساله مطلوب",


        ];


        $validator =  Validator::make($request->all(), [


            "name"=>  " required",
            "email"=>  " required",
            "phone"=>  " required" ,
            "comment"=>  " required",

        ], $messeges);

//            dd($request->all());


        if ($validator->fails()) {
            // dd($validator->errors()->first());
            Alert::error('error', $validator->errors()->first());
            // Alert::success('Congrats', 'You\'ve Successfully Registered');

            return back()->withInput();
        }

        $contact= Contact::create($request->all());
        if ($contact){
//            dd('ok');

            session()->flash('success', "success");
            if(session()->has("success")){
                Alert::success('Success Title', 'Success Message');
            }

            return redirect()->route("home.index");

        }

    }






    public function home()
    {
      $sliders = Slider::get();
      return view("front.index",compact("sliders"));

    }
    public function services()
    {
      return view("front.services");

    }









}
