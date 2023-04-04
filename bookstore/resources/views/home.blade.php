@extends('app')

@section('title', 'Homepage')

@section('content')
    <style>
        body {
            background-image: url({{ asset('assets/table.jpg')  }});
        }
        .container { 
            margin-top: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
            }
      
        img {
            max-width: 350px;
            max-height: 450px;
        }
      </style>
    <body>
        
    <div class="container">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="4000">
            <img src="{{ asset('assets/Tokill.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="{{ asset('assets/harrypotter.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/naruto.jpg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

</body>
@endsection