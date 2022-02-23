<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => LaravelLocalization::setLocale()], function()


{
    Route::get('/', 'front\homeController@index')->name('home.index');
    Route::get('/about', 'front\homeController@about')->name('about.index');
    Route::get('/contacts', 'front\homeController@contacts_index')->name('contacts.index');
    Route::post('/contacts', 'front\homeController@contacts_store')->name('contacts.store');
    Route::get('/post/{id}', 'front\homeController@single_post')->name('post.show');
    Route::get('/service/{id}', 'front\homeController@service_show')->name('service.show');
    Route::get('/category/{id}', 'front\homeController@category_show')->name('category.show');

    Route::get('/services', 'front\homeController@services')->name('services');
    Route::get('/product/{id}', 'front\homeController@single_product')->name('product.show');
    Route::get('/all_posts', 'front\homeController@all_posts')->name('all_posts');
    Route::get('/posts', 'front\homeController@posts_index')->name('post.index');

    Route::get('/migrate', function() {
      $exitCode = Artisan::call('migrate');
      return '<h1>Cache facade value cleared</h1>';
  });


});
