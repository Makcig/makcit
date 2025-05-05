@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-12 text-center mt-4">
            <h1 class="fw-bold">Admin Panel</h1>
            <p class="text-muted">Manage your skills efficiently</p>
        </div>
    </div>

    <div class="row mt-4">

        <div class="col-md-6">
            <div class="card border-primary shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Total Skills</h5>
                    <p class="card-text display-4 fw-bold">{{ $skillCount }}</p>
                    <p class="text-muted">Number of skills in the database</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-success shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Quick Actions</h5>
                    <a href="{{ route('admin.skills.create') }}" class="btn btn-lg btn-success w-100 mb-2">
                        <i class="fas fa-plus"></i> Add New Skill
                    </a>
                    <a href="{{ route('admin.logout') }}" class="btn btn-lg btn-danger w-100">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
