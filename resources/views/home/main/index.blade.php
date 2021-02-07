@extends('home.base')

@section('title', 'Главная страница')

@section('content')
<div class="f-container">
	<section class="main__cards">
		<div class="main__first">
            @forelse ($slides as $item)
                <img src="{{ asset($item->url) }}" alt="" @if ($item->hyperlink) onclick="location.href='{{ url($item->hyperlink) }}'" @endif style="cursor: pointer;">
            @empty
                {{-- Nothing --}}
            @endforelse
		</div>
		<div class="main__second">
			<div class="card__main">
				<div class="box__header">
					<p class="card__type">Артикул:<span class="card__type"> 000541</span>
					</p>
				</div>
				<div>
					<a href="{{ route('mtshop.home.index') }}">
						<img src="{{ asset('assets/home/img/card/second_card.svg') }}" alt="">
					</a>
				</div>
				<div>
					<h3 class="card__title">
					 	Дрель шуруповёрт ALTECO CD 2110Li X2  
					</h3>
					<hr class="card2__line">
				</div>
				<div class="box__header">
					<span class="card__title">
						25890 тг
					</span>
					<button class="btn-2 btn-buy">
						<i class="fas fa-cart-arrow-down"></i>
					</button>
					<button class="btn-2 btn-order">
						Быстрый заказ 
					</button>
				</div>
			</div>
		</div>
	</section>
	<section class="banner">
			<div class="row">
				<div class="col-lg-12">
			        <div class="banner__sl">
						<div class="banner__box">
							<div>
								<img src="{{ asset('assets/home/img/banner/banner_1.svg') }}" alt="">
							</div>
						</div>
						<div class="banner__box">
							<div>
							<img src="{{ asset('assets/home/img/banner/banner_2.svg') }}" alt="">
							</div>
						</div>
						<div class="banner__box">
							<div>
							
							<img src="{{ asset('assets/home/img/banner/banner_3.svg') }}" alt="">
							</div>
						</div>
						<div class="banner__box">
							<div>
							<img src="{{ asset('assets/home/img/banner/banner_4.svg') }}" alt="">
							</div>
						</div>
						<div class="banner__box">
							<div>
							<img src="{{ asset('assets/home/img/banner/banner_5.svg') }}" alt="">
							</div>
						</div>
			        </div>
				</div>
			</div>
	</section>		
	<section class="new_product">
			<div class="row">
				<div class="col-lg-12">
					<div class="new__text">
						<h2>
							Новинки
						</h2>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="new__grid">
						<div class="new__box1 card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/new.png') }}" alt="">				
							</div>
							<a href="{{ route('mtshop.home.index') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
								<a href="{{ route('mtshop.home.index') }}">DeWALT LAKA DWE4051</a> 
							</h3>
							<hr class="card__line">
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="new__box2 card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/new.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.home.index') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title">
								<a href="{{ route('mtshop.home.index') }}">DeWALT LAKA DWE4051</a> 
							</h3>
							<hr class="card__line">
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="new__box3 card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/new.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.home.index') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
								<a href="{{ route('mtshop.home.index') }}">DeWALT LAKA DWE4051</a> 
							</h3>
							<hr class="card__line">
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="new__box4 card">
							<div class="box__header">
								<p class="card__type">Артикул:<span class="card__type"> 000541</span>
								</p>
								<img src="{{ asset('assets/home/img/card/new.png') }}" alt="">
							</div>
							<a href="{{ route('mtshop.home.index') }}">
								<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
							</a>
							<p class="card__type">Электротовары
							</p>
							<h3 class="card__title ">
								<a href="{{ route('mtshop.home.index') }}">DeWALT LAKA DWE4051</a> 
							</h3>
							<hr class="card__line">
							<div class="box__header">
								<span class="card-price">
									25890 тг
								</span>
								<button class="btn-2 btn-buy">
									В корзину <i class="fas fa-cart-arrow-down"></i>
								</button>
							</div>
						</div>
						<div class="new__box5">
							<img src="{{ asset($banners1[0]->url) }}" alt="" @if ($banners1[0]->hyperlink) onclick="location.href='{{ url($banners1[0]->hyperlink) }}'" @endif style="cursor: pointer;">
						</div>
						<div class="new__box6">
							<img src="{{ asset($banners1[1]->url) }}" alt="" @if ($banners1[1]->hyperlink) onclick="location.href='{{ url($banners1[1]->hyperlink) }}'" @endif style="cursor: pointer;">
						</div>
				    </div>
				</div>
			</div>
	</section>
	<section class="banner2">
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
	<section class="popular_product">
		<div class="row">
			<div class="col-lg-12">
				<div class="popular__text">
					<h2>
						Хит продаж
					</h2>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="popular__grid">
					<div class="card">
						<div class="box__header">
							<p class="card__type">Артикул:<span class="card__type"> 000541</span>
							</p>
							<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
						</div>
						<a href="{{ route('mtshop.home.index') }}">
							<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
						</a>
						<p class="card__type">Электротовары
						</p>
						<h3 class="card__title ">
							<a href="{{ route('mtshop.home.index') }}">DeWALT LAKA DWE4051</a> 
						</h3>
						<hr class="card__line">
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
							<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
						</div>
						<a href="{{ route('mtshop.home.index') }}">
							<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
						</a>
						<p class="card__type">Электротовары
						</p>
						<h3 class="card__title ">
							<a href="{{ route('mtshop.home.index') }}">DeWALT LAKA DWE4051</a> 
						</h3>
						<hr class="card__line">
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
							<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
						</div>
						<a href="{{ route('mtshop.home.index') }}">
							<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
						</a>
						<p class="card__type">Электротовары
						</p>
						<h3 class="card__title ">
							<a href="{{ route('mtshop.home.index') }}">DeWALT LAKA DWE4051</a> 
						</h3>
						<hr class="card__line">
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
							<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
						</div>
						<a href="{{ route('mtshop.home.index') }}">
							<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
						</a>
						<p class="card__type">Электротовары
						</p>
						<h3 class="card__title ">
							<a href="{{ route('mtshop.home.index') }}">DeWALT LAKA DWE4051</a> 
						</h3>
						<hr class="card__line">
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
							<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
						</div>
						<a href="{{ route('mtshop.home.index') }}">
							<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
						</a>
						<p class="card__type">Электротовары
						</p>
						<h3 class="card__title ">
							<a href="{{ route('mtshop.home.index') }}">DeWALT LAKA DWE4051</a> 
						</h3>
						<hr class="card__line">
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
							<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
						</div>
						<a href="{{ route('mtshop.home.index') }}">
							<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
						</a>
						<p class="card__type">Электротовары
						</p>
						<h3 class="card__title ">
							<a href="{{ route('mtshop.home.index') }}">DeWALT LAKA DWE4051</a> 
						</h3>
						<hr class="card__line">
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
							<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
						</div>
						<a href="{{ route('mtshop.home.index') }}">
							<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
						</a>
						<p class="card__type">Электротовары
						</p>
						<h3 class="card__title ">
							<a href="{{ route('mtshop.home.index') }}">DeWALT LAKA DWE4051</a> 
						</h3>
						<hr class="card__line">
						<div class="box__header">
							<span class=" card-price">
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
							<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
						</div>
						<a href="{{ route('mtshop.home.index') }}">
							<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
						</a>
						<p class="card__type">Электротовары
						</p>
						<h3 class="card__title ">
							<a href="{{ route('mtshop.home.index') }}">DeWALT LAKA DWE4051</a> 
						</h3>
						<hr class="card__line">
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
							<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
						</div>
						<a href="{{ route('mtshop.home.index') }}">
							<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
						</a>
						<p class="card__type">Электротовары
						</p>
						<h3 class="card__title ">
							<a href="{{ route('mtshop.home.index') }}">DeWALT LAKA DWE4051</a> 
						</h3>
						<hr class="card__line">
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
							<img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
						</div>
						<a href="{{ route('mtshop.home.index') }}">
							<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
						</a>
						<p class="card__type">Электротовары
						</p>
						<h3 class="card__title ">
							<a href="{{ route('mtshop.home.index') }}">DeWALT LAKA DWE4051</a> 
						</h3>
						<hr class="card__line">
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
	<section class="banner3">
		<div class="row">
            <div class="col-lg-12">
                <div class="banner3__grid">           				
                    <img src="{{ asset($banners2[0]->url) }}" alt="" @if ($banners2[0]->hyperlink) onclick="location.href='{{ url($banners2[0]->hyperlink) }}'" @endif style="cursor: pointer;">
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
						<a href="{{ route('mtshop.home.index') }}">
							<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
						</a>
						<p class="card__type">Электротовары
						</p>
						<h3 class="card__title ">
							<a href="{{ route('mtshop.home.index') }}">DeWALT LAKA DWE4051</a> 
						</h3>
						<hr class="card__line">
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
						<a href="{{ route('mtshop.home.index') }}">
							<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
						</a>
						<p class="card__type">Электротовары
						</p>
						<h3 class="card__title ">
							<a href="{{ route('mtshop.home.index') }}">DeWALT LAKA DWE4051</a> 
						</h3>
						<hr class="card__line">
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
						<a href="{{ route('mtshop.home.index') }}">
							<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
						</a>
						<p class="card__type">Электротовары
						</p>
						<h3 class="card__title ">
							<a href="{{ route('mtshop.home.index') }}">DeWALT LAKA DWE4051</a> 
						</h3>
						<hr class="card__line">
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
						<a href="{{ route('mtshop.home.index') }}">
							<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
						</a>
						<p class="card__type">Электротовары
						</p>
						<h3 class="card__title ">
							<a href="{{ route('mtshop.home.index') }}">DeWALT LAKA DWE4051</a> 
						</h3>
						<hr class="card__line">
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
						<a href="{{ route('mtshop.home.index') }}">
							<img src="{{ asset('assets/home/img/electro_mat/template.png') }}" alt="">
						</a>
						<p class="card__type">Электротовары
						</p>
						<h3 class="card__title ">
							<a href="{{ route('mtshop.home.index') }}">DeWALT LAKA DWE4051</a> 
						</h3>
						<hr class="card__line">
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

@push('scripts')
	<script>
		$(document).ready(function() {
			// class="dropbtn" data-toggle="dropdown"
			$('.dropbtn').dropdown('toggle');
		})
	</script>
@endpush