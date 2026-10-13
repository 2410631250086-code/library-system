@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')

<h2>Tambah Buku</h2>

<form action="{{ route('books.store') }}" method="POST">
    @csrf 

    <p>Judul Buku</p>
    <input type="text" name="title">

    <p>Penulis</p>
    <input type="text" name="author">

    <p>Tahun Terbit</p>
    <input type="text" name="year">

    <p>Stok</p>
    <input type="text" name="stock">

    <br><br>

    <button type="submit">Simpan</button>

</form>

@endsection

    

