@extends('layouts.app')

@section('content')
    <form action="/" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="titre" class="form-label">titre</label>
            <input type="text" class="form-control" id="titre" placeholder="titre du livre" name="titre">
        </div>
        <div class="mb-3">
            <label for="auteur" class="form-label">auteur</label>
            <input type="text" class="form-control" id="auteur" placeholder="nom de l'auteur" name="auteur">
        </div>
        <div class="mb-3">
            <label for="image_data" class="form-label">image</label>
            <input class="form-control" type="file" id="image_data" name="image_data">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
        </div>
        <button  class="btn btn-primary" type="submit">Add</button>
    </form>
@endsection
