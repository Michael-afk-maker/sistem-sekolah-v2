<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
     public function index(){
        return "Ini adalah halaman daftar guru";
    }


    public function show(string $id){
        Return 'Menampilkan detail guru dengan ID: {$id}';
    }

    public function create(){
        return 'ini adalah halaman tanda guru';
    }

    public function edit(string $id){
        Return 'Ini adalah halaman edit guru dengan ID: {$id}';
    }

    public function store(){
        return 'Melakukan penmabahan data guru baru';
    }

    public function update(string $id){
        return 'Mengubah data guru dengan ID: {$id}';
    }

    public function destroy(string $id){
        return 'Menghapus data guru dengan ID: {$id}';
    }
}
