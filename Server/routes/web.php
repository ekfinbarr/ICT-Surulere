<?php

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');
Route::get('/', function () {
    return view('home');
})->name('welcome');
// Route::get('login', function () {
//     return view('auth.login');
// })->name('login');


Route::group(['prefix' => 'admin/auth/', 'middleware' => ['guest']], function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
});

Route::group(['prefix' => 'admin/', 'middleware' => ['guest']], function () {

    // Contents routes
    Route::get('/content', function () {
        return view('pages.content.index');
    })->name('content');

    Route::get('/content/add', function () {
        return view('pages.content.create');
    })->name('add-content');

    Route::get('/content/create', function () {
        return view('pages.content.create');
    })->name('add-content');
    Route::post('/content/newContent', 'ContentController@createContent')->name('content-upload');

    Route::get('/content/{id}/edit', 'ContentController@edit')->name('edit-content');


    // CONTENT CATEGORIES
     Route::get('/content-category', function () {
        return view('pages.content-category.index');
    })->name('content-category');

    Route::get('/content-category/add', function () {
        return view('pages.content-category.create');
    })->name('add-content-category');

    Route::get('/content-category/create', function () {
        return view('pages.content-category.create');
    })->name('add-category');

    Route::get('/content-category/{id}/edit', function () {
        return view('pages.content-category.edit');
    })->name('edit-category');



    Route::get('/profile', function () {
        return view('pages.profile.index');
    })->name('profile');

    Route::get('/profile/{id}/', function () {
        return view('pages.profile.index');
    })->name('view-profile');

    Route::get('/profile/{id}/edit', function () {
        return view('pages.profile.edit');
    })->name('edit-profile');
});
