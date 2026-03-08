{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('layouts.app')
@section('dashboard-contain')
<div class="container py-5">
    <h2 class="mb-4 fw-bold">Profile Settings</h2>

    <div class="row g-4">

        <!-- Update Profile Information -->
        <div class="col-12">
            <div class="card shadow-sm rounded-3 p-4">
                <h5 class="mb-3">Update Profile Information</h5>
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
        </div>

        <!-- Update Password -->
        <div class="col-12">
            <div class="card shadow-sm rounded-3 p-4">
                <h5 class="mb-3">Update Password</h5>
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>

        <!-- Delete Account -->
        <div class="col-12">
            <div class="card shadow-sm rounded-3 p-4 border border-danger">
                <h5 class="mb-3 text-danger">Delete Account</h5>
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    body {
        background-color: #f4f6f9;
        font-family: 'Roboto', sans-serif;
    }

    .card {
        background-color: #fff;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .card:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }

    .card h5 {
        font-weight: 600;
    }

    /* Optional responsive tweaks */
    @media (max-width: 576px) {
        .container {
            padding-left: 1rem;
            padding-right: 1rem;
        }
    }
</style>
@endsection