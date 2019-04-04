          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel tile fixed">

                <div class="x_title">
                <h2>Form Registration</h2>
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
                <!-- <center> <h4>Back Account</h4> </center> -->

                <form class="form-horizontal form-label-left" novalidate>
                <div class="x_content">
                <center><label for="back_account"><h3>Bank Account</h3></label></center>

                <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="form-group">
                <label for="bank_name">Bank Name</label>
                  <select id="bank_name" name="bank_name" class="form-control">
                    <option>BCA</option>
                    <option>Mandiri</option>
                    <option>BNI</option>
                    <option>BRI</option>
                  </select>
                  <div class="clearfix"></div>
                </div>
                <br>

                <div class="form-group">
                <label for="bank_branch">Bank Branch</label>
                <input type="text" id="bank_branch" class="form-control" name="bank_branch" required="required" />
                <div class="clearfix"></div>
                </div>
                <br>

                <div class="form-group">
                <label for="account_number">Account Number</label>
                <input type="number" id="account_number" class="form-control" name="account_number" required="required" />
                <div class="clearfix"></div>
                </div>
                <br>

                <div class="form-group">
                <label for="bank_branch">On Behalf</label>
                <input type="text" id="on_behalf" class="form-control" name="on_behalf" required="required" />
                <div class="clearfix"></div>
                </div>
                <br>

                <div align="right" class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button type="submit" id="send" class="btn btn-success"><i class="fa fa-check"> Save & Next </i></button>
                  <button type="submit" class="btn btn-default"><i class="fa fa-gear"> Skip </i></button>
                </div>

              </form>
              </div>
            </div>

          </div>
          <br />
      </div>
  </div>
</div>
        <!-- /page content -->