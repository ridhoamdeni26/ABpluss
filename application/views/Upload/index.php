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
                <h2>Report Photo</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Plat Nomor</th>
                            <th>Foto 1</th>
                            <th>Foto 2</th>
                            <th>Foto 3</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        var datareport = [
            ["1", "B1234BER", "<?php echo base_url() ?>assets/build/images/full_back_window.jpg",
                "<?php echo base_url() ?>assets/build/images/full_back_body1.jpg",
                "<?php echo base_url() ?>assets/build/images/full_half_body.jpg"
            ],
            ["2", "B1234LIM", "<?php echo base_url() ?>assets/build/images/full_back_window.jpg",
                "<?php echo base_url() ?>assets/build/images/full_back_body1.jpg",
                "<?php echo base_url() ?>assets/build/images/full_half_body.jpg"
            ]
        ];

        var table = $('#example').DataTable({
            data: datareport,
            columnDefs: [{
                targets: [2, 3, 4],
                render: function (data) {
                    return '<img height="50%" width="50%" src="' + data + '">'
                }
            }]
        })
    });
</script>