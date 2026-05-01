<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Kelulusan Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Portal Pengumuman Kelulusan</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-center mb-4">Silakan masukkan Nomor Induk Siswa (NIS) Anda untuk melihat status kelulusan.</p>
                       
                        {{-- pesan error jika nis tidak ditemukan --}}
                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Gagal!</strong> {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('check.status') }}" method="POST">
                            
                            @csrf

                            <div class="mb-3">
                                <label for="nis" class="form-label fw-bold">Nomor Induk Siswa (NIS)</label>
                                <input type="text" class="form-control" id="nis" name="nis" required placeholder="Contoh: 12345">
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Cek Hasil Kelulusan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>