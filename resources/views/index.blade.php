<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graduation Announcement | SMK Negeri 1 Cijati</title>

    {{-- icon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('public/images/logo/logo-smkn1cijati.png') }}">

    {{-- css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="main">

        <div class="px-4 pt-5 my-5 text-center border-bottom">
            <img src="{{ asset('images/logo/logo-smkn1cijati.png') }}" alt="SMK Negeri 1 Cijati" width="100"
                height="100" class="d-block mx-auto mb-4">
            <h1 class="display-4 fw-bold text-body-emphasis">
                Announcment of <br> <em>Graduation</em>
            </h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">
                    Portal resmi untuk pengumuman kelulusan siswa SMK Negeri 1 Cijati.
                    Masukkan nomor induk siswa (NIS) untuk melihat hasil kelulusan.
                </p>

                {{-- pesan error jika nis tidak ditemukan --}}
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Gagal!</strong> {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="d-flex justify-content-center mb-5">
                    <form action="{{ route('check.status') }}" method="post" class="col-12 col-sm-8 col-md-6 col-lg-6">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="number" name="nis" class="form-control" id="floatingInput"
                                placeholder="Masukkan NIS Anda" required>
                            <label for="floatingInput">Nomor Induk Siswa</label>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary btn-lg w-100">Cek Kelulusan</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="overflow-hidden" style="max-height: 30vh">
                <div class="container px-5">
                    <img src="{{ asset('public/images/TPC_4432.jpg') }}" class="img-fluid border rounded-3 shadow-lg mb-4"
                        alt="Example image" width="700" height="500" loading="lazy" />
                </div>
            </div>
        </div>
        <!-- end hero -->


    </div> <!-- end main -->

    {{-- js --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
