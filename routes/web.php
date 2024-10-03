<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/mahasiswa/{nilai}', function ($nilai) {
        $arrMahasiswa = ['Ruby Hoshino', "Yuki Asuna", "Shino Asada", "Alice Zuberg"];
        $jurusan = "Teknik Informatika";
        return view('universitas.mahasiswa', [
            "mahasiswa" => $arrMahasiswa,
            "jurusan" => $jurusan
        ])->with('nilai', $nilai);
    })->name('admin.mahasiswa');

    Route::get('/dosen/{nama}', function ($nama) {
        $arrDosen = ['Kayaba Akihiko', "Kikuoka Seijirou", "Nobuyuki Sugou", "Oberon"];
        
        $arrJurusanDosen = [
            [
                "nama" => "Kayaba Akihiko",
                "jurusan" => "Teknik Informatika"
            ],
            [
                "nama" => "Kikuoka Seijirou",
                "jurusan" => "Sistem Informasi"
            ],
            [
                "nama" => "Nobuyuki Sugou",
                "jurusan" => "Teknik Informatika"
            ],
            [
                "nama" => "Oberon",
                "jurusan" => "Sistem Informasi"
            ]
        ];
        
        return view('universitas.dosen')
        ->with('dosen', $arrDosen)
        ->with("jurusan", $arrJurusanDosen)
        ->with("nama", $nama);
    })->name('admin.dosen');


    Route::get('/karyawan', function () {
        return view('universitas.karyawan');
    })->name('admin.karyawan');

});


// Cara mengirim parameter ke view
// 1. Argument kedua dari view
// 2. Method with()

// Cara mengatur layout Blade Laravel
// 1. Include
// 2. Session Extend