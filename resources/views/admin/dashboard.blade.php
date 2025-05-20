<?php
public function dashboard()
{
    return view('admin.dashboard'); // arahkan ke view dashboard admin
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap (CDN) -->
    <!-- Tambahkan di bagian <head> layout -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/admin/dashboard') }}">Portal Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-4">
        <div class="container">
            <div class="text-center mt-4 mb-5">
                <h2>Selamat Datang di Halaman Admin</h2>
                <p class="text-muted">Kelola konten berita dan prestasi sekolah dengan mudah.</p>
            </div>

            <div class="row">
                <!-- Kelola Berita -->
                <div class="col-md-6 mb-4">
                    <div class="card border-primary shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-newspaper fa-3x text-primary mb-3"></i>
                            <h5>Kelola Berita</h5>
                            <p>Tambah atau edit berita kegiatan sekolah.</p>
                            <a href="{{ url('/admin/berita') }}" class="btn btn-primary">Masuk</a>
                        </div>
                    </div>
                </div>

                <!-- Kelola Prestasi -->
                <div class="col-md-6 mb-4">
                    <div class="card border-success shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-trophy fa-3x text-success mb-3"></i>
                            <h5>Kelola Prestasi</h5>
                            <p>Input dan update data prestasi siswa.</p>
                            <a href="{{ url('/admin/prestasi') }}" class="btn btn-success">Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Dashboard Admin</h1>

    {{-- SECTION BERITA --}}
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
                                <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
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
            @extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>{{ isset($berita) ? 'Edit Berita' : 'Tambah Berita' }}</h2>
    <form action="{{ isset($berita) ? route('berita.update', $berita->id) : route('berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($berita))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" id="judul" value="{{ old('judul', $berita->judul ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea name="isi" id="isi" class="form-control" rows="5" required>{{ old('isi', $berita->isi ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="gambar" class="form-control" id="gambar" {{ isset($berita) ? '' : 'required' }}>
            @if(isset($berita) && $berita->gambar)
                <p class="mt-2">Gambar Saat Ini:</p>
                <img src="{{ asset('uploads/berita/' . $berita->gambar) }}" width="150">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($berita) ? 'Update' : 'Simpan' }}</button>
    </form>
</div>
@endsection


    {{-- SECTION PRESTASI --}}
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
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
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
        @extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>{{ isset($prestasi) ? 'Edit prestasi' : 'Tambah prestasi' }}</h2>
    <form action="{{ isset($prestasi) ? route('prestasi.update', $prestasi->id) : route('prestasis.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($prestasi))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" id="judul" value="{{ old('judul', $berita->judul ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea name="isi" id="isi" class="form-control" rows="5" required>{{ old('isi', $prestasi->isi ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="gambar" class="form-control" id="gambar" {{ isset($berita) ? '' : 'required' }}>
            @if(isset($berita) && $berita->gambar)
                <p class="mt-2">Gambar Saat Ini:</p>
                <img src="{{ asset('uploads/berita/' . $berita->gambar) }}" width="150">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($prestasi) ? 'Update' : 'Simpan' }}</button>
    </form>
</div>
@endsection


    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
