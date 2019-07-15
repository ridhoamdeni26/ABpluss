<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel tile fixed">

      <div class="x_title">
        <h2>Form Registration</h2>
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
      <!-- <center> <h4>Back Account</h4> </center> -->

      <form method="post" class="form-horizontal form-label-left" novalidate>
        <input type="hidden" name="csrfmiddlewaretoken"
          value="MsSFVryEb70DA4Rdai9x8VNiiZnRy1NkzcKzquCbPXXc5wYF22pmM86iAtaXxSpy">
        <div class="x_content">
          <center><label for="back_account">
              <h3>Bank Account</h3>
            </label></center>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

              <div class="form-group">
                <label for="account_owner">Account Owner</label>
                <select id="account_owner" name="account_owner" class="form-control">

                  <option value="8">Abdul Fatah - DKI JAKARTA</option>

                  <option value="10">Abdul Rahman - DKI JAKARTA</option>

                  <option value="12">Aditya Himawan - DKI JAKARTA</option>

                  <option value="13">Sueb Jaelani - JAWA TIMUR</option>

                  <option value="14">Ridho Amdeni - DKI JAKARTA</option>

                  <option value="15">Kang Somay - DKI JAKARTA</option>


                </select>
                <div class="clearfix"></div>
              </div>
              <br>

              <div class="form-group">
                <label for="bank_name">Bank Name</label>
                <select id="bank_name" name="bank_name" class="form-control">

                  <option>BANK ARTHA GRAHA INTERNASIONAL</option>

                  <option>BANK BNI SYARIAH</option>

                  <option>BANK BRI SYARIAH</option>

                  <option>BANK BUKOPIN</option>

                  <option>BANK CENTRAL ASIA</option>

                  <option>BANK CENTRAL ASIA SYARIAH</option>

                  <option>BANK CIMB NIAGA</option>

                  <option>BANK DANAMON</option>

                  <option>BANK DKI (JAKARTA)</option>

                  <option>BANK GANESHA</option>

                  <option>BANK HANA</option>

                  <option>BANK MANDIRI</option>

                  <option>BANK MAYBANK</option>

                  <option>BANK MAYBANK SYARIAH</option>

                  <option>BANK MAYORA</option>

                  <option>BANK MEGA</option>

                  <option>BANK MUAMALAT INDONESIA</option>

                  <option>BANK MUTIARA</option>

                  <option>BANK NEGARA INDONESIA</option>

                  <option>BANK OCBC NISP SYARIAH</option>

                  <option>BANK PERMATA</option>

                  <option>BANK RAKYAT INDONESIA</option>

                  <option>BANK SINARMAS</option>

                  <option>BANK SUMITOMO MITSUI INDONESIA</option>

                  <option>BANK SYARIAH BUKOPIN</option>

                  <option>BANK SYARIAH MANDIRI</option>

                  <option>BANK SYARIAH MEGA INDONESIA</option>

                  <option>BANK TABUNGAN NEGARA</option>

                  <option>BANK TABUNGAN PENSIUNAN NASIONAL</option>

                  <option>BANK UOB BUANA</option>

                  <option>BANK VICTORIA SYARIAH</option>


                </select>
                <div class="clearfix"></div>
              </div>
              <br>

              <div class="form-group">
                <label for="bank_branch">Bank Branch</label>
                <input type="text" id="bank_branch" class="form-control" name="bank_branch" />
                <div class="clearfix"></div>
              </div>
              <br>

              <div class="form-group">
                <label for="account_name">Account Name</label>
                <input type="text" id="account_name" class="form-control" name="account_name"
                  placeholder="Nama Pemilik Rekening" />
                <div class="clearfix"></div>
              </div>
              <br>

              <div class="form-group">
                <label for="account_number">Account Number</label>
                <input type="number" id="account_number" class="form-control" name="account_number" />
                <div class="clearfix"></div>
              </div>
              <br>

              <!--                 <div class="form-group">
                <label for="on_behalf">On Behalf</label>
                <input type="text" id="on_behalf" class="form-control" name="on_behalf"/>
                <div class="clearfix"></div>
                </div>
                <br> -->

              <div align="right" class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <button type="submit" id="send" class="btn btn-success"><i class="fa fa-check"> Save & Next
                  </i></button>
                <button onclick="window.location.href = '/'" class="btn btn-default"><i class="fa fa-gear"> Skip
                  </i></button>
              </div>

      </form>
    </div>
  </div>

</div>
<br />
</div>
</div>
</div>

</div>
<!-- /page content -->