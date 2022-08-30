<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\postscontroller;

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
Route::get('/',[PagesController::class,'index']);
Route::get('/about',[PagesController::class,'about']);
Route::get('/posts',[postscontroller::class,'index']);


//Route::get('/products',
//[ProductsController::class,'index'])->name('products');

//Route::get('products/about',[ProductsController::class,'about']);

//route a parameter to display string
//Route::get('/products/{name}',
//[ProductsController::class,'show'])->where('name','[a-zA-Z]+');

/*/ROUTING MULTIPLE PARAM
Route::get('/products/{name}/{id}',
[ProductsController::class,'show'])->where([
'name'=>'[a-z]+', 
'id'=>'[0-9]+'
]);*/

//restrict data to only numbers 0-9
//Route::get('/products{id}',
//[ProductsController::class,'show'])->where('id', '[0-9]');

/*a New way also in laravel 8*/
//Route::get('/products',[\App\Http\Controllers\ProductsController::class,'index']);

//Routes that sends back a view
/*//Routes to users - display strings
Route::get('/users', function(){
    return ('Welcome to the users page');
});

//Routes to users - Display Array(Json)
Route::get('/users',function(){

    return ['PHP', 'JAVA', 'HTML', 'CSS'];
});   
//Routes to users - JSON
Route::get('/users', function(){
    
    return response()->json([
        
        'NAME'=>'Oku', 
        'Course'=>'Web beginner'
    ]);
});

//Routes to users - function
Route::get('/users', function(){

    return redirect('/');
});
*/