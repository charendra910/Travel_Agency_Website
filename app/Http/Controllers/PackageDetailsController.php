<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageDetailsController extends Controller
{
    public function index()
    {
        return view ('package-details');
    }
}
