<?php

//fetch_data.php
ob_start();
include('../functions.php');

shuffle($product_shuffle);

// request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['cart_submit'])){
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['product_id']
        , $_POST['session_id'], $_POST['quantity']);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elextra - Điện thoại, laptop, tablet, phụ kiện chính hãng</title>
    <link rel="icon" href="../assets/cropped-logo-dark-32x32.png"
        sizes="32x32">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/Homepage/main.css" />
    <link rel="stylesheet" href="../css/Homepage/header.css" />
    <link rel="stylesheet" href="../css/Homepage/footer.css" />
    <link rel="stylesheet" href="../css/Homepage/hero.css">
    <link rel="stylesheet" href="../css/Homepage/best-seller.css">
    <link rel="stylesheet" href="../css/Homepage/special-offer.css">
    <link rel="stylesheet" href="../css/Homepage/trending-product.css">
</head>

<body>
    <header class="site-header">
        <!-- Header Top -->
        <div class="header-top">
            <div class="container">
                <div class="header-wrapper">
                    <nav class="column align-center left">
                        <ul class="menu horizontal">
                            <li class="menu-item"><a href="#">Về chúng tôi</a></li>
                            <li class="menu-item"><a href="#">Tài khoản</a></li>
                            <li class="menu-item"><a href="#">Sản phẩm nổi bật</a></li>
                            <li class="menu-item"><a href="#">Yêu thích</a></li>
                        </ul>
                    </nav>
                    <nav class="column align-center right">
                        <ul class="menu horizontal">
                            <li class="menu-item"><a href="#">Tiếng Việt</a></li>
                            <li class="menu-item"><a href="#">VNĐ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Main -->
        <div class="header-main">
            <div class="container">
                <div class="header-wrapper">
                    <div class="column left">
                        <div class="site-brand">
                            <a href="index.php">
                                <img src="../assets/logo.png"
                                    alt="Elextra" />
                            </a>
                        </div>
                    </div>
                    <div class="column right">
                        <div class="search-form">
                            <form action="">
                                <label for="product" class="icon-wrapper">
                                    <span class="iconify" data-icon="carbon:search" style="cursor: default;"></span>
                                </label>
                                <input type="search" id="product" name="product" placeholder="Tìm kiếm sản phẩm..."
                                    autocomplete="off" />
                                <button type="" class="search-submit">Search</button>
                            </form>
                        </div>
                        <div class="header-addons login-button">
                            <a href="Account/account_Password_Change.html">
                                <div class="header-addons-icon">
                                    <div class="icon-wrapper">
                                        <span class="iconify" data-icon="carbon:user"></span>
                                    </div>
                                </div>
                                <div class="header-addons-text">
                                    <div class="sub-text">Đăng nhập</div>
                                    <div class="primary-text">Tài khoản</div>
                                </div>
                            </a>
                        </div>
                        <div class="header-addons wishlist-button">
                            <div class="header-addons-icon">
                                <a href="#" class="icon-wrapper">
                                    <span class="iconify" data-icon="carbon:favorite"></span>
                                </a>
                                <a href="#" class="button-count">
                                    5
                                </a>
                            </div>
                        </div>
                        <div class="header-addons cart-button">
                            <div class="header-addons-icon">
                                <a href="cartVN.php" class="icon-wrapper">
                                    <span class="iconify" data-icon="carbon:shopping-cart"></span>
                                </a>
                                <a href="cartVN.php" class="button-count">
                                    3
                                </a>
                            </div>
                            <a href="cartVN.php">
                                <div class="header-addons-text">
                                    <div class="sub-text">Giỏ hàng</div>
                                    <div class="primary-text">2.530.000đ</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Main -->

        <!-- Header Nav -->
        <div class="header-nav">
            <div class="container">
                <div class="header-wrapper">
                    <div class="column align-center left">
                        <div class="category">
                            <a href="##" class="category-all">
                                <div class="category-icon icon-wrapper">
                                    <span class="iconify" data-icon="carbon:menu"></span>
                                </div>
                                <div class="category-text">Danh mục sản phẩm</div>
                                <div class="category-arrow icon-wrapper">
                                    <span class="iconify" data-icon="carbon:chevron-down"></span>
                                </div>
                            </a>
                            <!-- <ul class="category-menu show"> -->
                            <ul class="category-menu">
                                <li class="menu-item">
                                    <a href="product.php">
                                        <div class="category-icon icon-wrapper">
                                            <span class="iconify" data-icon="carbon:mobile"></span>
                                        </div>
                                        <div class="category-text">Điện thoại</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">
                                        <div class="category-icon icon-wrapper">
                                            <span class="iconify" data-icon="carbon:laptop"></span>
                                        </div>
                                        <div class="category-text">Laptop</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">
                                        <div class="category-icon icon-wrapper">
                                            <span class="iconify" data-icon="carbon:tablet"></span>
                                        </div>
                                        <div class="category-text">Tablet</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">
                                        <div class="category-icon icon-wrapper">
                                            <span class="iconify" data-icon="carbon:screen"></span>
                                        </div>
                                        <div class="category-text">PC & Linh kiện</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">
                                        <div class="category-icon icon-wrapper">
                                            <span class="iconify" data-icon="carbon:headset"></span>
                                        </div>
                                        <div class="category-text">Âm thanh</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">
                                        <div class="category-icon icon-wrapper">
                                            <span class="iconify" data-icon="carbon:watch"></span>
                                        </div>
                                        <div class="category-text">Đồng hồ</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">
                                        <div class="category-icon icon-wrapper">
                                            <span class="iconify" data-icon="carbon:battery-charging"></span>
                                        </div>
                                        <div class="category-text">Phụ kiện</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">
                                        <div class="category-icon icon-wrapper">
                                            <span class="iconify" data-icon="carbon:home"></span>
                                        </div>
                                        <div class="category-text">Nhà thông minh</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">
                                        <div class="category-icon icon-wrapper">
                                            <span class="iconify" data-icon="carbon:forecast-lightning"></span>
                                        </div>
                                        <div class="category-text">Hàng cũ</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">
                                        <div class="category-icon icon-wrapper">
                                            <span class="iconify" data-icon="carbon:percentage"></span>
                                        </div>
                                        <div class="category-text">Khuyến mãi</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">
                                        <div class="category-icon icon-wrapper">
                                            <span class="iconify" data-icon="carbon:notification-new"></span>
                                        </div>
                                        <div class="category-text">Tin công nghệ</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <nav class="category-nav">
                            <ul class="menu horizontal">
                                <li class="menu-item current-menu-item">
                                    <a href="product.php">
                                        <div class="icon-wrapper">
                                            <span class="iconify" data-icon="carbon:mobile"></span>
                                        </div>
                                        <span>Điện thoại</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">
                                        <div class="icon-wrapper">
                                            <span class="iconify" data-icon="ant-design:apple-outlined"></span>
                                        </div>
                                        <span>Apple</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">
                                        <div class="icon-wrapper">
                                            <span class="iconify" data-icon="carbon:headset"></span>
                                        </div>
                                        <span>Âm thanh</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">
                                        <div class="icon-wrapper">
                                            <span class="iconify" data-icon="carbon:notification-new"></span>
                                        </div>
                                        <span>Tin Công nghệ</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">
                                        <div class="icon-wrapper">
                                            <span class="iconify" data-icon="carbon:phone"></span>
                                        </div>
                                        <span>Liên hệ</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="column align-center right">
                        <div class="discount-banner">
                            <div class="discount-banner-icon icon-wrapper">
                                <span class="iconify" data-icon="teenyicons:discount-solid"></span>
                            </div>
                            <div class="discount-banner-text">
                                <div class="small-text">Chỉ trong tuần này</div>
                                <div class="main-text">Siêu khuyến mãi</div>
                            </div>
                            <div class="discount-banner-arrow icon-wrapper">
                                <span class="iconify" data-icon="carbon:chevron-down"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Nav -->
    </header>

    <!--Hero Section-->
    <section class="hero">
        <div class="slider">
            <div class="slide active">
                <img src="../assets/slide_1.png" alt="">
                <div class="container">
                    <div class="info">
                        <div class="box-discount">
                            <span id="text-discount">GIẢM GIÁ CUỐI TUẦN</span>
                        </div>
                        <p id="small-textslide">Nhanh chóng, tiện lợi</p>
                        <p id="bold-textslide">Mua sắm với phong cách</p>
                        <p id="callforup">Giảm giá lên đến <span class="percent-red">%20</span> tất cả mặt hàng</p>
                        <button class="shopnow">Mua Ngay</button>
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="../assets/slide_2.png" alt="">
                <div class="container">
                    <div class="info">
                        <div class="box-discount">
                            <span id="text-discount">GIẢM GIÁ CUỐI TUẦN</span>
                        </div>
                        <p id="small-textslide">Đơn giản, linh hoạt</p>
                        <p id="bold-textslide">Tiết kiệm thời gian</p>
                        <p id="callforup">Giảm giá lên đến <span class="percent-red">%20</span> tất cả mặt hàng</p>
                        <button class="shopnow">Mua Ngay</button>
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="../assets/slide_3.png" alt="">
                <div class="container">
                    <div class="info">
                        <div class="box-discount">
                            <span id="text-discount">GIẢM GIÁ CUỐI TUẦN</span>
                        </div>
                        <p id="small-textslide">Thoải mái lựa chọn</p>
                        <p id="bold-textslide">Tất cả những gì bạn thích</p>
                        <p id="callforup">Giảm giá lên đến <span class="percent-red">%20</span> tất cả mặt hàng</p>
                        <button class="shopnow">Mua Ngay</button>
                    </div>
                </div>
            </div>
            <div class="navigation">
                <i class="fas fa-chevron-left prev-btn"></i>
                <i class="fas fa-chevron-right next-btn"></i>
            </div>
            <div class="navigation-visibility">
                <button class="slide-icon btn-sm active"></button>
                <button class="slide-icon btn-sm"></button>
                <button class="slide-icon btn-sm"></button>
            </div>
        </div>
        <div class="container ad-section">
            <div class="row mt-lg-4 ad">
                <div class="col">
                    <div class="header-addons">
                        <div class="icon">
                            <img src="../assets/icons/shipment.png">
                        </div>
                        <div class="header-addons-text">
                            <div class="primary-text" id="primary-text-below">Giao hàng miễn phí</div>
                            <div class="sub-text" id="sub-text-below">Giao hàng miễn phí cho tất cả đơn hàng</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="header-addons">
                        <div class="icon">
                            <img src="../assets/icons/operator.png">
                        </div>
                        <div class="header-addons-text">
                            <div class="primary-text" id="primary-text-below">Hỗ trợ trực tuyến</div>
                            <div class="sub-text" id="sub-text-below">Hỗ trợ 24h cho tất cả các ngày trong tuần</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="header-addons">
                        <div class="icon">
                            <img src="../assets/icons/credit-card.png">
                        </div>
                        <div class="header-addons-text">
                            <div class="primary-text" id="primary-text-below">Hoàn tiền</div>
                            <div class="sub-text" id="sub-text-below">Cam kết hoàn tiền trong vòng 7 ngày kể từ ngày sử dụng</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="header-addons">
                        <div class="icon">
                            <img src="../assets/icons/discounts.png">
                        </div>
                        <div class="header-addons-text">
                            <div class="primary-text" id="primary-text-below">Giảm giá cho thành viên</div>
                            <div class="sub-text" id="sub-text-below">Giảm 10% cho đơn hàng từ 10 triệu trở lên</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->
    
    <!-- Start BANNER -->
    <div class="container shop-banner">
        <div class="row mt-lg-4 shop-banner-bottom">
            <div class="col-lg-4">
                <div class="banner-bottom">
                    <div class="banner-content">
                        <p class="banner-description">
                            Ưu đãi cực lớn
                        </p>
                        <h3 class="banner-title">Galaxy Note 20 Ultra 5G</h3>
                        <div class="banner-content-price">
                            <p>Giá cuối</p>
                            <span class="price">
                                <ins>20.500.000đ</ins>
                                <del>32.900.000đ</del>
                            </span>
                        </div>
                    </div>
                    <div class="banner-image">
                        <img src="../assets/banner-31.png"
                            alt="Ưu đãi khủng">
                    </div>
                    <a href="#" class="overlay-link"></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="banner-bottom">
                    <div class="banner-content">
                        <p class="banner-description">
                            Ưu đãi cực lớn
                        </p>
                        <h3 class="banner-title">Galaxy Note 20 Ultra 5G</h3>
                        <div class="banner-content-price">
                            <p>Giá cuối</p>
                            <span class="price">
                                <ins>20.500.000đ</ins>
                                <del>32.900.000đ</del>
                            </span>
                        </div>
                    </div>
                    <div class="banner-image">
                        <img src="../assets/banner-32.png"
                            alt="Ưu đãi khủng">
                    </div>
                    <a href="#" class="overlay-link"></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="banner-bottom">
                    <div class="banner-content">
                        <p class="banner-description">
                            Ưu đãi cực lớn
                        </p>
                        <h3 class="banner-title">Galaxy Note 20 Ultra 5G</h3>
                        <div class="banner-content-price">
                            <p>Giá cuối</p>
                            <span class="price">
                                <ins>20.500.000đ</ins>
                                <del>32.900.000đ</del>
                            </span>
                        </div>
                    </div>
                    <div class="banner-image">
                        <img src="../assets/banner-33.png"
                            alt="Ưu đãi khủng">
                    </div>
                    <a href="#" class="overlay-link"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End BANNER -->

    <!-- Best Sellers -->
    <div class="best-sellers">
        <div class="container">
            <div class="best-sellers-header justify-content-between">
                <div class="top-left-text">
                    <span class="best-seller-text">Bán chạy nhất</span>
                    <div class="countdown">
                        <div class="count-item" id="days"></div>:
                        <div class="count-item" id="hours"></div>:
                        <div class="count-item" id="mins"></div>:
                        <div class="count-item" id="secs"></div>
                    </div>
                    <span class="timeleft">Thời gian còn lại cho đến khi hết ưu đãi</span>
                </div>
                <div class="top-right-text">
                    <a href="product.php">Xem tất cả &nbsp;
                        <span class="iconify" data-icon="zmdi:long-arrow-right" id="long-arrow-right"></span>                   
                    </a>
                </div>
            </div>
        </div>

        <div class="container best-sellers-product">
            <div class="row">

                <?php
                
                $i = 0;
                foreach ($product_shuffle as $item) { 
                    if ($i < 5) {
                        $i++;

                    ?>

                    <div class="col product-wrapper">
                        <div class="product-content">
                            <div class="thumbnail-wrapper">
                                <div class="product-badge btn small rounded-pill">
                                    <span>11%</span>
                                </div>
                                <div class="product-favorite">
                                    <a href="##">
                                        <span class="iconify" data-icon="bi:suit-heart"></span>
                                    </a>
                                </div>
                                <a href="<?php printf('%s?product_id=%s', 'product-details.php',  $item['id']); ?>">
                                    <div class="product-card">
										<div class="container hover-slide-images-toggler">
											<div class="row banner-hover">
												<div class="col hover-item"></div>
												<div class="col hover-item"></div>
												<div class="col hover-item"></div>
												<div class="banner">
													<div class="banner-item active">
														<img src="../products/<?php echo  $item['product_image_1'] ?? "Unknown";  ?>" alt="">
													</div>
													<div class="banner-item">
														<img src="../products/<?php echo  $item['product_image_2'] ?? "Unknown";  ?>" alt="">
													</div>
													<div class="banner-item">
														<img src="../products/<?php echo  $item['product_image_3'] ?? "Unknown";  ?>" alt="">
													</div>
												</div>
											</div>
										</div>
										<div class="navi">
											<div class="slide-icon-below active"></div>
											<div class="slide-icon-below"></div>
											<div class="slide-icon-below"></div>
										</div>
									</div>
                                </a>
                            </div>
                            <div class="content-wrapper">
                                <a href="<?php printf('%s?product_id=%s', 'product-details.php',  $item['id']); ?>">
                                    <?php echo  $item['name'] ?? "Unknown";  ?>
                                </a>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>(21 đánh giá)</span>
                                </div>
                                <div class="banner-content-price">
                                    <span class="price">
                                        <ins><?php echo number_format($item['price'])," đ" ?? "Unknown";  ?></ins>
                                    </span>
                                </div>
                                <p>2 ngày giao hàng</p>
                            </div>                    
                        </div>
                        <div class="product-footer">
                            <form method="post">
                                <input type="hidden" name="product_id" value="<?php echo $item['id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 3; ?>">
                                <input type="hidden" name="session_id" value="<?php echo 3; ?>">
                                <input type="hidden" name="quantity" value="<?php echo 3; ?>">
                            <?php
                            if (in_array($item['id'], $Cart->getCartId($product->getData('cart_items')) ?? [])){
                                echo
                                    '<div class="cart-wrapper">
                                        <button type="submit" disabled class="btn add-to-cart-button">Đã thêm</button>
                                    </div>';
                            }else{
                                echo    
                                    '<div class="cart-wrapper">
                                        <button type="submit" name="cart_submit" class="btn add-to-cart-button">Thêm vào giỏ</button>
                                    </div>';
                                }
                            ?>
                            </form>

                            <ul class="product-footer-info">
                                <li>Màn hình 10.9 inch</li>
                                <li>Hệ điều hành iOS</li>
                                <li>Chiều dài 9.74 inch</li>
                            </ul>
                        </div>
                        <div class="product-content-fade"></div>
                    </div>
                    <?php
                    }

                } // closing foreach function ?>
                
            </div>
        </div>
    </div>
    <!-- End Best Sellers-->

    <!-- Coupon banner -->
    <div class="container coupon-banner">
        <div class="coupon-detail">
            <div class="text">
                <h4 class="entry-title">Siêu giảm giá cho lần đầu mua hàng</h4>
                <div class="entry-description">Sử dụng mã giảm giá trong trang thanh toán</div>
            </div>
            <div class="entry-coupon">
                <span class="iconify icon-ticket" data-icon="bi:ticket-perforated"></span>
                <strong>FREE256MAC</strong>
            </div>
        </div>
    </div>
    <!-- End Coupon Banner -->

    <!-- Special Offer Product Section-->
    <div class="container product-section">
        <div class="row">
            <div class="col-md-4 special-offer-product">
            <?php 
            $i = 0;
            foreach ($product_shuffle as $item) { 
                if ($i < 1) {
                    $i++;

            ?>

                <div class="product-wrapper">
                    <div class="product-content">
                        <h4>Ưu đãi đặc biệt</h4>
                        <span class="timeleft">Thời gian còn lại cho đến khi hết ưu đãi</span>
                        <div class="countdown">
                            <div class="count-item" id="days"></div>:
                            <div class="count-item" id="hours"></div>:
                            <div class="count-item" id="mins"></div>:
                            <div class="count-item" id="secs"></div>
                        </div>
                        <div class="thumbnail-wrapper">
                            <div class="product-badge btn small rounded-pill">
                                <span>32%</span>
                            </div>
                            <div class="product-favorite">
                                <a href="##">
                                    <span class="iconify" data-icon="bi:suit-heart"></span>
                                </a>
                            </div>
                            <a href="##">
                                <div class="product-card">
                                    <div class="container hover-slide-images-toggler">
                                        <div class="row banner-hover">
                                            <div class="col hover-item"></div>
                                            <div class="banner">
                                                <div class="banner-item active">
                                                    <img src="../products/<?php echo  $item['product_image_1'] ?? "Unknown";  ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="content-wrapper">
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(21 đánh giá)</span>
                            </div>
                            <a href="<?php printf('%s?product_id=%s', 'product-details.php',  $item['id']); ?>">
                                <?php echo  $item['name'] ?? "Unknown";  ?>
                            </a>
                            <div class="banner-content-price">
                                <span class="price">
                                    <ins><?php echo number_format($item['price'])," đ" ?? "Unknown";  ?></ins>
                                    <del><?php echo number_format($item['price'] * 0.95)," đ" ?? "Unknown";  ?></del>
                                </span>
                            </div>
                            <p>2 ngày giao hàng</p>
                            <div class="product-offer-count">
                                <div class="product-progress"></div>
                                <div class="product-count-detail">
                                    <div class="count-detail-text fa-pull-left">Hiện còn: <strong>15</strong>
                                    </div>
                                    <div class="count-detail-text fa-pull-right">Đã bán: <strong>21</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <?php
                }

            } // closing foreach function ?>
            </div>

            <div class="col-md-8 special-offer-product-right">
                <div class="row">

                <?php 
                $i = 0;
                foreach ($product_shuffle as $item) { 
                    if ($i < 8) {
                        $i++;

                    ?>

                    <div class="col product-wrapper">
                        <div class="product-content">
                            <div class="thumbnail-wrapper">
                                <div class="product-badge btn small rounded-pill">
                                    <span>11%</span>
                                </div>
                                <div class="product-favorite">
                                    <a href="##">
                                        <span class="iconify" data-icon="bi:suit-heart"></span>
                                    </a>
                                </div>
                                <a href="<?php printf('%s?product_id=%s', 'product-details.php',  $item['id']); ?>">
                                    <div class="product-card">
                                        <div class="container hover-slide-images-toggler">
                                            <div class="row banner-hover">
                                                <div class="col hover-item"></div>
                                                <div class="col hover-item"></div>
                                                <div class="col hover-item"></div>
                                                <div class="banner">
                                                    <div class="banner-item active">
                                                        <img src="../products/<?php echo  $item['product_image_1'] ?? "Unknown";  ?>" alt="">
                                                    </div>
                                                    <div class="banner-item">
                                                        <img src="../products/<?php echo  $item['product_image_2'] ?? "Unknown";  ?>" alt="">
                                                    </div>
                                                    <div class="banner-item">
                                                        <img src="../products/<?php echo  $item['product_image_3'] ?? "Unknown";  ?>" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="navi">
                                            <div class="slide-icon-below active"></div>
                                            <div class="slide-icon-below"></div>
                                            <div class="slide-icon-below"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="content-wrapper">
                                <a href="<?php printf('%s?product_id=%s', 'product-details.php',  $item['id']); ?>">
                                    <?php echo  $item['name'] ?? "Unknown";  ?>
                                </a>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i></br>
                                    <span>(21 đánh giá)</span>
                                </div>
                                <div class="banner-content-price">
                                    <span class="price">
                                        <ins><?php echo number_format($item['price'])," đ" ?? "Unknown";  ?></ins>
                                    </span>
                                    <form method="post">
                                    <input type="hidden" name="product_id" value="<?php echo $item['id'] ?? '1'; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo 3; ?>">
                                    <?php
                                        echo    
                                            '<button type="submit" name="cart_submit" class="btn add-to-cart-2">
                                                    <span class="iconify add-to-cart-icon" data-icon="ant-design:shopping-cart-outlined"></span>
                                            </button>';
                                    ?>
                                    </form>
                                </div>
                                <p>2 ngày giao hàng</p>
                            </div>                    
                        </div>
                        <div class="product-footer">
                            <ul class="product-footer-info">
                                <li>Màn hình 10.9 inch</li>
                                <li>Hệ điều hành iOS</li>
                                <li>Chiều dài 9.74 inch</li>
                            </ul>
                        </div>
                        <div class="product-content-fade"></div>
                    </div>
                    <?php
                    }

                } // closing foreach function ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Special Offer Product Section -->

    <!-- Banner Shop 2 -->
    <div class="container shop-banner-2">
        <div class="row mt-lg-4 shop-banner-top">
            <div class="col">
                <div class="banner-top" style="background-image: url();">
                    <h4 class="banner-title">
                        iPhone 13 Series
                        <strong>Thu cũ lên đời</strong>
                        Tặng 300.000đ
                    </h4>
                    <div class="banner-detail">
                        <p>Giá đã áp dụng ưu đãi</p>
                        <div class="banner-price">
                            Giá chỉ từ
                            <span>18.500.000đ</span>
                        </div>
                    </div>
                    <a href="#" class="banner-button btn small rounded-pill">Xem ngay</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Shop 2-->

    <!-- Trending Product Section-->
    <div class="container trending-product-section">
        <div class="best-sellers-header justify-content-between">
            <div class="top-left-text">
                <span class="best-seller-text">Các sản phẩm nổi bật</span>
            </div>
            <div class="top-right-text">
                <a href="product.php">Xem tất cả &nbsp;
                    <span class="iconify" data-icon="zmdi:long-arrow-right" id="long-arrow-right"></span>                   
                </a>
            </div>
        </div>

        <div class="container best-sellers-product-top">
            <div class="row">
                <?php
                
                $i = 0;
                foreach ($product_shuffle as $item) { 
                    if ($i < 6) {
                        $i++;

                ?>

                <div class="col product-wrapper">
                    <div class="product-content">
                        <div class="thumbnail-wrapper">
                            <div class="product-badge btn small rounded-pill">
                                <span>11%</span>
                            </div>
                            <div class="product-favorite">
                                <a href="##">
                                    <span class="iconify" data-icon="bi:suit-heart"></span>
                                </a>
                            </div>
                            
                            <div class="product-card">
                                <a href="<?php printf('%s?product_id=%s', 'product-details.php',  $item['id']); ?>">
                                    <div class="container hover-slide-images-toggler">
                                        <div class="row banner-hover">
                                            <div class="col hover-item"></div>
                                            <div class="col hover-item"></div>
                                            <div class="col hover-item"></div>
                                            <div class="banner">
                                                <div class="banner-item active">
                                                    <img src="../products/<?php echo  $item['product_image_1'] ?? "Unknown";  ?>" alt="">
                                                </div>
                                                <div class="banner-item">
                                                    <img src="../products/<?php echo  $item['product_image_2'] ?? "Unknown";  ?>" alt="">
                                                </div>
                                                <div class="banner-item">
                                                    <img src="../products/<?php echo  $item['product_image_3'] ?? "Unknown";  ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="navi">
                                        <div class="slide-icon-below active"></div>
                                        <div class="slide-icon-below"></div>
                                        <div class="slide-icon-below"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="content-wrapper">
                                <a href="<?php printf('%s?product_id=%s', 'product-details.php',  $item['id']); ?>">
                                    <?php echo  $item['name'] ?? "Unknown";  ?>
                                </a>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(21 đánh giá)</span>
                            </div>
                            <div class="banner-content-price">
                                <span class="price">
                                    <ins><?php echo number_format($item['price'])," đ" ?? "Unknown";  ?></ins>
                                </span>
                            </div>
                            <ul class="product-footer-info">
                                <li>Màn hình 10.9 inch</li>
                                <li>Hệ điều hành iOS</li>
                                <li>Chiều dài 9.74 inch</li>
                            </ul>
                        </div>   
                        <div class="product-footer">
                            <form method="post">
                                <input type="hidden" name="product_id" value="<?php echo $item['id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 3; ?>">
                            <?php
                            if (in_array($item['id'], $Cart->getCartId($product->getData('cart_items')) ?? [])){
                                echo    
                                    '<div class="cart-wrapper">
                                        <button type="submit" disabled class="btn add-to-cart-button">Đã thêm</button>
                                    </div>';
                            }else{
                                echo    
                                    '<div class="cart-wrapper">
                                        <button type="submit" name="cart_submit" class="btn add-to-cart-button">Thêm vào giỏ</button>
                                    </div>';
                                }
                            ?>
                            </form>
                        </div>                    
                    </div>
                    <div class="product-content-fade"></div>
                </div>     

                <?php
                    }

                } // closing foreach function ?>

            </div>
        </div>

        <div class="row">
            <div class="col-md-4 special-offer-product">
                <div class="product-wrapper">
                    <div class="product-content">
                        <div class="banner-content-wrapper">
                            <h6 class="entry-subtitle style-2">Bán chạy nhất</h6>
                            <h3 class="entry-title thin">Mua điện thoại</br>
                                <strong>iPhone XS Pro</strong></br>
                                mới nhất
                            </h3>
                            <a href="#" class="banner-button btn small rounded-pill">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 special-offer-product-right">
                <div class="row">
                    <?php
                    
                    $i = 0;
                    foreach ($product_shuffle as $item) { 
                        if ($i < 8) {
                            $i++;
                    ?>

                    <div class="col product-wrapper">
                        <div class="product-content">
                            <div class="thumbnail-wrapper">
                                <div class="product-badge btn small rounded-pill">
                                    <span>11%</span>
                                </div>
                                <div class="product-favorite">
                                    <a href="##">
                                        <span class="iconify" data-icon="bi:suit-heart"></span>
                                    </a>
                                </div>
                                <a href="<?php printf('%s?product_id=%s', 'product-details.php',  $item['id']); ?>">
                                    <div class="product-card">
                                        <div class="container hover-slide-images-toggler">
                                            <div class="row banner-hover">
                                                <div class="col hover-item"></div>
                                                <div class="col hover-item"></div>
                                                <div class="col hover-item"></div>
                                                <div class="banner">
                                                    <div class="banner-item active">
                                                        <img src="../products/<?php echo  $item['product_image_1'] ?? "Unknown";  ?>" alt="">
                                                    </div>
                                                    <div class="banner-item">
                                                        <img src="../products/<?php echo  $item['product_image_2'] ?? "Unknown";  ?>" alt="">
                                                    </div>
                                                    <div class="banner-item">
                                                        <img src="../products/<?php echo  $item['product_image_3'] ?? "Unknown";  ?>" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="navi">
                                            <div class="slide-icon-below active"></div>
                                            <div class="slide-icon-below"></div>
                                            <div class="slide-icon-below"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="content-wrapper">
                                <a href="<?php printf('%s?product_id=%s', 'product-details.php',  $item['id']); ?>">
                                    <?php echo  $item['name'] ?? "Unknown";  ?>
                                </a>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>(21 đánh giá)</span>
                                </div>
                                <div class="banner-content-price">
                                    <span class="price">
                                        <ins><?php echo number_format($item['price'])," đ" ?? "Unknown";  ?></ins>
                                    </span>
                                    <form method="post">
                                    <input type="hidden" name="product_id" value="<?php echo $item['id'] ?? '1'; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo 3; ?>">
                                    <?php
                                        echo    
                                            '<button type="submit" name="cart_submit" class="btn add-to-cart-2">
                                                    <span class="iconify add-to-cart-icon" data-icon="ant-design:shopping-cart-outlined"></span>
                                            </button>';
                                    ?>
                                    </form>
                                </div>
                                <p>2 ngày giao hàng</p>
                            </div>                    
                        </div>
                        <div class="product-footer">
                            <ul class="product-footer-info">
                                <li>Màn hình 10.9 inch</li>
                                <li>Hệ điều hành iOS</li>
                                <li>Chiều dài 9.74 inch</li>
                            </ul>
                        </div>
                        <div class="product-content-fade"></div>
                    </div>
                    
                    <?php
                    }

                    } // closing foreach function ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Trending Product Section -->

    <!-- Product Category Menu -->
    <div class="container product-category-menu">
        <div class="row">
            <div class="product-category col">
                <div class="module-category-list">
                    <div class="category-image">
                        <a href="##">
                            <img src="../assets/category-1.png" alt="Cell Phones">
                        </a>
                    </div>
                    <div class="category-detail">
                        <h3 class="category-name"><a href="##">Điện thoại</a></h3>
                        <ul>
                            <li><a href="##">iPhone</a></li>
                            <li><a href="##">Phụ kiện điện thoại</a></li>
                            <li><a href="##">Ốp điện thoại</a></li>
                            <li><a href="##">Điện thoại trả sau</a></li>
                        </ul>
                        <a class="btn-link" href="product.php">Xem tất cả &nbsp;
                            <span class="iconify" data-icon="zmdi:long-arrow-right" id="long-arrow-right"></span>                   
                        </a>    
                    </div>
                </div>
            </div>
            <div class="product-category col">
                <div class="module-category-list">
                    <div class="category-image">
                        <a href="##">
                            <img src="../assets/category-2.png" alt="Cell Phones">
                        </a>
                    </div>
                    <div class="category-detail">
                        <h3 class="category-name"><a href="##">Tai nghe</a></h3>
                        <ul>
                            <li><a href="##">Tai nghe chống ồn</a></li>
                            <li><a href="##">Tai nghe cao cấp</a></li>
                            <li><a href="##">Tai nghe gaming</a></li>
                            <li><a href="##">Tai nghe thể thao</a></li>
                        </ul>
                        <a class="btn-link" href="product.php">Xem tất cả &nbsp;
                            <span class="iconify" data-icon="zmdi:long-arrow-right" id="long-arrow-right"></span>                   
                        </a>    
                    </div>
                </div>
            </div>
            <div class="product-category col">
                <div class="module-category-list">
                    <div class="category-image">
                        <a href="##">
                            <img src="../assets/category-3.png" alt="Cell Phones">
                        </a>
                    </div>
                    <div class="category-detail">
                        <h3 class="category-name"><a href="##">Đồng hồ đeo tay</a></h3>
                        <ul>
                            <li><a href="##">Đồng hồ thể thao</a></li>
                            <li><a href="##">Đồng hồ cao cấp</a></li>
                            <li><a href="##">Đồng hồ cho đàn ông</a></li>
                            <li><a href="##">Đồng hồ cho phụ nữ</a></li>
                        </ul>
                        <a class="btn-link" href="product.php">Xem tất cả &nbsp;
                            <span class="iconify" data-icon="zmdi:long-arrow-right" id="long-arrow-right"></span>                   
                        </a>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Category Menu-->

    <!-- Brand -->
    <div class="brand">
        <div class="container">
            <div class="row mt-lg-4">
                <div class="brand-item col">
                    <a href="##">
                        <img src="../assets/1.png">
                    </a>
                </div>
                <div class="brand-item col">
                    <a href="##">
                        <img src="../assets/2.png">
                    </a>
                </div>
                <div class="brand-item col">
                    <a href="##">
                        <img src="../assets/3.png">
                    </a>
                </div>
                <div class="brand-item col">
                    <a href="##">
                        <img src="../assets/4.png">
                    </a>
                </div>
                <div class="brand-item col">
                    <a href="##">
                        <img src="../assets/5.png">
                    </a>
                </div>
                <div class="brand-item col">
                    <a href="##">
                        <img src="../assets/6.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand -->

    <footer class="site-footer">
        <!-- FOOTER NEWSLETTER -->
        <div class="footer-newsletter">
            <div class="container">
                <div class="footer-newsletter-wrapper">
                    <div class="footer-newsletter-text">
                        <h3>Đăng ký Thư báo điện tử</h3>
                        <p class="description">
                            Nhận những E-mal tin tức và ưu đãi về các sản phẩm mới nhất
                        </p>
                    </div>
                    <div class="footer-newsletter-form">
                        <form action="">
                            <input type="email" placeholder="Địa chỉ email của bạn">
                            <button type="submit">Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER MAIN -->
        <div class="footer-main">
            <div class="container">
                <!-- FOOTER DETAILS -->
                <div class="footer-details">
                    <div class="footer-details-grid">
                        <div class="col">
                            <div class="site-brand">
                                <a href="#">
                                    <img src="../assets/logo.png"
                                        alt="Elextra" />
                                </a>
                            </div>
                            <div class="site-hotlines">
                                <div class="hotline">
                                    <span>Hotline</span>
                                    <h3>1800 6601 - Phím 1</h3>
                                </div>
                                <div class="hotline">
                                    <span>Hỗ trợ kỹ thuật</span>
                                    <h3>1800 6601 - Phím 2</h3>
                                </div>
                            </div>
                            <div class="social-media-icons">
                                <a href="#" class="icon-wrapper">
                                    <span class="iconify" data-icon="carbon:logo-facebook"></span>
                                </a>
                                <a href="#" class="icon-wrapper">
                                    <span class="iconify" data-icon="carbon:logo-twitter"></span>
                                </a>
                                <a href="#" class="icon-wrapper">
                                    <span class="iconify" data-icon="carbon:logo-youtube"></span>
                                </a>
                                <a href="#" class="icon-wrapper">
                                    <span class="iconify" data-icon="carbon:logo-instagram"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <h4>Product Categories</h4>
                            <ul>
                                <li><a href="#">Điện thoại</a></li>
                                <li><a href="#">Laptop</a></li>
                                <li><a href="#">Tablet</a></li>
                                <li><a href="#">PC & Linh kiện</a></li>
                                <li><a href="#">Âm thanh</a></li>
                                <li><a href="#">Phụ kiện</a></li>
                                <li><a href="#">Đồng hồ</a></li>
                                <li><a href="#">Nhà thông minh</a></li>
                                <li><a href="#">Hàng cũ</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h4>Product Categories</h4>
                            <ul>
                                <li><a href="#">Điện thoại</a></li>
                                <li><a href="#">Laptop</a></li>
                                <li><a href="#">Tablet</a></li>
                                <li><a href="#">PC & Linh kiện</a></li>
                                <li><a href="#">Âm thanh</a></li>
                                <li><a href="#">Phụ kiện</a></li>
                                <li><a href="#">Đồng hồ</a></li>
                                <li><a href="#">Nhà thông minh</a></li>
                                <li><a href="#">Hàng cũ</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h4>Product Categories</h4>
                            <ul>
                                <li><a href="#">Điện thoại</a></li>
                                <li><a href="#">Laptop</a></li>
                                <li><a href="#">Tablet</a></li>
                                <li><a href="#">PC & Linh kiện</a></li>
                                <li><a href="#">Âm thanh</a></li>
                                <li><a href="#">Phụ kiện</a></li>
                                <li><a href="#">Đồng hồ</a></li>
                                <li><a href="#">Nhà thông minh</a></li>
                                <li><a href="#">Hàng cũ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- FOOTER COPYRIGHT -->
                <div class="footer-copyright">
                    <div class="copyright">
                        <span>Copyright 2021 © Elextra. All right reserved.</span>
                    </div>
                    <div class="payment-logos">
                        <img src="../assets/payment.png" alt="logos">
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://code.iconify.design/2/2.1.1/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>

    <script src="../js/app.js"></script>

</body>

</html>