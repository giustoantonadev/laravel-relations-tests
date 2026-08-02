@extends('layouts.app')
@section('content')
<h1>Courses</h1>
<div class="row">
    @foreach ($courses as $course)
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">{{ $course->name }}</h5>
                <p class="card-text">{{ $course->description }}</p>
                <a href="{{ route('courses.show', $course->id) }}" class="btn btn-primary">View Course</a>
            </div>
        </div>
    </div>
    @endforeach
</div> <!-- Close the row div -->
@endsection