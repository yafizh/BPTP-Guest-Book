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
    <div class="row">
        <div class="col">
            <div class="">
                <div class="p-0 pb-0 text-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="border-0">No</th>
                                <th scope="col" class="border-0 text-left">Nama Tamu</th>
                                <th scope="col" class="border-0 text-center">Tanggal</th>
                                <th scope="col" class="border-0 text-center">Asal Instansi</th>
                                <th scope="col" class="border-0 text-center">Bertemu</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Default Light Table -->
</div>
<script src="utils/functions.js"></script>
<script>
    const getGuestDate = (keyword = '') => {
        $.ajax({
            url: `home/handler/getGuestBasedDate.php?start=<?= $_GET['start'] ?>&end=<?= $_GET['end'] ?>`,
            method: 'GET',
            dataType: 'JSON',
            success: function(response) {
                console.log(response)
                if (response.isSuccess) {
                    $('tbody').html('');
                    $.each(response.data['guests'], function(index, value) {
                        const tr = $('<tr></tr>').html(
                            `
                            <td style="vertical-align: middle;">${index+1}</td>
                            <td style="vertical-align: middle;" class="text-left">${value.guest_name}</td>
                            <td style="vertical-align: middle;">${engToIdDate(value.guest_visit_date)}</td>
                            <td style="vertical-align: middle;">${value.guest_agency}</td>
                            <td style="vertical-align: middle;">${value.guest_meet_with ? value.guest_meet_with : 'Pegawai Lainnya'}</td>
                        `
                        );
                        tr.on('click', function() {
                            guestDetail(value)
                        });
                        $('tbody').append(tr);
                    });
                    window.print();
                } else window.close();
            },
            error: function(response) {
                console.log(response);
                window.close();
            }
        });
    }
    getGuestDate();
</script>