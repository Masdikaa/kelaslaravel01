@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="card border-secondary">
            <div class="card-header text-center text-white bg-dark">
                <h3>Data Mahasiswa</h3>
            </div>
            <div class="card-body pt-4">

                <div class="d-flex justify-content-between mb-2">

                    <b>Data Kelas A</b>
                    <form action="/data-kelas-filter" method="get">
                        <select name="filterkelas" class="form-select form-select-sm" onchange="this.form.submit()">
                            <option>~Pilih Asal~</option>
                            <option value="Madiun">Madiun</option>
                            <option value="Ponorogo">Ponorogo</option>
                            <option value="Magetan">Magetan</option>
                        </select>
                    </form>

                </div>

                <table class="table stripe" id="example">
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
