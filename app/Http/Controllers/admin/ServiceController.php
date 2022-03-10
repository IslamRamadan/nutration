<?php

namespace App\Http\Controllers\admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function calories_calc(Request $request)
    {
        $services = Service::orderby('created_at', 'DESC')->where('type', 0)->where(function ($query) use ($request) {
            if ($request->input('search')) {
                $query->where(function ($query) use ($request) {
                    $query->where('name', 'like', '%' . $request->search . '%')
                        ->orWhere('phone', 'like', '%' . $request->search . '%');
                });
            }
        })->paginate(15);
        return view("/dashboard/services/calories_calc", ["services" =>  $services]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function nutrition_specialist(Request $request)
    {
        $services = Service::orderby('created_at', 'DESC')->where('type', 1)->where(function ($query) use ($request) {
            if ($request->input('search')) {
                $query->where(function ($query) use ($request) {
                    $query->where('name', 'like', '%' . $request->search . '%')
                        ->orWhere('phone', 'like', '%' . $request->search . '%');
                });
            }
        })->paginate(15);
        return view("/dashboard/services/nutrition_specialist", ["services" =>  $services]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function diet_order(Request $request)
    {
        $services = Service::orderby('created_at', 'DESC')->where('type', 2)->where(function ($query) use ($request) {
            if ($request->input('search')) {
                $query->where(function ($query) use ($request) {
                    $query->where('name', 'like', '%' . $request->search . '%')
                        ->orWhere('phone', 'like', '%' . $request->search . '%');
                });
            }
        })->paginate(15);
        return view("/dashboard/services/diet_order", ["services" =>  $services]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function home_coach(Request $request)
    {
        $services = Service::orderby('created_at', 'DESC')->where('type', 3)->where(function ($query) use ($request) {
            if ($request->input('search')) {
                $query->where(function ($query) use ($request) {
                    $query->where('name', 'like', '%' . $request->search . '%')
                        ->orWhere('phone', 'like', '%' . $request->search . '%');
                });
            }
        })->paginate(15);
        return view("/dashboard/services/home_coach", ["services" =>  $services]);
    }
    public function boquet_order(Request $request)
    {
        $services = Service::orderby('created_at', 'DESC')->where('type', 4)->where(function ($query) use ($request) {
            if ($request->input('search')) {
                $query->where(function ($query) use ($request) {
                    $query->where('name', 'like', '%' . $request->search . '%')
                        ->orWhere('phone', 'like', '%' . $request->search . '%');
                });
            }
        })->paginate(15);
        return view("/dashboard/services/boquet", ["services" =>  $services]);
    }
    public function service_show($id)
    {
        $service = Service::find($id);
        return view('dashboard.services.show', compact('service'));
    }

    public function service_destroy($id)
    {
        $service = Service::findOrFail($id);
        $type = $service->type;
        $service->delete();

        session()->flash('success', "تم مسح الطلب بنجاح");
        if ($type == 0) {
            return redirect()->route('calories.calc');
        } elseif ($type == 1) {
            return redirect()->route('nutrition.specialist');
        } elseif ($type == 2) {
            return redirect()->route('diet.order');
        }
        elseif ($type == 4) {
            return redirect()->route('boquet_order');
        } else {
            return redirect()->route('home.coach');
        }
    }
}
