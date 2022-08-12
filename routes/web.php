<?php

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
