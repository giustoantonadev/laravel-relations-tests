@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Create Course</h1>

    <form action="{{ route('admin.courses.store') }}" method="POST">
        @csrf

        @include('admin.courses._form', ['course' => null])

        <button class="btn btn-primary">Create</button>
    </form>
</div>
@endsection