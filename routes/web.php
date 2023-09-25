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

// posts
// index
Route::get('/posts', App\Livewire\Posts\Index::class)->name('posts.index');
Route::get('/posts/create', App\Livewire\Posts\Create::class)->name('posts.create');
Route::get('/posts/edit/{id}', App\Livewire\Posts\Edit::class)->name('posts.edit');

// armadas
// index
Route::get('/armadas', App\Livewire\Armadas\Index::class)->name('armadas.index');
Route::get('/armadas/create', App\Livewire\Armadas\Create::class)->name('armadas.create');
Route::get('/armadas/edit/{id}', App\Livewire\Armadas\Edit::class)->name('armadas.edit');

// jperbaikans
// index
Route::get('/jperbaikans', App\Livewire\Jperbaikans\Index::class)->name('jperbaikans.index');
Route::get('/jperbaikans/create', App\Livewire\Jperbaikans\Create::class)->name('jperbaikans.create');
Route::get('/jperbaikans/edit/{id}', App\Livewire\Jperbaikans\Edit::class)->name('jperbaikans.edit');

// tperbaikans
// index
// Route::get('/tperbaikans', App\Livewire\Tperbaikans\Index::class)->name('tperbaikans.index');
// Route::get('/tperbaikans/create', App\Livewire\Tperbaikans\Create::class)->name('tperbaikans.create');
// Route::get('/tperbaikans/edit/{id}', App\Livewire\Tperbaikans\Edit::class)->name('tperbaikans.edit');
Route::resource('tperbaikan', App\Http\Controllers\TperbaikanController::class);
