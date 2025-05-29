<!-- Berita-->
<section class="page-section" id="berita">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Berita</h2>
            <h3 class="section-subheading text-muted">Berita Terkait Kegiatan di Smp Karya Muda</h3>
        </div>
        <div class="row text-center">
            @foreach($beritas as $berita)
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $berita->image) }}" style="width: 120px; height: 120px; object-fit: cover; margin-bottom: 15px;">
                    <h4 class="my-3">{{ $berita->judul }}</h4>
                    <p class="text-muted">{{ $berita->deskripsi }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Prestasi-->
<section class="page-section" id="prestasi">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Prestasi</h2>
            <h3 class="section-subheading text-muted">Prestasi Terbaru yang telah di raih</h3>
        </div>
        <div class="timeline">
            @foreach($prestasis as $prestasi)
                <div class="timeline-item">
                    <h4>{{ $prestasi->tanggal }}</h4>
                    <h5>{{ $prestasi->judul }}</h5>
                    <p>{{ $prestasi->deskripsi }}</p>
                    <img src="{{ asset('storage/' . $prestasi->image) }}" alt="Image" width="100px">
                </div>
            @endforeach
        </div>
    </div>
</section>
