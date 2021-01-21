@extends('admin.base')

@section('title', 'Измерении')

@section('subtitle', 'Добавить измерение')

@section('icon', 'pe-7s-stopwatch')

@section('active-measures', 'mm-active')

@section('content')
<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Добавить измерение</h5>
        <form class="" action="{{ route('mtshop.admin.measures.store') }}" method="POST">
            @csrf
            <div class="position-relative row form-group">
                <label for="exampleEmail" class="col-sm-2 col-form-label">Название</label>
                <div class="col-sm-10">
                    <input name="name" id="name" placeholder="Введите название измерений" type="text" class="form-control" value="{{ old('name') }}" required>
                </div>
            </div>
            <div class="position-relative row form-check">
                <div class="col-sm-10 offset-sm-2 pl-0">
                    <button class="btn btn-secondary js-measure-create" type="submit">Добавить</button>
                </div>
            </div>
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
                $('.js-measure-create').removeClass('btn-secondary').addClass('btn-success')
        })

        // Enable create button if name input is not empty
        $('#name').keyup(function() {
            if ($(this).val() != '')
                $('.js-measure-create').removeClass('btn-secondary').addClass('btn-success')
            else 
                $('.js-measure-create').addClass('btn-secondary').removeClass('btn-success')
        })
    </script>
@endpush