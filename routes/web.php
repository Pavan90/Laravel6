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

Route::get('/', function () {
    return ['foo' => 'bar'];
});

// Route::get('test', function(){
//     $name = request('name');
//     return  view('test', [
//         'name' => $name
//     ]);
// });


// Route::get('test/{random}', function($random){

//     $randomArray = [
//         'first' => 'first post goes here!!',
//         'second' => 'second post goes here!!!'
//     ];

//     if(! array_key_exists($random, $randomArray)) {
//         abort(404, 'Sorry, Post does not exist!');
//     }

//     return view('test', [
//         'random' => $randomArray[$random]
//     ]);
// });


Route::get('test/{random}', 'PostsController@show');
