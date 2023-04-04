
@extends('app')

@section('content')
<body style="background-image: url({{ asset('assets/table.jpg')  }});">
    <a href="{{ url('/category/add') }}">
        <button class="btn btn-primary mt-4" type="button">+ Tambah Produk</button>
    </a>
    <div class="card-wrapper d-flex flex-wrap">
@foreach ($categories as $item)
    
        <div class="card mt-3" style="width: 18rem;">
            <div class="card-body">
                    <div class=" card-text">
                        <h6 style="font-size: 10px">Genre : <ul> {{ $item->genre }} </ul></h6>
                        <h6 style="font-size: 10px">Deskripsi : <ul>{{ $item->description }}</ul></h6>  
                    </div>
                <a href="/category/{{ $item->id }}/edit"><button class="btn btn-primary mt-2" type="button" style="margin-right: 10px">Ubah</button></a>
                <a href="/category/{{ $item->id }}/delete"><button class="btn btn-warning mt-2" type="button">Hapus</button></a>
            </div>
        </div>
    </body>
  @endforeach
</div>


<style>
    .card {
            width: 150px;
            height: 150px;
            margin: 10px;
            left: 5%;
        }
        .card-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            
        }
        ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}

</style>
@endsection