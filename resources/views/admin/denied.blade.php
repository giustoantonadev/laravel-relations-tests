@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h2 class="mb-3">Access Restricted</h2>
                    <p class="lead">This area is for administrators only. If you believe you should have access, please contact the site administrator.</p>
                    <p class="mt-4">
                        <a href="/" class="btn btn-primary">Return Home</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection