<?php

include 'config.php';

$sql = "delete from cart";

if (mysqli_query($con, $sql)) {
    echo 'success';
} else {
    echo 'something went wrong buddy :|';
}

header('Location:../pages/shoping-cart.php');
