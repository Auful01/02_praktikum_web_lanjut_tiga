<?php

// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ArticlesController;
// use App\Http\Controllers\HomeController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use Symfony\Component\Routing\Route as RoutingRoute;

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

// Praktikum 1
// Route::get('/', function () {
//     echo "Selamat datang";
// });

// Route::get('/about', function () {
//     echo "1941720031 , Muhammad Auful Kirom";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman artikel dengan id ".$id;
// });

// Praktikum 2
// Route::get('/', [HomeController::class,'index']);

// Route::get('/about', [AboutController::class,'about']);

// Route::get('/articles/{id}', [ArticlesController::class,'articles']);

// Praktikum 3

Route::get('/', function () {
    echo "Selamat datang";
});

Route::prefix('game')->group(function(){
    Route::get('/list', [ProductController::class,'product']);
});


Route::get('news/{news}', [NewsController::class,'news']);
Route::get('topic/{topic}', [NewsController::class,'topic']);

Route::prefix('program')->group(function(){
    Route::get('/list-program',[ProgramController::class,'program'] );
});

Route::get('/about-us', function () {
    return redirect('https://www.educastudio.com/about-us');
});

Route::resource('contact', ContactUsController::class);
