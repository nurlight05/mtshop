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
                <form action="{{ route('mtshop.admin.orders.submit') }}" method="post">
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
                                    <th class="text-center cursor-pointer u-select-none">№</th>
                                    <th class="cursor-pointer u-select-none">Имя</th>
                                    <th class="text-center cursor-pointer u-select-none">Дата</th>
                                    <th class="text-center cursor-pointer u-select-none">Сумма</th>
                                    <th class="text-center cursor-pointer u-select-none">Тип доставки</th>
                                    <th class="text-center cursor-pointer u-select-none">Оплачен</th>
                                    <th class="text-center u-select-none sorttable_nosort">Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $item)
                                    <tr>
                                        <td class="text-center">
                                            <input class="cursor-pointer" type="checkbox" name="orders[]" value="{{ $item->id }}" id="">
                                        </td>
                                        <td class="text-center text-muted">{{ $item->id }}</td>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">{{ $item->name.' ('.$item->phone.')' }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $item->created_at }}</td>
                                        <td class="text-center">{{ $item->amount }} тг</td>
                                        <td class="text-center">{{ $item->delivery_type_text }}</td>
                                        <td class="text-center">
                                            @if ($item->paid == 0)
                                                <div class="badge badge-danger">Нет</div>
                                            @else
                                                <div class="badge badge-success">Да</div>
                                            @endif
                                        </td>
                                        <td class="text-center nowrap">
                                            <button type="button" id="PopoverCustomT-1" class="btn btn-warning btn-sm" onclick="location.href='{{ route('mtshop.admin.orders.show', ['order' => $item->id]) }}'" title="Просмотр">
                                                <i class="pe-7s-next-2"></i>
                                            </button>
                                            @if ($item->paid == 0)
                                                <button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm" onclick="location.href='{{ route('mtshop.admin.orders.check-as-paid', ['order' => $item->id]) }}'" title="Отметить оплаченным">
                                                    <i class="pe-7s-check"></i>
                                                </button>
                                            @endif
                                            <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm" onclick="location.href='{{ route('mtshop.admin.orders.delete', ['order' => $item->id]) }}'" title="Удалить">
                                                <i class="pe-7s-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="8">Пока здесь ничего нет</td>
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
                                    <button type="submit" name="action" value="delete" tabindex="0" class="dropdown-item btn-outline-danger">Удалить</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="submit" name="action" value="check-as-paid" tabindex="0" class="dropdown-item btn-outline-success">Отметить оплаченным</button>
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