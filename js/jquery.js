filter_data();

function filter_data()
{   
    document.querySelector('.category-all').addEventListener('click', () => {
        document.querySelector('.category-menu').classList.toggle('active')
    })
    
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

$("#price_range").slider({
    range: true,
    min:0,
    max:35000000,
    values:[0, 35000000],
    step:1000000,
    stop: function (event, ui) {
        $('#price_show').html((ui.values[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,") + " đ") 
        + ' &ensp;-&ensp; ' + (ui.values[1].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,") + " đ"));
        $('#hidden_minimum_price').val(ui.values[0]);
        $('#hidden_maximum_price').val(ui.values[1]);
        filter_data();                
    }
});

