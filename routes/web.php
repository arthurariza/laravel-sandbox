<?php

use App\Models\Feature;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blade', function () {
    return view('blade');
});

Route::get('/script', function () {
    return view('script');
});

Route::get('/dashboard', function () {
    $features = Feature::query()
                       ->select(['id', 'name', 'status', 'created_at'])
                       ->latest()
                       ->paginate(15);

    return View::make('dashboard', compact('features'));
});
