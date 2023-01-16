<?php

// use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\dashboardController;



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
    return view('home', [
        "dt" => "home"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "dt" => "home"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "dt" => "about"
    ]);
});

Route::get('/article', function () {
    return view('article', [
        "dt" => "article"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "dt" => "contact"
    ]);
});

Route::get('/menu/{type}', function ($type) {
    return view('menu', [
        "dt" => "menu",
        "type" => $type
    ]);
});

Route::get('/register', [registerController::class, 'index'])->middleware('guest');
Route::post('/register', [registerController::class, 'store']);
Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);
Route::get('/dashboard', [dashboardController::class, 'index'])->middleware('auth');
Route::resource('dashboard/admin', adminController::class)->middleware('admin');
Route::get('export/', [registerController::class, 'export'])->middleware('admin');
Route::post('import', [registerController::class, 'import'])->middleware('admin');
Route::post('importUpdate', [registerController::class, 'importUpdate'])->middleware('admin');
Route::delete('destroy/{id}', [registerController::class, 'destroy'])->name('destroy')->middleware('admin');

Route::put('dashboard/admin/verify/{id}', [adminController::class, 'verifyPayment'])->name('dashboard/admin/verify')->middleware('admin');
Route::put('dashboard/admin/unverify/{id}', [adminController::class, 'unverify'])->name('dashboard/admin/unverify')->middleware('admin');

Route::get('dashboard/{menu}', function ($menu) {
    // $user = Auth::user();
    $userr = Auth::user();
    $users = User::get();
    return view('adminNew/' . $menu, [
        'userr' => $userr,
        'users' => $users

    ]);
})->middleware('auth');
