<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    public function index()
    {
        return view('blog-details');
    }
}
