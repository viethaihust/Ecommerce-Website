<?php

@include 'config.php';

if(isset($_POST["action"]))
{
	$query = "SELECT * FROM products INNER JOIN product_brands ON products.brand_id = product_brands.brandId
	INNER JOIN product_categories ON products.category_id = product_categories.categoryId";

	if(isset($_POST["minimum_price"], $_POST["maximum_price"]))
	{
		$query .= "
			AND price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
	if(isset($_POST["brand"]))
	{
		$brand_filter = implode("','", $_POST["brand"]);
		$query .= "
			AND brand_name IN('".$brand_filter."')
		";
	}
	if(isset($_POST["category"]))
	{
		$ram_filter = implode("','", $_POST["category"]);
		$query .= "
		 AND category_name IN('".$ram_filter."')
		";
	}

	$result = $conn->query($query);
	$total_row = mysqli_num_rows($result);

	if($total_row > 0)
	{
		while ($row = $result->fetch_assoc())
			{	
				$product_id = $row['id'];
				$query_1 = "SELECT * FROM product_image WHERE product_image.product_id = $product_id";											
				$result_1 = $conn->query($query_1);
				$total_row_1 = mysqli_num_rows($result_1);

				?>
				<div class="col-sm-4 col-lg-3 col-md-3">
					<div class="product">
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
									<a href="product-details.php?product_id=<?php echo $row['id'] ?>">
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
									<a href="product-details.php?product_id=<?php echo $row['id'] ?>">
										<?php echo $row['name'] ?>
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
											<ins><?php echo number_format($row['price']) ?> đ</ins>
										</span>
										<button class="add-to-cart-2">
											<span class="iconify add-to-cart-icon" data-icon="ant-design:shopping-cart-outlined"></span>
										</button>
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
					</div>

				</div>
		<?php
			}
	}
}

?>

<script src="../js/app.js"></script>