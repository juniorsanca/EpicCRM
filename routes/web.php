<?php

use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommercialController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\DoController;
use App\Http\Controllers\TocallController;
use App\Http\Controllers\LostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

/*--------WELCOME---------*/

Route::get('/', function () { return view('pages.welcome');});

/*--------FEATURES---------*/

Route::get('/features', function () { return view('pages.features');});

/*--------PRICING---------*/

Route::get('/pricing', function () { return view('pages.pricing');});

/*--------ABOUT---------*/

Route::get('/about', function () { return view('pages.about');});






/*Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth'])->name('dashboard');*/


/*--------COMMERCIAL ROUTES---------*/

Route::group(['middleware' => 'auth', 'admin'], function() {
    //Route::get('/admin',  [AdminUsersController::class, 'index'])->name('admin.dashboard');

    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/dashboard',  [UsersController::class, 'index'])->name('pages.dashboard');



    Route::get('/dashboard',  [CommercialController::class, 'index'])->name('commercial.dashboard');
    Route::get('/dashboard/todo',  [TodoController::class, 'index'])->name('commercial.todo');
    Route::get('/dashboard/do',  [DoController::class, 'index'])->name('commercial.do');
    Route::get('/dashboard/tocall',  [TocallController::class, 'index'])->name('commercial.tocall');
    Route::get('/dashboard/lost',  [LostController::class, 'index'])->name('commercial.lost');

});



/*------------[ ADMIN ROUTES ]------------*/

        Route::get('/dashboard/users', [UsersController::class, 'index'])->middleware('auth')->name('admin.dashboard');



        Route::get('/dashboard/commercials', [UsersController::class, 'renderUserList'])->middleware('auth')->name('admin.dashboard');
        Route::get('/dashboard/leads', [UsersController::class, 'renderUserList'])->middleware('auth')->name('admin.dashboard');

        Route::get('/admin/user/{id}', [UsersController::class, 'renderUserDetails'])->middleware('auth')->name('admin.user');
        Route::get('/admin/user/settings/{id}', [UsersController::class, 'renderUserAdminEditForm'])->middleware('auth')->name('admin.users.edit');;
        Route::put('/admin/users/{id}', [UsersController::class, 'updateUser'])->middleware('auth')->name("admin.users.update");
        Route::delete('/admin/users/{id}', [UsersController::class, 'deleteUser'])->middleware('auth')->name("admin.users.delete");


require __DIR__.'/auth.php';
