@extends('layouts.app')

@section('content')


<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($books as $book)
    <div class="col">
      <div class="card h-100">
        <img src="books/{{$book->image_data}}" class="img-fluid img-thumbnail" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$book->titre}}</h5>
          <p class="card-text">{{$book->description}}</p>
          <a href="{{route('detail', ['titre'=> $book->titre])}}" class="btn btn-primary">detail</a>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary">{{$book->created_at}}</small>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div style="display: flex; justify-content:center; ">
    {{$books->links()}}
    </div>
@endsection