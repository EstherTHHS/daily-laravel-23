<?php

use App\Jobs\ProcessPayment;
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

Route::get('/', function () {
    foreach(range(1,100) as $i)
    {

        \App\Jobs\SendWelcomeEmail::dispatch();
    }

   \App\Jobs\ProcessPayment ::dispatch()->onQueue('payments');


    return view('welcome');
});
