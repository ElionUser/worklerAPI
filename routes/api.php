<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::post('/logIn','AuthController@auth');

Route::post('/register','AuthController@register');

Route::middleware('auth:sanctum')->group( function () {

    Route::post('/logOut/{user}','AuthController@logOut');

    Route::get('/userInfo','AuthController@userInfo');

    /* POSTS */

    Route::get('/Posts/Publicaciones','PostController@read');

    Route::post('/Posts/Crear','PostController@store');

    Route::post('/Posts/Actualizar/{post}','PostController@update');

    Route::post('/Posts/Borrar/{post}','PostController@delete');

    Route::get('/Posts/{post}','PostController@profilePost');
});


Route::get('/Usuarios/{user}','UserController@index');

Route::get('/Posts','PostController@wallPost');

Route::post('/morph/{user}','PostController@postMorph');