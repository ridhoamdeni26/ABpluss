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
</script>
<script>
    var SITE_LOCAL = "<?php echo base_url()?>";
    $(document).ready(function () {
        kereta()
        initMap()
        billBoard()
    });

    var mapCenter = {
        lat: -6.21462,
        lng: 106.84513
    };
    var iterateTimeout;
    var marker1;
    var marker2;
    var marker3;
    var krl_mang_sud;
    var krl_grog_pes;
    var krl_duri_grog;
    // var jancok;

    function kereta() {
        $.ajax({
            url: SITE_LOCAL + 'assets/kereta.json',
            method: 'get',
            dataType: 'json',
            async: false,
            cache: false,
            success: function (response) {
                kereta1(response)
            }
        });
    }

    function kereta1(response) {
        krl_grog_pes = response['grog-pes'];
        krl_duri_grog = response['duri-grog'];
        krl_mang_sud = response['mang-sud'];
    }   
    var marker1 = "";
    var marker2 = "";
    var marker3 = "";
    var backward = false;
    var currentIndex = 0;
    var currentIndex1 = 0;
    var currentIndex2 = 0;

    function placeMarker() {
        if (currentIndex < krl_mang_sud.length) {
            mapCenter = {
                lat: krl_mang_sud[currentIndex]['0'],
                lng: krl_mang_sud[currentIndex]['1']
            };
            if (marker1 == "") {
                marker1 = new google.maps.Marker({
                    position: mapCenter,
                    map: map,
                    icon: SITE_LOCAL + "assets/build/images/train.png",
                });
            } else {
                marker1.setPosition(mapCenter);
            }
            if (backward) {
                currentIndex -= 1;
            } else {
                currentIndex += 1;
            }
            iterateTimeout = setTimeout(function () {
                placeMarker()
            }, 300);
        } else {
            if (backward) {
                backward = false;
            } else {
                backward = true;
                currentIndex -= 1;
            }
            backward = true;
            placeMarker()
        }
    }

    function placeMarker2() {
        if (currentIndex1 < krl_grog_pes.length) {
            mapCenter = {
                lat: parseFloat(krl_grog_pes[currentIndex1][0]),
                lng: parseFloat(krl_grog_pes[currentIndex1][1])
            };
            console.log(krl_grog_pes[currentIndex1])
            if (marker2 == "") {
                marker2 = new google.maps.Marker({
                    position: mapCenter,
                    map: map,
                    icon: SITE_LOCAL + "assets/build/images/train.png",
                });
            } else {
                marker2.setPosition(mapCenter);
            }
            if (backward) {
                currentIndex1 -= 1;
            } else {
                currentIndex1 += 1;
            }
            iterateTimeout = setTimeout(function () {
                placeMarker2()
            }, 300);
        } else {
            if (backward) {
                backward = false;
            } else {
                backward = true;
                currentIndex1 -= 1;
            }
            backward = true;
            placeMarker2()
        }
    }

    function placeMarker3() {
        if (currentIndex2 < krl_duri_grog.length) {
            mapCenter = {
                lat: krl_duri_grog[currentIndex2][0],
                lng: krl_duri_grog[currentIndex2][1]
            };
            if (marker3 == "") {
                marker3 = new google.maps.Marker({
                    position: mapCenter,
                    map: map,
                    icon: SITE_LOCAL + "assets/build/images/train.png",
                });
            } else {
                marker3.setPosition(mapCenter);
            }
            if (backward) {
                currentIndex2 -= 1;
            } else {
                currentIndex2 += 1;
            }
            iterateTimeout = setTimeout(function () {
                placeMarker3()
            }, 300);
        } else {
            if (backward) {
                backward = false;
                currentIndex2 -= 0;
            } else {
                backward = true;
                currentIndex2 -= 1;
            }
            backward = true;
            placeMarker3()
        }
    }

    var map;

    function initMap() {
        var myLatLng = {
            lat: -2.5489,
            lng: 118.0149
        };

        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 5,
            center: myLatLng,
            gestureHandling: 'greedy',
            // mapTypeId: google.maps.MapTypeId.ROADMAP,
        });
        billBoard(map);
        placeMarker();
        placeMarker2();
        placeMarker3();
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
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAj7tSdjukVN4virXCXLUnKLJ4UR_gXVG0&callback=initMap">