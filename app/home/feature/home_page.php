<main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
    <div class="main-navbar sticky-top bg-white">
        <!-- Main Navbar -->
        <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
            <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                <div class="input-group input-group-seamless ml-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search">
                </div>
            </form>
            <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                    <i class="material-icons">&#xE5D2;</i>
                </a>
            </nav>
        </nav>
    </div>
    <!-- / .main-navbar -->
    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Fitur</span>
                <h3 class="page-title">Beranda</h3>
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Small Stats Blocks -->
        <div class="row">
            <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                    <div class="card-body p-0 d-flex">
                        <div class="d-flex flex-column m-auto">
                            <div class="stats-small__data text-center">
                                <span class="stats-small__label text-uppercase">Minggu ini</span>
                                <h6 class="stats-small__value count my-3">2,390</h6>
                            </div>
                            <div class="stats-small__data">
                                <span class="stats-small__percentage stats-small__percentage--increase">4.7%</span>
                            </div>
                        </div>
                        <canvas height="120" class="blog-overview-stats-small-1"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                    <div class="card-body p-0 d-flex">
                        <div class="d-flex flex-column m-auto">
                            <div class="stats-small__data text-center">
                                <span class="stats-small__label text-uppercase">Bulan ini</span>
                                <h6 class="stats-small__value count my-3">182</h6>
                            </div>
                            <div class="stats-small__data">
                                <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
                            </div>
                        </div>
                        <canvas height="120" class="blog-overview-stats-small-2"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-12 col-sm-12 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                    <div class="card-body p-0 d-flex">
                        <div class="d-flex flex-column m-auto">
                            <div class="stats-small__data text-center">
                                <span class="stats-small__label text-uppercase">Tahun ini</span>
                                <h6 class="stats-small__value count my-3">8,147</h6>
                            </div>
                            <div class="stats-small__data">
                                <span class="stats-small__percentage stats-small__percentage--decrease">3.8%</span>
                            </div>
                        </div>
                        <canvas height="120" class="blog-overview-stats-small-3"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Small Stats Blocks -->
        <div class="row">
            <!-- Users Stats -->
            <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
                <div class="card card-small">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Users</h6>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row border-bottom py-2 bg-light">
                            <div class="col-12 col-sm-6">
                                <div id="blog-overview-date-range" class="input-daterange input-group input-group-sm my-auto ml-auto mr-auto ml-sm-auto mr-sm-0" style="max-width: 350px;">
                                    <input type="text" class="input-sm form-control" name="start" placeholder="Start Date" id="blog-overview-date-range-1">
                                    <input type="text" class="input-sm form-control" name="end" placeholder="End Date" id="blog-overview-date-range-2">
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="material-icons"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 d-flex mb-2 mb-sm-0">
                                <button type="button" class="btn btn-sm btn-white ml-auto mr-auto ml-sm-auto mr-sm-0 mt-3 mt-sm-0">View Full Report &rarr;</button>
                            </div>
                        </div>
                        <canvas height="130" style="max-width: 100% !important;" class="blog-overview-users"></canvas>
                    </div>
                </div>
            </div>
            <!-- End Users Stats -->
            <!-- Users By Device Stats -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card card-small h-100">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Tujuan Pengunjung</h6>
                    </div>
                    <div class="card-body d-flex py-0">
                        <canvas height="220" class="blog-users-by-device m-auto"></canvas>
                    </div>
                    <div class="card-footer border-top">
                        <div class="row">
                            <div class="col">
                                <select class="custom-select custom-select-sm" style="max-width: 130px;">
                                    <option selected>Minggu Lalu</option>
                                    <option value="1">Hari ini</option>
                                    <option value="2">Bulan Lalu</option>
                                    <option value="3">Tahun Lalu</option>
                                </select>
                            </div>
                            <div class="col text-right view-report">
                                <a href="#">Full report &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Users By Device Stats -->
        </div>
    </div>
</main>