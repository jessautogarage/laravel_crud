<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    echo "This is a Home Page!";
});

Route::get('/login', function() {
    echo 'This is login page.';
});

Route::get('/create', function(){
    echo 'This is create.';
});

Route::get('/read', function(){
    echo 'This is read.';
});

Route::get('/update', function(){
    echo 'This is update.';
});

Route::get('/delete', function(){
    echo 'This is delete.';
});