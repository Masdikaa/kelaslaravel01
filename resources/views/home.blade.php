@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="card border-secondary">
            <div class="card-header text-center">
                <h3>Data Mahasiswa</h3>
                <h4>Kelas A</h4>
            </div>
            <div class="card-body pt-4">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Induk</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataKelasA as $kelasA)
                            <tr>
                                <td>{{ $kelasA->id }}</td>
                                <td>{{ $kelasA->no_induk }}</td>
                                <td>{{ $kelasA->nama }}</td>
                                <td>{{ $kelasA->alamat }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
