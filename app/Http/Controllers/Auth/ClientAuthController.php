<?php

namespace App\Http\Controllers\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Order;
use App\Models\Address;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;


use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;


class ClientAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:client')->except('logout','account','orders'
            ,'address_store','address_view','address_index','address_delete','address_edit','address_update'
        ,'account_update','account_edit');
    }


    public function showClientLoginForm()
    {
        return view('front.login', ['url' => 'client']);
    }

    public function clientLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('client')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
//            dd(Auth::guard('client')->id);
  Alert::success('success', "");
            return redirect()->intended('/');
        }
          Alert::error('error', "error in email or password ");

        return back()->withInput($request->only('email', 'remember'));
    }



    public function showClientRegisterForm()
    {

        return view('front.register', ['url' => 'client']);
    }

    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'email'    => 'required|email|exists:clients|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];

        //custom validation error messages.
        $messages = [
            'email.exists' => 'These credentials do not match our records.',
        ];

        //validate the request.
        $request->validate($rules,$messages);
    }


    protected function createClient(Request $request)
    {
//        $this->validator($request->all())->validate();
//        dd($request->all());
        $rules = array(
            'email'=>'sometimes|email|unique:users,email',
            'name'=>'required|Filled|string',
            'password'=>'required|Filled|string|min:6',
            'phone'=>'required|Filled|string',

        );
        $this->validate( $request , $rules);

        $client = Client::create([
            'name' => $request['name'],
            'email' => $request['email'],

            'phone' => $request->phone ,
            'api_token' => $request->_token,

        'password' => Hash::make($request['password']),
        ]);
        return redirect()->route('login/client');
    }
    
     public function account(){//Islam 23July
        if($this->middleware('guest:client')){
            return view('front.account');

        }
        else{
    return redirect()->route('login/client');
            }
            }
            
            
    
    public function orders($id){//Islam 23July

        if($this->middleware('guest:client')){
            $orders=Order::where('user_id', $id)->get();
            return view('front.order',compact("orders"));


                }
                else{
                    return redirect()->route('login/client');
                }
    }
    
    
    
public function address_view(){
        return view('front.address');
}

public function address_store(Request $request){
    $rules = array(
        'street'=>'required',
        'city'=>'required',
        'gover'=>'required',
        'plot'=>'required',
        'building_number'=>'required',
        'role'=>'required',

    );
    $this->validate( $request , $rules);
    // dd($request->all());
    $address = Address::create([
        'street' => $request->street,
        'city' => $request->city,

        'gover' => $request->gover ,
         'plot'=>$request->plot,
        'building_number'=>$request->building_number,
        'role'=>$request->role,
        'additionaltips'=>$request->additionaltips,
        
        'client_id' => $request->client_id ,

    ]);
    return redirect()->route('account.index');
}

public function address_index($id){
    if($this->middleware('guest:client')){
        $address=Address::where('client_id', $id)->get();
        return view('front.address_show',compact("address"));


    }
    else{
        return redirect()->route('login/client');
    }
}


    public function address_edit($id)
    {
        $address=Address::where('id', $id)->first();
        return view('front.address_edit',compact('address'));
    }

    public function address_delete($id){
        DB::delete('delete from client_address where id = ?',[$id]);
        return redirect()->route('account.index');
    }
    public function address_update(Request $request,$id){
//        dd($id);
        $rules = array(
            'street'=>'required',
            'city'=>'required',
            'gover'=>'required',
            'plot'=>'required',
            'building_number'=>'required',
            'role'=>'required',

        );
        $this->validate( $request , $rules);
        


        $address = Address::find($id);

        $address->street = $request->street;
        $address->city = $request->city;
        $address->gover = $request->gover;
        $address->plot = $request->plot;
        $address->building_number = $request->building_number;
        $address->role = $request->role;
        $address->additionaltips = $request->additionaltips;

        $address->save();
        return redirect()->route('account.index');


    }

    public function account_edit($id)
    {
        $account=Client::where('id', $id)->first();
        return view('front.account_edit',compact('account'));
    }

    public function account_update(Request $request,$id){
//        dd($id);
        $rules = array(
            'email'=>'sometimes|email',
            'name'=>'required|Filled|string',
            'phone'=>'required|Filled|string',

        );
        $this->validate( $request , $rules);



        $client= Client::find($id);



        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->password = Hash::make($request->password);


        $client->save();
        return redirect()->route('account.index');


    }

}
