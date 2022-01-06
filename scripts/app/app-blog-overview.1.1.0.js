/*
 |--------------------------------------------------------------------------
 | Shards Dashboards: Blog Overview Template
 |--------------------------------------------------------------------------
 */

'use strict';

(function ($) {
  $(document).ready(function () {

    //
    // Users by device pie chart
    //

    // Data
    var ubdData = {
      datasets: [{
        hoverBorderColor: '#ffffff',
        data: [68, 24, 7],
        backgroundColor: [
          'rgba(0,123,255,0.9)',
          'rgba(0,123,255,0.5)',
          'rgba(0,123,255,0.3)'
        ]
      }],
      labels: ["Desktop", "Tablet", "Mobile"]
    };

    // Options
    var ubdOptions = {
      legend: {
        position: 'bottom',
        labels: {
          padding: 25,
          boxWidth: 20
        }
      },
      cutoutPercentage: 0,
      // Uncomment the following line in order to disable the animations.
      // animation: false,
      tooltips: {
        custom: false,
        mode: 'index',
        position: 'nearest'
      }
    };

    var ubdCtx = document.getElementsByClassName('blog-users-by-device')[0];

    // Generate the users by device chart.
    window.ubdChart = new Chart(ubdCtx, {
      type: 'pie',
      data: ubdData,
      options: ubdOptions
    });

  });
})(jQuery);
