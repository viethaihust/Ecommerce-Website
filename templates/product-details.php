<?php

//fetch_data.php

include('../functions.php');

shuffle($product_shuffle);

// request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['top_sale_submit'])){
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['id']);
    }
}

function listformat ($list) {
    $listformat = explode("\n", $list);
    foreach ($listformat as $line) {
        echo "<li>".$line."</li>";
    };
};

echo '</ul>';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elextra - Điện thoại, laptop, tablet, phụ kiện chính hãng</title>
    <link rel="icon" href="https://klbtheme.com/machic/wp-content/uploads/2021/08/cropped-logo-dark-32x32.png"
        sizes="32x32">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/Homepage/main.css" />
    <link rel="stylesheet" href="../css/Homepage/header.css" />
    <link rel="stylesheet" href="../css/Homepage/footer.css" />
    <link rel="stylesheet" href="../css/product-details.css" />

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
                                <a href="#" class="icon-wrapper">
                                    <span class="iconify" data-icon="carbon:shopping-cart"></span>
                                </a>
                                <a href="#" class="button-count">
                                    3
                                </a>
                            </div>
                            <div class="header-addons-text">
                                <div class="sub-text">Giỏ hàng</div>
                                <div class="primary-text">2.530.000đ</div>
                            </div>
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

    <!-- Product-details-->
    <?php
    $item_id = $_GET['product_id'] ?? 1;
    foreach ($product->getProductData() as $item) :
        if ($item['id'] == $item_id) :
    ?>

        <div class = "container product-details">
            <div class = "row">

                <div class="col-5 product-details-left">
                    <div class = "product-imgs">
                        <div class="product-badge btn small rounded-pill">
                            <span>11%</span>
                        </div>
                        <div class="image-wrapper">
                            <div class = "img-display">
                                <div class = "img-showcase">
                                    <img src="../products/<?php echo  $item['product_image_1'] ?? "Unknown";  ?>" alt="">
                                    <img src="../products/<?php echo  $item['product_image_2'] ?? "Unknown";  ?>" alt="">
                                    <img src="../products/<?php echo  $item['product_image_3'] ?? "Unknown";  ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class = "img-select">
                            <div class="row">
                                <div class="col">
                                    <div class = "img-item">
                                    <a href = "#" data-id = "1">
                                        <img src="../products/<?php echo  $item['product_image_1'] ?? "Unknown";  ?>" alt="">
                                    </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class = "img-item">
                                    <a href = "#" data-id = "2">
                                        <img src="../products/<?php echo  $item['product_image_2'] ?? "Unknown";  ?>" alt="">
                                    </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class = "img-item">
                                    <a href = "#" data-id = "3">
                                        <img src="../products/<?php echo  $item['product_image_3'] ?? "Unknown";  ?>" alt="">
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-7 product-details-right">
                    <div class = "product-content">
                        <h2 class = "product-title"><?php echo  $item['name'] ?? "Unknown";  ?></h2>
                        <a href = "#" class = "product-link">Model: MYL92LL/A | SKU: BE45VGRT</a>
                        <div class = "product-rating">
                            <i class = "fas fa-star"></i>
                            <i class = "fas fa-star"></i>
                            <i class = "fas fa-star"></i>
                            <i class = "fas fa-star"></i>
                            <i class = "fas fa-star-half-alt"></i>
                            <span>4.7(21 đánh giá)</span>
                        </div>
                        
                        <div class="product-stock">
                            <span class="iconify" data-icon="carbon:checkmark-outline"></span>
                            <span>Còn hàng</span>
                        </div>

                        <div class = "product-price">
                            <p class = "last-price">Giá cũ: <span><?php echo number_format($item['price'] * 0.95)," đ" ?? "Unknown";  ?></span></p>
                            <p class = "new-price">Giá mới: <span><?php echo number_format($item['price'])," đ" ?? "Unknown";  ?>(5%)</span></p>
                        </div>

                        <div class = "product-detail">
                            <h2>đặc điểm nổi bật: </h2>
                            <ul>
                                <?php listformat ($item['description']) ?>
                            </ul>
                        </div>
                        <div class="product-info">
                            <div class="product-info-top">
                                <div class="spinner">
                                    <div class="prev"><span>-</span></div>
                                    <div class="number-spinner"><input type="number" id="value-spinner" min="1" max="100" value="1"></div>
                                    <div class="next"><span>+</span></div>
                                </div>
                                <div class = "purchase-info">
                                    <button type = "button" class = "btn">
                                        Add to Cart
                                    </button>
                                    <button type = "button" class = "btn">
                                        <i class="fas fa-heart"></i>
                                        Add to Wishlist
                                    </button>
                                </div>
                            </div>
                            <div class="product-info-bottom">
                                <span class="iconify" data-icon="akar-icons:shipping-box-01"></span>
                                <span>2 ngày giao hàng | Thời gian giao hàng nhanh!</span>
                            </div>
                        </div>
                        <div class = "social-links">
                            <p>Chia sẻ: </p>
                            <a href = "#">
                            <i class = "fab fa-facebook-f"></i>
                            </a>
                            <a href = "#">
                            <i class = "fab fa-twitter"></i>
                            </a>
                            <a href = "#">
                            <i class = "fab fa-instagram"></i>
                            </a>
                            <a href = "#">
                            <i class = "fab fa-whatsapp"></i>
                            </a>
                            <a href = "#">
                            <i class = "fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
        endif;
        endforeach;
    ?>

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
    <script src="../js/product-details.js"></script>
</body>

</html>