<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - VTracking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="uk-background-norepeat uk-background-top-center" data-src="images/banner-n1.png" uk-img>
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<!--header-->
<header class="header" uk-sticky>
    <nav class="header__top uk-navbar-container uk-navbar-transparent uk-visible@m">
        <div class="uk-container">
            <div uk-navbar>
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li>
                            <a href="mailto:cskh.tlogistics@gmail.com">
                                <img class="uk-margin-small-right" src="images/n-ico-email.png" alt="">
                                Email
                                <span>cskh.tlogistics@gmail.com</span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:05233438686">
                                <img class="uk-margin-small-right" src="images/n-ico-phone-1.png" alt="">
                                Hỗ trợ kỹ thuật:
                                <span>0523.343.8686</span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:052343.6868">
                                <img class="uk-margin-small-right" src="images/n-ico-phone-2.png" alt="">
                                Tư vấn dịch vụ:
                                <span>052343.6868</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <nav class="header__bottom uk-navbar-container uk-navbar-transparent">
        <div class="uk-container">
            <div uk-navbar>
                <div class="uk-navbar-left">
                    <a href="" class="uk-navbar-item header__bottom__logo uk-logo"><img src="images/logo1.png" alt=""></a>
                </div>
                <div class="uk-navbar-center">
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li><a href="#">Tính năng</a></li>
                        <li><a href="#">Mô hình</a></li>
                        <li><a href="#">Đối tượng sử dụng</a></li>
                        <li><a href="#">Phí dịch vụ</a></li>
                        <li><a href="#">Đại lý</a></li>
                    </ul>
                </div>
                <div class="uk-navbar-right">
                    <div class="uk-navbar-item uk-visible@m">
                        <a href="" class="header__bottom__btnLogin uk-button uk-button-danger uk-border-pill">Đăng nhập</a>
                    </div>
                    <div class="uk-hidden@m">
                        <a class="uk-navbar-toggle uk-navbar-toggle-animate" uk-navbar-toggle-icon href="#"></a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">Tính năng</a></li>
                                <li><a href="#">Mô hình</a></li>
                                <li><a href="#">Đối tượng sử dụng</a></li>
                                <li><a href="#">Phí dịch vụ</a></li>
                                <li><a href="#">Đại lý</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!--/header-->