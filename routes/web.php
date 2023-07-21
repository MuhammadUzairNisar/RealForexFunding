<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WhyRffController;
use App\Http\Controllers\FAQsController;
use App\Http\Controllers\TradingRulesController;
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
Route::get('/homePage',[HomeController::class,'homePage'])->name('HomePage');
Route::get('/adminPanel',[AdminController::class,'adminPanel'])->name('AdminPanel');
Route::get('/whyRff',[WhyRffController::class,'whyRff'])->name('WhyRff');
Route::get('/FAQs',[FAQsController::class,'faqs'])->name('FAQS');
Route::get('/tradingRules',[TradingRulesController::class,'tradingRules'])->name('TradingRules');