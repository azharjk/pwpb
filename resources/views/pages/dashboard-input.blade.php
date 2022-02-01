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
                        <form action="/dashboard/input-data/post" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input id="nama" name="nama" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nis">NIS</label>
                                <input id="nis" name="nis" type="number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select id="jurusan" name="jurusan" class="form-control">
                                    <option>Pilih Jurusan</option>
                                    <option>RPL</option>
                                    <option>TKJ</option>
                                    <option>MM</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <select id="kelas" name="kelas" class="form-control">
                                    <option>Pilih Kelas</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="wali-kelas">Wali Kelas</label>
                                <select id="wali-kelas" name="wali-kelas" class="form-control">
                                    <option>Pilih Wali Kelas</option>
                                    <option>Bu Pratiwi</option>
                                    <option>Bu Mayati</option>
                                    <option>Pak Asur</option>
                                </select>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
