<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectImageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
use App\Models\ProjectImage;

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
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('service', ServiceController::class);
    Route::get('/service/{service}/change-status', [ServiceController::class, 'changeStatus'])->name('service.change.status');
    Route::resource('product', ProductController::class);
    Route::get('/product/{product}/change-status', [ProductController::class, 'changeStatus'])->name('product.change.status');
    Route::resource('employee', EmployeeController::class);
    Route::get('/employee/{employee}/change-status', [EmployeeController::class, 'changeStatus'])->name('employee.change.status');
    Route::resource('client', ClientController::class);
    Route::resource('project', ProjectController::class);
    Route::get('/project/{project}/change-status', [ProjectController::class, 'changeStatus'])->name('project.change.status');
    Route::get('/project-img/{image}/destroy', [ProjectImageController::class, 'destroy'])->name('project.image.destroy');
    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::post('/about', [AboutController::class, 'store'])->name('about.store');
    Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
    Route::post('/setting', [SettingController::class, 'store'])->name('setting.store');
});
