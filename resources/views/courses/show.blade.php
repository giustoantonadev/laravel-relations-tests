@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>{{ $course->name }}</h1>
    <p>{{ $course->description }}</p>
    <p><strong>Duration:</strong> {{ $course->duration }} weeks</p>
    <p><strong>Price:</strong> {{ number_format($course->price,2) }}</p>
    <p><strong>Categories:</strong> {{ $course->categories->pluck('name')->join(', ') }}</p>

    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection