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
                  <div class="count"><h3>124.136 KM</h3></div>
                  <h2> Total Jarak Tempuh </h2>
                  <p></p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-eye"></i></div>
                  <div class="count"><h3>179,456</h3></div>
                  <h2>Total Viewer</h2>
                  <p></p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-automobile"></i></div>
                  <div class="count"><h3>179</h3></div>
                  <h2>Total Unit</h2>
                  <p></p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i></div>
                  <div class="count"><h3>1 Month</h3></div>
                  <h2>Durasi Campaign</h2>
                  <p></p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <br>

            <div class="col-md-6 col-sm-6 col-xs-12">
            	<div class="form-group">
      				<label class="control-label col-md-3 col-sm-3 col-xs-12">Area</label>
      					<div class="col-md-9 col-sm-9 col-xs-12">
      						<input type="text" id="area" name="area" required="required" class="form-control">
      					</div>
      				<div class="clearfix"></div>
      			</div>
      			<br>

      			<div align="right" class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button type="submit" id="send" class="btn btn-success"><i class="fa fa-search"> Search </i></button>
                </div>
                <div class="clearfix"></div>
                <br>
                <br>

            	<table id="drive" class="table table-striped table-bordered" style="width:100%">
				    <thead>
				        <tr>
				        	<th></th>
				            <th>Area</th>
				            <th>Jumlah Unit</th>
				        </tr>
				    </thead>
				    <tbody>
				        <tr>
				        	<td></td>
				            <td>Medan</td>
				            <td>50</td>
				        </tr>
				        <tr>
				        	<td></td>
				            <td>Bekasi</td>
				            <td>1</td>
				        </tr>
				    </tbody>
				</table>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">

            	<div class="form-group">
      				<label class="control-label col-md-3 col-sm-3 col-xs-12">Plat Number</label>
      					<div class="col-md-9 col-sm-9 col-xs-12">
      						<input type="text" id="plat" name="plat" required="required" class="form-control">
      					</div>
      				<div class="clearfix"></div>
      			</div>

                <div class="form-group">
      				<label class="control-label col-md-3 col-sm-3 col-xs-12">Type Unit</label>
      					<div class="col-md-9 col-sm-9 col-xs-12">
      						<input type="text" id="unit" name="unit" required="required" class="form-control">
      					</div>
      				<div class="clearfix"></div>
      			</div>
      			<br>

      			<div align="right" class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button type="submit" id="send" class="btn btn-success"><i class="fa fa-search"> Search </i></button>
                </div>
                <br>

            	<table id="drive2" class="table table-striped table-bordered" style="width:100%">
				    <thead>
				        <tr>
				        	<th></th>
				        	<th>ID</th>
				            <th>Plat Number</th>
				            <th>Unit</th>
				            <th>Status</th>
				            <th>Detail</th>
				        </tr>
				    </thead>
				    <tbody>
				        <tr>
				        	<td></td>
				        	<td>1</td>
				            <td>B 4726 POL</td>
				            <td>Honda Scoopy</td>
				            <td>
				            	<p align="center"><button disabled="disabled" type="button" class="btn btn-success">Active</i></button></p>
				            	<!-- <p align="center"><button disabled="disabled" type="button" class="btn btn-warning">Deactive</i></button></p> -->
				            </td>
				            <td><p align="center"><button type="button" data-toggle="modal" data-target="#routeModal" class="btn btn-info">Detail</button></p></td>
				        </tr>
				        <tr>
				        	<td></td>
				        	<td>2</td>
				            <td>B 4212 KIL</td>
				            <td>Yamaha Mio</td>
				            <td>
				            	<!-- <p align="center"><button disabled="disabled" type="button" class="btn btn-success">Active</i></button></p> -->
				            	<p align="center"><button disabled="disabled" type="button" class="btn btn-warning">Deactive</i></button></p>
				            </td>
				            <td><p align="center"><button type="button" data-toggle="modal" data-target="#routeModal" class="btn btn-info">Detail</button></p></td>
				        </tr>
				        <tr>
				        	<td></td>
				        	<td>3</td>
				            <td>B 9810 GUI</td>
				            <td>Honda Scoopy</td>
				            <td>
				            	<p align="center"><button disabled="disabled" type="button" class="btn btn-success">Active</i></button></p>
				            	<!-- <p align="center"><button disabled="disabled" type="button" class="btn btn-warning">Deactive</i></button></p> -->
				            </td>
				            <td><p align="center"><button type="button" data-toggle="modal" data-target="#routeModal" class="btn btn-info">Detail</button></p></td>
				        </tr>
				        <tr>
				        	<td></td>
				        	<td>4</td>
				            <td>B 7712 MIL</td>
				            <td>Yamaha Mio</td>
				            <td>
				            	<!-- <p align="center"><button disabled="disabled" type="button" class="btn btn-success">Active</i></button></p> -->
				            	<p align="center"><button disabled="disabled" type="button" class="btn btn-warning">Deactive</i></button></p>
				            </td>
				            <td><p align="center"><button type="button" data-toggle="modal" data-target="#routeModal" class="btn btn-info">Detail</button></p></td>
				        </tr>
				        <tr>
				        	<td></td>
				        	<td>5</td>
				            <td>B 9819 JUM</td>
				            <td>Yamaha Mio</td>
				            <td>
				            	<p align="center"><button disabled="disabled" type="button" class="btn btn-success">Active</i></button></p>
				            	<!-- <p align="center"><button disabled="disabled" type="button" class="btn btn-warning">Deactive</i></button></p> -->
				            </td>
				            <td><p align="center"><button type="button" data-toggle="modal" data-target="#routeModal" class="btn btn-info">Detail</button></p></td>
				        </tr>
				        <tr>
				        	<td></td>
				        	<td>2</td>
				            <td>B 4212 KIL</td>
				            <td>Yamaha Mio</td>
				            <td>
				            	<!-- <p align="center"><button disabled="disabled" type="button" class="btn btn-success">Active</i></button></p> -->
				            	<p align="center"><button disabled="disabled" type="button" class="btn btn-warning">Deactive</i></button></p>
				            </td>
				            <td><p align="center"><button type="button" data-toggle="modal" data-target="#routeModal" class="btn btn-info">Detail</button></p></td>
				        </tr>
				        <tr>
				        	<td></td>
				        	<td>2</td>
				            <td>B 4212 KIL</td>
				            <td>Yamaha Mio</td>
				            <td>
				            	<!-- <p align="center"><button disabled="disabled" type="button" class="btn btn-success">Active</i></button></p> -->
				            	<p align="center"><button disabled="disabled" type="button" class="btn btn-warning">Deactive</i></button></p>
				            </td>
				            <td><p align="center"><button type="button" data-toggle="modal" data-target="#routeModal" class="btn btn-info">Detail</button></p></td>
				        </tr>
				        <tr>
				        	<td></td>
				        	<td>2</td>
				            <td>B 4212 KIL</td>
				            <td>Yamaha Mio</td>
				            <td>
				            	<!-- <p align="center"><button disabled="disabled" type="button" class="btn btn-success">Active</i></button></p> -->
				            	<p align="center"><button disabled="disabled" type="button" class="btn btn-warning">Deactive</i></button></p>
				            </td>
				            <td><p align="center"><button type="button" data-toggle="modal" data-target="#routeModal" class="btn btn-info">Detail</button></p></td>
				        </tr>
				        <tr>
				        	<td></td>
				        	<td>2</td>
				            <td>B 4212 KIL</td>
				            <td>Yamaha Mio</td>
				            <td>
				            	<!-- <p align="center"><button disabled="disabled" type="button" class="btn btn-success">Active</i></button></p> -->
				            	<p align="center"><button disabled="disabled" type="button" class="btn btn-warning">Deactive</i></button></p>
				            </td>
				            <td><p align="center"><button type="button" data-toggle="modal" data-target="#routeModal" class="btn btn-info">Detail</button></p></td>
				        </tr>
				    </tbody>
				</table>
				<div class="clearfix"></div>
				<br>
				<br>
				<div align="right" class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button type="submit" class="btn btn-success"><i class="fa fa-check"> Search </i></button>
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

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAj7tSdjukVN4virXCXLUnKLJ4UR_gXVG0&libraries=visualization&callback=initialize" async defer></script>
<script type="text/javascript">
var SITE_URL = "<?php echo site_url() ?>";
function initialize() {
  initMap();
  initAutocomplete();
}

function initMap() {
	var province = document.getElementById('province').value;
	var lat;
	var lng;
	$.ajax({
		url 		: SITE_URL + 'assets/provinces.json',
		method		: 'get',
		dataType	: 'json',
		async : false,
      	cache : false,
		success		: function(result) {
			for (i =0; i<result.length; i++) {
				if(result[i]['id']==province){
					lat 	= parseFloat(result[i]['latitude']);
					lng 	= parseFloat(result[i]['longitude']);
					break;
				}
			}
		},

	});

	var map = new google.maps.Map(document.getElementById('googleMap'), {
		zoom 				: 12,
		center 				: {lat: lat, lng: lng},
		gestureHandling		: 'greedy',
		mapTypeId 			: google.maps.MapTypeId.ROADMAP,
	});

	function setMarkers(map) {
		$.ajax({
		url 		: SITE_URL + 'assets/datanew.json',
		method		: 'get',
		dataType	: 'json',
		async : false,
      	cache : false,
		success		: function(result) {
			var data = result['results'][1]['data']
			for (var i = 0; i < data.length; i++) {
			var beach = data[i];

				var marker = new google.maps.Marker({
		            position: {lat: parseFloat(beach[1]), lng: parseFloat(beach[2])},
		            map: map,
		            icon: "<?php echo base_url() ?>assets/build/images/mobil.png",
		            info: beach[0] +' '+ beach[4],
	         	});

				var infowindow3 = new google.maps.InfoWindow();
	         	google.maps.event.addListener(marker, 'mouseover', function () {
	         		infowindow3.setContent(this.info);                              
					infowindow3.open(map, this);  
	         	});
			}
		}

		});
      }
    setMarkers(map);
}

 //close function initmap()

		function initAutocomplete() {
        var detailPeta = {
            center:new google.maps.LatLng(-6.21462,106.84513),
            zoom:12,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta2 = new google.maps.Map(document.getElementById("map"), detailPeta);

        var flightPlanCoordinates = [];

        $.ajax({
		url 		: SITE_URL + 'assets/jemboet.json',
		method		: 'get',
		dataType	: 'json',
		async : false,
		success		: function(result) {
			for (i = 0; i < result['results'][0]['data'].length; i++) {
					latitude	= parseFloat(result['results'][0]['data'][i]['lat']);
					longitude 	= parseFloat(result['results'][0]['data'][i]['lng']);			
					flightPlanCoordinates.push(new google.maps.LatLng(latitude, longitude))
			}

	  		var heatmap = new google.maps.visualization.HeatmapLayer({
	          data: flightPlanCoordinates,
	          map: peta2,
	          opacity : 0.75,
	        });

			start_latitude	= parseFloat(result['results'][0]['data'][0]['lat']);
			start_longitude = parseFloat(result['results'][0]['data'][0]['lng']);

			end_latitude	= parseFloat(result['results'][0]['data'][result['results'][0]['data'].length-100]['lat']);
			end_longitude 	= parseFloat(result['results'][0]['data'][result['results'][0]['data'].length-100]['lng']);

	        //flightPath.setMap(peta);

	        function setMarkersdetail(map2) {
	          var marker = new google.maps.Marker({
	            position: {lat: start_latitude, lng: start_longitude},
	            map: map2,
	            icon: "<?php echo base_url() ?>assets/build/images/mobil.png",
	          });
		        
		    }
		    setMarkersdetail(peta2);

		    function setMarkers2detail(map2) {
		          var marker = new google.maps.Marker({
		            position: {lat: end_latitude, lng: end_longitude},
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
        
</script>