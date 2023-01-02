<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\AddBook;
use App\Http\Livewire\EditBook;
use App\Http\Livewire\BookShow;

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
    return view('livewire.pages.home');
})->name('home');

Route::get('/add-book', AddBook::class)->name('add-book');
Route::get('/edit-book/{book_id}', EditBook::class)->name('edit-book');
Route::get('/book-show', BookShow::class)->name('book-show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
