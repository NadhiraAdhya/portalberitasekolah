@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Tombol Kembali ke Dashboard -->
    <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">Kembali ke Dashboard</a>

    <h1>Daftar Prestasi</h1>
    <a href="{{ route('prestasi.create') }}" class="btn btn-primary mb-3">+ Tambah Prestasi</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tanggal</th>  <!-- Menambahkan kolom Tanggal -->
                <th>Judul</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prestasis as $prestasi)

            <tr>

                <td>{{ \Carbon\Carbon::parse($prestasi->date)->format('d M Y') }}</td> <!-- Menampilkan tanggal -->
                <td>{{ $prestasi->judul }}</td>
                <td>
                    @if($prestasi->image)
                        <img src="{{ asset('storage/' . $prestasi->image) }}" alt="Image" width="100px">
                    @else
                        <span>No Image</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('prestasi.edit', $prestasi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('prestasi.destroy', $prestasi->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus prestasi ini?')">
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
