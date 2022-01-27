<?php

//fetch_data.php

include('database_connection.php');

if(isset($_POST["action"]))
{
	$query = "SELECT * FROM products INNER JOIN product_brands ON products.brand_id = product_brands.id
	INNER JOIN product_categories ON products.category_id = product_categories.id
	INNER JOIN product_image ON products.id = product_image.id";


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

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
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
								<a href="product-details.php?product_id='. $row['id'] .'">
									<div class="product-card">
										<div class="container hover-slide-images-toggler">
											<div class="row banner-hover">
												<div class="col hover-item"></div>
												<div class="col hover-item"></div>
												<div class="col hover-item"></div>
												<div class="banner">
													<div class="banner-item active">
														<img src="../products/'. $row['product_image_1'] .'" alt="" class="img-responsive" style="width: 10rem; height: auto">
													</div>
													<div class="banner-item">
														<img src="../products/'. $row['product_image_2'] .'" alt="" class="img-responsive" style="width: 10rem; height: auto">
													</div>
													<div class="banner-item">
														<img src="../products/'. $row['product_image_3'] .'" alt="" class="img-responsive" style="width: 10rem; height: auto">
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
								<a href="product-details.php?product_id='. $row['id'] .'">
									'. $row['name'] .'
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
										<ins>'. number_format($row['price']) .' đ</ins>
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
			';
		}
	}
	else
	{
		$output = '<h3>Không có sản phẩm nào</h3>';
	}
	echo $output;
}

?>

<script src="../js/app.js"></script>