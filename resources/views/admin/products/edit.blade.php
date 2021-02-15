@extends('admin.base')

@section('title', 'Товары')

@section('subtitle', 'Изменить товар')

@section('icon', 'pe-7s-box2')

@section('active-products', 'mm-active')

@section('content')
<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Изменить товар</h5>
        <form class="" action="{{ route('mtshop.admin.products.update', ['slug' => $product->slug]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="position-relative row form-group">
                <label for="name" class="col-sm-2 col-form-label">Название</label>
                <div class="col-sm-10">
                    <input name="name" id="name" placeholder="Введите название товара" type="text" class="form-control" value="{{ $product->name }}" required>
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="slug" value="{{ $product->slug }}">
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="vcode" class="col-sm-2 col-form-label">Артикул</label>
                <div class="col-sm-10">
                    <input name="vcode" id="vcode" placeholder="Введите артикул товара" type="text" class="form-control" value="{{ $product->vcode }}" required>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="category" class="col-sm-2 col-form-label">Категория</label>
                <div class="col-sm-10">
                    <select class="form-control" name="category" id="category">
                        {{-- <option value="null" selected hidden disabled>Выберите категорию товара</option> --}}
                        @forelse ($categories as $item)
                            <option value="{{ $item->id }}" @if ($item->id == $product->category->id) selected @endif>{{ $item->name }}</option>
                            @forelse ($item->childs as $item2)
                                <option value="{{ $item2->id }}" @if ($item2->id == $product->category->id) selected @endif>&nbsp;&nbsp;&nbsp; {{ $item2->name }}</option>
                                @forelse ($item2->childs as $item3)
                                    <option value="{{ $item3->id }}" @if ($item3->id == $product->category->id) selected @endif>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $item3->name }}</option>
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
                    <input name="price" id="price" placeholder="Цена товара" type="number" class="form-control" value="{{ $product->price }}" min="0" required>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="type" class="col-sm-2 col-form-label">Тип</label>
                <div class="col-sm-10">
                    <select class="form-control" name="type" id="type">
                        <option value="1" @if ($product->type == 1) selected @endif>Новый</option>
                        <option value="2" @if ($product->type == 2) selected @endif>Хит</option>
                        <option value="3" @if ($product->type == 3) selected @endif>По акции</option>
                    </select>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="discount" class="col-sm-2 col-form-label">Скидка (%)</label>
                <div class="col-sm-10">
                    <input name="discount" id="discount" placeholder="Процент" type="number" class="form-control" value="{{ $product->discount ?? '' }}" min="0" disabled>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="images" class="col-sm-2 col-form-label">Картинки</label>
                <div class="col-sm-10">
                    <div class="row">
                        @forelse ($product->images as $item)
                            <div class="col-md-3 mb-2">
                                <img src="{{ $item->url }}" alt="" style="width: 100%; height: auto;">
                                <button class="btn btn-danger btn-sm" type="button" style="position: absolute; top: 0; right: 15px;" onclick="location.href='{{ route('mtshop.admin.products.image.delete', ['id' => $item->id]) }}'" title="Удалить картину"><i class="pe-7s-close"></i></button>
                            </div>
                        @empty
                            {{-- Nothing --}}
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="images" class="col-sm-2 col-form-label">Добавить картинки *</label>
                <div class="col-sm-10">
                    <input type="file" name="images[]" class="form-control-file" multiple>
                </div>
            </div>
            <div id="attributes"></div>
            <div id="attributesDb"></div>
            <div id="attributesCategory"></div>

            <div class="position-relative row form-group">
                <label for="" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10" id="attributes-field">
                    <button class="btn btn-success js-attributes-modal-button mb-1" type="button" data-toggle="modal" data-target="#modalAddAttribute">
                        <i class="pe-7s-plus"></i>
                        Добавить характеристику
                    </button>
                </div>
            </div>

            <div class="position-relative row form-group">
                <label for="quantity" class="col-sm-2 col-form-label">Количество</label>
                <div class="col-sm-10">
                    <input class="form-control" type="number" name="quantity" id="quantity" placeholder="Введите количество товара" value="{{ $product->quantity }}" min="0" required>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="description" class="col-sm-2 col-form-label">Описание</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Описание товара">{{ $product->description }}</textarea>
                </div>
            </div>
            <div class="position-relative row form-check">
                <div class="col-sm-10 offset-sm-2 pl-0">
                    <button class="btn btn-success" type="submit">Сохранить</button>
                </div>
            </div>
            <small class="form-text text-muted">* - необъязательные поля</small>
            <small class="form-text text-muted">* - Чтобы удалить характеристику из товара, просто оставьте поле пустым</small>
        </form>
    </div>
</div>
@endsection

@push('modals')
    <div class="modal fade" id="modalAddAttribute" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Добавить характеристику</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <select class="form-control" name="" id="attributesSelect"></select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                    <button type="button" class="btn btn-success js-attribute-add">Добавить</button>
                </div>
            </div>
        </div>
    </div>
@endpush

@push('styles')
    {{-- styles --}}
@endpush

@push('scripts')
    {{-- scripts --}}
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        $dbAttributes = []
        $dbAttributesCopy = []
        $attributes = []
        $categoryAttributes = []

        function comparer($otherArray){
            return function($current){
                return $otherArray.filter(function($other){
                    return $other.id == $current.id
                }).length == 0;
            }
        }

        function sortByKeyDesc($array, key) {
            return $array.sort(function (a, b) {
                var x = a[key]; var y = b[key];
                return ((x > y) ? -1 : ((x < y) ? 1 : 0));
            });
        }

        function sortByKeyAsc($array, key) {
            return $array.sort(function (a, b) {
                var x = a[key]; var y = b[key];
                return ((x < y) ? -1 : ((x > y) ? 1 : 0));
            });
        }

        function refreshAttributesSelect() {
            $options = ''
            $dbAttributes.forEach(element => {
                $options += '<option value="'+ element.id +'">'+ element.name
                if (element.measure)
                    $options += ' ('+ element.measure.name +')'
                $options += '</option>'
            })
            $('#attributesSelect').html($options)
        }

        function refreshAttributesAddButton() {
            if ($dbAttributes.length == 0)
                $('.js-attributes-modal-button').prop('disabled', true)
            else
                $('.js-attributes-modal-button').prop('disabled', false)
        }

        function refreshAttributesSelectDelete($id) {
            $dbAttributes = $.grep($dbAttributes, function(e){ 
                return e.id != $id;
            })
            $dbAttributes = sortByKeyAsc($dbAttributes, 'name');
        }

        function refreshProductAttributesAdd($id) {
            $attribute = $dbAttributes.find(x => x.id == $id)
            $attributes.push($attribute)
            // sortByKeyAsc($attributes, 'id')
        }

        function refreshAttributesDbFieldAdd($id) {
            $attribute = $dbAttributes.find(x => x.id == $id)
            $attributeInput =    '<div class="position-relative row form-group">' +
                                    '<label for="attribute-' + $attribute.id + '" class="col-sm-2 col-form-label">' + $attribute.name.substr(0,1).toUpperCase() + $attribute.name.substr(1); 
            if ($attribute.measure != null)
                $attributeInput += ' (' + $attribute.measure.name + ')'
            $attributeInput +=   ' *</label>' +
                                '<div class="col-sm-10">' +
                                    '<input name="values[]" id="attribute-' + $attribute.id + '" type="text" class="form-control" value="">' +
                                    '<input name="attributes[]" type="hidden" value="' + $attribute.id + '">' +
                                '</div>' +
                            '</div>'
            $('#attributesDb').append($attributeInput)
        }

        $('.js-attribute-add').click(function() {
            $id = $('#attributesSelect').children('option:selected').val()
            // add attribute to product attributes
            refreshProductAttributesAdd($id)

            // add input to attributes db field
            refreshAttributesDbFieldAdd($id)

            // refresh attributes select
            refreshAttributesSelectDelete($id)

            // refresh attributes select
            refreshAttributesSelect()

            // close modal 
            $('.close').click();

            // check add attribute button
            refreshAttributesAddButton()
        })

        $(document).ready(function() {
            $attributes = {!! json_encode($product->attributes->load('measure')->toArray()) !!}
            $dbAttributes = {!! json_encode($attributesAll->load('measure')->toArray()) !!}
            $dbAttributes = $dbAttributes.filter(comparer($attributes))
            $dbAttributesCopy = $dbAttributes
            refreshAttributesSelect()
            refreshAttributesAddButton()
            
            $('#attributes').empty()
            $attributes.forEach(element => {
                $attribute =    '<div class="position-relative row form-group">' +
                                    '<label for="attribute-' + element.id + '" class="col-sm-2 col-form-label">' + element.name.substr(0,1).toUpperCase() + element.name.substr(1); 
                if (element.measure != null)
                    $attribute += ' (' + element.measure.name + ')'
                $attribute +=       ' *</label>' +
                                    '<div class="col-sm-10">' +
                                        '<input name="values[]" id="attribute-' + element.id + '" type="text" class="form-control" value="' + element.pivot.value + '">' +
                                        '<input name="attributes[]" type="hidden" value="' + element.id + '">' +
                                    '</div>' +
                                '</div>'
                $('#attributes').append($attribute)
            })

            $type = $('#type').val()
            if ($type == 3) {
                $('#discount').prop('disabled', false)
                $('#discount').prop('required', true)
            } else {
                $('#discount').prop('disabled', true)
                $('#discount').prop('required', false)
            }
        })

        $('#type').change(function() {
            if ($(this).val() == 3) {
                $('#discount').prop('disabled', false)
                $('#discount').prop('required', true)
                $('#discount').val(null)
            } else {
                $('#discount').prop('disabled', true)
                $('#discount').prop('required', false)
                $('#discount').val(null)
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
                success: function($data) {
                    $categoryAttributes = $data.filter(comparer($attributes))

                    $temp = $categoryAttributes.slice()
                    $intersectionAttributes = $dbAttributesCopy.filter(function(attribute) {
                        return $attributes.some(function(obj) {
                            return obj.id === attribute.id
                        })
                    })
                    if (!$.isEmptyObject($intersectionAttributes))
                        $intersectionAttributes.forEach(element => {
                            $temp.push(element)
                        })
                        
                    $dbAttributes = $dbAttributesCopy.filter(comparer($temp))
                    if ($.isEmptyObject($categoryAttributes))
                        $dbAttributes = $dbAttributesCopy.filter(comparer($attributes))
                    refreshAttributesSelect()
                    refreshAttributesAddButton()
                    
                    $('#attributesCategory').empty()
                    $categoryAttributes.forEach(element => {
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
                        $('#attributesCategory').append($attribute)
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
        })
    </script>
@endpush