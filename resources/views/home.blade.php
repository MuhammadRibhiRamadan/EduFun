@extends('layout')

@section('content')

  @foreach ($articles as $article)
    <div class="article-card d-flex p-3 align-items-center">
      <img src="{{ $article->image }}" 
          alt="Article Image" 
          class="article-img me-4"
          style="width: 250px; height: 160px; object-fit: cover; border-radius: 8px;">
      <div>
        <h5 class="fw-semibold mb-2">{{ $article->title }}</h5>
        <p class="mb-2 text-secondary" style="font-size: 14px;">
          {{ Str::limit($article->content, 120) }}
        </p>
        <div class="d-flex align-items-center justify-content-between">
          <div style="font-size: 13px;">
            <span class="text-muted">Category: </span><span class="fw-semibold">{{ $article->category->name }}</span> |
            <span class="text-muted">Writer: </span><span class="fw-semibold">{{ $article->writer->name }}</span>
          </div>
          <a href="{{ route('article.show', $article->id) }}" class="btn-read">Read more →</a>
        </div>
      </div>
    </div>
  @endforeach
@endsection
