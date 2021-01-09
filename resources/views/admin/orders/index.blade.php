@extends('admin.base')

@section('title', 'Заказы')

@section('subtitle', 'Все заказы')

@section('icon', 'pe-7s-shopbag')

@section('active-orders', 'mm-active')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <form action="{{ route('mtshop.admin.products.submit') }}" method="post">
                    @csrf
                    <div class="card-header">{{ $ordersType ?? 'Все заказы' }}
                        <div class="btn-actions-pane-right">
                            <div role="group" class="btn-group-sm btn-group">
                                <button class="@if (!$ordersType) active @endif btn btn-primary" type="button" onclick="location.href='{{ route('mtshop.admin.orders') }}'">Все</button>
                                <button class="@if ($ordersType == 'Новые заказы') active @endif btn btn-primary" type="button" onclick="location.href='{{ route('mtshop.admin.orders', ['type' => 'new']) }}'">Новые</button>
                            </div>
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
                            <tr>
                                <td class="text-center">
                                    <input class="cursor-pointer" type="checkbox" name="product-000541" id="">
                                </td>
                                <td class="text-center text-muted">000541</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">DeWALT LAKA DWE4051</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">Электротовары</td>
                                <td class="text-center">
                                    <div class="badge badge-success">Хит</div>
                                </td>
                                <td class="text-center nowrap">
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-warning btn-sm" onclick="location.href='{{ route('mtshop.admin.products.show', ['slug' => '000541']) }}'" title="Просмотр">
                                        <i class="pe-7s-next-2"></i>
                                    </button>
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm" onclick="location.href='{{ route('mtshop.admin.products.edit', ['slug' => '000541']) }}'" title="Редактировать">
                                        <i class="pe-7s-pen"></i>
                                    </button>
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm" onclick="location.href='{{ route('mtshop.admin.products.delete', ['slug' => '000541']) }}'" title="Удалить">
                                        <i class="pe-7s-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input class="cursor-pointer" type="checkbox" name="product-000542" id="">
                                </td>
                                <td class="text-center text-muted">000542</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">DeWALT LAKA DWE4052</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">Дрель</td>
                                <td class="text-center">
                                    <div class="badge badge-success">Новинки</div>
                                </td>
                                <td class="text-center nowrap">
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-warning btn-sm" onclick="location.href='{{ route('mtshop.admin.products.show', ['slug' => '000542']) }}'" title="Просмотр">
                                        <i class="pe-7s-next-2"></i>
                                    </button>
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm" onclick="location.href='{{ route('mtshop.admin.products.edit', ['slug' => '000542']) }}'" title="Редактировать">
                                        <i class="pe-7s-pen"></i>
                                    </button>
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm" onclick="location.href='{{ route('mtshop.admin.products.delete', ['slug' => '000542']) }}'" title="Удалить">
                                        <i class="pe-7s-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input class="cursor-pointer" type="checkbox" name="product-000543" id="">
                                </td>
                                <td class="text-center text-muted">000543</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">DeWALT LAKA DWE4053</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">Дрель</td>
                                <td class="text-center">
                                    <div class="badge badge-success">По акций</div>
                                </td>
                                <td class="text-center nowrap">
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-warning btn-sm" onclick="location.href='{{ route('mtshop.admin.products.show', ['slug' => '000543']) }}'" title="Просмотр">
                                        <i class="pe-7s-next-2"></i>
                                    </button>
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm" onclick="location.href='{{ route('mtshop.admin.products.edit', ['slug' => '000543']) }}'" title="Редактировать">
                                        <i class="pe-7s-pen"></i>
                                    </button>
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm" onclick="location.href='{{ route('mtshop.admin.products.delete', ['slug' => '000543']) }}'" title="Удалить">
                                        <i class="pe-7s-trash"></i>
                                    </button>
                                </td>
                            </tr>
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
                                    <button type="submit" name="action" value="delete" tabindex="0" class="dropdown-item btn-outline-danger">Удалить</button>
                                    <h6 tabindex="-1" class="dropdown-header">Переместить в</h6>
                                    <button type="submit" name="action" value="move-to-hit" tabindex="0" class="dropdown-item">Хит продаж</button>
                                    <button type="submit" name="action" value="move-to-new" tabindex="0" class="dropdown-item">Новые товары</button>
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