@extends('master')

@section('title', 'Input Dashboard')

@section('content')
    <div class="card">
        <div class="card-header flex justify-content-between">
            <h4>Input Biodata</h4>
            {{-- <a class="btn btn-primary" href="/dashboard/input-data">Insert</a> --}}
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="/simpan-perjalanan" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Tanggal</label>
                                <input id="nama" name="tanggal" type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nis">Lokasi</label>
                                <input id="nis" name="lokasi-yang-dikunjungi" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="suhu">Suhu</label>
                                <input id="suhu" name="suhu" type="number" class="form-control">
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
