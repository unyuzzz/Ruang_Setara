<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ruang Setara-Dashboard</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<!-- jQuery dan Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include('komponen.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                @include('komponen.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div> --}}

                    <!-- Deskripsi dan Tujuan AquaReach -->
                    <div class="row mb-4">
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Singkatnya si Ruang Setara</h6>
                                </div>
                                <div class="card-body">
                                    <p>"Ruang Setara" adalah inisiatif yang bertujuan untuk menciptakan ruang yang inklusif dan setara bagi semua individu, tanpa memandang latar belakang sosial, ekonomi, atau budaya. Melalui program ini, diharapkan tercipta suatu lingkungan yang mendukung keragaman dan mengedepankan partisipasi aktif dari semua anggota komunitas.</p>
                                    <h6 class="font-weight-bold">Harapan Ruang Setara :</h6>
                                    <ul>
                                        <li>Meningkatkan Kesadaran : Mendidik masyarakat tentang pentingnya inklusi dan keberagaman.</li>
                                        <li>Fasilitasi Komunikasi : Menyediakan platform bagi individu untuk berbagi pengalaman dan pandangan mereka.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- MOTIVASI HARIAN -->
                        <div class="row mb-4">
                            <div class="col-lg-12">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Motivasi Harian</h6>
                                    </div>
                                    <div class="card-body">
                                        <ul>
                                            <li>“Jangan takut gagal, karena kegagalan adalah guru terbaik untuk meraih kesuksesan.”</li>
                                            <li>“Mulailah dari hal kecil, karena langkah kecil yang konsisten akan membawa perubahan besar.”</li>
                                            <li>“Percaya pada dirimu sendiri, karena kamu lebih kuat dari yang kamu kira.”</li>
                                            <li>“Kerja keras mengalahkan bakat ketika bakat tidak bekerja keras.” – Tim Notke</li>
                                            <li>“Belajar bukan hanya untuk lulus ujian, tapi untuk mempersiapkan diri menghadapi tantangan hidup.”</li>
                                            <li>“Jangan pernah berhenti bermimpi, karena mimpi adalah awal dari pencapaian besar.”</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Artikel -->
                        <div class="col-lg-12 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Artikel terkait</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card mb-3">
                                                <img src="{{ asset('template/img/ums.png')}}" class="card-img-top" alt="Berita 1">
                                                <div class="card-body">
                                                    <h5 class="card-title">International Women's Day 2025 - Perjuangan Kolektif untuk Kesetaraan Gender</h5>
                                                    <p class="card-text">Artikel ini membahas tema IWD 2025 "Accelerate Action" yang mengajak percepatan <br>
                                                        gerakan kesetaraan gender dan feminisme global dengan pendekatan feminis interseksional. Ditekankan pentingnya edukasi strategis dan inklusif untuk mengatasi nilai misoginis yang terinternalisasi dalam masyarakat.</p>
                                                    <a href="https://news.ums.ac.id/id/03/2025/international-womens-day-2025-perjuangan-kolektif-untuk-kesetaraan-gender" 
                                                    class="btn btn-primary">Baca Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mb-3">
                                                <img src="{{ asset('template/img/hpi.png') }}" class="card-img-top" alt="Berita 2">
                                                <div class="card-body">
                                                    <h5 class="card-title">Hari Perempuan Internasional 2025 - Menyuarakan Kerentanan dan Kekerasan <br>
                                                        Berbasis Gender Online</h5>
                                                    <p class="card-text">Artikel ini mengangkat isu kekerasan berbasis gender online yang semakin <br>
                                                        mengkhawatirkan di Indonesia, dengan data kasus yang meningkat dan kebutuhan penegakan hukum serta literasi digital untuk melindungi perempuan di ruang digital</p>
                                                    <a href="https://www.combine.or.id/2025/03/08/hari-perempuan-internasional-2025-menyuarakan-kerentanan-dan-kekerasan-berbasis-gender-online/" 
                                                    class="btn btn-primary">Baca Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mb-3">
                                                <img src="{{ asset('template/img/tempo.png') }}" class="card-img-top" alt="Berita 2">
                                                <div class="card-body">
                                                    <h5 class="card-title">Hari Perempuan Internasional, Kesenjangan Gender Masih Ada</h5>
                                                    <p class="card-text">Dalam artikel ini dijelaskan bahwa kesenjangan gender masih menjadi <br>
                                                        tantangan besar di Indonesia, terutama dalam akses kesempatan, kesehatan, dan perlindungan. Konferensi nasional perempuan diadakan sebagai upaya kolaboratif lintas sektor untuk mendorong pemberdayaan dan kesetaraan gender</p>
                                                    <a href="https://www.tempo.co/gaya-hidup/hari-perempuan-internasional-kesenjangan-gender-masih-ada-1219835" 
                                                    class="btn btn-primary">Baca Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- bagian container komunitas --}}
                        <div class="col-lg-12 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Komunitas Kesetaraan Gender</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card mb-3">
                                                <img src="" class="card-img-top" alt="Berita 1">
                                                <div class="card-body">
                                                    <h5 class="card-title">FNM Society (Farid Nila Moeloek Society)</h5>
                                                    <p class="card-text">Komunitas ini berfokus pada pemberdayaan perempuan dan kesetaraan gender <br>
                                                        melalui kolaborasi lintas sektor, termasuk dengan UNFPA dan berbagai lembaga lainnya. Mereka menyelenggarakan Konferensi Nasional Perempuan 2025 sebagai upaya nyata memperjuangkan hak-hak perempuan.</p>
                                                    <a href="https://www.instagram.com/unfpaindonesia/reel/DHZ1JXyS9NM/" 
                                                    class="btn btn-primary">Baca Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mb-3">
                                                <img src="" class="card-img-top" alt="Berita 2">
                                                <div class="card-body">
                                                    <h5 class="card-title">AHF Indonesia (AIDS Healthcare Foundation Indonesia)</h5>
                                                    <p class="card-text">AHF Indonesia aktif dalam pemberdayaan perempuan dan remaja perempuan, khususnya terkait <br>
                                                        kesehatan, kesetaraan, dan perlindungan dari kekerasan berbasis gender. Mereka mengadakan acara dan advokasi seputar Hari Perempuan Internasional.</p>
                                                    <a href="https://kbr.id/ragam/ahf-indonesia-rayakan-hari-perempuan-internasional-2025-untuk-kesetaraan" 
                                                    class="btn btn-primary">Baca Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mb-3">
                                                <img src="" class="card-img-top" alt="Berita 2">
                                                <div class="card-body">
                                                    <h5 class="card-title">PUKAPS dan Southeast Asian Feminist Action Movement (SEAFAM)</h5>
                                                    <p class="card-text">PUKAPS merupakan komunitas feminis yang berkolaborasi dengan jaringan feminis regional SEAFAM, <br>
                                                         yang menghubungkan aktivis dari Indonesia, Malaysia, dan Filipina untuk memperluas gerakan kesetaraan gender.</p>
                                                    <a href="https://news.ums.ac.id/id/03/2025/international-womens-day-2025-perjuangan-kolektif-untuk-kesetaraan-gender/" 
                                                    class="btn btn-primary">Baca Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
                                                   