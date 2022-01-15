<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SliderCrudController;
use App\Http\Controllers\Admin\PhoneController;

use Illuminate\Routing\Route as RoutingRoute;
use Symfony\Component\Routing\Router;

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

route::get('/',[PageController::class, 'home'])->name('home') ;
route::get('/about',[PageController::class, 'about'])->name('about');
route::get('/cars',[PageController::class, 'cars'])->name('cars');
route::get('/portfolio',[PageController::class, 'portfolio'])->name('portfolio');
route::get('/news',[PageController::class, 'news'])->name('news');
route::match(['post','get'], '/contact',[PageController::class, 'contact'])->name('contact');
// route::match(['post','get'], '/contact',[PageController::class, 'contact'])->name('contact');



// route::get('/slider',[SliderController::class, 'index'])->name('slider.index');
// route::get('/slider/create',[SliderController::class, 'create'])->name('slider.create');
// route::post('/slider/create',[SliderController::class, 'store'])->name('slider.store');

// route::get('/slider/{id}/edit',[SliderController::class, 'edit'])->name('slider.edit');
// route::post('/slider/{id}/update',[SliderController::class, 'update'])->name('slider.update');
// route::get('/slider/{id}',[SliderController::class, 'delete'])->name('slider.delete');

route::resource('slider', SliderCrudController::class);

route::resource('phones', PhoneController::class);

route::match(['post','get'], '/subscribe',[PageController::class, 'subscribe']);



route::get('/admin',[PageController::class, 'admin'])->name('admin');

route::get('/lang/{locale}', function($locale){
    session(['locale'=>$locale]);
    return back();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
