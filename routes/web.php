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
    $dato = 'secondo metodo';
    $image = 'https://picsum.photos/200/300';
    return view('home', compact('dato', 'image'));
});

Route::get('/header', function () {
    $data = [
        'content' => 'Benvenuto in Laravel',
        'name' => 'Primi passi',
        'surname' => 'lorem ipsum dolor sit amet consectetur omiesquat',
    ];
    return view('header', $data);
});