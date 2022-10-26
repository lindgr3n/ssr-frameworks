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

Route::get('/', function () {
    $file = '../../data.json';
    $data = file_get_contents($file);
    $obj = json_decode($data);
    sleep(1);
    return view('welcome', ['products' => $obj->products]);
});
