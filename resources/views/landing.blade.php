<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Portal Berita Smp Karya Muda</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/logokamu.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/logokamu.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#berita">Berita</a></li>
                        <li class="nav-item"><a class="nav-link" href="#Ekstrakulikuler">Ektrakulikuler</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Prestasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Siswa</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome to Our Website!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#berita">See More</a>
            </div>
        </header>
        <!-- Berita-->
        <section class="page-section" id="berita">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Berita</h2>
                    <h3 class="section-subheading text-muted">Berita Terkait Kegiatan di Smp Karya Muda</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                             <img src="assets/img/kerjabakti1.jpg" style="width: 120px; height: 120px; object-fit: cover; margin-bottom: 15px;">
                        </span>
                        <h4 class="my-3">Kerja Bakti</h4>
                        <p class="text-muted">Kerja Bakti pada April 2024 melibatkan seluruh warga sekolah dalam kegiatan gotong royong untuk menciptakan lingkungan yang bersih, rapi, dan nyaman.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <img src="assets/img/studibanding.jpg" style="width: 120px; height: 120px; object-fit: cover; margin-bottom: 15px;">
                        </span>
                        <h4 class="my-3">Studi Banding</h4>
                        <p class="text-muted">Studi Banding diadakan pada Mei 2024 sebagai sarana belajar langsung dari sekolah lain, memperluas wawasan dan pengalaman siswa maupun guru.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                                <img src="assets/img/latih tanding.jpg" style="width: 120px; height: 120px; object-fit: cover; margin-bottom: 15px;">
                        </span>
                        <h4 class="my-3">Latih Tanding</h4>
                        <p class="text-muted">Latih Tanding yang dilaksanakan pada Maret 2024 menjadi ajang untuk mengasah keterampilan siswa serta menumbuhkan semangat sportivitas dan kekompakan tim.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Ekstrakulikuler</h2>
                    <h3 class="section-subheading text-muted">Ekstrakulikuer yang ada di Smp Karya Muda</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/voli.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Voli</div>
                                <div class="portfolio-caption-subheading text-muted">Senin</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/basket.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Basket</div>
                                <div class="portfolio-caption-subheading text-muted">Selasa</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/futsal.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Futsal</div>
                                <div class="portfolio-caption-subheading text-muted">Rabu</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/pramuka.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pramuka</div>
                                <div class="portfolio-caption-subheading text-muted">Jumat</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/osis.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Osis</div>
                                <div class="portfolio-caption-subheading text-muted">Kamis</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/paskibra.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Paskibra</div>
                                <div class="portfolio-caption-subheading text-muted">Sabtu</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Prestasi</h2>
                    <h3 class="section-subheading text-muted">Prestasi Terbaru yang telah di raih</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/juara1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>10-09-2023</h4>
                                <h4 class="subheading">Juara 3 Futsal Putra Se-Banyuresmi</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Turnamen ini dilaksanakan di MA Karya muda dengan jenjang antar smp se-kecamatan banyuresmi  Garut dan mendapatkan Juara 3</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/juarabasket.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>14-03-2024</h4>
                                <h4 class="subheading">Juara 2 Basket Putra Se-Banyuresmi </h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Turnamen ini dilaksanakan di MA Karya muda dengan jenjang antar smp se-kecamatan banyuresmi  Garut dan mendapatkan juara 2</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/volijuara.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>20-07-2024</h4>
                                <h4 class="subheading">Juara 1 Voli Putra Se-Banyuresmi </h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Turnamen ini dilaksanakan di MA Karya muda dengan jenjang antar smp se-kecamatan banyuresmi  Garut dan mendapatkan juara 1</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/osnjuara.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4> Oktober 2024</h4>
                                <h4 class="subheading">Juara 3 OSN Matematika 2024</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Kejuaraan ini dilaksanakan di SMPN 2 Tarogong Kidul Garut, dengan jenjang antar smp se-kabupaten garut dan lomba ini diadakan setiap tahun</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Siswa Terbaik </h2>
                    <h3 class="section-subheading text-muted">Siswa Terbaik pada Tahun 2024</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/siswa1.png" alt="..." />
                            <h4>Dava A'raf</h4>
                            <p class="text-muted">Juara Umum</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/siswa3.png" alt="..." />
                            <h4>Aura Hasna</h4>
                            <p class="text-muted">Hapalan Alqur'an Terbanyak</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/siswa4.png" alt="..." />
                            <h4>Rifky Adriansyah</h4>
                            <p class="text-muted">Nilai Rapot tertinggi</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Dengan Adanya penghargaan ini semoga menambah semangat para siswa untuk melakukan yang terbaik dalam hal segala bidang yang bisa dikategorikan sebagai prestasi terbaik.</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Smp Karya Muda 2025</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">VOLI</h2>
                                    <p class="item-intro text-muted">Ekstrakulikuler Voli</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/volifoto.png" alt="..." />
                                    <p>Ekstrakurikuler bola voli dilaksanakan setiap hari Senin sebagai wadah pengembangan minat dan bakat siswa di bidang olahraga. Kegiatan ini tidak hanya melatih kemampuan fisik dan teknik bermain, tetapi juga menanamkan semangat sportivitas, kerjasama tim, dan disiplin. Melalui latihan rutin, siswa diharapkan mampu berprestasi baik di tingkat sekolah maupun luar sekolah.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Ketua Ekskul:</strong>
                                            Rizki Adriansyah
                                        </li>
                                        <li>
                                            <strong>Pelatih:</strong>
                                            Pa Irman Spd.i
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Basket</h2>
                                    <p class="item-intro text-muted">Ekstrakulikuler Basket.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/basketfoto.png" alt="..." />
                                    <p>Ekstrakurikuler basket dilaksanakan setiap hari Selasa. Kegiatan ini bertujuan untuk melatih ketangkasan, kerja sama tim, dan meningkatkan daya tahan fisik siswa melalui permainan bola basket yang menyenangkan dan kompetitif.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Ketua Ekskul:</strong>
                                            M.Rizki
                                        </li>
                                        <li>
                                            <strong>Pelatih:</strong>
                                            Pa Riswan Nadilas, Spd.
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Futsal</h2>
                                    <p class="item-intro text-muted">Ekstrakulikuler Futsal.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/futsalfoto.png" alt="..." />
                                    <p>Dilaksanakan setiap hari Rabu, ekstrakurikuler futsal menjadi pilihan favorit siswa yang gemar olahraga tim. Kegiatan ini membantu siswa meningkatkan koordinasi, strategi permainan, serta semangat sportivitas.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Ketua Ekskul:</strong>
                                            Akfa Rafi
                                        </li>
                                        <li>
                                            <strong>Pelatih:</strong>
                                            M Isran
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Pramuka</h2>
                                    <p class="item-intro text-muted">Eksrakulikuler Pramuka.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/pramukafoto.png" alt="..." />
                                    <p>Ekstrakurikuler pramuka berlangsung setiap hari Jumat dengan tujuan membentuk karakter siswa yang mandiri, bertanggung jawab, dan cinta alam melalui berbagai kegiatan kepramukaan yang seru dan edukatif.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Ketua Pramuka:</strong>
                                            Rafa
                                        </li>
                                        <li>
                                            <strong>Pembina:</strong>
                                            Pa Soni Subagja, Spd.i
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Osis</h2>
                                    <p class="item-intro text-muted">Ektrakulikuler Osis.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/osisfoto.png" alt="..." />
                                    <p>Setiap hari Kamis, anggota OSIS mengikuti kegiatan rutin yang difokuskan pada pengembangan kepemimpinan, manajemen organisasi, serta keterampilan komunikasi untuk mendukung kegiatan sekolah secara aktif.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Ketua OSIS:</strong>
                                            RIFKI
                                        </li>
                                        <li>
                                            <strong>Pembina:</strong>
                                            Pa Imam Maulana, Spd
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">PASKIBRA</h2>
                                    <p class="item-intro text-muted">Esktrakulikuler Paskibra.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/paskibrafoto.png" alt="..." />
                                    <p>Dilaksanakan setiap hari Sabtu, kegiatan paskibra melatih kedisiplinan, kekompakan, serta tanggung jawab siswa melalui latihan baris-berbaris dan persiapan upacara yang rutin dan terstruktur.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Ketua Pakibra:</strong>
                                            Zahira
                                        </li>
                                        <li>
                                            <strong>Pembina:</strong>
                                            Pa Ijang Supriantna, Spd
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
