@extends('home.base')

@section('title', 'Корзина')

@section('content')
    <div class="f-container">
        <section class="basket">
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
            <div class="row">
                <div class="basket__title">
                    <h3>Корзина</h3>
                </div>
            </div>
            <form action="{{ route('mtshop.order.store') }}" class="" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 p-0">
                        <div class="table-responsive">
                            <table class="basket__table  table-hover " id="myTable">
                                <thead>
                                    <tr>
                                        <td>
                                            Товар
                                        </td>
                                        <td>
                                            Количество
                                        </td>
                                        <td>
                                            Стоимость
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $products = null;
                                    @endphp
                                    @if (session()->has('products'))
                                        @php
                                            $products = session('products');
                                        @endphp
                                        @foreach ($products as $item)
                                            <tr>
                                                <td>
                                                    @if ($item->images()->exists())
                                                        <img src="{{ $item->images[0]->url }}" alt="">
                                                    @else
                                                        <img src="{{ asset('assets/home/img/products/no_photo.png') }}"
                                                            alt="">
                                                    @endif
                                                    <a class="text-truncate"
                                                        href="{{ route('mtshop.products.show', ['product' => $item->slug]) }}">{{ $item->name }}</a>
                                                </td>
                                                <td>
                                                    <input class="quantity" name="quantity[]" data-id="{{ $item->id }}"
                                                        type="number" value="1" min="1" max="{{ $item->quantity }}"
                                                        data-validate="{required:true,'validate-greater-than-zero':true}">
                                                </td>
                                                <td>
                                                    <span class="price">
                                                        @if ($item->discount)
                                                        {{ $item->discount_price }} @else {{ $item->price }}
                                                        @endif
                                                    </span> тг
                                                </td>
                                                <td><a class=""
                                                        href="{{ route('mtshop.products.removefromcart', ['product' => $item->slug]) }}">
                                                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="13.4882" cy="13.4882" r="12.4882" fill="white"
                                                                stroke="#CCCCCC" stroke-width="2" />
                                                            <path d="M9.44141 9.44177L18.2088 18.2091" stroke="#A2A2A2"
                                                                stroke-width="2" stroke-linecap="round" />
                                                            <path d="M18.209 9.44177L9.44162 18.2091" stroke="#A2A2A2"
                                                                stroke-width="2" stroke-linecap="round" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td>Ничего не найдено</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 p-0">
                        <div class="checkout">
                            <div class="checkout__block">
                                <h4>Оформить заказ</h4>
                                <div class="checkout__block__name">
                                    <label for="">
                                        Имя *
                                    </label>
                                    <input type="text" name="name" required>
                                </div>
                                <div class="checkout__block__phone">
                                    <label for="">
                                        Телефон *
                                    </label>
                                    <input type="text" name="phone" required>
                                </div>
                                <div class="checkout__block__email">
                                    <label for="">
                                        Электронная почта
                                    </label>
                                    <input type="text" name="email">
                                </div>
                                <div class="checkout__block__delivery">
                                    <label for="">
                                        Способ доставки:
                                    </label>
                                    <div class="tabs2">
                                        <a class="tab-links2 active" data-tab="1">
                                            Самовызов</a>
                                        <a class="tab-links2" data-tab="2">Курьером в руки</a>
                                    </div>
                                    <div class="content-wrapper">
                                        <div id="tab-1" class="tab-content2 active">
                                            <p>
                                                Адрес магазина
                                            </p>
                                            <p>
                                                г. Алматы, Ауезовский район, 5 мкр, 5 дом, кв. 95
                                            </p>
                                        </div>
                                        <div id="tab-2" class="tab-content2">
                                            <p>
                                                Ваш адрес
                                            </p>
                                            <div class="checkout__button2__input">
                                                <input name="city" type="text" placeholder="Город">
                                                <input name="street" type="text" placeholder="Улица">
                                                <input name="apartment" type="text" placeholder="Дом/квартира">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout__block__pay">
                                    <label for="">
                                        Оплата
                                    </label>
                                    <div class="checkout__pay__sum">
                                        <div>
                                            <p>
                                                Товары
                                            </p>
                                            <span id="a__calc" value="127750">
                                                @php
                                                    $total = 0;
                                                    $delivery = 0;
                                                    if (session()->has('products')) {
                                                        foreach (session('products') as $item) {
                                                            if ($item->discount) {
                                                                $total += $item->discount_price;
                                                            } else {
                                                                $total += $item->price;
                                                            }
                                                        }
                                                    }
                                                @endphp
                                                <span class="total">{{ $total }}</span> тг
                                            </span>
                                        </div>
                                        <div>
                                            <p>
                                                Доставка
                                            </p>
                                            <span id="b__calc" value="1500">
                                                {{ $delivery }} тг
                                            </span>
                                        </div>
                                        <hr class="basket__line">
                                        <div>
                                            <p>
                                                Сумма к оплате
                                            </p>
                                            <span><span id="result__calc">{{ $total + $delivery }}</span> тг<span>
                                        </div>
                                        <div class="checkout__pay__accept">
                                            <input id="checkbox__basket" type="checkbox" onclick="compare();">
                                            <label for="checkbox__basket">
                                                Перезвоните мне для подтверждения заказа
                                            </label>
                                            <button class="btn-2 btn-basket" type="submit" id="submit2" value="Submit2"
                                                disabled>ПОДВЕРДИТЬ ЗАКАЗ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection

@push('styles')
    <style>
        .cart-modal:target {
            visibility: visible;
            opacity: 1;
        }

        .cart-modal {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.5);
            transition: opacity 200ms;
            visibility: hidden;
            opacity: 0;
            z-index: 4;
            padding: 0 10px;
        }

        .cart-modal__wrapper {
            margin: 75px auto;
            padding: 40px;
            background: #fff;
            width: 100%;
            max-width: 620px;
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.5);
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .cart-modal__title {
            font-size: 18px;
            padding-left: 10px;
            font-weight: 500;
            text-align: center;
            color: #000;
        }

        .cart-modal__image {
            width: 90%;
            height: 150px;
            margin: 10px auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cart-modal__wrapper h2 {
            font-size: 20px;
            margin-bottom: 0px;
            text-align: center;
            color: #000;
        }

        .cart-modal__close {
            position: absolute;
            width: 20px;
            height: 20px;
            top: 20px;
            right: 20px;
            opacity: 0.8;
            transition: all 200ms;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            color: #666;
        }

        .checkmark {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: block;
            stroke-width: 2;
            stroke: #FCAF23;
            stroke-miterlimit: 10;
            box-shadow: inset 0px 0px 0px #4bb71b;
            animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
            position: relative;
            top: 5px;
            right: 5px;
            margin: 0 auto;
        }

        .cart-modal__circle {
            stroke-dasharray: 166;
            stroke-dashoffset: 166;
            stroke-width: 2;
            stroke-miterlimit: 10;
            stroke: #FCAF23;
            fill: #fff;
            animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;

        }

        .cart-modal__check {
            transform-origin: 50% 50%;
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
        }

        @keyframes stroke {
            100% {
                stroke-dashoffset: 0;
            }
        }

        @keyframes scale {

            0%,
            100% {
                transform: none;
            }

            50% {
                transform: scale3d(1.1, 1.1, 1);
            }
        }

        @keyframes fill {
            100% {
                box-shadow: inset 0px 0px 0px 30px #4bb71b;
            }
        }

    </style>
@endpush

@push('modals')
    <div id="success" class="cart-modal">
        <div class="cart-modal__wrapper">
            <span class='cart-modal__title'>Ваш заказ принят!</span>
            <div class="cart-modal__image">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                    <circle class="cart-modal__circle" cx="26" cy="26" r="25" fill="none" />
                    <path class="cart-modal__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                </svg>
            </div>
            <h2>В течении нескольких минут наш оператор звонит Вам чтобы подтвердить заказ.</h2>
            <a class="cart-modal__close" href="{{ route('mtshop.catalogue.index') }}">&times;</a>
        </div>
    </div>
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.quantity').val(1)
        })

        $('.tabs2 a[data-tab="2"]').click(function() {
            $('.checkout__button2__input input').prop('required', true)
        })

        $('.tabs2 a[data-tab="1"]').click(function() {
            $('.checkout__button2__input input').prop('required', false)
        })

        $products = {!!json_encode($products) !!}

        $prices = {}
        $products.forEach(element => {
            if (element.discount)
                $prices[element.id] = element.discount_price
            else
                $prices[element.id] = element.price
        })

        $('.quantity').change(function() {
            $id = $(this).data('id')
            $quantity = parseInt($(this).val())
            // $priceSpan = $(this).closest('tr').find('span.price')
            $totalSpan = $('.total')
            $totalPaymentSpan = $('#result__calc')

            $product = $products.find(function($item, $index) {
                if ($item.id == $id)
                    return true
            })

            $price = $product.price
            if ($product.discount)
                $price = $product.discount_price

            $price = $quantity * $price
            $prices[$id] = $price
            // $priceSpan.text($price)   

            $total = 0
            $.each($prices, function(key, value) {
                $total += parseInt(value)
            })
            $totalSpan.text($total)
            $totalPaymentSpan.text($total)
        })

    </script>
@endpush
