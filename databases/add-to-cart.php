<?php

include 'config.php';

$product_id = $_POST['id'];
$database = $_POST['database'];
$size = $_POST['size'];
$color = $_POST['color'];
$quantity = $_POST['quantity'];

$sql = "insert into cart (product_id, databaseName, size, color, quantity) values ('$product_id','$database','$size','$color','$quantity')";

if (mysqli_query($con, $sql)) {
    echo 'success';
} else {
    echo 'something went wrong buddy :|';
}
