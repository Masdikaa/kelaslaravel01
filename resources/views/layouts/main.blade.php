<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- DATATABLES CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    {{-- DATATABLES JS --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    {{-- CUSTOM CSS --}}
    {{-- <link href="{{ asset('css/styles.css') }}" rel="stylesheet"> --}}

    <title>{{ $title }} | Kelas Laravel</title>
</head>

<body>

    {{-- Navbar --}}

    @include('partials.navbar')

    <div class="container-fluid">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        // new DataTable('#example');
        $(document).ready(function() {
            $('#example').DataTable({
                "language": {
                    "lengthMenu": "Menampilkan _MENU_ catatan",
                    "zeroRecords": "Data tidak ditemukan",
                    "info": "Halaman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Tidak ditemukan data",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": "Cari",
                    "paginate": {
                        "previous": "Sebelumnya", // Mengubah teks "Previous" menjadi "Sebelumnya"
                        "next": "Selanjutnya" // Mengubah teks "Next" menjadi "Selanjutnya"
                    }
                },
                "select": true, // Aktifkan fitur Selectbox
                columnDefs: [{
                    "width": "6%",
                    "targets": [0],
                }], // Mengecilkan kolom "no"
            });
        });
    </script>
</body>

</html>
