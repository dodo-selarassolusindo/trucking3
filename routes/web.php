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

// Route::get('/', function () {
//     return view('welcome');
// });

// home index
Route::get('/', App\Livewire\Home\Index::class)->name('home.index');

// posts index
Route::get('/posts', App\Livewire\Posts\Index::class)->name('posts.index');

// posts create
Route::get('/posts/create', App\Livewire\Posts\Create::class)->name('posts.create');

// posts edit
Route::get('/posts/edit/{id}', App\Livewire\Posts\Edit::class)->name('posts.edit');

// armadas index
Route::get('/armadas', App\Livewire\Armadas\Index::class)->name('armadas.index');

// armadas create
Route::get('/armadas/create', App\Livewire\Armadas\Create::class)->name('armadas.create');

// armadas edit
Route::get('/armadas/edit/{id}', App\Livewire\Armadas\Edit::class)->name('armadas.edit');

// jperbaikans index
Route::get('/jperbaikans', App\Livewire\Jperbaikans\Index::class)->name('jperbaikans.index');
