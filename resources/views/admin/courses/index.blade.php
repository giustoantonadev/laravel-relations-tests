@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Courses</h1>
        <a href="{{ route('admin.courses.create') }}" class="btn btn-primary">New Course</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Duration (weeks)</th>
                <th>Price</th>
                <th>Categories</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{ $course->name }}</td>
                <td>{{ $course->duration }}</td>
                <td>{{ number_format($course->price,2) }}</td>
                <td>{{ $course->categories->pluck('name')->join(', ') }}</td>
                <td class="text-end">
                    <a href="{{ route('admin.courses.edit', $course) }}" class="btn btn-sm btn-secondary">Edit</a>
                    <form action="{{ route('admin.courses.destroy', $course) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Delete?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $courses->links() }}
</div>
@endsection