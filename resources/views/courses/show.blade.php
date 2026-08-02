@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-8">
            @if($course->image)
            <img src="{{ $course->image }}" alt="{{ $course->name }}" class="img-fluid rounded mb-3">
            @endif
            <h1>{{ $course->name }}</h1>
            <p>{{ $course->description }}</p>
        </div>
        <div class="col-md-4">
            <div class="card p-3 mb-3">
                <p><strong>Duration:</strong> {{ $course->duration }} weeks</p>
                <p><strong>Price:</strong> {{ number_format($course->price,2) }}</p>
                <p><strong>Categories:</strong> {{ $course->categories->pluck('name')->join(', ') }}</p>
            </div>
        </div>
    </div>

    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection