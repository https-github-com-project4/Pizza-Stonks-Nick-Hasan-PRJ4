<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;
use \App\Http\Controllers\IngredientPizzaController;
use \App\Http\Controllers\OrderPizzaController;
use \App\Http\Controllers\OrderController;
use \App\Http\Controllers\PizzaController;


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

<<<<<<< HEAD


=======
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/menu', [IngredientPizzaController::class, 'index'])->Name('pizza');
Route::get('/menu', [IngredientPizzaController::class, 'index'])->Name('ingredients');
>>>>>>> 6c5386b8e178b2392d3d0a1dce162e667c2e8c37

Route::group(['middleware'=>'auth'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/admin/resetpassword/{id}', [AdminController::class, 'resetpassword'])->name('admin.resetpassword');
    Route::put('/admin/updatepassword/{id}', [AdminController::class, 'updatepassword'])->name('admin.updatepassword');

    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);
    Route::resource('employee', EmployeeController::class);
    Route::resource('customer', CustomerController::class);
});
require __DIR__.'/auth.php';

Route::get('/pizzas', [PizzaController::class, 'index'])->Name('pizzas');

Route::get('/pizza/{id}/bewerken', [IngredientPizzaController::class, 'edit'])->Name ('ingredient-wijzig.edit');
Route::put('/pizza/{id}', [IngredientPizzaController::class, 'update'])->Name ('ingredient-wijzig.update');

Route::get('/', [OrderController::class, 'index'])->Name('order.index');
Route::post('/order',[OrderController::class ,'store'])->Name('order.store');

Route::get('order/{id}/pizzas',[OrderPizzaController::class,''])->name('order.pizzas');

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});


