<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function index(Request $request)
    {
        # code...
        return view('pages.checkout');
    }

    public function success(Request $request)
    {
        # code...
        return view('pages.success');
    }
}
