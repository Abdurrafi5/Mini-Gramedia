@extends('layout.app')

@section('content')
    <header class="navbar navbar-expand-md d-print-none">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- BEGIN NAVBAR LOGO -->
            <a href="../../.." aria-label="Tabler" class="navbar-brand navbar-brand-autodark me-3">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOCvNa3r_hszq7pPtvOQKKYOepdqMsD5tJapqoyZoiAA&s=10"
                    class="navbar-brand-image"> Ebooks
            </a>
            <!-- END NAVBAR LOGO -->
            <ul class="navbar-nav mx-auto w-50">
                {{-- DROPDOWN --}}
                <div class="dropdown mt-2">
                    <a href="#" class="btn btn-light dropdown-toggle pt-2 me-2" data-bs-toggle="dropdown">Kategori</a>
                    <div class="dropdown-menu dropdown-menu-card" style="min-width: 600px">
                        <div class="p-3">
                            <div class="row g-2">
                                <div class="col-3">
                                    <div class="card py-2">
                                        <div class="card-body p-2 text-center">Kategori 1</div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card py-2">
                                        <div class="card-body p-2 text-center">Kategori 2</div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card py-2">
                                        <div class="card-body p-2 text-center">Kategori 3</div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card py-2">
                                        <div class="card-body p-2 text-center">Kategori 4</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- SEARCH BAR --}}
                <div class="input-icon w-100 py-2">
                    <input type="text" class="form-control form-control-rounded"
                        placeholder="Cari Judul, Produk, Buku, Penulis...">
                    <div class="col-auto">
                        <span class="input-icon-addon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="10" cy="10" r="7" />
                                <line x1="21" y1="21" x2="15" y2="15" />
                            </svg>
                        </span>
                    </div>
                </div>
                {{-- ICON KERANJANG --}}
                <div class="mt-3 ms-2">
                    <i class="fa-solid fa-cart-arrow-down fs-3 text-dark"></i>
                </div>
            </ul>
            <div class="flex-row order-md-last ms-auto">
                <a href="#" class="btn btn-primary">Masuk</a>
                <a href="#" class="btn btn-light">Daftar</a>
            </div>
        </div>
    </header>
    <div class="container py-4">
        <div id="carousel-sample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel-sample" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carousel-sample" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carousel-sample" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#carousel-sample" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#carousel-sample" data-bs-slide-to="4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" alt=""
                        src="https://img.magnific.com/free-vector/hand-drawn-literature-twitter-header_23-2149721049.jpg?semt=ais_hybrid&w=740&q=80" />
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt=""
                        src="https://i.pinimg.com/1200x/17/2f/a8/172fa8dd96d6e13f4b1825594034ec78.jpg" />
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt=""
                        src="https://i.pinimg.com/736x/57/b7/e7/57b7e7a8c5df6f1372f85b2f279594e8.jpg" />
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt=""
                        src="https://i.pinimg.com/1200x/44/7b/2a/447b2a791901b27c3ea00dabc6ff56b9.jpg" />
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt=""
                        src="https://i.pinimg.com/736x/71/53/3a/71533a00b705cb42441415253858eb29.jpg" />
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
    </div>
    <div class="mt-4">
        <div class="d-flex align-items-center gap-2 mb-4">
            <span class="badge bg-yellow text-yellow-fg p-2"><i class="fa-solid fa-crown fs-3"></i></span>
            <h2 class="mt-3 text-dark">Paket Langganan</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100" style="background: linear-gradient(135deg, #ffffff 0%, #a7f1c6 100%)">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-dark">
                        <h2 class="fw-bold">NON-FICTION</h2>
                        <p class="text-secondary fw-bold mb-0">PACKAGE</p>
                        <div class="text-center mt-2">
                            Rp. <span class="fs-2 fw-bold text-warning">49.000</span>
                            <br>
                            <span class="fw-bold text-secondary">/30 Days</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100" style="background: linear-gradient(135deg, #ffffff 0%, #f1a7e7 100%)">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-dark">
                        <h2 class="fw-bold">FICTION</h2>
                        <p class="text-secondary fw-bold mb-0">PACKAGE</p>
                        <div class="text-center mt-2">
                            Rp. <span class="fs-2 fw-bold text-warning">99.000</span>
                            <br>
                            <span class="fw-bold text-secondary">/30 Days</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100" style="background: linear-gradient(135deg, #ffffff 0%, #f1a7a7 100%)">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-dark">
                        <h2 class="fw-bold">PREMIER</h2>
                        <p class="text-secondary fw-bold mb-0">PACKAGE</p>
                        <div class="text-center mt-2">
                            Rp. <span class="fs-2 fw-bold text-warning">199.000</span>
                            <br>
                            <span class="fw-bold text-secondary">/30 Days</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <div class="d-flex align-items-center gap-2 mb-3">
            <span class="badge bg-blue text-blue-fg p-2"><i class="fa-solid fa-book fs-3"></i></span>
            <h2 class="m-0 text-dark">Buku Baru Dirilis</h2>
        </div>
        <div class="row g-3">
            <div class="col-6 col-md-4 col-lg-2">
                <a href="#" class="card card-link card-link-pop h-100 text-decoration-none text-dark">
                    <img src="https://i.pinimg.com/736x/1e/4a/13/1e4a1305dc6e31c62b80e32cc907213a.jpg"
                        class="card-img-top" style="object-fit: cover; height: 220px;" alt="Cover Buku 1">
                    <div class="card-body p-2 text-center d-flex flex-column justify-content-center">
                        <h3 class="card-title mb-1 fs-5 text-truncate" title="Judul Buku Pertama">The Wild Robot</h3>
                        <p class="text-secondary fs-6 mb-0 text-truncate" title="Nama Penulis 1">Nama Penulis 1</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <a href="#" class="card card-link card-link-pop h-100 text-decoration-none text-dark">
                    <img src="https://i.pinimg.com/1200x/f4/52/1a/f4521a1910f059ceb1f06beb12a880d1.jpg"
                        class="card-img-top" style="object-fit: cover; height: 220px;" alt="Cover Buku 2">
                    <div class="card-body p-2 text-center d-flex flex-column justify-content-center">
                        <h3 class="card-title mb-1 fs-5 text-truncate" title="Judul Buku Kedua">Life Of Pi</h3>
                        <p class="text-secondary fs-6 mb-0 text-truncate" title="Nama Penulis 2">Nama Penulis 2</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <a href="#" class="card card-link card-link-pop h-100 text-decoration-none text-dark">
                    <img src="https://i.pinimg.com/736x/a3/4f/15/a34f15e828f17c49e98e224636f5ca84.jpg"
                        class="card-img-top" style="object-fit: cover; height: 220px;" alt="Cover Buku 4">
                    <div class="card-body p-2 text-center d-flex flex-column justify-content-center">
                        <h3 class="card-title mb-1 fs-5 text-truncate" title="Judul Buku Keempat">Hujan</h3>
                        <p class="text-secondary fs-6 mb-0 text-truncate" title="Nama Penulis 4">Nama Penulis 3</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <a href="#" class="card card-link card-link-pop h-100 text-decoration-none text-dark">
                    <img src="https://i.pinimg.com/736x/81/24/87/8124875c12346912196d2c65817e3b9f.jpg"
                        class="card-img-top" style="object-fit: cover; height: 220px;" alt="Cover Buku 5">
                    <div class="card-body p-2 text-center d-flex flex-column justify-content-center">
                        <h3 class="card-title mb-1 fs-5 text-truncate" title="Judul Buku Kelima">Pergi</h3>
                        <p class="text-secondary fs-6 mb-0 text-truncate" title="Nama Penulis 5">Nama Penulis 4</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <a href="#" class="card card-link card-link-pop h-100 text-decoration-none text-dark">
                    <img src="https://i.pinimg.com/736x/53/67/d3/5367d3db20b2a17248c3885fcf56e58c.jpg"
                        class="card-img-top" style="object-fit: cover; height: 220px;" alt="Cover Buku 6">
                    <div class="card-body p-2 text-center d-flex flex-column justify-content-center">
                        <h3 class="card-title mb-1 fs-5 text-truncate" title="Judul Buku Keenam">Bulan</h3>
                        <p class="text-secondary fs-6 mb-0 text-truncate" title="Nama Penulis 6">Nama Penulis 5</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <a href="#" class="card card-link card-link-pop h-100 text-decoration-none text-dark">
                    <img src="https://i.pinimg.com/736x/69/c8/9f/69c89fc50b2b53d4723225f3c1b3e3fe.jpg"
                        class="card-img-top" style="object-fit: cover; height: 220px;" alt="Cover Buku 6">
                    <div class="card-body p-2 text-center d-flex flex-column justify-content-center">
                        <h3 class="card-title mb-1 fs-5 text-truncate" title="Judul Buku Keenam">Perahu Kertas</h3>
                        <p class="text-secondary fs-6 mb-0 text-truncate" title="Nama Penulis 6">Nama Penulis 5</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>
@endsection
