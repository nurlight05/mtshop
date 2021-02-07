@extends('admin.base')

@section('title', 'Товары')

@section('subtitle', 'Все товары')

@section('icon', 'pe-7s-box2')

@section('active-products', 'mm-active')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <form action="{{ route('mtshop.admin.products.submit') }}" method="post">
                    @csrf
                    <div class="card-header">{{ $productsType ?? 'Все товары' }}
                        <div class="btn-actions-pane-right">
                            <div role="group" class="btn-group-sm btn-group">
                                <button class="@if (!$productsType) active @endif btn btn-primary" type="button" onclick="location.href='{{ route('mtshop.admin.products') }}'">Все</button>
                                <button class="@if ($productsType == 'Новые товары') active @endif btn btn-primary" type="button" onclick="location.href='{{ route('mtshop.admin.products', ['type' => 'new']) }}'">Новые</button>
                                <button class="@if ($productsType == 'Хиты продаж') active @endif btn btn-primary" type="button" onclick="location.href='{{ route('mtshop.admin.products', ['type' => 'hit']) }}'">Хиты</button>
                                <button class="@if ($productsType == 'По акции') active @endif btn btn-primary" type="button" onclick="location.href='{{ route('mtshop.admin.products', ['type' => 'dis']) }}'">По акции</button>
                            </div>
                            <button class="btn btn-success" type="button" style="padding: .25rem .5rem; font-size: .875rem;" onclick="location.href='{{ route('mtshop.admin.products.create') }}'">Добавить</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover sortable">
                            <thead>
                                <tr>
                                    <th class="text-center sorttable_nosort">
                                        <input class="cursor-pointer" type="checkbox" name="" id="selectAll">
                                    </th>
                                    <th class="text-center cursor-pointer u-select-none">Артикул</th>
                                    <th class="cursor-pointer u-select-none">Название</th>
                                    <th class="text-center cursor-pointer u-select-none">Категория</th>
                                    <th class="text-center cursor-pointer u-select-none">Тип</th>
                                    <th class="text-center u-select-none sorttable_nosort">Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $item)
                                    <tr title="{{ $item->name }}">
                                        <td class="text-center">
                                            <input class="cursor-pointer" type="checkbox" name="products[]" value="{{ $item->id }}">
                                        </td>
                                        <td class="text-center text-muted">{{ $item->vcode }}</td>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading text-truncate" style="max-width: 410px;">{{ $item->name }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $item->category->name }}</td>
                                        <td class="text-center">
                                            <div class="badge badge-success">{{ $item->type }}</div>
                                        </td>
                                        <td class="text-center nowrap">
                                            <button type="button" id="PopoverCustomT-1" class="btn btn-warning btn-sm" onclick="location.href='{{ route('mtshop.admin.products.show', ['slug' => $item->slug]) }}'" title="Просмотр">
                                                <i class="pe-7s-next-2"></i>
                                            </button>
                                            <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm" onclick="location.href='{{ route('mtshop.admin.products.edit', ['slug' => $item->slug]) }}'" title="Редактировать">
                                                <i class="pe-7s-pen"></i>
                                            </button>
                                            <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm" onclick="location.href='{{ route('mtshop.admin.products.delete', ['slug' => $item->slug]) }}'" title="Удалить" disabled>
                                                <i class="pe-7s-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="6">Пока здесь ничего нет</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <img class="mr-2 mb-2" src="{{ asset('/assets/admin/images/curve-thin-up-arrow.svg') }}" alt="" width="16px" height="16px">
                        <div class="dropdown d-inline-block">
                            <div class="dropright btn-group">
                                <button class="btn-wide btn btn-primary">С отмеченными:</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-primary"><span class="sr-only">Toggle Dropdown</span></button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="submit" name="action" value="delete" tabindex="0" class="dropdown-item btn-outline-danger" disabled>Удалить</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <h6 tabindex="-1" class="dropdown-header">Переместить в</h6>
                                    <button type="submit" name="action" value="move-to-hit" tabindex="0" class="dropdown-item">Хит продаж</button>
                                    <button type="submit" name="action" value="move-to-new" tabindex="0" class="dropdown-item">Новые товары</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <h6 tabindex="-1" class="dropdown-header">Изменить категорию на</h6>
                                    <div style="padding: .4rem 1.5rem;">
                                        <select class="form-control" name="category">
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" name="action" value="change-category" tabindex="0" class="dropdown-item btn-outline-success">Сохранить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $('#selectAll').click(function(e){
            var table= $(e.target).closest('table');
            $('td input:checkbox',table).prop('checked',this.checked);
        });
    </script>
@endpush