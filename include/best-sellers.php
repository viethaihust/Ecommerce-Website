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
                
                $number = 0;
                foreach ($product_shuffle as $item) { 
                    if ($number < 5) {
                        $number++;
                        $product_id = $item['id'];
                        $query_1 = "SELECT * FROM product_image WHERE product_image.product_id = $product_id";											
                        $result_1 = $conn->query($query_1);
                        $total_row_1 = mysqli_num_rows($result_1);

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
                            <a href="product-details.php?product_id=<?php echo $item['id'] ?>">
                                <div class="product-card">
                                    <div class="container hover-slide-images-toggler">
                                        <div class="row banner-hover">
                                            <?php
                                                $temp = $total_row_1;
                                                while ($temp > 0)
                                                { 		
                                                    $temp--;
                                                    echo '<div class="col hover-item"></div>';
                                                }									
                                            ?>
                                            <div class="banner">
                                                <?php
                                                    $i=0;
                                                    while ($row_1 = $result_1->fetch_assoc())
                                                        { 
                                                ?>
                                                            <div class="banner-item <?php if($i==0) { $i=1; echo 'active'; } ?>">
                                                                <img src="../image/products/<?php echo $row_1['product_image'] ?>" alt="" class="img-responsive" style="width: 10rem; height: auto">
                                                            </div>
                                                <?php
                                                        }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="navi">
                                        <?php
                                            $i=0;
                                            $temp = $total_row_1;
                                            while ($temp > 0)
                                                { 	
                                                    $temp--;
                                        ?>
                                                    <div class="slide-icon-below <?php if($i==0) { $i=1; echo 'active'; } ?>"></div>
                                        <?php
                                                }
                                        ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <div class="content-wrapper">
                        <a href="<?php printf('%s?product_id=%s', 'product-details.php',  $item['id']); ?>">
                            <?php echo  $item['name'] ?? "Unknown";  ?>
                        </a>
                        <div class="product-rating">
                        <?php
                            $average = $product->getRatingAverage($item['id']);
                            $reviewCount = $product->getRatingCount($item['id']);
                            $averageRating = round($average, 0);
                            for ($i = 1; $i <= 5; $i++) {
                                $ratingClass = "far fa-star";
                                if($i <= $averageRating) {
                                    $ratingClass = "fas fa-star";
                                }
                            ?>
                                <i class = "<?php echo $ratingClass; ?>"></i>
                        <?php } ?>
                            <span>(<?php echo $reviewCount ?> đánh giá)</span>
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
                    <form name="AddToCartForm" method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $item['id'] ?? '1'; ?>">
                        <input type="hidden" name="quantity" value="<?php echo 1; ?>">
                        <input type="hidden" name="action" value="AddToCart">
                    <?php
                    if (in_array($item['id'], $Cart->getCartId($product->getCartData($_SESSION['user_id'] ?? '')) ?? [])){
                    ?>
                            <div class="cart-wrapper" id="<?php echo $item['id'] ?>">
                                <div class="cart-wrapper-button" id="<?php echo $item['id'] ?>">
                                    <button type="submit" disabled class="btn add-to-cart-button">Đã thêm</button>
                                </div>
                            </div>
                    <?php
                    }else{
                    ?>
                            <div class="cart-wrapper" id="<?php echo $item['id'] ?>">
                                <div class="cart-wrapper-button" id="<?php echo $item['id'] ?>">
                                    <button type="submit" class="btn add-to-cart-button">Thêm vào giỏ</button>
                                </div>
                            </div>
                    <?php
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

                } ?>
            </div>
        </div>
    </div>
    <!-- End Best Sellers-->