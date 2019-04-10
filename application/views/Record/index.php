<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel tile fixed">
            <div class="x_title">
                <h2>Dashboard</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
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
            <br>
            <div class="x_content">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <table id="record" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Plat</th>
                                <th>Last Update</th>
                                <th>Detail Record</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <th>B1234MUN</th>
                                <th>14 January 2019</th>
                                <th>
                                    <button type="button" class="btn btn-info" data-toggle='modal'
                                        data-target='#recordModal'>Detail</button>
                                </th>
                            </tr>
                            <tr>
                                <th>2</th>
                                <th>B1234MUN</th>
                                <th>14 January 2019</th>
                                <th>
                                    <button type="button" class="btn btn-info" data-toggle='modal'
                                        data-target='#recordModal'>Detail</button>
                                </th>
                            </tr>
                            <tr>
                                <th>3</th>
                                <th>B1234MUN</th>
                                <th>14 January 2019</th>
                                <th>
                                    <button type="button" class="btn btn-info" data-toggle='modal'
                                        data-target='#recordModal'>Detail</button>
                                </th>
                            </tr>
                            <tr>
                                <th>4</th>
                                <th>B1234MUN</th>
                                <th>14 January 2019</th>
                                <th>
                                    <button type="button" class="btn btn-info" data-toggle='modal'
                                        data-target='#recordModal'>Detail</button>
                                </th>
                            </tr>
                            <tr>
                                <th>5</th>
                                <th>B1234MUN</th>
                                <th>14 January 2019</th>
                                <th>
                                    <button type="button" class="btn btn-info" data-toggle='modal'
                                        data-target='#recordModal'>Detail</button>
                                </th>
                            </tr>
                            <tr>
                                <th>6</th>
                                <th>B1234MUN</th>
                                <th>14 January 2019</th>
                                <th>
                                    <button type="button" class="btn btn-info" data-toggle='modal'
                                        data-target='#recordModal'>Detail</button>
                                </th>
                            </tr>
                            <tr>
                                <th>7</th>
                                <th>B1234MUN</th>
                                <th>14 January 2019</th>
                                <th>
                                    <button type="button" class="btn btn-info" data-toggle='modal'
                                        data-target='#recordModal'>Detail</button>
                                </th>
                            </tr>
                            <tr>
                                <th>8</th>
                                <th>B1234MUN</th>
                                <th>14 January 2019</th>
                                <th>
                                    <button type="button" class="btn btn-info" data-toggle='modal'
                                        data-target='#recordModal'>Detail</button>
                                </th>
                            </tr>
                            <tr>
                                <th>9</th>
                                <th>B1234MUN</th>
                                <th>14 January 2019</th>
                                <th>
                                    <button type="button" class="btn btn-info" data-toggle='modal'
                                        data-target='#recordModal'>Detail</button>
                                </th>
                            </tr>
                            <tr>
                                <th>10</th>
                                <th>B1234MUN</th>
                                <th>14 January 2019</th>
                                <th>
                                    <button type="button" class="btn btn-info" data-toggle='modal'
                                        data-target='#recordModal'>Detail</button>
                                </th>
                            </tr>
                            <tr>
                                <th>11</th>
                                <th>B1234MUN</th>
                                <th>14 January 2019</th>
                                <th>
                                    <button type="button" class="btn btn-info" data-toggle='modal'
                                        data-target='#recordModal'>Detail</button>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="recordModal" role="dialog">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Route</h4>
            </div>
            <div class="modal-body">
                <div id="googleHeatMap" style="width:100%;height:700px;"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#record').DataTable({
            "scrollX": true,
            "searching": true,
        });
    });
</script>
<script>
    function initMap() {
        // The location of Uluru
        var uluru = {
            lat: -6.21462,
            lng: 106.84513
        };
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('googleHeatMap'), {
                zoom: 13,
                center: uluru
            });
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: "<?php echo base_url() ?>assets/build/images/mobil.png",
        });
    }
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAj7tSdjukVN4virXCXLUnKLJ4UR_gXVG0&callback=initMap">
</script>