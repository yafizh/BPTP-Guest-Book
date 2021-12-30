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
                    <input name="keyword" class="navbar-search form-control" autofocus type="text" placeholder="Cari berdasarkan Nama Tamu, Tanggal, Asal Instansi, Bertemu..." aria-label="Search">
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
                <h3 class="page-title">Data Tamu</h3>
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Default Light Table -->
        <div class="row">
            <div class="col">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="mb-0">Seluruh Data Tamu</h6>
                    </div>
                    <div class="card-body p-0 pb-0 text-center">
                        <table class="table mb-0 table-hover">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="border-0">#</th>
                                    <th scope="col" class="border-0 text-left">Nama Tamu</th>
                                    <th scope="col" class="border-0">Tanggal</th>
                                    <th scope="col" class="border-0">Asal Instansi</th>
                                    <th scope="col" class="border-0">Bertemu</th>
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
                    <div class="col-md-5">Nama Tamu</div>
                    <div class="col-md-auto">:</div>
                    <div class="col-md-6" id="guest_name"></div>
                </div>
                <div class="form-row mb-2">
                    <div class="col-md-5">Nomor Handphone</div>
                    <div class="col-md-auto">:</div>
                    <div class="col-md-6" id="guest_phone_number"></div>
                </div>
                <div class="form-row mb-2">
                    <div class="col-md-5">Tanggal</div>
                    <div class="col-md-auto">:</div>
                    <div class="col-md-6" id="visit_date"></div>
                </div>
                <div class="form-row mb-2">
                    <div class="col-md-5">Waltu</div>
                    <div class="col-md-auto">:</div>
                    <div class="col-md-6" id="visit_time"></div>
                </div>
                <div class="form-row mb-2">
                    <div class="col-md-5">Asal Instansi</div>
                    <div class="col-md-auto">:</div>
                    <div class="col-md-6" id="guest_agency"></div>
                </div>
                <div class="form-row mb-2">
                    <div class="col-md-5">Alamat</div>
                    <div class="col-md-auto">:</div>
                    <div class="col-md-6" id="guest_address"></div>
                </div>
                <div class="form-row mb-2">
                    <div class="col-md-5">Bertemu</div>
                    <div class="col-md-auto">:</div>
                    <div class="col-md-6" id="guest_meet_with"></div>
                </div>
                <div class="form-row">
                    <div class="col-md-5">Keperluan</div>
                    <div class="col-md-auto">:</div>
                    <div class="col-md-6" id="guest_necessity"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    const guestDetail = guest => {
        $("#exampleModal img").attr("src", guest.guest_picture);
        $("#exampleModal #guest_name").text(guest.guest_name);
        $("#exampleModal #guest_phone_number").text(guest.guest_phone_number);
        $("#exampleModal #visit_date").text(guest.guest_visit_date);
        $("#exampleModal #visit_time").text(guest.guest_visit_time);
        $("#exampleModal #guest_agency").text(guest.guest_agency);
        $("#exampleModal #guest_address").text(guest.guest_address);
        $("#exampleModal #guest_meet_with").text(guest.guest_meet_with);
        $("#exampleModal #guest_necessity").text(guest.guest_necessity);
        $('#exampleModal').modal();
    }

    const getGuestDate = (keyword = '') => {
        $.ajax({
            url: `guest/handler/getGuest.php?keyword=${keyword}`,
            method: 'GET',
            dataType: 'JSON',
            success: function(response) {
                if (response.isSuccess) {
                    $('tbody').html('');
                    $.each(response.data, function(index, value) {
                        const tr = $('<tr></tr>').html(
                            `
                            <td>${index+1}</td>
                            <td class="text-left">${value.guest_name}</td>
                            <td>${value.guest_visit_date}</td>
                            <td>${value.guest_agency}</td>
                            <td>${value.guest_meet_with}</td>
                        `
                        );
                        tr.on('click', function() {
                            guestDetail(value)
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
    getGuestDate();
    $('input[name=keyword]').on('input', function(e) {
        e.preventDefault();
        getGuestDate($(this).val());
    });
</script>