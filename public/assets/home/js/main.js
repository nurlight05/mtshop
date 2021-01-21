 /* главный баннер main*/
$('.main__first').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  arrows: false
});

/* баннер с партнерами main*/

$('.banner__sl').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 5,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 2000,
   responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 570,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 410,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        }

        ]
});
  
/* фото продукта */
  $('.sl').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.sl2'
});
$('.sl2').slick({
  slidesToShow: 3,
  asNavFor: '.sl',
  dots: false,
  arrows: true,
  centerMode: false,
  focusOnSelect: true
});

/* похожие товары грид*/

$('.similar__grid__slider').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 5,
  arrows: true,
    responsive: [
        {
            breakpoint: 1256,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 883,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 591,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 377,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }]
});

$(function() {
  // Reference the tab links.
  const tabLinks = $('#tab-links li a');
  
  // Handle link clicks.
  tabLinks.click(function(event) {
    var $this = $(this);
    
    // Prevent default click behaviour.
    event.preventDefault();
    
    // Remove the active class from the active link and section.
    $('#tab-links a.active, section.active').removeClass('active');
    
    // Add the active class to the current link and corresponding section.
    $this.addClass('active');
    $($this.attr('href')).addClass('active');
  });
});

$(function(){
$(".dropdown-menu > li > a.trigger").on("mouseover",function(e){
    var current=$(this).next();
    var grandparent=$(this).parent().parent();
    if($(this).hasClass('left-caret')||$(this).hasClass('right-caret'))
        $(this).toggleClass('right-caret left-caret');
    grandparent.find('.left-caret').not(this).toggleClass('right-caret left-caret');
    grandparent.find(".sub-menu:visible").not(current).hide();
    current.toggle();
    e.stopPropagation();
});
$(".dropdown-menu > li > a:not(.trigger)").on("click",function(){
    var root=$(this).closest('.dropdown');
    root.find('.left-caret').toggleClass('right-caret left-caret');
    root.find('.sub-menu:visible').hide();
});
});

/* подтверждение согласия*/
$('#conf').click(function() {
  if ($(this).is(':checked')) {
    $('#submit').removeAttr('disabled');
  } else {
    $('#submit').attr('disabled', 'disabled');
  }
});
$('#checkbox__basket').click(function() {
  if ($(this).is(':checked')) {
    $('#submit2').removeAttr('disabled');
  } else {
    $('#submit2').attr('disabled', 'disabled');
  }
});