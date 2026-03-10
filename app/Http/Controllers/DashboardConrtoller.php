<?php

namespace App\Http\Controllers;

use App\Models\Blog;
//use Illuminate\Http\Request;

class DashboardConrtoller extends Controller
{
    public function index()
    {
        $blogcount = Blog::where('user_id', auth()->id())->count();
        return view('dashboard', compact('blogcount'));
    }
}
