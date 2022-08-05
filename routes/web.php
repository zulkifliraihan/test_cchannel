<?php

use Illuminate\Support\Facades\Route;
use App\Models\Influencer;
use App\Notifications\BlastEmail;

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
    // dd("ha");
    Influencer::find(1)->notify(new BlastEmail());

    return "Done";
});
