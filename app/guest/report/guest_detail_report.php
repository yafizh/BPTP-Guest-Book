<div class="main-content-container container-fluid px-4">
    <div class="row">
        <div class="col-2 p-5">
            <img src="<?= BASE_URL ?>images/bptp-logo.png" width="100" alt="">
        </div>
        <div class="col-8 text-center pt-5">
            <span style="font-size: 24px;">
                BALAI PENGKAJIAN TEKNOLOGI PERTANIAN
                <br>
                KALIMANTAN SELATAN
            </span>
            <br>
            Jl. Panglima Batur No.4, Loktabat Utara, Kec. Banjarbaru Utara, Kota Banjar Baru, Kalimantan Selatan 70711
            <br>
            Telepon: (0511) 4772346, Website: http://kalsel.litbang.pertanian.go.id/, Email: bptp-kalsel@litbang.pertanian.go.id
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col text-center">
            <h5>Laporan Detail Pengunjung</h5>
            <h6></h6>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <div class="row justify-content-center">
                <img src="<?= $_POST['guest']['guest_picture'] ?>" width="175" alt="">
            </div>
            <div class="row mt-2">
                <div class="col-4"></div>
                <div class="col-6">
                    <div class="row justify-content-center">
                        <div class="col-4">Nama</div>
                        <div class="col-auto">:</div>
                        <div class="col-7"><?= $_POST['guest']['guest_name'] ?></div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4">Tanggal</div>
                        <div class="col-auto">:</div>
                        <div class="col-7"><?= $_POST['guest']['guest_visit_date'] ?></div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4">Waktu</div>
                        <div class="col-auto">:</div>
                        <div class="col-7"><?= $_POST['guest']['guest_visit_time'] ?></div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4">Nomor Telepon</div>
                        <div class="col-auto">:</div>
                        <div class="col-7"><?= $_POST['guest']['guest_phone_number'] ?></div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4">Alamat</div>
                        <div class="col-auto">:</div>
                        <div class="col-7"><?= $_POST['guest']['guest_address'] ?></div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4">Asal Instansi</div>
                        <div class="col-auto">:</div>
                        <div class="col-7"><?= $_POST['guest']['guest_agency'] ?></div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4">Keperluan</div>
                        <div class="col-auto">:</div>
                        <div class="col-7"><?= $_POST['guest']['guest_necessity'] ?></div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4">Bertemu</div>
                        <div class="col-auto">:</div>
                        <div class="col-7"><?= $_POST['guest']['guest_meet_with'] ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Default Light Table -->
</div>
<script>
    window.print();
</script>