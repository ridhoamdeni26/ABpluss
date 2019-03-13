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

	    <div class="x_content">

	    	<div class="form-group">
              <button type="button" class="btn btn-success"><i class="fa fa-file-excel-o"> Export To CSV </i></button>
              <div class="clearfix"></div>
            </div>
            <br>

            <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12">Status Payment</label>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <select class="form-control">
                <option>Choose option</option>
                <option>Progress On Payment</option>
                <option>Not Verified</option>
                <option>Verified/Verification</option>
              </select>
            </div>
            <div class="clearfix"></div>
          	</div>
          	<br>

            <div class="col-md-12 col-sm-12 col-xs-12">
            	<table id="report" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
				    <thead>
				        <tr>
				        	<th>No</th>
				        	<th>Action</th>
				            <th>Driver Name</th>
				            <th>Periode</th>
				            <th>Vehicle No</th>
				            <th>Vehicle Type</th>
				            <th>Ads Name</th>
				            <th>Mileage (/KM)</th>
				            <th>Start Date</th>
				            <th>End Date</th>
				            <th>Status</th>
				        </tr>
				    </thead>
				    <tbody>
				        <tr>
				        	<td>1</td>
				        	<td>
				        		<button type="button" class="btn btn-info" id="Detail" data-toggle="modal" data-target="#detailModal"><i class="fa fa-search"> Detail </i></button>
				        	</td>
				            <td>Agus Saputra</td>
				            <td>3</td>
				            <td>B 4841 KIW</td>
				            <td>Motorcycle</td>
				            <td>PHD - 19 Standard Wrap</td>
				            <td>149</td>
				            <td>25/12/2018</td>
				            <td>31/12/2018</td>
				            <td></td>
				        </tr>
				        <tr>
				        	<td>2</td>
				        	<td>
				        		<button type="button" class="btn btn-info" id="Detail" data-toggle="modal" data-target="#detailModal"><i class="fa fa-search"> Detail </i></button>
				        	</td>
				            <td>Andri Budiana</td>
				            <td>3</td>
				            <td>B 3091 NYX</td>
				            <td>Motorcycle</td>
				            <td>PHD - 19 Standard Wrap</td>
				            <td>380</td>
				            <td>19/1/2019</td>
				            <td>31/1/2018</td>
				            <td></td>
				        </tr>
				        <tr>
				        	<td>3</td>
				        	<td>
				        		<button type="button" class="btn btn-info" id="Detail" data-toggle="modal" data-target="#detailModal"><i class="fa fa-search"> Detail </i></button>
				        	</td>
				            <td>Abdul Wahid</td>
				            <td>3</td>
				            <td>B 4041 KLM</td>
				            <td>Motorcycle</td>
				            <td>PHD - 19 Standard Wrap</td>
				            <td>880</td>
				            <td>17/12/2019</td>
				            <td>31/12/2018</td>
				            <td></td>
				        </tr>
				        <tr>
				        	<td>4</td>
				        	<td>
				        		<button type="button" class="btn btn-info" id="Detail" data-toggle="modal" data-target="#detailModal"><i class="fa fa-search"> Detail </i></button>
				        	</td>
				            <td>Sunoto Sukiman</td>
				            <td>3</td>
				            <td>B 1279 GJQ</td>
				            <td>Motorcycle</td>
				            <td>PHD - 19 Standard Wrap</td>
				            <td>440</td>
				            <td>17/12/2019</td>
				            <td>31/12/2018</td>
				            <td></td>
				        </tr>
				    </tbody>
				</table>
            </div>
	    </div> <!-- close x content -->

<!-- Detail Modal -->
  <div class="modal fade" id="detailModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Detail content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Detail Data Driver</h4>
        </div>
        <div class="modal-body">
        	<form id="detail_data" data-parsley-validate class="form-horizontal form-label-left">

        		<div class="form-group">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="driver_name"> Driver Name <span class="required"></span>
	                </label>
	                <div class="col-md-9 col-sm-9 col-xs-12">
	                  <input type="text" id="driver_name" required="required" placeholder="Abdul Wahid" class="form-control col-md-7 col-xs-12">
	                </div>
	            </div>

	            <div class="form-group">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="periode"> Periode <span class="required"></span>
	                </label>
	                <div class="col-md-9 col-sm-9 col-xs-12">
	                  <input type="number" id="periode" required="required" placeholder="2" class="form-control col-md-7 col-xs-12">
	                </div>
	            </div>

	            <div class="form-group">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="vehicle_number"> Vehicle Number <span class="required"></span>
	                </label>
	                <div class="col-md-9 col-sm-9 col-xs-12">
	                  <input type="text" id="periode" required="required" placeholder="B1422PHD" class="form-control col-md-7 col-xs-12">
	                </div>
	            </div>

	            <div class="form-group">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="vehicle_type"> Vehicle Type <span class="required"></span>
	                </label>
	                <div class="col-md-9 col-sm-9 col-xs-12">
	                  <input type="text" id="periode" required="required" placeholder="1" class="form-control col-md-7 col-xs-12">
	                </div>
	            </div>

	            <div class="form-group">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ads_name"> Ads Name <span class="required"></span>
	                </label>
	                <div class="col-md-9 col-sm-9 col-xs-12">
	                  <input type="text" id="periode" required="required" placeholder="Okamoto - Karads November Branding Program" class="form-control col-md-7 col-xs-12">
	                </div>
	            </div>

	            <div class="form-group">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ads_name"> Amount <span class="required"></span>
	                </label>
	                <div class="col-md-9 col-sm-9 col-xs-12">
	                  <input type="number" id="periode" required="required" placeholder="400000" class="form-control col-md-7 col-xs-12">
	                </div>
	            </div>

	            <div class="form-group">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ads_name"> Mileage <span class="required"></span>
	                </label>
	                <div class="col-md-9 col-sm-9 col-xs-12">
	                  <input type="number" id="periode" required="required" placeholder="1210528" class="form-control col-md-7 col-xs-12">
	                </div>
	            </div>

	            <div class="ln_solid"></div>

	            <div class="form-group">
	            	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="ads_name"> Upload Date <span class="required"></span></label>
                  	<div class='col-md-9 col-sm-9 col-xs-12'>
	                    <input type='text' class="form-control" id='detail_driver'/>
	                </div>
                </div>

                <div class="form-group">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ads_name"> Preview Image Sticker and Odo <span class="required"></span></label>
	                <div class="col-md-3 col-sm-3 col-xs-12">
					  <img id="image-sticker" src="<?php echo base_url() ?>assets/build/images/user.png" alt="Preview Image Sticker" onclick="openModal();currentSlide(1)"/>
					  <div class="clearfix"></div>
					</div>

					<div class="col-md-3 col-sm-3 col-xs-12">
				  		<img id="image-odo" src="<?php echo base_url() ?>assets/build/images/logoAB.png" alt="Preview Image Odo" onclick="openModal();currentSlide(2)"/>
					<div class="clearfix"></div>
					</div>

				</div>
				<br/>
				
        	</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

      <!-- The Modal/Lightbox -->
<div id="imageModal" class="modal-image">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content-image">

    <div class="mySlides">
      <div class="numbertext">1 / 2</div>
      <img src="<?php echo base_url() ?>assets/build/images/user.png" alt="Preview Image Sticker" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 2</div>
      <img src="<?php echo base_url() ?>assets/build/images/logoAB.png" alt="Preview Image Odo" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev-image" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next-image" onclick="plusSlides(1)">&#10095;</a>

    </div>
  </div>
      
    </div>
  </div>
  
      </div> <!-- closse xpanel -->
    </div> <!-- close col -->
</div> <!-- close row -->

  <br />
<!-- /page content -->
<script>
// Open the Modal
function openModal() {
  document.getElementById('imageModal').style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById('imageModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>


