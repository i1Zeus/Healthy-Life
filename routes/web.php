<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\AddBook;
use App\Http\Livewire\EditBook;
use App\Http\Livewire\BookShow;
use App\Http\Livewire\HealthForm;
use App\Http\Livewire\Pages\Healthy;
use App\Http\Livewire\Pages\Diet;
use App\Http\Livewire\Pages\Sport;


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
Route::get('/healthy-meals', HealthForm::class)->name('healthy-meals');
Route::get('/healthy', Healthy::class)->name('healthy');
Route::get('/diet', Diet::class)->name('diet');
Route::get('/sportMachines', Sport::class)->name('sport');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
