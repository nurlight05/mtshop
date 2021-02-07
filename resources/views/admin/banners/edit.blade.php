@extends('admin.base')

@section('title', 'Баннеры')

@section('subtitle', 'Изменить баннер')

@section('icon', 'pe-7s-photo-gallery')

@section('active-banners', 'mm-active')

@section('content')
<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Изменить баннер</h5>
        <form class="" action="{{ route('mtshop.admin.banners.update', ['banner' => $banner->id]) }}" method="POST" enctype="multipart/form-data">
        {{-- <form action="" enctype="multipart/form-data"> --}}
            @csrf
            <div class="position-relative row form-group">
                <label for="url" class="col-sm-2 col-form-label">Картинка</label>
                <div class="col-sm-10">
                    <img class="img-fluid mb-3" id="image-container" src="{{ $banner->url ?? 'http://placehold.it/640x420' }}" alt="" style="max-height: 200px;">
                    <label for="image" class="btn btn-primary d-block" style="max-width: 150px;">Выбрать картинку</label>
                    <input type="file" name="image" id="image">
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="url" class="col-sm-2 col-form-label">Ссылка</label>
                <div class="col-sm-10">
                    <input name="url" id="url" placeholder="Введите ссылку" type="text" class="form-control" value="{{ old('url') ?? $banner->hyperlink }}">
                </div>
            </div>
            <div class="position-relative row form-check">
                <div class="col-sm-10 offset-sm-2 pl-0">
                    <button class="btn btn-primary" type="button" onclick="location.href='{{ route('mtshop.admin.banners') }}'">Назад</button>
                    <button class="btn btn-success" type="submit">Сохранить</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('styles')
    <style>
        #image {
            width: 1px;
            height: 1px;
            opacity: 0;
            z-index: -1;
        }
    </style>
@endpush

@push('scripts')
    <script>
        $('#image').change(function(e){
            var curElement = $('#image-container');
            var reader = new FileReader();

            reader.onload = function (e) {
                curElement.attr('src', e.target.result);
            };

            reader.readAsDataURL(this.files[0]);
        });
    </script>
@endpush