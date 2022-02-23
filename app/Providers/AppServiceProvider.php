<?php

namespace App\Providers;

use App\Models\Service;
use Illuminate\Support\ServiceProvider;
use App\Models\ClientNotification;
use App\Models\Setting;
use App\Models\SubCategory;

//use App\Models\Service;

//use App\Models\Owner;

//use App\Models\Statistic;



use App\Models\Category;
use App\Models\Section;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Schema::defaultStringLength(191);

      ///////////////////////////////////////////////
       $my_setting= Setting::first();
        view()->share(compact('my_setting'));
       $my_section= Section::first();
        view()->share(compact('my_section'));
        ///////////////////////////////////////////////

    }
}
