@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="card border-secondary">
            <div class="card-header text-center text-white bg-dark">
                <h3>Insert Data</h3>
            </div>
            <div class="card-body">
                {{-- FORM INPUT --}}
                <form class="mt-3" method="POST" action="store-data">

                    @csrf
                    <div class="form-group my-2">
                        <label class="font-weight-bold">No Induk</label>
                        <input type="text" name="no_induk" class="form-control">
                    </div>

                    <div class="form-group my-2">
                        <label class="font-weight-bold">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group my-2">
                        <label class="font-weight-bold">Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>

                </form>

            </div>
        </div>
    </div>
@endsection
