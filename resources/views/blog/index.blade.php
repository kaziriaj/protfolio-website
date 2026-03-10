@extends('layouts.app')
@section('dashboard-contain')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>All Blog Post</h3>
                    <a class="btn btn-info" href="{{ route('blog.create') }}">Create New Blog</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive-md">
                        <table class="table">
                            <thead>
                                <th>#</th>
                                <th>Blog Title</th>
                                <th>Blog Slug</th>
                                <th>Blog Photo</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @forelse ($showBlogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>{{ $blog->category }}</td>
                                        <td>{{ $blog->link }}</td>
                                        <td>
                                            <img class="img-thumbnail" src="{{ asset('/storage/' . $blog->blog_image) }}" alt="">
                                        </td>
                                        <td> 
                                            @if ($blog->is_active === 1)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif
                                         </td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No data found</td>
                                    </tr>
                                @endforelse


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
