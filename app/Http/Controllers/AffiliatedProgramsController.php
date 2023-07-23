<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AffiliatedProgramsController extends Controller
{
    //
    public function affiliatedPrograms() {
        return view('affiliatedPrograms');
    }
}
