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
          <h2>Role Management</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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

          <div class="col-md-3 col-sm-12 col-xs-12 form-group">
            <div class="input-group">
              <input type="text" name="search" id="search" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                  <button type="button" style="background-color:#228B22" class="btn btn-primary" ><i class="fa fa-search"></i></button>
                </span>
            </div>
          </div>

          <p align="right"><a href="#" style="background-color:#228B22" class="btn btn-round btn-primary" id="showadd" data-target='#addModal' data-toggle='modal' onclick="tes()"><i class="fa fa-plus"></i></a></p>


<br>
<table id="myTable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>id</th>
              <th>username</th>
              <th>password</th>
              <th>email</th>
              <th>status</th>
            </tr>
          </thead>
            <tbody>
          <?php
            foreach($result as $row) {
            ?>     
            <tr>
              <td></td>
              <td><?php echo $row->id; ?></td>
              <td><?php echo $row->username; ?></td>
              <td><?php echo $row->password; ?> </td>
              <td><?php echo $row->email; ?></td>
              <td><?php echo $row->status; ?></td>
            </tr>
            <?php
                  }
                ?> 
          </tbody>
        </table>

<!-- Pop Up Add Modal -->
      <div class="modal fade" id="addModal" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add New Role</h4>
            </div>  
          <div class="modal-body">

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Role Name<span class="required"></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" id="role_name" name="role_name" class="form-control" required="required" placeholder="Type a role">
                </div>
            </div>
           <div class="clearfix"></div>
           <br>

           <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Description<span class="required"></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" id="description" name="description" class="form-control" required="required" placeholder="Type a Description">
                </div>
            </div>
           <div class="clearfix"></div>
           <br>

           <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Is Active<span class="required"></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="checkbox" class="flat">
                </div>
            </div>
           <div class="clearfix"></div>
           <br>

         <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Role<span class="required"></label>
          </div>

            <div class="x_panel">
              <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="checkbox" style="padding-left: 45px">
                  <label>
                    <input type="checkbox" name="dashboard" > Dashboard
                  </label>
                </div>
                <div class="clearfix"></div>

                <div class="checkbox" style="padding-left: 45px">
                  <label>
                    <input type="checkbox" name="driver"> Search Driver
                  </label>
                </div>
                <div class="clearfix"></div>

                <div class="checkbox" style="padding-left: 45px">
                  <label>
                    <input type="checkbox" name="advertisement"> Advertisement
                  </label>
                </div>
                <div class="clearfix"></div>

                <div class="checkbox" style="padding-left: 5px">
                  <button type="button" data-toggle="collapse" data-target="#pay_collapse" style="background-color:#228B22" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></button>
                  <label>
                    <input type="checkbox" id="selectall_payment" name="payment" class="first"> Payment
                  </label>
                </div>
                  <!-- collapse payement -->
                  <div class="collapse" id="pay_collapse">  
                  <div class="checkbox" style="padding-left: 70px">
                    <label>
                      <input type="checkbox" class="first"> Payment List
                    </label>
                  </div>

                  <div class="checkbox" style="padding-left: 70px">
                    <label>
                      <input type="checkbox" class="first"> Payment Bulk
                    </label>
                  </div>
                <div class="clearfix"></div>
              </div>
                <!-- collapse payement -->

                <div class="checkbox" style="padding-left: 5px">
                  <button type="button" data-toggle="collapse" data-target="#loyality_management" style="background-color:#228B22" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i></button>
                  <label>
                    <input type="checkbox" id="selectall_loyality" name="loyality" class="second"> Loyality Management
                  </label>
                </div>
                <!-- collapse loyality -->
                  <div class="collapse" id="loyality_management">  
                  <div class="checkbox" style="padding-left: 70px">
                    <label>
                      <input type="checkbox" name="option1" class="second"> Option 1
                    </label>
                  </div>

                  <div class="checkbox" style="padding-left: 70px">
                    <label>
                      <input type="checkbox" name="option2" class="second"> Option 2
                    </label>
                  </div>
                <div class="clearfix"></div>
              </div>
                <!-- collapse loyality -->

                <div class="checkbox" style="padding-left: 45px">
                  <label>
                    <input type="checkbox" name="notif"> Notification
                  </label>
                </div>
                <div class="clearfix"></div>

                <div class="checkbox" style="padding-left: 45px">
                  <label>
                    <input type="checkbox" name="news"> News
                  </label>
                </div>
                <div class="clearfix"></div>

                <div class="checkbox" style="padding-left: 45px">
                  <label>
                    <input type="checkbox" name="street"> Street Other
                  </label>
                </div>
                <div class="clearfix"></div>

                <div class="checkbox" style="padding-left: 5px">
                  <button type="button" data-toggle="collapse" data-target="#md" style="background-color:#228B22" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i></button>
                  <label>
                    <input type="checkbox" id="selectall_md" name="master_data" class="third"> Master Data
                  </label>
                </div>
                <!-- collapse loyality -->
                  <div class="collapse" id="md">  
                  <div class="checkbox" style="padding-left: 70px">
                    <label>
                      <input type="checkbox" name="bank" class="third"> Bank
                    </label>
                  </div>

                  <div class="checkbox" style="padding-left: 70px">
                    <label>
                      <input type="checkbox" name="vehicle" class="third"> Vehicle
                    </label>
                  </div>

                  <div class="checkbox" style="padding-left: 70px">
                    <label>
                      <input type="checkbox" name="religion" class="third"> Religion
                    </label>
                  </div>

                  <div class="checkbox" style="padding-left: 70px">
                    <label>
                      <input type="checkbox" name="wilayah" class="third"> Wilayah
                    </label>
                  </div>
                <div class="clearfix"></div>
              </div>
                <!-- collapse loyality -->           

                <div class="checkbox" style="padding-left: 5px">
                  <button type="button" data-toggle="collapse" data-target="#regis" style="background-color:#228B22" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i></button>
                  <label>
                    <input type="checkbox" id="selectall_regis" name="registration" class="four"> Registration
                  </label>
                </div>
                  <!-- collapse regis -->
                    <div class="collapse" id="regis">  
                    <div class="checkbox" style="padding-left: 70px">
                      <label>
                        <input type="checkbox" name="agent" class="four"> Agent
                      </label>
                    </div>

                    <div class="checkbox" style="padding-left: 70px">
                      <label>
                        <input type="checkbox" name="driver" class="four"> Driver
                      </label>
                    </div>

                    <div class="checkbox" style="padding-left: 70px">
                      <label>
                        <input type="checkbox" name="advertiser" class="four"> Advertiser
                      </label>
                    </div>

                    <div class="checkbox" style="padding-left: 70px">
                      <label>
                        <input type="checkbox" name="business_op" class="four"> Business Operator
                      </label>
                    </div>
                  <div class="clearfix"></div>
                </div>
                  <!-- collapse regis -->
    
                <div class="checkbox" style="padding-left: 45px">
                  <label>
                    <input type="checkbox" name="role_m"> Role Management
                  </label>
                </div>
                <div class="clearfix"></div>

              </div>
            </div>

            <div class="modal-footer">
             <button class="btn btn-primary" id="tambah" type="submit"><i class="fa fa-file"> Add</i></button>
             <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"> Close</i></button>
            </div>

          </div>
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>
</div>