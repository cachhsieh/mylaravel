<?php

use App\Task;
use Illuminate\Http\Request;

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

//* 顯示所有任務 *//
Route::get('/', function () {
//    return view('welcome');
    return view('tasks');
});

//* * * 接收表單來新增任務 * * *//
Route::post('/task', function (Request $request) {

    //驗証 tasks.blade.php 傳來資料    
    $validator = Validator::make($request->all(), ["name" => "required|max:255"]
    );

    if ($validator->fails()) {
        return redirect("/")
                        ->withInput()
                        ->withErrors($validator);
    }

    //接收資料並寫入儲存資料庫
    $task = new Task;
    $task->name = $request->name;
    $task->save(); //儲存寫入資料庫
});

/* * * 刪除任務 * * */
Route::delete('/task/{task}', function ($id) {
    //
});
