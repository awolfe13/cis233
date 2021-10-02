<?php

use Illuminate\Support\Facades\Route;

use App\Domain\Api\Quotes;

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

Route::get('/quotes', function() {
    $count = intval(request()->query('count'));
    $count = $count < 1 ? 100 : $count;
    $quotes = Quotes::fetch($count);
    return view('quotes/index', ['quotes'=> $quotes]);
});