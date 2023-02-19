$(function() {

filter_data();

function filter_data()
{

    $('.filter_data').html('<div id="loading" ></div>');
    var action = 'Filter';
    var minimum_price = $('#hidden_minimum_price').val();
    var maximum_price = $('#hidden_maximum_price').val();
    var category = get_filter('category');
    var brand = get_filter('brand');

    $.ajax({
        url:"action.php",
        method:"POST",
        data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, category:category, brand:brand},
        success:function(data){
            $('.filter_data').html(data);

            /*Product Slider*/
            const slideContainer = document.querySelectorAll(".product-card");
            for(let i=0; i<slideContainer.length; i++){
                function slider() {

                    const banneritems = slideContainer[i].querySelectorAll(".banner-item")
                    const hoveritems = slideContainer[i].querySelectorAll(".hover-item")
                    const slideiconbelows = slideContainer[i].querySelectorAll(".slide-icon-below")

                    var slideNum = 0
                    function manual(slideNum) {
                        slideiconbelows.forEach((slideiconbelow) => {
                            slideiconbelow.classList.remove("active")
                            banneritems.forEach((banneritem) => {
                                banneritem.classList.remove("active")
                            })
                        })
                        slideiconbelows[slideNum].classList.add("active")
                        banneritems[slideNum].classList.add("active")
                    }

                    hoveritems.forEach((hoveritem, i) => {
                        hoveritem.addEventListener("mouseover", () => {
                            manual(i)
                            slideNum = i
                        })
                    })

                }
                slider();
            };

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
    max:70000000,
    values:[0, 70000000],
    step:1000000,
    stop:function(event, ui)
    {
        $('#price_show').html((ui.values[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,") + " đ") + ' &emsp; &ndash; &emsp; ' + (ui.values[1].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,") + " đ"));
        $('#hidden_minimum_price').val(ui.values[0]);
        $('#hidden_maximum_price').val(ui.values[1]);
        filter_data();
    }
});

});