@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')

<h2>Tambah Buku</h2>

<form action="{{ route('books.store') }}" method="POST">
    @csrf 

<div style="margin-bottom: 15px;" >
    <label style="display: block; margin-bottom: 5px; font-weight: bold;">Judul Buku</label>
    <input type="text" name="title" value="{{ old('title') }}">
    @error('title')
        <p style="color: red;">{{ $message }}</p>
    @enderror
</div>

<div style="margin-bottom: 15px;">
    <label style="display: block; margin-bottom: 5px; font-weight: bold;">Penulis</label>
    <input type="text" name="author" value="{{ old('author') }}">
    @error('author')
        <p style="color: red,">{{ $message }}</p>
    @enderror
</div>

<div style="margin-bottom: 15px;">
    <label style="display: block; margin-bottom: 5px; font-weight: bold;">Tahun Terbit</label>
    <input type="text" name="year" value="{{ old('year') }}">
    @error('year')
        <p style="color: red,">{{ $message }}</p>
    @enderror
</div>

<div style="margin-bottom: 15px;">
    <label style="display: block; margin-bottom: 5px; font-weight: bold;">Stok</label>
    <input type="text" name="stock" value="{{ old('stock') }}">
    @error('stock')
    <p style="color: red,">{{ $message }}</p>
    @enderror
</div>

    <br><br>

    <button type="submit">Simpan</button>

</form>

@endsection

    

