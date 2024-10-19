<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/post', function(){
    return view('post');
});

Route::get('/post/firstpost', function () {
    return view('firstpost');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/services', function(){
    return view('services');
});

/**
 * Setting up parameters in the route
 */

 Route::get('/post/{id?}', function( $id = null ) {
    if($id){
        return "Post ID : " . $id;
    }
    return "No products ID found";
 });