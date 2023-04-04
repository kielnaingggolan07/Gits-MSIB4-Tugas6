
@extends('app')

@section('content')
<body style="background-image: url({{ asset('assets/table.jpg')  }});">
    <a href="{{ url('/product/add') }}">
        <button class="btn btn-primary mt-4" type="button">+ Tambah Produk</button>
    </a>

    <div class="card-wrapper d-flex flex-wrap">
@foreach ($products as $item)
    
        <div class="card mt-3" style="width: 20rem;">
            <div class="card-body">
                <div class="card-title">
                <b> {{ $item->judul }} </b> <span><h6 class="card-subtitle text-muted" style="font-size:10px">{{ $item->category->genre }}</h6></span>
                </div>
                <hr> 
                <div class="card-row " style="display:flex">
                    <div class="card-col card-text-left" style=" width:65%;">
                        <h6 style="font-size: 10px">Pengarang: {{ $item->pengarang }}</h6>
                        <h6 style="font-size: 10px">Penerbit: {{ $item->penerbit }}</h6>
                        <h6 style="font-size: 10px">Tahun Terbit: {{ $item->tahunterbit }}</h6>
                    </div>
                    <div class="card-col card-text-right" style="font-size: 10px; width:35%;">
                        <h6 style="font-size: 10px">Harga: Rp. {{ $item->harga }}</h6>
                            <label for="exampleInputqyt" class="form-label"><h6 style="font-size: 10px;">Jumlah Barang:</h6></label>
                            <input type="text" class="form-control" id="exampleInputqyt" name="cart_qyt" style="margin-top: 0%; height:25px;"> 
                    </div>
                </div>
                <a href="/product/{{ $item->id }}/edit"><button class="btn btn-primary mt-2" type="button" style="margin-right: 10px">Ubah</button></a>
                <a href="/product/{{ $item->id }}/delete"><button class="btn btn-warning mt-2" type="button">Hapus</button></a>
            </div>
        </div>
    </body>
    <footer>
    </footer>
  @endforeach
    </div>

    <style>
        .card {
                width: 280px;
                height: 220px;
                margin: 10px;
                left: 5%;
            }
            .card-wrapper {
                display: flex;
                flex-wrap: wrap;
                justify-content: flex-start;
                
            }


    </style>
@endsection
