
@extends('app')

@section('content')
    <a href="{{ url('/category/add') }}">
        <button class="btn btn-primary mt-4" type="button">+ Tambah Produk</button>
    </a>
@foreach ($categories as $item)
    <body>
        <div class="card mt-3" style="width: 25rem;">
            <div class="card-body">
                    <div class=" card-text">
                        <h6 style="font-size: 10px">Genre: {{ $item->genre }}</h6>
                        <h6 style="font-size: 10px">Deskripsi: {{ $item->description }}</h6>  
                    </div>
                <a href="/category/{{ $item->id }}/edit"><button class="btn btn-primary mt-2" type="button" style="margin-right: 10px">Ubah</button></a>
                <a href="/category/{{ $item->id }}/delete"><button class="btn btn-warning mt-2" type="button">Hapus</button></a>
            </div>
        </div>
    </body>
    <footer>
    </footer>
  @endforeach
@endsection