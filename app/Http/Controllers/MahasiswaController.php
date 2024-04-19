<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        // ambil dulu data dari database
        $mahasiswa = Mahasiswa::all();

        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    public function store(Request $request) {
        // fungsi insert data
        Mahasiswa::create($request->all());

        return redirect('mahasiswa');
    }

    public function create() {
        $data_fakultas = Fakultas::all();

        return view('mahasiswa.create', ['data_fakultas' => $data_fakultas]);
    }

    public function edit($id) {
        // ambil 1 mahasiswa berdasarkan id
        $mahasiswa = Mahasiswa::find($id);

        return view('mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request, $id) {
    // ambil data mahasiswa yang ingin di update by id
    $mahasiswa = Mahasiswa::find($id);

    // update data nya
    $mahasiswa->update($request->all())    ;

        return redirect('mahasiswa');
    }

    public function delete($id) {
        // fungsi delete data 
        $mahasiswa = Mahasiswa::find($id);

        $mahasiswa->delete();

        return redirect('mahasiswa');
    }
}
