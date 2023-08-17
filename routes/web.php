<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\detailscontroller;

// Route::get('/{name?}', function($name = null ){
//     $data=compact('name');
//     return view('home')->with($data);
// });

Route::get('/about',function(){
    return view('About');//displaying page using view only.view>routesS
});

// Route::get('/',function(){
//     return view('home');
// });

Route::get('/',[DemoController::class,'demo']);

Route::get('/details',[detailscontroller::class,'test']);//displying page with help of controller. "view>controller>routes"
Route::get('/tester',[detailscontroller::class,'tester']);