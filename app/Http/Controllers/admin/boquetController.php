<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use  App\Models\Boquet;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class BoquetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $boquets = Boquet::where(function ($query) use($request){
            if ($request->input('search'))

                {
                    $query->where(function ($query) use($request){
                        $query->where('title_en','like','%'.$request->search.'%')
                        ->orWhere('title_ar','like','%'.$request->search.'%');



                    });
                }
        })->paginate(15);
        // dd($boquets[0]['img']);




        return view('/dashboard/boquets/index',compact('boquets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('/dashboard/boquets/create');
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

            'title_ar'=>'اسم المنتج بالعربيه مطلوب',
            'title_ar'=>'اسم المنتج بالانجليزيه مطلوب',
            'photo.required' => "صورة المنتج مطلوبة",
            'photo.required' => "صورة المنتج مطلوبة",
            'photo.mimes' => " يجب ان تكون الصورة jpg او jpeg او png  ",
            'photo.max' => " الحد الاقصي للصورة 4 ميجا ",

        ];


        $validator = Validator::make($request->all(), [

             'title_ar' => 'required',
             'title_ar' => 'required',
             'description_ar' => 'required',
             'description_en' => 'required',
            'photo' => 'required|mimes:webp,jpg,jpeg,png|max:4100',
        ], $messeges);


        if ($validator->fails()) {
            Alert::error('error', $validator->errors()->first());
            return back()->withInput();
        }



        $image = $request->photo;
        $original_name = strtolower(trim($image->getClientOriginalName()));
        $file_name = time() . rand(100, 999) . $original_name;
        $path = 'uploads/boquets/images/';

        if (!Storage::exists($path)) {
            Storage::disk('public')->makeDirectory($path);
        }
        $img = \Image::make($image);
        $img->save(public_path('storage/' . $path . $file_name), 90);



        $boquet = Boquet::create([

            'appearance' => $request['appearance'] ?: 0,
            'title_ar' => $request['title_ar'] ?: '',
            'title_en' => $request['title_en'] ?: '',
            'description_en' => $request['description_en'] ?: '',
            'description_ar' => $request['description_ar'] ?: '',
            'img' => $path . $file_name,
        ]);









        if (session()->has("success")) {
            Alert::success('Success ', 'Success Message');
        }

        return redirect()->route('boquets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $boquet = Boquet::where('id', $id)->first();

        if ($boquet) {
            if (file_exists(storage_path('app/public/' . $boquet->img))) {
                unlink(storage_path('app/public/' . $boquet->img));
            }
            //            if (file_exists(storage_path('app/public/' . $boquet->height_img))) {
            //                unlink(storage_path('app/public/' . $boquet->height_img));
            //            }


            if ($boquet->cities) {
                if ($boquet->cities->count() > 0) {
                    foreach ($boquet->cities as $city) {
                        $city->delete();
                    }
                }
            }
            $boquet->delete();


            $boquet->delete();
            session()->flash('success', "success");
            if (session()->has("success")) {
                Alert::success('نجح', ' تم حذف المنتج');
            }
        }

        //        return Response::json($user);
        return redirect()->route('boquets.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $boquet = Boquet::findOrFail($id);

        return view('/dashboard/boquets/edit', compact('boquet'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateBoquet(Request $request, $id)
    {
        //    dd($request->all());
        $messeges = [
            'title_ar'=>'اسم المنتج بالعربيه مطلوب',
            'title_ar'=>'اسم المنتج بالانجليزيه مطلوب',
            'photo.required' => "صورة المنتج مطلوبة",
            'photo.required' => "صورة المنتج مطلوبة",
            'photo.mimes' => " يجب ان تكون الصورة jpg او jpeg او png  ",
            'photo.max' => " الحد الاقصي للصورة 4 ميجا ",
        ];

        $validator = Validator::make($request->all(), [
            'title_ar' => 'required',
            'title_ar' => 'required',
            'description_ar' => 'required',
            'description_en' => 'required',
            'photo' => 'mimes:webp,jpg,jpeg,png|max:4100',
        ], $messeges);


        if ($validator->fails()) {
            Alert::error('error', $validator->errors()->first());
            return back();
        }

        $boquet = Boquet::findOrFail($id);
        // dd($boquet->id);
        if (!$boquet) {
            Alert::error('error', 'هذا المنتج غير مسجل بالنظام');
            return back();
        }

        if ($request->hasFile('photo')) {

            $image = $request->file('photo');
            $original_name = strtolower(trim($image->getClientOriginalName()));
            $file_name = time() . rand(100, 999) . $original_name;
            $path = 'uploads/boquets/images/';

            if (!Storage::exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }

            if (file_exists(storage_path('app/public/' . $boquet->img))) {
                unlink(storage_path('app/public/' . $boquet->img));
            }
            $img = \Image::make($image);
            $img->save(public_path('storage/' . $path . $file_name), 90);



            $boquet1 = $boquet->update([
                'appearance' => $request['appearance'] ?: 0,
                'title_ar' => $request['title_ar'] ?: '',
                'title_en' => $request['title_en'] ?: '',
                'description_en' => $request['description_en'] ?: '',
                'description_ar' => $request['description_ar'] ?: '',
                'img' => $path . $file_name,

            ]);
        }



        else {
            $boquet1 = $boquet->update([
                'appearance' => $request['appearance'] ?: 0,
                'title_ar' => $request['title_ar'] ?: '',
                'title_en' => $request['title_en'] ?: '',
                'description_en' => $request['description_en'] ?: '',
                'description_ar' => $request['description_ar'] ?: '',
            ]);
        }


        //TODO :: -----------------------------//

        session()->flash('success', "success");
        if (session()->has("success")) {
            Alert::success('Success ', 'Success Message');
        }

        return redirect()->route('boquets.index', $id);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boquet = Boquet::where('id', $id)->first();

        if ($boquet) {
            if (file_exists(storage_path('app/public/' . $boquet->img))) {
                unlink(storage_path('app/public/' . $boquet->img));
            }




            // $boquet->delete();

            $boquet->delete();
            session()->flash('success', "success");
            if (session()->has("success")) {
                Alert::success('نجح', ' تم حذف المنتج');
            }
        }

        //        return Response::json($user);
        return redirect()->route('boquets.index');
    }

}
