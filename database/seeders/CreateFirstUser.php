<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateFirstUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'     => 'Admin',
            'email'    => 'amelia25ti@mahasiswa.pcr.ac.id',
            'password' => Hash::make('amelia25ti@mahasiswa.pcr.ac.id')
        ]);
    }
}
