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
    <style>
        /* For animation */
        /* https://stackoverflow.com/questions/42979772/bootstrap-4-animate-column-width-change */
        .row [class*='col-'] {
            transition: flex 0.5s ease-in-out, max-width .5s ease-in-out;
        }
    </style>
    <?php if (isset($_SESSION['isSuccess'])) : ?>
        <?php if ($_SESSION['isSuccess']) : ?>
            <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <i class="fa fa-check mx-2"></i>
                <strong>Berhasil!</strong> Karyawan berhasil ditambahkan!
            </div>
        <?php else : ?>
            <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <i class="fa fa-info mx-2"></i>
                <strong>Gagal</strong> <?= $_SESSION['message']; ?>
            </div>
        <?php endif; ?>
        <?php session_destroy(); ?>
        <script>
            setTimeout(function() {
                $('.alert').hide(3000, function() {
                    $(this).remove();
                })
            }, 3000);
        </script>
    <?php endif; ?>
    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Fitur</span>
                <h3 class="page-title">Tambah Data Karyawan</h3>
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Small Stats Blocks -->
        <div class="row">
            <div class="col-12">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom d-flex">
                        <h6 class="m-0 align-self-center" style="flex: 1;">Identitas Karyawan</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <div class="row">
                                <div class="col">
                                    <form class="needs-validation" novalidate action="employee/handler/postEmployee.php" method="POST">
                                        <div class="form-row">
                                            <div id="form-section" class="form-group col-md-12">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="employee_name">Nama Karyawan</label>
                                                        <input type="text" class="form-control" name="employee_name" id="employee_name" required>
                                                        <div class="invalid-feedback">Harap isi kolom nama karyawan.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-accent">Tambahkan Karyawan</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    $('form').on('submit', function(e) {
        if (!(
                $('#employee_name').val().trim()
            )) {
            e.preventDefault();
            $(this).addClass('was-validated')
        }
    });
</script>