
<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/routing');

Route::get('/routing', function() {
    return view('routing');
});

Route::get('/basic_routing', function() {
    return 'Hello World';
});

Route::view('/view_route', 'view_route', ['name' => 'Rachel']);

Route::get('/controller_route', [RouteController::class, 'index']);


Route::get('/user/{id}', function($id) {
    return "User Id: ".$id;
});

Route::get('/posts/{post}/comments/{comment}', function($post, $comment) {
    return "Post Id: ".$post.", Comment Id: ".$comment;
});


Route::get('/username/{name?}', function($name = null) {
    return 'Username: '.$name;
});


Route::get('/title/{title}', function($title) {
    return "Title: ".$title;
})->where('title', '[A-Za-z]+');

Route::get('/profile/{profileId}', [RouteController::class, 'profile'])->name('profileRouteName');

//Route::get('/route_priority/{rpId}', function($rpId) {
//    return "This is Route One";
//});

Route::get('/route_priority/user', function() {
    return "This is Route 1";
});

Route::get('/route_priority/user', function() {
    return "This is Route 2";
});

// Route Website Portofolio
Route::view('/portfolio', 'portfolio.index')->name('portfolio.home');

Route::view('/portfolio/about', 'portfolio.about')->name('portfolio.about');

Route::view('/portfolio/projects', 'portfolio.portfolio')->name('portfolio.projects');

Route::view('/portfolio/contact', 'portfolio.contact')->name('portfolio.contact');


Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/dashboard', function() {
        return "This is admin dashboard";
    })->name('dashboard');

    Route::get('/users', function() {
        return "This is user data on admin page";
    })->name('users');

    Route::get('/items', function() {
        return "This is item data on admin page";
    })->name('items');
});

Route::fallback(function() {
    return 'This is Fallback Route';
});