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
                <h2>AB Analytic</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
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
            <div class="x_content">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="image-upload-wrap">
                        <input class="file-upload-input" type='file' onchange="readURL(this);" id="image_input" accept="image/*" />
                        <div class="drag-text">
                            <img src="<?php echo base_url() ?>assets/build/images/upload_image.png" alt="">
                            <h3>Drag and drop a file or select add Image</h3>
                        </div>
                    </div>
                    <div class="file-upload-content">
                        <img class="file-upload-image" id="image-source" src="#" alt="your image" />
                        <div class="image-title-wrap">
                            <button type="button" onclick="removeUpload()" class="remove-image"> Remove <span class="image-title">Uploaded
                                    Image</span></button>
                        </div>
                    </div>

                    <button class="button-upload-image button-upload" onclick="image_picture();">
                        <span class="fa fa-cloud-upload"></span>
                        Proses
                    </button>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="image-wrap">
                        <div class="file-upload-content2">
                            <img class="imageAnalytic" alt="image preview" src="#" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
    $(".title-upload").hover(function () {
        $(this).toggleClass("is-active");
    });
</script>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.image-upload-wrap').hide();

                $('.file-upload-image').attr('src', e.target.result);

                $('.file-upload-content').show();

                $('.image-title').html(input.files[0].name);

            };

            reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
    }
    $('.image-upload-wrap').bind('dragover', function () {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
    });
</script>

<script type="text/javascript">
    function image_picture() {

        var input = $("#image_input");
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.image-wrap').css("border", "none");;

            $('.imageAnalytic').attr('src', e.target.result);
            $('.file-upload-content2').show();

            $('.image-title').html(input[0].files[0].name);

        };

        reader.readAsDataURL(input[0].files[0]);
    };
</script>