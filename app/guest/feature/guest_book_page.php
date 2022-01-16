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
                <strong>Berhasil!</strong> Tamu berhasil ditambahkan!
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
            // setTimeout(function() {
            //     $('.alert').hide(3000, function() {
            //         $(this).remove();
            //     })
            // }, 3000);
        </script>
    <?php endif; ?>
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
                    <div class="card-header border-bottom d-flex">
                        <h6 class="m-0 align-self-center" style="flex: 1;">Identitas Pengunjung</h6>
                        <div class="btn-group btn-group-toggle mb-0" data-toggle="buttons">
                            <label class="btn btn-white">
                                <input type="radio" name="camera" id="camera-off" autocomplete="off" checked>Kamera Off
                            </label>
                            <label class="btn btn-white">
                                <input type="radio" name="camera" id="camera-on" autocomplete="off">Kamera On
                            </label>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <div class="row">
                                <div class="col">
                                    <form class="needs-validation" novalidate action="guest/handler/postGuest.php" method="POST">
                                        <div class="form-row flex-nowrap" style="overflow: hidden;">
                                            <div id="form-section" class="form-group col-md-12">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="guest_name">Nama Tamu</label>
                                                        <input type="text" class="form-control" name="guest_name" autocomplete="off" required>
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="guest_phone_number">Nomor Handphone</label>
                                                        <input type="text" class="form-control" name="guest_phone_number" pattern="(\+[0-9]|[0-9])*" autocomplete="off">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="visit_date">Tanggal</label>
                                                        <input type="date" class="form-control" name="visit_date" value="<?= Date("Y-m-d"); ?>" readonly required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="visit_time">Waktu</label>
                                                        <input type="time" class="form-control" name="visit_time" value="<?= Date("H:i"); ?>" readonly required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="guest_agency">Asal Instansi</label>
                                                        <input type="text" class="form-control" name="guest_agency" required>
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="guest_address">Alamat</label>
                                                        <input type="text" class="form-control" name="guest_address">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <?php require_once 'database/connection.php'; ?>
                                                        <?php $employees = $conn->query("SELECT * FROM employee_table"); ?>
                                                        <label for="guest_meet_with">Bertemu</label>
                                                        <select name="guest_meet_with" class="form-control" required>
                                                            <option value="" selected disabled>Pilih Pegawai...</option>
                                                            <?php while ($employee = $employees->fetch_assoc()) : ?>
                                                                <option value="<?= $employee['employee_id']; ?>"><?= $employee['employee_name']; ?></option>
                                                            <?php endwhile; ?>
                                                            <option value="">Lainnya</option>
                                                        </select>
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="guest_necessity">Keperluan</label>
                                                        <input type="text" class="form-control" name="guest_necessity" required>
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="camera-section" class="form-group col-md-4">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12 text-center" style="width:270px; height: 270px; overflow: hidden;  ">
                                                        <h6>Ambil Gambar</h6>
                                                        <video autoplay style="width:270px; height: 270px;"></video>
                                                        <img id="guest_picture_container" src="" class="d-none" style="width:270px; height: 270px;">
                                                    </div>
                                                </div>
                                                <div class="form-row pl-5 pr-5">
                                                    <div class="d-flex gap-1 w-100">
                                                        <button id="reset-screenshot-button" type="button" style="flex:1;" class="btn btn-accent mr-1" disabled>Reset</button>
                                                        <button id="screenshot-button" type="button" style="flex:1;" class="btn btn-accent ml-1">Ambil Gambar</button>
                                                    </div>
                                                </div>
                                                <input id="guest_picture" name="guest_picture" type="text" hidden>
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
<script src="utils/validations.js"></script>
<script>
    $("input[name=guest_phone_number]").on('input', function() {
        phone_number_validation($(this), 'Nomor Telepon');
    });

    const form_validation = _ => {
        let clear = true;
        if (!empty_validation($("input[name=guest_name]"), "Nama Tamu")) clear = false;
        if (!empty_validation($("input[name=guest_agency]"), "Asal Instansi")) clear = false;
        if (!empty_validation($("input[name=guest_necessity]"), "Keperluan")) clear = false;
        if (!select_option_validation($("select[name=guest_meet_with]"), 'Pegawai yang ingin dikunjungi')) clear = false;
        return clear;
    }

    $('form').on('submit', function(e) {
        if (!form_validation()) {
            e.preventDefault();
            $(this).addClass('was-validated')
        }
    });
</script>
<script>
    const hasGetUserMedia = _ => {
        return !!(navigator.mediaDevices && navigator.mediaDevices.getUserMedia);
    }

    const imageButton = _ => {
        $('#reset-screenshot-button').prop('disabled', function(i, v) {
            return !v;
        });
        $('#screenshot-button').prop('disabled', function(i, v) {
            return !v;
        });
    }

    const cameraOn = _ => {
        $('#screenshot-button').removeAttr('disabled', "");
        if (hasGetUserMedia()) {
            const constraints = {
                video: true,
                video: {
                    width: {
                        exact: 500
                    },
                    height: {
                        exact: 500
                    }
                },
            };

            const video = document.querySelector("video");

            navigator.mediaDevices.getUserMedia(constraints).then((stream) => {
                video.srcObject = stream;
            });

            const screenshotButton = document.querySelector("#screenshot-button");
            const img = document.querySelector("#guest_picture_container");

            const canvas = document.createElement("canvas");

            screenshotButton.onclick = video.onclick = function() {
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                canvas.getContext("2d").drawImage(video, 0, 0);
                // Other browsers will fall back to image/png
                img.src = canvas.toDataURL("image/webp");

                $('#guest_picture').val(canvas.toDataURL("image/webp"));

                video.classList.toggle('d-none');
                img.classList.toggle('d-none');
                imageButton();
            };

            $('#reset-screenshot-button').on('click', _ => {
                video.classList.toggle('d-none');
                img.classList.toggle('d-none');
                imageButton();
            });
        } else {
            alert("getUserMedia() is not supported by your browser");
        }
    }

    const cameraOff = _ => {
        imageButton();
        $('#reset-screenshot-button').attr('disabled', "");
        $('#screenshot-button').attr('disabled', "");
        $('#guest_picture').val('');
    }
</script>
<script>
    if (localStorage.getItem('camera') === "on") {
        cameraOn();
        $('#form-section').addClass('col-md-8');
        $('#form-section').removeClass('col-md-12');
        $("#camera-on").parent().addClass('active')
    } else {
        cameraOff();
        $("#camera-off").parent().addClass('active')
    }

    $('input[type=radio][name=camera]').on('change', function() {
        if ($(this).prop("checked", true).attr('id') === 'camera-on') {
            cameraOn();
            $('#form-section').addClass('col-md-8');
            $('#form-section').removeClass('col-md-12');
            localStorage.setItem('camera', 'on');
        } else if ($(this).prop("checked", true).attr('id') === 'camera-off') {
            cameraOff();
            $('#form-section').removeClass('col-md-8');
            $('#form-section').addClass('col-md-12');
            localStorage.setItem('camera', 'off');
        }
    });
</script>