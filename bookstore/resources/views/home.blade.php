@extends('app')

@section('title', 'Homepage')

@section('content')
    <h1></h1>
    @auth
        <p>{{ Auth::user()->name }}</p>
    @endauth
    @guest
        <p>Elu belum login</p>
    @endguest
@endsection