@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Tambah data mahasiswa</h2>
    <form method="POST" action="{{ '/mahasiswa/' . $mahasiswa->id }}">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $mahasiswa->nama }}">
            
        </div>
        <div class="mb-3">
            <label for="npm" class="form-label">npm</label>
            <input type="text" class="form-control" id="npm" name="npm" value="{{ $mahasiswa->npm }}">
            
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">prodi</label>
            <input type="text" class="form-control" id="prodi" name="prodi" value="{{ $mahasiswa->prodi }}">
            
        </div>
        <div class="mb-3">
            <label for="fakultas" class="form-label">fakultas</label>
            <input type="text" class="form-control" id="fakultas" name="fakultas" value="{{ $mahasiswa->fakultas }}">
            
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">jenis_kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                <option value="l" @if($mahasiswa->jenis_kelamin === 'l') echo selected @endif >laki-laki</option>
                <option value="p" @if($mahasiswa->jenis_kelamin === 'p') echo selected @endif>perempuan</option>
            </select>
            
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection