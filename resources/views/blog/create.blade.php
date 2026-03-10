@extends('layouts.app')
@section('dashboard-contain')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Create New Blog Post</h3>
                    <a class="btn btn-info" href="{{ route('blog.index') }}"><- Go Back Blog</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" name="category" id="category" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="link" class="form-label">Link</label>
                            <input type="url" name="link" id="link" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description</label>
                            <input type="text" name="short_description" id="short_description" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="blog_image" class="form-label">Blog Image</label>
                            <input type="file" name="blog_image" id="blog_image" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="is_active" class="form-label">Active Status</label>
                            <select name="is_active" id="is_active" class="form-select">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Save Blog</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

