$(document).ready(function(){
    $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });



    $(window).on("scroll", function() {
        if($(window).scrollTop() > 180) {
            $(".inner_section1_bottom").addClass("header_active");
        } else {
           $(".inner_section1_bottom").removeClass("header_active");
        }
    });

    $('.s11v2_button2').click(function(){
        var imagine = $(this).parent().parent().prev().attr('src');
            $('.image_container').attr('src', imagine);
                $('.popup').fadeIn(300);

    });

    $('.popup').click(function(){
            $('.popup').fadeOut();
    
    })


    $('.s3_burger_menu').click(function(){
        $('.s3_burger_list').slideToggle(600);
    });

    
    $('.burger_menu2').click(function(){
        $('.burger_menu2_list').slideToggle(600);
    });

    $('.burger_menu3').click(function(){
        $('.burger_menu3_list').slideToggle(600);
    });

    $('.burger_menu4').click(function(){
        $('.burger_menu4_list').slideToggle(600);
    });


    $('.burger_menu5').click(function(){
        $('.burger_menu5_list').slideToggle(600);
    });




    $('.playbutton').click(function(){
            $('.popup2').fadeIn(500);             
    });

    $('.popup2').click(function(){
            $('.popup2').fadeOut();
    
    })

    $('.playbutton').click(function(){
        var popping = $('.inner_popup2');
        popping.animate({height: '300px', opacity: '1'}, "slow");
        popping.animate({width: '300px', opacity: '1'}, "slow");
    });


});

