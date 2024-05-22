<?php

use App\Http\Controllers\ClientUpdateTaskController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('dashboard', function () {
    return view('sidbar-pages.dashboard.dashboard');
})->name('index');
Route::get('addtasks', [ClientUpdateTaskController::class, 'addTask'])->name('addtasks');
Route::post('status', [ClientUpdateTaskController::class, 'status'])->name('status');
Route::get('/dashboard-2', [ClientUpdateTaskController::class, 'showTasks'])->name('dashboard');
// Route::get('addupdates',[ClientUpdateTaskController::class,'addUpdates'])->name('addupdates');
Route::get('/load-more', [ClientUpdateTaskController::class, 'loadMore'])->name('loadMore');

Route::get('genral-element', function () {
    return view('sidbar-pages.element.genral-element');
})->name('genral-element');
Route::get('icons', function () {
    return view('sidbar-pages.element.icons');
})->name('icons');
Route::get('invoice', function () {
    return view('sidbar-pages.element.invoice');
})->name('invoice');
Route::get('media-gallery', function () {
    return view('sidbar-pages.element.media-gallery');
})->name('media-gallery');
Route::get('widgets', function () {
    return view('sidbar-pages.widgets');
})->name('widgets');
Route::get('tables', function () {
    return view('sidbar-pages.tables');
})->name('tables');
Route::get('email', function () {
    return view('sidbar-pages.apps.email');
})->name('email');
Route::get('calender', function () {
    return view('sidbar-pages.apps.calender');
})->name('calender');
Route::get('media-gallery', function () {
    return view('sidbar-pages.apps.media-gallery');
})->name('media-gallery');
Route::get('pricing-table', function () {
    return view('sidbar-pages.pricing-table');
})->name('pricing-table');
Route::get('contact', function () {
    return view('sidbar-pages.contact');
})->name('contact');
Route::get('profile', function () {
    return view('sidbar-pages.additional-pages.profile');
})->name('profile');
Route::get('/', function () {
    return view('sidbar-pages.additional-pages.login');
})->name('login');
Route::get('register', function () {
    return view('sidbar-pages.additional-pages.register');
})->name('register');
Route::post('register', [LoginController::class, 'register'])->name('signup');
Route::post('login', [LoginController::class, 'login'])->name('log');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::post('forgotpassword', [LoginController::class, 'forgotpassword'])->name('forgotpassword');
Route::get('forgotpasswordpage', [LoginController::class, 'forgotpasswordpage'])->name('forgotpasswordpage');
Route::get('projects', function () {
    return view('sidbar-pages.additional-pages.projects');
})->name('projects');
Route::get('404-error', function () {
    return view('sidbar-pages.additional-pages.404-error');
})->name('404_error');
Route::get('map', function () {
    return view('sidbar-pages.map');
})->name('map');
Route::get('setting', function () {
    return view('sidbar-pages.setting');
})->name('setting');
Route::get('charts', function () {
    return view('sidbar-pages.charts');
})->name('charts');
// Route::get('/logout', [LoginController::class,'logout'])->name('logout');

// Route::get('dashboard-2', [DynamicController::class, 'index2'])->name('dashboard');

// Route::get('pluto-admin-panel/{page}', [DynamicController::class, 'dynamic'])->name('dashboard');
Route::post('imageUpload', [LoginController::class, 'imageUpload'])->name('imageUpload');
Route::get('imagedisplay', [LoginController::class, 'imageDisplay'])->name('imagedisplay');
Route::delete('imagedelete/{id}', [LoginController::class, 'destroy'])->name('imagedelete');
Route::get('editimage/{id}', [LoginController::class,'editImage'])->name('editupdate');
Route::put('imageupdate/{id}', [LoginController::class, 'updateImage'])->name('updateImage');

