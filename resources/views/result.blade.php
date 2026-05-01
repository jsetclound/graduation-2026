<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    {{-- icon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo/logo-smkn1cijati.png') }}">

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

            @if (session('error'))
                <div class="alert alert-warning">
                    {{ session('error') }}
                </div>
            @endif

            <div class="col-12 col-md-8 col-lg-6 mx-auto mb-3">
                @if ($student->status == 'Lulus')
                    <!-- card success-->
                    <div class="card border-success text-center shadow p-3 mb-5 bg-body-tertiary rounded">
                        <div class="card-body text-success">
                            <!-- alert -->
                            <div class="alert alert-info" role="alert">
                                <strong>Anda dinyatakan Lulus!</strong>
                            </div>
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">{{ $student->nama_lengkap }}</div>
                                    </div>
                                    <span class="badge bg-info rounded-pill">Nama</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">{{ $student->nis }}</div>
                                    </div>
                                    <span class="badge bg-info rounded-pill">NIS</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Subheading</div>
                                    </div>
                                    <span class="badge text-bg-info rounded-pill">TTL</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Subheading</div>
                                    </div>
                                    <span class="badge text-bg-info rounded-pill">Kelas</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Subheading</div>
                                    </div>
                                    <span class="badge text-bg-info rounded-pill">Status</span>
                                </li>
                            </ol>
                        </div>

                        <!-- button -->
                        <div class="d-grid gap-2">
                            <a href="{{ route('download.skl', $student->id) }}" class="btn btn-primary" type="button">Unduh Surat Keterangan Lulus (PDF)</a>
                            <a href="{{ url('/') }}" class="btn btn-secondary" type="button">Kembali</a>
                        </div>

                    </div>
                    <!-- end card success-->
                @else
                    <!-- card danger-->
                    <div class="card border-danger text-center shadow p-3 mb-5 bg-body-tertiary rounded">
                        <div class="card-body text-danger">
                            <!-- alert -->
                            <div class="alert alert-danger" role="alert">
                                <strong>Kelulusan Anda ditangguhkan!</strong>
                            </div>
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">{{ $student->nama_lengkap }}</div>
                                    </div>
                                    <span class="badge bg-danger rounded-pill">Nama</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">{{ $student->nis }}</div>
                                    </div>
                                    <span class="badge bg-danger rounded-pill">NIS</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Subheading</div>
                                    </div>
                                    <span class="badge text-bg-danger rounded-pill">TTL</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Subheading</div>
                                    </div>
                                    <span class="badge text-bg-danger rounded-pill">Kelas</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Subheading</div>
                                    </div>
                                    <span class="badge text-bg-danger rounded-pill">Status</span>
                                </li>
                            </ol>
                        </div>

                        <!-- button -->
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-danger disabled"
                                type="button">File tidak tersedia</a>
                            <a href="{{url('/')}}" class="btn btn-secondary" type="button">Kembali</a>
                        </div>
`
                    </div>
                    <!-- end card danger-->
                @endif

                <div class="overflow-hidden" style="max-height: 30vh">
                    <div class="container px-5">
                        <img src="{{ asset('images/TPC_4432.jpg') }}" class="img-fluid border rounded-3 shadow-lg mb-4"
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
