<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class WebsitePshowController extends Controller
{
    public function allblogs()
    {
        $allblogs = Blog::latest()->get();
        return view('allblogs', compact('allblogs'));
    }

    public function allskrills()
    {
        return view('allskrills');
    }
}
