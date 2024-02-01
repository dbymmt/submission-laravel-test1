<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

// TODO
// admin系

// フォーム系
// 　view×3
//   電話番号の成型その他のためにmiddlewareをかます必要があるな・・・
// 　フォームリクエスト
// 　Contactsテーブルへの追加機能

// 仮


Route::get('/', function(){
    return view('index');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'AdminIndex']);
    Route::get('/admin/contact/{index}', [AdminController::class, 'RetJSON']);
    Route::delete('/admin/contact/{index}', [AdminController::class, 'Destroy']);
});

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Route::get('/admin', [AdminController::class, 'AdminIndex']);
// Route::get('/admin/contact/{index}', [AdminController::class, 'RetJSON']);
// Route::delete('/admin/contact/{index}', [AdminController::class, 'Destroy']);

// Route::get('/', function(){
//     return view('admin');
// });

// Route::get('/', function () {
//     return view('welcome');
// });
