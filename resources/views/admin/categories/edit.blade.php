@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Edit Category</h1>

    <form action="{{ route('admin.categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        @include('admin.categories._form')

        <button class="btn btn-primary">Save</button>
    </form>
</div>
@endsection