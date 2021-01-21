@extends('admin.base')

@section('title', 'Характеристики')

@section('subtitle', 'Изменить характеристику')

@section('icon', 'pe-7s-edit')

@section('active-attributes', 'mm-active')

@section('content')
<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Изменить характеристику</h5>
        <form class="" action="{{ route('mtshop.admin.attributes.update', ['id' => $attribute->id]) }}" method="POST">
            @csrf
            <div class="position-relative row form-group">
                <label for="name" class="col-sm-2 col-form-label">Название</label>
                <div class="col-sm-10">
                    <input name="name" id="name" placeholder="Введите название характеристики" type="text" class="form-control" value="{{ old('name') ?? $attribute->name }}" required>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="measure" class="col-sm-2 col-form-label">Измерение *</label>
                <div class="col-sm-10">
                    <select class="form-control" name="measure" id="measure">
                        @if (!$attribute->measure)
                            <option value="null" selected disabled hidden>Выберите измерение</option>
                        @endif
                        <option value=null>Не выбрано</option>
                        @foreach ($measures as $item)
                            @if ($attribute->measure and $attribute->measure->name == $item->name)
                                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                            @else
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="position-relative row form-check">
                <div class="col-sm-10 offset-sm-2 pl-0">
                    <button class="btn btn-secondary js-attribute-edit" type="submit">Изменить</button>
                </div>
            </div>
            <small class="form-text text-muted">* - необъязательные поля</small>
        </form>
    </div>
</div>
@endsection

@push('styles')
    {{-- styles --}}
@endpush

@push('scripts')
    {{-- scripts --}}
    <script>
        $(document).ready(function() {
            if ($('#name').val() != '')
                $('.js-attribute-edit').removeClass('btn-secondary').addClass('btn-success')
        })

        // Enable create button if name input is not empty
        $('#name').keyup(function() {
            if ($(this).val() != '')
                $('.js-attribute-edit').removeClass('btn-secondary').addClass('btn-success')
            else 
                $('.js-attribute-edit').addClass('btn-secondary').removeClass('btn-success')
        })
    </script>
@endpush