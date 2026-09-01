@extends('layout.app')

@push('styles')
    <style>
        .slick-prev:before,
        .slick-next:before {
            color: #333
        }
    </style>
@endpush

@section('content')
    <header class="navbar navbar-expand-md d-print-none">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- BEGIN NAVBAR LOGO -->
            <a href="/" aria-label="Tabler" class="navbar-brand navbar-brand-autodark me-3">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOCvNa3r_hszq7pPtvOQKKYOepdqMsD5tJapqoyZoiAA&s=10"
                    width="50" height="32" class="navbar-brand-image" alt="Tabler" />
                E-books
            </a>
            <!-- END NAVBAR LOGO -->

            <div class="navbar-nav mx-auto w-50 align-items-center flex-row">
                {{-- Dropdown Kategori --}}
                <div class="dropdown me-2">
                    <a href="#" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">Kategori</a>
                    <div class="dropdown-menu dropdown-menu-card" style="min-width: 600px">
                        <div class="p-2">
                            <div class="row g-2">
                                <div class="col-3">
                                    <div class="card py-2">
                                        <div class="card-body p-2 text-center">
                                            <a href="#" class="text-reset d-block">Kategori 1</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card py-2">
                                        <div class="card-body p-2 text-center">
                                            <a href="#" class="text-reset d-block">Kategori 2</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card py-2">
                                        <div class="card-body p-2 text-center">
                                            <a href="#" class="text-reset d-block">Kategori 3</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card py-2">
                                        <div class="card-body p-2 text-center">
                                            <a href="#" class="text-reset d-block">Kategori 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Search Bar --}}
                <div class="input-icon w-100">
                    <input type="text" class="form-control form-control-rounded"
                        placeholder="Cari judul, produk, buku, penulis..." />
                    <span class="input-icon-addon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="10" cy="10" r="7" />
                            <line x1="21" y1="21" x2="15" y2="15" />
                        </svg>
                    </span>
                </div>

                {{-- Icon Keranjang --}}
                <div class="ms-3">
                    <a href="#" class="text-dark">
                        <i class="fa-solid fa-cart-arrow-down fs-3"></i>
                    </a>
                </div>
            </div>

            <div class="navbar-nav flex-row order-md-last ms-auto gap-2">
                <a href="#" class="btn btn-primary">Masuk</a>
                <a href="#" class="btn btn-light">Daftar</a>
            </div>
        </div>
    </header>

    <div class="container py-4">
        {{-- Carousel Section --}}
        <div id="carousel-sample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel-sample" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carousel-sample" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carousel-sample" data-bs-slide-to="2"></button>
            </div>
            {{-- BENNER --}}
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" alt="Slide 1"
                        src="https://i.pinimg.com/1200x/73/50/21/735021466854bdb9e12de64f7e2cc31a.jpg" />
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="Slide 2"
                        src="https://i.pinimg.com/1200x/4a/da/6b/4ada6baba6477cc995daffa5809b7bcb.jpg" />
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="Slide 3"
                        src="https://i.pinimg.com/1200x/c3/bd/77/c3bd77bb053a1d50a3dbcd92e5eb54c7.jpg" />
                </div>
            </div>
            <a class="carousel-control-prev" data-bs-target="#carousel-sample" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" data-bs-target="#carousel-sample" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>

        {{-- Paket Langganan Section --}}
        <div class="mt-4 mb-3">
            <div class="d-flex align-items-center gap-2">
                <span class="badge bg-yellow text-yellow-fg p-2"><i class="fa-solid fa-crown fs-3"></i></span>
                <h2 class="m-0 text-dark">Paket Langganan</h2>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100" style="background: linear-gradient(135deg, #ffffff 0%, #a7f1c5 100%);">
                    <div class="card-body row align-items-center">
                        <div class="col-4"></div>
                        <div class="col-8 text-center text-dark">
                            <h2 class="fw-bold m-0">NON FICTION</h2>
                            <p class="text-secondary fw-bold m-0">PACKAGE</p>
                            <div>
                                Rp<span class="fs-1 fw-bold text-warning">49.000</span>
                                <div>
                                    <span class="text-secondary fw-bold">30 DAYS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100" style="background: linear-gradient(135deg, #ffffff 0%, #77a9f3 100%);">
                    <div class="card-body row align-items-center">
                        <div class="col-4"></div>
                        <div class="col-8 text-center text-dark">
                            <h2 class="fw-bold m-0">FICTION</h2>
                            <p class="text-secondary fw-bold m-0">PACKAGE</p>
                            <div>
                                Rp<span class="fs-1 fw-bold text-warning">79.000</span>
                                <div>
                                    <span class="text-secondary fw-bold">30 DAYS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100" style="background: linear-gradient(135deg, #ffffff 0%, #8f45e4 100%);">
                    <div class="card-body row align-items-center">
                        <div class="col-4"></div>
                        <div class="col-8 text-center text-dark">
                            <h2 class="fw-bold text-white m-0">ALL ACCESS</h2>
                            <p class="text-light fw-bold m-0">PACKAGE</p>
                            <div class="text-white">
                                Rp<span class="fs-1 fw-bold text-warning">149.000</span>
                                <div>
                                    <span class="text-light fw-bold">30 DAYS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Buku Baru Dirilis Section --}}
        <div class="mt-5">
            <div class="d-flex align-items-center gap-2 mb-3">
                <span class="badge bg-blue text-blue-fg p-2"><i class="fa-solid fa-book fs-3"></i></span>
                <h2 class="m-0 text-dark">Buku Baru Dirilis</h2>
            </div>
            {{-- DAFTAR BUKU BARiS 1 --}}
            <div id="wrapper-slider" class="row">
                <div class="col-md-3 px-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <img class="d-block w-100 mb-3 rounded" alt="Book Cover"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxJCyBFfRVFNO5ZKpnBB-jFyS8nV-xFMMYUXjPKd_JDg&s=10" />
                            <div class="d-flex gap-2 mb-2">
                                <span class="badge bg-blue-lt"><i class="fa-solid fa-mobile me-1"></i>PDF</span>
                                <span class="badge bg-secondary-lt">3+</span>
                            </div>
                            <div>
                                <h5 class="text-secondary mb-1">Tere Liye</h5>
                                <h3 class="card-title mb-2">Bumi</h3>
                                <h4 class="text-primary fw-bold fs-3">Rp 49.000</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 px-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <img class="d-block w-100 mb-3 rounded" alt="Book Cover"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqB5patwJUgfpirzbGQSVJ49Wd9u9O5mY6_pnbNTEIvQ&s=10" />
                            <div class="d-flex gap-2 mb-2">
                                <span class="badge bg-blue-lt"><i class="fa-solid fa-mobile me-1"></i>PDF</span>
                                <span class="badge bg-secondary-lt">3+</span>
                            </div>
                            <div>
                                <h5 class="text-secondary mb-1">Tere Liye</h5>
                                <h3 class="card-title mb-2">Bulan</h3>
                                <h4 class="text-primary fw-bold fs-3">Rp 49.000</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 px-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <img class="d-block w-100 mb-3 rounded" alt="Book Cover"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReQnmXGCVdDG4RnafSgcSGY1Fp57iT8B8poOhlnUjccg&s=10" />
                            <div class="d-flex gap-2 mb-2">
                                <span class="badge bg-blue-lt"><i class="fa-solid fa-mobile me-1"></i>PDF</span>
                                <span class="badge bg-secondary-lt">3+</span>
                            </div>
                            <div>
                                <h5 class="text-secondary mb-1">Tere Liye</h5>
                                <h3 class="card-title mb-2">Bintang</h3>
                                <h4 class="text-primary fw-bold fs-3">Rp 49.000</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 px-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <img class="d-block w-100 mb-3 rounded" alt="Book Cover"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJBoA-sBPAC-EYbQqPWoKplvoh1bPN8cpNqtpLr-sFmQ&s=10" />
                            <div class="d-flex gap-2 mb-2">
                                <span class="badge bg-blue-lt"><i class="fa-solid fa-mobile me-1"></i>PDF</span>
                                <span class="badge bg-secondary-lt">3+</span>
                            </div>
                            <div>
                                <h5 class="text-secondary mb-1">Tere Liye</h5>
                                <h3 class="card-title mb-2">Matahari</h3>
                                <h4 class="text-primary fw-bold fs-3">Rp 49.000</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 px-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <img class="d-block w-100 mb-3 rounded" alt="Book Cover"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStLvNx2uv5Yt5QmTdrArMoq0nFEzvMBDqSM17KOEoGeg&s=10" />
                            <div class="d-flex gap-2 mb-2">
                                <span class="badge bg-blue-lt"><i class="fa-solid fa-mobile me-1"></i>PDF</span>
                                <span class="badge bg-secondary-lt">3+</span>
                            </div>
                            <div>
                                <h5 class="text-secondary mb-1">Tere Liye</h5>
                                <h3 class="card-title mb-2">Ceros dan Batozar</h3>
                                <h4 class="text-primary fw-bold fs-3">Rp 49.000</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 px-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <img class="d-block w-100 mb-3 rounded" alt="Book Cover"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGbCQ8FsOMMb1d3l69Yq0SlAvuITB3vyQsTzc2zoW1xA&s=10" />
                            <div class="d-flex gap-2 mb-2">
                                <span class="badge bg-blue-lt"><i class="fa-solid fa-mobile me-1"></i>PDF</span>
                                <span class="badge bg-secondary-lt">3+</span>
                            </div>
                            <div>
                                <h5 class="text-secondary mb-1">Tere Liye</h5>
                                <h3 class="card-title mb-2">Nebula</h3>
                                <h4 class="text-primary fw-bold fs-3">Rp 49.000</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 px-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <img class="d-block w-100 mb-3 rounded" alt="Book Cover"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVAoZ3IsBZYGLTGllFsKwOrvzifNUIuymm6ecOIw4Lmw&s=10" />
                            <div class="d-flex gap-2 mb-2">
                                <span class="badge bg-blue-lt"><i class="fa-solid fa-mobile me-1"></i>PDF</span>
                                <span class="badge bg-secondary-lt">3+</span>
                            </div>
                            <div>
                                <h5 class="text-secondary mb-1">Tere Liye</h5>
                                <h3 class="card-title mb-2">Komet Minor</h3>
                                <h4 class="text-primary fw-bold fs-3">Rp 49.000</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 px-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <img class="d-block w-100 mb-3 rounded" alt="Book Cover"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBbV3u9Xua-ulkYCex3WiBW8rriZbjBDLWi3Aks_JLTQ&s=10" />
                            <div class="d-flex gap-2 mb-2">
                                <span class="badge bg-blue-lt"><i class="fa-solid fa-mobile me-1"></i>PDF</span>
                                <span class="badge bg-secondary-lt">3+</span>
                            </div>
                            <div>
                                <h5 class="text-secondary mb-1">Tere Liye</h5>
                                <h3 class="card-title mb-2">Selena</h3>
                                <h4 class="text-primary fw-bold fs-3">Rp 49.000</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {


            $('#wrapper-slider').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        })
    </script>
@endpush
