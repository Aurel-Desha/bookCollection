@extends('layouts.app')

@section('content')

<div class="card mb-3">
    <img src="books/{{$book->image_data}}" class="card-img-fluid" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$book->titre}}</h5>
      <p class="card-text">{{$book->detail}}</p>
      <p class="card-text"><small class="text-body-secondary">{{$book->updated_at}}</small></p>
    </div>
  </div>

@endsection