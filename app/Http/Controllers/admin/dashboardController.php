<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
//    public function index(Request $request)
//    {
//        $records =  DB::table("orders")
//        ->select(
//
//         DB::raw("COUNT(*) as count "),
//         DB::raw("YEAR(created_at) as year "),
//         DB::raw("MONTH(created_at) as month ")
//
//         )->groupBy("month")->get();
//         $orders = Order::where(function ($q) use ($request) {
//            if ($request->phone) {
//                $q->where("phone", $request->phone );
//            }
//            if ($request->code) {
//                $q->where("id", $request->code );
//            }
//            if ($request->status) {
//                $q->where("status", $request->status );
//            }
//            if ($request->govern) {
//                $q->where("govern", $request->govern );
//            }
//        })->orderBy("id","desc")->limit(10)->get();
//        return view("dashboard.welcome",compact("records","orders"));
//    }

    public function index(Request $request)
    {

        return view("dashboard.welcome");
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

}
