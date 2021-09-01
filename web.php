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
//根路由
//
Route::get('/', function () {
     return view('welcome');
    // echo "hello world";
});

Route::group(['prefix' => 'admin'], function() {
     Route::get('news/create', 'Admin\NewsController@add');
     echo "hello";
 });

//「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください

Route::get('admin/news/create', function() {
     Route::get('news/create',  'Admin\NewsController@bbb');
});


// ４．【応用】 前章でAdmin/ProfileControllerを作成し、add Action, edit Actionを追加しました。web.phpを編集して、getメソッドでadmin/profile/create にアクセスしたら ProfileController の add Action に、admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てるように設定してください
// Route::get('admin/profile/create',function() {
//     Route::get('news/create',  'Admin\profileController@bbb');
// });
Route::get('admin/profile/create', 'Admin\profileController@create');

Route::get('admin/profile/edit',  'Admin\profileController@edit');
