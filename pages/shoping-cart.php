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

<!-- Mirrored from preview.colorlib.com/theme/cozastore/shoping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 17:46:30 GMT -->

<head>
    <title>Shoping Cart</title>
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

    <link rel="stylesheet" type="text/css" href="../vendor/perfect-scrollbar/perfect-scrollbar.css">

    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">

</head>

<body class="animsition">

    <app-header count=<?php echo $countCart ?>></app-header>


    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>
            <span class="stext-109 cl4">
                Shoping Cart
            </span>
        </div>
    </div>

    <form class="bg0 p-t-75 p-b-85" method="POST" action="../databases/clear-cart.php" id='myform'>

        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Product</th>
                                    <th class="column-2"></th>
                                    <th class="column-3">Price</th>
                                    <th class="column-4">Quantity</th>
                                    <th class="column-5">Total</th>
                                </tr>

                                <?php

                                $total = 0;

                                for ($i = 0; $i < $countCart; ++$i) {

                                    $i1 = $i + 1;

                                    $sql = "SELECT * FROM cart order by id limit $i1 OFFSET $i";

                                    $result = $con->query($sql);

                                    if ($result->num_rows > 0) {
                                        if ($row = $result->fetch_assoc()) {
                                            $product_id = $row['product_id'];
                                            $databaseName = $row['databaseName'];
                                            $size = $row['size'];
                                            $color = $row['color'];
                                            $quantity = $row['quantity'];
                                        }
                                    } else {
                                        //echo 'error :/1';
                                    }

                                    $product_id2 = $product_id - 1;

                                    $sql2 = "SELECT * FROM $databaseName WHERE id = $product_id";

                                    $result = $con->query($sql2);

                                    if ($result->num_rows > 0) {
                                        if ($row = $result->fetch_assoc()) {
                                            $name = $row['name'];
                                            $price = $row['price'];
                                        }
                                    } else {
                                        //echo 'error :/1';
                                    }

                                    switch ($databaseName) {
                                        case 'men':
                                            $databaseName = 'boy';
                                            break;
                                        case 'women':
                                            $databaseName = 'girl';
                                            break;
                                    }

                                    $imageName = $databaseName . "-" . $product_id2;

                                    $total = $total + ($price * $quantity);

                                ?>

                                    <tr class="table_row">

                                        <td class="column-1">

                                            <div class="how-itemcart1">
                                                <img src="../images/<?php echo $imageName ?>.jpg" alt="IMG">
                                            </div>

                                        </td>

                                        <td class="column-2">
                                            <?php echo $name ?>
                                        </td>

                                        <td class="column-3"><?php echo $price ?> LKR</td>

                                        <td class="column-4" style="text-align: center;"><?php echo $quantity ?></td>

                                        <td class="column-5"><?php echo $price * $quantity ?> LKR</td>

                                    </tr>

                                <?php
                                }
                                ?>
                                <!--
                                <tr class="table_row">

                                    <td class="column-1">

                                        <div class="how-itemcart1">
                                            <img src="../images/item-cart-04.jpg" alt="IMG">
                                        </div>

                                    </td>

                                    <td class="column-2">Fresh Strawberries</td>
                                    <td class="column-3">$ 36.00</td>

                                    <td class="column-4">

                                        <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>
                                            <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="1">
                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                        </div>

                                    </td>

                                    <td class="column-5">$ 36.00</td>

                                </tr>
-->
                            </table>

                        </div>

                    </div>
                </div>
                <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                        <h4 class="mtext-109 cl2 p-b-30">
                            Cart Totals
                        </h4>
                        <div class="flex-w flex-t bor12 p-b-13">
                            <div class="size-208">
                                <span class="stext-110 cl2">
                                    Subtotal:
                                </span>
                            </div>
                            <div class="size-209">
                                <span class="mtext-110 cl2">
                                    <?php echo $total ?> LKR
                                </span>
                            </div>
                        </div>
                        <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                            <div class="size-208 w-full-ssm">
                                <span class="stext-110 cl2">
                                    Shipping:
                                </span>
                            </div>
                            <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                                <p class="stext-111 cl6 p-t-2">
                                    Select your shipping address
                                </p>
                                <div class="p-t-15">

                                    <div class="bor8 bg0 m-b-12">
                                        <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state" placeholder="Your address here">
                                    </div>

                                    <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                        <select class="js-select2" name="time">
                                            <option>Select a District</option>
                                            <option>Kurunegala</option>
                                            <option>Kandy</option>
                                            <option>Colombo</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="flex-w flex-t p-t-27 p-b-33">
                            <div class="size-208">
                                <span class="mtext-101 cl2">
                                    Total:
                                </span>
                            </div>
                            <div class="size-209 p-t-1">
                                <span class="mtext-110 cl2">
                                    <?php echo $total ?> LKR
                                </span>
                            </div>
                        </div>

                        <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" style="background-color: #6293D4;">
                            Proceed to Checkout
                        </button>

                        <br>

                        <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" style="background-color: #D04B2C;">
                            Clear cart
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </form>

    <app-footer></app-footer>

    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
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
        });
    </script>

    <script src="../vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>

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

    <script src="components/components.js"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/cozastore/shoping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 17:46:30 GMT -->

</html>