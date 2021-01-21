@extends('home.base')

@section('title', 'Поиск')
    
@section('content')
<div class="f-container">
	<section class="category">
		<div class="row">
			<div class="col-lg-3">
				<div id="sidebarWrap">
					<div class="category__items " id="sidebar">
						<label for="" class="category__items__title">
							Категория
						</label>
						<ul class="category__items__list">
							<li>
								<a href="#" class="active">Аккумуляторные инструменты </a>
							</li>
							<li>
								<a href="#">Электроинструменты</a>
							</li>
							<li>
								<a href="#">Расходники для инструмента</a>
							</li>
							<li>
								<a href="#">Пневматические инструменты </a>
							</li>
							<li>
								<a href="#">Механические инструменты </a>
							</li>
							<li>
								<a href="#">Измерительные инструменты </a>
							</li>
							<li>
								<a href="#">Генераторы, компрессоры </a>
							</li>
							<li>
								<a href="#">Лестницы, помосты</a>
							</li>
							<li>
								<a href="#">Малярные инструменты</a>
							</li>
							<li>
								<a href="#">Сварочное оборудование</a>
							</li>
							<li>
								<a href="#">Средства защиты</a>
							</li>
							<li>
								<a href="#">Скотч </a>
							</li>
							<li>
								<a href="#">Ящики, емкости строительные	</a>
							</li>
						</ul>
						<form action="">
							<div class="filter level-filter level-req">
					            <div id="rangeSlider" class="range-slider">
									<span>Цена</span>
									<div class="number-group">
										<div class="">
											с
											<input class="number-input" type="number" placeholder="c" value="30" min="30" max="432000" />
										</div>
										<div class="">
											до  
											<input class="number-input" type="number" placeholder="до" value="432000" min="30" max="432000" />
										</div>
									</div>
									<div class="range-group">
										<input class="range-input" value="30" min="30" max="432000" step="10" type="range" />
										<input class="range-input" value="432000" min="30" max="432000" step="10" type="range" />
									</div>
					            </div>
					        </div>
					        <div class="shop-sidebar">
					            <span class="sidebar-title">Товар
					            </span>
				              	<div class="sidebar-tags">
				              		<form action="">
				              			<div class="radio">
											<input id="radio-1" name="radio" type="radio" checked>
											<label for="radio-1" class="radio-label">Есть в наличий</label>
										</div>
										<div class="radio">
											<input id="radio-2" name="radio" type="radio">
											<label  for="radio-2" class="radio-label">Все товары</label>
										</div>
				              		</form>
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
			<div class="col-lg-9 col-md-12">
				<div class="category__cards" id="main">
					<aside class="breadcrumbs">
						<a href="{{ route('mtshop.home.index') }}">
							Главная
						</a>
						<i class="fa fa-angle-right" aria-hidden="true">
						</i>
						<span class="current">
						  	Поиск
						</span>
					</aside>
					<span class="search__result">
						Результаты поиска для: 
						<span class="search__result__name">
							Молоток
						</span> 
						<span class="search__result__count">
							Найдено 11 товаров
						</span>
					</span>
					<div class="list-wrapper">
						<ul>  
							<li class="item-wrapper">
								<a class="item" href="">
									<span class="item-name">	Аккумуляторные инструменты
									</span>
								</a>
							</li>
							<li class="item-wrapper">
								<a class="item" href="">
									<span class="item-name">	Электроинструменты
									</span>
								</a>
							</li>
							<li class="item-wrapper">
								<a class="item" href="">
									<span class="item-name">	Расходники для инструмента
									</span>
								</a>
							</li>
							<li class="item-wrapper">
								<a class="item" href="">
									<span class="item-name">	Пневматические инструменты
									</span>
								</a>
							</li>
							<li class="item-wrapper">
								<a class="item" href="">
									<span class="item-name">	Лестницы, помосты
									</span>
								</a>
							</li>
							<li class="item-wrapper">
								<a class="item" href="">
									<span class="item-name">	Малярные инструменты
									</span>
								</a>
							</li>
							<li class="item-wrapper">
								<a class="item" href="">
									<span class="item-name">	Сварочное оборудование
									</span>
								</a>
							</li>
							<li class="item-wrapper">
								<a class="item" href="">
									<span class="item-name">	Средства защиты
									</span>
								</a>
							</li>
							<li class="item-wrapper">
								<a class="item" href="">
									<span class="item-name">	Скотч
									</span>
								</a>
							</li>
							<li class="item-wrapper">
								<a class="item" href="">
									<span class="item-name">	Ящики, емкости строительные
									</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="category__card__sort">
						<label>Показано все товары из каталка: <span>Инструменты</span></label>
						<div class="">
							<span class="">Страница:</span>
							<select class="page__number" id="page">
			                  <option value="1">1</option>
			                  <option value="2">2</option>
			                  <option value="3">3</option>
			                  <option value="4">4</option>
		             		</select>
						</div>
						<div class="">
							<span class="">Сортировка</span>
	             			<select id="sort__page">
								<option value="new">Новинки</option>
								<option value="popular">Популярные</option>
								<option value="similar">Похожие</option>
								<option value="discount">Скидки</option>
	             			</select>
						</div>
						<div class="category__mobile__filter">
							<img src="{{ asset('assets/home/img/icons/filter.png') }}" alt="">
							<a href="#mobile-filter">Фильтр</a>
						</div>
					</div>
					<div class="category__cards__grid">	
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="category__cards__grid__item card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
							     <a href="{{ route('mtshop.products.show') }}">DeWALT LAKA DWE4051</a> 
						    </h3>
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
				    </div>
				    <div id="pagination-container"></div>
				</div>
			</div>	
	    </div>				
	</section>
	<section class="banner2" id="banner2">
		<div class="row">
            <div class="col-lg-12">
                <div class="banner2__grid">
                    <div class="banner2__order__1">
                        <p class="banner2__year white">12<span class="banner2__year2 white"> лет</span>
                        <span class="banner2__item white">
                           Поставляем строительные материалы
                        </span>
                    </div>
                    <div class="banner2__order__2">
                        <img src="{{ asset('assets/home/img/banner/banner2_1.svg') }}" alt="">
                        <span class="banner2__item">
                            Доставка бесплатно
                        </span>
                    </div>
                    <div class="banner2__order__3">
                        <img src="{{ asset('assets/home/img/banner/banner2_2.svg') }}" alt="">
                        <span class="banner2__item">
                            Удобная оплата
                        </span>
                    </div>
                    <div class="banner2__order__4">
                        <img src="{{ asset('assets/home/img/banner/banner2_3.svg') }}" alt="">
                        <span class="banner2__item">
                            Гарантия качества
                        </span>
                    </div>
                    <div class="banner2__order__5">
                        <img src="{{ asset('assets/home/img/banner/banner2_4.svg') }}" alt="">
                        <span class="banner2__item">
                            Акция и скидки
                        </span>
                    </div>
                </div>
            </div>
        </div>
	</section>
	<section class="discounts_product">
		<div class="row">
			<div class="col-lg-12">
				<div class="popular__text">
					<h2>
						Скидки и специальные предложения
					</h2>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="discounts__grid">
					<div class="card">
						<div class="box__header">
							<p class="card__type">Артикул:<span class="card__type"> 000541</span>
							</p>
							<span class="box__header__discounts">-20%</span>
						</div>
						<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
						<p class="card__type">Электротовары
						</p>
						<h3 class="card__title ">
							 DeWALT LAKA DWE4051 
						</h3>
						<div class="box__header">
							<span class="card-price">
								25890 тг
							</span>
							<button class="btn-2 btn-buy">
								В корзину <i class="fas fa-cart-arrow-down"></i>
							</button>
						</div>
					</div>
					<div class="card">
						<div class="box__header">
							<p class="card__type">Артикул:<span class="card__type"> 000541</span>
							</p>
							<span class="box__header__discounts">-20%</span>
						</div>
						<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
						<p class="card__type">Электротовары
						</p>
						<h3 class="card__title ">
							 DeWALT LAKA DWE4051 
						</h3>
						<div class="box__header">
							<span class="card-price">
								25890 тг
							</span>
							<button class="btn-2 btn-buy">
								В корзину <i class="fas fa-cart-arrow-down"></i>
							</button>
						</div>
					</div>
					<div class="card">
						<div class="box__header">
							<p class="card__type">Артикул:<span class="card__type"> 000541</span>
							</p>
							<span class="box__header__discounts">-20%</span>
						</div>
						<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
						<p class="card__type">Электротовары
						</p>
						<h3 class="card__title ">
							 DeWALT LAKA DWE4051 
						</h3>
						<div class="box__header">
							<span class="card-price">
								25890 тг
							</span>
							<button class="btn-2 btn-buy">
								В корзину <i class="fas fa-cart-arrow-down"></i>
							</button>
						</div>
					</div>
					<div class="card">
						<div class="box__header">
							<p class="card__type">Артикул:<span class="card__type"> 000541</span>
							</p>
							<span class="box__header__discounts">-20%</span>
						</div>
						<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
						<p class="card__type">Электротовары
						</p>
						<h3 class="card__title ">
							 DeWALT LAKA DWE4051 
						</h3>
						<div class="box__header">
							<span class="card-price">
								25890 тг
							</span>
							<button class="btn-2 btn-buy">
								В корзину <i class="fas fa-cart-arrow-down"></i>
							</button>
						</div>
					</div>
					<div class="card">
						<div class="box__header">
							<p class="card__type">Артикул:<span class="card__type"> 000541</span>
							</p>
							<span class="box__header__discounts">-20%</span>
						</div>
						<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
						<p class="card__type">Электротовары
						</p>
						<h3 class="card__title ">
							 DeWALT LAKA DWE4051 
						</h3>
						<div class="box__header">
							<span class="card-price">
								25890 тг
							</span>
							<button class="btn-2 btn-buy">
								В корзину <i class="fas fa-cart-arrow-down"></i>
							</button>
						</div>
					</div>
			    </div>
			</div>
		</div>
	</section>	
</div>
@endsection