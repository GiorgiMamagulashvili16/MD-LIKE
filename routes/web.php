<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Models\Food;

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
    return view('welcome');
});

Route::get('/all', [FoodController::class, 'showFoods'])->name("list");
Route::get("/all/{category}", [FoodController::class, 'showCategoryItems'])->name(("food.list.category"));
Route::get("/admin", [FoodController::class, 'adminPanel'])->name("admin");
Route::get('/admin/add', [FoodController::class, 'addFoodPage'])->name("admin.add");
Route::post("/admin/add", [FoodController::class, 'addFood']);

Route::get('/admin/edit/{id}', [FoodController::class, 'editFoodPage'])->name("admin.edit");
Route::post("/admin/edit/{id}", [FoodController::class, 'editFood']);

Route::get("/admin/delete/{id}", [FoodController::class, 'deleteFood'])->name("admin.delete");