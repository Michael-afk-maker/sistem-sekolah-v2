<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return "Ini adalah halaman daftar siswa";
    }


    public function show(string $id){
        Return 'Menampilkan detail siswa dengan ID: {$id}';
    }

    public function create(){
        return 'ini adalah halaman tanda siswa';
    }

    public function edit(string $id){
        Return 'Ini adalah halaman edit siswa dengan ID: {$id}';
    }

    public function store(){
        return 'Melakukan penmabahan data siswa baru';
    }

    public function update(string $id){
        return 'Mengubah data siswa dengan ID: {$id}';
    }

    public function destroy(string $id){
        return 'Menghapus data siswa dengan ID: {$id}';
    }
}