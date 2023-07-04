<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::prefix('todo')->group(function(){
    Route::get('/', function () {

        $todos = [
            [
                'id' => 1,
                'name' => 'Làm bài tập Laravel',
                'status' => false,
            ],
            [
                'id' => 2,
                'name' => 'Làm bài tập PHP',
                'status' => false,
            ],
            [
                'id' => 3,
                'name' => 'Làm project Laravel',
                'status' => true,
            ],
        ];

        return view('todo.index', ['todos' => $todos]);
    })->name('todo.index');

    Route::post('/', function () {
        dd('store');
    })->name('todo.store');

    Route::get('/{id}', function ($id) {
        dd('show ' . $id);
    })->name('todo.show');

    Route::put('/{id}', function ($id) {
        dd('update ' . $id);
    })->name('todo.update');

    Route::delete('/{id}', function ($id) {
        dd('delete ' . $id);
    })->name('todo.delete');
});
