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
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'year' => 'required|integer|min:1900',
        'stock' => 'required|integer|min:0',
 ]);

 Book::create([
    'judul' => $validated['title'],
    'penulis' => $validated['author'],
    'tahun_terbit' => $validated['year'],
    'stok' => $validated['stock'],
 ]);

 return redirect()
            ->route('books.index')
            ->with('success', 'Data buku berhasil ditambahkan.');

}

 public function edit(Book $book)
 {
    return view('books.edit', compact('book'));
 }

 public function update(Request $request, Book $book)
 {
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'year' => 'required|integer|min:1900',
        'stock' => 'required|integer|min:0',
        ]);

    $book->update([
        'judul'  => $validated['title'],
        'penulis' => $validated['author'],
        'tahun_terbit' => $validated['year'],
        'stok' => $validated['stock'],
    ]);

        return redirect()
            ->route('books.index')
            ->with('success', 'Data Buku Berhasil Diperbaharui.');   
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()
            ->route('books.index')
            ->with('success', 'Data Buku Berhasil Dihapus.');
    }
} 