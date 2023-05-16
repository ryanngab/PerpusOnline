@extends('layouts.main')
<!-- Product section-->

<body >
    <div class="container px-4 px-lg-5 my-5" style="font-family: sans-serif" onload="window.print()">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                @if ($book->image)
                <img src="{{ asset('/storage/' . $book->image) }}" alt=" {{ $book->genre->name }}" class="img-fluid mt-3 me-5 ms-5" style="width: 400px;">
                <!-- <img src="/assets/images/bulan.jpg " class="card-img-top " alt="{{$book->genre->name }}"> -->
                @else
                <br>
                <img src="https://source.unsplash.com/1200x400/?{{ $book ->genre->name }}" class="card-img-top" alt="{{$book->genre->name }}">
                @endif
                <!-- <img src="https://source.unsplash.com/1200x400/?{{ $book ->genre->name }}" class="card-img-top" alt="{{$book->genre->name }}"> -->
            </div>
            <div class="col-md-6">
                <div class="small mb-1">
                    <h3>Judul : {{ $book->title }}</h3>
                    <p>ID Book : {{ $book->id}}</p>
                    <p>Genre : {{ $book->genre->name}}</p>
                    <p>Nomor ISBN : {{ $book->isbn}}</p>
                    <p>Author : {{ $book->author}}</p>
                </div>
                <div class="row">
                    <p>Publisher : {{ $book->created_at}}</p>
                </div>
                <h1 class="display-5 fw-bolder">Sinopsis</h1>
                <p class="lead"> {!! $book->sinopsis !!}</p>

            </div>
        </div>
    </div>