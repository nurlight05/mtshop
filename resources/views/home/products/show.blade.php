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
                    {{ $product->name }}
				</span>
			</aside>
		</div>
		<div class="row justify-content-between">
			<div class="product__first p_order1">
				<div class="product__header green">
					<span>
                        @if ($product->discount)
                            {{ $product->discount }}%
                        @endif
					</span>
				</div>
				<div class="sl">
                    @if ($product->images()->exists())
                        @foreach ($product->images as $item)
                            <div class="sl_slide ">
                                <img src="{{ asset($item->url) }}" class="sl__img" >
                            </div>
                        @endforeach
                    @else
                        <div class="sl_slide ">
                            <img src="{{ asset('assets/home/img/products/no_photo.png') }}" class="sl__img" >
                        </div>
                    @endif
				</div>
				<div class="sl2">
                    @if ($product->images()->exists())
                        @foreach ($product->images as $item)
                            <div class="sl2__slide">
                                <a>
                                    <img src="{{ asset($item->url) }}" alt="">
                                </a>
                            </div>
                        @endforeach
                    @endif
				</div>
			</div>
			<div class="product__two p_order2">
				<div>
					<p>{{ $product->category->name }}</p>
				</div>
				<div class="">
					<h3 class="product__title">
						{{ $product->name }}
					</h3>
				</div>
				<div class="characteristic">
                  	<table>
                        <tbody>
                            <tr>
                                <td>Артикул</td>
                                <td>{{ $product->vcode }}</td>
                            </tr>
                            @forelse ($product->attributes as $item)
                                <tr>
                                    <td>{{ $item->name }}@if($item->measure){{ ', '.$item->measure->name }}@endif</td>
                                    <td>{{ $item->pivot->value ?? '-' }}</td>
                                </tr>
                            @empty
                                {{-- Nothing --}}
                            @endforelse
                    	</tbody>
                	</table>
                </div>
			</div>
			<div class="product__three p_order4">
				<div class="product__three__header">
					<p>Наличие:</p>
                    @if ($product->quantity > 0)
                        <span>Товар в наличии</span>
                    @else
                        <span class="text-danger">Товар не в наличии</span>
                    @endif
				</div>
				<div class="product__main">
					<div class="product__main__title">
						<p>Стоимость:</p>
					</div>
					<div class="product__main__price">
						<span class="product__new__price">
                            @if ($product->discount)
                                {{ $product->discount_price }} тг
                            @else
                                {{ $product->price }} тг
                            @endif
						</span>
                        @if ($product->discount)
                            <span class="product__old__price" data-before-content="{{ '-'.$product->discount.'%' }}">
                                {{ $product->price }} тг
                            </span>
                        @endif
					</div>
					{{-- <div class="product__main__count">
						<span>Количество:</span>
						<span class="product__count__minus">-</span>
						<input type="input" class="product__count__text" value="1"/>
						<span class="product__count__plus">+</span>
					</div> --}}
                    <button class="btn btn-primary" style="border: 1px solid #004BA3; width: 100%; background-color: #004BA3; border: #004BA3; padding: 5px 19px; margin: 5px 0;" @if ($product->quantity == 0) disabled @endif onclick="location.href='{{ route('mtshop.products.addtocart', ['product' => $product->slug]) }}'">
                        Добавить в корзину <i class="fas fa-cart-arrow-down"></i>
                    </button>
					{{-- <button class="btn-2 btn-order btn-100">
						Быстрый заказ 
					</button>										 --}}
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
	                                <td>{{ $product->vcode }}</td>
	                            </tr>
                                @forelse ($product->attributes as $item)
                                    <tr>
                                        <td>{{ $item->name }}@if($item->measure){{ ', '.$item->measure->name }}@endif</td>
                                        <td>{{ $item->pivot->value ?? '-' }}</td>
                                    </tr>
                                @empty
                                    {{-- Nothing --}}
                                @endforelse
                        	</tbody>
                    	</table>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 ml-auto">
                    <h3>Описание</h3>
                    <div class="description__text">
                        {!! $product->description ?? '' !!}				
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
                        @forelse ($similarProducts as $item)
                            <div class="card">
                                <div class="box__header">
                                    <p class="card__type">Артикул:<span class="card__type"> {{ $item->vcode }}</span>
                                    </p>
                                    @if ($item->discount)
                                        <span class="box__header__discounts">-{{ $item->discount }}%</span>
                                    @endif
                                </div>
                                <a href="{{ route('mtshop.products.show', ['product' => $item->slug]) }}">
                                    @if ($item->images()->exists())
                                        <img src="{{ $item->images[0]->url }}" alt="">
                                    @else
                                        <img src="{{ asset('assets/home/img/products/no_photo.png') }}" alt="">
                                    @endif
                                </a>
                                <p class="card__type">{{ $item->category->name }}</p>
                                <h3 class="card__title ">
                                    <a class="text-truncate" href="">{{ $item->name }}</a> 
                                </h3>
                                <div class="box__header">
                                    <span class=" btn-price">
                                        @if ($item->discount)
                                            {{ $item->discount_price }} тг
                                        @else
                                            {{ $item->price }} тг
                                        @endif
                                    </span>
                                    <button class="btn btn-primary" style="background-color: #004BA3; border: #004BA3; padding: 0 8px;" @if ($item->quantity == 0) disabled @endif onclick="location.href='{{ route('mtshop.products.addtocart', ['product' => $item->slug]) }}'">
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