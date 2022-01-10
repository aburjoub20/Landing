<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProtfolioController;

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


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 


        Route::get('/dashboard', function () {return view('backend.index'); })->name('dashboard');
        Route::resource('protfolio', ProtfolioController::class);
        
            
       
        


    });



// Route::get('/', function () {
//     return view('backend.index');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
