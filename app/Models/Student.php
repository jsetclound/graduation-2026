<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * Tentukan nama tabel jika berbeda dengan jamak nama model (opsional).
     * Secara default Laravel akan menganggap tabelnya bernama 'students'.
     */
    protected $table = 'students';

    /**
     * Kolom yang diperbolehkan untuk diisi secara massal (Mass Assignment).
     * Ini penting agar fitur create/update data nantinya berfungsi.
     */
    protected $fillable = [
        'nis',
        'nama_lengkap',
        'status',
        'nomor_skl', // Tambahkan ini!
    ];

    /**
     * Jika kamu ingin menggunakan NIS sebagai identifier utama di URL (opsional),
     * kamu bisa menambahkan method ini. Tapi untuk logika controller yang
     * kita buat sebelumnya, ini belum wajib.
     */
    public function getRouteKeyName()
    {
        return 'nis';
    }
}