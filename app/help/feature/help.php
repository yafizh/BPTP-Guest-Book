<main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
    <div class="main-navbar sticky-top bg-white">
        <!-- Main Navbar -->
        <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
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
                <h3 class="page-title">Bantuan</h3>
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Small Stats Blocks -->
        <style>
            .stats-small:hover {
                background-color: #FBFBFB;
                color: #007BFF !important;
                cursor: pointer;
            }

            .stats-small:hover .stats-small__label {
                color: #007BFF !important;
            }
        </style>
        <div class="row">
            <div class="col-lg col-md-12 col-sm-12 mb-4" id="help-home">
                <div class="stats-small stats-small--1 card card-small">
                    <div class="card-body p-0 d-flex">
                        <div class="d-flex flex-column m-auto">
                            <div class="stats-small__data text-center">
                                <span class="stats-small__label text-uppercase">Beranda</span>
                                <i style="font-size: 36px;" class="my-3 fas fa-home"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-6 col-sm-6 mb-4" id="help-guest-book">
                <div class="stats-small stats-small--1 card card-small">
                    <div class="card-body p-0 d-flex">
                        <div class="d-flex flex-column m-auto">
                            <div class="stats-small__data text-center">
                                <span class="stats-small__label text-uppercase">Buku Tamu</span>
                                <i style="font-size: 36px;" class="my-3 far fa-address-book"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-6 col-sm-6 mb-4" id="help-guest-data">
                <div class="stats-small stats-small--1 card card-small">
                    <div class="card-body p-0 d-flex">
                        <div class="d-flex flex-column m-auto">
                            <div class="stats-small__data text-center">
                                <span class="stats-small__label text-uppercase">Data Tamu</span>
                                <i style="font-size: 36px;" class="my-3 fas fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-6 col-sm-6 mb-4" id="help-employee">
                <div class="stats-small stats-small--1 card card-small">
                    <div class="card-body p-0 d-flex">
                        <div class="d-flex flex-column m-auto">
                            <div class="stats-small__data text-center">
                                <span class="stats-small__label text-uppercase">Data Pegawai</span>
                                <i style="font-size: 36px;" class="my-3 fas fa-user-tie"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Small Stats Blocks -->
        </div>
</main>
<script>
    $("#help-home").on('click', _ => location.replace(`${BASE_URL}app/?page=help&help=home`));
    $("#help-guest-book").on('click', _ => location.replace(`${BASE_URL}app/?page=help&help=guest_book`));
    $("#help-guest-data").on('click', _ => location.replace(`${BASE_URL}app/?page=help&help=guest_data`));
    $("#help-employee").on('click', _ => location.replace(`${BASE_URL}app/?page=help&help=employee_data`));
</script>