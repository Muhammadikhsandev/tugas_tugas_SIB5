<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 10; $i++) {
            DB::table('staff')->insert([
                'nip' => rand(),
                'name' => 'name_' . uniqid(),
                'gender' => Arr::random(['L', 'P']),
                'alamat' => 'alamat_' . uniqid(),
                'email' => uniqid() . '@gmail.com',
                'foto' => 'foto_' . uniqid(),
                'created_at' => now(),
                'updated_at' => null,
            ]);
        }
    }
}
