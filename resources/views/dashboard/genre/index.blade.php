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
                <div class="card shadow p-3 mb-5">
                    @if (session('hapus'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('hapus') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card-header ">
                        <h2>Data Genre
                        </h2>
                    </div>
                    <div class="table-responsive col-lg-12">
                        <a href="{{ route('genre.create') }}" class="btn btn-primary mb-3 mb-4"><i class="fas fa-plus"></i>
                            Create New Genre </a>
                        <a href="{{ route('genre.pdfgenre') }}" class="btn btn-danger mb-3 mb-4"> pdf </a>
                        <a href="{{ route('admin.create') }}" class="btn btn-success mb-3 mb-4"> Excel </a>
                        <table class="table table-striped table-dark table-sm table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col" class="text-white">No</th>
                                    <th scope="col" class="text-white">Nama</th>
                                    <th scope="col" class="text-white">Slug</th>
                                    <th scope="col" style="width: 100px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach ($genres as $genre)
                                    <tr class="text-center">
                                        <td class="text-white">{{ $i++ }}</td>
                                        <td class="text-white">{{ $genre->name }}</td>
                                        <td class="text-white">{{ $genre->slug }}</td>
                                        <td class="text-white">
                                            <a href="/dashboard/genre/{{ $genre->id }}/edit"
                                                class="badge bg-warning text-dark "><i class="fas fa-edit"></i></a>
                                            <a href="/dashboard/genre/{{ $genre->id }}"
                                                class="badge bg-info text-dark "><i class="fas fa-eye"></i></a>
                                            <form action="/dashboard/genre/{{ $genre->id }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="badge bg-danger border-0 btn-delete"
                                                    onclick="return confirm('Apakah anda yakin ingin menghapus postingan ini?')"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $genres->links('') }}
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
