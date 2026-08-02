@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Edit Course</h1>

    <form action="{{ route('admin.courses.update', $course) }}" method="POST">
        @csrf
        @method('PUT')

        @include('admin.courses._form', ['course' => $course])

        <button class="btn btn-primary">Save</button>
    </form>
</div>
@endsection