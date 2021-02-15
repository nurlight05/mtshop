@extends('admin.base')

@section('title', 'Категории')

@section('subtitle', 'Изменить категорию')

@section('icon', 'pe-7s-network')

@section('active-categories', 'mm-active')

@section('content')
<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Изменить категорию</h5>
        <form class="" action="{{ route('mtshop.admin.categories.update', ['slug' => $category->slug]) }}" method="POST">
            @csrf
            <div class="position-relative row form-group">
                <label for="name" class="col-sm-2 col-form-label">Название</label>
                <div class="col-sm-10">
                    <input name="name" id="name" placeholder="Введите название характеристики" type="text" class="form-control" value="{{ old('name') ?? $category->name }}" required>
                    <input type="hidden" name="id" value="{{ $category->id }}">
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="parent" class="col-sm-2 col-form-label">Внутри *</label>
                <div class="col-sm-10">
                    <select class="form-control" name="parent" id="parent">
                        <option value="null" selected disabled hidden>Выберите родительскую категорию</option>
                        <option value="null">Не выбрано</option>
                        @forelse ($categories as $item)
                            {{-- Disable if same category id --}}
                            @if ($item->id != $category->id)
                                {{-- Check if this its parent --}}
                                @if ($category->parent_id == $item->id)
                                    <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                @else
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endif
                                @forelse ($item->childs as $item2)
                                    {{-- Disable if same category id for childs --}}
                                    @if ($item2->id != $category->id)
                                        @if ($category->parent_id == $item2->id)
                                            <option value="{{ $item2->id }}" selected>&nbsp;&nbsp;&nbsp; {{ $item2->name }}</option>
                                        @else
                                            <option value="{{ $item2->id }}">&nbsp;&nbsp;&nbsp; {{ $item2->name }}</option>
                                        @endif
                                    @else
                                        <option value="{{ $item2->id }}" disabled>&nbsp;&nbsp;&nbsp; {{ $item2->name }}</option>
                                    @endif
                                @empty
                                    {{-- Nothing --}}
                                @endforelse
                            @else
                                <option value="{{ $item->id }}" disabled>{{ $item->name }}</option>
                                @forelse ($item->childs as $item2)
                                    <option value="{{ $item2->id }}" disabled>&nbsp;&nbsp;&nbsp; {{ $item2->name }}</option>
                                @empty
                                    {{-- Nothing --}}
                                @endforelse
                            @endif
                        @empty
                            {{-- Nothing --}}
                        @endforelse
                    </select>
                    <input type="hidden" name="parentOld" value="{{ $category->parent_id }}">
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="" class="col-sm-2 col-form-label">Характеристики *</label>
                <div class="col-sm-10" id="attributes-field">
                    <button class="btn btn-success js-attributes-modal-button mb-1" type="button" data-toggle="modal" data-target="#modalAddAttribute">
                        <i class="pe-7s-plus"></i>
                        Добавить
                    </button>
                </div>
            </div>
            <div class="position-relative row form-check">
                <div class="col-sm-10 offset-sm-2 pl-0">
                    <button class="btn btn-secondary js-category-edit" type="submit">Изменить</button>
                </div>
            </div>
            <small class="form-text text-muted">* - необъязательные поля</small>
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
                    <select class="form-control" name="" id="attributes"></select>
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
    <script>
        $attributesAll = []
        $categoryAttributes = []
        $attributesUnused = []

        function objectsEqual(o1, o2) {
            return o1.id === o2.id
        }

        function subtractArrays(a1, a2) {
            var arr = [];
            a1.forEach((o1) => {
                var found = false;
                a2.forEach((o2) => {
                    if (objectsEqual(o1, o2)) {
                        found = true;
                    }  
                });
                if (!found) {
                    arr.push(o1);
                }
            })
            return arr;
        }

        function sortByKeyDesc(array, key) {
            return array.sort(function (a, b) {
                var x = a[key]; var y = b[key];
                return ((x > y) ? -1 : ((x < y) ? 1 : 0));
            });
        }

        function sortByKeyAsc(array, key) {
            return array.sort(function (a, b) {
                var x = a[key]; var y = b[key];
                return ((x < y) ? -1 : ((x > y) ? 1 : 0));
            });
        }

        function refreshAttributesField() {
            $.each($categoryAttributes, function(key, value) {
                $attribute = value
                $button = '<button class="btn btn-primary mr-1 mb-1" type="button" data-id="'+ $attribute.id +'">'+ $attribute.name
                if ($attribute.measure)
                    $button += ' ('+ $attribute.measure.name +')'
                $button += '<i class="pe-7s-close js-attribute-remove"></i></button>'
                $button += '<input type="hidden" name="attributes[]" value="'+ $attribute.id +'">'
                $('#attributes-field').prepend($button)
            })
        }

        function refreshAttributesSelect() {
            $options = ''
            $attributesUnused.forEach(element => {
                $options += '<option value="'+ element.id +'">'+ element.name
                if (element.measure)
                    $options += ' ('+ element.measure.name +')'
                $options += '</option>'
            })
            $('#attributes').html($options)
        }

        function refreshAttributesDelete($id) {
            $attributesUnused = $.grep($attributesUnused, function(e){ 
                return e.id != $id;
            })
            $attributesUnused = sortByKeyAsc($attributesUnused, 'name');
        }

        function refreshAttributesFieldAdd($id) {
            $attribute = $attributesAll.find(x => x.id == $id)
            $button = '<button class="btn btn-primary mr-1 mb-1" type="button" data-id="'+ $attribute.id +'">'+ $attribute.name
            if ($attribute.measure)
                $button += ' ('+ $attribute.measure.name +')'
            $button += '<i class="pe-7s-close js-attribute-remove"></i></button>'
            $button += '<input type="hidden" name="attributes[]" value="'+ $attribute.id +'">'
            $('#attributes-field').prepend($button)
        }

        function refreshAttributesAddButton() {
            if ($attributesUnused.length == 0)
                $('.js-attributes-modal-button').prop('disabled', true)
            else
                $('.js-attributes-modal-button').prop('disabled', false)
        }

        function refreshAttributesAdd($id) {
            $attribute = $attributesAll.find(x => x.id == $id)
            $attributesUnused.push($attribute)
            $attributesUnused = sortByKeyAsc($attributesUnused, 'name');
        }

        $('.js-attribute-add').click(function() {
            $id = $('#attributes').children('option:selected').val()
            // refresh attributes
            refreshAttributesDelete($id)
            // add button to attributes field
            refreshAttributesFieldAdd($id)
            // refresh attributes select
            refreshAttributesSelect()
            // close modal 
            $('.close').click();
            // check add attribute button
            refreshAttributesAddButton()
        })

        $('body').on('click', 'i.js-attribute-remove', function() {
            $id = $(this).closest('button').data('id')
            // refresh attributes
            refreshAttributesAdd($id)
            // remove button from attributes field
            $('#attributes-field').find('button[data-id='+ $id +']').remove()
            $('#attributes-field').find('input[value='+ $id +']').remove()
            // refresh attributes select
            refreshAttributesSelect()
            // check add attribute button
            refreshAttributesAddButton()
        })

        $(document).ready(function() {
            if ($('#name').val() != '')
                $('.js-category-edit').removeClass('btn-secondary').addClass('btn-success')

            // get category attributes
            $categoryAttributes = {!! json_encode($category->attributes->toArray()) !!}
            // create attribute buttons
            refreshAttributesField()
            // get all attributes
            $attributesAll = {!! json_encode($attributes->toArray()) !!}
            // get unused attributes
            $attributesUnused = subtractArrays($attributesAll, $categoryAttributes)
            // load unused attributes select
            refreshAttributesSelect()

            refreshAttributesAddButton()
        })

        // Enable create button if name input is not empty
        $('#name').keyup(function() {
            if ($(this).val() != '')
                $('.js-category-edit').removeClass('btn-secondary').addClass('btn-success')
            else 
                $('.js-category-edit').addClass('btn-secondary').removeClass('btn-success')
        })
    </script>
@endpush