@extends('auth')

@section('title', 'login')

@section('content')

<style>
    body {
        background-image: url({{ asset('assets/book.png')  }});
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        width: 500px;
        height: 800px;
        overflow: hidden;
    }
    .card {
        position: absolute;
        top: 45%;
        left: 15%;
        transform: translateY(-50%);
    }
</style>

<body>
<div class="col-md-4 mx-auto my-5">
    <div class="card">
        <div class="card-body">
            <form action="{{ route("do.login") }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp">
                    @error('email')
                        <div id="emailHelp" class="form-text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                    @error('password')
                        <div id="passwordHelp" class="form-text">{{ $message }}</div>
                    @enderror
                </div>
                <p>
                    Belum punya akun?
                    <a href="{{ route('register') }}">silakan mendaftar.</a>
                </p>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
</body>
@endsection