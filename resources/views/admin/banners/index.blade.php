@extends('admin.base')

@section('title', 'Баннеры')

@section('subtitle', 'Все баннеры')

@section('icon', 'pe-7s-photo-gallery')

@section('active-banners', 'mm-active')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Слайдер</h5>
                <div class="row" style="grid-row-gap: 15px;">
                    @forelse ($slides as $item)
                        <div class="col-md-2 banner-card">
                            <img class="img-fluid" src="{{ $item->url ?? 'http://placehold.it/640x420' }}" alt="">
                            <div>
                                <p class="text-truncate mb-0">Ссылка: <a href="#" title="{{ $item->hyperlink }}">{{ $item->hyperlink ?? '-' }}</a></p>
                                <button class="btn btn-primary btn-sm" style="width: 100%;" onclick="location.href='{{ route('mtshop.admin.banners.edit', ['banner' => $item->id]) }}'">Редактировать</button>
                            </div>
                        </div>
                    @empty
                        {{-- Nothing --}}
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Баннер 1</h5>
                <div class="row" style="grid-row-gap: 15px;">
                    @forelse ($banners1 as $item)
                        <div class="col-md-2 banner-card">
                            <img class="img-fluid" src="{{ $item->url ?? 'http://placehold.it/640x420' }}" alt="">
                            <div>
                                <p class="text-truncate mb-0">Ссылка: <a href="#" title="{{ $item->hyperlink }}">{{ $item->hyperlink ?? '-' }}</a></p>
                                <button class="btn btn-primary btn-sm" style="width: 100%;" onclick="location.href='{{ route('mtshop.admin.banners.edit', ['banner' => $item->id]) }}'">Редактировать</button>
                            </div>
                        </div>
                    @empty
                        {{-- Nothing --}}
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Баннер 2</h5>
                @forelse ($banners2 as $item)
                        <img class="img-fluid" src="{{ $item->url ?? 'http://placehold.it/1220x270' }}" alt="">
                        <p class="text-truncate mb-0">Ссылка: <a href="#" title="{{ $item->hyperlink }}">{{ $item->hyperlink ?? '-' }}</a></p>
                        <button class="btn btn-primary btn-sm" onclick="location.href='{{ route('mtshop.admin.banners.edit', ['banner' => $item->id]) }}'">Редактировать</button>
                @empty
                    {{-- Nothing --}}
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
    <style>
        .banner-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
@endpush