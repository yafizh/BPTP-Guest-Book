    <!-- End Main Sidebar -->
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
                        <input name="keyword" class="navbar-search form-control" autofocus type="text" placeholder="Cari berdasarkan Nama Pegawai, NIP, Nomor Telepon" aria-label="Search">
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
                                        <th scope="col" class="border-0 text-center">Nomor Telepon</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer border-top">
                            <!-- <div class="row">
                            <div class="col text-center view-report">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Default Light Table -->
        </div>
    </main>
    <script>
        const englishSexToIndonesiaSex = sex_in_english => sex_in_english === "MALE" ? "Laki - Laki" : "Perempuan";
        const getGuestDate = (keyword = '') => {
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
                            <td class="text-center">${englishSexToIndonesiaSex(value.employee_sex)}</td>
                            <td class="text-center">${value.employee_phone_number}</td>
                        `
                            );
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
        getGuestDate();
        $('input[name=keyword]').on('input', function(e) {
            e.preventDefault();
            getGuestDate($(this).val());
        });
    </script>