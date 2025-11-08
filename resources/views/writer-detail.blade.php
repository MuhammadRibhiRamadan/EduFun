@extends('layout')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <img src="https://api.dicebear.com/6.x/adventurer/svg?seed={{ $writer->id }}" 
             alt="{{ $writer->name }}" 
             class="rounded-circle mb-3" width="120" height="120">
        <h3 class="fw-bold">{{ $writer->name }}</h3>
        <p class="text-muted">Spesialis {{ $writer->speciality }}</p>
    </div>

    <div class="row justify-content-center">
        @foreach ($articles as $article)
        <div class="col-md-8 mb-4">
            <div class="card border-0 shadow-sm p-4">
                <h4 class="fw-bold">{{ $article->title }}</h4>
                <small class="text-muted d-block mb-2">
                    {{ $article->published_at }} | {{ $article->category->name }}
                </small>
                <p>{{ Str::limit($article->content, 150) }}</p>
                <a href="{{ url('/article/'.$article->id) }}" class="btn btn-outline-dark">
                    Read More →
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
