@extends('layout')

@section('content')
  <div class="card shadow-sm border-0 p-4">
    <img src="{{ $article->image }}" 
          alt="Article Image" 
          class="article-img me-4"
          style="width: 1250px; height: 400px; object-fit: cover; border-radius: 8px;">

    <h2 class="fw-bold mb-3">{{ $article->title }}</h2>

    <p class="text-muted mb-2" style="font-size: 14px;">
      <strong>Category:</strong> {{ $article->category->name }} |
      <strong>Writer:</strong> {{ $article->writer->name }} |
      <strong>Published:</strong> {{ \Carbon\Carbon::parse($article->published_at)->format('d M Y') }}
    </p>

    <hr>

    <p class="mt-3" style="font-size: 15px; line-height: 1.8;">
      {{ $article->content }}
    </p>

    <a href="{{ route('home') }}" class="btn btn-dark mt-4 px-4 py-2 rounded-pill">← Back to Home</a>
  </div>
@endsection
