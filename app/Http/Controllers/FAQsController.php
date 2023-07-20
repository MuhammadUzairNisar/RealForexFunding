<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;

class FAQsController extends Controller
{
    //
    function faqs(){
        $data = FAQ::all();
        return view('FAQs', ['data' => $data]);
    }
}
