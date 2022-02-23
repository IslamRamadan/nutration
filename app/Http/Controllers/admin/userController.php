<?php

namespace App\Http\Controllers\admin;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class userController extends Controller
{




    public function index(Request $request)

    {



        $users = User::where(function ($query) use($request){
            if ($request->input('keyword'))
            {
                $query->where(function ($query) use($request){
                    $query->where('name','like','%'.$request->keyword.'%');
                    $query->orWhere('email','like','%'.$request->keyword.'%');


                });
            }

            if ($request->input('role_id'))
            {

                $query->WhereHas('roles',function ($q) use($request){
                    $q->where('role_id',$request->role_id);
                });
            }
        })->paginate(20);

        return view('dashboard/users/index',compact('users'));
    }

    public function create(User $model)
    {
        return view('/dashboard/users/create',compact('model'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

//        TODO :: EDITED
//        dd();
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required|confirmed',
            'email' => 'email|required|unique:users,email',
            'roles_list'  => 'required'
        ]);
        $request->merge(['password' => bcrypt($request->password)]);

        $user = User::create($request->except('roles_list'));

        if($user){
            $user->update([
                'job_id' => intval($request->roles_list[0])
            ]);
        }


        $user->roles()->attach($request->input('roles_list'));


//        TODO :: EDIT ROLES VALUE
        Alert::success('success','تــم اضــافة المستخدم بنجــاح');

        return back();
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard/users.edit',compact('user' ));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request , $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'confirmed',
            'email' => 'email|required|unique:users,email,'.$id,
            'roles_list'  => 'required'
        ]);

        $user = User::findOrFail($id);
        $user->roles()->sync((array) $request->input('roles_list'));


       if($request->password ==""){

        $update = $user->update(["name"=>  $request->name ,
        "email"=> $request->email

        ]);
       }else{
          $request->merge(['password' => bcrypt($request->password)]);
        $update = $user->update(["name"=>  $request->name ,
        "email"=> $request->email,
        "password"=>$request->password

        ]);

       }

        if($update ){

            $user->update([
                'job_id' => intval($request->roles_list[0])
            ]);

        Alert::success('success','تــم تحديث المستخدم بنجــاح');
        return back();
        }else{
            Alert::error('error','خطأ غير متوقع');
            return back();
        }
    }

    public function destroy($id)
    {
        $record = User::findOrFail($id);

        if (!$record) {
            Alert::error('error','خطأ غير متوقع');
            return back();
        }

        $record->delete();
        Alert::success('success','تمت العملية بنجاح');
        return back();
    }
}
