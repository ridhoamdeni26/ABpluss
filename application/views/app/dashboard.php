<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed">

			<div class="x_title">
				<h2>Daashboard</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
								<h3>124.136 KM</h3>
							</div>
							<h2> Total Jarak Tempuh </h2>
							<p></p>
						</div>
					</div>
					<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="tile-stats">
							<div class="icon"><i class="fa fa-eye"></i></div>
							<div class="count">
								<h3>179,456</h3>
							</div>
							<h2>Total Viewer</h2>
							<p></p>
						</div>
					</div>
					<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="tile-stats">
							<div class="icon"><i class="fa fa-automobile"></i></div>
							<div class="count">
								<h3>179</h3>
							</div>
							<h2>Total Unit</h2>
							<p></p>
						</div>
					</div>
					<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="tile-stats">
							<div class="icon"><i class="fa fa-check-square-o"></i></div>
							<div class="count">
								<h3>1 Month</h3>
							</div>
							<h2>Durasi Campaign</h2>
							<p></p>
						</div>
					</div>
					<div class="clearfix"></div>
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
				</div>

				<div class="col-md-12 col-sm-12 col-xs-12">
					<table id="drive2" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th></th>
								<th>ID</th>
								<th>Plat Number</th>
								<th>Unit</th>
								<th>Mileage</th>
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
						<button onclick="getSelectedDriver()" type="submit" class="btn btn-success"><i class="fa fa-check"></i> Search</button>
						<button type="submit" id="locate" class="btn btn-success"><i class="fa fa-check"></i> Locate </button>
						<button id="test" type="submit" class="btn btn-success"><i class="fa fa-check"></i> test</button>
					</div>
				</div>


			</div> <!-- close x content -->


		</div> <!-- closse xpanel -->
	</div> <!-- close col -->
</div> <!-- close row -->

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed">

			<div class="x_content">
				<div class="form-group">
					<label for="province">Province :</label>
					<select class="form-control" onchange="initMap()" name="province" id="province">
						<option selected='selected' value="31">DKI Jakarta</option>
						<option value="36">Banten</option>
						<option value="32">Jawa Barat</option>
						<option value="12">Sumatra Utara</option>
					</select>
					<div class="clearfix"></div>
				</div>
				<div id="googleMap" style="width:100%;height:700px;"></div>
				<br>
			</div> <!-- close x content -->


		</div> <!-- closse xpanel -->
	</div> <!-- close col -->
</div> <!-- close row -->
<br />
<!-- /page content -->

<!-- Route Modal -->
<div class="modal fade" id="routeModal" role="dialog">
	<div class="modal-dialog modal-lg">

		<!-- Route content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Route</h4>
			</div>
			<div class="modal-body">
				<div id="map" style="width:100%;height:700px;"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAj7tSdjukVN4virXCXLUnKLJ4UR_gXVG0&libraries=visualization&callback=initialize"
 async defer></script>
<script type="text/javascript">
	var SITE_URL = "<?php echo site_url() ?>";
	var markers = [];
	var lastLocationsData = false
	var map
	var global_gps_data
	var selected_data = []

	function initialize() {
		initMap();
		initAutocomplete();
	}

	function initMap() {
		var province = document.getElementById('province').value;
		var lat;
		var lng;
		$.ajax({
			url: SITE_URL + 'assets/provinces.json',
			method: 'get',
			dataType: 'json',
			async: false,
			cache: false,
			success: function (result) {
				for (i = 0; i < result.length; i++) {
					if (result[i]['id'] == province) {
						lat = parseFloat(result[i]['latitude']);
						lng = parseFloat(result[i]['longitude']);
						break;
					}
				}
			},

		});

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

	function getArea() {
		$.ajax({
			url: SITE_URL + 'assets/datanew.json',
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
				for (var i = 0; i < data.length; i++) {
					var beach = data[i];
					totalMileage += parseFloat(beach[5])
				}
				$('#totalUnit').text(data.length)
				$('#totalMileage').text(totalMileage + ' km')
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

	function placeMarkers(map) {
		if (lastLocationsData != false) {
			renderMarkers(lastLocationsData)
		} else {
			$.ajax({
				url: SITE_URL + 'assets/datanew.json',
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
			console.log(beach)

			var marker = new google.maps.Marker({
				position: {
					lat: parseFloat(beach[1]),
					lng: parseFloat(beach[2])
				},
				map: map,
				icon: "<?php echo base_url() ?>assets/build/images/mobil.png",
				info: beach[0] + ' ' + beach[4],
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
	//close function initmap()

	function initAutocomplete() {
		var detailPeta = {
			center: new google.maps.LatLng(-6.21462, 106.84513),
			zoom: 12,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		var peta2 = new google.maps.Map(document.getElementById("map"), detailPeta);

		var flightPlanCoordinates = [];

		$.ajax({
			url: SITE_URL + 'assets/jemboet.json',
			method: 'get',
			dataType: 'json',
			async: false,
			success: function (result) {
				for (i = 0; i < result['results'][0]['data'].length; i++) {
					latitude = parseFloat(result['results'][0]['data'][i]['lat']);
					longitude = parseFloat(result['results'][0]['data'][i]['lng']);
					flightPlanCoordinates.push(new google.maps.LatLng(latitude, longitude))
				}

				var heatmap = new google.maps.visualization.HeatmapLayer({
					data: flightPlanCoordinates,
					map: peta2,
					opacity: 0.75,
				});

				start_latitude = parseFloat(result['results'][0]['data'][0]['lat']);
				start_longitude = parseFloat(result['results'][0]['data'][0]['lng']);

				end_latitude = parseFloat(result['results'][0]['data'][result['results'][0]['data'].length - 100]['lat']);
				end_longitude = parseFloat(result['results'][0]['data'][result['results'][0]['data'].length - 100]['lng']);

				//flightPath.setMap(peta);

				function setMarkersdetail(map2) {
					var marker = new google.maps.Marker({
						position: {
							lat: start_latitude,
							lng: start_longitude
						},
						map: map2,
						icon: "<?php echo base_url() ?>assets/build/images/mobil.png",
					});

				}
				setMarkersdetail(peta2);

				function setMarkers2detail(map2) {
					var marker = new google.maps.Marker({
						position: {
							lat: end_latitude,
							lng: end_longitude
						},
						map: map2,
						icon: "<?php echo base_url() ?>assets/build/images/mobil.png",
					});

				}
				setMarkers2detail(peta2);
			}

		});

	}

	// event jendela di-load
	// google.maps.event.addDomListener(window, 'load', initAutocomplete);
</script>
<script type="text/javascript">
	var SITE_URL = "<?php echo site_url() ?>";
	var json_url = SITE_URL + 'assets/datanew.json';

	function prepareArea() {
		var hasil_row = $('#drive').DataTable({
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

		$('#test').click(function () {
			//deleteMarkers()
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
				//}
			}
			$('#drive2').DataTable().destroy()
			renderMarkers(selected_data);
			prepareTable();
		});
	}



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

		$('#detail').DataTable({
			"searching": false,
			"columnDefs": [{
				"orderable": true,
				"scrollX": true
			}],
		});

		$('#detail').DataTable({
			"searching": false,
			"columnDefs": [{
				"orderable": true,
				"scrollX": true
			}],
		});

		$('#report').DataTable({
			"searching": false,
			"fixedHeader": false,
			"columnDefs": [{
				"orderable": true,
				"scrollX": true
			}],
		});

	}

	function getSelectedDriver() {
		console.log($('#drive2').DataTable().row({
			selected: true
		}));
	}
	$('#locate').click(function () {
		//deleteMarkers()
		selected_data = []
		//var driverData = ''
		//$('#tableDriver').html(driverData)
		data = tableDriver.rows('.selected').data();
		for (var i = data.length - 1; i >= 0; i--) {
			$.each(global_gps_data, function (index, item) {
				// console.log(item[0].toLowerCase())
				// console.log( data[i][2].toLowerCase())
				if (item[0].toLowerCase() == data[i][2].toLowerCase()) {
					selected_data.push(item)
				}
			})
			//}
		}

		console.log(selected_data[0])
		map.setCenter(new google.maps.LatLng(parseFloat(selected_data[0][1]), parseFloat(selected_data[0][2])));
		//$('#drive2').DataTable().destroy()
		//renderMarkers(selected_data);
		//prepareTable();
		deleteMarkers()
		peta()
	})
</script>

<script type="text/javascript">

</script>