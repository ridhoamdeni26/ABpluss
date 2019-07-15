<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <form method="post" enctype="multipart/form-data">
      <div class="x_panel tile fixed">

        <div class="x_title">
          <h2>New Driver</h2>
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
        <center>
          <h2>Account Detail</h2>
        </center>

        <!-- <form class="form-horizontal form-label-left" novalidate> -->
        <div class="x_content">

          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
              <input type="hidden" name="csrfmiddlewaretoken"
                value="0KsGQLzz0m8SMs7oVoo0SAw4cECxz7E5NukAlOD6Ec5rhUeQN8EPwNP4u8pDyYgj">
              <div class="form-group">
                <label for="fullname">Full Name :</label>
                <input type="text" name="full_name" class="form-control" style="width:100%" type="text" required
                  id="id_full_name">
                <div class="clearfix"></div>
              </div>
              <br>

              <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" name="password" class="form-control" placeholder="Password" style="width:100%"
                  type="********" required id="id_password">
                <div class="clearfix"></div>
              </div>
              <br>

              <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" name="email" class="form-control" style="width:100%" type="email" id="id_email">
                <div class="clearfix"></div>
              </div>

            </div> <!-- penutup div col -->

            <div class="col-md-6 col-sm-6 col-xs-6">

              <div class="form-group">
                <label for="mobile_phone">Mobile Phone :</label>
                <input type="text" name="mobile_phone" class="form-control" style="width:100%" type="number" required
                  id="id_mobile_phone">
                <div class="clearfix"></div>
              </div>
              <br>

              <div class="form-group">
                <label for="password2">Confirm Password :</label>
                <input type="password" name="confirm_password" class="form-control" placeholder="********"
                  style="width:100%" type="password" required rdata-validate-linked="id_password"
                  id="id_confirm_password">
                <div class="clearfix"></div>
              </div>
              <br>


              <div class="form-group">
                <label for="email">Kode Pos :</label>
                <input id="id_postal_code" type="text" class="form-control" name="postal_code">
                <div class="clearfix"></div>
              </div>
              <br>

            </div> <!-- penutup div col -->
            <div class="col-xs-12">

              <div class="form-group hidden" id="group_postal_list">
                <label for="district">Postal Code List:</label>
                <select name="kelurahan" style="width:100%;" class="form-control" id="postal_list">
                  <option value="..."> </option>
                </select>
                <div class="clearfix"></div>
              </div>
            </div> <!-- penutup div col -->
            <div class="col-xs-6">
              <div class="form-group" id="group_province">
                <label>Province :</label>
                <select name="provinsi" style="width:100%;" class="form-control" onClick="getKota(this.id)"
                  id="id_provinsi">

                  <option value="40">Banten</option>

                  <option value="41">DKI Jakarta</option>

                  <option value="42">Jawa Barat</option>

                  <option value="43">Jawa Tengah</option>

                  <option value="44">Jawa Timur</option>
                  }
                </select>
                </select>
                <!--   <input type="text" style="width:100%;" name="province" id="id_province"class="form-control"> -->
                <br>
              </div>


              <div class="form-group" id="group_kecamatan">
                <label for="city">Kecamatan :</label>
                <select name="kecamatan" style="width:100%;" class="form-control" onClick="getKelurahan(this.id)"
                  id="id_kecamatan">
                  <option value="..."> </option>
                </select>
                <br>
              </div>
            </div> <!-- penutup div col -->
            <div class="col-xs-6">
              <div class="form-group" id="group_city">
                <label>City :</label>
                <select name="kota" style="width:100%;" class="form-control" onClick="getKecamatan(this.id)"
                  id="id_kota">
                  <option value="..."> </option>
                </select>
                <br>
              </div>

              <div class="form-group" id="group_kelurahan">
                <label>Kelurahan :</label>
                <select name="kelurahan" style="width:100%;" class="form-control" onclick="setPostalCode()"
                  id="id_kelurahan">
                  <option value="..."> </option>
                </select>
                <br>
              </div>

            </div> <!-- penutup div col -->
            <div class="col-xs-12">
              <div class="form-group">
                <label for="address">Address :</label>
                <textarea name="address" cols="40" rows="10" class="form-control" style="width:100%" type="text"
                  id="id_address"></textarea>
                <div class="clearfix"></div>
              </div>
              <br>
              <div class="form-group">
                <label>Upload Photo KTP/SIM</label>
                <input type="file" name="ktp_photo" accept="image/*" class="form-control" style="width:100%"
                  onchange="previewImage();" id="id_ktp_photo">
                <br>
                <img id="image-preview" alt="image preview" />
              </div>
              <div align="right" class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <button type="submit" id="send" onclick="validasi();" class="btn btn-success"><i class="fa fa-check">
                    Create An Account </i></button>
              </div>
              <br>
            </div>
          </div> <!-- penutup div row -->
        </div>
        <!-- </form> -->
      </div>
  </div>

</div>
<br />
<!-- /page content -->

<!-- <script src="<?php echo base_url() ?>assets/select/jquery/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/select/jquery/jquery-3.3.1.min.js"></script> -->
<!-- script upload image -->
<script type="text/javascript">
  function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("id_ktp_photo").files[0]);

    oFReader.onload = function (oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
</script>

<!-- script untuk mobile phone -->
<script type="text/javascript">
  function validasi() {
    var nomor_hp = document.getElementById("input_no_hp").value;
    var number = /^[0-9]+$/;
    if (!nomor_hp.match(number)) {
      alert("Mobile Numbers Must be Numbers !");
      return false;
    };

    if (nomor_hp.length != 12) {
      alert("Mobile Number Must be 12 digits");
      return false;
    };
  }
</script>
<script>
  //setup before functions
  var URL = "http://dev.abplusscar.com";
  var typingTimer; //timer identifier
  var doneTypingInterval = 500; //time in ms, 5 second for example
  var postal_input = $('#id_postal_code');

  $('#postal_list').on('click', function () {
    var kelurahan_pk = $('#postal_list').val()
    // $.ajaxSetup({
    //   headers: {
    //     'CSRFToken': "Jd7pb5xLOkpRwt9qrZl1e8JQQyMxWS2rwXZjG8Bisamq1VgSjJBQSl2Q82zDVJEF",
    //   }
    // });
    $.ajax({
      url: URL + '/wilayah/get_by_code/' + kelurahan_pk + '/',
      success: function (result) {
        console.log(result)
        document.getElementById('group_province').classList.remove('hidden');
        document.getElementById('group_city').classList.remove('hidden');
        document.getElementById('group_kecamatan').classList.remove('hidden');
        document.getElementById('group_kelurahan').classList.remove('hidden');
        getProvinsi(result['results'][0]['province_pk'])
        setOption(result['results'][0]['city_pk'], result['results'][0]['province'], 'id_kota', 'kota')
        setOption(result['results'][0]['kecamatan_pk'], result['results'][0]['city_pk'], 'id_kecamatan',
          'kecamatan')
        setOption(result['results'][0]['kelurahan_pk'], result['results'][0]['kecamatan_pk'], 'id_kelurahan',
          'kelurahan')
        document.getElementById('group_postal_list').classList.add('hidden');
      }
    });
  })

  //on keyup, start the countdown
  postal_input.on('keyup', function () {
    clearTimeout(typingTimer);
    typingTimer = setTimeout(doneTyping, doneTypingInterval);
  });

  //on keydown, clear the countdown 
  postal_input.on('keydown', function () {
    clearTimeout(typingTimer);
  });

  function doneTyping() {
    var provinsi = document.getElementById("id_provinsi");
    var kota = document.getElementById('id_kota');
    var kecamatan = document.getElementById("id_kecamatan ");
    var kelurahan = document.getElementById('id_kelurahan');
    document.getElementById('group_postal_list').classList.remove('hidden');
    var postal_code = $('#id_postal_code').val()

    // $.ajaxSetup({
    //   headers: {
    //     'CSRFToken': "Jd7pb5xLOkpRwt9qrZl1e8JQQyMxWS2rwXZjG8Bisamq1VgSjJBQSl2Q82zDVJEF",
    //   }
    // });
    $.ajax({
      url: URL + '/wilayah/postal_code/' + postal_code + '/',
      success: function (result) {
        console.log(result)
        var options = '';
        options += "<option value='0'>--pilih kelurahan--</option>";
        for (i = 0; i < result['results'].length; i++) {
          options += "<option value='" + result['results'][i]['value'] + "'>" + postal_code + ' / ' + result[
            'results'][i]['nama'] + "</option>";
          console.log(result['results'][i]['nama']);
        }
        $('#postal_list').html(options);
      }
    });
  }
</script>
<script>
  function getProvinsi(selected_pk) {
    var provinsi = document.getElementById("id_provinsi");
    // $.ajaxSetup({
    //   headers: {
    //     'CSRFToken': "Jd7pb5xLOkpRwt9qrZl1e8JQQyMxWS2rwXZjG8Bisamq1VgSjJBQSl2Q82zDVJEF",
    //   }
    // });
    $.ajax({
      url: URL + '/wilayah/provinsi/',
      success: function (result) {
        var options = '';
        // options += "<option value='0'>--pilih kota--</option>";
        for (i = 0; i < result['results'].length; i++) {
          if (result['results'][i]['value'] == selected_pk) {
            options += "<option value='" + result['results'][i]['value'] + "' selected='selected'>" + result[
              'results'][i]['nama'] + "</option>";
          } else {
            options += "<option value='" + result['results'][i]['value'] + "'>" + result['results'][i]['nama'] +
              "</option>";
          }
          console.log(result['results'][i]['nama']);
        }
        provinsi.innerHTML = options;
      }
    });
  }
</script>
<script>
  function setOption(selected_pk, selected_name, target_id, target_url) {
    var selects = document.getElementById(target_id);
    // $.ajaxSetup({
    //   headers: {
    //     'CSRFToken': "Jd7pb5xLOkpRwt9qrZl1e8JQQyMxWS2rwXZjG8Bisamq1VgSjJBQSl2Q82zDVJEF",
    //   }
    // });
    $.ajax({
      url: URL + '/wilayah/' + target_url + '/' + selected_name + '/',
      success: function (result) {
        var options = '';
        // options += "<option value='0'>--pilih kota--</option>";
        for (i = 0; i < result['results'].length; i++) {
          if (result['results'][i]['value'] == selected_pk) {
            options += "<option value='" + result['results'][i]['value'] + "' selected='selected'>" + result[
              'results'][i]['nama'] + "</option>";
          } else {
            options += "<option value='" + result['results'][i]['value'] + "'>" + result['results'][i]['nama'] +
              "</option>";
          }
          console.log(result['results'][i]['nama']);
        }
        selects.innerHTML = options;
      }
    });
  }
</script>
<script>
  function getKota(id) {
    var selected_provinsi = '';
    var myselect = document.getElementById("id_provinsi");
    var kota = document.getElementById('id_kota');
    selected_provinsi = myselect.options[myselect.selectedIndex].text;
    // $.ajaxSetup({
    //   headers: {
    //     'CSRFToken': "Jd7pb5xLOkpRwt9qrZl1e8JQQyMxWS2rwXZjG8Bisamq1VgSjJBQSl2Q82zDVJEF",
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
<script>
  function getKecamatan(id) {
    var selected_kota = '';
    var myselect = document.getElementById("id_kota");
    var kecamatan = document.getElementById('id_kecamatan');
    selected_kota = myselect.options[myselect.selectedIndex].value;
    // $.ajaxSetup({
    //   headers: {
    //     'CSRFToken': "Jd7pb5xLOkpRwt9qrZl1e8JQQyMxWS2rwXZjG8Bisamq1VgSjJBQSl2Q82zDVJEF",
    //   }
    // });
    $.ajax({
      url: URL + '/wilayah/kecamatan/' + selected_kota + '/',
      success: function (result) {
        var options = '';
        options += "<option value='0'>--pilih kecamatan--</option>";
        for (i = 0; i < result['results'].length; i++) {
          options += "<option value='" + result['results'][i]['value'] + "'>" + result['results'][i]['nama'] +
            "</option>";
          console.log(result['results'][i]['nama']);
        }
        kecamatan.innerHTML = options;
      }
    });
  }
</script>
<script>
  function getKelurahan(id) {
    var selected_kecamatan = '';
    var myselect = document.getElementById("id_kecamatan");
    var kelurahan = document.getElementById('id_kelurahan');
    selected_kecamatan = myselect.options[myselect.selectedIndex].value;
    // $.ajaxSetup({
    //   headers: {
    //     'CSRFToken': "Jd7pb5xLOkpRwt9qrZl1e8JQQyMxWS2rwXZjG8Bisamq1VgSjJBQSl2Q82zDVJEF",
    //   }
    // });
    $.ajax({
      url: URL + '/wilayah/kelurahan/' + selected_kecamatan + '/',
      success: function (result) {
        var options = '';
        options += "<option value='0'>--pilih kelurahan--</option>";
        for (i = 0; i < result['results'].length; i++) {
          options += "<option value='" + result['results'][i]['value'] + "'>" + result['results'][i]['nama'] +
            "</option>";
          console.log(result['results'][i]['nama']);
        }
        kelurahan.innerHTML = options;
      }
    });
  }
</script>
<script type="text/javascript">
  function setPostalCode() {
    var kelurahan = document.getElementById('id_kelurahan');
    var selected_kelurahan = kelurahan.options[kelurahan.selectedIndex].value;

    // $.ajaxSetup({
    //   headers: {
    //     'CSRFToken': "Jd7pb5xLOkpRwt9qrZl1e8JQQyMxWS2rwXZjG8Bisamq1VgSjJBQSl2Q82zDVJEF",
    //   }
    // });
    $.ajax({
      url: URL + '/wilayah/get_postal_code/' + selected_kelurahan + '/',
      success: function (result) {
        $('#id_postal_code').val(result['results'][0]['postal_code'])
      }
    });
  }
</script>