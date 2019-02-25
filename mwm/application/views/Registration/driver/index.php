          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel tile fixed">

                <div class="x_title">
                <h2>New Driver</h2>
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
                <center> <h2>Account Detail</h2> </center>

                <!-- <form class="form-horizontal form-label-left" novalidate> -->
                <div class="x_content">

                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">

                <div class="form-group">
                <label for="fullname">Real Name :</label>
                <input type="text" id="fullname" class="form-control" name="fullname" required="required" />
                <div class="clearfix"></div>
                </div>
                <br>

                <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" id="password" name="password" required="required" class="form-control" value="">
                <div class="clearfix"></div>
                </div>
                <br>

                <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required="required" />
                <div class="clearfix"></div>
                </div>    
                <br>

                <div class="form-group">
                <label for="province">Province :</label>
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
                <label for="district">District :</label>
                  <select class="form-control">
                    <option>Choose option</option>
                    <option>Option one</option>
                    <option>Option two</option>
                    <option>Option three</option>
                    <option>Option four</option>
                  </select>
                  <div class="clearfix"></div>
                </div>

                </div> <!-- penutup div col -->

                <div class="col-md-6 col-sm-6 col-xs-6">

                <div class="form-group">
                <label for="mobile_phone">Mobile Phone :</label>
                <input type="telp" id="input_no_hp" class="form-control" name="input_no_hp" required="" />
                <div class="clearfix"></div>
                </div>
                <br>

                <div class="form-group">
                <label for="password2">Confirm Password :</label>
                <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control" required="required">
                <div class="clearfix"></div>
                </div>
                <br>

                <div class="form-group">
                <label for="address">Address :</label>
                <input type="text" id="address" class="form-control" name="address" required="required" />
                <div class="clearfix"></div>
                </div>
                <br>

                <div class="form-group">
                <label for="city">City :</label>
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

                <label for="city">Upload Photo KTP/SIM</label>
                <input type="file" name="pic" id="image-source" onchange="previewImage();">
                <br>
                <img id="image-preview" alt="image preview"/>
                <br>

                <div align="right" class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button type="submit" id="send" onclick="validasi();" class="btn btn-success"><i class="fa fa-check"> Create An Account </i></button>
                </div>

                </div> <!-- penutup div col -->
                </div> <!-- penutup div row -->
              </div>
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

<!-- script untuk mobile phone -->
<script type="text/javascript">
     function validasi()
     {
       var nomor_hp=document.getElementById("input_no_hp").value;
        var number=/^[0-9]+$/;
        if (!nomor_hp.match(number)){
          alert("Mobile Numbers Must be Numbers !");
          return false;
        };
          
        if (nomor_hp.length!=12){
          alert("Mobile Number Must be 12 digits");
          return false;
        };
     }
</script>
