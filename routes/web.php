<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\pageController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

Route::controller(pageController::class)->group(function(){

    Route::get('cursos','index')->name('cursos.index');
    Route::get('cursos/create','create')->name('cursos.create');
    Route::post('cursos','store')->name('cursos.store');
   
    Route::get('cursos/edit/{id}','edit')->name('cursos.edit');
    Route::get('cursos/{curso}','show')->name('cursos.show');
    Route::post('cursos/edit/{curso}','store1')->name('cursos.store1');
    Route::get('cursos/destroy/{id}','destroy')->name('cursos.destroy');
    Route::post('cursos/destroy/{curso}','store2')->name('cursos.store2');

});





/*Route::get('cursos/{curso}/{profesor?}',function($curso, $profesor = null){
    if($profesor != null){
        return("el curso de $curso se ve con $profesor");
    }else{
        return("el curso de $curso");
    }
    
});*/