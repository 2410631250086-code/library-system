@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')

<h2>Edit Buku</h2>

<form action="{{ route('books.update', $book) }}" method="POST">
    @csrf 
    @method('PUT')

    <p>Judul Buku</p>
    <input tye="text" name="title" value="{{ $book->judul }}">

     <p>Penulis</p>
    <input type="text" name="author" value="{{ $book->penulis }}">

    <p>Tahun Terbit</p>
    <input type="number" name="year" value="{{ $book->tahun_terbit }}">

    <p>Stok</p>
    <input type="number" name="stock" value="{{ $book->stok }}">

    <br><br>

    <button type="submit">Update</button>

</form>

@endsection