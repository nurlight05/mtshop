@extends('admin.base')

@section('title', 'Редактировать')

@section('subtitle', 'Редактировать данные')

@section('icon', 'pe-7s-user')

@section('active-profile', 'mm-active')

@section('content')
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Редактировать данные админа</h5>
            <form class="" action="{{ route('mtshop.admin.profile.update') }}" method="POST">
                @csrf
                <div class="position-relative row form-group">
                    <label for="name" class="col-sm-2 col-form-label">Имя</label>
                    <div class="col-sm-10">
                        <input name="name" id="name" placeholder="Введите имя" type="text" class="form-control js-form-check" value="{{ old('name') ?? Auth::user()->name }}" required>
                    </div>
                </div>
                <div class="position-relative row form-group">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input name="email" id="email" placeholder="Введите электронную почту" type="email" class="form-control js-form-check" value="{{ old('email') ?? Auth::user()->email }}" required>
                    </div>
                </div>
                <div class="position-relative row form-group">
                    <label for="passwordNew" class="col-sm-2 col-form-label">Новый пароль *</label>
                    <div class="col-sm-10">
                        <input name="passwordNew" id="passwordNew" placeholder="Введите новый пароль" type="password" class="form-control" value="" minlength="6">
                        <small class="form-text text-muted">Минимальная длина пароля - 6</small>
                    </div>
                </div>
                <div class="position-relative row form-group">
                    <label for="password" class="col-sm-2 col-form-label">Пароль</label>
                    <div class="col-sm-10">
                        <input name="password" id="password" placeholder="Введите пароль" type="password" class="form-control js-form-check" value="" required>
                        <small class="form-text text-muted">Минимальная длина пароля - 6</small>
                    </div>
                </div>
                <div class="position-relative row form-group">
                    <label for="passwordRepeat" class="col-sm-2 col-form-label">Повторите пароль</label>
                    <div class="col-sm-10">
                        <input name="passwordRepeat" id="passwordRepeat" placeholder="Введите пароль повторно" type="password" class="form-control js-form-check" value="" required>
                        <small class="form-text text-muted">Пароли должны совпадать</small>
                    </div>
                </div>
                <div class="position-relative row form-check">
                    <div class="col-sm-10 offset-sm-2 pl-0">
                        <button class="btn btn-success js-admin-update" type="submit" disabled>Сохранить</button>
                    </div>
                </div>
                <small class="form-text text-muted">* - необъязательные поля</small>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Scripts --}}
    <script>
        $(document).ready(function() {
            $('.js-admin-update').prop('disabled', true)
        })

        $('.js-form-check').keyup(function() {
            $name = $('#name').val()
            $email = $('#email').val()
            $password1 = $('#password').val()
            $password2 = $('#passwordRepeat').val()

            if ($name != '' && 
                $email != '' && 
                $password1 != '' && 
                $password2 != '' &&
                $password1.length >= 6 && 
                $password2.length >= 6 && 
                $password1 == $password2) 
            {
                $('.js-admin-update').prop('disabled', false)
            } else {
                $('.js-admin-update').prop('disabled', true)
            }
        })
    </script>
@endpush