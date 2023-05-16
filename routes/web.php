<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WkbookController;
use App\Models\Book;
use App\Models\Genre;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/1', function () {
//     return view('beranda',[
//         'title' => 'TOP 5 BOOK',
//         'genre' => Genre::all()
//     ]);
// });

Route::get('/12', function () {
    return view('dashboard.layouts.sidebar1',[
        'title' => 'TOP 5 BOOK',
        'genre' => Genre::all()
    ]);
});

Route::get('/', function () {
    return view('welcome', [
        'title' => 'TOP 5 BOOK',
        'Book' => '$Book',
        'genre' => Genre::all(),
        'Book' => Book::all()
    ]);
});




// route untuk memberikan function store dari RegisterController kepada /register yang mana methodnya POST

Route::get('/', [BookController::class, 'Perpus'])->name('welcome');
Route::post('/login', [LoginController::class, 'authanticate']);

Route::middleware('auth')->group(
    function () {
        Route::get('/dashboard', [BookController::class, 'dashboard']);
        Route::post('/logout', [LoginController::class, 'logout']);
        Route::get('/perpustakaan', [WkbookController::class, 'user'])->name('user.index');
        Route::get('/Book', [WkbookController::class, 'tampilkandata'])->name('index');
        Route::get('/Book/{book:id}', [WkbookController::class, 'tampilkanDetail'])->name('BOOK');
        Route::get('/Book/{book:id}/pdf', [WkbookController::class, 'pdf'])->name('pdf');
    }
);


Route::middleware('guest')->group(
    function () {
        Route::post('/register', [RegisterController::class, 'store']);
        Route::get('/register', [RegisterController::class, 'index']);
        Route::get('/login', [LoginController::class, 'index'])->name('login');

    }
);



//Admin Route
Route::middleware(['Admin', 'Admin:1'])->group(
    function () {
        Route::get('/data-book', [BookController::class, 'index'])->name('admin.index');
        Route::get('/dashboard/pdf', [BookController::class, 'pdf'])->name('admin.pdf');
        Route::get('/dashboard/book', [BookController::class, 'create'])->name('admin.create');
        Route::get('/dashboard/user', [BookController::class, 'user'])->name('admin.user');
        Route::get('/dashboard/user/pdf', [BookController::class, 'pdfUser'])->name('admin.pdfUser');
        Route::post('/dashboard/book', [BookController::class, 'store'])->name('admin.store');
        Route::get('/dashboard/Book/{book:id}', [BookController::class, 'show'])->name('admin.show');
        Route::get('/dashboard/Book/{book:id}/edit', [BookController::class, 'edit'])->name('admin.edit');
        Route::put('/dashboard/Book/{book:id}/edit', [BookController::class, 'update'])->name('admin.update');
        Route::delete('/dashboard/Book/{book:id}', [BookController::class, 'destroy'])->name('admin.destroy');
        Route::get('/dashboard/genre', [GenreController::class, 'index'])->name('genre.index');
        Route::get('/dashboard/genre/create', [GenreController::class, 'create'])->name('genre.create');
        Route::post('/dashboard/genre/create', [GenreController::class, 'store'])->name('genre.store');
        Route::delete('/dashboard/genre/{genre:id}', [GenreController::class, 'destroy'])->name('genre.destroy');
        Route::get('/dashboard/genre/pdf', [GenreController::class, 'pdfgenre'])->name('genre.pdfgenre');

    }
);








