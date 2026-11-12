<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurusan;
use App\Models\RuangKuliah;
use App\Models\Dosen;
use App\Models\MahasiswaAkademik;
use App\Models\MataKuliah;
use App\Models\Prasyarat;

class AkademikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Seed Jurusan
        Jurusan::create([
            'kd_jurusan'         => 'J01',
            'nama_jurusan'       => 'Teknik Informatika',
            'jenjang_pendidikan' => 'D4',
        ]);

        // 2. Seed Ruang Kuliah
        RuangKuliah::create([
            'kd_ruang'   => 'R301',
            'nama_ruang' => 'Lab 1',
            'kapasitas'  => 40,
        ]);

        // 3. Seed Dosen
        Dosen::create([
            'nip'           => '1990010101',
            'nama_dosen'    => 'Dr. Budi Santoso',
            'jenis_kelamin' => 'L',
            'alamat'        => 'Jl. Utama No. 12',
            'email'         => 'budi@pcr.ac.id',
            'telepon'       => '081234567890',
        ]);

        // 4. Seed Mahasiswa
        MahasiswaAkademik::create([
            'nim'            => '2255301001',
            'kd_jurusan'     => 'J01',
            'kd_ruang'       => 'R301',
            'nip'            => '1990010101',
            'nama_mahasiswa' => 'Caca Cantik',
            'jenis_kelamin'  => 'P',
            'angkatan'       => 2024,
            'alamat'         => 'Jl. Kampus No. 5',
            'email'          => 'caca@mahasiswa.pcr.ac.id',
            'telepon'        => '082198765432',
        ]);

        // 5. Seed Mata Kuliah
        MataKuliah::create([
            'kd_mk'      => 'MK101',
            'kd_ruang'   => 'R301',
            'nama_mk'    => 'Pemrograman Web',
            'semester'   => 3,
            'jumlah_sks' => 3,
            'prasyarat'  => 'MK100',
        ]);

        // 6. Seed Prasyarat
        Prasyarat::create([
            'id_prasyarat' => 'PR01',
            'mk_prasyarat' => 'Algoritma Pemrograman',
            'semester'     => 1,
            'jumlah_sks'   => 3,
        ]);
    }
}