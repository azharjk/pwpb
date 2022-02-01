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
                        <th scope="col">Nama</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Wali Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($biodata as $bio)
                        <tr>
                            <th scope="row">{{ $bio['id'] }}</th>
                            <td>{{ $bio['nama'] }}</td>
                            <td>{{ $bio['nis'] }}</td>
                            <td>{{ $bio['jurusan'] }}</td>
                            <td>{{ $bio['kelas'] }}</td>
                            <td>{{ $bio['wali_kelas'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
