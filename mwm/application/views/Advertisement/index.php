<div class="">
  <div class="page-title">
    <div class="title_left">
    </div>
  </div>
</div>
<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Advertisement</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a></li>
              <li><a href="#">Settings 2</a></li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <div class="form-group">
          <div align="right" class="col-md-12 col-sm-12 col-xs-12">
            <div id="gender" class="btn-group" data-toggle="buttons">
              <label class="btn btn-default active" data-toggle-class="btn-primary"
                data-toggle-passive-class="btn-default">
                <input id="mobil" onchange="changeVehicleType(this.id)" type="radio" name="vehicle_type"
                  value="mobil"><i class="fa fa-automobile">
                  &nbsp; Mobil &nbsp; </i>
              </label>
              <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                <input id="motor" onchange="changeVehicleType(this.id)" type="radio" name="vehicle_type"
                  value="motor"><i class="fa fa-motorcycle"> &nbsp; Motor &nbsp;
                </i>
              </label>
            </div>
          </div>
        </div>
        <br>
        <br>

        <form action="#" method="post" id="demo-form" data-parsley-validate>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Brand</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" id="title" name="title" required="required" class="form-control"
                placeholder="Simple Wrap Branding">
            </div>
            <div class="clearfix"></div>
          </div>
          <br>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gps Type</label>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="checkbox" style="padding-right: 45px">
                <label>
                  <input type="checkbox" name="gps_car"> GPS in-car
                </label>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="checkbox" style="padding-right: 45px">
                <label>
                  <input type="checkbox" name="gps_hp"> GPS Mobile Phone
                </label>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Agent</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="form-control" name="agent" id="agent">
                <option value="ABPluss">ABPluss</option>
              </select>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Advertiser</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="form-control" name="advertiser" id="advertiser">
                <option value="phd">PHD</option>
                <option value="marugame">Marugame</option>
              </select>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">Description</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <textarea id="message" required="required" rows="6" class="form-control" name="description"
                data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="100"
                data-parsley-minlength-message="Come on! You need to enter at least a 10 caracters long comment.."
                data-parsley-validation-threshold="10" placeholder=" Tag Heuer - Simple Wrap Branding"></textarea>
            </div>
            <div class="clearfix"></div>
          </div>

          <div id="type_space" class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Type Space</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="form-control" id="select_type_space" name="type_space">
                <option value="full_back_window">Full Back Window</option>
                <option value="full_back_body1">Full Back Body</option>
                <option value="full_half_body">Full Half Body</option>
                <option value="half_body">Half Body</option>
                <option value="full_body">Full Body</option>
              </select>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Review Image</label>
            <img id="image_space" class="image_type_space" style="margin-left: 10px; height: 150px; width: 250px;"
              src="<?php echo base_url() ?>assets/build/images/full_back_window.jpg" />
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Duration</label>
            <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="radio">
                <label>
                  <input type="radio" value="1" id="duration_1" name="duration" onclick="showOption(1);"> 1 Month
                </label>
              </div>
            </div>

            <!-- <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="radio">
                <label>
                  <input type="radio" value="2" id="duration_2" name="duration" onclick="showOption(2);"> 2 Month
                </label>
              </div>
            </div> -->

            <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="radio">
                <label>
                  <input type="radio" value="3" id="duration_3" name="duration" onclick="showOption(3);"> 3 Month
                </label>
              </div>
            </div>

            <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="radio">
                <label>
                  <input type="radio" value="3" id="duration_6" name="duration" onclick="showOption(6);"> 6 Month
                </label>
              </div>
            </div>

            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
            <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="radio">
                <label>
                  <input type="radio" value="3" id="duration_9" name="duration" onclick="showOption(9);"> 9 Month
                </label>
              </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="radio">
                <label>
                  <input type="radio" value="3" id="duration_12" name="duration" onclick="showOption(12);"> 12 Month
                </label>
              </div>
            </div>
            <br>
            <br>
          </div>

          <!-- <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period1">
              <label for="bonus_period_1">Bonus period 1</label>
              <input type="text" id="period_1" name="period_1" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period2">
              <label for="bonus_period_2">Bonus period 2</label>
              <input type="text" id="period_2" name="period_2" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period3">
              <label for="bonus_period_3">Bonus period 3</label>
              <input type="text" id="period_3" name="period_3" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period4">
              <label for="bonus_period_4">Bonus period 4</label>
              <input type="text" id="period_4" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period5">
              <label for="bonus_period_5">Bonus period 5</label>
              <input type="text" id="period_5" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period6">
              <label for="bonus_period_6">Bonus period 6</label>
              <input type="text" id="period_6" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period7">
              <label for="bonus_period_7">Bonus period 7</label>
              <input type="text" id="period_7" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period8">
              <label for="bonus_period_8">Bonus period 8</label>
              <input type="text" id="period_8" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period9">
              <label for="bonus_period_9">Bonus period 9</label>
              <input type="text" id="period_9" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period10">
              <label for="bonus_period_10">Bonus period 10</label>
              <input type="text" id="period_10" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period11">
              <label for="bonus_period_11">Bonus period 11</label>
              <input type="text" id="period_11" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period12">
              <label for="bonus_period_12">Bonus period 12</label>
              <input type="text" id="period_12" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div> -->
          <!-- </div> -->

          <div class="clearfix"></div>
          <div class="ln_solid"></div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-4 col-xs-12">Domisili</label>
            <div class="col-md-9 col-sm-8 col-xs-12">
              <input type="text" name="domisili" class="form-control">
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-4 col-xs-12">Number of Vehicle</label>
            <div class="col-md-9 col-sm-8 col-xs-12">
              <input type="number" id="number_vehicle" name="number_vehicle" required="required" class="form-control"
                style="width: 100%">
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-4 col-xs-12" for="model">Vehicle Model</label>
            <div class="col-md-9 col-sm-8 col-xs-12">
              <input type="text" class="form-control" name="model">
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="ln_solid"></div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-4 col-xs-12" for="instal_address">Installation Address</label>
            <div class="col-md-9 col-sm-8 col-xs-12">
              <textarea rows="6" id="instal_address" required="required" class="form-control" name="instal_address"
                data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="100"
                data-parsley-minlength-message="Come on! You need to enter at least a 10 caracters long comment.."
                data-parsley-validation-threshold="10"></textarea>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-4 col-xs-12" for="instal_address">Picture Sample</label>
            <div class="col-md-9 col-sm-8 col-xs-12">
              <input type="file" name="pic" id="image-source" onchange="previewImage_picture();">
              <br>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
            <img id="image-preview-picture" alt="image preview" />
            <div class="clearfix"></div>
          </div>

          <button type="button" class="btn btn-success">Update Ads</button>


        </form>


      </div>
    </div>
  </div>
</div>

<script>
  var pictureList = [
    "<?php echo base_url() ?>assets/build/images/full_back_window.jpg",
    "<?php echo base_url() ?>assets/build/images/full_back_body.jpg",
    "<?php echo base_url() ?>assets/build/images/full_half_body.jpg",
    "<?php echo base_url() ?>assets/build/images/half_body.jpg",
    "<?php echo base_url() ?>assets/build/images/back_body.jpg",
  ];

  $('#type_space').change(function () {
    var val = $('#select_type_space').val();
    $('.image_type_space').attr("src", "<?php echo base_url() ?>assets/build/images/" + val + ".jpg");
  });


  function changeVehicleType(el) {
    console.log(el)
    if (el == "motor") {
      $("#type_space").addClass("hidden")
      $("#image_space").attr('src', '<?php echo base_url() ?>assets/build/images/full_half_body.jpg');
    }
    if (el == "mobil") {
      $("#type_space").removeClass("hidden")
      // $("#image_space").attr('src', '<?php echo base_url() ?>assets/build/images/full_body.jpg');
    }
  }
</script>

<script type="text/javascript">
  function previewImage_picture() {
    document.getElementById("image-preview-picture").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

    oFReader.onload = function (oFREvent) {
      document.getElementById("image-preview-picture").src = oFREvent.target.result;
    };
  };
</script>

<script src="<?php echo base_url() ?>assets/select/jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
  function showOption(amount) {
    for (var i = 1; i <= 12; i++) {
      var ele = document.getElementById('period' + i);
      ele.classList.add('hidden')
    }
    for (var i = 1; i <= amount; i++) {
      var ele = document.getElementById('period' + i);
      ele.classList.remove('hidden')
    }
  }
</script>
<script type="text/javascript">
  $(document).ready(function () {
    $('#period_1').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_2').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_3').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_4').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_5').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_6').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_7').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_8').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_9').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_10').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_11').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_12').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#min_payment').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
  });
</script>
<!-- script upload image -->
<script type="text/javascript">
  function previewImage_picture() {
    document.getElementById("image-preview-picture").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

    oFReader.onload = function (oFREvent) {
      document.getElementById("image-preview-picture").src = oFREvent.target.result;
    };
  };
</script>