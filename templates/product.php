<?php

//fetch_data.php

include('database_connection.php');
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

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

    <link rel="stylesheet" href="../css/Homepage/main.css" />
    <link rel="stylesheet" href="../css/Homepage/header.css" />
    <link rel="stylesheet" href="../css/Homepage/footer.css" />
    <link rel="stylesheet" href="../css/Homepage/best-seller.css">
    <link rel="stylesheet" href="../css/product.css">
    
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

    <!-- Page Content -->
    <div class="container product-container">

        <div class="row">
            <div class="col-md-3 product-container-left">
                <div id="slider-3"></div>
				<h4>Giá bán</h4>    
                <div class="list-group slider-range-container">
					<input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="35000000" />
                    <p id="price_show">0 đ &ensp;-&ensp; 35,000,000 đ</p>
                    <div id="price_range"></div>
                </div>

                <div class="list-group filter-checkbox">
					<h4>Loại hàng</h4>
                    <?php

                    $query = "SELECT DISTINCT(category_name) FROM product_categories ORDER BY id";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                    <label class="checkbox-label">
                        <input type="checkbox" class="common_selector category" value="<?php echo $row['category_name']; ?>" >
                        <div class="checkbox__box"></div>
                        <span class="category-name">
                            <?php echo $row['category_name']; ?>
                        </span>
                    </label>
                    </div>
                    <?php
                    }

                    ?>
                </div>

				<div class="list-group filter-checkbox">
					<h4>Thương hiệu</h4>
                    <?php

                    $query = "SELECT DISTINCT(brand_name) FROM product_brands ORDER BY id";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                    <label class="checkbox-label">
                        <input type="checkbox" class="common_selector brand" value="<?php echo $row['brand_name']; ?>" >
                        <div class="checkbox__box"></div>
                        <span class="brand-name">
                            <?php echo $row['brand_name']; ?>
                        </span>
                    </label>
                    </div>
                    <?php
                    }

                    ?>
                </div>

            </div>
    
            <div class="col-md-9">
                <div class="row filter_data">
                
                </div>
            </div>

        </div>

    </div>

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

<script>
$(document).ready(function(){

    

</script>            

    <script src="https://code.iconify.design/2/2.1.1/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>


    <script src="../js/jquery.js"></script>
    <script src="../js/app.js"></script>
    
    
</body>

</html>
