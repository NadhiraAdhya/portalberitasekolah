@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Tombol Kembali ke Dashboard -->
    <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">Kembali ke Dashboard</a>

    <h1>Daftar Berita</h1>
    <a href="{{ route('berita.create') }}" class="btn btn-primary mb-3">+ Tambah Berita</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($beritas as $berita)
            <tr>
                <td>{{ $berita->judul }}</td>
                <td>{{ $berita->created_at->format('d M Y') }}</td>
                <td>
                    @if($berita->image)
                        <img src="{{ asset('storage/' . $berita->image) }}" alt="Image" width="100px">
                    @else
                        <span>No Image</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
