@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Tombol Kembali ke Portal Berita (Landing Page) -->
    <a href="{{ url('/#service') }}" class="btn btn-secondary mb-3">Kembali ke Portal Berita</a>

    <!-- Tombol Logout -->
    <form action="{{ route('logout') }}" method="POST" class="d-inline">
        @csrf
        <button type="submit" class="btn btn-danger mb-3">Logout</button>
    </form>

    <h1>Dashboard Admin</h1>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Daftar Berita</span>
            <a href="{{ route('berita.create') }}" class="btn btn-sm btn-primary">+ Tambah Berita</a>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($beritas as $berita)
                    <tr>
                        <td>{{ $berita->judul }}</td>
                        <td>{{ $berita->created_at->format('d M Y') }}</td>
                        <td>
                            <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @if($beritas->isEmpty())
                    <tr>
                        <td colspan="3" class="text-center">Belum ada berita.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <!-- Daftar Prestasi (contoh) -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Daftar Prestasi</span>
            <a href="{{ route('prestasi.create') }}" class="btn btn-sm btn-primary">+ Tambah Prestasi</a>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($prestasis as $prestasi)
                    <tr>
                        <td>{{ $prestasi->judul }}</td>
                        <td>{{ $prestasi->created_at->format('d M Y') }}</td>
                        <td>
                            <a href="{{ route('prestasi.edit', $prestasi->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('prestasi.destroy', $prestasi->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @if($prestasis->isEmpty())
                    <tr>
                        <td colspan="3" class="text-center">Belum ada prestasi.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
