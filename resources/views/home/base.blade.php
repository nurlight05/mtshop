<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('assets/home/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/home/css/basic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/range.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/slick/slick-theme.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/home/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/home/css/simplePagination.css') }}"/>
    
    <link rel="stylesheet" href="sample/breadcrumbs.css">

	<link rel="stylesheet" href="{{ asset('assets/home/css/responsive.css') }}">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<body>
    @include('home.includes.header')
    @yield('content')
    @include('home.includes.footer')
</body>
<div class="mobile-action">
    <a href="#mobile-category">
        <img src="{{ asset('assets/home/img/icons/hamburger.png') }}">
        <span>Каталог</span>
    </a>
    <a href="#mobile-city">
        <img src="{{ asset('assets/home/img/icons/location.png') }}" style=""><span>Город</span>
    </a>
    <a href="{{ route('mtshop.home.index') }}">
        <img src="{{ asset('assets/home/img/icons/home.png') }}"><span>Домой</span> 
    </a>
    <a href="{{ route('mtshop.cart.index') }}">
        <img src="{{ asset('assets/home/img/icons/basket_mobile.png') }}" style=""><span>Корзина</span>
    </a>
    <a href="tel:+77007002214">
        <img src="{{ asset('assets/home/img/icons/phone.png') }}"><span>Позвонить</span>
    </a>
</div>
      <!-- Modal -->

<div id="mobile-category" class="overlay">
    <div class="popup">
        <a class="close" id="closeModal" href="#">×</a>
        <h2 id="modal-title">Каталог товаров</h2>
        <a href="" class="titles">Сантехника</a>
        <a href="" class="titles">Стройматериалы</a>
        <a href="" class="titles">Электротовары</a>
        <a href="" class="titles">        Сад, огород и дача</a>
        <a href="" class="titles">Активный отдых и спорт</a>
        <a href="" class="titles">Товары для дома</a>
        <a href="" class="titles">Бытовая техника</a>
    </div>
</div>
<div id="mobile-city" class="overlay">
    <div class="popup">
        <a class="close" id="closeModal" href="#">×</a>
        <span id="modal-title">Выберите город: Казахстане</span>
        <div class="mcities">
            <a href="/functions/siteActions.php?city=Алматы&amp;url=/">Алматы</a>
            <a href="/functions/siteActions.php?city=Нур-Султан&amp;url=/">Нур-Султан</a>
            <a href="/functions/siteActions.php?city=Актобе&amp;url=/">Актобе</a>
            <a href="/functions/siteActions.php?city=Актау&amp;url=/">Актау</a>
            <a href="/functions/siteActions.php?city=Талдыкорган&amp;url=/">Талдыкорган</a>
            <a href="/functions/siteActions.php?city=Тараз&amp;url=/">Тараз</a>
            <a href="/functions/siteActions.php?city=Шымкент&amp;url=/">Шымкент</a>
            <a href="/functions/siteActions.php?city=Усть-Каменогорск&amp;url=/">Усть-Каменогорск</a>
            <a href="/functions/siteActions.php?city=Караганда&amp;url=/">Караганда</a>
            <a href="/functions/siteActions.php?city=Кызылорда&amp;url=/">Кызылорда</a>
            <a href="/functions/siteActions.php?city=Уральск&amp;url=/">Уральск</a>
        </div>
    </div>
</div>
<div id="mobile-menu" class="overlay">
        <div class="popup">
            <a class="close" id="closeModal" href="#">×</a>
            <h2 id="modal-title">Навигация по сайту</h2>
            <a href="{{ route('mtshop.about.index') }}" class="titles">О компании</a>
            <a href="{{ route('mtshop.about.index') }}" class="titles">Доставка</a>
            <a href="{{ route('mtshop.about.index') }}" class="titles">Гарантии</a>
            <a href="{{ route('mtshop.about.index') }}" class="titles">Оплата</a>
            <a href="{{ route('mtshop.about.index') }}" class="titles">Вопросы и ответы</a>
            <a href="{{ route('mtshop.about.index') }}" class="titles">Договор публичной оферты</a>
            <a href="{{ route('mtshop.about.index') }}" class="titles">Поставщикам</a>
            <a href="{{ route('mtshop.about.index') }}" class="titles" style="margin-bottom: 20px;">Обмен и возврат</a>
            <a href="tel:+7700000000" class="titles2">
                <span>
                    <i class="fa fa-phone" aria-hidden="true"></i>+7 (707) 000 00 00
                </span>
            </a>
            <a href="" class="titles2">
                <i class="far fa-envelope-open"></i>online-shop@gmail.com
            </a>    
        </div>
</div>
<div id="mobile-filter" class="overlay">
        <div class="popup">
            <a class="close" id="closeModal" href="#">×</a>
            <h2 id="modal-title">Фильтр</h2>
            <div class="filter-options-content" style="display: block;">  
                <form action="">
                    <div class="shop-sidebar">
                        <span class="sidebar-title">Товар
                        </span>
                        <div class="sidebar-tags">
                            <div class="radio">
                                <input id="radio-3" name="radio" type="radio" checked>
                                <label for="radio-3" class="radio-label">Есть в наличий</label>
                            </div>
                            <div class="radio">
                                <input id="radio-4" name="radio" type="radio">
                                <label  for="radio-4" class="radio-label">Все товары</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter level-filter level-req">
                        <div id="rangeSlider2" class="range-slider">
                            <span>Цена</span>
                            <div class="number-group">
                                с
                                <input class="number-input" type="number" placeholder="c" value="30" min="30" max="432000" />
                                до  
                                <input class="number-input" type="number" placeholder="до" value="432000" min="30" max="432000" />
                            </div>
                            <div class="range-group">
                                <input class="range-input" value="30" min="30" max="432000" step="10" type="range" />
                                <input class="range-input" value="432000" min="30" max="432000" step="10" type="range" />
                            </div>
                        </div>
                    </div>
                    <div class="category__items__brend">
                        <span>Бренд</span> 
                        <div class="category__items__brend__list scrollbar-deep-purple thin">
                            <div>
                                <input type="checkbox" id="test1" />
                                <label for="test1">Audi</label>
                            </div>
                            <div>
                                <input type="checkbox" id="test2" />
                                <label for="test2">BMW</label>
                            </div>
                            <div>
                                <input type="checkbox" id="test3" />
                                <label for="test3">KIA</label>
                            </div>
                            <div>
                                <input type="checkbox" id="test4" />
                                <label for="test4">Toyota</label>
                            </div>
                            <div>
                                <input type="checkbox" id="test5" />
                                <label for="test5">Mazda</label>
                            </div>
                            <div>
                                <input type="checkbox" id="test6" />
                                <label for="test6">Honda</label>
                            </div>
                            <div>
                                <input type="checkbox" id="test7" />
                                <label for="test7">Tesla</label>
                            </div>
                            <div>
                                <input type="checkbox" id="test8" />
                                <label for="test8">Ford</label>
                            </div>
                        </div>
                    </div>
                    <div class="category__items__apply">
                        <button class="btn-2 btn-apply" type="submit" >
                            Применить
                        </button>
                    </div>
                </form>
            </div>
        </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('assets/home/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/home/js/secondary.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/home/js/jquery.simplePagination.js') }}"></script>
<script src="{{ asset('assets/home/slick/slick.js') }}"></script>
<script src="{{ asset('assets/home/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/home/js/main.js') }}"></script>
<script src="{{ asset('assets/home/js/range.js') }}"></script>
<script src="https://rawgit.com/simeydotme/jQuery-ui-Slider-Pips/master/src/js/jquery-ui-slider-pips.js"></script>
<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script src="{{ asset('assets/home/js/jquery.breadcrumbs-generator.js') }}"></script>
<script src="{{ asset('assets/home/js/popper.js') }}"></script>
<script src="{{ asset('assets/home/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/home/js/bootstrap.min.js') }}"></script>
<script>
    var items = $(".category__cards__grid .category__cards__grid__item");
    var numItems = items.length;
    var perPage = 20;

    items.slice(perPage).hide();

    $('#pagination-container').pagination({
        items: numItems,
        itemsOnPage: perPage,
        prevText: "&laquo;",
        nextText: "&raquo;",
        onPageClick: function (pageNumber) {
            var showFrom = perPage * (pageNumber - 1);
            var showTo = showFrom + perPage;
            items.hide().slice(showFrom, showTo).show();
        }
    });
</script>
<script>
  (function() {
    var parent = document.querySelector("#rangeSlider");
    if(!parent) return;
    var
    rangeS = parent.querySelectorAll("input[type=range]"),
      numberS = parent.querySelectorAll("input[type=number]");
    rangeS.forEach(function(el) {
      el.oninput = function() {
        var slide1 = parseFloat(rangeS[0].value),
          slide2 = parseFloat(rangeS[1].value);

        if (slide1 > slide2) {
          [slide1, slide2] = [slide2, slide1];
        }
        numberS[0].value = slide1;
        numberS[1].value = slide2;
      }
    });
    numberS.forEach(function(el) {
      el.oninput = function() {
        var number1 = parseFloat(numberS[0].value),
          number2 = parseFloat(numberS[1].value);

        if (number1 > number2) {
          var tmp = number1;
          numberS[0].value = number2;
          numberS[1].value = tmp;
        }

        rangeS[0].value = number1;
        rangeS[1].value = number2;
      }
    });
  })();
</script>
<script>
  (function() {
    var parent = document.querySelector("#rangeSlider2");
    if(!parent) return;
    var
    rangeS = parent.querySelectorAll("input[type=range]"),
      numberS = parent.querySelectorAll("input[type=number]");
    rangeS.forEach(function(el) {
      el.oninput = function() {
        var slide1 = parseFloat(rangeS[0].value),
          slide2 = parseFloat(rangeS[1].value);

        if (slide1 > slide2) {
          [slide1, slide2] = [slide2, slide1];
        }
        numberS[0].value = slide1;
        numberS[1].value = slide2;
      }
    });
    numberS.forEach(function(el) {
      el.oninput = function() {
        var number1 = parseFloat(numberS[0].value),
          number2 = parseFloat(numberS[1].value);

        if (number1 > number2) {
          var tmp = number1;
          numberS[0].value = number2;
          numberS[1].value = tmp;
        }

        rangeS[0].value = number1;
        rangeS[1].value = number2;
      }
    });
  })();
</script>
<script>
    var number1 = parseInt(document.getElementsById('a__calc').value), number2 = parseInt(document.getElementsById('b__calc').value), numbers;
 
    // В переменную total_fruits заносим сумму двух переменных
 
    numbers = (number1) + (number2)
    document.write(numbers);
    document.getElementById('result__calc').Text = numbers;
</script>
@stack('scripts')
</html>