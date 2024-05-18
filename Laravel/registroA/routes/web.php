<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('inicio', function () {
    return view('inicio_vista');
})->name('inicio_ruta');
*/
Route::get('inicio', 'App\Http\Controllers\PageController@inicio')->name('inicio_ruta');

Route::get('carrera', 'App\Http\Controllers\PageController@carrera')->name('carrera_ruta');

Route::get('carrerabyid/{id}', 'App\Http\Controllers\PageController@carreraById')->name('carrerabyid_ruta');

Route::post('guardar', 'App\Http\Controllers\PageController@guardar')->name('guardar_carrera_ruta');

Route::put('editar', 'App\Http\Controllers\PageController@editar')->name('editar_carrera_ruta');

Route::delete('borrar/{id}', 'App\Http\Controllers\PageController@borrar')->name('borrar_carrera_ruta');

Route::get('trails', 'App\Http\Controllers\PageController@trails')->name('trail_ruta');





/*Route::get('carrera', function () {
    return view('carrera_vista');
})->name('carrera_ruta');*/
