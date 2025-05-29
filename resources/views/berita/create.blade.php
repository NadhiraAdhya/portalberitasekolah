@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Tambah Berita</h1>
    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="judul">Judul Berita</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="isi">Isi Berita</label>
            <textarea name="isi" id="isi" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan Berita</button>
    </form>
</div>
@endsection
