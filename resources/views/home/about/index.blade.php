@extends('home.base')

@section('title', 'О нас')
    
@section('content')
<div class="f-container">
	<div class="row">
		<div class="col-lg-12">
			<aside class="breadcrumbs">
                <a href="{{ route('mtshop.home.index') }}">
                    Главная
                </a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="current">
                    О компании
                </span>
            </aside>
		</div>
	</div>
	<div class="about__grid">
		<div class="about__grid__nav">
			<div class="tab-button-outer">
                <ul id="tab-button">
                  <li class="about is-active"><a href="#about">О компании</a></li>
                  <li class="delivery"><a href="#delivery">Доставка</a></li>
                  <li class="guarantee"><a href="#guarantee">Гарантии</a></li>
                  <li class="payment"><a href="#payment">Оплата</a></li>
                  <li class="contacts"><a href="#contacts">Контакты</a></li>
                  <li class="faq"><a href="#faq">Вопросы и ответы</a></li>
                  <li class="agreement"><a href="#agreement">Договор публичной оферты</a></li>
                  <li class="provider"><a href="#provider">Поставщикам</a></li>
                  <li class="exchange"><a href="#exchange">Обмен и возврат</a></li>
                </ul>
            </div>
            <div class="tab-select-outer">
                <select id="tab-select" onchange="aboutPageSelect(this.value)">
                  <option class="option-about" value="#about">О компании</option>
                  <option class="option-delivery" value="#delivery">Доставка</option>
                  <option class="option-guarantee" value="#guarantee">Гарантии</option>
                  <option class="option-payment" value="#payment">Оплата</option>
                  <option class="option-contacts" value="#contacts">Контакты</option>
                  <option class="option-faq" value="#faq">Вопросы и ответы</option>
                  <option class="option-agreement" value="#agreement">Договор публичной оферты</option>
                  <option class="option-provider" value="#provider">Поставщикам</option>
                  <option class="option-exchange" value="#exchange">Обмен и возврат</option>
                </select>
            </div>
		</div>
		<div class="about__grid__content">
			<div id="about" class="tab-contents">
				<h3>О компании</h3>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections.. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum</p>
            </div>
            <div id="delivery" class="tab-contents">
				<h3>Доставка</h3>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections.. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum</p>
            </div>
            <div id="guarantee" class="tab-contents">
				<h3>Гарантии</h3>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections.. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum</p>
            </div>
            <div id="payment" class="tab-contents">
				<h3>Оплата</h3>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections.. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum</p>
            </div>
            <div id="contacts" class="tab-contents">
				<h3>Контакты</h3>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections.. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum</p>
            </div>
            <div id="faq" class="tab-contents">
				<h3>Вопросы и ответы</h3>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections.. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum</p>
            </div>
            <div id="agreement" class="tab-contents">
				<h3>Договор публичной оферты</h3>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections.. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum</p>
            </div>
            <div id="provider" class="tab-contents">
				<h3>Поставщикам</h3>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections.. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum</p>
            </div>
            <div id="exchange" class="tab-contents">
				<h3>Обмен и возврат</h3>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections.. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum</p>
            </div>
		</div>
	</div>
</div>
@endsection

@push('styles')
    <style>
        li.contacts a {
            margin-left: 0;
        }
    </style>
@endpush

@push('scripts')
    <script>
        var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }
            return false;
        }

        $tabs = {
            'about': 'О компании',
            'delivery': 'Доставка',
            'guarantee': 'Гарантии',
            'payment': 'Оплата',
            'contacts': 'Контакты',
            'faq': 'Вопросы и ответы',
            'agreement': 'Договор публичной оферты',
            'provider': 'Поставщикам',
            'exchange': 'Обмен и возврат'
        }

        $('#tab-button li').click(function() {
            $href = $(this).find('a').prop('href')
            $href = $href.split('#')[1]
            $('span.current').empty()
            $('span.current').html($tabs[$href])
        })

        function aboutPageSelect($value) {
            $value = $value.substring(1, $value.length)
            $('span.current').empty()
            $('span.current').html($tabs[$value])
        }

        $(document).ready(function() {
            $tab = getUrlParameter('tab')

            $('#tab-button li').removeClass('is-active')
            $('.about__grid__content div').css('display', 'none')
            $('.about__grid__content div#' + $tab).css('display', 'block')
            $('#tab-button li.' + $tab).addClass('is-active')

            $('#tab-select .option-' + $tab).prop('selected', true)

            $('span.current').empty()
            $('span.current').html($tabs[$tab])
        })
    </script>
@endpush