<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware('splade')->group(function () {
    Route::spladeTable();

    Route::middleware('auth')->group(function () {
        Route::get('/', 
            [\App\Http\Controllers\DashboardController::class, 'index']
        )->name('dashboard');

        Route::group(['prefix' => 'projects'], function () {
            Route::get('/',
                [\App\Http\Controllers\ProjectController::class, 'index']
            )->name('projects.index');

            Route::get('/create', 
                [\App\Http\Controllers\ProjectController::class, 'create']
            )->name('projects.create');

            Route::post('/store', 
                [\App\Http\Controllers\ProjectController::class, 'store']
            )->name('projects.store');

            Route::get('/{project}/tasks/create', 
                [\App\Http\Controllers\ProjectController::class, 'create_task']
            )->name('projects.tasks.create');

            Route::post('/{project}/tasks/store', 
                [\App\Http\Controllers\ProjectController::class, 'store_task']
            )->name('projects.tasks.store');

            Route::delete('/{project}/tasks/{task}/destroy', 
                [\App\Http\Controllers\ProjectController::class, 'destroy_task']
            )->name('projects.tasks.destroy');

            Route::get('/{project}/tasks/{task}/edit', 
                [\App\Http\Controllers\ProjectController::class, 'edit_task']
            )->name('projects.tasks.edit');
        });

        Route::group(['prefix' => 'companies'], function () {
            Route::get('/', function () {
                return view('companies.index');
            })->name('companies.index');

            Route::get('/create',
            [\App\Http\Controllers\CompanyController::class, 'create']
            )->name('companies.create');

            Route::post('/store', [\App\Http\Controllers\CompanyController::class, 'store']
            )->name('companies.store');

            Route::post('/{company}/show', [\App\Http\Controllers\CompanyController::class, 'show']
            )->name('companies.show');
        });

        Route::group(['prefix' => 'customers'], function () {
            Route::get('/',
            [\App\Http\Controllers\CustomerController::class, 'index']
            )->name('customers.index');

            Route::get('/create', [\App\Http\Controllers\CustomerController::class, 'create'])->name('customers.create');

            Route::post('/store', [\App\Http\Controllers\CustomerController::class, 'store']
            )->name('customers.store');

            Route::get('/edit/{customer}', [\App\Http\Controllers\CustomerController::class, 'edit']
            )->name('customers.edit');

            Route::put('/update/{customer}', [\App\Http\Controllers\CustomerController::class, 'update'])->name('customers.update');

            Route::delete('/delete/{customer}', [\App\Http\Controllers\CustomerController::class, 'destroy']
            )->name('customers.destroy');
        });
    });

    require __DIR__.'/auth.php';
});
