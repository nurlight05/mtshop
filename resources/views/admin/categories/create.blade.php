@extends('admin.base')

@section('title', 'Категории')

@section('subtitle', 'Добавить категорию')

@section('icon', 'pe-7s-network')

@section('active-categories', 'mm-active')

@section('content')
<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Grid</h5>
        <form class="" action="{{ route('mtshop.admin.categories.store') }}" method="POST">
            @csrf
            <div class="position-relative row form-group">
                <label for="exampleEmail" class="col-sm-2 col-form-label">Название</label>
                <div class="col-sm-10">
                    <input name="name" id="name" placeholder="Введите название категории" type="text" class="form-control" required>
                </div>
            </div>
            <div class="position-relative row form-check">
                <div class="col-sm-10 offset-sm-2 pl-0">
                    <button class="btn btn-secondary js-category-create" type="submit">Добавить</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
    {{-- scripts --}}
    <script>
        $('#name').keyup(function() {
            if ($(this).val() != '')
                $('.js-category-create').removeClass('btn-secondary').addClass('btn-success')
            else 
                $('.js-category-create').addClass('btn-secondary').removeClass('btn-success')
        })
    </script>
@endpush