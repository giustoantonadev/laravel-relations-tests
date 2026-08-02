@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Create Category</h1>

    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf

        @include('admin.categories._form')

        <button class="btn btn-primary">Create</button>
    </form>
</div>
@endsection