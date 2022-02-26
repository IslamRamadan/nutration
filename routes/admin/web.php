<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|//
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => LaravelLocalization::setLocale()], function () {

    Route::get('/clear', function () {
        \Illuminate\Support\Facades\Artisan::call('cache:clear');
        \Illuminate\Support\Facades\Artisan::call('config:cache');
        \Illuminate\Support\Facades\Artisan::call('route:clear');
        \Illuminate\Support\Facades\Artisan::call('view:clear');
    });

    Route::prefix('admin')->group(function () {
        Route::middleware(['auth'])->group(function () {





            Route::get('/dashboard', 'dashboardController@index')->name("dashboard.index");

            Route::middleware(['jobCheck'])->group(function () {


            Route::resource('/sliders', 'sliderController');

                Route::get('/settings', 'settingController@index')->name('settings.index');
                Route::get('/sections', 'sectionController@index')->name('sections.index');
                Route::get('/contact', 'settingController@show_contact')->name('contact.index');



            Route::post('/settings/update', 'settingController@update')->name('settings.update');
            Route::post('/sections/update', 'sectionController@update')->name('sections.update');

            // Route::post('/items/update/color/{id}', 'itemController@update_color')->name('items.update.color');


            Route::get('/galaries/{id}', 'galaryController@index')->name("galaries.index");
            Route::get('/sliders/vendor/{id}', 'galaryController@vendor')->name("slider.vendor");
            Route::get('/calories_calc', 'ServiceController@calories_calc')->name("calories.calc");
            Route::get('/nutrition_specialist', 'ServiceController@nutrition_specialist')->name("nutrition.specialist");
            Route::get('/diet_order', 'ServiceController@diet_order')->name("diet.order");
            Route::get('/home_coach', 'ServiceController@home_coach')->name("home.coach");
            Route::get('/service_show/{id}', 'ServiceController@service_show')->name("service.show");
            Route::delete('/service_destroy/{id}', 'ServiceController@service_destroy')->name("service.destroy");
            // Route::post('/galaries/store/{id}', 'galaryController@store')->name("galaries.store");
            Route::post('/slider/vendor/store/{id}', 'galaryController@vendor_store')->name("slider.vendor.store");

            Route::delete('/galaries/destroy/{id}', 'galaryController@destroy')->name("galaries.destroy");
            Route::delete('/slider/vendor/destroy/{id}', 'galaryController@destroy_slider')->name("slider.vendor.destroy");

                Route::resource('/roles', 'roleController');
                Route::resource('/users', 'userController');

                //islam
                // Route::resource('basic_categories', 'BasicCategoryController');
                // Route::resource('/works', 'WorkController');
                // Route::resource('/how_works', 'howWorkController');
                // Route::resource('/why_works', 'whyWorkController');
                // Route::resource('/services', 'ServiceController');
                // Route::resource('/categories', 'CategoryController');
                Route::resource('/posts', 'postController');
                // Route::resource('/projects', 'ProjectController');
                // Route::resource('/plans', 'PlanController');
                Route::resource('social', 'SocialController');
                Route::post('custom_products/update/{id}', 'SocialController@updateSocial')->name('socials.update.social');
                Route::post('custom_services/update/{id}', 'ServiceController@updateService')->name('services.update.service');
                Route::post('custom_categories/update/{id}', 'CategoryController@updateCategory')->name('categories.update.category');
                Route::get('/post_galaries/{id}', 'postGalaryController@index')->name("post_galaries.index");
                Route::post('/post_galaries/store/{id}', 'postGalaryController@store')->name("post_galaries.store");
                Route::delete('/post_galaries/destroy/{id}', 'postGalaryController@destroy')->name("post_galaries.destroy");
                // Route::get('/service_galaries/{id}', 'serviceGalaryController@index')->name("service_galaries.index");
                // Route::get('/client_galaries', 'clientGalaryController@index')->name("client_galaries.index");
                // Route::post('/client_galaries/store', 'clientGalaryController@store')->name("client_galaries.store");
                // Route::delete('/client_galaries/destroy/{id}', 'clientGalaryController@destroy')->name("client_galaries.destroy");
                // Route::get('/service_galaries/{id}', 'serviceGalaryController@index')->name("service_galaries.index");
                // Route::post('/service_galaries/store/{id}', 'serviceGalaryController@store')->name("service_galaries.store");
                // Route::delete('/service_galaries/destroy/{id}', 'serviceGalaryController@destroy')->name("service_galaries.destroy");
                // Route::get('/category_galaries/{id}', 'categoryGalaryController@index')->name("category_galaries.index");
                // Route::post('/category_galaries/store/{id}', 'categoryGalaryController@store')->name("category_galaries.store");
                // Route::delete('/category_galaries/destroy/{id}', 'categoryGalaryController@destroy')->name("category_galaries.destroy");
                // Route::get('basic_categories/destroy/{id}', 'BasicCategoryController@destroy');
                // Route::post('custom_basic_categories/update/{id}', 'BasicCategoryController@updateBasicCategory')->name('basic_categories.update.basic_category');



                //islam


            });
////////////////////////////////////////////////////////////////////////////////////

//TODO :: DASHBOARD ROUTES ENDED

///////////////////////////////////////////

            Route::get('/profile', 'profileController@index')->name('profile.index');
            Route::post('/profile/email', 'profileController@email')->name('profile.email');
            Route::post('/profile/password', 'profileController@password')->name('profile.password');
            Route::post('/profile/username', 'profileController@username')->name('profile.username');

        });
        Auth::routes();
        Route::get('logout', 'Auth\logoutController@logout')->name('user_logout');
    });

});
