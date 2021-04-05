<?php

include '../databases/config.php';

$type = $_GET['type'];

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

<!-- Mirrored from preview.colorlib.com/theme/cozastore/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 17:46:30 GMT -->

<head>

    <script type=text/javascript>
        var newID, newPrice, newDescription, newImage;

        function popup(title, price, description, image, database, id) {

            newTitle = title;
            newPrice = price;
            newDescription = description;
            newImage = image;
            newDatabase = database;
            newId = id;

            console.log(newImage);

            document.getElementById("title").innerHTML = newTitle;
            document.getElementById("price").innerHTML = newPrice;
            document.getElementById("description").innerHTML = newDescription;
            document.getElementById('image').src = '../images/' + newImage + '.jpg';
            document.getElementById("database").value = newDatabase;
            document.getElementById("id").value = newId;
            document.getElementById("popupName").innerHTML = newTitle;

        }
    </script>

    <title>Product</title>
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

    <script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>

    <script>
        function added() {
            console.log("clicked");
            $('.js-addcart-detail').each(function() {
                $(this).on('click', function() {
                    swal("Item is added to cart!", " success ");
                });
            });
        }
    </script>

</head>

<body>

    <app-header count=<?php echo $countCart ?>></app-header>


    <div class="bg0 m-t-23 p-b-140">
        <div class="container">
            <div class="flex-w flex-sb-m p-b-52">

                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                        All Products
                    </button>
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women" id="woman">
                        Women
                    </button>
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men" id="men">
                        Men
                    </button>
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag" id="bag">
                        Bag
                    </button>
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".shoes" id="shoes">
                        Shoes
                    </button>
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".watches" id="watches">
                        Watches
                    </button>
                </div>



                <div class="flex-w flex-c-m m-tb-10">
                </div>

            </div>

            <div class="row isotope-grid">


                <?php

                $categories = array("men", "women", "watches", "bag", "shoes");
                $databases = array("men", "women", "watch", "bag", "shoe");
                $images = array("boy", "girl", "watch", "bag", "shoe");

                for ($j = 0; $j < 5; ++$j) {

                    $sql = "SELECT count(*) as count FROM $databases[$j]";
                    $result = $con->query($sql);

                    if ($result->num_rows > 0) {
                        if ($row = $result->fetch_assoc()) {
                            $count = $row['count'];
                        }
                    } else {
                        echo 'error :/2';
                    }

                    for ($i = 0; $i < $count; ++$i) {
                        $i1 = $i + 1;

                        $sql = "SELECT * FROM $databases[$j] order by id limit $i1 OFFSET $i";

                        $result = $con->query($sql);

                        if ($result->num_rows > 0) {
                            if ($row = $result->fetch_assoc()) {
                                $id = $row['id'];
                                $name = $row['name'];
                                $price = $row['price'];
                                $description = $row['description'];
                                $image = $row['image'];

                                $imageName = $images[$j] . "-" . $i;
                            }
                        } else {
                            //echo 'error :/1';
                        }
                ?>

                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?php echo $categories[$j] ?>">

                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="../images/<?php echo $images[$j] ?>-<?php echo $i ?>.jpg" alt="IMG-PRODUCT">

                                    <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1" onclick="popup(`<?php echo $name ?>`, `<?php echo $price ?>`, `<?php echo $description ?>`, `<?php echo $imageName ?>`,`<?php echo $databases[$j] ?>`,`<?php echo $id ?>`)">
                                        Quick View
                                    </a>
                                </div>
                                <div class="block2-txt flex-w flex-t p-t-14">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <a href="product-detail.php?id=<?php echo $id ?>&databases=<?php echo $databases[$j] ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            <?php echo $name ?>
                                        </a>
                                        <span class="stext-105 cl3">
                                            <?php echo $price ?> LKR
                                        </span>
                                    </div>
                                    <div class="block2-txt-child2 flex-r p-t-3">
                                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php
                    }
                }
                ?>

            </div>

        </div>

        <app-footer></app-footer>

        <div class="btn-back-to-top" id="myBtn">
            <span class="symbol-btn-back-to-top">
                <i class="zmdi zmdi-chevron-up"></i>
            </span>
        </div>

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
                                    <div class="slick3">
                                        <div class="wrap-pic-w pos-relative">
                                            <img id="image" alt="IMG-PRODUCT">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 p-b-30">
                            <div class="p-r-50 p-t-5 p-lr-0-lg">

                                <h4 id="title" class="mtext-105 cl2 js-name-detail p-b-14">
                                </h4>
                                <span id="price" class="mtext-106 cl2">
                                </span>
                                <b>LKR</b>
                                <p id="description" class="stext-102 cl3 p-t-23">
                                </p>

                                <form method="POST" action="../databases/add-to-cart.php" id='myform'>

                                    <input name="id" id="id" type="text" hidden>
                                    <input name="database" id="database" type="text" hidden>

                                    <div class="p-t-33">
                                        <div class="flex-w flex-r-m p-b-10">
                                            <div class="size-203 flex-c-m respon6">
                                                Size
                                            </div>
                                            <div class="size-204 respon6-next">
                                                <div class="rs1-select2 bor8 bg0">
                                                    <select class="js-select2" name="size">
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
                                                    <select class="js-select2" name="color">
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
                                                    <input class="mtext-104 cl3 txt-center num-product" type="number" name="quantity" value="1">
                                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                                    </div>
                                                </div>
                                                <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail" id='insert' onclick=added()>
                                                    Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>


                                </form>

                                <script src='../js/add-to-cart.js'></script>

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
            $('.js-addwish-b2, .js-addwish-detail').on('click', function(e) {
                e.preventDefault();
            });



            $('.js-addwish-detail').each(function() {
                var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

                $(this).on('click', function() {
                    swal(nameProduct, "is added to wishlist !", "success");

                    $(this).addClass('js-addedwish-detail');
                    $(this).off('click');
                });
            });

            /*---------------------------------------------*/
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

        <script src="components/components.js"></script>

        <script>
            window.onload = function() {

                $("#<?php echo $type ?>").click();

                console.log("clicked");
                $('.js-addcart-detail').each(function() {
                    $(this).on('click', function() {
                        swal("Item is added to cart!", " success ");
                    });
                });

            }
        </script>

</body>

<!-- Mirrored from preview.colorlib.com/theme/cozastore/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 17:46:30 GMT -->

</html>