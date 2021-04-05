<?php

include '../databases/config.php';

$sql = "SELECT count(*) as countCart FROM cart";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    if ($row = $result->fetch_assoc()) {
        $countCart = $row['countCart'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/cozastore/home-03.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 17:46:25 GMT -->

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="../images/icons/favicon.png" />

    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="../fonts/linearicons-v1.0.0/icon-font.min.css">

    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="../vendor/slick/slick.css">

    <link rel="stylesheet" type="text/css" href="../vendor/MagnificPopup/magnific-popup.css">

    <link rel="stylesheet" type="text/css" href="../vendor/perfect-scrollbar/perfect-scrollbar.css">

    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">

</head>

<body class="animsition">

    <header class="header-v3">

        <div class="container-menu-desktop trans-03">
            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop p-l-45">

                    <a href="#" class="logo">
                        <img src="../images/icons/logo-02.png" alt="IMG-LOGO">
                    </a>

                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li>
                                <a href="product.php?type=all">Shop</a>

                            </li>
                            <li>
                                <a href="about.php">About</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="wrap-icon-header flex-w flex-r-m h-full">
                        <div class="flex-c-m h-full p-r-25 bor6">
                            <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify=<?php echo $countCart ?>>
                                <a class="zmdi zmdi-shopping-cart" href="shoping-cart.php" style="color:white"></a>
                            </div>
                        </div>
                    </div>

                </nav>
            </div>
        </div>

        <div class="wrap-header-mobile">

            <div class="logo-mobile">
                <a href="index.php"><img src="../images/icons/logo-01.png" alt="IMG-LOGO"></a>
            </div>

            <div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
                <div class="flex-c-m h-full p-r-5">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify=<?php echo $countCart ?>>
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </div>
            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>

        <div class="menu-mobile">
            <ul class="main-menu-m">
                <li>
                    <a href="product.php">Shop</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>

    </header>

    <section class="section-slide">
        <div class="wrap-slick1 rs2-slick1">
            <div class="slick1">

                <div class="item-slick1 bg-overlay1" style="background-image: url(../images/slide-07.jpg);" data-thumb="../images/thumb-03.jpg" data-caption="Men’s Wear">
                    <div class="container h-full">
                        <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
                            <span class="ltext-202 txt-center cl0 respon2">
                                Men Collection
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                            </span>
                            <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                                NEW SEASON
                            </h2>
                            <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1000">
                                <a href="product.php?type=all" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 bg-overlay1" style="background-image: url(../images/slide-05.jpg);" data-thumb="../images/thumb-01.jpg" data-caption="Women’s Wear">
                    <div class="container h-full">
                        <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
                            <span class="ltext-202 txt-center cl0 respon2">
                                Women Collection
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                            </span>
                            <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                                New arrivals
                            </h2>
                            <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="0">
                                <a href="product.php?type=all" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 bg-overlay1" style="background-image: url(../images/slide-06.jpg);" data-thumb="../images/thumb-02.jpg" data-caption="Men’s Wear">
                    <div class="container h-full">
                        <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
                            <span class="ltext-202 txt-center cl0 respon2">
                                Men New-Season
                            </span>
                            <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                                Jackets & Coats
                            </h2>
                            <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="0">
                                <a href="product.php?type=all" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="wrap-slick1-dots p-lr-10"></div>
        </div>
    </section>

    <div class="sec-banner bg0 p-t-95 p-b-55">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-b-30 m-lr-auto">

                    <div class="block1 wrap-pic-w">
                        <img src="../images/banner-04.jpg" alt="IMG-BANNER">
                        <a href="product.php?type=woman" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">

                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Women
                                </span>
                                <span class="block1-info stext-102 trans-04">
                                    New Trend
                                </span>
                            </div>
                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Shop Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 p-b-30 m-lr-auto">

                    <div class="block1 wrap-pic-w">
                        <img src="../images/banner-05.jpg" alt="IMG-BANNER">
                        <a href="product.php?type=men" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">

                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Men
                                </span>
                                <span class="block1-info stext-102 trans-04">
                                    New Trend
                                </span>
                            </div>
                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Shop Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">

                    <div class="block1 wrap-pic-w">
                        <img src="../images/banner-07.jpg" alt="IMG-BANNER">
                        <a href="product.php?type=watches" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">

                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Watches
                                </span>
                                <span class="block1-info stext-102 trans-04">
                                    Spring
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                </span>
                            </div>
                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Shop Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">

                    <div class="block1 wrap-pic-w">
                        <img src="../images/banner-08.jpg" alt="IMG-BANNER">
                        <a href="product.php?type=bag" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">

                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Bags
                                </span>
                                <span class="block1-info stext-102 trans-04">
                                    Spring
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                </span>
                            </div>
                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Shop Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">

                    <div class="block1 wrap-pic-w">
                        <img src="../images/banner-09.jpg" alt="IMG-BANNER">
                        <a href="product.php?type=shoes" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">

                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Shoes
                                </span>
                                <span class="block1-info stext-102 trans-04">
                                    Spring
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                </span>
                            </div>
                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Shop Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--
        <section class="bg0 p-t-23 p-b-130" style="background-color: rgba(138, 138, 138, 0.137);">

            <br><br>

            <div class="container">

                <div class="p-b-10">
                    <h3 class="ltext-103 cl5">
                        <center>
                            Product Overview
                        </center>
                    </h3>
                </div>

                <div class="flex-w flex-sb-m p-b-52"></div>

                <div class="row isotope-grid">

                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">

                        <div class="block2">
                            <div class="block2-pic hov-img0 label-new" data-label="New">
                                <img src="../images/product-01.jpg" alt="IMG-PRODUCT">
                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
                                </a>
                            </div>
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Esprit Ruffle Shirt
                                    </a>
                                    <span class="stext-105 cl3">
                                        $16.64
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">

                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="../images/product-02.jpg" alt="IMG-PRODUCT">
                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
                                </a>
                            </div>
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Herschel supply
                                    </a>
                                    <span class="stext-105 cl3">
                                        $35.31
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">

                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="../images/product-03.jpg" alt="IMG-PRODUCT">
                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
                                </a>
                            </div>
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Only Check Trouser
                                    </a>
                                    <span class="stext-105 cl3">
                                        $25.50
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">

                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="../images/product-04.jpg" alt="IMG-PRODUCT">
                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
                                </a>
                            </div>
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Classic Trench Coat
                                    </a>
                                    <span class="stext-105 cl3">
                                        $75.00
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">

                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="../images/product-05.jpg" alt="IMG-PRODUCT">
                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
                                </a>
                            </div>
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Front Pocket Jumper
                                    </a>
                                    <span class="stext-105 cl3">
                                        $34.75
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">

                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="../images/product-06.jpg" alt="IMG-PRODUCT">
                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
                                </a>
                            </div>
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Vintage Inspired Classic
                                    </a>
                                    <span class="stext-105 cl3">
                                        $93.20
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">

                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="../images/product-07.jpg" alt="IMG-PRODUCT">
                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
                                </a>
                            </div>
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Shirt in Stretch Cotton
                                    </a>
                                    <span class="stext-105 cl3">
                                        $52.66
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">

                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="../images/product-08.jpg" alt="IMG-PRODUCT">
                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
                                </a>
                            </div>
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Pieces Metallic Printed
                                    </a>
                                    <span class="stext-105 cl3">
                                        $18.96
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item shoes">

                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="../images/product-09.jpg" alt="IMG-PRODUCT">
                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
                                </a>
                            </div>
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Converse All Star Hi Plimsolls
                                    </a>
                                    <span class="stext-105 cl3">
                                        $75.00
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">

                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="../images/product-10.jpg" alt="IMG-PRODUCT">
                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
                                </a>
                            </div>
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Femme T-Shirt In Stripe
                                    </a>
                                    <span class="stext-105 cl3">
                                        $25.85
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">

                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="../images/product-11.jpg" alt="IMG-PRODUCT">
                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
                                </a>
                            </div>
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Herschel supply
                                    </a>
                                    <span class="stext-105 cl3">
                                        $63.16
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">

                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="../images/product-12.jpg" alt="IMG-PRODUCT">
                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
                                </a>
                            </div>
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Herschel supply
                                    </a>
                                    <span class="stext-105 cl3">
                                        $63.15
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">

                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="../images/product-13.jpg" alt="IMG-PRODUCT">
                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
                                </a>
                            </div>
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        T-Shirt with Sleeve
                                    </a>
                                    <span class="stext-105 cl3">
                                        $18.49
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">

                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="../images/product-14.jpg" alt="IMG-PRODUCT">
                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
                                </a>
                            </div>
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Pretty Little Thing
                                    </a>
                                    <span class="stext-105 cl3">
                                        $54.79
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">

                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="../images/product-15.jpg" alt="IMG-PRODUCT">
                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
                                </a>
                            </div>
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Mini Silver Mesh Watch
                                    </a>
                                    <span class="stext-105 cl3">
                                        $86.85
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">

                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="../images/product-16.jpg" alt="IMG-PRODUCT">
                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
                                </a>
                            </div>
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Square Neck Back
                                    </a>
                                    <span class="stext-105 cl3">
                                        $29.64
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </section>
    -->

    <center>
        <footer class="bg3 p-t-75 p-b-32">
            <div class="container">
                <div class="row flex-c-m">
                    <div class="col-sm-6 col-lg-3 p-b-50 ">
                        <h4 class="stext-301 cl0 p-b-30">
                            Categories
                        </h4>
                        <ul>
                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Women
                                </a>
                            </li>
                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Men
                                </a>
                            </li>
                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Shoes
                                </a>
                            </li>
                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Watches
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3 p-b-50">
                        <h4 class="stext-301 cl0 p-b-30">
                            Help
                        </h4>
                        <ul>
                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    About
                                </a>
                            </li>
                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Contact
                                </a>
                            </li>
                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    History
                                </a>
                            </li>
                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    FAQs
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3 p-b-50">
                        <h4 class="stext-301 cl0 p-b-30">
                            GET IN TOUCH
                        </h4>
                        <p class="stext-107 cl7 size-201">
                            Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call
                            us
                            on (+1) 96 716 6879
                        </p>
                        <div class="p-t-27">
                            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-pinterest-p"></i>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="p-t-40">
                    <p class="stext-107 cl6 txt-center">

                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | COZA STORE
                    </p>
                </div>
            </div>
        </footer>
    </center>

    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>

    <!--quick iew tharaka-->
    <div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
        <div class="overlay-modal1 js-hide-modal1"></div>
        <div class="container">
            <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
                <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                    <img src="../images/icons/icon-close.png" alt="CLOSE">
                </button>
                <div class="row">
                    <div class="col-md-6 col-lg-7 p-b-30">
                        <div class="p-l-25 p-r-30 p-lr-0-lg">
                            <div class="wrap-slick3 flex-sb flex-w">
                                <div class="wrap-slick3-dots"></div>
                                <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                                <div class="slick3 gallery-lb">
                                    <div class="item-slick3" data-thumb="../images/product-detail-01.jpg">
                                        <div class="wrap-pic-w pos-relative">
                                            <img src="../images/product-detail-01.jpg" alt="IMG-PRODUCT">
                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="../images/product-detail-01.jpg">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-slick3" data-thumb="../images/product-detail-02.jpg">
                                        <div class="wrap-pic-w pos-relative">
                                            <img src="../images/product-detail-02.jpg" alt="IMG-PRODUCT">
                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="../images/product-detail-02.jpg">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-slick3" data-thumb="../images/product-detail-03.jpg">
                                        <div class="wrap-pic-w pos-relative">
                                            <img src="../images/product-detail-03.jpg" alt="IMG-PRODUCT">
                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="../images/product-detail-03.jpg">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 p-b-30">
                        <div class="p-r-50 p-t-5 p-lr-0-lg">
                            <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                                Lightweight Jacket
                            </h4>
                            <span class="mtext-106 cl2">
                                $58.79
                            </span>
                            <p class="stext-102 cl3 p-t-23">
                                Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat
                                ornare feugiat.
                            </p>

                            <div class="p-t-33">
                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="size-203 flex-c-m respon6">
                                        Size
                                    </div>
                                    <div class="size-204 respon6-next">
                                        <div class="rs1-select2 bor8 bg0">
                                            <select class="js-select2" name="time">
                                                <option>Choose an option</option>
                                                <option>Size S</option>
                                                <option>Size M</option>
                                                <option>Size L</option>
                                                <option>Size XL</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="size-203 flex-c-m respon6">
                                        Color
                                    </div>
                                    <div class="size-204 respon6-next">
                                        <div class="rs1-select2 bor8 bg0">
                                            <select class="js-select2" name="time">
                                                <option>Choose an option</option>
                                                <option>Red</option>
                                                <option>Blue</option>
                                                <option>White</option>
                                                <option>Grey</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="size-204 flex-w flex-m respon6-next">
                                        <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>
                                            <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">
                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                        </div>
                                        <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                            Add to cart
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                                <div class="flex-m bor9 p-r-10 m-r-11">
                                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                                        <i class="zmdi zmdi-favorite"></i>
                                    </a>
                                </div>
                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="../vendor/animsition/js/animsition.min.js"></script>

    <script src="../vendor/bootstrap/js/popper.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="../vendor/select2/select2.min.js"></script>

    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>

    <script src="../vendor/daterangepicker/moment.min.js"></script>
    <script src="../vendor/daterangepicker/daterangepicker.js"></script>

    <script src="../vendor/slick/slick.min.js"></script>
    <script src="../js/slick-custom.js"></script>

    <script src="../vendor/parallax100/parallax100.js"></script>

    <script>
        $('.parallax100').parallax100();
    </script>

    <script src="../vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>

    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled: true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>

    <script src="../vendor/isotope/isotope.pkgd.min.js"></script>

    <script src="../vendor/sweetalert/sweetalert.min.js"></script>
    <script>
        $('.js-addwish-b2').on('click', function(e) {
            e.preventDefault();
        });

        $('.js-addwish-b2').each(function() {
            var nameProduct = $(this).parent().parent().find('.js-name-b2').php();
            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-b2');
                $(this).off('click');
            });
        });

        $('.js-addwish-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').php();

            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-detail');
                $(this).off('click');
            });
        });

        /*---------------------------------------------*/

        $('.js-addcart-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').php();
            $(this).on('click', function() {
                swal(nameProduct, "is added to cart !", "success");
            });
        });
    </script>

    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function() {
            $(this).css('position', 'relative');
            $(this).css('overflow', 'hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function() {
                ps.update();
            })
        });
    </script>

    <script src="../js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"si":10,"rayId":"6262c5689b7ee924","version":"2021.2.0"}'></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/cozastore/home-03.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 17:46:30 GMT -->

</html>