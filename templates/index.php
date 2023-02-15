<?php

ob_start();
include('../functions.php');

shuffle($product_shuffle);

@include 'config.php';

header("Cache-Control: no cache");
session_start();
if(!isset($_SESSION['user_id'])){
    header('location:login_form.php');
}
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
    ?>

    <script src="https://code.iconify.design/2/2.1.1/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>

    <script src="../js/app.js"></script>
    <script src="../js/cart.js"></script>