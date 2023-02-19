<?php

include('functions.php');

@include 'config.php';
header("Cache-Control: no cache");
session_start();
?>
    <?php
        include_once('../include/header.php');
        include_once('../include/site-header.php');
    ?>

    <!-- Page Content -->
    <div class="container product-container">

        <div class="row">
            <div class="col-md-3 product-container-left">
                <div id="slider-3"></div>
				<h4>Giá bán</h4>    
                <div class="list-group slider-range-container">
					<input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="70000000" />
                    <p id="price_show">0 đ &ensp;-&ensp; 70,000,000 đ</p>
                    <div id="price_range"></div>
                </div>

                <div class="list-group filter-checkbox">
                <h4>Loại hàng</h4>
                <?php

                $query = "SELECT DISTINCT(category_name), categoryId FROM product_categories ORDER BY categoryId";
                $result = $conn->query($query);
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="list-group-item checkbox">
                    <label class="checkbox-label">
                        <input type="checkbox" class="common_selector category" value="<?php echo $row['category_name'] ?? null; ?>" >
                        <div class="checkbox__box"></div>
                        <span class="category-name">
                            <?php echo $row['category_name'] ?? null; ?>
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

                $query = "SELECT DISTINCT(brand_name), brandId FROM product_brands ORDER BY brandId";
                $result = $conn->query($query);
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="list-group-item checkbox">
                    <label class="checkbox-label">
                        <input type="checkbox" class="common_selector brand" value="<?php echo $row['brand_name'] ?? null; ?>" >
                        <div class="checkbox__box"></div>
                        <span class="brand-name">
                            <?php echo $row['brand_name'] ?? null; ?>
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
                    <?php

                    ?>
                </div>
            </div>

        </div>

    </div>

    <?php
        include_once('../include/site-footer.php');
        include_once('../include/footer.php');      
    ?>
