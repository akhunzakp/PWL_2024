<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;

//----Basic Routing----//
// Route::get('/hello', function () { 
//     return 'Hello World'; 
// });

// Route::get('/world', function () { 
//     return 'World'; 
// }); 

// Route::get('/world', function () { 
//     return 'Selamat Datang'; 
// }); 

// Route::get('/about', function () { 
//     return '2341720259 Yuma Akhunza Kausar Putra'; 
// }); 

//----Route Parameters----//
// Route::get('/user/{name}', function ($name) { 
//     return 'Nama saya '.$name; 
//}); 

// Route::get('/posts/{post}/comments/{comment}', function 
// ($postId, $commentId) { 
//      return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
// });

// Route::get('/articles/{id}', function ($articlesId) { 
//      return 'Halaman Artikel Ke- ' .$articlesId; 
// });

// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama saya '.$name;
// });

//----Route Name----//
// Route::get('/user/profile', function () {
//    //
// })->name('profile');

//----Membuat Controller----//
// Route::get('/hello',[WelcomeController::class,'hello']);
// Route::resource('photos', PhotoController::class);
// Route::resource('photos', PhotoController::class)->only([ 
//     'index', 'show' 
//     ]);
// Route::resource('photos', PhotoController::class)->except([ 
//     'create', 'store', 'update', 'destroy' 
//     ]); 

//----View----//
// Route::get('/greeting', function () { 
//     return view('blog.hello', ['name' => 'Putra']); 
//     }); 

Route::get('/greeting', [WelcomeController::class, 
'greeting']); 