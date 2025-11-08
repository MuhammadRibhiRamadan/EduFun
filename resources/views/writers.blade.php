@extends('layout')

@section('content')
  <h3 class="fw-bold mb-4 text-center">Our Writers:</h3>

  <div class="row justify-content-center">
    @foreach ($writers as $writer)
      <div class="col-md-3 text-center mb-5">
        <img src="https://api.dicebear.com/8.x/adventurer/svg?seed={{ urlencode($writer->name) }}" 
             alt="Writer Avatar" 
             class="rounded-circle shadow mb-3" 
             width="120" height="120">

        <h5 class="fw-semibold">{{ $writer->name }}</h5>
        <p class="text-muted mb-3">Spesialis {{ $writer->speciality }}</p>

        <a href="{{ route('writer.show', $writer->id) }}" class="btn btn-outline-dark rounded-pill px-3 py-1">
          View Articles →
        </a>
      </div>
    @endforeach
  </div>
@endsection
