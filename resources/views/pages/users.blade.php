@extends('master')

@section('title', 'Users')

@section('content')
    <div class="card">
        <div class="card-header flex justify-content-between">
            <h4>Data Users</h4>
            {{-- <a class="btn btn-primary" href="/dashboard/input-data">Insert</a> --}}
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama lengkap</th>
                        <th scope="col">NIK</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($users as $u)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $u['name'] }}</td>
                            <td>{{ $u['password'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
