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

	    	<div class="form-group">
                  <div class="col-md-3 col-sm-3 col-xs-12 item has-feedback">
                    <input type="text" id="start_search" name="start" required="required" class="form-control col-md-7 col-xs-12 dtpicker has-feedback-left" value="" placeholder="Start" />
                      <span class="glyphicon glyphicon-calendar form-control-feedback left" aria-hidden="true"></span>
                  </div>

                    <div class="col-md-3 col-sm-3 col-xs-12 item has-feedback">
                    <input type="text" id="end_search" name="end" required="required" class="form-control col-md-7 col-xs-12 dtpicker has-feedback-left" value="" placeholder="End" />
                      <span class="glyphicon glyphicon-calendar form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <button type="button" class="btn btn-success"><i class="fa fa-search"> Search Date </i></button>
                  <div class="clearfix"></div>
                </div>
                <br>
                <br>

            <div class="col-md-12 col-sm-12 col-xs-12">
            	<table id="report" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
				    <thead>
				        <tr>
				            <th>Date</th>
				            <th>Total KM</th>
				            <th>Total Viewer</th>
				            <th>Action</th>
				        </tr>
				    </thead>
				    <tbody>
				        <tr>
				        	<td>13 January 2019</td>
				            <td>1.052</td>
				            <td>6541</td>
				            <td>
				            	<button type="button" class="btn btn-info" id="Detail" data-toggle="modal" data-target="#detailModal"><i class="fa fa-search"> Detail </i></button>
				            	&nbsp;
				            	&nbsp;
				            	&nbsp;
				            	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-file-excel-o"> Export To CSV </i></button>
				            </td>
				        </tr>
				        <tr>
				        	<td>13 January 2019</td>	
				            <td>1234</td>
				            <td>12345</td>
				            <td>
				            	<button type="button" class="btn btn-info" id="Detail" data-toggle="modal" data-target="#detailModal"><i class="fa fa-search"> Detail </i></button>
				            	&nbsp;
				            	&nbsp;
				            	&nbsp;
				            	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-file-excel-o"> Export To CSV </i></button>
				            </td>
				        </tr>
				    </tbody>
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
        	<table id="detail" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
			    <thead>
			        <tr>
			            <th>Driver</th>
			            <th>Unit</th>
			            <th>Total KM</th>
			            <th>Viewer</th>
			            <th>Action</th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			        	<td>Abd Rojib</td>
			        	<td>Honda Scoopy</td>
			            <td>121</td>
			            <td>960</td>
			            <td>
			            	<button type="button" class="btn btn-info" id="route" data-toggle="modal" data-target="#routeModal"><i class="fa fa-map-marker"> View Route </i></button>
			            </td>
			        </tr>
			        <tr>
			        	<td>Ade Isnanadar</td>
			        	<td>Yamaha Mio</td>
			            <td>114</td>
			            <td>672</td>
			            <td>
			            	<button type="button" class="btn btn-info" id="route" data-toggle="modal" data-target="#routeModal"><i class="fa fa-map-marker"> View Route </i></button>
			            </td>
			        </tr>
			        <tr>
			        	<td>Abd Rojib</td>
			        	<td>Honda Scoopy</td>
			            <td>121</td>
			            <td>960</td>
			            <td>
			            	<button type="button" class="btn btn-info" id="route" data-toggle="modal" data-target="#routeModal"><i class="fa fa-map-marker"> View Route </i></button>
			            </td>
			        </tr>
			    </tbody>
			</table>
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
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAj7tSdjukVN4virXCXLUnKLJ4UR_gXVG0&libraries=visualization&callback=initMap"></script>

<script type="text/javascript">
	var SITE_URL = "<?php echo site_url() ?>";
	function initMap() {
        var propertiPeta = {
            center:new google.maps.LatLng(-6.21462,106.84513),
            zoom:12,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

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
			//flightPlanCoordinates = result['results'][0]['data'];
			// var flightPath = new google.maps.Polyline({
	  //         path: flightPlanCoordinates,
	  //         geodesic: true,
	  //         strokeColor: '#FF0000',
	  //         strokeOpacity: 1.0,
	  //         strokeWeight: 5
	  //       });
	  		heatmap = new google.maps.visualization.HeatmapLayer({
	          data: flightPlanCoordinates,
	          map: peta,
	          opacity : 0.75,
	        });

			start_latitude	= parseFloat(result['results'][0]['data'][0]['lat']);
			start_longitude = parseFloat(result['results'][0]['data'][0]['lng']);

			end_latitude	= parseFloat(result['results'][0]['data'][result['results'][0]['data'].length-100]['lat']);
			end_longitude 	= parseFloat(result['results'][0]['data'][result['results'][0]['data'].length-100]['lng']);

	        //flightPath.setMap(peta);

	        function setMarkers(map) {
		          var marker = new google.maps.Marker({
		            position: {lat: start_latitude, lng: start_longitude},
		            map: map,
		            icon: "<?php echo base_url() ?>assets/build/images/mobil.png",
		          });
		        
		    }
		    setMarkers(peta);

		    function setMarkers2(map) {
		          var marker = new google.maps.Marker({
		            position: {lat: end_latitude, lng: end_longitude},
		            map: map,
		            icon: "<?php echo base_url() ?>assets/build/images/mobil.png",
		          });
		        
		    }
		    setMarkers2(peta);
		}

	});

        }

        // event jendela di-load
        google.maps.event.addDomListener(window, 'load', initMap);
        
</script>


