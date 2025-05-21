@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center">Prestasi Terbaru</h2>
        <div class="row">
            @foreach($prestasis as $prestasi)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $prestasi->image_path) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $prestasi->name }}</h5>
                            <p class="card-text">{{ \Str::limit($prestasi->description, 100) }}</p>
                            <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
