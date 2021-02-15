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
							@if ($category)
                                Подкатегории
                            @else
                                Категории
                            @endif
						</label>
						<ul class="category__items__list">
                            @if ($category)
                                @forelse ($category->childs as $item)
                                    <li class="text-truncate">
                                        <a href="{{  request()->fullUrlWithQuery(['category' => $item->slug]) }}">{{ $item->name }}</a>
                                    </li>
                                @empty
                                    {{-- Nothing --}}
                                @endforelse
                            @else
                                @forelse ($categories as $item)
                                    <li class="text-truncate">
                                        <a href="{{  request()->fullUrlWithQuery(['category' => $item->slug]) }}">{{ $item->name }}</a>
                                    </li>
                                @empty
                                    {{-- Nothing --}}
                                @endforelse
                            @endif
						</ul>
						<form action="{{ request()->fullUrl() }}" method="POST">
                            @csrf
							<div class="filter level-filter level-req">
					            <div id="rangeSlider" class="range-slider">
									<span>Цена</span>
									<div class="number-group">
										<div class="">
											с
											<input class="number-input" type="number" placeholder="c" value="{{ $curMinPrice ?? $minPrice }}" min="0" />
										</div>
										<div class="">
											до  
											<input class="number-input" type="number" placeholder="до" value="{{ $curMaxPrice ?? $maxPrice }}" min="0" />
										</div>
									</div>
									<div class="range-group">
										<input class="range-input" name="min_price" value="{{ $curMinPrice ?? $minPrice }}" min="{{ $minPrice }}" max="{{ $maxPrice }}" step="10" type="range" style="" />
										<input class="range-input" name="max_price" value="{{ $curMaxPrice ?? $maxPrice }}" min="{{ $minPrice }}" max="{{ $maxPrice }}" step="10" type="range" style="" />
									</div>
					            </div>
                                <div class="category__items__apply">
                                    <button class="btn-2 btn-apply" type="submit" >
                                        Применить
                                    </button>
                                </div>
					        </div>
						</form>
                        <div class="shop-sidebar">
                            <span class="sidebar-title">Товар
                            </span>
                            <div class="sidebar-tags">
                                <div class="radio">
                                    <input id="radio-2" name="status" type="radio" value="{{ request()->fullUrlWithQuery(['status' => 'out_of_stock']) }}" @if (request()->input('status') != 'in_stock') checked @endif>
                                    <label  for="radio-2" class="radio-label">Все товары</label>
                                </div>
                                <div class="radio">
                                    <input id="radio-1" name="status" type="radio" value="{{ request()->fullUrlWithQuery(['status' => 'in_stock']) }}" @if (request()->input('status') == 'in_stock') checked @endif>
                                    <label for="radio-1" class="radio-label">Есть в наличий</label>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<div class="col-lg-9 col-md-12">
				<div class="category__cards" id="main">
					<aside class="breadcrumbs">
						<a href="{{ route('mtshop.home.index') }}">
							Главная
						</a>
                        @if($category)
                            <i class="fa fa-angle-right" aria-hidden="true">
                            </i>
                            <a href="{{ route('mtshop.search.index', ['query' => request()->input('query')]) }}">
                                Поиск
                            </a>
                            <i class="fa fa-angle-right" aria-hidden="true">
                            </i>
                            @if ($category->parent)
                                @php
                                    $item = $category->parent;
                                @endphp
                                @if ($item->parent)
                                    @php
                                        $item2 = $item->parent;
                                    @endphp
                                    <a href="{{ route('mtshop.search.index', ['category' => $item2->slug, 'query' => request()->input('query')]) }}">
                                        {{ $item2->name }}
                                    </a>
                                    <i class="fa fa-angle-right" aria-hidden="true">
                                    </i>
                                @endif
                                <a href="{{ route('mtshop.search.index', ['category' => $item->slug, 'query' => request()->input('query')]) }}">
                                    {{ $item->name }}
                                </a>
                                <i class="fa fa-angle-right" aria-hidden="true">
                                </i>
                                <span class="current">
                                    {{ $category->name }}
                                </span>
                            @else
                                <span class="current">
                                    {{ $category->name }}
                                </span>
                            @endif
                        @else
                            <i class="fa fa-angle-right" aria-hidden="true">
                            </i>
                            <span class="current">
                                Поиск
                            </span>
                        @endif
					</aside>
					<span class="search__result">
						Результаты поиска для: 
						<span class="search__result__name">
							{{ request()->input('query') }}
						</span> 
						<span class="search__result__count">
							Найдено {{ $products->count() }} товаров
						</span>
					</span>
					{{-- <div class="list-wrapper">
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
					</div> --}}
					<div class="category__card__sort">
                        @if ($category)
                            <label>Показано все товары из каталога: <span>{{ $category->name }}</span></label>
                        @else
                            <label>Показано все товары</label>
                        @endif
						<div class="">
							<span class="">Сортировка</span>
                            <select id="sort__page" onchange="sortByType(this.value);">
                                <option value="{{ request()->fullUrlWithQuery(['type' => 'all', 'page' => 1]) }}" @if(request()->input('type') == 'all') selected @endif>Все</option>
                                <option value="{{ request()->fullUrlWithQuery(['type' => 'new', 'page' => 1]) }}" @if(request()->input('type') == 'new') selected @endif>Новинки</option>
                                <option value="{{ request()->fullUrlWithQuery(['type' => 'hit', 'page' => 1]) }}" @if(request()->input('type') == 'hit') selected @endif>Популярные</option>
                                <option value="{{ request()->fullUrlWithQuery(['type' => 'discount', 'page' => 1]) }}" @if(request()->input('type') == 'discount') selected @endif>По акции</option>
	             			</select>
						</div>
						<div class="category__mobile__filter">
							<img src="{{ asset('assets/home/img/icons/filter.png') }}" alt="">
							<a href="#mobile-filter">Фильтр</a>
						</div>
					</div>
					<div class="category__cards__grid">	
						@forelse ($products as $item)
                            <div class="category__cards__grid__item card">
                                <div class="d-flex flex-column justify-content-between" style="height: 100%">
                                    <div>
                                        <div class="box__header">
                                            <p class="card__type">Артикул:<span class="card__type"> {{ $item->vcode }}</span></p>
                                            {{-- {{ $item->type_id }} --}}
                                            @if ($item->type == 1)
                                                <img src="{{ asset('assets/home/img/card/new.png') }}" alt="">
                                            @endif
                                            @if ($item->type == 2)
                                                <img src="{{ asset('assets/home/img/card/popular.png') }}" alt="">
                                            @endif
                                            @if ($item->type == 3)
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
                                    </div>
                                    <div>
                                        <h3 class="card__title text-truncate">
                                            <a href="{{ route('mtshop.products.show', ['product' => $item->slug]) }}">{{ $item->name }}</a> 
                                        </h3>
                                        <div class="box__header">
                                            <span class="card-price">
                                                @if ($item->discount) {{ $item->discount_price }} @else {{ $item->price }} @endif тг
                                            </span>
                                            <button class="btn btn-primary" style="background-color: #004BA3; border: #004BA3; padding: 0 8px;" @if ($item->quantity == 0) disabled @endif onclick="location.href='{{ route('mtshop.products.addtocart', ['product' => $item->slug]) }}'">
                                                В корзину <i class="fas fa-cart-arrow-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            {{-- Nothing --}}
                        @endforelse
				    </div>
				    <div class="pagination-container">
                        {!! $products->appends(request()->except('page'))->onEachSide(2)->links() !!}
                    </div>
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
        function sortByType(url) {
            window.location.assign(url)
        }

        $('#radio-1').click(function() {
            window.location.assign($(this).val())
        })

        $('#radio-2').click(function() {
            window.location.assign($(this).val())
        })
    </script>
@endpush

@push('styles')
    <style>
        .pagination-container {
            display: block;
            padding: 15px 0;
        }
    </style>
@endpush