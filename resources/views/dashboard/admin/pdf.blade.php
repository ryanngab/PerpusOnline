<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- my css --}}
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/showcss">
    <link rel="stylesheet" href="/css/sidebar.css">

    {{-- box icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
</head>

<body>
    <center>
        <h4>Laporan Buku WikBook</h4>
    </center>

</div>
    <div class="table-responsive col-lg-12">
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Book ID</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Title</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Syinopsis</th>
                    <th scope="col">Cover Book</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ( $book as $book)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $book->id }}</td>
                    <td class="text-center">{{ $book->genre->name }}</td>
                    <td class="text-center">{{ $book->title }}</td>
                    <td class="text-center">{{ $book->isbn }}</td>
                    <td class="text-center">{{ $book->sinopsis }}</td>
                    <!-- <td><img src="/img/{{ $book->image }}" alt="" width="200px"></td> -->
                    <td>
                        @if ($book->image)

                        <img src="{{ asset('/storage/' . $book->image) }}" alt=" {{ $book->genre->name }}" width="200px">
                        <!-- <img src="/assets/images/bulan.jpg " class="card-img-top " alt="{{$book->genre->name }}"> -->
                        @else
                        <br>
                        <img src="https://source.unsplash.com/1200x400/?{{ $book ->genre->name }}" width="200px" alt="{{$book->genre->name }}">
                        <!-- <img src="https://source.unsplash.com/1200x400/?{{ $book ->genre->name }}" class="card-img-top" alt="{{$book->genre->name }}"> -->
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    <script type="text/javascript" src="/js/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>