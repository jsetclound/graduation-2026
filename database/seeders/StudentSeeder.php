<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nis' => '232410001',
                'nama_lengkap' => 'Abdul Fikri Hidayat',
                'gender' => 'Laki-laki',
                'ttl' => 'CIANJUR, 30 November 2007',
                'kelas' => 'XII APHP',
                'status' => 'Lulus',
                'nomor_skl' => '232410001',
            ],
            [
                'nis' => '232410002',
                'nama_lengkap' => 'ADIS ADELIA',
                'gender' => 'Perempuan',
                'ttl' => 'CIANJUR, 27 Juli 2007',
                'kelas' => 'XII APHP',
                'status' => 'Lulus',
                'nomor_skl' => '232410002',
            ],
            [
                'nis' => '232410003',
                'nama_lengkap' => 'AULIA',
                'gender' => 'Perempuan',
                'ttl' => 'CIANJUR, 18 April 2008',
                'kelas' => 'XII APHP',
                'status' => 'Lulus',
                'nomor_skl' => '232410003',
            ],
        ];

        foreach ($data as $student) {
            Student::create($student);
        }
    }
}
