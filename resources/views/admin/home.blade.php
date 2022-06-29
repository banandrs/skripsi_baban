@extends('admin._partials.app')

@section('main-content')
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Dashboard
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="row row-cards">

                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="bg-blue text-white avatar">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
                                                    <path d="M12 3v3m0 12v3" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                Reservasi Foto
                                            </div>
                                            <div class="text-muted">
                                                {{ $reservasi }} - Reservasi
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--3-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="bg-twitter text-white avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-package" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3">
                                                    </polyline>
                                                    <line x1="12" y1="12" x2="20" y2="7.5">
                                                    </line>
                                                    <line x1="12" y1="12" x2="12" y2="21">
                                                    </line>
                                                    <line x1="12" y1="12" x2="4" y2="7.5">
                                                    </line>
                                                    <line x1="16" y1="5.25" x2="8" y2="9.75">
                                                    </line>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                Paket Foto
                                            </div>
                                            <div class="text-muted">
                                                {{ $paketFoto }} - Paket Foto
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--3-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="bg-facebook text-white avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-speakerphone" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M18 8a3 3 0 0 1 0 6"></path>
                                                    <path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5"></path>
                                                    <path
                                                        d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                Promo
                                            </div>
                                            <div class="text-muted">
                                                {{ $promosi }} - Promo
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--2-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="bg-red text-white avatar">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <circle cx="12" cy="7" r="4" />
                                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                </svg>

                                            </span>
                                        </div>
                                        <div class="col">
                                            <select class="form-select first-select" id="se" name="actors">
                                                {{-- <option selected="selected">Mahasiswa</option> --}}
                                                <option disabled selected value="">Pelanggan</option>
                                                <option value="{{ $userSiswa }}-Pelanggan">Siswa</option>
                                                <option value="{{ $userMahasiswa }}-Pelanggan">Mahasiswa</option>
                                                <option value="{{ $userWiraswasta }}-Pelanggan">Wiraswasta</option>
                                                <option value="{{ $userAsn }}-Pelanggan">ASN</option>
                                                <option value="{{ $userLainnya }}-Pelanggan">Lainnya</option>
                                            </select>
                                            <div class="text-muted" id="loc"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--2-->
                        {{-- <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="bg-blue text-white avatar">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <circle cx="12" cy="7" r="4" />
                                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                </svg>

                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                Siswa
                                            </div>
                                            <div class="text-muted">
                                                {{ $userSiswa }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!--2-->
                        {{-- <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="bg-yellow text-white avatar">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <circle cx="12" cy="7" r="4" />
                                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                </svg>

                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                Mahasiswa
                                            </div>
                                            <div class="text-muted">
                                                {{ $userMahasiswa }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!--2-->
                        {{-- <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="bg-orange text-white avatar">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <circle cx="12" cy="7" r="4" />
                                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                </svg>

                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                Wiraswasta
                                            </div>
                                            <div class="text-muted">
                                                {{ $userWiraswasta }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!--2-->
                        {{-- <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="bg-red text-white avatar">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <circle cx="12" cy="7" r="4" />
                                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                </svg>

                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                ASN
                                            </div>
                                            <div class="text-muted">
                                                {{ $userAsn }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!--2-->
                        {{-- <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="bg-green text-white avatar">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <circle cx="12" cy="7" r="4" />
                                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                </svg>

                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                Lainnya
                                            </div>
                                            <div class="text-muted">
                                                {{ $userLainnya }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <span class="bg-blue text-white avatar">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <circle cx="12" cy="7" r="4" />
                                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                            </svg>

                                        </span>
                                        <div class="ms-auto lh-1">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-muted" href="#"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">Pelanggan</a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" id="siswa" href="#">Siswa</a>
                                                    <a class="dropdown-item" id="mahasiswa" href="#">Mahasiswa</a>
                                                    <a class="dropdown-item" id="wiraswasta"
                                                        href="#">Wiraswasta</a>
                                                    <a class="dropdown-item" id="asn" href="#">ASN</a>
                                                </div>
                                            </div>
                                            <div class="ms-auto lh-1 h3 mb-3" id="lok"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#siswa').click(function() {
                $('#lok').text("{{ $userSiswa }}");
            });
            $('#mahasiswa').click(function() {
                $('#lok').text("{{ $userMahasiswa }}");
            });
            $('#wiraswasta').click(function() {
                $('#lok').text("{{ $userWiraswasta }}");
            });
            $('#asn').click(function() {
                $('#lok').text("{{ $userAsn }}");
            });
        });
    </script> --}}
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $("select").change(function() {
            document.getElementById("loc").innerHTML = document.getElementById("se").value;
        });
    </script>
@endsection
