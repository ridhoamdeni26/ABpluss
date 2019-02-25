<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url() ?>assets/build/images/logoAB.png" type="image/ico" />

    <title>ABPluss Car</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="<?php echo base_url() ?>assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
    <!-- iCheck -->
    <link href="<?php echo base_url() ?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url() ?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url() ?>assets/pagination/uikit.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.uikit.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendors/datatables.net-select/select.dataTables.min.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo base_url() ?>assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">
    <!-- pagination -->
    <link href="<?php echo base_url() ?>assets/pagination/pagination.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>assets/select/jquery/jquery-3.3.1.min.js"></script>
    <style type="text/css">
        .loader-container{
          position: fixed;
          z-index: 2000;
          background-color:#000606ed;
          width: 100%;
          height: 100%;
          top: 0;
          animation: change-bg-loader 2.71s ease-in infinite;
        }
        #loader-wrapper {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          z-index: 1000;
        }
        @keyframes mymove{
  0%{
     opacity: 100; 
  }

  100%{
     opacity: 0;
  }
}
/*Loader Animation*/
#loader {
  display: block;
  position: relative;
  left: 49%;
  top: 20%;
  width: 150px;
  height: 150px;
  border-radius: 50%;
  margin: -75px 0 0 -75px;
  border: 5px solid transparent;
  border-top-color:#3498db; 
  border-bottom-color: #3498db; 
  z-index: 1001;
    animation: spin 1s linear infinite ;
}

#loader:before {
 content: "";
 position: absolute;
 top: 10px;
 left: 10px;
 right: 10px;
 bottom: 10px;
 border: 5px solid transparent;
 border-radius: 50%;
 border-left-color: #e74c3c;
 border-right-color:  #e74c3c;
 z-index: 1001;
 animation: spin 0.5s ease-in-out infinite ;
 }

#loader:after {
 content: "";
 position: absolute;
 top: 40px;
 left: 40px;
 right: 40px;
 bottom: 40px;
 border-radius: 50%;
 border: 5px solid transparent;
 border-top-color: #f9c922;
 border-bottom-color:  #f9c922;
 z-index: 1001;
 animation: spin 1s ease infinite ;
 }
 @keyframes spin {
  0% {
      transform: rotate(0deg) ;
    
  }

  100% {
      transform: rotate(360deg);
  }
}
/*Background Section Animation*/
#loader-wrapper .loader-section {
  position: fixed;
  top: 0;
  width: 51%;
  height: 100%;
  background: #222;
  z-index: 1000;
}

#loader-wrapper .loader-section.section-left {
 left: 0;
 }

#loader-wrapper .loader-section.section-right {
 right: 0;
 }
 .loaded #loader-wrapper .loader-section.section-left {
  transform: translateX(-100%);
  -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000); 
                transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
}
.loaded #loader-wrapper .loader-section.section-right {
  transform: translateX(100%);
  -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000); 
                transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
}
.loaded #loader-wrapper {
        -webkit-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
                transform: translateY(-100%);
 
        -webkit-transition: all 0.3s 1s ease-out; 
                transition: all 0.3s 1s ease-out;
}

        #image-preview{
            display:none;
            width : 100%;
            height : auto;
        }
        #image-preview-picture{
            display:none;
            width : 300px;
            height : 300px;
        }
    </style>
    <style type="text/css">
        #image-preview2{
            display:none;
            width : 100%;
            height : auto;
        }
    </style>
    <style type="text/css">
        #image-preview_pp{
            display:none;
            width : 150px;
            height : 150px;
        }
    </style>
    <style type="text/css">
        #image-preview_pp_2{
            display:none;
            width : 150px;
            height : 150px;
        }
    </style>
    <!-- <style type="text/css">
        th {
      border-top: 1px solid #dddddd;
      border-bottom: 1px solid #dddddd;
      border-right: 1px solid #dddddd;
    }
    .dataTableLayout {
    table-layout:fixed;
    width:100%;
    }
    </style> -->
  </head>