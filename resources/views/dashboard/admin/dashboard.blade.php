@extends('dashboard.layouts.sidebar1')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1 class="text-center">Admin</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            </div>
        </div>

        {{-- <div class="row">
            <div class="col-lg-12 margin-tb mt-4">
                <div class="card shadow p-3 mb-5">
                    @if (session('berhasil'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('berhasil') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card-header ">
                        <h2>Data Siswa
                        </h2>
                    </div>
                    <div class="table-responsive col-lg-12">
                        <a href="{{ route('admin.create') }}" class="btn btn-primary mb-3 mt-5 mb-4"><i
                                class="fas fa-plus"></i></a>
                        <a href="{{ route('admin.pdfUser') }}" class="btn btn-danger mb-3 mt-5 mb-4"> pdf </a>
                        <a href="{{ route('admin.create') }}" class="btn btn-success mb-3 mt-5 mb-4"> Excel </a>
                        <table class="table table-striped table-dark table-sm table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col" class="text-white">No</th>
                                    <th scope="col" class="text-white">Nama</th>
                                    <th scope="col" class="text-white">Email</th>
                                    <th scope="col" class="text-white">Address</th>
                                    <th scope="col" class="text-white">No Handphone</th>
                                    <th scope="col" class="text-white" style="width: 100px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                </tr>
                                <tr>

                                <tr>
                                    @foreach ($users as $user)
                                <tr>
                                    <td class="text-white">{{ $loop->iteration }}</td>
                                    <td class="text-white">{{ $user->name }}</td>
                                    <td class="text-white">{{ $user->email }}</td>
                                    <td class="text-white">{{ $user->address }}</td>
                                    <td class="text-white">{{ $user->No }}</td>
                                    <td class="text-white">
                                        <a href="/dashboard/Book/{{ $user->id }}/edit"
                                            class="badge bg-warning text-dark "><i class="fas fa-edit"></i></a>
                                        <a href="/dashboard/Book/{{ $user->id }}" class="badge bg-info text-dark "><i
                                                class="fas fa-eye"></i></a>
                                        <form action="/dashboard/Book/{{ $user->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0 btn-delete"
                                                onclick="return confirm('Apakah anda yakin ingin menghapus postingan ini?')"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                </tr>
                                @endforeach

                                </tr>
                                </tr>
                            </tbody>

                    </div>
                </div>
            </div>

        </div> --}}
        <div class="section-body">
            <h2 class="section-title">Hi, {{ auth()->user()->name }} </h2>
            <p class="section-lead">Selamat Datang</p>
            <br>
    </section>
@endsection
