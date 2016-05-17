(function($){

    // Smooth ScrollTo
    $(document).ready(function() {
        $('.scrollTo').click( function() {
            var page = $(this).attr('href');
            var speed = 750;
            $('html body').animate( { scrollTop: $(page).offset().top }, speed );
            return false;
        });
    });

    // HOME FOUR PART TEXT SLIDER
    $(document).ready(function(){
       $('#valorWrap').click(function(){
           if($('#valorOne').width() == 0){
               $('#valorOne').animate({width :'33%'}, 0);
               $('#valorOne h3, #valorOne p').fadeIn(1700);
           }
           if(($('#valorOne').width() > 0)){
               $('#valorOne').animate({width :'0%'}, 0);
               $('#valorOne h3, #valorOne p').fadeOut(200);
               $('#valors').toggleClass('col-md-7 col-md-12');
               $('#valorWrap, #valorJacque, #valorSalade, #valorTartine').toggleClass('col-md-3 col-md-2');
           } else if($('#valorTwo').width() > 0){
               $('#valorTwo').animate({width :'0%'}, 0);
               $('#valorTwo h3, #valorTwo p').fadeOut(200);
           } else if(($('#valorThree').width() > 0)){
               $('#valorThree').animate({width :'0%'}, 0);
               $('#valorThree h3, #valorThree p').fadeOut(200);
           } else if(($('#valorFour').width() > 0)){
               $('#valorFour').animate({width :'0%'}, 0);
               $('#valorFour h3, #valorFour p').fadeOut(200);
           } else {
               $('#valors').toggleClass('col-md-7 col-md-12');
               $('#valorWrap, #valorJacque, #valorSalade, #valorTartine').toggleClass('col-md-3 col-md-2');
           }
       });
        $('#valorJacque').click(function(){
            if($('#valorTwo').width() == 0){
                $('#valorTwo').animate({width :'33%'}, 0);
                $('#valorTwo h3, #valorTwo p').fadeIn(1700);
            }
            if(($('#valorOne').width() > 0)){
                $('#valorOne').animate({width :'0%'}, 0);
                $('#valorOne h3, #valorOne p').fadeOut(200);
            } else if($('#valorTwo').width() > 0){
                $('#valorTwo').animate({width :'0%'}, 0);
                $('#valorTwo h3, #valorTwo p').fadeOut(200);
                $('#valors').toggleClass('col-md-7 col-md-12');
                $('#valorWrap, #valorJacque, #valorSalade, #valorTartine').toggleClass('col-md-3 col-md-2');
            } else if(($('#valorThree').width() > 0)){
                $('#valorThree').animate({width :'0%'}, 0);
                $('#valorThree h3, #valorThree p').fadeOut(200);
            } else if(($('#valorFour').width() > 0)){
                $('#valorFour').animate({width :'0%'}, 0);
                $('#valorFour h3, #valorFour p').fadeOut(200);
            } else {
                $('#valors').toggleClass('col-md-7 col-md-12');
                $('#valorWrap, #valorJacque, #valorSalade, #valorTartine').toggleClass('col-md-3 col-md-2');
            }
        });
        $('#valorSalade').click(function(){
            if($('#valorThree').width() == 0){
                $('#valorThree').animate({width :'33%'}, 0);
                $('#valorThree h3, #valorThree p').fadeIn(1700);
            }
            if(($('#valorOne').width() > 0)){
                $('#valorOne').animate({width :'0%'}, 0);
                $('#valorOne h3, #valorOne p').fadeOut(200);
            } else if($('#valorTwo').width() > 0){
                $('#valorTwo').animate({width :'0%'}, 0);
                $('#valorTwo h3, #valorTwo p').fadeOut(200);
            } else if(($('#valorThree').width() > 0)){
                $('#valorThree').animate({width :'0%'}, 0);
                $('#valorThree h3, #valorThree p').fadeOut(200);
                $('#valors').toggleClass('col-md-7 col-md-12');
                $('#valorWrap, #valorJacque, #valorSalade, #valorTartine').toggleClass('col-md-3 col-md-2');
            } else if(($('#valorFour').width() > 0)){
                $('#valorFour').animate({width :'0%'}, 0);
                $('#valorFour h3, #valorFour p').fadeOut(200);
            } else {
                $('#valors').toggleClass('col-md-7 col-md-12');
                $('#valorWrap, #valorJacque, #valorSalade, #valorTartine').toggleClass('col-md-3 col-md-2');
            }
        });
        $('#valorTartine').click(function(){
            if($('#valorFour').width() == 0){
                $('#valorFour').animate({width :'33%'}, 0);
                $('#valorFour h3, #valorFour p').fadeIn(1700);
            }
            if(($('#valorOne').width() > 0)){
                $('#valorOne').animate({width :'0%'}, 0);
                $('#valorOne h3, #valorOne p').fadeOut(200);
            } else if($('#valorTwo').width() > 0){
                $('#valorTwo').animate({width :'0%'}, 0);
                $('#valorTwo h3, #valorTwo p').fadeOut(200);
            } else if(($('#valorThree').width() > 0)){
                $('#valorThree').animate({width :'0%'}, 0);
                $('#valorThree h3, #valorThree p').fadeOut(200);
            } else if(($('#valorFour').width() > 0)){
                $('#valorFour').animate({width :'0%'}, 0);
                $('#valorFour h3, #valorFour p').fadeOut(200);
                $('#valors').toggleClass('col-md-7 col-md-12');
                $('#valorWrap, #valorJacque, #valorSalade, #valorTartine').toggleClass('col-md-3 col-md-2');
            } else {
                $('#valors').toggleClass('col-md-7 col-md-12');
                $('#valorWrap, #valorJacque, #valorSalade, #valorTartine').toggleClass('col-md-3 col-md-2');
            }
        });
    });

    // Menu Discover
    $(document).ready(function(){
        $('.discoverMenu').click(function(){
            var menu = $(this).attr('id').replace(/discoverMenu-/, '');
            $('#menuDiscovered-' + menu).fadeIn(800);
        });
        $('.close').click(function(){
            var close = $(this).attr('id').replace(/close-/, '');
            $('#menuDiscovered-' + close).fadeOut(800);
        });
    });

    // Contact File Input
    $(document).ready(function(){
        $('#fileButton').click(function(){
            $('#inputFile').click();
        });
        $('#inputFile').change(function(){
            var file = $('#inputFile').val().replace(/C:\\fakepath\\/i, '');
            if (file !== null) {
                if ($('#inputFileText').val() !== null) {
                    $($('#inputFileText')).empty();
                }
                $('<span>' + file + '</span>').appendTo('#inputFileText');
            }
        });
    });

})(jQuery);