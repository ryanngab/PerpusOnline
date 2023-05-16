<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\BookController;
use PDF;
use App\Models\Book;
use App\Models\Genre;

class WkbookController extends Controller
{
    
    //

    public function tampilkandata(Book $book){
        return view('All_Book', [
            'title' => 'WIKBOOK',
            'Book' => $book,
            'Book' => Book::all(),
            'genre' => Genre::all(),
        ]);
    }

    public function tampilkanDetail(Book $book)
    {
        return view('BOOK', [
            'title' => 'Single hal',
            'Book' => $book,
            'genre' => Genre::all(),
        ]);
    }

    public function user(){
        return view('dashboard.user.index');
    }

    // public function pdf(Book $book)
    // {
    //     // dd($book);
    //     // $book = Book::where('id', '=', $book)->first();
    //     $book = Book::where('id', '=', $book)->first();

    // //    $book = Book::all();

    //     $pdf = PDF::loadview('pdf', ['book' => $book]);
    //     return $pdf->download('WikBook.pdf');
    // }

    // public function pdf (Book $book){

    //     $book = Book::create([
    //         'title' => $book->title,
    //         'author' => $book->author,
    //         'isbn' => $book->isbn,
    //         'id' => $book->id,
    //         'image' => $book->image,
    //         'sinopsis' => $book->sinopsis,
    //     ]);
    //     return view('pdf', compact('book'))->with('berhasil', 'Selamat! Silakan login dan selesaikan pembayaran');

    // }

    public function pdf(Book $book)
    {
        // dd($book);
        // $book = Book::where('id', '=', $book)->first();
        $book = Book::where('id', '=', $book->id)->first();

        //    $book = Book::all();

        $pdf = PDF::loadview('pdf', ['book' => $book]);
        return $pdf->download('WikBook.pdf');
    }
}
