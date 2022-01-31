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
            <h5>Laporan Grafik Pengunjung</h5>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <canvas height="75" style="max-width: 100% !important;" class="blog-overview-users"></canvas>
        </div>
    </div>
    <!-- End Default Light Table -->
</div>
<script>
    //
    // Blog Overview Users
    //
    // https://stackoverflow.com/questions/13009755/getjson-synchronous
    $.ajaxSetup({
        async: false
    });

    let guestThisMonth;
    let guestLastMonth;
    $.getJSON('home/handler/getGuestThisMonth.php', function(response) {
        if (response.isSuccess) guestThisMonth = response.data;
        else console.log(response);
    }).fail(function(error) {
        console.log(error);
    });

    $.getJSON('home/handler/getGuestLastMonth.php', function(response) {
        if (response.isSuccess) guestLastMonth = response.data;
        else console.log(response);
    }).fail(function(error) {
        console.log(error);
    });
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
    window.print();
</script>