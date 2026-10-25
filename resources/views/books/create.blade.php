@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')

<h2>Tambah Buku</h2>

<form action="{{ route('books.store') }}" method="POST">
    @csrf 

<div style="margin-bottom: 15px;" >
    <label style="display: block; margin-bottom: 5px; font-weight: bold;">Judul Buku</label>
    <input type="text" name="judul" value="{{ old('judul') }}">
    @error('judul')
        <p style="color: red;">{{ $message }}</p>
    @enderror
</div>

<div style="margin-bottom: 15px;">
    <label style="display: block; margin-bottom: 5px; font-weight: bold;">Penulis</label>
    <input type="text" name="penulis" value="{{ old('penulis') }}">
    @error('penulis')
        <p style="color: red,">{{ $message }}</p>
    @enderror
</div>

<div style="margin-bottom: 15px;">
    <label style="display: block; margin-bottom: 5px; font-weight: bold;">Tahun Terbit</label>
    <input type="text" name="tahun_terbit" value="{{ old('tahun_terbit') }}">
    @error('tahun_terbit')
        <p style="color: red,">{{ $message }}</p>
    @enderror
</div>

<div style="margin-bottom: 15px;">
    <label style="display: block; margin-bottom: 5px; font-weight: bold;">Stok</label>
    <input type="text" name="stok" value="{{ old('stok') }}">
    @error('stok')
    <p style="color: red,">{{ $message }}</p>
    @enderror
</div>

<div class="mb-3">
    <label for="category_id" class="form-label">Kategori Buku</label>
    <select name="category_id" id="category_id" class="form-control" required>
        <option value="">-- Pilih Kategori --</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ (isset($book) && $book->category_id == $category->id) ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    @error('category_id')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

    <br><br>

    <button type="submit">Simpan</button>

</form>

@endsection

    

