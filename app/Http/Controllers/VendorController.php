<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    function index()  {
        return view('vendor.dashboard');
    }
}
