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
                                <img src="../image/logo.png"
                                    alt="Elextra" />
                            </a>
                        </div>
                        <button class="responsive-icon">
                            <span class="iconify" data-icon="carbon:menu"></span>
                        </button>
                        <button class="close-icon">
                            <i class="fas fa-times"></i>
                        </button>
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
                            <?php
                            if(!isset($_SESSION['user_id'])){
                                echo '<a href="login_form.php">
                                    ';
                            }
                            else
                                echo '<a href="My account.php">';
                            ?>
                                <div class="header-addons-icon">
                                    <div class="icon-wrapper">
                                        <span class="iconify" data-icon="carbon:user"></span>
                                    </div>
                                </div>
                                <?php
                                if(!isset($_SESSION['user_id'])){
                                    echo '  <div class="header-addons-text">
                                            <div class="sub-text">Đăng nhập</div>
                                            <div class="primary-text">Tài khoản</div>
                                            </div>
                                        ';
                                }
                                else
                                    echo '  <div class="header-addons-text">
                                            <div class="sub-text">Xin chào,</div>
                                            <div class="primary-text">'. $_SESSION['user_name'] .'</div>
                                            </div>
                                            <a href="logout.php"><button style="margin-left:1rem; color:black">Logout</button></a>                                   
                                        ';
                                ?>
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
                                <a href="cart.php" class="icon-wrapper">
                                    <span class="iconify" data-icon="carbon:shopping-cart"></span>
                                </a>
                                <a href="cart.php" class="button-count" id="cart_reset">
                                    <?php
                                        $items = $product->getCartData();
                                        echo count($items);
                                    ?>
                                </a>
                            </div>
                            <a href="cart.php">
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