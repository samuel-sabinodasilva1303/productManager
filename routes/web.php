<?php
namespace App\Http\Controllers;

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/obrigado', function(){
    return "Obrigado por entrar nessa página";
});

Route::get('/produto', 'ProductController@firstProduct');

Route::fallback(function(){
    return "Essa página não existe";
});
