@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Tambah Prestasi</h1>
    <form action="{{ route('prestasi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="date">Tanggal</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $prestasi->date ?? '') }}">
        </div>
        <div class="form-group">
            <label for="judul">Judul Prestasi</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi Prestasi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan Prestasi</button>
    </form>
</div>
@endsection
