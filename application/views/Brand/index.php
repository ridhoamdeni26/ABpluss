<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel tile fixed">
            <div class="x_title">
                <h2>Example Brand</h2>
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
                    <div id="map" style="width:100%;height:850px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAj7tSdjukVN4virXCXLUnKLJ4UR_gXVG0&callback=initMap">
</script>
<script>
    var SITE_LOCAL = "<?php echo base_url()?>";
    $(document).ready(function () {
        initMap()
        billBoard()
    });

    function initMap() {
        var myLatLng = {
            lat: -2.5489,
            lng: 118.0149
        };

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 5,
            center: myLatLng,
            gestureHandling: 'greedy',
        });
        billBoard(map);
    }

    function billBoard(map) {
        $.ajax({
            url: SITE_LOCAL + 'assets/billboard.json',
            method: 'get',
            dataType: 'json',
            async: false,
            cache: false,
            success: function (result) {
                for (var i = 0; i < result.length; i++) {
                    var beach = result[i];
                    var nama = result[i]['0']
                    var lat = parseFloat(result[i]['1'])
                    var lang = parseFloat(result[i]['2'])
                    var marker_billboard = {
                        lat: lat,
                        lng: lang
                    }
                    var marker = new google.maps.Marker({
                        position: marker_billboard,
                        map: map,
                        info: '<h4>BILLBOARD</h4>' + ' ' + result[i]['0'],
                        icon: SITE_LOCAL + "assets/build/images/ads.png",
                    });
                    var infowindow3 = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'mouseover', function () {
                        infowindow3.setContent(this.info);
                        infowindow3.open(map, this);
                    });
                }
            }
        });
    }

    function toggleBounce() {
        if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }
    // var marker = new google.maps.Marker({
    //     position: myLatLng,
    //     map: map,
    //     title: 'Hello World!'
    // });
</script>