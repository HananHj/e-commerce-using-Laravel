<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Shopping;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;




Route::get('/' ,function(){
    return view('welcome');
}
);

route::group([
    'prefix'=>'/dashboard',
] ,function(){

Route::get('/',[Dashboard::class,'Index']) -> name('index'); 
Route::get('/products',[Dashboard::class,'readProducts']) -> name('products');
Route::post('/addProduct',[Dashboard::class,'addProduct']) -> name('addProduct');
Route::get('/del/{id}',[Dashboard::class,'deleteProduct']) -> name('deleteProduct');
Route::get('/editProduct/{id}',[Dashboard::class,'editProduct']) -> name('editProduct');
Route::post('/update',[Dashboard::class,'update'])->name('update-prod'); 
Route::post('/search',[Dashboard::class,'search'])->name('search'); 
Route::get('/test',[Dashboard::class,'test']) -> name('test');
Route::get('/logout',[Dashboard::class,'logout']) -> name('logout'); 
Route::get('/productDetails',[Dashboard::class,'productDetails']) -> name('productDetails');  
Route::post('/addProductDetails',[Dashboard::class,'addProductDetails'])->name('addProductDetails'); 
});


route::group([
    'prefix'=>'/shopping',
],function(){
Route::get('/showListItemPhones',[Shopping::class,'showListItemPhones']) -> name('showListItemPhones');
Route::get('/showDetails/{id}',[Shopping::class,'showDetails']) -> name('showDetails');
Route::get('/addToCart/{id}',[Shopping::class,'addToCart']) -> name('addToCart');
Route::get('/getHotCoffee',[Shopping::class,'getHotCoffee']) -> name('getHotCoffee');
Route::get('getUsersApi',[Shopping::class,'getUsersApi']) -> name('getUsersApi');
Route::get('/getSportsApi',[Shopping::class,'getSportsApi']) -> name('getSportsApi');
Route::get('/cart',[Shopping::class,'cart']);


});

Route::get('language/{locale}',function($locale){
    App::setLocale($locale);
    session::put('locale',$locale);
    return redirect()->back();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



