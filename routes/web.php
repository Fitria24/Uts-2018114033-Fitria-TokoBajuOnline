<?php
use App\Http\Controllers\BarangsController;
use App\Http\Controllers\PesanansController;
use App\Http\Controllers\HomesController;
use App\Http\Controllers\GambarprodukController;
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

Route::get('',[HomesController::class, 'index']);
//Route::get('',[GambarprodukController::class, 'index']);
//Route::get('',[BarangsController::class, 'index']);
//Route::get('',[HomeController::class, 'home']);


Route::resources([
    'barangs' => BarangsController::class,
      'pesanans'=> PesanansController::class,
      'homes'=>HomesController::class,
      'gambarproduk'=>GambarprodukController::class,
]);