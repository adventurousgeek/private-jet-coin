<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>PrivateJetCoin</title>
    <style>
        <?php
            $css = file_get_contents('style.css');
            echo $css;
        ?>
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="./slick.css">
    <link rel="stylesheet" href="./slick-theme.css">
    
</head>
<body>
<?php require_once "svg-icons.php"; ?>

<header class="site-header hide">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-default">
                    <a href="#"><img src="assets/images/logo-header.png" class="mobile-logo"></a>
                    <div class="container-fluid">
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
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="float-left"><button type="submit" class="btn btn-primary button">Legal</button></li>
                                <li class="float-left menu-social-icon"><a href="#"><svg class="icon icon-twitter"><use xlink:href="#icon-twitter"></use></svg></a></li>
                                <li class="float-left menu-social-icon"><a href="#"><svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg></a></li>
                                <li class="float-left menu-social-icon"><a href="#"><svg class="icon icon-linkedin2"><use xlink:href="#icon-linkedin2"></use></svg></a></li>
                                <li class="float-left menu-social-icon"><a href="#"><svg class="icon icon-envelop"><use xlink:href="#icon-envelop"></use></svg></a></li>
                                <li class="float-left menu-social-icon"><a href="#"><svg class="icon icon-bitcoin"><use xlink:href="#icon-bitcoin"></use></svg></a></li>
                                <li class="float-left menu-social-icon"><a href="#"><svg class="icon icon-reddit"><use xlink:href="#icon-reddit"></use></svg></a></li>
                                <li class="logo-header menu-social-icon"><a href="#"><img src="assets/images/logo-header.png"></a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="float-right"><button type="submit" class="btn btn-primary button">Whitepaper</button></li>
                                <li class="float-right"><button type="submit" class="btn btn-primary button">Contact</button></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </div>
</header>
