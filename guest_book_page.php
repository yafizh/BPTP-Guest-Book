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
            <ul class="navbar-nav border-left flex-row ">
                <li class="nav-item border-right dropdown notifications">
                    <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="nav-link-icon__wrapper">
                            <i class="material-icons">&#xE7F4;</i>
                            <span class="badge badge-pill badge-danger">2</span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">
                            <div class="notification__icon-wrapper">
                                <div class="notification__icon">
                                    <i class="material-icons">&#xE6E1;</i>
                                </div>
                            </div>
                            <div class="notification__content">
                                <span class="notification__category">Analytics</span>
                                <p>Your website’s active users count increased by
                                    <span class="text-success text-semibold">28%</span> in the last week. Great job!
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="notification__icon-wrapper">
                                <div class="notification__icon">
                                    <i class="material-icons">&#xE8D1;</i>
                                </div>
                            </div>
                            <div class="notification__content">
                                <span class="notification__category">Sales</span>
                                <p>Last week your store’s sales count decreased by
                                    <span class="text-danger text-semibold">5.52%</span>. It could have been worse!
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item notification__all text-center" href="#"> View all Notifications </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle mr-2" src="images/avatars/0.jpg" alt="User Avatar">
                        <span class="d-none d-md-inline-block">Sierra Brooks</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-small">
                        <a class="dropdown-item" href="user-profile-lite.html">
                            <i class="material-icons">&#xE7FD;</i> Profile</a>
                        <a class="dropdown-item" href="components-blog-posts.html">
                            <i class="material-icons">vertical_split</i> Blog Posts</a>
                        <a class="dropdown-item" href="add-new-post.html">
                            <i class="material-icons">note_add</i> Add New Post</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#">
                            <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                    </div>
                </li>
            </ul>
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
                <h3 class="page-title">Buku Tamu</h3>
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Small Stats Blocks -->
        <div class="row">
            <div class="col-12">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Identitas Pengunjung</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <div class="row">
                                <div class="col">
                                    <form class="needs-validation" novalidate action="" method="POST">
                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="guest_name">Nama Tamu</label>
                                                        <input type="text" class="form-control" name="guest_name" id="guest_name" required>
                                                        <div class="invalid-feedback">Harap isi kolom nama tamu.</div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="guest_phone_number">Nomor Handphone</label>
                                                        <input type="text" class="form-control" name="guest_phone_number" id="guest_phone_number" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="visit_date">Tanggal</label>
                                                        <input type="date" class="form-control" name="visit_date" id="visit_date" value="<?= Date("Y-m-d"); ?>" readonly required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="visit_time">Waktu</label>
                                                        <input type="time" class="form-control" name="visit_time" id="visit_time" value="<?= Date("H:i"); ?>" readonly required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="guest_agency">Asal Instansi</label>
                                                        <input type="text" class="form-control" name="guest_agency" id="guest_agency" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="guest_address">Alamat</label>
                                                        <input type="text" class="form-control" name="guest_address" id="guest_address" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="bertemu">Bertemu</label>
                                                        <select id="bertemu" name="bertemu" class="form-control" required>
                                                            <option selected>Choose...</option>
                                                            <option>Lainnya</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="keperluan">Keperluan</label>
                                                        <textarea class="form-control" id="keperluan" name="keperluan" rows="1"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <!-- For GUEST PHOTO -->
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-accent">Tambahkan Tamu</button>
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
        if (
            $('#guest_name').val().trim() ||
            $('#guest_phone_number').val().trim() ||
            $('#visit_date').val().trim() ||
            $('#visit_time').val().trim() ||
            $('#guest_agency').val().trim() ||
            $('#guest_address').val().trim() ||
            $('#bertemu').val().trim() ||
            $('#keperluan').val().trim()
        ) {
            e.preventDefault();
            $(this).addClass('was-validated')
        }
    })
</script>