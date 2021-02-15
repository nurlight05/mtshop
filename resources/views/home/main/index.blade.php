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
            @if ($mainProduct)
                <div class="card__main">
                    <div class="box__header">
                        <p class="card__type">Артикул:<span class="card__type"> {{ $mainProduct->vcode }}</span>
                        </p>
                    </div>
                    <div>
                        <a href="{{ route('mtshop.products.show', ['product' => $mainProduct->slug]) }}">
                            @if ($mainProduct->images()->exists())
                                <img src="{{ $mainProduct->images[0]->url }}" alt="" style="width: 100%; height: auto;">
                            @else
                                <img src="{{ asset('assets/home/img/products/no_photo.png') }}" alt="" style="width: 100%; height: auto;">
                            @endif
                        </a>
                    </div>
                    <div>
                        <h3 class="card__title" onclick="location.href='{{ route('mtshop.products.show', ['product' => $mainProduct->slug]) }}'" style="cursor: pointer;">
                            {{ $mainProduct->name }}
                        </h3>
                        <hr class="card2__line">
                    </div>
                    <div class="box__header">
                        <span class="card__title">
                            @if ($mainProduct->discount) {{ $mainProduct->discount_price }} @else {{ $mainProduct->price }} @endif тг
                        </span>
                        <button class="btn btn-primary" style="background-color: #004BA3; border: #004BA3; padding: 0 8px;" @if ($mainProduct->quantity == 0) disabled @endif onclick="location.href='{{ route('mtshop.products.addtocart', ['product' => $mainProduct->slug]) }}'">
                            <i class="fas fa-cart-arrow-down"></i>
                        </button>
                    </div>
                </div>
            @endif
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
                        @forelse ($productsNew as $item)
                            <div class="new__box{{ $loop->index + 1 }} card">
                                <div class="box__header">
                                    <p class="card__type">Артикул:<span class="card__type">{{ $item->vcode }}</span>
                                    </p>
                                    <img src="{{ asset('assets/home/img/card/new.png') }}" alt="">				
                                </div>
                                <a href="{{ route('mtshop.products.show', ['product' => $item->slug]) }}">
                                    @if ($item->images()->exists())
                                        <img src="{{ $item->images[0]->url }}" alt="">
                                    @else
                                        <img src="{{ asset('assets/home/img/products/no_photo.png') }}" alt="">
                                    @endif
                                </a>
                                <p class="card__type">{{ $item->category->name }}</p>
                                <h3 class="card__title text-truncate">
                                    <a href="{{ route('mtshop.products.show', ['product' => $item->slug]) }}">{{ $item->name }}</a> 
                                </h3>
                                <hr class="card__line">
                                <div class="box__header">
                                    <span class="card-price">
                                        @if ($item->discount) {{ $item->discount_price }} @else {{ $item->price }} @endif тг
                                    </span>
                                    <button class="btn btn-primary" style="background-color: #004BA3; border: #004BA3; padding: 0 8px;" @if ($item->quantity == 0) disabled @endif onclick="location.href='{{ route('mtshop.products.addtocart', ['product' => $item->slug]) }}'">
                                        В корзину <i class="fas fa-cart-arrow-down"></i>
                                    </button>
                                </div>
                            </div>
                        @empty
                            {{-- Nothing --}}
                        @endforelse
						{{-- <div class="new__box2 card">
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
						</div> --}}
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
                    @forelse ($productsHit as $item)
                        <div class="card">
                            <div class="box__header">
                                <p class="card__type">Артикул:<span class="card__type">{{ $item->vcode }}</span>
                                </p>
                                <img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
                            </div>
                            <a href="{{ route('mtshop.products.show', ['product' => $item->slug]) }}">
                                @if ($item->images()->exists())
                                <img src="{{ $item->images[0]->url }}" alt="">
                                @else
                                <img src="{{ asset('assets/home/img/products/no_photo.png') }}" alt="">
                                @endif
                            </a>
                            <p class="card__type">{{ $item->category->name }}</p>
                            <h3 class="card__title text-truncate">
                                <a href="{{ route('mtshop.products.show', ['product' => $item->slug]) }}">{{ $item->name }}</a> 
                            </h3>
                            <hr class="card__line">
                            <div class="box__header">
                                <span class="card-price">
                                    @if ($item->discount) {{ $item->discount_price }} @else {{ $item->price }} @endif тг
                                </span>
                                <button class="btn btn-primary" style="background-color: #004BA3; border: #004BA3; padding: 0 8px;" @if ($item->quantity == 0) disabled @endif>
                                    В корзину <i class="fas fa-cart-arrow-down"></i>
                                </button>
                            </div>
                        </div>
                    @empty
                        {{-- Nothing --}}
                    @endforelse
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
					@forelse ($productsDiscount as $item)
                        <div class="card">
                            <div class="box__header">
                                <p class="card__type">Артикул:<span class="card__type">{{ $item->vcode }}</span>
                                </p>
                                <span class="box__header__discounts">-{{ $item->discount }}%</span>
                            </div>
                            <a href="{{ route('mtshop.products.show', ['product' => $item->slug]) }}">
                                @if ($item->images()->exists())
                                <img src="{{ $item->images[0]->url }}" alt="">
                                @else
                                <img src="{{ asset('assets/home/img/products/no_photo.png') }}" alt="">
                                @endif
                            </a>
                            <p class="card__type">{{ $item->category->name }}</p>
                            <h3 class="card__title text-truncate">
                                <a href="{{ route('mtshop.products.show', ['product' => $item->slug]) }}">{{ $item->name }}</a> 
                            </h3>
                            <hr class="card__line">
                            <div class="box__header">
                                <span class="card-price">
                                    @if ($item->discount) {{ $item->discount_price }} @else {{ $item->price }} @endif тг
                                </span>
                                <button class="btn btn-primary" style="background-color: #004BA3; border: #004BA3; padding: 0 8px;" @if ($item->quantity == 0) disabled @endif>
                                    В корзину <i class="fas fa-cart-arrow-down"></i>
                                </button>
                            </div>
                        </div>
                    @empty
                        {{-- Nothing --}}
                    @endforelse
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