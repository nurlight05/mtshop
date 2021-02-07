@extends('admin.base')

@section('title', 'Категории')

@section('subtitle', 'Добавить категорию')

@section('icon', 'pe-7s-network')

@section('active-categories', 'mm-active')

@section('content')
<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Добавить категорию</h5>
        <form class="" action="{{ route('mtshop.admin.categories.store') }}" method="POST">
            @csrf
            <div class="position-relative row form-group">
                <label for="exampleEmail" class="col-sm-2 col-form-label">Название</label>
                <div class="col-sm-10">
                    <input name="name" id="name" placeholder="Введите название категории" type="text" class="form-control" value="{{ old('name') }}" required>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="parent" class="col-sm-2 col-form-label">Внутри *</label>
                <div class="col-sm-10">
                    <select class="form-control" name="parent" id="parent">
                        <option value="null" selected disabled hidden>Выберите родительскую категорию</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @forelse ($item->childs as $item2)
                                <option value="{{ $item2->id }}">&nbsp;&nbsp;&nbsp; {{ $item2->name }}</option>
                            @empty
                                {{-- Nothing --}}
                            @endforelse
                        @endforeach
                    </select>
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
                    <button class="btn btn-secondary js-category-create" type="submit">Добавить</button>
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

@push('scripts')
    {{-- scripts --}}
    <script>
        $attributesObj = []
        $attributes = []

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

        function refreshAttributesSelect() {
            $options = ''
            $attributes.forEach(element => {
                $options += '<option value="'+ element.id +'">'+ element.name
                if (element.measure)
                    $options += ' ('+ element.measure.name +')'
                $options += '</option>'
            })
            $('#attributes').html($options)
        }

        function refreshAttributesDelete($id) {
            $attributes = $.grep($attributes, function(e){ 
                return e.id != $id;
            })
            $attributes = sortByKeyAsc($attributes, 'name');
        }

        function refreshAttributesAdd($id) {
            $attribute = $attributesObj.find(x => x.id == $id)
            $attributes.push($attribute)
            $attributes = sortByKeyAsc($attributes, 'name');
        }

        function refreshAttributesFieldAdd($id) {
            $attribute = $attributesObj.find(x => x.id == $id)
            $button = '<button class="btn btn-primary mr-1 mb-1" type="button" data-id="'+ $attribute.id +'">'+ $attribute.name
            if ($attribute.measure)
                $button += ' ('+ $attribute.measure.name +')'
            $button += '<i class="pe-7s-close js-attribute-remove"></i></button>'
            $button += '<input type="hidden" name="attributes[]" value="'+ $attribute.id +'">'
            $('#attributes-field').prepend($button)
        }

        function refreshAttributesAddButton() {
            if ($attributes.length == 0)
                $('.js-attributes-modal-button').prop('disabled', true)
            else
                $('.js-attributes-modal-button').prop('disabled', false)
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
                $('.js-category-create').removeClass('btn-secondary').addClass('btn-success')

            $attributesObj = {!! json_encode($attributes->toArray()) !!}
            $attributes = $attributesObj
            $attributes = sortByKeyAsc($attributes, 'name');
            refreshAttributesSelect()
        })

        $('#name').keyup(function() {
            if ($(this).val() != '')
                $('.js-category-create').removeClass('btn-secondary').addClass('btn-success')
            else 
                $('.js-category-create').addClass('btn-secondary').removeClass('btn-success')
        })
    </script>
@endpush