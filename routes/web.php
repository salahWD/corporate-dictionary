<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Neighborhood;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::view('/', "home");
Route::view('/search', "search");

Route::prefix("/dashboard")->middleware(['admin'])->group(function () {
  Route::get('/', [DashboardController::class, "index"])->name('dashboard');
  Route::get('/users', [UserController::class, "index"])->name('users_manage');
  Route::get('/users/create', [UserController::class, "create"])->name('user_create');
  Route::get('/users/{user}', [UserController::class, "edit"])->name('user_edit');
  Route::POST('/users/create', [UserController::class, "store"]);
  Route::POST('/users/{user}', [UserController::class, "update"]);
  Route::DELETE('/users/{user}', [UserController::class, "destroy"]);
  Route::get('/companies', [CompanyController::class, "index"])->name('companies_manage');
  Route::get('/companies/create', [CompanyController::class, "create"])->name('company_create');
  Route::get('/companies/{company}', [CompanyController::class, "edit"])->name('company_edit');
  Route::POST('/companies/create', [CompanyController::class, "store"]);
  Route::POST('/companies/{company}', [CompanyController::class, "update"]);
  Route::DELETE('/companies/{company}', [CompanyController::class, "destroy"]);
  Route::get('/fields', [FieldController::class, "index"])->name('fields_manage');
  Route::get('/fields/create', [FieldController::class, "create"])->name('field_create');
  Route::get('/fields/{field}', [FieldController::class, "edit"])->name('field_edit');
  Route::POST('/fields/create', [FieldController::class, "store"]);
  Route::POST('/fields/{field}', [FieldController::class, "update"]);
  Route::DELETE('/fields/{field}', [FieldController::class, "destroy"]);
});

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/app-request/address', function (Request $request) {
  $request->validate([
    "search" => "required|string",
  ]);
  $search = request("search");
  return Neighborhood::where("title", "LIKE", "%$search%")->limit(8)->get();
})->name('profile.edit');

require __DIR__ . '/auth.php';
