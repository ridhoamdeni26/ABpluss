        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <a>Copyright &copy; <script type="text/javascript">
                document.write(new Date().getFullYear());
                </script> ABPluss.</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() ?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url() ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url() ?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url() ?>assets/vendors/skycons/skycons.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="<?php echo base_url() ?>assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-select/dataTables.select.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url() ?>assets/vendors/moment/min/moment.min.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo base_url() ?>assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- validator -->
    <script src="<?php echo base_url() ?>assets/vendors/validator/validator.js"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url() ?>assets/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url() ?>assets/build/js/custom.min.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url() ?>assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- maskmoney -->
    <script src="<?php echo base_url() ?>assets/mask_money/dist/jquery.maskMoney.js"></script>
    <script src="<?php echo base_url() ?>assets/mask_money/dist/jquery.maskMoney.min.js"></script>
<!--     <script>
        function showLoader(){
            $('#loaderContainer').removeClass('hidden');
        }
        function hideLoader(){
            $('#loaderContainer').addClass('hidden');
        }
        function showLogin(){
            $('#loginContainer').removeClass('hidden');
        }
        function loginSuccess(){
            setTimeout(function(){ 
              dismissPopup('loginContainer');
            }, 3000)
        }
    </script> -->

    <!-- table role management -->
    <script type="text/javascript">
        $(document).ready(function() {
            // setTimeout(hideLoader(),13000);
            // setTimeout(hideLoader(), 3000);
            // hideLoader();
            //$(".preloader").fadeOut();
            setTimeout(function(){
                $('body').addClass('loaded');
                $(".preloader").fadeIn();
                // $(".preloader").fadeOut();
            }, 10);

            // $(".preloader").fadeOut();
                var t = $('#myTable').DataTable( {
                "searching" : false,
                "columnDefs": [ {
                "searchable": false,
                "orderable": true,
                "targets": 0,
                "scrollX": true
            } ],
            "order": [[ 1, 'asc' ]]
        } );
                
                t.on( 'order.dt search.dt', function () {
                    t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                        cell.innerHTML = i+1;
                    } );
                } ).draw();
            } );
    </script>

<!-- table drive -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#drive').DataTable( {
            "searching" : false,
                columnDefs: [ {
                    scrollX: true,
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0,
                    checkboxes: {
                       selectRow: true
                    },
                } ],
                select: {
                    style:    'multi',
                    selector: 'td:first-child'
                },
                order: [[ 1, 'asc' ]]
            } );

            $('#drive2').DataTable( {
            "searching" : false,
                'columnDefs': [
                {
                    'targets': 0,
                    'checkboxes': {
                       'selectRow': true
                    }
                }
              ],
              'select': {
                 'style': 'multi'
              },
              'order': [[1, 'asc']]
            } );

            $('#detail').DataTable( {
            "searching" : false,
            "columnDefs": [ {
                "orderable": true,
                "scrollX": true
                } ],
            } );

            $('#report').DataTable( {
            "searching" : false,
            "columnDefs": [ {
                "orderable": true,
                "scrollX": true
                } ],
            } );

        } );
    </script>
        
    <script type="text/javascript">
      $("#addmodal").on("shown", function(event){
          modalBox.modal('show');
          $(this).find('.modal-body').css({
             width: 'auto',
             height: 'auto',
             maxheight: '100%'
          }); 
      });
    </script>
<script type='text/javascript'>
  $(document).ready(function() {
    $("#selectall_payment").click(function() {
    $(".first").prop("checked", $("#selectall_payment").prop("checked"))
    });

    $("#selectall_loyality").click(function() {
    $(".second").prop("checked", $("#selectall_loyality").prop("checked"))
    });

    $("#selectall_md").click(function() {
    $(".third").prop("checked", $("#selectall_md").prop("checked"))
    });

    $("#selectall_regis").click(function() {
    $(".four").prop("checked", $("#selectall_regis").prop("checked"))
    });
  });
</script>
<script type="text/javascript">
  $('#pub_start').datetimepicker({
        format: 'YYYY-MM-DD'
    });
  $('#pub_end').datetimepicker({
        format: 'YYYY-MM-DD'
    });
  $('#ins_start').datetimepicker({
        format: 'YYYY-MM-DD'
    });
  $('#ins_end').datetimepicker({
        format: 'YYYY-MM-DD'
    });
  $('#cam_start').datetimepicker({
        format: 'YYYY-MM-DD'
    });
  $('#cam_end').datetimepicker({
        format: 'YYYY-MM-DD'
    });
  $('#start_search').datetimepicker({
        format: 'YYYY-MM-DD'
    });
  $('#end_search').datetimepicker({
        format: 'YYYY-MM-DD'
    });
  $('#detail_driver').datetimepicker({
        format: 'YYYY-MM-DD'
    });
</script>