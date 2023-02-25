<?php

use Illuminate\Support\Facades\Route;
use App\Models\Good;

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

Route::get('/goods', function () {
    return view('goods');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/trials', function () {
    return view('trials', [
        'Heading' => 'Trials do not kill',
        'Trials' => Good::all()
    ]);
});
Route::get('/trial/{id}', function ($id) {
    return view('trial', [
        'Heading' => 'A Trial does not kill',
        'Trial'=> Good::find($id)
    ]);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
