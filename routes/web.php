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

Route::get('/donna', function () {
    $products = [
        [ 
        'name' => 'nome prodotto',
        'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
        'image' => 'https://picsum.photos/200/300',
        'prezzo' => '35.00',],
        [ 
            'name' => 'nome prodotto',
            'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
            'image' => 'https://picsum.photos/200/300',
            'prezzo' => '35.00',],
            [ 
                'name' => 'nome prodotto',
                'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
                'image' => 'https://picsum.photos/200/300',
                'prezzo' => '35.00',],
                [ 
                    'name' => 'nome prodotto',
                    'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
                    'image' => 'https://picsum.photos/200/300',
                    'prezzo' => '35.00',],
                    [ 
                        'name' => 'nome prodotto',
                        'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
                        'image' => 'https://picsum.photos/200/300',
                        'prezzo' => '35.00',],
                        [ 
                            'name' => 'nome prodotto',
                            'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
                            'image' => 'https://picsum.photos/200/300',
                            'prezzo' => '35.00',],
                            [ 
                                'name' => 'nome prodotto',
                                'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
                                'image' => 'https://picsum.photos/200/300',
                                'prezzo' => '35.00',],
                                [ 
                                    'name' => 'nome prodotto',
                                    'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
                                    'image' => 'https://picsum.photos/200/300',
                                    'prezzo' => '35.00',],
    ];
    return view('donna', ['products' => $products]);
});

Route::get('/uomo', function () {
    $products = [
        [ 
        'name' => 'nome prodotto',
        'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
        'image' => 'https://picsum.photos/200/300',
        'prezzo' => '35.00',],
        [ 
            'name' => 'nome prodotto',
            'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
            'image' => 'https://picsum.photos/200/300',
            'prezzo' => '35.00',],
            [ 
                'name' => 'nome prodotto',
                'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
                'image' => 'https://picsum.photos/200/300',
                'prezzo' => '35.00',],
                [ 
                    'name' => 'nome prodotto',
                    'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
                    'image' => 'https://picsum.photos/200/300',
                    'prezzo' => '35.00',],
                    [ 
                        'name' => 'nome prodotto',
                        'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
                        'image' => 'https://picsum.photos/200/300',
                        'prezzo' => '35.00',],
                        [ 
                            'name' => 'nome prodotto',
                            'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
                            'image' => 'https://picsum.photos/200/300',
                            'prezzo' => '35.00',],
                            [ 
                                'name' => 'nome prodotto',
                                'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
                                'image' => 'https://picsum.photos/200/300',
                                'prezzo' => '35.00',],
                                [ 
                                    'name' => 'nome prodotto',
                                    'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
                                    'image' => 'https://picsum.photos/200/300',
                                    'prezzo' => '35.00',],
    ];
    return view('uomo', ['products' => $products]);
});
Route::get('/bambino', function () {
    $products = [
        [ 
        'name' => 'nome prodotto',
        'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
        'image' => 'https://picsum.photos/200/300',
        'prezzo' => '35.00',],
        [ 
            'name' => 'nome prodotto',
            'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
            'image' => 'https://picsum.photos/200/300',
            'prezzo' => '35.00',],
            [ 
                'name' => 'nome prodotto',
                'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
                'image' => 'https://picsum.photos/200/300',
                'prezzo' => '35.00',],
                [ 
                    'name' => 'nome prodotto',
                    'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
                    'image' => 'https://picsum.photos/200/300',
                    'prezzo' => '35.00',],
                    [ 
                        'name' => 'nome prodotto',
                        'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
                        'image' => 'https://picsum.photos/200/300',
                        'prezzo' => '35.00',],
                        [ 
                            'name' => 'nome prodotto',
                            'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
                            'image' => 'https://picsum.photos/200/300',
                            'prezzo' => '35.00',],
                            [ 
                                'name' => 'nome prodotto',
                                'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
                                'image' => 'https://picsum.photos/200/300',
                                'prezzo' => '35.00',],
                                [ 
                                    'name' => 'nome prodotto',
                                    'content' => 'Descrizione lorem ipsum dolor sit amet consectetur omiesquat',
                                    'image' => 'https://picsum.photos/200/300',
                                    'prezzo' => '35.00',],
    ];
    return view('bambino', ['products' => $products]);
});
