@extends('admin.base')

@section('title', 'Товары')

@section('subtitle', 'Создать новый товар')

@section('icon', 'pe-7s-box2')

@section('active-products', 'mm-active')

@section('content')
<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Добавить товар</h5>
        <form class="" action="{{ route('mtshop.admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="position-relative row form-group">
                <label for="name" class="col-sm-2 col-form-label">Название</label>
                <div class="col-sm-10">
                    <input name="name" id="name" placeholder="Введите название товара" type="text" class="form-control" value="{{ old('name') }}" required>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="vcode" class="col-sm-2 col-form-label">Артикул</label>
                <div class="col-sm-10">
                    <input name="vcode" id="vcode" placeholder="Введите артикул товара" type="text" class="form-control" value="{{ old('vcode') }}" required>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="category" class="col-sm-2 col-form-label">Категория</label>
                <div class="col-sm-10">
                    <select class="form-control" name="category" id="category">
                        <option value="null" selected hidden disabled>Выберите категорию товара</option>
                        @forelse ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @forelse ($item->childs as $item2)
                                <option value="{{ $item2->id }}">&nbsp;&nbsp;&nbsp; {{ $item2->name }}</option>
                                @forelse ($item2->childs as $item3)
                                    <option value="{{ $item3->id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $item3->name }}</option>
                                @empty
                                    {{-- Nothing --}}
                                @endforelse
                            @empty
                                {{-- Nothing --}}
                            @endforelse
                        @empty
                            {{-- Nothing --}}
                        @endforelse
                    </select>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="price" class="col-sm-2 col-form-label">Цена</label>
                <div class="col-sm-10">
                    <input name="price" id="price" placeholder="Цена товара" type="number" class="form-control" value="{{ old('price') }}" min="0" required>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="type" class="col-sm-2 col-form-label">Тип</label>
                <div class="col-sm-10">
                    <select class="form-control" name="type" id="type">
                        <option value="1">Новый</option>
                        <option value="2">Хит</option>
                        <option value="3">По акции</option>
                    </select>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="discount" class="col-sm-2 col-form-label">Скидка (%)</label>
                <div class="col-sm-10">
                    <input name="discount" id="discount" placeholder="Процент" type="number" class="form-control" value="{{ old('discount') }}" min="0" disabled>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="images" class="col-sm-2 col-form-label">Картинки</label>
                <div class="col-sm-10">
                    <input type="file" name="images[]" class="form-control-file" multiple>
                </div>
            </div>
            <div id="attributes"></div>
            <div class="position-relative row form-group">
                <label for="quantity" class="col-sm-2 col-form-label">Количество</label>
                <div class="col-sm-10">
                    <input class="form-control" type="number" name="quantity" id="quantity" placeholder="Введите количество товара" min="0" required>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="description" class="col-sm-2 col-form-label">Описание</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Описание товара"></textarea>
                </div>
            </div>
            <div class="position-relative row form-check">
                <div class="col-sm-10 offset-sm-2 pl-0">
                    <button class="btn btn-success" type="submit">Добавить</button>
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
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        $('#type').change(function() {
            if ($(this).val() == 3) {
                $('#discount').prop('disabled', false)
                $('#discount').prop('required', true)
            } else {
                $('#discount').prop('disabled', true)
                $('#discount').prop('required', false)
            }
        })

        $('#category').change(function() {
            $id = $(this).val()
            $.ajax({
                url: '{{ route("mtshop.admin.categories.attributes") }}',
                method: 'get',
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                data: {
                    id: $id
                },
                success: function(data) {
                    $('#attributes').empty()
                    data.forEach(element => {
                        $attribute =    '<div class="position-relative row form-group">' +
                                            '<label for="attribute-' + element.id + '" class="col-sm-2 col-form-label">' + element.name.substr(0,1).toUpperCase() + element.name.substr(1); 
                        if (element.measure != null)
                            $attribute += ' (' + element.measure.name + ')'
                        $attribute +=       ' *</label>' +
                                            '<div class="col-sm-10">' +
                                                '<input name="values[]" id="attribute-' + element.id + '" type="text" class="form-control">' +
                                                '<input name="attributes[]" type="hidden" value="' + element.id + '">' +
                                            '</div>' +
                                        '</div>'
                        $('#attributes').append($attribute)
                    });
                },
                error: function(error) {
                    console.log(error)
                }
            })
        })

        tinymce.init({
            selector:'#description',
            language: 'ru'
            });
    </script>
@endpush