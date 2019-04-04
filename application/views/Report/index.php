  <div class="row">
  	<div class="col-md-12 col-sm-12 col-xs-12">
  		<div class="x_panel tile fixed">

  			<div class="x_title">
  				<h2>Daashboard</h2>
  				<ul class="nav navbar-right panel_toolbox">
  					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
  					<li class="dropdown">
  						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
  								class="fa fa-wrench"></i></a>
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

  				<div class="col-md-12 col-sm-12 col-xs-12">
  					<table id="report" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
  						<thead>
  							<tr>
  								<th>Date</th>
  								<th>Total Mileage</th>
  								<th>Total Impression</th>
  								<th>Action</th>
  							</tr>
  						</thead>
  						<tbody id="tableReport"></tbody>
  					</table>
  				</div>
  			</div> <!-- close x content -->

  			<!-- Detail Modal -->
  			<div class="modal fade" id="detailModal" role="dialog">
  				<div class="modal-dialog modal-lg">

  					<!-- Detail content-->
  					<div class="modal-content">
  						<div class="modal-header">
  							<button type="button" class="close" data-dismiss="modal">&times;</button>
  							<h4 class="modal-title">Detail</h4>
  						</div>
  						<div class="modal-body">
  							<table id="detail_table" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
  								<thead>
  									<tr>
  										<th>License No</th>
  										<th>Unit</th>
  										<th>Total Mileage</th>
  										<th>Impression</th>
  									</tr>
  								</thead>
  								<tbody id="tableDetail"></tbody>
  							</table>
  							<div class="clearfix"></div>
  						</div>
  						<div class="modal-footer">
  							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  						</div>
  					</div>
  				</div>
  			</div>

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
  							<div id="googleMap" style="width:100%;height:700px;"></div>
  						</div>
  						<div class="modal-footer">
  							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  						</div>
  					</div>

  				</div>
  			</div>


  		</div> <!-- closse xpanel -->
  	</div> <!-- close col -->
  </div> <!-- close row -->

  <br />
  <!-- /page content -->
  <script
  	src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAj7tSdjukVN4virXCXLUnKLJ4UR_gXVG0&libraries=visualization&callback=initMap">
  </script>

  <script type="text/javascript">
  	$(document).ready(function () {
  		$('#report').DataTable({
  			"fixedHeader": false,
  			"columnDefs": [{
  				"orderable": true,
  				"scrollX": true
  			}],
  			"dom": 'Bfrtip',
  			"buttons": [{
  					extend: 'csv',
  					footer: true,
  					exportOptions: {
  						columns: [0, 1, 2]
  					}
  				},
  				{
  					extend: 'print',
  					exportOptions: {
  						columns: [0, 1, 2]
  					}
  				}
  			]
  		});

  		$('#detailModal').on('shown.bs.modal', function () {
  			var table = $('#detail_table').DataTable({
  				"fixedHeader": false,
  				"pageLength": 10,
  				"DisplayLength": 10,
  				"columnDefs": [{
  					"orderable": true,
  					"scrollX": true
  				}],
  				"dom": 'Bfrtip',
  				"buttons": [{
  						extend: 'csv',
  						footer: true,
  						exportOptions: {
  							columns: [0, 1, 2, 3]
  						}
  					},
  					{
  						extend: 'print',
  						exportOptions: {
  							columns: [0, 1, 2, 3]
  						}
  					}
  				]
  			});
  			table.columns.adjust();
  		});
  	});

  	var SITE_URL = "http://marugame.abplusscar.com/";
  	var global_gps_data;

  	function initMap() {
  		var propertiPeta = {
  			center: new google.maps.LatLng(-6.21462, 106.84513),
  			zoom: 10,
  			mapTypeId: google.maps.MapTypeId.ROADMAP
  		};

  		var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  		var heatmap = new google.maps.visualization.HeatmapLayer({
  			data: global_gps_data,
  			map: peta,
  			radius: 60,
  			opacity: 0.75,
  		});
  	}

  	function getDailyReport() {
  		var reportData = "";
  		$.ajax({
  			url: SITE_URL + 'gps/dailyreport/',
  			method: 'get',
  			dataType: 'json',
  			async: false,
  			cache: false,
  			success: function (result) {
  				var datelist = result['results'][0]['datelist']
  				for (var key in datelist) {
  					reportData += "<tr>" +
  						"<td>" + key + "</td>" +
  						"<td>" + datelist[key]['mileage'] + "</td>" +
  						"<td>" + datelist[key]['viewer'] + "</td>" +
  						"<td>" +
  						"<button type='button'" +
  						"onclick='getReport(" + '"' + key + '"' + ")' " +
  						"class='btn btn-info' id='Detail' data-toggle='modal' data-target='#detailModal'><i class='fa fa-search'> Detail </i></button>" +
  						"</td>" +
  						"</tr>"
  				}
  				$('#tableReport').html(reportData);
  			}
  		});
  	}

  	function getReport(date) {
  		var detail_data = "";
  		$.ajax({
  			url: SITE_URL + 'gps/datereport/' + date + '/',
  			method: 'get',
  			dataType: 'json',
  			async: false,
  			cache: false,
  			success: function (result) {
  				var reportlist = result['results'][0]['reportlist']
  				for (var i = 0; i < reportlist.length; i++) {
  					console.log(reportlist[i])
  					detail_data += "<tr>" +
  						"<td>" + reportlist[i]['license_no'] + "</td>" +
  						"<td>" + reportlist[i]['unit'] + "</td>" +
  						"<td>" + reportlist[i]['mileage'] + "</td>" +
  						"<td>" + reportlist[i]['viewer'] + "</td>" +
  						"</tr>"
  				}
  				$('#tableDetail').html(detail_data);
  				$('#detail_table').DataTable().destroy();
  			}
  		});
  	}

  	function getArea() {

  	}
  	getDailyReport();
  </script>