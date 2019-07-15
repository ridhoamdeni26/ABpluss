<div class="row">
  <form method="post" enctype="multipart/form-data">
    <input type="hidden" name="csrfmiddlewaretoken"
      value="rqSZLRt3K35K7OMcHw6Q1GaT3EBXchgFeaKTgUxAoT2jCgTEzgmFFTtTl8o3b8ST">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel tile fixed">

        <div class="x_title">
          <h2>Add New Driver</h2>
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

        <div class="form-group">
          <div align="right" class="col-md-12 col-sm-12 col-xs-12">
            <div id="gender" class="btn-group" data-toggle="buttons">
              <label class="btn btn-default active" data-toggle-class="btn-primary"
                data-toggle-passive-class="btn-default">
                <input type="radio" name="vehicle_type" value="mobil" checked="checked"><i class="fa fa-automobile">
                  &nbsp; Mobil &nbsp; </i>
              </label>
              <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                <input type="radio" name="vehicle_type" value="motor"><i class="fa fa-motorcycle"> &nbsp; Motor &nbsp;
                </i>
              </label>
            </div>
          </div>
        </div>
        <br>
        <br>

        <center>
          <h2>Vehicle info</h2>
        </center>

        <!-- <form class="form-horizontal form-label-left" novalidate> -->
        <div class="x_content">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>Vehicle Owner</label>
                <select name="driver" style="width:100%;" class="form-control" id="id_driver" required="required">

                  <option value="8">Abdul Fatah</option>

                  <option value="10">Abdul Rahman</option>

                  <option value="12">Aditya Himawan</option>

                  <option value="13">Sueb Jaelani</option>

                  <option value="14">Ridho Amdeni</option>

                  <option value="15">Kang Somay</option>
                  }
                </select>
              </div>
              <br>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">

              <!-- tahun di buat 10 tahun kebelakang dari sekarang -->
              <div class="form-group">
                <label>Vehicle Year</label>
                <select name="vehicle_year" class="form-control" style="width:100%" required="required"
                  id="id_vehicle_year">
                  <option value="26">2012</option>

                  <option value="27">2013</option>

                  <option value="28">2014</option>

                  <option value="29">2015</option>

                  <option value="30">2016</option>

                  <option value="31">2017</option>

                  <option value="32">2018</option>

                  <option value="33">2019</option>

                  <option value="34">2011</option>

                  <option value="35">2010</option>

                </select>
                <div class="clearfix"></div>
              </div>
              <br>

              <div class="form-group">
                <label>Vehicle Model</label>
                <input type="text" name="vehicle_model" list="model_list" id="id_vehicle_model" class="form-control"
                  style="width: 100%" required="required">
                <datalist id="model_list">
                  <!--  -->
                </datalist>
                <div class="clearfix"></div>
              </div>
              <br>
            </div> <!-- penutup div col -->

            <div class="col-md-6 col-sm-6 col-xs-6">

              <div class="form-group">
                <label>Vehicle Brand</label>
                <input type="text" name="vehicle_brand" list="brand_list" id="id_vehicle_brand" class="form-control"
                  style="width: 100%" required="required">
                <datalist id="brand_list">
                  <!--  -->
                </datalist>
                <div class="clearfix"></div>
              </div>
              <br>

              <div class="form-group">
                <label>Vehicle Color</label>
                <input type="text" name="vehicle_color" list="color_list" id="id_vehicle_color" class="form-control"
                  style="width: 100%" required="required">
                <datalist id="color_list">

                  <option value="coklat">

                  <option value="hijau">

                  <option value="hitam">

                  <option value="kuning">

                  <option value="merah">

                  <option value="putih">

                  <option value="silver">

                </datalist>
                <div class="clearfix"></div>
              </div>
              <br>
            </div> <!-- penutup div col pertama -->
          </div> <!-- penutup row pertama -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>License No</label>
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12" style="padding-right: 0;">
                    <input type="text" id="license_no" class="form-control hidden" style="display: inline;"
                      name="license_no" required="required" />
                  </div> <!-- penutup div col kedua -->
                  <div class="col-md-4 col-sm-4 col-xs-4" style="padding-right: 0;">
                    <input type="text" id="plat1" class="form-control" onkeyup="combineLicense()"
                      style="display: inline;" name="plat1" required="required" />
                    <div class="clearfix"></div>
                    <br>
                  </div> <!-- penutup div col kedua -->

                  <div class="col-md-4 col-sm-4 col-xs-4" style="padding-right: 0; padding-left: 0">
                    <p style="width: 10%; margin: 0; padding: 0 3%; text-align: center; display: inline;"> -</p>
                    <input type="text" id="plat2" class="form-control" onkeyup="combineLicense()"
                      style="display: inline; width: 90%" name="plat2" required="required" />
                    <div class="clearfix"></div>
                    <br>
                  </div> <!-- penutup div col kedua -->

                  <div class="col-md-4 col-sm-4 col-xs-4" style="padding-left: 0">
                    <p style="width: 10%; margin: 0; padding: 0 3%; text-align: center; display: inline;"> -</p>
                    <input type="text" id="plat3" class="form-control" onkeyup="combineLicense()"
                      style="display: inline; width: 90%" name="plat3" required="required" />
                    <div class="clearfix"></div>
                    <br>
                  </div> <!-- penutup div col kedua -->

                </div>
              </div>
            </div>
          </div> <!-- penutup row kedua -->

          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">

              <div class="form-group">
                <label>Province :</label>
                <select name="provinsi" style="width:100%;" class="form-control" onClick=getKota(this.id)
                  id="id_provinsi" required="required">

                  <option value="40">Banten</option>

                  <option value="41">DKI Jakarta</option>

                  <option value="42">Jawa Barat</option>

                  <option value="43">Jawa Tengah</option>

                  <option value="44">Jawa Timur</option>
                  }
                </select>
                <div class="clearfix"></div>
              </div>
              <br>

              <div class="form-group">
                <label>Vehicle Used For</label>
                <input type="text" name="vehicle_used_for" class="form-control" style="width:100%"
                  id="id_vehicle_used_for">
                <div class="clearfix"></div>
              </div>
              <br>

              <div class="x_panel tile">
                <div class="row">

                  <div class="x_title">
                    <h2> Daily Main Route </h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input type="text" class="form-control hidden" name="daily_main_route" id="id_daily_main_route">
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="checkbox">
                      <label style="font-size: 12pt">
                        <input class="main_route_checkbox" onclick="combineMainRoute()" type="checkbox"
                          value="Jakarta Barat"> Jakarta Barat
                      </label>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="checkbox">
                      <label style="font-size: 12pt">
                        <input class="main_route_checkbox" onclick="combineMainRoute()" type="checkbox"
                          value="Jakarta Pusat"> Jakarta Pusat
                      </label>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="checkbox">
                      <label style="font-size: 12pt">
                        <input class="main_route_checkbox" onclick="combineMainRoute()" type="checkbox"
                          value="Jakarta Selatan"> Jakarta Selatan
                      </label>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="checkbox">
                      <label style="font-size: 12pt">
                        <input class="main_route_checkbox" onclick="combineMainRoute()" type="checkbox"
                          value="Jakarta Timur"> Jakarta Timur
                      </label>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="checkbox">
                      <label style="font-size: 12pt">
                        <input class="main_route_checkbox" onclick="combineMainRoute()" type="checkbox"
                          value="Jakarta Utara"> Jakarta Utara
                      </label>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="checkbox">
                      <label style="font-size: 12pt">
                        <input class="main_route_checkbox" onclick="combineMainRoute()" type="checkbox"
                          value="Kabupaten Bogor"> Kabupaten Bogor
                      </label>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="checkbox">
                      <label style="font-size: 12pt">
                        <input class="main_route_checkbox" onclick="combineMainRoute()" type="checkbox"
                          value="Kabupaten Tangerang"> Kabupaten Tangerang
                      </label>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="checkbox">
                      <label style="font-size: 12pt">
                        <input class="main_route_checkbox" onclick="combineMainRoute()" type="checkbox"
                          value="Kota Bekasi"> Kota Bekasi
                      </label>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="checkbox">
                      <label style="font-size: 12pt">
                        <input class="main_route_checkbox" onclick="combineMainRoute()" type="checkbox"
                          value="Kota Bogor"> Kota Bogor
                      </label>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="checkbox">
                      <label style="font-size: 12pt">
                        <input class="main_route_checkbox" onclick="combineMainRoute()" type="checkbox"
                          value="Kota Depok"> Kota Depok
                      </label>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="checkbox">
                      <label style="font-size: 12pt">
                        <input class="main_route_checkbox" onclick="combineMainRoute()" type="checkbox"
                          value="Kota Tangerang"> Kota Tangerang
                      </label>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="checkbox">
                      <label style="font-size: 12pt">
                        <input class="main_route_checkbox" onclick="combineMainRoute()" type="checkbox"
                          value="Kota Tangerang Selatan"> Kota Tangerang Selatan
                      </label>
                      <div class="clearfix"></div>
                    </div>
                  </div>


                </div> <!-- penutup row checkbox -->
              </div> <!-- penutup x panel checkbox -->


            </div> <!-- penutup div col ketiga -->

            <div class="col-md-6 col-sm-6 col-xs-6">


              <div class="form-group">
                <label>City :</label>
                <br>
                <select name="kota" style="width:100%;" class="form-control" id="id_kota">
                  <option value="..."> </option>
                </select>
                <br>
              </div>

              <div class="form-group">
                <label>Photo STNK</label>
                <input type="file" name="stnk_photo" accept="image/*" class="form-control" style="width:100%"
                  onchange="previewImage(this.id);" id="id_stnk_photo">
                <br>
                <img id="image-preview" alt="image preview" />
                <br>
              </div>


              <div class="form-group">
                <label>Photo Vehicle Front - Site</label>
                <input type="file" name="front_side_photo" accept="image/*" class="form-control" style="width:100%"
                  onchange="previewImage2(this.id);" id="id_front_side_photo">
                <br>
                <img id="image-preview2" alt="image preview" />
                <br>
              </div>

            </div> <!-- penutup col keempat -->
          </div> <!-- penutup row ketiga -->


        </div> <!-- penutup x content -->
        <div class="col-sm-12" style="text-align: right;">
          <button class="btn btn-primary" type="submit" style="padding: 10px 25px">Kirim</button>
        </div>
      </div>
    </div>
  </form>
</div>
<br />
<!-- /page content -->

<script type="text/javascript">
  function previewImage(ele) {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById(ele).files[0]);

    oFReader.onload = function (oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
</script>

<!-- script upload image -->
<script type="text/javascript">
  function previewImage2(ele) {
    document.getElementById("image-preview2").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById(ele).files[0]);

    oFReader.onload = function (oFREvent) {
      document.getElementById("image-preview2").src = oFREvent.target.result;
    };
  };
</script>

<!-- script untuk mobile phone -->
<script type="text/javascript">
  function validasi() {
    var nomor_hp = document.getElementById("input_no_hp").value;
    var number = /^[0-9]+$/;
    if (!nomor_hp.match(number)) {
      alert("Nomor Handphone harus angka !");
      return false;
    };

    if (nomor_hp.length != 12) {
      alert("Nomor Handphone Harus 12 Digit");
      return false;
    };
  }
</script>
<script type="text/javascript">
  var toggle = document.getElementById('container');
  var toggleContainer = document.getElementById('toggle-container');
  var toggleNumber;

  toggle.addEventListener('click', function () {
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

<script>
  var URL = "http://dev.abplusscar.com";

  function getKota(id) {
    var selected_provinsi = '';
    if (id == 'id_provinsi') {
      var myselect = document.getElementById("id_provinsi");
      var kota = document.getElementById('id_kota');
    } else {
      var myselect = document.getElementById("id_provinsi_home");
      var kota = document.getElementById('id_kota_home');
    }
    selected_provinsi = myselect.options[myselect.selectedIndex].text;
    // $.ajaxSetup({
    //   headers: {
    //     'CSRFToken': "HHgPniV5xim9ubu8LOZNNKpRO2kKdDhaur8JSlZCb8jIZDBADyfCrXIR6w7QcuTo",
    //   }
    // });
    $.ajax({
      url: URL + '/wilayah/kota/' + selected_provinsi + '/',
      success: function (result) {
        var options = '';
        options += "<option value='0'>--pilih kota--</option>";
        for (i = 0; i < result['results'].length; i++) {
          options += "<option value='" + result['results'][i]['value'] + "'>" + result['results'][i]['nama'] +
            "</option>";
          console.log(result['results'][i]['nama']);
        }
        kota.innerHTML = options;
      }
    });
  }
</script>
<script type="text/javascript">
  var typingTimer; //timer identifier
  var doneTypingInterval = 100; //time in ms, 5 second for example
  var vehicle_brand_input = $('#id_vehicle_brand');

  $("input:radio[name=vehicle_type]").on('change', function () {
    changeVehicleType()
  });

  function changeVehicleType() {
    var vehicle_type_text = $("input:radio[name=vehicle_type]:checked").val()

    $('#brand_list').html('')
    $('#model_list').html('')
    $('#id_vehicle_brand').val('')
    $('#id_vehicle_model').val('')

    getBrands(vehicle_type_text)
  }

  function getBrands(vehicle_type) {
    // $.ajaxSetup({
    //   headers: {
    //     'CSRFToken': "HHgPniV5xim9ubu8LOZNNKpRO2kKdDhaur8JSlZCb8jIZDBADyfCrXIR6w7QcuTo",
    //   }
    // });
    $.ajax({
      url: URL + '/vehicle/brand/' + vehicle_type + '/',
      success: function (result) {
        var options = '';
        for (i = 0; i < result.length; i++) {
          options += "<option value='" + result[i] + "'>";
          console.log(result[i]);
        }
        document.getElementById('brand_list').innerHTML = options;
      }
    });
  }

  function getModels(vehicle_type, vehicle_brand) {
    // $.ajaxSetup({
    //   headers: {
    //     'CSRFToken': "HHgPniV5xim9ubu8LOZNNKpRO2kKdDhaur8JSlZCb8jIZDBADyfCrXIR6w7QcuTo",
    //   }
    // });
    $.ajax({
      url: URL + '/vehicle/model/' + vehicle_type + '/' + vehicle_brand + '/',
      success: function (result) {
        var options = '';
        for (i = 0; i < result.length; i++) {
          options += "<option value='" + result[i] + "'>";
          console.log(result[i]);
        }
        document.getElementById('model_list').innerHTML = options;
      }
    });
  }

  function combineLicense() {
    $('#license_no').val(
      $('#plat1').val() + ' ' +
      $('#plat2').val() + ' ' +
      $('#plat3').val()
    )
  }

  function combineMainRoute() {
    val = '';

    $(':checkbox[class=main_route_checkbox]:checked').each(function (i) {
      val += $(this).val() + ', ';
    });
    $('#id_daily_main_route').val(val)
  }

  vehicle_brand_input.on('change', function () {
    var vehicle_type_text = $("input:radio[name=vehicle_type]:checked").val()
    clearTimeout(typingTimer);
    typingTimer = setTimeout(getModels(
      vehicle_type_text,
      vehicle_brand_input.val()
    ), doneTypingInterval);
  });

  //on keydown, clear the countdown 
  vehicle_brand_input.on('keydown', function () {
    clearTimeout(typingTimer);
  });

  $.ready(getBrands('mobil'));
</script>