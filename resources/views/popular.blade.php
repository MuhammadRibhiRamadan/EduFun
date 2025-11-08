@extends('layout')

@section('content')
<div class="container mt-5">
    <h2 class="fw-bold mb-4">Popular</h2>

    @foreach ($articles as $article)
        <div class="card mb-4 shadow-sm border-0 rounded-4 p-3">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ $article->image }}" 
                        alt="Article Image" 
                        class="article-img me-4"
                        style="width: 250px; height: 160px; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="col-md-9 d-flex flex-column justify-content-center">
                    <h5 class="fw-bold">{{ $article->title }}</h5>
                    <small class="text-muted mb-2">
                        {{ $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('d M Y') : 'Unknown date' }}
                        | by {{ $article->writer->name }}
                    </small>
                    <p>{{ Str::limit($article->content, 120) }}</p>
                    <a href="{{ url('/article/'.$article->id) }}" class="btn btn-dark btn-sm rounded-pill px-3">
                        read more →
                    </a>
                </div>
            </div>
        </div>
    @endforeach

    <div class="d-flex justify-content-center mt-4">
        {{ $articles->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
