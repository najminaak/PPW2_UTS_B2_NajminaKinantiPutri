@extends('layouts.app')

@section('title', 'Daftar Pemain') 

@section('content')
    <h1 class="mt-4">Daftar Pemain</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pemain</th>
                <th>No Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemain as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_pemain }}</td>
                    <td>{{ $item->no_punggung }}</td>
                    <td>{{ $item->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
