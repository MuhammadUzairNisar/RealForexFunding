<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TradingRulesController extends Controller
{
    //
    public function tradingRules() {
        return view('tradingRules');
    }
}