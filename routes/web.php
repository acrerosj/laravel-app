<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
})->name('home');

Route::get('/hi', function() {
    return "hola mundo";
})->name('hello');

// Route::get('/mundo', function() {
//     return view('hola');
// });
//Route::view('/world', 'hola', ['name'=>'Pepe'])->name('world');

// Route::get('/user/{id}/{name}', function($id, $name) {
//     return 'Usuario: ' . $id . ' - ' . $name;
// })->where('id', '[0-9]+')
// ->where('name', '[a-zA-Z]+');

Route::get('/user/{id}/{name}', function($id, $name) {
    return 'Usuario: ' . $id . ' - ' . $name;
})->whereNumber('id')
->whereAlpha('name');

Route::get('/user/{name?}', function($name = 'desconocido'){
    return view('hola', ['name'=> $name]);
});

//Route::get('/module', [ModuleController::class,'index']);
Route::resource('/module', ModuleController::class);

Route::get('/module/{modulo}', function($modulo) {
    return view(strtolower($modulo));
})->whereIn('modulo', ['DSW', 'DEW', 'DOR', 'DPL', 'EMR'])->name('module');

Route::resource('/product', ProductController::class);
