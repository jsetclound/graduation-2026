<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kelulusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm max-w-md mx-auto" style="max-width: 500px;">
            <div class="card-body text-center">
                <h3 class="card-title mb-4">Pengumuman Kelulusan</h3>
                
                @if(session('error'))
                    <div class="alert alert-warning">
                        {{ session('error') }}
                    </div>
                @endif

                <p class="mb-1">Nama: <strong>{{ $student->nama_lengkap }}</strong></p>
                <p class="mb-4">NIS: <strong>{{ $student->nis }}</strong></p>

                @if($student->status == 'Lulus')
                    <div class="alert alert-success">
                        <h4>Selamat! Anda dinyatakan LULUS.</h4>
                    </div>
                    
                    <a href="{{ route('download.skl', $student->id) }}" class="btn btn-success w-100 mt-3">
                        Unduh Surat Keterangan Lulus (PDF)
                    </a>
                @else
                    <div class="alert alert-danger">
                        <h4>Maaf, Anda dinyatakan TIDAK LULUS.</h4>
                    </div>
                @endif

                <a href="{{ url('/') }}" class="btn btn-outline-secondary w-100 mt-3">
                    Kembali
                </a>
            </div>
        </div>
    </div>
</body>
</html>