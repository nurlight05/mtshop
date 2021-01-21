@extends('admin.base')

@section('title', 'Характеристики')

@section('subtitle', 'Добавить характеристику')

@section('icon', 'pe-7s-edit')

@section('active-attributes', 'mm-active')

@section('content')
<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Добавить характеристику</h5>
        <form class="" action="{{ route('mtshop.admin.attributes.store') }}" method="POST">
            @csrf
            <div class="position-relative row form-group">
                <label for="name" class="col-sm-2 col-form-label">Название</label>
                <div class="col-sm-10">
                    <input name="name" id="name" placeholder="Введите название измерений" type="text" class="form-control" value="{{ old('name') }}" required>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="measure" class="col-sm-2 col-form-label">Измерение *</label>
                <div class="col-sm-10">
                    <select class="form-control" name="measure" id="measure">
                        <option value="null" selected disabled hidden>Выберите измерение</option>
                        @foreach ($measures as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="position-relative row form-check">
                <div class="col-sm-10 offset-sm-2 pl-0">
                    <button class="btn btn-secondary js-attribute-create" type="submit">Добавить</button>
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
                $('.js-attribute-create').removeClass('btn-secondary').addClass('btn-success')
        })

        // Enable create button if name input is not empty
        $('#name').keyup(function() {
            if ($(this).val() != '')
                $('.js-attribute-create').removeClass('btn-secondary').addClass('btn-success')
            else 
                $('.js-attribute-create').addClass('btn-secondary').removeClass('btn-success')
        })
    </script>
@endpush