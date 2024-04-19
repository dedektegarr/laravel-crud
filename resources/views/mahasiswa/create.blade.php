@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Tambah data mahasiswa</h2>
    <form method="POST" action="/mahasiswa">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
            
        </div>
        <div class="mb-3">
            <label for="npm" class="form-label">npm</label>
            <input type="text" class="form-control" id="npm" name="npm">
            
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">prodi</label>
            <input type="text" class="form-control" id="prodi" name="prodi">
            
        </div>
        <div class="mb-3">
            <label for="fakultas" class="form-label">fakultas</label>
  
            <select name="fakultas" id="fakultas" class="form-control">
                @foreach($data_fakultas as $fakultas)
                    <option value="{{ $fakultas->id }}">{{$fakultas->nama_fakultas}}</option>
                @endforeach
            </select>
            
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">jenis_kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                <option value="l">laki-laki</option>
                <option value="p">perempuan</option>
            </select>
            
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection