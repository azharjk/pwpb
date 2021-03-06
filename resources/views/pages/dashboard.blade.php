@extends('master')

@section('title', 'Dashboard')

@section('content')
    <div class="card">
        <div class="card-header flex justify-content-between">
            <h4>Data Email</h4>
            <a class="btn btn-primary" href="/dashboard/input-data">Insert</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Suhu</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach ($perjalanan as $p)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $p['tanggal'] }}</td>
                            <td>{{ $p['lokasi_yang_dikunjungi'] }}</td>
                            <td>{{ $p['suhu'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
