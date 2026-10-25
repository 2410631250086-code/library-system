@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')

<h2>Edit Buku</h2>

<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

<div style="margin-bottom: 15px;">
        <label style="display: block; margin-bottom: 5px; font-weight: bold;">Judul Buku</label>
        <input type="text" name="judul" value="{{ old('judul', $book->judul) }}" style="width: 200px; padding: 5px;">
        @error('judul')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div style="margin-bottom: 15px;">
        <label style="display: block; margin-bottom: 5px; font-weight: bold;">Penulis</label>
        <input type="text" name="penulis" value="{{ old('penulis', $book->penulis) }}" style="width: 200px; padding: 5px;">
        @error('penulis')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div style="margin-bottom: 15px;">
        <label style="display: block; margin-bottom: 5px; font-weight: bold;">Tahun Terbit</label>
        <input type="text" name="tahun_terbit" value="{{ old('tahun_terbit', $book->tahun_terbit) }}" style="width: 200px; padding: 5px;">
        @error('tahun_terbit')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div style="margin-bottom: 15px;">
        <label style="display: block; margin-bottom: 5px; font-weight: bold;">Stok</label>
        <input type="text" name="stok" value="{{ old('stok', $book->stok) }}" style="width: 200px; padding: 5px;">
        @error('stok')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div style="margin-bottom: 15px;">
        <label style="display: block; margin-bottom: 5px; font-weight: bold;">Kategori Buku</label>
        <select name="category_id" id="category_id" style="width: 200px; padding: 5px;" required>
            <option value="">-- Pilih Kategori --</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ (old('category_id', $book->category_id) == $category->id) ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <br>
    <button type="submit">Update</button>
</form>

@endsection