<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;

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

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('set.locale');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/services/{service}/details', [HomeController::class, 'serviceDetails'])->name('service.details');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/projects/{project}/details', [HomeController::class, 'projectDetails'])->name('project.details');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/products', [HomeController::class, 'products'])->name('products');


Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    // Route::get('/services', [ServiceController::class, 'index'])->name('dashboard');
    Route::resource('service', ServiceController::class);
    Route::get('/service/{service}/change-status', [ServiceController::class, 'changeStatus'])->name('service.change.status');
});
