@extends('dashboard.layouts.sidebar1')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1 class="text-center">Admin</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="card shadow p-3">
                    @if (session('berhasil'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('berhasil') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card-header ">
                        <!-- <img src="/img/2.png" style="width: 200px;"> -->
                        <!-- <img src="/img/logo5.png" height="200" width="400px"> -->
                        <h2>Data Book
                        </h2>
                    </div>
                    <div class="table-responsive col-lg-12">
                        <a href="{{ route('admin.create') }}" class="btn btn-primary mb-3 mb-4"><i class="fas fa-plus"></i>
                            Book </a>
                        <a href="{{ route('admin.pdf') }}" class="btn btn-danger mb-3 mb-4"> pdf </a>
                        <a href="{{ route('admin.create') }}" class="btn btn-success mb-3  mb-4"> Excel </a>
                        <table class="table table-striped table-dark table-sm table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col" class="text-white">No</th>
                                    <th scope="col" class="text-white">Book ID</th>
                                    <th scope="col" class="text-white">Genre</th>
                                    <th scope="col" class="text-white">Title</th>
                                    <th scope="col" class="text-white">ISBN</th>
                                    <th scope="col" class="text-white">Syinopsis</th>
                                    <th scope="col" class="text-white">Cover Book</th>
                                    <th scope="col" class="text-white" style="width: 100px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                </tr>
                                <tr>

                                    @foreach ($Books as $Book)
                                <tr class="text-center">
                                    <td class="text-white">{{ $loop->iteration }}</td>
                                    <td class="text-white">{{ $Book->id }}</td>
                                    <td class="text-white">{{ $Book->genre->name }}</td>
                                    <td class="text-white">{{ $Book->title }}</td>
                                    <td class="text-white">{{ $Book->isbn }}</td>
                                    <td class="text-white">{{ $Book->sinopsis }}</td>
                                    <!-- <td><img src="/img/{{ $Book->image }}" alt="" width="200px"></td> -->
                                    <td>
                                        @if ($Book->image)
                                            <img src="{{ asset('/storage/' . $Book->image) }}"
                                                alt=" {{ $Book->genre->name }}" width="100px">
                                            <!-- <img src="/assets/images/bulan.jpg " class="card-img-top " alt="{{ $Book->genre->name }}"> -->
                                        @else
                                            <br>
                                            <img src="https://source.unsplash.com/1200x400/?{{ $Book->genre->name }}"
                                                width="100px" alt="{{ $Book->genre->name }}">


                                            <!-- <img src="https://source.unsplash.com/1200x400/?{{ $Book->genre->name }}" class="card-img-top" alt="{{ $Book->genre->name }}"> -->
                                        @endif

                                    </td>
                                    <td class="text-white">
                                        <a href="/dashboard/Book/{{ $Book->id }}/edit"
                                            class="badge bg-warning text-dark "><i class="fas fa-edit"></i></a>
                                        <a href="/dashboard/Book/{{ $Book->id }}" class="badge bg-info text-dark "><i
                                                class="fas fa-eye"></i></a>
                                        <form action="/dashboard/Book/{{ $Book->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0 btn-delete"
                                                onclick="return confirm('Apakah anda yakin ingin menghapus postingan ini?')"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                </tr>
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                        {{$Books->links('')}}
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
