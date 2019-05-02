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
			<br>
			<div class="x_content">
				<div class="row top_tiles">
					<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="tile-stats">
							<div class="left icon"><i class="fa fa-tachometer"></i></div>
							<div class="count">
								<h3 id="totalMileage">-</h3>
							</div>
							<h2> Total Jarak Tempuh </h2>
							<p></p>
						</div>
					</div>
					<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="tile-stats">
							<div class="icon"><i class="fa fa-eye"></i></div>
							<div class="count">
								<h3 id="totalViewer">Data Kurang</h3>
							</div>
							<h2>Total Impression</h2>
							<p></p>
						</div>
					</div>
					<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="tile-stats">
							<div class="icon"><i class="fa fa-automobile"></i></div>
							<div class="count">
								<h3 id="totalUnit">-</h3>
							</div>
							<h2>Total Unit</h2>
							<p></p>
						</div>
					</div>
					<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="tile-stats">
							<div class="icon"><i class="fa fa-check-square-o"></i></div>
							<div class="count">
								<h3>3 Month</h3>
							</div>
							<h2>Durasi Campaign</h2>
							<p></p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<br>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div id="chart-js">
						<div class="clearfix"></div>
					</div>
				</div>
				<br>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<table id="drive" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th></th>
								<th>Area</th>
								<th>Jumlah Unit</th>
							</tr>
						</thead>
						<tbody id="tableArea">
						</tbody>
					</table>
					<br>
					<br>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<table id="drive2" class="table table-striped table-bordered hidden" style="width:100%;">
						<thead>
							<tr>
								<th></th>
								<th>ID</th>
								<th>Plat Number</th>
								<th>Unit</th>
								<th>Mileage</th>
								<th>Impression</th>
								<th>Last Location</th>
								<th>Status</th>
								<th>Detail</th>
							</tr>
						</thead>
						<tbody id="tableDriver">
						</tbody>
					</table>
					<div class="clearfix"></div>
					<br>
					<br>
					<div align="right" class="col-md-12 col-sm-12 col-xs-12">
						<button type="button" id="locate" class="hidden btn btn-success">View Drivers in Map </button>
						<button id="test" type="button" class="btn btn-success">Search Drivers Data</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> `
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed">
			<div class="x_content">
				<div id="googleMap" style="width:100%;height:700px;"></div>
				<br>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="routeModal" role="dialog">
	<div class="modal-dialog modal-lg">

		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Route</h4>
			</div>
			<div class="modal-body">
				<div id="googleHeatMap" style="width:100%;height:700px;"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo site_url()?>assets/vendors/jquery/dist/jquery.min.js"></script>
<script
	src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAj7tSdjukVN4virXCXLUnKLJ4UR_gXVG0&libraries=visualization&callback=initialize">
</script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<script type="text/javascript">
	var SITE_URL = "http://marugame.abplusscar.com/";
	var SITE_LOCAL = "<?php echo site_url()?>";
	var markers = [];
	var lastLocationsData = false
	var map
	var global_gps_data
	var selected_data = []
	lat = -6.11259;
	lng = 106.7375;

	function getDailyReport() {
		var reportData = "";
		$.ajax({
			url: SITE_URL + 'gps/dailyreport/',
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
	//button hidden before click
	$("#test").click(function () {
		if ('#test') {
			$('#drive2').removeClass("hidden");
			$('#locate').removeClass("hidden");
		}
	});

	//set google map view
	map = new google.maps.Map(document.getElementById('googleMap'), {
		zoom: 6,
		center: {
			lat: lat,
			lng: lng
		},
		gestureHandling: 'greedy',
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		styles: [{
				"featureType": "administrative",
				"stylers": [{
					"visibility": "simplified"
				}]
			},
			{
				"featureType": "administrative",
				"elementType": "geometry",
				"stylers": [{
					"visibility": "off"
				}]
			},
			{
				"featureType": "administrative.land_parcel",
				"stylers": [{
					"visibility": "off"
				}]
			},
			{
				"featureType": "administrative.neighborhood",
				"stylers": [{
					"visibility": "simplified"
				}]
			},
			{
				"featureType": "road.arterial",
				"stylers": [{
					"visibility": "off"
				}]
			},
			{
				"featureType": "road.highway",
				"stylers": [{
					"visibility": "simplified"
				}]
			}
		]
	});

	//funtion for get maps API
	function initialize() {
		initMap();
	}

	//for google maps indonesia
	function initMap() {
		var lat;
		var lng;

		lat = -6.11259
		lng = 106.7375
		map = new google.maps.Map(document.getElementById('googleMap'), {
			zoom: 7,
			center: {
				lat: lat,
				lng: lng
			},
			gestureHandling: 'greedy',
			mapTypeId: google.maps.MapTypeId.ROADMAP,
		});

	}

	//get area tabledata after click search driver
	function getArea() {
		$.ajax({
			url: SITE_URL + 'gps/lastlocations/',
			method: 'get',
			dataType: 'json',
			async: false,
			cache: false,
			success: function (result) {
				var cities = result['results'][0]['cities']
				var data = result['results'][1]['data']
				global_gps_data = data
				lastLocationsData = data
				var totalMileage = 0
				var totalViewer = 0
				for (var i = 0; i < data.length; i++) {
					var beach = data[i];
					totalMileage += parseFloat(beach[5])
					totalViewer += parseFloat(beach[9])
				}
				var total_mileage = totalMileage;
				var total_viewer = totalViewer

				var hasil_total_mileage = total_mileage.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")
				var hasil_total_viewer = total_viewer.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")

				$('#totalUnit').text(data.length)
				$('#totalViewer').text(hasil_total_viewer)
				$('#totalMileage').text(hasil_total_mileage + ' km')
				var table_cities = ''
				for (var key in cities) {
					table_cities += "<tr><td></td><td>" +
						key +
						"</td>"
					table_cities += "<td>" +
						cities[key] +
						"</td></tr>"
				}
				$('#tableArea').html(table_cities);
			}
		});
	}

	//get marker after click
	function placeMarkers(map) {
		if (lastLocationsData != false) {
			renderMarkers(lastLocationsData)
		} else {
			$.ajax({
				url: SITE_URL + 'gps/lastlocations/',
				method: 'get',
				dataType: 'json',
				async: false,
				cache: false,
				success: function (result) {
					gpsData = result['results'][1]['data']
					renderMarkers(gpsData)
				}
			});
		}
	}

	function renderMarkers(gpsData) {
		var driverData = ''
		$('#tableDriver').html(driverData)
		data = gpsData
		for (var i = 0; i < data.length; i++) {
			var beach = data[i];

			driverData +=
				"<tr>" +
				"<td></td>" +
				"<td>" + (i + 1) + "</td>" +
				"<td>" + beach[0] + "</td>" +
				"<td>" + "mobil" + "</td>" +
				"<td>" + beach[5] + "</td>" +
				"<td>" + beach[9] + "</td>" +
				"<td>" + beach[7] + "</td>" +
				"<td>" +
				"<button disabled='disabled' type='button'" +
				"class='btn "
			var is_engine_on = false
			if (beach[4] == 'ENGINE ON') {
				driverData +=
					"btn-success'>"
				is_engine_on = true
			} else {
				driverData +=
					"btn-danger'>"
			}
			if (is_engine_on == true) {
				driverData += "Active"
			} else {
				driverData += "Inactive"
			}
			driverData +=
				"</button></td>" +
				"<td>" +
				"<button type='button' class='btn btn-info' id='route' data-toggle='modal' " +
				"onclick='" + 'initHeatMap("' + beach[0] +
				'",' + parseFloat(beach[1]) + ',' +
				parseFloat(beach[2]) + ')' + "'" +
				"data-target='#routeModal'>Detail</button>" +
				"</td></tr>"
		}
		$('#tableDriver').html(driverData)
	}

	function peta() {
		data = selected_data
		for (var i = 0; i < data.length; i++) {
			var beach = data[i];
			// console.log(beach)

			var marker = new google.maps.Marker({
				position: {
					lat: parseFloat(beach[1]),
					lng: parseFloat(beach[2])
				},
				map: map,
				icon: "<?php echo base_url() ?>assets/build/images/mobil.png",
				info: '<h5>Info Kendaraan</h5>' + 'No Plat :' + ' ' + beach[0] + ' ' + '<br>' +
					' Mileage: ' + beach[5] + '<br>' +
					' Impression: ' + beach[9],
			});

			markers.push(marker)
			var infowindow3 = new google.maps.InfoWindow();
			google.maps.event.addListener(marker, 'mouseover', function () {
				infowindow3.setContent(this.info);
				infowindow3.open(map, this);
			});
		}
	}

	function deleteMarkers() {
		//Loop through all the markers and remove
		for (var i = 0; i < markers.length; i++) {
			markers[i].setMap(null);
		}
		markers = [];
	};

	getArea(map);
</script>
<script type="text/javascript">
	var coordinates = []
	var path
	var SITE_URL = "http://marugame.abplusscar.com/";

	function initHeatMap(license_no, lati, lngt) {
		var propertiPeta = {
			center: new google.maps.LatLng(lati, lngt),
			zoom: 10,
			gestureHandling: 'greedy',
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		var peta = new google.maps.Map(document.getElementById("googleHeatMap"), propertiPeta);
		var data_location
		$.ajax({
			url: SITE_URL + 'gps/?license_no=' + license_no,
			method: 'get',
			dataType: 'json',
			async: false,
			cache: false,
			success: function (result) {
				// console.log(result)
				var dummy = []
				var data_location = []
				var data = result['results'][0]['data']
				for (var i = 0; i < data.length; i++) {
					dummy.push(new google.maps.LatLng(
						parseFloat(data[i]['lat']),
						parseFloat(data[i]['lng'])));
				}

				heatmap = new google.maps.visualization.HeatmapLayer({
					data: dummy,
					map: peta,
					radius: 60,
					opacity: 0.75,
				});

			}
		});
	}
	var json_url = SITE_URL + 'gps/lastlocations/';
	var hasil_row;

	function prepareArea() {
		hasil_row = $('#drive').DataTable({
			"searching": true,
			"dom": 'Bfrtip',
			buttons: [
				'print',
				'selectAll',
				'selectNone'
			],
			columnDefs: [{
				scrollX: false,
				orderable: false,
				className: 'select-checkbox',
				targets: 0,
				Targets: [-1, 0],
				checkboxes: {
					selectRow: true
				},
			}],
			select: {
				style: 'multi',
				selector: 'td:first-child'
			},
			order: [
				[1, 'asc']
			]
		});

		$('#drive tbody').on('click', 'tr', function () {
			$(this).toggleClass('selected');
		});

		$('#drive2 tbody').on('click', 'tr', function () {
			$(this).toggleClass('selected');
		});
	}


	$('#test').click(function () {
		selected_data = []
		var driverData = ''
		$('#tableDriver').html(driverData)
		data = hasil_row.rows('.selected').data();
		for (var i = data.length - 1; i >= 0; i--) {
			$.each(global_gps_data, function (index, item) {
				if (item[7].toLowerCase() == data[i][1].toLowerCase()) {
					selected_data.push(item)
				}
			})
		}
		$('#drive2').DataTable().destroy()
		renderMarkers(selected_data);
		prepareTable();
	});

	function prepareTable() {
		tableDriver = $('#drive2').DataTable({
			"searching": true,
			"dom": 'Bfrtip',
			pageLength: 10,
			buttons: [
				'print',
				'selectAll',
				'selectNone'
			],
			columnDefs: [{
				scrollX: false,
				orderable: false,
				className: 'select-checkbox',
				targets: 0,
				checkboxes: {
					selectRow: true
				},
			}],
			select: {
				style: 'multi',
				selector: 'td:first-child'
			},
			order: [
				[1, 'asc']
			]
		});
	}

	function getSelectedDriver() {
		console.log($('#drive2').DataTable().row({
			selected: true
		}));
	}
	$('#locate').click(function () {
		selected_data = []
		data = tableDriver.rows('.selected').data();
		for (var i = data.length - 1; i >= 0; i--) {
			$.each(global_gps_data, function (index, item) {
				if (item[0].toLowerCase() == data[i][2].toLowerCase()) {
					selected_data.push(item)
				}
			})
			//}
		}

		map.setCenter(new google.maps.LatLng(parseFloat(selected_data[0][1]), parseFloat(selected_data[0][2])));

		deleteMarkers()
		peta()
	})
</script>
<script>
	function visitorData(data) {
		console.log(data)
		var tanggal = []
		var viewer = []
		for (var key in data) {
			viewer.push(data[key]['viewer'])
			tanggal.push(key)
		}
		Highcharts.chart('chart-js', {
			title: {
				text: 'Total Impression'
			},

			subtitle: {
				text: 'Plain'
			},

			xAxis: {
				categories: tanggal,
			},

			series: [{
				name: 'Impression',
				type: 'column',
				color: '#89c342',
				data: viewer,
				showInLegend: false,
				style: {
					fontSize: '13px',
					fontFamily: 'Verdana, sans-serif'
				},
			}],
		});
	}
</script>
</div>