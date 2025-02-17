<?php

use App\Http\Controllers\CrudBlogController;
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

Route::get("/", [CrudBlogController::class, 'index'])->name("home"); 
Route::get("/program", function () {
    return view('program');
})->name('showProgram');
Route::get('/blog/{id}', [CrudBlogController::class, 'show'])->name('blog.show');


