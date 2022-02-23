<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use  App\Models\Social;
use App\Models\ProdImg;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $socials = Social::where(function ($query) use ($request) {
            if ($request->input('search')) {
                $query->where(function ($query) use ($request) {
                    $query->where('title_en', 'like', '%' . $request->search . '%')
                        ->orWhere('title_ar', 'like', '%' . $request->search . '%');
                });
            }
        })->paginate(15);
        // dd($socials[0]['img']);

        return view('/dashboard/socials/index', compact('socials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/dashboard/socials/create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $messeges = [

            'link' => 'الرابط مطلوب',
            'photo.required' => "الصورة مطلوبة",
            'photo.mimes' => " يجب ان تكون الصورة jpg او jpeg او png  ",
            'photo.max' => " الحد الاقصي للصورة 4 ميجا ",

        ];


        $validator = Validator::make($request->all(), [

            'link' => 'required',
            'photo' => 'required|mimes:webp,jpg,jpeg,png|max:4100',

            //            'size_photo' => 'required|mimes:jpg,jpeg,png|max:4100',

        ], $messeges);


        if ($validator->fails()) {
            Alert::error('error', $validator->errors()->first());
            return back()->withInput();
        }



        $image = $request->photo;
        $original_name = strtolower(trim($image->getClientOriginalName()));
        $file_name = time() . rand(100, 999) . $original_name;
        $path = 'uploads/socials/images/';

        if (!Storage::exists($path)) {
            Storage::disk('public')->makeDirectory($path);
        }
        // $img = \Image::make($image)->resize(550, 309);
        $img = \Image::make($image);
        $img->save(public_path('storage/' . $path . $file_name), 90);



        $social = Social::create([
            'appearance' => $request['appearance'] ?: '',
            'link' => $request['link'] ?: '',
            'img' => $path . $file_name,
        ]);


        if (session()->has("success")) {
            Alert::success('Success ', 'Success Message');
        }

        return redirect()->route('social.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $social = Social::findOrFail($id);
        // dd($sections);
        return view('/dashboard/socials/edit', compact('social'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateSocial(Request $request, $id)
    {
        //    dd($request->all());
        $messeges = [

            'link' => 'الرابط  مطلوب',
            'photo.required' => "الصورة مطلوبة",
            'photo.mimes' => " يجب ان تكون الصورة jpg او jpeg او png  ",
            'photo.max' => " الحد الاقصي للصورة 4 ميجا ",
        ];

        $validator = Validator::make($request->all(), [
            'link' => 'required',
            'photo' => 'mimes:webp,jpg,jpeg,png|max:4100',
        ], $messeges);


        if ($validator->fails()) {
            Alert::error('error', $validator->errors()->first());
            return back();
        }

        $social = Social::findOrFail($id);
        // dd($social->id);
        if (!$social) {
            Alert::error('error', 'هذا المنتج غير مسجل بالنظام');
            return back();
        }

        if ($request->hasFile('photo')) {

            $image = $request->file('photo');
            $original_name = strtolower(trim($image->getClientOriginalName()));
            $file_name = time() . rand(100, 999) . $original_name;
            $path = 'uploads/socials/images/';

            if (!Storage::exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }

            if (file_exists(storage_path('app/public/' . $social->img))) {
                unlink(storage_path('app/public/' . $social->img));
            }
            // $img = \Image::make($image)->resize(550, 309);
            $img = \Image::make($image);
            $img->save(public_path('storage/' . $path . $file_name), 90);



            $social1 = $social->update([
                'appearance' => $request['appearance'] ?: 0,

                'link' => $request['link'] ?: '',
                'img' => $path . $file_name,

            ]);
        } else {
            $social1 = $social->update([
                'appearance' => $request['appearance'] ?: 0,
                'link' => $request['link'] ?: '',
            ]);
        }









        //TODO :: -----------------------------//

        session()->flash('success', "success");
        if (session()->has("success")) {
            Alert::success('Success ', 'Success Message');
        }

        return redirect()->route('social.index', $id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $social = Social::where('id', $id)->first();

        if ($social) {
            if (file_exists(storage_path('app/public/' . $social->img))) {
                unlink(storage_path('app/public/' . $social->img));
            }




            // $social->delete();



            $img = ProdImg::where("social_id", $id)->get();
            // dd($img[0]);


            if ($img) {
                foreach ($img as $one) {
                    // dd($one->img);
                    if (file_exists(public_path($one->img))) {
                        // dd($one->img);

                        unlink(public_path($one->img));
                    }
                    // dd("stop");

                    $one->delete();
                }
            }


            $social->delete();
            session()->flash('success', "success");
            if (session()->has("success")) {
                Alert::success('نجح', ' تم حذف المنتج');
            }
        }

        //        return Response::json($user);
        return redirect()->route('social.index');
    }
    public function add_section(Request $request)
    {
        $type = $request->type;
        if ($type == 1) {
            $val = ' <h3 class="text-center">فقره </h3>
        <div class="form-group">
            <label>مجتوي الفقره بالعربيه</label>
            <textarea type="text" name="description_ar1[]" class="form-control" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label>محتوي الفقره بالانجليزيه</label>
            <textarea type="text" name="description_en1[]" class="form-control" rows="10">
            </textarea>
        </div>


        <div class="form-group">
            <label>الصوره</label>
            <input type="file" name="photo1[]" class="form-control" value="">
        </div>';
        } else {
            $val = ' <h3 class="text-center">فقره </h3>
            <div class="form-group">
                <label>مجتوي الفقره بالعربيه</label>
                <textarea type="text" name="description_ar2[]" class="form-control" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label>محتوي الفقره بالانجليزيه</label>
                <textarea type="text" name="description_en2[]" class="form-control" rows="10">
                </textarea>
            </div>


            <div class="form-group">
                <label>الصوره</label>
                <input type="file" name="photo2[]" class="form-control" value="">
            </div>';
        }


        return response()->json($val);
    }
}
