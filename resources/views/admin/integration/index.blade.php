@extends('admin.base')

@section('title', 'Интеграция')

@section('subtitle', 'Интеграция Kaspi - Satu')

@section('icon', 'pe-7s-cloud-download')

@section('active-integration', 'mm-active')

@section('content')
<div class="">
    {{-- <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Сгенерировать XML для</h5>
                    <button class="btn border-danger" style="max-width: 110px;" onclick="location.href='{{ route('mtshop.admin.integration.kaspi.generate') }}'">
                        <img class="img-fluid" src="{{ asset('assets/admin/images/kaspi.png') }}" alt="">
                    </button>
                    <button class="btn" style="max-width: 110px; border: 1px solid #4b51a0;" onclick="location.href='{{ route('mtshop.admin.integration.satu.generate') }}'">
                        <img class="img-fluid" src="{{ asset('assets/admin/images/satu.jpg') }}" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">XML для Kaspi - Satu</h5>
                    <div>
                        <label for="" class="col-sm-2 col-form-label pl-0">Для Kaspi</label>
                        <div class="input-group">
                            <input id="input-kaspi" type="text" class="form-control" value="{{ URL::to('integration/kaspi/generate') }}" disabled>
                            <div class="input-group-append">
                                <button class="btn btn-secondary js-kaspi-copy">Скопировать!</button>
                            </div>
                        </div>
                        <label for="" class="col-sm-2 col-form-label pl-0">Для Satu</label>
                        <div class="input-group">
                            <input id="input-satu" type="text" class="form-control" value="" disabled>
                            <div class="input-group-append">
                                <button class="btn btn-secondary js-satu-copy">Скопировать!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $('.js-kaspi-copy').click(function() {
            $url = $('#input-kaspi').val()
            
            var temp = $('<input>');
            $('body').append(temp);
            temp.val($url).select();
            document.execCommand("copy");
            temp.remove();

            $(this).text("Сохранено!").css('background-color', 'black').delay(2000).queue(function(){
                $(this).text("Скопировать!").css('background-color', '#6c757d').dequeue()
            })
        })
    </script>
@endpush