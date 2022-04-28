<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;


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

Route::get('/', function () {
    return view('welcome')->with (['name'=>'salam','age'=>'22',]);
});

Route::get('/test/{id?}',function($id=null){
    return 'salam ';
});

Route::resource('news',NewsController::class);

Route::get('tests1',[NewsController::class,'testView']);

// Route::get('/testobject',[Newscontroller::class,'getObject']);

Route::get('/e',[Newscontroller::class,'getEbusnice']);

Route::get('blog.html',[NewsController::class,'getBlog']);

Auth::routes(['verify'=>true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
