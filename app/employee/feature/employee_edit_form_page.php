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
                <h3 class="page-title">Ubah Data Pegawai</h3>
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Small Stats Blocks -->
        <div class="row">
            <div class="col-12">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom d-flex">
                        <h6 class="m-0 align-self-center" style="flex: 1;">Identitas Pegawai</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <div class="row">
                                <div class="col">
                                    <form class="needs-validation" novalidate action="employee/handler/putEmployee.php" method="POST">
                                        <div class="form-row">
                                            <input type="text" hidden name="employee_id">
                                            <div id="form-section" class="form-group col-md-12">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="employee_name">Nama Pegawai</label>
                                                        <input type="text" class="form-control" name="employee_name" id="employee_name" autofocus autocomplete="off" required>
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="employee_nip">NIP Pegawai</label>
                                                        <input type="text" class="form-control" pattern="[0-9]+" name="employee_nip" id="employee_nip" autocomplete="off" required>
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label class="d-block" style="display: block;">Jenis Kelamin</label>
                                                        <div class="btn-group btn-group-toggle mb-0" data-toggle="buttons">
                                                            <label class="btn btn-white">
                                                                <input type="radio" name="employee_sex" value="MALE">Laki - Laki
                                                            </label>
                                                            <label class="btn btn-white">
                                                                <input type="radio" name="employee_sex" value="FEMALE">Perempuan
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="employee_position">Jabatan</label>
                                                        <input type="text" class="form-control" name="employee_position" id="employee_position" autocomplete="off" required>
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="employee_mastery">Keahlian</label>
                                                        <input type="text" class="form-control" name="employee_mastery" id="employee_mastery" autofocus autocomplete="off" required>
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-accent">Ubah Pegawai</button>
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
    const form_validation = _ => {
        let clear = true;
        if (!empty_validation($("input[name=employee_name]"))) clear = false;
        if (!empty_validation($("input[name=employee_position]"))) clear = false;
        if (!number_validation($('input[name=employee_nip]'))) clear = false;
        return clear;
    }

    $("input[name=employee_nip]").on('input', function() {
        number_validation($(this))
    });

    $('form').on('submit', function(e) {
        if (!form_validation()) {
            e.preventDefault();
            $(this).addClass('was-validated')
        }
    });
</script>
<script>
    const getEmployeesById = (employee_id) => {
        $.ajax({
            url: `employee/handler/getEmployeeById.php?employee_id=${employee_id}`,
            method: 'GET',
            dataType: 'JSON',
            success: function(response) {
                if (response.isSuccess) {
                    $("input[name=employee_id]").val(response.data.employee_id);
                    $("input[name=employee_name]").val(response.data.employee_name);
                    $("input[name=employee_nip]").val(response.data.employee_nip);
                    if(response.data.employee_sex == 'MALE') {
                        $("input[type=radio][value=MALE]").parent().addClass('active');
                        $("input[type=radio][value=MALE]").attr('checked');
                    } else if (response.data.employee_sex == 'FEMALE') {
                        $("input[type=radio][value=FEMALE]").parent().addClass('active');
                        $("input[type=radio][value=FEMALE]").attr('checked');
                    }
                    $("input[name=employee_position]").val(response.data.employee_position);
                    $("input[name=employee_mastery]").val(response.data.employee_mastery);
                } else {

                }
            },
            error: function(response) {
                console.log(response)
            }
        });
    }
    getEmployeesById("<?= $_GET['employee_id']; ?>");
</script>