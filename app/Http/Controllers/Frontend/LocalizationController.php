<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocalizationController extends Controller
{
    public function __invoke($local)
    {
        session()->put('local',$local);
        return redirect()->back();
    }
}
