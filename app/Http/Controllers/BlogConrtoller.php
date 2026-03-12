<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function edit($id)
    {
        $blog = Blog::findorFail($id);
        return view('blog.create', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findorFail($id);

        $request->validate([
            'category'          => 'required|string|max:255',
            'link'              => 'nullable|url',
            'description'       => 'required|string',
            'short_description' => 'nullable|string|max:255',
            'blog_image'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'is_active'         => 'required|boolean',
        ]);

        $image = $blog->blog_image;

        if($request->hasFile('blog_image')){
            if ($blog->blog_image && Storage::disk('public')->exists($blog->blog_image)){
            Storage::disk('public')->delete($blog->blog_image);
        }

            $image = $request->file('blog_image')->store('blogs', 'public');
        }

        $blog->update([
            'category'          => $request->category,
            'link'              => $request->link,
            'description'       => $request->description,
            'short_description' => $request->short_description,
            'blog_image'        => $image,
            'is_active'         => $request->is_active,
        ]);
        return redirect()->route('blog.index')->with('success', 'Blog Updated Successfully');
    }

    public function destroy($id)
    {
        $blog = Blog::findorFail($id);
        
        if($blog->blog_image && Storage::disk('public')->exists($blog->blog_image)){
            Storage::disk('public')->delete($blog->blog_image);
        }

        $blog->delete();

        return redirect()->route('blog.index')->with('success', 'Blog Deleted Successfully');
    }
}
