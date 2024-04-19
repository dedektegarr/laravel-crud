@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="text-2xl font-bold">Data mahasiswa</h3>
        <a href="/mahasiswa/create" class="btn btn-primary">Tambah Mahasiswa</a>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">NPM</th>
                <th scope="col">Nama</th>
                <th scope="col">Prodi</th>
                <th scope="col">Fakultas</th>
                <th scope="col">Jenis_kelamin</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswa as $mhs)
                <tr>
                    <th scope="row">{{ $loop->iteration}}</th>
                    <td>{{ $mhs->npm }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->prodi }}</td>
                    <td>{{ $mhs->fakultas }}</td>
                    <td>{{ $mhs->jenis_kelamin }}</td>
                    <td>
                        <a href="{{ '/mahasiswa/' . $mhs->id }}" class="btn btn-sm btn-warning">Edit</a>
                        <form method="POST" action="{{ '/mahasiswa/' . $mhs->id }}" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection