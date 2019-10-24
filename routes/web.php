<?php

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
/*Route::get('/', function () {
	$tasks = DB::table('tasks')->get();
    return view('tasks.index', compact('tasks'));
});
*/

Route::get('/', 'IndexController@index');

Route::get('/article/{id}', 'IndexController@show')->name('articleShow');





//Route::view('/tasks', 'tasks.index');

//Route::get('/helloworld', function() {
//echo '123321';
//});
/*
Route::get('/tasks/{task}', function ($id) {
	$task = DB::table('tasks')->find($id);
	return view('tasks.show', compact('task'));
});
*/
