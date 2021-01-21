@extends('home.base')

@section('title', 'Продукт')

@section('content')
<div class="f-container">
	<section class="product">
		<div class="row">
			<aside class="breadcrumbs">
				<a href="{{ route('mtshop.home.index') }}">
					Главная
				</a>
				<i class="fa fa-angle-right" aria-hidden="true">
				</i>
				<span class="current">
				  	Корзина
				</span>
			</aside>
		</div>
		<div class="row justify-content-between">
			<div class="product__first p_order1">
				<div class="product__header green">
					<span>
						20%
					</span>
				</div>
				<div class="sl">
						<div class="sl_slide ">
							<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" class="sl__img" >
						</div>
						<div class="sl_slide ">
							<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" class="sl__img" >
						</div>
						<div class="sl_slide ">
							<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" class="sl__img" >
						</div>
						<div class="sl_slide ">
							<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" class="sl__img" >
						</div>
				</div>
				<div class="sl2">
						<div class="sl2__slide">
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
						</div>
						<div class="sl2__slide">
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
						</div>
						<div class="sl2__slide">
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
						</div>
						<div class="sl2__slide">
							<a href="{{ route('mtshop.products.show') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
						</div>
				</div>
			</div>
			<div class="product__two p_order2">
				<div>
					<p>Электротовары
					</p>
				</div>
				<div class="">
					<h3 class="product__title">
						 Углошлифовальная машина (болгарка) DWE4051 LAKA DeWALT 
					</h3>
				</div>
				<div class="characteristic">
                  	<table>
                        <tbody>
                            <tr>
                                <td>Артикул</td>
                                <td>DWE4051 LAKA</td>
                            </tr>
                            <tr>
                                <td>Бренд</td>
                                <td>DeWALT</td>
                            </tr>
                            <tr>
                                <td>Вес, кг</td>
                                <td>1,9</td>
                            </tr>
                            <tr>
                                <td>Потребляемая мощность, Вт:</td>
                                <td>800 Вт</td>
                            </tr>
							<tr class="">
								<td>Страна производитель:</td>
								<td>Китай</td>
							</tr>
                            <tr>
                                <td>Максимальный размер диска</td>
                                <td>125</td>
                            </tr>
                    	</tbody>
                	</table>
                </div>
			</div>
			<div class="product__three p_order4">
				<div class="product__three__header">
					<p>Наличие:</p>
					<span>Товар в наличии</span>
				</div>
				<div class="product__main">
					<div class="product__main__title">
						<p>Стоимость:</p>
					</div>
					<div class="product__main__price">
						<span class="product__new__price">
							25890 тг
						</span>
						<span class="product__old__price">
							29890 тг
						</span>
					</div>
					<div class="product__main__count">
						<span>Количество:</span>
						<span class="product__count__minus">-</span>
						<input type="input" class="product__count__text" value="1"/>
						<span class="product__count__plus">+</span>
					</div>
					<button class="btn-2 btn-buy btn-100">
						Добавить в корзину <i class="fas fa-cart-arrow-down"></i>
					</button>
					<button class="btn-2 btn-order btn-100">
						Быстрый заказ 
					</button>										
				</div>
				<div class="product__footer">
					<div class="">
						<img src="{{ asset('assets/home/img/icons/security.svg') }}" alt="">
						<p>Безопасная оплата</p>
					</div>
					<div class="">
						<img src="{{ asset('assets/home/img/icons/return14.svg') }}" alt="">
						<p>Возврат товара можно в течений 14 дней</p>
					</div>
				</div>
			</div>
		</div>
		<div class="product__detail p_order3">
            <div class="row">
            	<div class="col-lg-12">
            		<h2>
						О товаре
					</h2>
            	</div>
            	<div class="col-lg-5 col-md-6">
                    <h3 class="">Характеристики:</h3>
                    <div class="characteristic">
                      	<table>
                            <tbody>
	                            <tr>
	                                <td>Артикул</td>
	                                <td>DWE4051 LAKA</td>
	                            </tr>
	                            <tr>
	                                <td>Бренд</td>
	                                <td>DeWALT</td>
	                            </tr>
	                            <tr>
	                                <td>Максимальный размер диска</td>
	                                <td>125</td>
	                            </tr>
	                            <tr>
	                                <td>Вес, кг</td>
	                                <td>1,9</td>
	                            </tr>
	                            <tr>
	                                <td>Посадочный диаметр диска, мм</td>
	                                <td>22,2</td>
	                            </tr>
	                            <tr>
	                                <td>Потребляемая мощность, Вт:</td>
	                                <td>800 Вт</td>
	                            </tr>
	                            <tr class="">
									<td>Частота вращения об/мин</td>
									<td>11800</td>
								</tr>
								<tr class="">
									<td>Регулировка оборотов</td>
									<td>есть</td>
								</tr>
								<tr class="">
									<td>Страна производитель:</td>
									<td>Китай</td>
								</tr>
                        	</tbody>
                    	</table>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 ml-auto">
                    <h3>Описание</h3>
                    <div class="description__text">
                        <p>
							Углошлифовальная машина.  Корпус оптимального диаметра обеспечивает удобный захват и превосходную эргономику. Низкопрофильный корпус редуктора для работы в труднодоступных местах.
						</p>
						<p>  
							Эпоксидное покрытие обмотки защищает двигатель от абразивной пыли и увеличивает надежность инструмента. Независимый и подпружиненный щеткодержатель для увеличения срока службы щеток. Обмотки статора с прямыми выводами без использования клемм обеспечивают высокую надежность инструмента.
						</p>
						<p> 
							Использование только шариковых подшипников в конструкции увеличивает эффективность и долговечность инструмента. Самоотключающиеся щетки защищают якорь от повреждения, что приводит к увеличению срока службы электродвигателя. Верхнее расположение кнопки блокировки шпинделя обеспечивает максимальную глубину реза.
						</p>				
                    </div>
                </div>
                
            </div>
        </div>
	</section>
	<section class="similar_product">
			<div class="row">
				<div class="col-lg-12">
					<div class="similar__text">
						<h2>
							Похожие товары
						</h2>
					</div>
				</div>
				<div class="col-lg-12">
				    <div class="similar__grid__slider">
						<div class="card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<span class="box__header__discounts">-20%</span>
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
								<span class=" btn-price">
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
						<div class="card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<span class="box__header__discounts">-20%</span>
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
						<div class="card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<span class="box__header__discounts">-20%</span>
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
						<div class="card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<span class="box__header__discounts">-20%</span>
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
						<div class="card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<span class="box__header__discounts">-20%</span>
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
				</div>
			</div>
	</section>
</div>
@endsection