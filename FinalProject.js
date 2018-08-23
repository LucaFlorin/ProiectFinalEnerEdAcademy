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
                $('.popup2_width').toggleClass('popup2_width2');
                    $('.popup2_height').toggleClass('popup2_height2');
                        $('.video_box').toggleClass('video_box2');    
    });

    $('.popup2').click(function(){
            $('.popup2').fadeOut();
    
    })


    $('.s3_input_box').click(function(){
        $('.s3_input_click').toggleClass('s3_input_active');
                 
          /*  $('.s3_input_click').fadeIn();
             $('.s3_input_click').animate({right: "175px", top:"237px"}, 400); */

            
    });

        /* $('.s3_input_box').click(function(){
                $('.s3_input_click').fadeOut();
                    $('.s3_input_click').animate({right: "350px", top:"300px"}, 300);
            });  */


            $('.popup2_height').get(0).stopVideo();
        


});

