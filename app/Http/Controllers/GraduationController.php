<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GraduationController extends Controller
{
    /**
     * Memproses pencarian data kelulusan berdasarkan NIS
     */
    public function check(Request $request)
    {
        // 1. Validasi input dari form
        $request->validate([
            'nis' => 'required|string'
        ]);

        // 2. Cari data siswa di database berdasarkan NIS
        $student = Student::where('nis', $request->nis)->first();

        // 3. Jika data tidak ditemukan, kembalikan ke halaman awal dengan pesan error
        if (!$student) {
            return back()->with('error', 'NIS Anda tidak ditemukan di sistem!');
        }

        // 4. Jika ditemukan, arahkan ke halaman hasil (result.blade.php) bawa data siswa
        return view('result', compact('student'));
    }

    /**
     * Memproses pengunduhan file SKL (Surat Keterangan Lulus)
     */
    public function downloadSKL($id)
    {
        // 1. Cari data siswa berdasarkan ID (bawaan dari tombol download)
        $student = Student::findOrFail($id);

        // 2. Proteksi Keamanan: Pastikan hanya siswa berstatus 'Lulus' yang bisa mengunduh
        if ($student->status !== 'Lulus') {
            return abort(403, 'Maaf, Anda tidak memiliki akses untuk mengunduh dokumen ini.');
        }

        // 3. Tentukan letak file PDF di folder storage/app/private/skl/
        // Format penamaan file yang disepakati: NIS.pdf (contoh: 2023242001.pdf)
        $fileName = 'skl/' . $student->nis . '.pdf';

        // 4. Cek apakah file fisik tersebut benar-benar ada di server
        if (Storage::disk('local')->exists($fileName)) {
            // Jika ada, proses unduh dan beri nama file yang rapi untuk siswa
            return Storage::disk('local')->download(
                $fileName, 
                "SKL_{$student->nis}_{$student->nama_lengkap}.pdf"
            );
        }

        // 5. Jika file fisik belum di-upload ke folder, kembalikan dengan pesan error
        return back()->with('error', 'Dokumen Surat Keterangan Lulus belum tersedia. Silakan hubungi admin sekolah.');
    }
}