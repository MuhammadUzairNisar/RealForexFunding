<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WhyRffController extends Controller
{
    //
    public function whyRff() {
        return view('whyRff');
    }
}