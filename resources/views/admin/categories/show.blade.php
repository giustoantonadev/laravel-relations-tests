@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>{{ $category->name }}</h1>
    <p>{{ $category->description }}</p>

    <h3>Courses</h3>
    <ul>
        @foreach($category->courses as $course)
        <li>{{ $course->name }}</li>
        @endforeach
    </ul>

    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection