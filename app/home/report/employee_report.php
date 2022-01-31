<div class="main-content-container container-fluid px-4">
    <div class="row">
        <div class="col-2 p-5">
            <img src="<?= BASE_URL ?>images/bptp-logo.png" width="100" alt="">
        </div>
        <div class="col-8 text-center pt-5">
            <span style="font-size: 24px;">
                Balai Pengkajian Teknologi Pertanian
                <br>
                Kalimantan Selatan  
            </span>
            <br>
            Jl. Panglima Batur No.4, Loktabat Utara, Kec. Banjarbaru Utara, Kota Banjar Baru, Kalimantan Selatan 70711
            <br>
            Telepon: (0511) 4772346 | Website: http://kalsel.litbang.pertanian.go.id/ | Email: bptp-kalsel@litbang.pertanian.go.id
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col text-center">
            <h5>Laporan Seluruh Pegawai</h5>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <div class="">
                <div class="p-0 pb-0 text-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="border-0">No</th>
                                <th scope="col" class="border-0 text-left">Nama Pegawai</th>
                                <th scope="col" class="border-0 text-center">NIP</th>
                                <th scope="col" class="border-0 text-center">Jenis Kelamin</th>
                                <th scope="col" class="border-0 text-center">Jabatan</th>
                                <th scope="col" class="border-0 text-center">Keahlian</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer border-top"></div>
            </div>
        </div>
    </div>
    <!-- End Default Light Table -->
</div>
<script src="utils/functions.js"></script>
<script>
    const getEmployees = (keyword = '') => {
        $.ajax({
            url: `employee/handler/getEmployee.php?keyword=${keyword}`,
            method: 'GET',
            dataType: 'JSON',
            success: function(response) {
                if (response.isSuccess) {
                    $('tbody').html('');
                    $.each(response.data, function(index, value) {
                        const tr = $('<tr></tr>').html(
                            `
                    <td>${index+1}</td>
                    <td class="text-left" style="vertical-align: middle;">${value.employee_name}</td>
                    <td class="text-center" style="vertical-align: middle;">${value.employee_nip}</td>
                    <td class="text-center" style="vertical-align: middle;">${engToIdSex(value.employee_sex)}</td>
                    <td class="text-center" style="vertical-align: middle;">${value.employee_position}</td>
                    <td class="text-center" style="vertical-align: middle;">${value.employee_mastery}</td>
                `
                        );
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
    getEmployees();
    $('input[name=keyword]').on('input', function(e) {
        e.preventDefault();
        getEmployees($(this).val());
    });
</script>