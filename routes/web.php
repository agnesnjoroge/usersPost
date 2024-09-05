<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;


//Route::get('/', function () {
   // return view('welcome');
//});
Route::get('/', function () {
    $posts = [];
    if(auth()->check()){
      $posts = auth()->user()->coolP()->latest()->get();
    }
    
     return view('index',['posts' => $posts]);
  
});
Route::get('/register', function () {
    return view('register');
});
Route::post('/create',[UserController::class, 'create']
);
Route::post('/logout',[UserController::class, 'logout']
);
Route::get('/loginPage', function () {
    return view('loginPage');
});

Route::post('/login',[UserController::class, 'login']
);
Route::get('/users',[UserController::class, 'showUsers']
);

//posts
Route::post('/create',[PostController::class, 'create']
);
Route::get('/allPosts',[PostController::class, 'allPosts']
);
Route::get('/edit/{post}',[PostController::class, 'edit']);
Route::put('/update/{post}',[PostController::class, 'update']
);
Route::delete('/delete/{post}',[PostController::class, 'delete']
);



