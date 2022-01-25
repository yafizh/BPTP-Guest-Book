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
                <h3 class="page-title">Beranda</h3>
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Small Stats Blocks -->
        <div class="row">
            <div class="col-lg col-md-12 col-sm-12 mb-4" id="today">
                <div class="stats-small stats-small--1 card card-small">
                    <div class="card-body p-0 d-flex">
                        <div class="d-flex flex-column m-auto">
                            <div class="stats-small__data text-center">
                                <span class="stats-small__label text-uppercase">Hari ini</span>
                                <h6 class="stats-small__value count my-3"></h6>
                            </div>
                            <div class="stats-small__data">
                                <span class="stats-small__percentage"></span>
                            </div>
                        </div>
                        <canvas height="120" class="blog-overview-stats-small-3"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-6 col-sm-6 mb-4" id="this-week">
                <div class="stats-small stats-small--1 card card-small">
                    <div class="card-body p-0 d-flex">
                        <div class="d-flex flex-column m-auto">
                            <div class="stats-small__data text-center">
                                <span class="stats-small__label text-uppercase">Minggu ini</span>
                                <h6 class="stats-small__value count my-3"></h6>
                            </div>
                            <div class="stats-small__data">
                                <span class="stats-small__percentage"></span>
                            </div>
                        </div>
                        <canvas height="120" class="blog-overview-stats-small-1"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-6 col-sm-6 mb-4" id="this-month">
                <div class="stats-small stats-small--1 card card-small">
                    <div class="card-body p-0 d-flex">
                        <div class="d-flex flex-column m-auto">
                            <div class="stats-small__data text-center">
                                <span class="stats-small__label text-uppercase">Bulan ini</span>
                                <h6 class="stats-small__value count my-3">182</h6>
                            </div>
                            <div class="stats-small__data">
                                <span class="stats-small__percentage">12.4%</span>
                            </div>
                        </div>
                        <canvas height="120" class="blog-overview-stats-small-2"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Small Stats Blocks -->
        <div class="row">
            <!-- Users Stats -->
            <div class="col-12 mb-4">
                <div class="card card-small">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Grafik Pengunjung </h6>
                    </div>
                    <div class="card-body pt-0">
                        <canvas height="75" style="max-width: 100% !important;" class="blog-overview-users"></canvas>
                    </div>
                </div>
            </div>
            <!-- End Users Stats -->
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <!-- Top Referrals Component -->
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <div class="stats-small stats-small--1 card card-small">
                            <div class="card-header border-bottom">
                                <h6 class="m-0">Jumlah Pengunjung</h6>
                            </div>
                            <div class="card-body p-3 d-flex" id="guest-count">
                                <div class="d-flex flex-column m-auto">
                                    <div class="stats-small__data text-center">
                                        <span class="stats-small__label text-uppercase">1 Januari 2022 - 12 Januari 2022</span>
                                        <h6 class="stats-small__value count my-3"></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-top">
                                <div class="row">
                                    <div class="col-8">
                                        <div id="blog-overview-date-range" class="input-daterange input-group input-group-sm my-auto mr-sm-0" style="max-width: 350px;">
                                            <input type="text" class="input-sm form-control" name="start" placeholder="Start Date" id="blog-overview-date-range-1">
                                            <input type="text" class="input-sm form-control" name="end" placeholder="End Date" id="blog-overview-date-range-2">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="material-icons"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col text-right view-report">
                                        <a href="#">Cetak Laporan &rarr;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Referrals Component -->
                </div>
                <div class="row">
                    <!-- Top Referrals Component -->
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                        <div class="stats-small stats-small--1 card card-small">
                            <div class="card-header border-bottom">
                                <h6 class="m-0">Jumlah Admin</h6>
                            </div>
                            <div class="card-body p-3 d-flex">
                                <div class="d-flex flex-column m-auto">
                                    <div class="stats-small__data text-center">
                                        <span class="stats-small__label text-uppercase">Admin</span>
                                        <h6 class="stats-small__value count my-3">1</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-top">
                                <div class="row">
                                    <div class="col text-center view-report">
                                        <a href="#" class="btn btn-white">Cetak Data Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Referrals Component -->
                    <!-- Top Referrals Component -->
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                        <div class="stats-small stats-small--1 card card-small">
                            <div class="card-header border-bottom">
                                <h6 class="m-0">Jumlah Pegawai</h6>
                            </div>
                            <div class="card-body p-3 d-flex">
                                <div class="d-flex flex-column m-auto">
                                    <div class="stats-small__data text-center">
                                        <span class="stats-small__label text-uppercase">Pegawai</span>
                                        <h6 class="stats-small__value count my-3">10</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-top">
                                <div class="row">
                                    <div class="col text-center view-report">
                                        <a href="#" class="btn btn-white">Cetak Data Pegawai</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Referrals Component -->
                </div>
            </div>
            <!-- Top Referrals Component -->
            <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
                <div class="card card-small">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Jumlah Pengunjung Pegawai</h6>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-small list-group-flush" id="employee-with-visitor-count-list">
                        </ul>
                    </div>
                    <div class="card-footer border-top">
                        <div class="row">
                            <div class="col">
                                <select name="employee-with-visitor-interval" class="custom-select custom-select-sm">
                                    <option selected value="">Minggu Lalu</option>
                                    <option value="1">Hari ini</option>
                                    <option value="2">Bulan Lalu</option>
                                    <option value="3">Tahun Lalu</option>
                                </select>
                            </div>
                            <div class="col text-right view-report">
                                <a href="#">Cetak Laporan &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Referrals Component -->
        </div>
    </div>
    <div id="aaa">asd</div>
</main>
<script>
    const employee_with_visitor_interval = (index = 0) => {
        let file = "";
        if (index == 0) {
            file = "getEmployeeWithVisitorCountLastWeek.php";
        } else if (index == 1) {
            file = "getEmployeeWithVisitorCountToday.php";
        } else if (index == 2) {
            file = "getEmployeeWithVisitorCountLastMonth.php";
        } else if (index == 3) {
            file = "getEmployeeWithVisitorCountLastYear.php";
        }
        $.getJSON(`home/handler/${file}`, function(response) {
            console.log(response)
            $('#employee-with-visitor-count-list').html('');
            if (response.isSuccess) {
                $.each(response.data, (index, value) => {
                    $('#employee-with-visitor-count-list').append(`
                    <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">${value.employee_name}</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">${value.visitor_count}</span>
                    </li>
                `);
                })
            }
        }).fail(function(error) {
            console.log(error);
        });
    }
    $("select[name=employee-with-visitor-interval]").on('change', function() {
        employee_with_visitor_interval($(this).prop('selectedIndex'));
    });
    employee_with_visitor_interval();
</script>
<script type="text/javascript">
    $("#aaa").on("click", function() {
        var divContents = "asdasdad";
        var printWindow = window.open('', '', 'height=400,width=800');
        printWindow.document.write('<html><head><title>DIV Contents</title>');
        printWindow.document.write('</head><body >');
        printWindow.document.write(divContents);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    });
</script>
<script src="utils/calendarID.js"></script>
<script>
    // https://stackoverflow.com/questions/13009755/getjson-synchronous
    $.ajaxSetup({
        async: false
    });




    // Blog overview date range init.
    $('#blog-overview-date-range').datepicker({
        format: 'dd-mm-yyyy'
    });
    const getGuestCount = (start, end) => {
        $.getJSON(`home/handler/getGuestBasedDate.php?start=${start}&end=${end}`, function(response) {
            if (response.isSuccess) {
                const x = `${start.split('-')[0]} ${MONTH_IN_INDONESIA_WITH_INDEX[parseInt(start.split('-')[1])-1]} ${start.split('-')[2]} - ${end.split('-')[0]} ${MONTH_IN_INDONESIA_WITH_INDEX[parseInt(end.split('-')[1])-1]} ${end.split('-')[2]}`
                $("#guest-count .stats-small__label").text(x);
                $("#guest-count .count").text(response.data.count);
            } else console.log(response)
        }).fail(function(error) {
            console.log(error);
        });
    }
    $("#blog-overview-date-range").on('change', _ => {
        const start = $('input[name=start]').val();
        const end = $('input[name=end]').val();
        getGuestCount(start, end);
    })

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    let start = `01-${mm}-${yyyy}`;
    let end = `${dd}-${mm}-${yyyy}`;
    getGuestCount(start, end);

    let guestToday;
    let guestYesterday;
    $.getJSON('home/handler/getGuestToday.php', function(response) {
        if (response.isSuccess) guestToday = response.data;
        else console.log(response)
    }).fail(function(error) {
        console.log(error);
    });

    $('#today .count').text(guestToday['guest_today_count']);





    let guestThisWeek;
    let guestLastWeek;
    $.getJSON('home/handler/getGuestThisWeek.php', function(response) {
        if (response.isSuccess) guestThisWeek = response.data;
        else console.log(response);
    }).fail(function(error) {
        console.log(error);
    });

    $.getJSON('home/handler/getGuestLastWeek.php', function(response) {
        if (response.isSuccess) guestLastWeek = response.data;
        else console.log(response);
    }).fail(function(error) {
        console.log(error);
    });

    $('#this-week .count').text(guestThisWeek['guest_this_week_count']);
    if (guestLastWeek['guest_last_week_count'] == 0)
        $('#this-week .stats-small__percentage').text((guestThisWeek['guest_this_week_count'] * 100) + '%');
    else
        $('#this-week .stats-small__percentage').text(((guestThisWeek['guest_this_week_count'] - guestLastWeek['guest_last_week_count']) / guestLastWeek['guest_last_week_count']) * 100 + "%");
    guestThisWeek['guest_this_week_count'] > guestLastWeek['guest_last_week_count'] ? $('#this-week .stats-small__percentage').addClass("stats-small__percentage--increase") : $('#this-week .stats-small__percentage').addClass("stats-small__percentage--decrease");

    var chartOptions = boSmallStatsOptions(Math.max.apply(Math, guestThisWeek['guest_this_week'].map(value => parseInt(value.guest_visit_date_count))) + 1);
    var ctx = document.getElementsByClassName('blog-overview-stats-small-1');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Label 1", "Label 2", "Label 3", "Label 4", "Label 5", "Label 6", "Label 7"],
            datasets: [{
                label: 'This Week',
                fill: 'start',
                data: guestThisWeek['guest_this_week'].map(value => parseInt(value.guest_visit_date_count)),
                backgroundColor: 'rgba(0, 184, 216, 0.1)',
                borderColor: 'rgb(0, 184, 216)',
                borderWidth: 1.5,
            }]
        },
        options: chartOptions
    });


    let guestThisMonth;
    let guestLastMonth;
    $.getJSON('home/handler/getGuestThisMonth.php', function(response) {
        console.log(response)
        if (response.isSuccess) guestThisMonth = response.data;
        else console.log(response);
    }).fail(function(error) {
        console.log(error);
    });

    $.getJSON('home/handler/getGuestLastMonth.php', function(response) {
        console.log(response)
        if (response.isSuccess) guestLastMonth = response.data;
        else console.log(response);
    }).fail(function(error) {
        console.log(error);
    });


    $('#this-month .count').text(guestThisMonth['guest_this_month_count']);
    if (guestLastMonth['guest_last_month_count'] == 0)
        $('#this-month .stats-small__percentage').text((guestThisMonth['guest_this_month_count'] * 100) + '%');
    else {
        const calculate = ((guestThisMonth['guest_this_month_count'] - guestLastMonth['guest_last_month_count']) / guestLastMonth['guest_last_month_count']) * 100;
        console.log(calculate)
        $('#this-month .stats-small__percentage').text(Math.abs(parseInt(calculate)) + "%");
    }
    guestThisMonth['guest_this_month_count'] > guestLastMonth['guest_last_month_count'] ? $('#this-month .stats-small__percentage').addClass("stats-small__percentage--increase") : $('#this-month .stats-small__percentage').addClass("stats-small__percentage--decrease");

    // Options
    function boSmallStatsOptions(max) {
        return {
            maintainAspectRatio: true,
            responsive: true,
            // Uncomment the following line in order to disable the animations.
            // animation: false,
            legend: {
                display: false
            },
            tooltips: {
                enabled: false,
                custom: false
            },
            elements: {
                point: {
                    radius: 0
                },
                line: {
                    tension: 0.3
                }
            },
            scales: {
                xAxes: [{
                    gridLines: false,
                    scaleLabel: false,
                    ticks: {
                        display: false
                    }
                }],
                yAxes: [{
                    gridLines: false,
                    scaleLabel: false,
                    ticks: {
                        display: false,
                        // Avoid getting the graph line cut of at the top of the canvas.
                        // Chart.js bug link: https://github.com/chartjs/Chart.js/issues/4790
                        suggestedMax: max
                    }
                }],
            },
        };
    }

    var chartOptions = boSmallStatsOptions(Math.max.apply(Math, guestThisMonth['guest_this_month'].map(value => parseInt(value.guest_visit_date_count))) + 1);
    var ctx = document.getElementsByClassName('blog-overview-stats-small-2');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: guestThisMonth['guest_this_month'].map(value => value.guest_visit_day),
            datasets: [{
                label: 'This Month',
                fill: 'start',
                data: guestThisMonth['guest_this_month'].map(value => parseInt(value.guest_visit_date_count)),
                backgroundColor: 'rgba(0, 184, 216, 0.1)',
                borderColor: 'rgb(0, 184, 216)',
                borderWidth: 1.5,
            }]
        },
        options: chartOptions
    });





    //
    // Blog Overview Users
    //

    var bouCtx = document.getElementsByClassName('blog-overview-users')[0];

    // Data
    var bouData = {
        // Generate the days labels on the X axis.
        labels: guestThisMonth['guest_this_month'].map(value => parseInt(value.guest_visit_day)),
        datasets: [{
            label: 'Bulan ini',
            fill: 'start',
            data: guestThisMonth['guest_this_month'].map(value => parseInt(value.guest_visit_date_count)),
            backgroundColor: 'rgba(0,123,255,0.1)',
            borderColor: 'rgba(0,123,255,1)',
            pointBackgroundColor: '#ffffff',
            pointHoverBackgroundColor: 'rgb(0,123,255)',
            borderWidth: 1.5,
            pointRadius: 0,
            pointHoverRadius: 3
        }, {
            label: 'Bulan lalu',
            fill: 'start',
            data: guestLastMonth['guest_last_month'].map(value => parseInt(value.guest_visit_date_count)),
            backgroundColor: 'rgba(255,65,105,0.1)',
            borderColor: 'rgba(255,65,105,1)',
            pointBackgroundColor: '#ffffff',
            pointHoverBackgroundColor: 'rgba(255,65,105,1)',
            borderDash: [3, 3],
            borderWidth: 1,
            pointRadius: 0,
            pointHoverRadius: 2,
            pointBorderColor: 'rgba(255,65,105,1)'
        }]
    };

    // Options
    var bouOptions = {
        responsive: true,
        legend: {
            position: 'top'
        },
        elements: {
            line: {
                // A higher value makes the line look skewed at this ratio.
                tension: 0.3
            },
            point: {
                radius: 0
            }
        },
        scales: {
            xAxes: [{
                gridLines: false,
                ticks: {
                    callback: function(tick, index) {
                        // Jump every 7 values on the X axis labels to avoid clutter.
                        return index % 7 !== 0 ? '' : tick;
                    }
                }
            }],
            yAxes: [{
                ticks: {
                    suggestedMax: 45,
                    callback: function(tick, index, ticks) {
                        if (tick === 0) {
                            return tick;
                        }
                        // Format the amounts using Ks for thousands.
                        return tick > 999 ? (tick / 1000).toFixed(1) + 'K' : tick;
                    }
                }
            }]
        },
        // Uncomment the next lines in order to disable the animations.
        // animation: {
        //   duration: 0
        // },
        hover: {
            mode: 'nearest',
            intersect: false
        },
        tooltips: {
            custom: false,
            mode: 'nearest',
            intersect: false
        }
    };

    // Generate the Analytics Overview chart.
    window.BlogOverviewUsers = new Chart(bouCtx, {
        type: 'LineWithLine',
        data: bouData,
        options: bouOptions
    });

    // Hide initially the first and last analytics overview chart points.
    // They can still be triggered on hover.
    var aocMeta = BlogOverviewUsers.getDatasetMeta(0);
    aocMeta.data[0]._model.radius = 0;
    aocMeta.data[bouData.datasets[0].data.length - 1]._model.radius = 0;

    // Render the chart.
    window.BlogOverviewUsers.render();
</script>