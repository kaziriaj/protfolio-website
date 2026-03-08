
@extends('layouts.app')
@section('dashboard-contain')

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">Welcome, {{ Auth::user()->name }}</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card card-dashboard p-3">
                        <h5>Users</h5>
                        <p class="fw-bold display-6">150</p>
                        <small>Total registered users</small>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-dashboard p-3">
                        <h5>Posts</h5>
                        <p class="fw-bold display-6">45</p>
                        <small>Published posts</small>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-dashboard p-3">
                        <h5>Visitors</h5>
                        <p class="fw-bold display-6">1.2k</p>
                        <small>Active visitors today</small>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <div class="card card-dashboard p-4">
                    <h4>Recent Activity</h4>
                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item">User John registered</li>
                        <li class="list-group-item">New post "Laravel Tips" published</li>
                        <li class="list-group-item">Visitor from USA visited homepage</li>
                    </ul>
                </div>
            </div>

@endsection