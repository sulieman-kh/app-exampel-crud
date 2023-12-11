<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputersController;
use App\Http\Controllers\MobilesController;
use App\Http\Controllers\LoginRegisterController;

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


Route::get('/',[StaticController::class, 'index'])->name('home.index');
Route::get('/about',[StaticController::class,'about'])->name('home.about');
Route::get('/contact',[StaticController::class,'contact'])->name('home.contact');

Route::get('/login',[LoginRegisterController::class, 'index'])->name('auth.login');

Route::resource('computers', ComputersController::class);
Route::resource('mobiles', MobilesController::class);



/*
Route::get('/about', function () {
    return view('about');
});
*/

/*
Route::get('/store', function () {
    // return view('store');
    $filter = request('categories');

    if(isset($filter)){
        // ❌: beacuse we can write script in url, ex: http://localhost:8023/store?categories=%3Cscript%3Ealert(%27hi%27)%3C/script%3E
        // return 'this page is viewing <span style="color: red">'.$filter.'</span>';
        // ✅:
        return 'this page is viewing <span style="color: red">'.strip_tags($filter).'</span>'; 
    }

        return 'this page is viewing <span style="color: red">All</span>';
        

});
*/

/*
Route::get('/store/{categories?}/{item?}', function ($categories = null, $item = null) {
    //http://localhost:8023/store/categories/item
    if(isset($categories)){
        // http://localhost:8023/store/mobiles/samsung
        if(isset($item)){
            return "<h1>{$item}</h1>";    
        }
        // http://localhost:8023/store/mobiles/
        return "<h1>{$categories}</h1>";
    }
    // http://localhost:8023/store
    return "<h1>Store</h1>";
});
*/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
