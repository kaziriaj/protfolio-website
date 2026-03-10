@extends('layouts.masterlayout')

@section('main-contain')
<div class="container mt-4">
    <h2 class="mb-4">All Blog Posts</h2>
    <div class="row">
        @forelse($allblogs as $blog)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($blog->blog_image)
                        <img src="{{ asset('storage/' . $blog->blog_image) }}" class="card-img-top" alt="Blog Image">
                    @else
                        <img src="https://via.placeholder.com/300x200?text=No+Image" class="card-img-top" alt="No Image">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->category }}</h5>
                        <p>Author: 
                            <span class="badge bg-primary">{{$blog->user->name}}</span>
                        </p>
                        <p class="card-text">{{ Str::limit($blog->short_description, 100) }}</p>
                       
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <small class="text-muted">{{ $blog->created_at->format('M d, Y') }}</small>
                        @if($blog->is_active === 1)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-danger">Inactive</span>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center">
                    No blog posts found.
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection