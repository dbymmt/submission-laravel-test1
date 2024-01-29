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
// 　モーダルの削除ボタン
// 　ログイン機能
// 　　のview×2
// フォーム系
// 　view×3
// 　フォームリクエスト
// 　Contactsテーブルへの追加機能

Route::get('/admin', [AdminController::class, 'AdminIndex']);
Route::post('/admin', [AdminController::class, 'AdminIndex']);
Route::get('/admin/contact/{index}', [AdminController::class, 'RetJSON']);

// Route::get('/', function(){
//     return view('admin');
// });

// Route::get('/', function () {
//     return view('welcome');
// });
