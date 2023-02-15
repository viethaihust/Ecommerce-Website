<?php

ob_start();
include('../functions.php');

@include 'config.php';
header("Cache-Control: no cache");
session_start();
if(!isset($_SESSION['user_id'])){
    header('location:login_form.php');
}
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
    <?php
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
                    <input type="hidden" id="hidden_maximum_price" value="35000000" />
                    <p id="price_show">0 đ &ensp;-&ensp; 35,000,000 đ</p>
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
                
                </div>
            </div>

        </div>

    </div>

    <?php
        include_once('../include/site-footer.php');
    ?>

<style>
#loading
{
	text-align:center;
	background: url('loader.gif') no-repeat center;
	height: 150px;
}
</style>
    
<script src="https://code.iconify.design/2/2.1.1/iconify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous">
</script>


<script src="../js/jquery.js"></script>
<script src="../js/app.js"></script>
    
<script>
$(document).ready(function(){

filter_data();

function filter_data()
{
    $('.filter_data').html('<div id="loading" style="" ></div>');
    var action = 'fetch_data';
    var minimum_price = $('#hidden_minimum_price').val();
    var maximum_price = $('#hidden_maximum_price').val();
    var category = get_filter('category');
    var brand = get_filter('brand');

    $.ajax({
        url:"fetch_data.php",
        method:"POST",
        data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, category:category, brand:brand},
        success:function(data){
            $('.filter_data').html(data);
        }
    });
}

function get_filter(class_name)
{
    var filter = [];
    $('.'+class_name+':checked').each(function(){
        filter.push($(this).val());
    });
    return filter;
}

$('.common_selector').click(function(){
    filter_data();
});

$('#price_range').slider({
    range:true,
    min:0,
    max:35000000,
    values:[0, 35000000],
    step:1000000,
    stop:function(event, ui)
    {
        $('#price_show').html((ui.values[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,") + " đ") + ' &emsp;&ensp; &ndash; &emsp;&ensp; ' + (ui.values[1].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,") + " đ"));
        $('#hidden_minimum_price').val(ui.values[0]);
        $('#hidden_maximum_price').val(ui.values[1]);
        filter_data();
    }
});

});

</script>

</body>

</html>
