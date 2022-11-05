<?php

use App\Models\Trademark;
use App\Models\TrademarkCategories;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $trademarks = Trademark::orderBy('id','DESC')->paginate(5);
    return view('dashboard', [
        'trademarks' => $trademarks
    ]);
})->middleware(['auth'])->name('dashboard');


Route::get('/view', function () {
    $trademarks = Trademark::where('owner_id', Auth::id())->paginate(10);

    return view('viewTrademark', [
        'trademarks' => $trademarks
    ]);
})->middleware(['auth'])->name('view-trademark');


Route::get('/register-trademark', function () {
    $categories = TrademarkCategories::all();
    return view('registerTrademark', [
        'categories' => $categories
    ]);
})->middleware(['auth'])->name('register-trademark');

Route::post('/register-trademark', [\App\Http\Controllers\TrademarksController::class, 'store'])->middleware(['auth'])->name('store-trademark');

require __DIR__.'/auth.php';
