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
                    <input name="keyword" class="navbar-search form-control" autofocus type="text" placeholder="Cari berdasarkan Nama Pegawai, NIP, Jabatan, Keahlian" aria-label="Search">
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
                <h3 class="page-title">Data Pegawai</h3>
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Default Light Table -->
        <div class="row">
            <div class="col">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom d-flex">
                        <h6 class="m-0 align-self-center" style="flex: 1;">Data Pegawai</h6>
                        <a href="<?= BASE_URL ?>app/?page=employee_form" class="btn btn-outline-primary">Tambah Pegawai</a>
                    </div>
                    <div class="card-body p-0 pb-0 text-center">
                        <table class="table mb-0 table-hover">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="border-0">#</th>
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
</main>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> -->
            <div class="modal-body">
                <div class="form-row mb-2 justify-content-center">
                    <img src="" alt="" style="width: 70%;">
                </div>
                <div class="form-row mb-2">
                    <div class="col-md-5">Nama Pegawai</div>
                    <div class="col-md-auto">:</div>
                    <div class="col-md-6" id="employee_name"></div>
                </div>
                <div class="form-row mb-2">
                    <div class="col-md-5">NIP</div>
                    <div class="col-md-auto">:</div>
                    <div class="col-md-6" id="employee_nip"></div>
                </div>
                <div class="form-row mb-2">
                    <div class="col-md-5">Jenis Kelamin</div>
                    <div class="col-md-auto">:</div>
                    <div class="col-md-6" id="employee_sex"></div>
                </div>
                <div class="form-row mb-2">
                    <div class="col-md-5">Jabatan</div>
                    <div class="col-md-auto">:</div>
                    <div class="col-md-6" id="employee_position"></div>
                </div>
                <div class="form-row mb-2">
                    <div class="col-md-5">Keahlian</div>
                    <div class="col-md-auto">:</div>
                    <div class="col-md-6" id="employee_mastery"></div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="" id="edit" class="btn btn-warning">Ubah</a>
                <a href="" id="delete" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>
<script src="utils/functions.js"></script>
<script>
      const employeeDetail = employee => {
        $("#exampleModal #employee_name").text(employee.employee_name);
        $("#exampleModal #employee_nip").text(employee.employee_nip);
        $("#exampleModal #employee_sex").text(engToIdSex(employee.employee_sex));
        $("#exampleModal #employee_position").text(employee.employee_position);
        $("#exampleModal #employee_mastery").text(employee.employee_mastery);
        $("#exampleModal .modal-footer #edit").attr('href', `index.php?page=employee_edit_form&employee_id=${employee.employee_id}`);
        $("#exampleModal .modal-footer #delete").attr('href', `employee/handler/deleteEmployee.php?employee_id=${employee.employee_id}`);
        $('#exampleModal').modal();
    }

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
                        <td class="text-left">${value.employee_name}</td>
                        <td class="text-center">${value.employee_nip}</td>
                        <td class="text-center">${engToIdSex(value.employee_sex)}</td>
                        <td class="text-center">${value.employee_position}</td>
                        <td class="text-center">${value.employee_mastery}</td>
                    `
                        );
                        tr.on('click', function() {
                            employeeDetail(value)
                        });
                        $('tbody').append(tr);
                    })
                } else {

                }
            },
            error: function(response) {
                console.log(response)
            }
        });
    }
    getEmployees();
    $('input[name=keyword]').on('input', function(e) {
        e.preventDefault();
        getEmployees($(this).val());
    });
</script>