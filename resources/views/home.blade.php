@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="card border-secondary">
            <div class="card-header text-center">
                <h3>Data Mahasiswa</h3>
                <h4>Kelas A</h4>
            </div>
            <div class="card-body">
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
                        <tr>
                            <th>1</th>
                            <td>213307015</td>
                            <td>Masdika Ilhan Mansiz</td>
                            <td>Ponorogo</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
