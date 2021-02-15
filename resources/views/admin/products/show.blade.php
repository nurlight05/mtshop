@extends('admin.base')

@section('title', 'Товары')

@section('subtitle', 'Показать товар')

@section('icon', 'pe-7s-box2')

@section('active-products', 'mm-active')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <h6 class="card-subtitle">Артикул - {{ $product->vcode }}</h6>
                <p><b>Категория:</b> {{ $product->category->name }}</p>
                <p><b>Цена:</b> <span class="@if ($product->discount) {{ 'del' }} @endif">{{ $product->price }} тг.</span></p>
                <p><b>Скидка:</b> @if ($product->discount) {{ '-'. $product->discount . '%' }} @else Нет @endif</p>
                @if ($product->discount)
                    <p><b>Цена по акции:</b> {{ $product->discount_price }} тг.</p>
                @endif
                <p><b>Тип:</b> {{ $product->type_name }}</p>
                <p><b>Количество:</b> {{ $product->quantity }} штук</p>
                @forelse ($product->attributes as $item)
                    <p><b>{{ $item->name }}:</b> {{ $item->pivot->value }} {{ $item->measure->name ?? '' }}</p>
                @empty
                    {{-- Nothing --}}
                @endforelse
                <p><b>Описание:</b></p>
                <div>
                    {!! $product->description !!}
                </div>
                <p><b>Картинки:</b></p>
                <div class="row mb-4">
                    @forelse ($product->images as $item)
                        <div class="col-md-3">
                            <img src="{{ asset($item->url) }}" alt="" style="width: 100%; height: auto;">
                        </div>
                    @empty
                        {{-- Nothing --}}
                    @endforelse
                </div>
                <p><b>Заказы в которых имеется данный товар:</b></p>
                <div>
                    <ol>
                        @forelse ($product->orders as $item)
                            <li>
                                <a class="text-truncate" href="{{ route('mtshop.admin.orders.show', ['order' => $item->id]) }}">№ {{ $item->id }} ({{ $item->created_at }})</a>
                            </li>
                        @empty
                            Отсутствуют
                        @endforelse
                    </ol>
                </div>
                <div class="fc-rtl">
                    <button class="btn btn-primary" onclick="location.href='{{ route('mtshop.admin.products') }}'">Назад в список</button>
                    <button class="btn btn-primary" onclick="location.href='{{ route('mtshop.admin.products.edit', ['slug' => $product->slug]) }}'">Изменить</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection