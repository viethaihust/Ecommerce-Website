<?php

//fetch_data.php

include('functions.php');
@include 'config.php';

function listformat ($list) {
    $listformat = explode("\n", $list);
    foreach ($listformat as $line) {
        echo "<li>".$line."</li>";
    };
};

header("Cache-Control: no cache");
session_start();
if(!isset($_SESSION['user_id'])){
    header('location:login_form.php');
}
?>

    <?php
        include_once('../include/header.php');
        include_once('../include/site-header.php');
    ?>

    <!-- Product-details-->
    <?php
    $item_id = $_GET['product_id'] ?? 1;
    
    $product_id = $item_id;
    $query_1 = "SELECT * FROM product_image WHERE product_image.product_id = $product_id";											
    $result_1 = $conn->query($query_1);

    foreach ($product->getProductData() as $item) :
        if ($item['id'] == $item_id) :

        $average = $product->getRatingAverage($item['id']);
        $itemRating = $product->getItemRating($item['id']);
        $ratingNumber = 0;
        $count = 0;
        $fiveStarRating = 0;
        $fourStarRating = 0;
        $threeStarRating = 0;
        $twoStarRating = 0;
        $oneStarRating = 0;	
        foreach($itemRating as $rate){
            $ratingNumber+= $rate['ratingNumber'];
            $count += 1;
            if($rate['ratingNumber'] == 5) {
                $fiveStarRating +=1;
            } else if($rate['ratingNumber'] == 4) {
                $fourStarRating +=1;
            } else if($rate['ratingNumber'] == 3) {
                $threeStarRating +=1;
            } else if($rate['ratingNumber'] == 2) {
                $twoStarRating +=1;
            } else if($rate['ratingNumber'] == 1) {
                $oneStarRating +=1;
            }
        }
        $average = 0;
        if($ratingNumber && $count) {
            $average = $ratingNumber/$count;
        }	
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
                                <?php
                                    $i=0;
                                    while ($row_1 = $result_1->fetch_assoc())
                                        { 
                                ?>
                                        <img src="../image/products/<?php echo $row_1['product_image'] ?>" alt="">
                                <?php
                                        }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class = "img-select">
                        <div class="row">
                            <?php
                                $query_1 = "SELECT * FROM product_image WHERE product_image.product_id = $product_id";											
                                $result_1 = $conn->query($query_1); 
                                $total_row_1 = mysqli_num_rows($result_1);

                                $i=0;
                                $j=0;
                                if($total_row_1 > 1){
                                    while ($row_1 = $result_1->fetch_assoc())
                                    { 
                                        $j++;
                            ?>
                                <div class="col">
                                    <div class = "img-item">
                                    <a href = "#" data-id = "<?php echo $j ?>">
                                        <img src="../image/products/<?php echo  $row_1['product_image'] ?>">
                                    </a>
                                    </div>
                                </div>
                            <?php
                                    }
                            
                                }
                            ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-7 product-details-right">
                <div class = "product-content">
                    <h2 class = "product-title"><?php echo  $item['name'] ?? "Unknown";  ?></h2>
                    <a href = "#" class = "product-link">Model: MYL92LL/A | SKU: <?php echo $item['sku'] ?></a>
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

                        <form name="AddToCartForm" method="POST">
                            
                            <?php

                                if (in_array($item['id'], $Cart->getCartId($product->getData('cart_items')) ?? [])){
                                    echo
                                    '<div class="product-info-top">
                                        <div class="spinner">
                                            <div class="prev"><span>-</span></div>
                                            <div class="number-spinner"><input type="number" name="quantity" id="value-spinner" min="1" max="100" value="1" ></div>
                                            <div class="next"><span>+</span></div>
                                        </div>
                                        <div class="purchase-info">
                                            <button type="submit"  name="cart_submit" disabled class = "btn">
                                                Added to Cart
                                            </button>
                                            <button type="button" class = "btn">
                                                <i class="fas fa-heart"></i>
                                                Add to Wishlist
                                            </button>
                                        </div>
                                    </div>';
                                }
                                else{
                                    echo    
                                    '<div class="product-info-top">
                                        <div class="spinner">
                                            <div class="prev"><span>-</span></div>
                                            <div class="number-spinner"><input type="number" name="quantity" id="value-spinner" min="1" max="100" value="1" ></div>
                                            <div class="next"><span>+</span></div>
                                        </div>
                                        <div class = "purchase-info">
                                            <button type="submit"  name="cart_submit" class = "btn">
                                                Add to Cart
                                            </button>
                                            <button type="button" class = "btn">
                                                <i class="fas fa-heart"></i>
                                                Add to Wishlist
                                            </button>
                                        </div>
                                    </div>';
                                }

                            ?>
                            <input type="hidden" name="product_id" value="<?php echo $item['id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                            <input type="hidden" name="action" value="AddToCart">
                        </form>

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

    <div id="ratingDetails" class="container"> 		
		<div class="row">			
			<div class="col-sm-3">				
				<h4>Đánh giá và nhận xét</h4>
				<h2 class="bold padding-bottom-7"><?php printf('%.1f', $average); ?> <small>/ 5</small></h2>				
				<?php
				$averageRating = round($average, 0);
				for ($i = 1; $i <= 5; $i++) {
					$ratingClass = "btn-default btn-grey";
					if($i <= $averageRating) {
						$ratingClass = "btn-warning";
					}
				?>
				<button type="button" class="btn btn-sm <?php echo $ratingClass; ?>" aria-label="Left Align">
				  <i class = "fas fa-star" aria-hidden="true"></i>
				</button>	
				<?php } ?>				
			</div>
			<div class="col-sm-3">
				<?php
				$fiveStarRatingPercent = round(($fiveStarRating/5)*100);
				$fiveStarRatingPercent = !empty($fiveStarRatingPercent)?$fiveStarRatingPercent.'%':'0%';	
				
				$fourStarRatingPercent = round(($fourStarRating/5)*100);
				$fourStarRatingPercent = !empty($fourStarRatingPercent)?$fourStarRatingPercent.'%':'0%';
				
				$threeStarRatingPercent = round(($threeStarRating/5)*100);
				$threeStarRatingPercent = !empty($threeStarRatingPercent)?$threeStarRatingPercent.'%':'0%';
				
				$twoStarRatingPercent = round(($twoStarRating/5)*100);
				$twoStarRatingPercent = !empty($twoStarRatingPercent)?$twoStarRatingPercent.'%':'0%';
				
				$oneStarRatingPercent = round(($oneStarRating/5)*100);
				$oneStarRatingPercent = !empty($oneStarRatingPercent)?$oneStarRatingPercent.'%':'0%';
				
				?>
				<div class="float-start">
					<div class="float-start" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">5 <i class = "fas fa-star"></i></div>
					</div>
					<div class="float-start" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar bg-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $fiveStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $fiveStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="float-end" style="margin-left:10px;"><?php echo $fiveStarRating; ?></div>
				</div>
				
				<div class="float-start">
					<div class="float-start" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">4 <i class = "fas fa-star"></i></div>
					</div>
					<div class="float-start" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $fourStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $fourStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="float-end" style="margin-left:10px;"><?php echo $fourStarRating; ?></div>
				</div>
				<div class="float-start">
					<div class="float-start" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">3 <i class = "fas fa-star"></i></div>
					</div>
					<div class="float-start" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar bg-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $threeStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $threeStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="float-end" style="margin-left:10px;"><?php echo $threeStarRating; ?></div>
				</div>
				<div class="float-start">
					<div class="float-start" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">2 <i class = "fas fa-star"></i></div>
					</div>
					<div class="float-start" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $twoStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $twoStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="float-end" style="margin-left:10px;"><?php echo $twoStarRating; ?></div>
				</div>
				<div class="float-start">
					<div class="float-start" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">1 <i class = "fas fa-star"></i></div>
					</div>
					<div class="float-start" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $oneStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $oneStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="float-end" style="margin-left:10px;"><?php echo $oneStarRating; ?></div>
				</div>
			</div>		
			<div class="col-sm-3">
				<button type="button" id="rateProduct" class="btn btn-info">Đánh giá sản phẩm</button>
			</div>		
		</div>
		<div class="row">
			<div class="col-sm-7">
				<hr/>
				<div class="review-block">		
				<?php
				$itemRating = $product->getItemRating($_GET['product_id']);
				foreach($itemRating as $product){				
					$date=date_create($product['created']);
					$reviewDate = date_format($date,"M d, Y");						
					$profilePic = "profile.png";
                    if($product['avatar']) {
						$profilePic = $product['avatar'];	
					}
				?>
					<div class="row">
						<div class="col-sm-3">
							<img src="../image/userpics/<?php echo $profilePic; ?>" class="img-rounded user-pic">
							<div class="review-block-name">Bởi <a href="#"><?php echo $product['user_name']; ?></a></div>
							<div class="review-block-date"><?php echo $reviewDate; ?></div>
						</div>
						<div class="col-sm-9">
							<div class="review-block-rate">
								<?php
								for ($i = 1; $i <= 5; $i++) {
									$ratingClass = "btn-default btn-grey";
									if($i <= $product['ratingNumber']) {
										$ratingClass = "btn-warning";
									}
								?>
								<button type="button" class="btn btn-xs <?php echo $ratingClass; ?>" aria-label="Left Align">
								  <i class = "fas fa-star" aria-hidden="true"></i>
								</button>								
								<?php } ?>
							</div>
							<div class="review-block-description"><?php echo $product['comments']; ?></div>
						</div>
					</div>
					<hr/>					
				<?php } ?>
				</div>
			</div>
		</div>	
	</div>

    <div id="ratingSection" class="container" style="display:none;">
		<div class="row">
            <form id="ratingForm" method="POST">					
                <div class="form-group col-sm-3">
                    <h4>Đánh giá sản phẩm này</h4>
                    <button type="button" class="btn btn-warning btn-sm rateButton" aria-label="Left Align">
                        <i class = "fas fa-star" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
                        <i class = "fas fa-star" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
                        <i class = "fas fa-star" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
                        <i class = "fas fa-star" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
                        <i class = "fas fa-star" aria-hidden="true"></i>
                    </button>
                    <input type="hidden" class="form-control" id="rating" name="rating" value="1">
                    <input type="hidden" class="form-control" id="itemId" name="itemId" value="<?php echo $_GET['product_id']; ?>">
                    <input type="hidden" name="action" value="saveRating">
                </div>		
                <div class="form-group col-sm-3">
                    <label for="comment">Nhận xét*</label>
                    <textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>
                </div>
                <div class="form-group col-sm-3" style="margin-left: 2rem">
                    <button type="submit" class="btn btn-info" id="saveReview">Lưu đánh giá</button> <button type="button" class="btn btn-info" id="cancelReview">Thoát</button>
                </div>			
            </form>
		</div>		
	</div>

    <?php
        include_once('../include/site-footer.php');
        include_once('../include/footer.php');
    ?>