@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Admin Dashboard</h1>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="card p-3">
                <h5 class="mb-1">Courses</h5>
                <p class="display-6 mb-0">{{ $coursesCount }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h5 class="mb-1">Categories</h5>
                <p class="display-6 mb-0">{{ $categoriesCount }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h5 class="mb-1">Users</h5>
                <p class="display-6 mb-0">{{ $usersCount }}</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">Recent Courses</div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        @foreach($recentCourses as $c)
                        <li class="mb-2">
                            <strong>{{ $c->name }}</strong>
                            <div class="text-muted small">{{ $c->categories->pluck('name')->join(', ') }}</div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">Recent Categories</div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        @foreach($recentCategories as $cat)
                        <li class="mb-2"><strong>{{ $cat->name }}</strong></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection