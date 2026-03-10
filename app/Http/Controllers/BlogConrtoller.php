<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogConrtoller extends Controller
{
    public function index()
    {
        $showBlogs = Blog::where('user_id', auth()->id())->latest()->get();
        return view('blog.index', compact('showBlogs'));    
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $user = auth()->id();
        $request->validate([
        'category'          => 'required|string|max:255',
        'link'              => 'nullable|url',
        'description'       => 'required|string',
        'short_description' => 'nullable|string|max:255',
        'blog_image'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'is_active'         => 'required|boolean',
        ]);

        $image = null;
        if($request->hasFile('blog_image')){
            $image = $request->file('blog_image')->store('blogs', 'public');
        }

        Blog::create([
            'category'          => $request->category,
            'link'              => $request->link,
            'description'       => $request->description,
            'short_description' => $request->short_description,
            'blog_image'        => $image,
            'is_active'         => $request->is_active,
            'user_id'           => $user,
        ]);

        return redirect()->route('blog.index')->with('success', 'Blog Created Success');



    }
}
