<?php

    use App\Http\Controllers\DrugController;
    use App\Models\Drug;
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

//Route::get('/', function () {
    //return Drug::search('phen')->get();
//});

   // Route::get('/drugs', [DrugController::class, 'index'])->name('drugs.index');

    Route::get('/', [DrugController::class, "index"]);

    Route::get('/live', function () {
        return view('welcome');
    });

    Route::get('/app', function () {
        return view('app');
    });

    Route::get('home', function () {
        return view('home');
    });

