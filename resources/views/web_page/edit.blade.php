@extends('layout.index')

@section('title', 'Tambah Data')
@section('PageTitle', 'Penambahan Data')

@section('TambahData')

<div class="container mt-4">
    <a href="{{ url('table') }}" class="btn btn-secondary"><< Kembali</a>
    <h2>Tambah Item Game</h2>
    <form action='{{ url('table/'.$database->nama_item) }}' method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="namaItem" class="form-label">Nama Item</label>
            <input type="text" class="form-control" name="nama_item" value="{{ $database->nama_item }}" id="harga_item">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" name="harga_item" value="{{ $database->harga_item }}" id="harga_item">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection