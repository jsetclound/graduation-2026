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
                'nis' => '2023242001',
                'nama_lengkap' => 'Budi Santoso',
                'status' => 'Lulus',
                'nomor_skl' => '2023242001',
            ],
            [
                'nis' => '2023242002',
                'nama_lengkap' => 'Siti Aminah',
                'status' => 'Lulus',
                'nomor_skl' => '2023242002',
            ],
            [
                'nis' => '2023242003',
                'nama_lengkap' => 'Randi Kurniawan',
                'status' => 'Tidak Lulus',
                'nomor_skl' => '-', // Bisa diisi strip karena tidak lulus
            ],
            [
                'nis' => '2023242004',
                'nama_lengkap' => 'Dewi Lestari',
                'status' => 'Lulus',
                'nomor_skl' => '2023242003',
            ],
            [
                'nis' => '2023242005',
                'nama_lengkap' => 'Ahmad Fauzi',
                'status' => 'Tidak Lulus',
                'nomor_skl' => '-',
            ],
        ];

        foreach ($data as $student) {
            Student::create($student);
        }
    }
}
