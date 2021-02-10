<footer>
	<div class="f-container">
		<div class="row">
			<div class="col-lg-12">
			<div class="footer__email" >
				<div class="email__text">
					<h3 class="pb-20">
						Вы можете оставить <br>заявку если есть у вас вопросы
					</h3>
					<p>
						Вы можете задать любой вопрос<br> который вас интересует. Наши менеджера всегда рады вам помочь
					</p>
				</div>	
				<div class="email__form">
					<form action="">
						<input class="input main-color" type="text" placeholder="e-mail">
						<div class="email__check">
							<div class="form-group">
                                <input id="conf" type="checkbox" onclick="compare();">
                                <label for="conf">
                                    Я согласен c правилами сайта
                                </label>
                            </div>
	                    <!--
							<input type="checkbox" id="conf">
  							<span class="checkmark"></span>
							<label for="conf">
							   	Я согласен с правилами сайта
							</label>
						-->
							<button class="btn-1 btn-green" type="submit" id="submit" value="Submit" disabled>Отправить</button>
						</div>		
					</form>
				</div>
			</div>
	
			<hr class="footer__line">
			<div class="footer__grid">
				<div class="f__order1">
					<ul>
						<li>
							<a>Интернет-магазин</a>
						</li>
						<li>
							<a href="{{ route('mtshop.catalogue.index') }}">Каталог товаров</a>
						</li>
						<li>
							<a href="{{ route('mtshop.catalogue.index', ['type' => 'new']) }}">Новые товары</a>
						</li>
						<li>
							<a href="{{ route('mtshop.catalogue.index', ['type' => 'discount']) }}">Акции</a>
						</li>
						<li>
							<a href="{{ route('mtshop.catalogue.index', ['type' => 'hit']) }}">Хит продажи</a>
						</li>
					</ul>
				</div>
				<div class="f__order3">
					<ul>
						<li>
							<a>Компания</a>
						</li>
						<li>
							<a href="{{ route('mtshop.about.index', ['tab' => 'about']) }}">О компании</a>
						</li>
						<li>
							<a href="{{ route('mtshop.about.index', ['tab' => 'contacts']) }}">Контактная информация</a>
						</li>
						<li>
							<a href="{{ route('mtshop.about.index', ['tab' => 'faq']) }}">Вопросы и ответы</a>
						</li>
						<li>
							<a href="{{ route('mtshop.about.index', ['tab' => 'provider']) }}">Поставщикам</a>
						</li>
					</ul>
				</div>
				<div class="f__order2">
					<ul>
						<li>
							<a>Помощь</a>
						</li>
						<li>
							<a href="{{ route('mtshop.about.index', ['tab' => 'guarantee']) }}">Гарантии</a>
						</li>
						<li>
							<a href="{{ route('mtshop.about.index', ['tab' => 'payment']) }}">Оплата</a>
						</li>
						<li>
							<a href="{{ route('mtshop.about.index', ['tab' => 'delivery']) }}">Доставка</a>
						</li>
						<li>
							<a href="{{ route('mtshop.about.index', ['tab' => 'exchange']) }}">Возврат</a>
						</li>
					</ul>
				</div>
				<div class="f__order4">
					<ul>
						<li>
							<a>+7 778 777 77 77</a>
						</li>
						<li class="footer__img">
							<img src="{{ asset('assets/img/logo/footer_logo.svg') }}" alt="">
						</li>
						<li class="f__order4__dotted">
							<a href="#">
								Пользовательское соглашение
							</a>
							
						</li>
						<li class="f__order4__dotted">
							<a href="#">
								Договор оферты
							</a>
						</li>
						<li>
							Разработан в студии M2A Solutions
						</li>
					</ul>
				</div>
			</div>
			</div>
		</div>
	</div>
</footer>		
