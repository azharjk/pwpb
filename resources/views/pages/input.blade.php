@extends('master')

@section('title', 'Input Peduli Diri')

@section('content')
    <div class="card">
        <div class="card-header flex justify-content-between">
            <h4>Input Peduli Diri</h4>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="/simpan-perjalanan" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="id-user">Id User</label>
                                <input id="id-user" name="id-user" type="number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input id="tanggal" name="tanggal" type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lokasi-yang-dikunjungi">Lokasi yang dikunjungi</label>
                                <input id="lokasi-yang-dikunjungi" name="lokasi-yang-dikunjungi" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="suhu-tubuh">Suhu Tubuh</label>
                                <input id="suhu-tubuh" name="suhu-tubuh" type="number" class="form-control">
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        @endsection

