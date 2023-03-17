<?php

use App\Models\Good;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrialController;

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

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/trials',  [TrialController::class, 'index']);
// Route::get('/trial/{id}', function ($id) {
//     return view('trial', [
//         'Heading' => 'A Trial does not kill',
//         'Trial'=> Good::find($id)
//     ]);
// });

//OR

// Route::get('/trial/{id}', function ($id) {
//     $trial =  Good::find($id);
//     if($trial){
//         return view('trial', [
//             'Heading' => 'A Trial does not kill',
//             'Trial'=> $trial
//         ]);
//     } else {
//         abort('404');
//     }
   
// });

Route::get('/trials/create', [TrialController::class, 'create']);

Route::POST('/trials/store', [TrialController::class, 'store']);

Route::get('/trial/{trial}', [TrialController::class, 'show']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
