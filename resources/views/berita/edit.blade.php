@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Edit Berita</h1>
    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')  <!-- Menggunakan metode PUT untuk update data -->
        
        <div class="form-group">
            <label for="judul">Judul Berita</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ $berita->judul }}" required>
        </div>

        <div class="form-group">
            <label for="isi">Isi Berita</label>
            <textarea name="isi" id="isi" class="form-control" rows="4" required>{{ $berita->isi }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" name="image" id="image" class="form-control">
            @if($berita->image)
                <img src="{{ asset('storage/' . $berita->image) }}" alt="Image" width="150px" class="mt-2">
            @endif
        </div>

        <button type="submit" class="btn btn-primary mt-3">Perbarui Berita</button>
    </form>
</div>
@endsection
