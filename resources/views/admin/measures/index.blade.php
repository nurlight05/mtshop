@extends('admin.base')

@section('title', 'Измерении')

@section('subtitle', 'Все измерении')

@section('icon', 'pe-7s-stopwatch')

@section('active-measures', 'mm-active')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <form action="{{ route('mtshop.admin.measures.submit') }}" method="post">
                    @csrf
                    <div class="card-header">
                        Все измерения
                        <div class="btn-actions-pane-right">
                            <div role="group" class="btn-group-sm btn-group">
                                <button class="btn btn-success" type="button" onclick="location.href='{{ route('mtshop.admin.measures.create') }}'">Добавить</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-hover sortable">
                            <thead>
                                <tr>
                                    <th class="text-center sorttable_nosort">
                                        <input class="cursor-pointer" type="checkbox" name="" id="selectAll">
                                    </th>
                                    <th class="cursor-pointer u-select-none">Название</th>
                                    <th class="text-center u-select-none sorttable_nosort">Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($measures as $item)
                                    <tr>
                                        <td class="text-center">
                                            <input class="cursor-pointer" type="checkbox" name="measures[]" value="{{ $item->id }}" id="">
                                        </td>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">{{ $item->name }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center nowrap">
                                            <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm" onclick="location.href='{{ route('mtshop.admin.measures.edit', ['id' => $item->id]) }}'" title="Редактировать">
                                                <i class="pe-7s-pen"></i>
                                            </button>
                                            <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm" onclick="location.href='{{ route('mtshop.admin.measures.delete', ['id' => $item->id]) }}'" title="Удалить" disabled>
                                                <i class="pe-7s-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="3">Пока здесь ничего нет</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <img class="mr-2 mb-2" src="{{ asset('/assets/admin/images/curve-thin-up-arrow.svg') }}" alt="" width="16px" height="16px">
                        <div class="dropdown d-inline-block">
                            <div class="dropright btn-group">
                                <button class="btn-wide btn btn-primary" type="button">С отмеченными:</button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-primary"><span class="sr-only">Toggle Dropdown</span></button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="submit" name="action" value="delete" tabindex="0" class="dropdown-item btn-outline-danger">Удалить</button>
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
            $('td input:checkbox', table).not('#not-deletable').prop('checked',this.checked);
        });
    </script>
@endpush