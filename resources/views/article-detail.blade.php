@extends('layout')

@section('content')
<div class="container py-5">
    <div class="card border-0 shadow-sm p-5">
        <h2 class="fw-bold mb-3">{{ $article->title }}</h2>
        <small class="text-muted mb-4 d-block">
            {{ $article->published_at }} | by {{ $article->writer->name }} | {{ $article->category->name }}
        </small>
        <p class="lead">{{ $article->content }}</p>
    </div>

    <div class="text-center mt-4">
        <a href="{{ url('/') }}" class="btn btn-outline-dark">← Back to Home</a>
    </div>
</div>
@endsection
