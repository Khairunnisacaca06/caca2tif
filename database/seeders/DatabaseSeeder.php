<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name'              => 'uun',
            'email'             => 'uun@pcr.com',
            'password'          => bcrypt('123.321A'),
            'email_verified_at' => now(),
        ]); 
        Project::factory()
            ->count(30)
            ->hasTasks(30)
            ->create();
            $this->call(AkademikSeeder::class);
    }
}