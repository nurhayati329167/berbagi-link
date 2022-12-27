<div class="m-content" id="filter-date">
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__body">
            <!-- /.row -->
            <div class="row">
                <div class="col-6 col-md-4">
                    <div class="form-group m-form__group">
                        <label class="form-control-label" for="date_start">
                            Dari
                        </label>
                        <input type="date" class="form-control datepicker" id="date_start" value="{{ date('Y-m-d')}}"
                            placeholder="01-01-2019" name="date_start">
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="form-group m-form__group">
                        <label class="form-control-label" for="date_end">
                            Sampai
                        </label>
                        <input type="date" class="form-control datepicker" id="date_end" value="{{ date('Y-m-d')}}"
                            placeholder="31-12-2019" name="date_end">
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <button type="button" class="btn btn-outline-success w-100" style="margin-top: 25px;"
                        id="btn-filter">
                        Filter
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__body default_cursor_cs" id="total-view-container" style="">
            <div class="row m-row--no-padding m-row--col-separator-xl">
                <div class="col-md-6 col-lg-6 col-xl-6 default_cursor_cs">
                 
                    <div class="m-widget24">
                        <div class="m-widget24__item default_cursor_cs">
                            <h4 class="m-widget24__title default_cursor_cs">
                                Total View
                            </h4><br>
                            <span class="m-widget24__desc">
                                &nbsp;
                            </span>
                            <span class="m-widget24__stats m--font-success" id="total-view">0</span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar m--bg-success" role="progressbar" style="width: 100%;"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="m--space-20"></div>
                        </div>
                    </div>
                  
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 default_cursor_cs">
                    
                    <div class="m-widget24">
                        <div class="m-widget24__item default_cursor_cs">
                            <h4 class="m-widget24__title">
                                Total Klik
                            </h4><br>
                            <span class="m-widget24__desc">
                                &nbsp;
                            </span>
                            <span class="m-widget24__stats m--font-info" id="total-click">0</span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar m--bg-info" role="progressbar" style="width: 100%;"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="m--space-20"></div>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
    </div> -->
    <div class="row m-row--no-padding m-row--col-separator-xl">
    
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Grafik Pengunjung</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body chart-responsive">
                    <div class="chart">
                        <canvas id="barChart" style="height:230px"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">List Visitor</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body chart-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>URL</th>
                                <th>Page View</th>
                            </tr>
                        </thead>
                        <tbody id="table">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-6 col-lg-6 col-xl-6">
            <div class="m-portlet" id="view-chart" style="">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Grafik View
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-section">
                        <div class="m-section__content">
                            <div id="view-chart-data" style="min-width: 100%;" data-highcharts-chart="0">
                                <div id="highcharts-jmscs92-0" dir="ltr" class="highcharts-container "
                                    style="position: relative; overflow: hidden; width: 500px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                    <svg version="1.1" class="highcharts-root"
                                        style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                                        xmlns="http://www.w3.org/2000/svg" width="500" height="400"
                                        viewBox="0 0 500 400">
                                        <desc>Created with Highcharts 6.1.0</desc>
                                        <defs>
                                            <clipPath id="highcharts-jmscs92-1">
                                                <rect x="0" y="0" width="452" height="309" fill="none"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="500"
                                            height="400" rx="0" ry="0"></rect>
                                        <rect fill="none" class="highcharts-plot-background" x="38" y="53" width="452"
                                            height="309"></rect>
                                        <g class="highcharts-grid highcharts-xaxis-grid "></g>
                                        <g class="highcharts-grid highcharts-yaxis-grid "></g>
                                        <rect fill="none" class="highcharts-plot-border" x="38" y="53" width="452"
                                            height="309"></rect>
                                        <g class="highcharts-axis highcharts-xaxis "><text x="264" text-anchor="middle"
                                                transform="translate(0,0)" class="highcharts-axis-title"
                                                style="color:#666666;fill:#666666;" y="379">
                                                <tspan>Tanggal</tspan>
                                            </text>
                                            <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb"
                                                stroke-width="1" d="M 38 362.5 L 490 362.5"></path>
                                        </g>
                                        <g class="highcharts-axis highcharts-yaxis "><text x="25.600000381469727"
                                                text-anchor="middle"
                                                transform="translate(0,0) rotate(270 25.600000381469727 207.5)"
                                                class="highcharts-axis-title" style="color:#666666;fill:#666666;"
                                                y="207.5">
                                                <tspan>Total</tspan>
                                            </text>
                                            <path fill="none" class="highcharts-axis-line" d="M 38 53 L 38 362"></path>
                                        </g>
                                        <g class="highcharts-series-group">
                                            <g class="highcharts-series highcharts-series-0 highcharts-line-series highcharts-color-0 "
                                                transform="translate(38,53) scale(1 1)"
                                                clip-path="url(#highcharts-jmscs92-1)"></g>
                                            <g class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-color-0 "
                                                transform="translate(38,53) scale(1 1)"></g>
                                        </g><text x="250" text-anchor="middle" class="highcharts-title"
                                            style="color:#333333;font-size:18px;fill:#333333;" y="24">
                                            <tspan>Grafik View</tspan>
                                        </text><text x="250" text-anchor="middle" class="highcharts-subtitle"
                                            style="color:#666666;fill:#666666;" y="52"></text>
                                        <g class="highcharts-data-labels highcharts-series-0 highcharts-line-series highcharts-color-0 "
                                            transform="translate(38,53) scale(1 1)" opacity="1" visibility="visible">
                                        </g>
                                        <g class="highcharts-axis-labels highcharts-xaxis-labels "></g>
                                        <g class="highcharts-axis-labels highcharts-yaxis-labels "></g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-6">
            <div class="m-portlet" id="click-chart" style="">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Grafik Klik
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-section">
                        <div class="m-section__content">
                            <div id="click-chart-data" style="min-width: 100%;" data-highcharts-chart="1">
                                <div id="highcharts-jmscs92-5" dir="ltr" class="highcharts-container "
                                    style="position: relative; overflow: hidden; width: 500px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                    <svg version="1.1" class="highcharts-root"
                                        style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                                        xmlns="http://www.w3.org/2000/svg" width="500" height="400"
                                        viewBox="0 0 500 400">
                                        <desc>Created with Highcharts 6.1.0</desc>
                                        <defs>
                                            <clipPath id="highcharts-jmscs92-6">
                                                <rect x="0" y="0" width="430" height="287" fill="none"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="500"
                                            height="400" rx="0" ry="0"></rect>
                                        <rect fill="none" class="highcharts-plot-background" x="60" y="53" width="430"
                                            height="287"></rect>
                                        <g class="highcharts-grid highcharts-xaxis-grid ">
                                            <path fill="none" class="highcharts-grid-line" d="M 274.5 53 L 274.5 340"
                                                opacity="1"></path>
                                            <path fill="none" class="highcharts-grid-line" d="M 489.5 53 L 489.5 340"
                                                opacity="1"></path>
                                            <path fill="none" class="highcharts-grid-line" d="M 59.5 53 L 59.5 340"
                                                opacity="1"></path>
                                        </g>
                                        <g class="highcharts-grid highcharts-yaxis-grid ">
                                            <path fill="none" stroke="#e6e6e6" stroke-width="1"
                                                class="highcharts-grid-line" d="M 60 197.5 L 490 197.5" opacity="1">
                                            </path>
                                        </g>
                                        <rect fill="none" class="highcharts-plot-border" x="60" y="53" width="430"
                                            height="287"></rect>
                                        <g class="highcharts-axis highcharts-xaxis ">
                                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                                d="M 274.5 340 L 274.5 350" opacity="1"></path>
                                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                                d="M 490.5 340 L 490.5 350" opacity="1"></path>
                                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                                d="M 59.5 340 L 59.5 350" opacity="1"></path><text x="275"
                                                text-anchor="middle" transform="translate(0,0)"
                                                class="highcharts-axis-title" style="color:#666666;fill:#666666;"
                                                y="379">
                                                <tspan>Tanggal</tspan>
                                            </text>
                                            <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb"
                                                stroke-width="1" d="M 60 340.5 L 490 340.5"></path>
                                        </g>
                                        <g class="highcharts-axis highcharts-yaxis "><text x="25.637500286102295"
                                                text-anchor="middle"
                                                transform="translate(0,0) rotate(270 25.637500286102295 196.5)"
                                                class="highcharts-axis-title" style="color:#666666;fill:#666666;"
                                                y="196.5">
                                                <tspan>Total</tspan>
                                            </text>
                                            <path fill="none" class="highcharts-axis-line" d="M 60 53 L 60 340"></path>
                                        </g>
                                        <g class="highcharts-series-group">
                                            <g class="highcharts-series highcharts-series-0 highcharts-line-series highcharts-color-0 "
                                                transform="translate(60,53) scale(1 1)"
                                                clip-path="url(#highcharts-jmscs92-6)">
                                                <path fill="none" d="M 107.5 143.5 L 322.5 143.5"
                                                    class="highcharts-graph" stroke="#7cb5ec" stroke-width="2"
                                                    stroke-linejoin="round" stroke-linecap="round"></path>
                                                <path fill="none"
                                                    d="M 97.5 143.5 L 107.5 143.5 L 322.5 143.5 L 332.5 143.5"
                                                    stroke-linejoin="round" visibility="visible"
                                                    stroke="rgba(192,192,192,0.0001)" stroke-width="22"
                                                    class="highcharts-tracker"></path>
                                            </g>
                                            <g class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-color-0  highcharts-tracker"
                                                transform="translate(60,53) scale(1 1)">
                                                <path fill="#7cb5ec"
                                                    d="M 111 143.5 A 4 4 0 1 1 110.99999800000016 143.49600000066667 Z"
                                                    class="highcharts-point highcharts-color-0"></path>
                                                <path fill="#7cb5ec"
                                                    d="M 326 143.5 A 4 4 0 1 1 325.9999980000002 143.49600000066667 Z"
                                                    class="highcharts-point highcharts-color-0"></path>
                                            </g>
                                        </g><text x="250" text-anchor="middle" class="highcharts-title"
                                            style="color:#333333;font-size:18px;fill:#333333;" y="24">
                                            <tspan>Grafik Klik</tspan>
                                        </text><text x="250" text-anchor="middle" class="highcharts-subtitle"
                                            style="color:#666666;fill:#666666;" y="52"></text>
                                        <g class="highcharts-data-labels highcharts-series-0 highcharts-line-series highcharts-color-0 "
                                            transform="translate(60,53) scale(1 1)" opacity="1" visibility="visible">
                                            <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 "
                                                transform="translate(99,120)"><text x="5"
                                                    style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;"
                                                    y="16">
                                                    <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF"
                                                        stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">1
                                                    </tspan>
                                                    <tspan x="5" y="16"></tspan>
                                                </text></g>
                                            <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 "
                                                transform="translate(314,120)"><text x="5"
                                                    style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;"
                                                    y="16">
                                                    <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF"
                                                        stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">1
                                                    </tspan>
                                                    <tspan x="5" y="16"></tspan>
                                                </text></g>
                                        </g>
                                        <g class="highcharts-axis-labels highcharts-xaxis-labels "><text x="167.5"
                                                style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                                text-anchor="middle" transform="translate(0,0)" y="359"
                                                opacity="1">04-10-2022</text><text x="382.5"
                                                style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                                text-anchor="middle" transform="translate(0,0)" y="359"
                                                opacity="1">08-10-2022</text></g>
                                        <g class="highcharts-axis-labels highcharts-yaxis-labels "><text x="45"
                                                style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                                text-anchor="end" transform="translate(0,0)" y="201"
                                                opacity="1">1</text></g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head with_tab">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Link Klik
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <div class="row m-0 m-row--col-separator-xl" id="list-analytic" style="">

                <div class="col-md-12 col-lg-12 col-xl-12 rounded border py-3 item-link">
                    <div class="row m-row--no-padding">
                        <div class="col-md-11">
                            <div class="title"></div>
                            <div class="url"></div>
                        </div>
                        <div class="col-md-1">
                            <div class="total-click">
                                <h2 class="mb-0 text-center w-100"> 2</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- /.row -->
</div>

<script>
$(function jo() {
    $.ajax({
        type: 'GET',
        url: '/chart',
        success: function(data) {
            var all = data.semua
            var isi = ''
            $.each(all, function(key, val) {
                isi += val.url + val.pageViews
            });
            var barChartCanvas = $('#totview').get(0).getContext('2d')
            var barChart = new Chart(barChartCanvas)
            var barChartData = areaChartData
            barChartData.datasets[0].fillColor = '#00a65a'
            barChartData.datasets[0].strokeColor = '#00a65a'
            barChartData.datasets[0].pointColor = '#00a65a'
            var barChartOptions = {
                //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                scaleBeginAtZero: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: true,
                //String - Colour of the grid lines
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - If there is a stroke on each bar
                barShowStroke: true,
                //Number - Pixel width of the bar stroke
                barStrokeWidth: 2,
                //Number - Spacing between each of the X value sets
                barValueSpacing: 5,
                //Number - Spacing between data sets within X values
                barDatasetSpacing: 1,
                //String - A legend template
                legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                //Boolean - whether to make the chart responsive
                responsive: true,
                maintainAspectRatio: true
            }

            barChartOptions.datasetFill = false
            barChart.Bar(barChartData, barChartOptions)

        }
    })
})
</script>