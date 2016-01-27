////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// jQuery
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$(document).ready(function($) {
    "use strict";

    $(".nav-toggle").on('click',function (e) {
        $(".main-nav nav").toggleClass("show-nav");
    });

//  Revolution Slider

    if( $(".rev-slider").length ){
        $(".rev-slider").revolution({
            sliderType:"standard",
            sliderLayout:"hero",
            delay:9000,
            gridheight:650,
            navigation: {
                arrows:{enable:true}
            }
        });
    }

//  Calendar

    if( $(".calendar").length ){
        $(".calendar").zabuto_calendar({
            ajax: {
                url: "assets/external/calendar.php",
                modal: true
            },
            action: function () {
                return checkDate(this.id);
            },
            language: "en",
            show_previous: false,
            today: true,
            nav_icon: {
                prev: '<i class="arrow_left"></i>',
                next: '<i class="arrow_right"></i>'
            }
        });
    }

//  Smooth Scroll

    $('.main-nav a[href^="#"], a[href^="#"].scroll').on('click',function (e) {
        e.preventDefault();
        var target = this.hash,
            $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 2000, 'swing', function () {
            window.location.hash = target;
        });
    });

//  Radio buttons in modal

    $(".times .btn").on("click", function() {
        $(this).parent().find("input[type=radio]").attr("checked", false);
        $(this).find("input[type=radio]").attr("checked", true);
    });

//  Owl Carousel

    if( $(".owl-carousel").length ){
        $(".owl-carousel").owlCarousel({
            margin:30,
            items: 4,
            navText: []
        });
    }

//  Fit Videos

    if( $(".video").length ){
        $(".video").fitVids();
    }

//  Form Validation





/* DO YOU WANT A SUCCESFUL LIFE FORM*/

    $("#form-successful button").on("click", function(){

        $("#form-successful").validate({

            submitHandler: function() {

                $.post("assets/external/successful.php", $("#form-successful").serialize(),  function(response) {

                    $('#form-successful .form-status').html(response);

                   // $('#form-subscribe button').attr('disabled','true');

                });

                return false;

            }

        });

    });
	// *******************************    animate blocks ******************************
 /*
 $(function () {
    var $window = $(window), win_height_padded = $window.height() * 1.1; //isTouch = Modernizr.touch;
  //  if (isTouch) {
  //      $('.revealOnScroll').addClass('animated');
  //  }
    $window.on('scroll', revealOnScroll);
    function revealOnScroll() {
        var scrolled = $window.scrollTop(), win_height_padded = $window.height() * 1.1;
        $('.revealOnScroll:not(.animated)').each(function () {
            var $this = $(this), offsetTop = $this.offset().top;
            if (scrolled + win_height_padded > offsetTop) {
                if ($this.data('timeout')) {
                    window.setTimeout(function () {
                        $this.addClass('animated ' + $this.data('animation'));
                    }, parseInt($this.data('timeout'), 10));
                } else {
                    $this.addClass('animated ' + $this.data('animation'));
                }
            }
        });
        $('.revealOnScroll.animated').each(function (index) {
            var $this = $(this), offsetTop = $this.offset().top;
            if (scrolled + win_height_padded < offsetTop) {
                $(this).removeClass('animated fadeInUpBig flipInX lightSpeedIn');
            }
        });
    }
    revealOnScroll();
});
*/
 // *************************************************************************************8	
    // Mailchimp Subscribtion Form
/*
    (function(){

    $('#mailchimp-form').ajaxChimp({
        callback: mailchimpCallback,
        url: "http://siddheshkhelya.us12.list-manage.com/subscribe/post?u=0724aed25046064d3d83ea363&id=cf639074a8" //Replace this link with your mailchimp post URL 
    });

    function mailchimpCallback(resp) {

        $('#subscribe-result').fadeIn();

        if (resp.result === 'success') {

            $('#subscribe-result .sub-error').fadeOut('slow').html('');
            $('#subscribe-result .sub-success').html(resp.msg).fadeIn('slow');
        }
        if (resp.result === 'error') {

            
            $('#subscribe-result .sub-success').fadeOut('slow').html('');
            $('#subscribe-result .sub-error').html(resp.msg).fadeIn('slow');
            
        }
    }

    })();
	*/
	

/*  WHITE LIGHT MEDITATION FORM*/

    $("#form-whitelight button").on("click", function(){

        $("#form-whitelight").validate({

            submitHandler: function() {

                $.post("assets/external/whitelight.php", $("#form-whitelight").serialize(),  function(response) {

                    $('#form-whitelight input').val(response);

                    //$('#form-daily-motivation button').attr('disabled','true');

                });

                return false;

            }

        });

    });



    $("#form-contact button").on("click", function(){

        $("#form-contact").validate({

            submitHandler: function() {

                $.post("assets/external/contact.php", $("#form-contact").serialize(),  function(response) {

                    $('#form-contact .form-status').html(response);

                   // $('#form-contact button').attr('disabled','true');

                });

                return false;

            }

        });

    });

	

	/* THE CALENDAR FORM*/

		$("#form-calendar button").on("click", function(){

			//    $("#form-calendar").validate({

			  //      submitHandler: function() {

						$.post("assets/external/calendar_appointment.php", $("#form-calendar").serialize(),  function(response) {

							$('#form-calendar .form-status').html(response);

						   // $('#form-subscribe button').attr('disabled','true');

						});

						return false;

				 //   }

			 //   });

			});

	

});



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// On Load

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



$(window).load(function(){

    var $equalHeight = $('.container');

    for( var i=0; i<$equalHeight.length; i++ ){

        equalHeight( $equalHeight );

    }

});



$(window).resize(function(){

    var $equalHeight = $('.container');

    for( var i=0; i<$equalHeight.length; i++ ){

        equalHeight( $equalHeight );

    }

});



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Functions

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



function checkDate(id) {

    var date = $("#" + id).data("date");

    var hasEvent = $("#" + id).data("hasEvent");

    $('#modal').modal();

}



function equalHeight(container){

    var currentTallest = 0,

        currentRowStart = 0,

        rowDivs = new Array(),

        $el,

        topPosition = 0;



    $(container).find('.equal-height').each(function() {

        $el = $(this);

        $($el).height('auto');

        topPostion = $el.position().top;

        if (currentRowStart != topPostion) {

            for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {

                rowDivs[currentDiv].height(currentTallest);

            }

            rowDivs.length = 0; // empty the array

            currentRowStart = topPostion;

            currentTallest = $el.height();

            rowDivs.push($el);

        } else {

            rowDivs.push($el);

            currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);

        }

        for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {

            rowDivs[currentDiv].height(currentTallest);

        }

    });

}
