<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'John Doe',
                'birthday' => '2006-05-14',
                'gender' => 'Male',
                'grade' => '11 PPLG 1',
                'email' => 'john@example.com',
                'address' => 'Jl. Merdeka No.10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ambasing',
                'birthday' => '2007-02-20',
                'gender' => 'Male',
                'grade' => '11 PPLG 2',
                'email' => 'jane@example.com',
                'address' => 'Jl. Sudirman No.15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Michael Jackson',
                'birthday' => '2006-08-30',
                'gender' => 'Male',
                'grade' => '11 PPLG 3',
                'email' => 'michael@example.com',
                'address' => 'Jl. Diponegoro No.22',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Siti',
                'birthday' => '2007-01-05',
                'gender' => 'Female',
                'grade' => '11 PPLG 1',
                'email' => 'emily@example.com',
                'address' => 'Jl. Ahmad Yani No.7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kenta',
                'birthday' => '2006-11-12',
                'gender' => 'Male',
                'grade' => '11 PPLG 2',
                'email' => 'daniel@example.com',
                'address' => 'Jl. Gajah Mada No.3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
