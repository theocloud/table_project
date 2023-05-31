<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    // to retrieve data from Table 1 in database
    $table1Data = DB::table('table1')->get();

    // calculation for Table 2
    $alpha = $table1Data->where('index', 'A5')->first()->value + $table1Data->where('index', 'A20')->first()->value;
    $beta = $table1Data->where('index', 'A15')->first()->value / $table1Data->where('index', 'A7')->first()->value;
    $charlie = $table1Data->where('index', 'A13')->first()->value * $table1Data->where('index', 'A12')->first()->value;

    return view('tables', compact('table1Data', 'alpha', 'beta', 'charlie'));//return value
});
