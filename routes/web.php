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

Route::get('/', function(){
    $objects = config('comics.objects');
    return view('comics.index', compact('objects'));
})->name('homepage');

Route::get('/comics/{comic}', function($id){
    $objects = config('comics.objects');
    $comic = $objects[$id];
    return view('comics.show', compact('comic'));  
})->name('comic');

