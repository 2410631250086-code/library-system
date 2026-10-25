@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    @if (session('success'))
        <p>{{ session('success')}}</p>
    @endif

    <h2>Daftar Buku</h2>

    <a href="{{ route('books.create') }}">
        <button type="button">+ Tambah Buku</button>
    </a>

    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>id</th>
                <th>Judul Buku</th>
                <th>penulis</th>
                <th>tahun terbit</th>
                <th>stok</th>
                <th>kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->judul }}</td>
                    <td>{{ $book->penulis }}</td>
                    <td>{{ $book->tahun_terbit }}</td>
                    <td>{{ $book->stok }}</td>
                    <td>{{ $book->category->name ?? 'Tanpa Kategori' }}</td>
                    <td>
                        <!-- Tombol Edit/Dalate -->
                        <a href="{{ route('books.edit', $book->id) }}">Edit</a>

                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>


                