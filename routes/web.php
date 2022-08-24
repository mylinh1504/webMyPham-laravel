<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenusController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\Productcontroller;
use App\Http\Controllers\Users\RegisterController;
use App\Http\Controllers\Admin\Users\LoginController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('users/login',[LoginController::class, 'index'])->name('login');
Route::post('users/login/store',[LoginController::class, 'store']);
Route::get('users/register',[RegisterController::class, 'index']);
Route::post('users/register', [RegisterController::class, 'store']);
Route::middleware(['auth'])->group(function(){

 Route::prefix('admin')->group(function() {
        Route::get('/',[MainController::class, 'index'])->name('admin');

        Route::get('main',[Productcontroller::class, 'index']);

  
    
    #menu
    Route::prefix('menus')->group(function(){
        Route::get('add',[MenusController::class,'create']);
        Route::post('add',[MenusController::class,'store']);
        Route::get('list', [MenusController::class,'index']);
        
        Route::get('edit/{menu}', [MenusController::class,'show']);
        Route::post('edit/{menu}', [MenusController::class,'update']);

        Route::DELETE('destroy', [MenusController::class,'destroy']);
            
    });

    #product
    Route::prefix('products')->group(function () {
        Route::get('add', [Productcontroller::class, 'create']);
        Route::post('add', [Productcontroller::class, 'store']);
        Route::get('list', [Productcontroller::class, 'index']);
        Route::get('edit/{product}', [Productcontroller::class, 'show']);
        Route::post('edit/{product}', [Productcontroller::class, 'update']);
        Route::DELETE('destroy', [Productcontroller::class,'destroy']);


    });

     #Slider
     Route::prefix('sliders')->group(function () {
        Route::get('add', [SliderController::class, 'create']);
        Route::post('add', [SliderController::class, 'store']);
        Route::get('list', [SliderController::class, 'index']);
        Route::get('edit/{slider}', [SliderController::class, 'show']);
        Route::post('edit/{slider}', [SliderController::class, 'update']);
        Route::DELETE('destroy', [SliderController::class,'destroy']);


    });

    #upload
    Route::post('upload/services', [\App\Http\Controllers\Admin\UploadController::class, 'store']);

    #giohang
    Route::get('customers',[\App\Http\Controllers\Admin\CartController::class,'index']);
    Route::get('customers/view/{customer}',[\App\Http\Controllers\Admin\CartController::class,'show']);
    
 });

});

Route::get('/',[App\Http\Controllers\MainController::class,'index'])->name('index');
Route::post('/services/load-product',[App\Http\Controllers\MainController::class,'loadProduct']);

Route::get ('danh-muc/{id}-{slug}.html',[MenuController::class,'index']);

//
Route::get('san-pham/{id}-{slug}.html', [App\Http\Controllers\ProductController::class, 'index']);

Route::post('add-cart', [App\Http\Controllers\CartController::class, 'index']);
Route::get('carts', [App\Http\Controllers\CartController::class, 'show']);
Route::post('update-cart', [App\Http\Controllers\CartController::class, 'update']);
Route::get('carts/delete/{id}', [App\Http\Controllers\CartController::class, 'remove']);
Route::post('carts', [App\Http\Controllers\CartController::class, 'addCart']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



