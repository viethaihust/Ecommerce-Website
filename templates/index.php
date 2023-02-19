<?php

include('functions.php');

@include 'config.php';

header("Cache-Control: no cache");
session_start();

$query = "UPDATE viewcount SET count = count + 1 WHERE id = 1;";
mysqli_query($conn, $query);

?>

    <?php
        include_once('../include/header.php');
        include_once('../include/site-header.php');
        include_once('../include/hero.php');
        include_once('../include/banner.php');
        include_once('../include/best-sellers.php');
        include_once('../include/coupon.php');
        include_once('../include/product-section.php');
        include_once('../include/banner-2.php');
        include_once('../include/trending-product-section.php');
        include_once('../include/product-category-menu.php');
        include_once('../include/brand.php');
        include_once('../include/site-footer.php');
        include_once('../include/footer.php');
    ?>