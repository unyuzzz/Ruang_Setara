<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Pengaduan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet"> {{-- sesuaikan dengan struktur file-mu --}}
  </head>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

      @include('komponen.sidebar') {{-- masukkan sidebar --}}

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
          <div class="container-fluid">
            @include('komponen.pesan') {{-- pesan flash --}}
            @yield('content') {{-- konten dinamis --}}
          </div>
      </div>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script> {{-- jika pakai SB Admin --}}
  </body>
</html>
