<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed">
			<div class="x_title">
				<h2>Dashboard</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
							aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Settings 1</a>
							</li>
							<li><a href="#">Settings 2</a>
							</li>
						</ul>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-12 col-sm-12 col-xs-12">
					<div id="chart-js">
						<div class="clearfix"></div>
					</div>
                </div>
                <div class="cleafix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="chart-js2">
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                        <div id="chart-area" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto">
                            <div class="clearfix"></div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<!-- <script src="<?php echo site_url()?>assets/vendors/jquery/dist/jquery.min.js"></script> -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
		getChart();
        getArea();
	});
    var SITE_URL_DBS2 = "http://dbs2.abplusscar.com/";
    var SITE_URL_DBS1 = "http://bankdbs.abplusscar.com/";

    function getArea(){
        $.ajax({
            url: SITE_URL_DBS1 + 'gps/lastlocations/',
			method: 'get',
			dataType: 'json',
			async: false,
			cache: false,
			success: function (result) {
                var cities = result['results'][0]['cities']
                dataAreaPie(cities)
            }
        })
    }

    function dataAreaPie(cities){
        name_cities = []
        value_cities = []
        for (var key in cities) {
                name_cities.push(key)
                value_cities.push(cities[key])
            }
            Highcharts.chart('chart-area', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Browser market shares in January, 2018'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                        }
                    }
                },
                series: [{
                    name: 'Brands',
                    colorByPoint: true,
                    data: [{
                        name: name_cities,
                        y: value_cities
                    }]
                }]
            });
    }

    function getChart() {
		$.ajax({
			url: SITE_URL_DBS2 + 'gps/dailyreport/',
			method: 'get',
			dataType: 'json',
			async: false,
			cache: false,
			success: function (result) {
				var data = result['results'][0]['datelist']
				visitorData(data)
			}
		});
	}

    function visitorData(data) {
		var tanggal = []
		var viewer = []
		var mileage = []
		for (var key in data) {
			viewer.push(data[key]['viewer'])
			tanggal.push(key)
			mileage.push(data[key]['mileage'])
		}

        Highcharts.chart('chart-js2', {
			title: {
				text: 'Total Impression'
			},

			xAxis: {
				categories: tanggal,
			},
            yAxis: {
                alternateGridColor: '#FDFFD5'
            },

			series: [{
				name: 'Impression',
				type: 'column',
				color: '#90EE90',
				data: viewer,
				showInLegend: false,
				style: {
					fontSize: '13px',
					fontFamily: 'Verdana, sans-serif'
				},
			}],
		});

        //chart Mileage
		Highcharts.chart('chart-js', {
			title: {
				text: 'Total Mileage'
			},

			xAxis: {
				categories: tanggal,
                style: {
					fontSize: '13px',
					fontFamily: 'Verdana, sans-serif'
				},
			},
            yAxis: {
                alternateGridColor: '#FDFFD5'
            },

			series: [{
				name: 'Mileage',
				type: 'column',
				color: '#7FFFD4',
				data: mileage,
				showInLegend: false,
				style: {
					fontSize: '13px',
					fontFamily: 'Verdana, sans-serif'
				},
			}],
		});
	}
</script>