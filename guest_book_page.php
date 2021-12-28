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
                                                        <label for="guest_meet_with">Bertemu</label>
                                                        <select id="guest_meet_with" name="guest_meet_with" class="form-control" required>
                                                            <option selected>Choose...</option>
                                                            <option>Lainnya</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="guest_necessity">Keperluan</label>
                                                        <textarea class="form-control" id="guest_necessity" name="guest_necessity" rows="1"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <!-- For GUEST PHOTO -->
                                                <div class="form-row">
                                                    <div class="form-group col-md-12 text-center">
                                                        <h6>Ambil Gambar</h6>
                                                        <video class="bg-danger" autoplay></video>
                                                        <img id="taroh" src="" class="d-none" style="width:270px; height: 270px;">
                                                    </div>
                                                </div>
                                                <div class="form-row pl-5 pr-5">
                                                    <div class="d-flex gap-1 w-100">
                                                        <button id="reset" type="button" style="flex:1;" class="btn btn-accent mr-1" disabled>Reset</button>
                                                        <button id="ambil" type="button" style="flex:1;" class="btn btn-accent ml-1">Ambil Gambar</button>
                                                    </div>
                                                </div>
                                                <input id="input_file" type="file" accept="image/*;capture=camera" hidden>
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
    function update(stream) {
        document.querySelector('video').src = stream.url;
    }

    function hasGetUserMedia() {
        return !!(navigator.mediaDevices && navigator.mediaDevices.getUserMedia);
    }
    if (hasGetUserMedia()) {
        // Good to go!
    } else {
        alert("getUserMedia() is not supported by your browser");
    }
</script>
<script>
    const constraints = {
        video: {
            width: {
                exact: 270
            },
            height: {
                exact: 270
            }
        },
    };

    const video = document.querySelector("video");

    navigator.mediaDevices.getUserMedia(constraints).then((stream) => {
        video.srcObject = stream;
    });
    const screenshotButton = document.querySelector("#ambil");
    const img = document.querySelector("#taroh");

    const canvas = document.createElement("canvas");

    screenshotButton.onclick = video.onclick = function() {
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext("2d").drawImage(video, 0, 0);
        // Other browsers will fall back to image/png
        img.src = canvas.toDataURL("image/webp");

        var a = document.createElement('a');
        a.href = canvas.toDataURL("image/webp").replace("image/webp", "image/octet-stream")
        a.download = 'asd.webp';
        document.body.appendChild(a);
        a.click();


        video.classList.toggle('d-none');
        img.classList.toggle('d-none');
        $('#reset').prop('disabled', function(i, v) {
            return !v;
        });
    };

    $('#reset').on('click', _ => {
        video.classList.toggle('d-none');
        img.classList.toggle('d-none');
        $('#reset').prop('disabled', function(i, v) {
            return !v;
        });
    })

    function handleSuccess(stream) {
        screenshotButton.disabled = false;
        video.srcObject = stream;
    }
</script>
<script>
    $('form').on('submit', function(e) {
        if (
            $('#guest_name').val().trim() ||
            $('#guest_phone_number').val().trim() ||
            $('#visit_date').val().trim() ||
            $('#visit_time').val().trim() ||
            $('#guest_agency').val().trim() ||
            $('#guest_address').val().trim() ||
            $('#guest_meet_with').val().trim() ||
            $('#guest_necessity').val().trim()
        ) {
            e.preventDefault();
            $(this).addClass('was-validated')
        }
    })
</script>