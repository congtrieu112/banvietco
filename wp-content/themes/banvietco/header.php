<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bản việt </title>

    <!-- Bootstrap -->
    <link href="<?php print get_template_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php print get_template_directory_uri() ?>/css/style.css"/>
    <link rel="stylesheet" href="<?php print get_template_directory_uri() ?>/css/ionicons.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <?php wp_head() ;?>
</head>
<body <?php body_class(); ?>>
<div class="container bv-container ">
    <header class="row">
        <div class="bv-banner ">
            <div class="bv-logo col-md-2 ">
                <a class="bv-logo-home" href="#"><img src="<?php print get_template_directory_uri() ?>/images/logo.png" alt=""/></a>
            </div>
            <div class="col-md-6 npdl">
                <div class="bv-header-Surrounded">
                    <p class="bv-content-head clear">Công ty cổ phần thương mại tư vấn bản việt</p>
                    <p><img src="<?php print get_template_directory_uri() ?>/images/solugun.png" alt=""/></p>
                </div>
            </div>
            <div class="col-md-4 clear " >
                <div class="bv-flag" >
                    <ul class="bv-flag-top">
                        <li><a href="#"><i class="ja"></i>日本語</a></li>
                        <li><a href="#"><i class="vn"></i>Tiếng việt</a></li>
                        <li><a href="#"><i class="en"></i>English</a></li>
                    </ul>
                </div>
                <div class="bv-help">
                    <p class="bv-top-help">Quý khách cần sự hỗ trợ xin liên hệ</p>
                    <p class="bv-hotline-help">Hotline : + 84-90 668 5557</p>
                </div>
                <div class="bv-search">
                    <input type="text" id="s" name="s" class="bv-input-s"/>
                    <input type="submit" value="Tìm kiếm" class="bv-input-submit"/>
                </div>
                <div class="bv-menu-left-banner">
                    <ul class="bv-left-mn">
                        <li><a href="#"><i class="bv-home"></i>Trang chủ</a></li>
                        <li><a href="#"><i class="bv-maps"></i>Sơ đồ web</a></li>
                        <li><a href="#"><i class="bv-phone"></i>Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bv-menu">
            <nav class="navbar navbar-default bv-navamenu clear">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="clear collapse navbar-collapse bv-menu-two" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav bv-ul-menu-two">
                        <li class="active"><a href="#">Giới thiệu <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Dịch vụ</a></li>
                        <li><a href="#">Thành tích</a></li>
                        <li><a href="#">TT Dự Toán</a></li>
                        <li><a href="#">Tin tức/Sự kiện</a></li>
                        <li><a href="#">Dữ liệu</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
        <div class="clearfix"></div>