@extends('app')
@foreach ($categories as $category)
@section('content')
<form action="/category/{{ $category->id }}" method="POST" style="margin-top:10px">
    @method('PUT')
    @csrf
    <div class="mb-3">
      <label for="exampleInputjudul" class="form-label">Genre</label>
      <input type="text" class="form-control" id="exampleInputjudul" aria-describedby="emailHelp" name="category_genre"  value="{{ $category->genre }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputpengarang" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" id="exampleInputpengarang" aria-describedby="emailHelp" name="category_description" value="{{ $category->description }}">
    </div>
    <button type="submit" class="btn btn-primary">Ubah</button>
  </form>
  @endforeach
  @endsection