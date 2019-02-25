          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel tile fixed">

                <div class="x_title">
                <h2>Add New Driver</h2>
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

              	<div class="form-group">
                <div align="right" class="col-md-12 col-sm-12 col-xs-12">
                  <div id="gender" class="btn-group" data-toggle="buttons">
                    <label class="btn btn-primary" style="background-color:#01ac3e" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input  type="radio" name="gender" value="male"><i class="fa fa-automobile"> &nbsp; Car &nbsp; </i>
                    </label>
                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="gender" value="female"><i class="fa fa-motorcycle"> &nbsp; Motorcycle &nbsp; </i>
                    </label>
                  </div>
                </div>
              </div>
              <br>
              <br>

              <center> <h2>Vehicle info</h2> </center>

                <!-- <form class="form-horizontal form-label-left" novalidate> -->
                <div class="x_content">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">

                <!-- tahun di buat 10 tahun kebelakang dari sekarang -->
                <div class="form-group">
                <label for="velhola_year">Vehicle Year</label>
                  <select class="form-control">
                    <option>Choose option</option>
                    <option>Option one</option>
                    <option>Option two</option>
                    <option>Option three</option>
                    <option>Option four</option>
                  </select>
                  <div class="clearfix"></div>
                </div>
                <br>

                <div class="form-group">
                <label for="velhola_model">Vehicle Model</label>
                  <select class="form-control">
                    <option>Choose option</option>
                    <option>Option one</option>
                    <option>Option two</option>
                    <option>Option three</option>
                    <option>Option four</option>
                  </select>
                  <div class="clearfix"></div>
                </div>
                <br>
                </div> <!-- penutup div col -->

                <div class="col-md-6 col-sm-6 col-xs-6">

                <div class="form-group">
                <label for="velhola_brand">Vehicle Brand</label>
                  <select class="form-control">
                    <option>Choose option</option>
                    <option>Option one</option>
                    <option>Option two</option>
                    <option>Option three</option>
                    <option>Option four</option>
                  </select>
                  <div class="clearfix"></div>
                </div>
                <br>

                <div class="form-group">
                <label for="velhola_color">Vehicle Color</label>
                  <select class="form-control">
                    <option>Choose option</option>
                    <option>Option one</option>
                    <option>Option two</option>
                    <option>Option three</option>
                    <option>Option four</option>
                  </select>
                  <div class="clearfix"></div>
                </div>
                <br>
                </div> <!-- penutup div col pertama -->
                </div> <!-- penutup row pertama -->

                <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4">

                <div class="form-group">
	                <label for="plat">lisence Plate</label>
	                <input type="text" id="plat" class="form-control" name="plat" required="required" />
	                <div class="clearfix"></div>
                </div>
                <br>
                </div> <!-- penutup div col kedua -->

                <div class="col-md-4 col-sm-4 col-xs-4">
	                <div class="form-group">
	                <label for="plat_numer">Plate Number</label>
	                <input type="text" id="license" class="form-control" name="nomor_plat" required="required" />
	                <div class="clearfix"></div>
                </div>
                <br>
                </div> <!-- penutup div col kedua -->

                <div class="col-md-4 col-sm-4 col-xs-4">
	                <div class="form-group">
	                <label for="plat_rear">lisence Plate</label>
	                <input type="text" id="nomor_belakang" class="form-control" name="nomor_belakang" required="required" />
	                <div class="clearfix"></div>
                </div>
                <br>
                </div> <!-- penutup div col kedua -->
                </div> <!-- penutup row kedua -->

                <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                	<div class="form-group">
	                <label for="province"> Province </label>
	                  <select class="form-control">
	                    <option>Choose option</option>
	                    <option>Option one</option>
	                    <option>Option two</option>
	                    <option>Option three</option>
	                    <option>Option four</option>
	                  </select>
	                  <div class="clearfix"></div>
	                </div>
	                <br>

	                <div class="form-group">
	                <label for="Vehicle_userd">Vehicle Used For</label>
	                	<input type="text" id="velhola_userd" class="form-control" name="velhola_userd" required="required" />
	                <div class="clearfix"></div>
	           		</div>
	                <br>

				<div class="x_panel tile">	            
	            <div class="row">
	            <div class="x_title">
                  <h2> Daily Main Route </h2>
                  <div class="clearfix"></div>
                </div>

	            <div class="col-md-4 col-sm-4 col-xs-4">
	            	<div class="checkbox">
	                    <label>
	                      <input type="checkbox" > Jakarta Pusat
	                    </label>
	                    <div class="clearfix"></div>
                  	</div>
	            </div>

	            <div class="col-md-4 col-sm-4 col-xs-4">
	            	<div class="checkbox">
	                    <label>
	                      <input type="checkbox" > Jakarta Utara
	                    </label>
	                    <div class="clearfix"></div>
                  	</div>
	            </div>

	            <div class="col-md-4 col-sm-4 col-xs-4">
	            	<div class="checkbox">
	                    <label>
	                      <input type="checkbox" > Jakarta barat
	                    </label>
	                    <div class="clearfix"></div>
                  	</div>
	            </div>

	            <div class="col-md-4 col-sm-4 col-xs-4">
	            	<div class="checkbox">
	                    <label>
	                      <input type="checkbox" > Jakarta Selatan
	                    </label>
	                    <div class="clearfix"></div>
                  	</div>
	            </div>

	            <div class="col-md-4 col-sm-4 col-xs-4">
	            	<div class="checkbox">
	                    <label>
	                      <input type="checkbox" > Jakarta Timur
	                    </label>
	                    <div class="clearfix"></div>
                  	</div>
	            </div>

	            <div class="col-md-4 col-sm-4 col-xs-4">
	            	<div class="checkbox">
	                    <label>
	                      <input type="checkbox" > Kab.Bogor
	                    </label>
	                    <div class="clearfix"></div>
                  	</div>
	            </div>

	            <div class="col-md-4 col-sm-4 col-xs-4">
	            	<div class="checkbox">
	                    <label>
	                      <input type="checkbox" > Kota Bogor
	                    </label>
	                    <div class="clearfix"></div>
                  	</div>
	            </div>

	            <div class="col-md-4 col-sm-4 col-xs-4">
	            	<div class="checkbox">
	                    <label>
	                      <input type="checkbox" > Kota Bekasi
	                    </label>
	                    <div class="clearfix"></div>
                  	</div>
	            </div>

	            <div class="col-md-4 col-sm-4 col-xs-4">
	            	<div class="checkbox">
	                    <label>
	                      <input type="checkbox" > Kab.Tangerang
	                    </label>
	                    <div class="clearfix"></div>
                  	</div>
	            </div>

	            <div class="col-md-4 col-sm-4 col-xs-4">
	            	<div class="checkbox">
	                    <label>
	                      <input type="checkbox"> Kota Tangerang
	                    </label>
	                    <div class="clearfix"></div>
                  	</div>
	            </div>

	            </div> <!-- penutup row checkbox -->
	        	</div> <!-- penutup x panel checkbox -->


                </div> <!-- penutup div col ketiga -->

                <div class="col-md-6 col-sm-6 col-xs-6">

                <label for="city">Photo STNK</label>
                <input type="file" name="pic" id="image-source" onchange="previewImage();">
                <br>
                <img id="image-preview" alt="image preview"/>
                <br>

                <label for="city">Photo Vehicle Front - Site</label>
                <input type="file" name="pic" id="image-source2" onchange="previewImage2();">
                <br>
                <img id="image-preview2" alt="image preview"/>
                <br>

                </div> <!-- penutup col keempat -->
            	</div> <!-- penutup row ketiga -->

              <div align="right" class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button type="submit" id="send" class="btn btn-success"><i class="fa fa-check"> Save & Next </i></button>
                </div>

              </div> <!-- penutup x content -->
              <!-- </form> -->
              </div>
            </div>

          </div>
          <br />
        <!-- /page content -->

<!-- script upload image -->
<script type="text/javascript">
  function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
</script>

<!-- script upload image -->
<script type="text/javascript">
  function previewImage2() {
    document.getElementById("image-preview2").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source2").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview2").src = oFREvent.target.result;
    };
  };
</script>

<!-- script untuk mobile phone -->
<script type="text/javascript">
     function validasi()
     {
       var nomor_hp=document.getElementById("input_no_hp").value;
        var number=/^[0-9]+$/;
        if (!nomor_hp.match(number)){
          alert("Nomor Handphone harus angka !");
          return false;
        };
          
        if (nomor_hp.length!=12){
          alert("Nomor Handphone Harus 12 Digit");
          return false;
        };
     }
</script>
<script type="text/javascript">
var toggle = document.getElementById('container');
var toggleContainer = document.getElementById('toggle-container');
var toggleNumber;

toggle.addEventListener('click', function() {
	toggleNumber = !toggleNumber;
	if (toggleNumber) {
		toggleContainer.style.clipPath = 'inset(0 0 0 50%)';
		toggleContainer.style.backgroundColor = '#D74046';
	} else {
		toggleContainer.style.clipPath = 'inset(0 50% 0 0)';
		toggleContainer.style.backgroundColor = 'dodgerblue';
	}
	console.log(toggleNumber)
});
</script>
