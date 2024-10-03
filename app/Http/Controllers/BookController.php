<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'stok' => 'required|numeric'
        ]);

        Book::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'stok' => $request->stok
        ]);

        return redirect('/books')->with('status', 'Data buku berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'stok' => 'required|numeric'
        ]);

        Book::find($id)->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'stok' => $request->stok
        ]);

        return redirect('/books')->with('status', 'Data buku berhasil diubah!');
    }

    public function destroy($id)
    {
        Book::find($id)->delete();
        // dd(Book::find(id));
        return redirect('/books')->with('status', 'Data buku berhasil dihapus!');
    }
   
}