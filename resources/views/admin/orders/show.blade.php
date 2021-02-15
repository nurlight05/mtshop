@extends('admin.base')

@section('title', 'Заказы')

@section('subtitle', 'Все заказы')

@section('icon', 'pe-7s-shopbag')

@section('active-orders', 'mm-active')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">№ {{ $order->id }}</h5>
                <h6 class="card-subtitle">Дата заказа - {{ $order->created_at }}</h6>
                <p><b>Имя заказчика:</b> {{ $order->name }}</p>
                <p><b>Номер телефона:</b> {{ $order->phone }}</p>
                @if ($order->email)
                    <p><b>Эл. почта:</b> {{ $order->email }}</p>
                @endif
                <p><b>Тип доставки:</b> {{ $order->delivery_type_text }}</p>
                <p><b>Сумма заказа:</b> {{ $order->amount }} тг</p>
                @if ($order->city)
                    <p><b>Город:</b> {{ $order->city }}</p>
                @endif
                @if ($order->street)
                    <p><b>Улица:</b> {{ $order->street }}</p>
                @endif
                @if ($order->apartment)
                    <p><b>Дом (квартира):</b> {{ $order->apartment }}</p>
                @endif
                <p><b>Оплачен:</b> @if ($order->paid == 0) <span class="text-danger">Нет</span> @else <span class="text-success">Да</span> @endif</p>
                <p><b>Товары:</b></p>
                <div>
                    <ol>
                        @forelse ($order->products as $item)
                            <li>
                                <a class="text-truncate" href="{{ route('mtshop.admin.products.show', ['slug' => $item->slug]) }}">{{ $item->name }} ({{ $item->pivot->quantity }} шт.)</a>
                            </li>
                        @empty
                            {{-- Nothing --}}
                        @endforelse
                    </ol>
                </div>
                <div class="fc-rtl">
                    <button class="btn btn-primary" onclick="location.href='{{ route('mtshop.admin.orders') }}'">Назад в список</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection