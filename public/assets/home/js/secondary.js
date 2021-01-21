
$(document).ready(function() {
$('.product__count__minus').click(function () {
  var $input = $(this).parent().find('.product__count__text');
  var count = parseInt($input.val()) - 1;
  count = count < 1 ? 1 : count;
  $input.val(count);
  $input.change();
  return false;
});


$('.product__count__plus').click(function () {
  var $input = $(this).parent().find('.product__count__text');
  $input.val(parseInt($input.val()) + 1);
  $input.change();
  return false;
});
});



$('.delete__table').on('click', function(event) {
  $(this).parents('tr').remove();
});
  $(document).ready(function(){
    $("#checkout__block__button1").click(function(){
    $("#checkout__button1__content").toggle();
  });
});
  $(document).ready(function(){
    $("#checkout__block__button2").click(function(){
    $("#checkout__button2__content").toggle();
  });
});

$('.tab-links2').click( function() {
  var tabID = $(this).attr('data-tab');
  $(this).addClass('active').siblings().removeClass('active');
  $('#tab-'+tabID).addClass('active').siblings().removeClass('active');
});

 $(function() {
    var $tabButtonItem = $('#tab-button li'),
        $tabSelect = $('#tab-select'),
        $tabContents = $('.tab-contents'),
        activeClass = 'is-active';

    $tabButtonItem.first().addClass(activeClass);
    $tabContents.not(':first').hide();

    $tabButtonItem.find('a').on('click', function(e) {
      var target = $(this).attr('href');

      $tabButtonItem.removeClass(activeClass);
      $(this).parent().addClass(activeClass);
      $tabSelect.val(target);
      $tabContents.hide();
      $(target).show();
      e.preventDefault();
    });

    $tabSelect.on('change', function() {
      var target = $(this).val(),
          targetSelectNum = $(this).prop('selectedIndex');

      $tabButtonItem.removeClass(activeClass);
      $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
      $tabContents.hide();
      $(target).show();
    });
});

$(document).ready(function() {
  var $window = $(window);  
  var $sidebar = $(".sidebar"); 
  var $sidebarHeight = $sidebar.innerHeight();   
  var $footerOffsetTop = $(".banner2").offset().top; 
  var $sidebarOffset = $sidebar.offset();
  
  $window.scroll(function() {
    if($window.scrollTop() > $sidebarOffset.top) {
      $sidebar.addClass("fixed");   
    } else {
      $sidebar.removeClass("fixed");   
    }    
    if($window.scrollTop() + $sidebarHeight > $footerOffsetTop) {
      $sidebar.css({"top" : -($window.scrollTop() + $sidebarHeight - $footerOffsetTop)});        
    } else {
      $sidebar.css({"top": "0"});  
    }    
  });   

  
});



$("#aa").slider({
  min: 0,
  max: 1000,
  range: true,
  values: [200, 800]
})

.slider("pips", {
  rest: "label"
})

.slider("float");

 $( "#price" ).val( "$" + $( "#aa" ).slider( "values", 0 ) +
            " - $" + $( "#aa" ).slider( "values", 1 ) );
