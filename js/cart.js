$(function() {
    $("form[name*='DeleteCartForm']").on('submit', function(event){
		event.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type : 'POST',
			dataType: "json",	
			url : 'action.php',	
			data : formData,
			success:function(response){
				if(response.success == 1) {
					window.location.reload();
				}
			},
            error:function(data){
                alert(JSON.stringify(data));
            }
		});		
	});

    $("form[name*='AddToCartForm']").on('submit', function(event){
		event.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type : 'POST',
			dataType: "json",	
			url : 'action.php',	
			data : formData,
			success:function(response){
				if(response.success == 1) {
					$('#cart_reset').load(document.URL + ' #cart_reset');
					$('#product-details_purchase-info').load(document.URL + ' #product-details_purchase-info');
				}
			},
            error:function(data){
                alert(JSON.stringify(data));
            }
		});		
	});
});