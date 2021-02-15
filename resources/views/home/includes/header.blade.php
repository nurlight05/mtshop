<div class="middle-bar">
    <div class="f-container middle-bar__content">
        <div class="logo">
            <a href="{{ route('mtshop.home.index') }}"><img src="{{ asset('assets/home/img/logo/logo.png') }}" alt="Логотип сайта"></a>
        </div>
        <div class="mobile-logo">
            <a href="{{ route('mtshop.home.index') }}"><img src="{{ asset('assets/home/img/logo/logo.png') }}" alt="Логотип сайта"></a>
        </div>
        <div class="menu">
            <ul>
                <li id="header-li">
                    <a href="{{ route('mtshop.about.index', ['tab' => 'delivery']) }}">Доставка</a>
                </li>
                <li id="header-li">
                     <a href="{{ route('mtshop.about.index', ['tab' => 'guarantee']) }}">Гарантии</a>
                </li>
                <li id="header-li">
                    <a href="{{ route('mtshop.about.index', ['tab' => 'payment']) }}">Оплата</a>
                </li>
                <li id="header-li">
                    <a href="{{ route('mtshop.about.index', ['tab' => 'contacts']) }}">Контакты</a>
                </li>
            </ul>            
        </div>
        <address class="contacts">
            <a class="contacts__email" href="">online-shop@gmail.com
            </a>
            <a class="contacts__phone" href="tel:87070000000">8 (707) 000 00 00
            </a>
        </address>
        <div class="mobile-gamb">
            <a href="#mobile-menu">
                <img src="{{ asset('assets/home/img/logo/gamb-mobile.png') }}">
            </a>
        </div>
    </div>
</div>

<div class="f-container">
<div class="second__header" id="second__header">
    <div class="second__header__catalog">
        <div class="simplemenu">
            <div class="dropdown">
                <button href="#" class="dropbtn" data-toggle="dropdown" >
                    <i class="hamburger fa fa-bars" aria-hidden="true">
                       </i> Каталог товаров <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    @forelse ($categories->slice(0,11) as $item)
                        <li>
                            <a class="trigger right-caret text-truncate" href="{{ route('mtshop.catalogue.index', ['category' => $item->slug]) }}">{{ $item->name }}</a>
                            <ul class="dropdown-menu sub-menu">
                                @if ($item->childs)
                                    @forelse ($item->childs as $item2)
                                        <li>
                                            <a class="trigger right-caret" href="{{ route('mtshop.catalogue.index', ['category' => $item2->slug]) }}">{{ $item2->name }}</a>
                                            <ul class="dropdown-menu sub-menu">
                                                @if ($item2->childs)
                                                    @forelse ($item2->childs as $item3)
                                                        <li><a href="{{ route('mtshop.catalogue.index', ['category' => $item3->slug]) }}">{{ $item3->name }}</a></li>
                                                    @empty
                                                        {{-- Nothing --}}
                                                    @endforelse
                                                @endif
                                            </ul>
                                        </li>
                                    @empty
                                        {{-- Nothing --}}
                                    @endforelse
                                @endif
                            </ul>
                        </li>
                    @empty
                        {{-- Nothing --}}
                    @endforelse
                    @if ($categories->count() >= 12)
                        <div class="btn-2 btn-all">
                            <a href="{{ route('mtshop.catalogue.index') }}">Показать  все категории ({{ $categories->count() }})</a>
                        </div>
                    {{-- <li>
                        <a class="trigger text-truncate" href="">Показать все категории ({{ $categories->count() }})</a>
                    </li> --}}
                    @endif
                    {{-- <li>
                        <a href="#" class="trigger right-caret">Отделочные материалы</a>
                        <ul class="dropdown-menu sub-menu">
                            <li><a class="trigger right-caret">Level 2</a>
                            </li>
                            <li><a href="#">Level 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Сантехника</a></li>
                    <li><a href="#">Стройматериалы</a></li>
                    <li><a href="#">Электротовары</a></li>
                    <li><a href="#">Сад, огород и дача</a></li>
                    <li><a href="#">Активный отдых и спорт</a></li>
                    <li><a href="#">Товары для дома</a></li>
                    <li><a href="#">Бытовая техника</a></li>
                    <li><a href="#">Двери и замки</a></li>
                    <div class="btn-2 btn-all">
                        <a href="#mobile-category">Показать  все категории (15)</a>
                    </div> --}}
                </ul>
            </div>
        </div>
    </div>
    <div class="second__header__search">
        <i class="fa fa-search" aria-hidden="true"></i>
        <form action="{{ route('mtshop.search.index') }}" method="GET">
            {{-- @csrf --}}
            <input id="search_input" type="search" name="query" placeholder="Более 30 000 товаров" value="{{ request()->input('query') ?? '' }}" required="">
        </form>
        <div id="display"></div>
    </div>
    <div class="second__header__options">
        <div class="second__header__location ">
            <div class="second__city__icon">
                <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.70645 2.56717C3.52683 2.56717 2.56714 3.52686 2.56714 4.70648C2.56714 5.8861 3.52683 6.84581 4.70645 6.84581C5.88607 6.84581 6.84576 5.88612 6.84576 4.7065C6.84576 3.52688 5.88607 2.56717 4.70645 2.56717ZM4.70645 5.99009C3.99867 5.99009 3.42286 5.41428 3.42286 4.7065C3.42286 3.99873 3.99867 3.42291 4.70645 3.42291C5.41422 3.42291 5.99004 3.99873 5.99004 4.7065C5.99004 5.41428 5.41422 5.99009 4.70645 5.99009Z" fill="#292929"/>
                <path d="M4.70651 0C2.11135 0 0 2.11135 0 4.70651C0 6.52182 0.544117 7.23374 4.35076 12.931C4.51997 13.1843 4.89272 13.1848 5.06227 12.931C8.88905 7.20617 9.41303 6.50391 9.41303 4.70651C9.413 2.11135 7.30168 0 4.70651 0ZM4.70654 11.9233C1.28864 6.81141 0.855769 6.19051 0.855769 4.70651C0.855744 2.5832 2.5832 0.855718 4.70651 0.855718C6.82983 0.855718 8.55729 2.58317 8.55729 4.70649C8.55729 6.13902 8.22795 6.6549 4.70654 11.9233Z" fill="#292929"/>
                </svg>
            </div>
            <select id="city"> <i class="fa fa-fw fa-chevron-down"></i>
                  <option value="Алматы">Алматы</option>
                  <option value="Астана">Астана</option>
                  <option value="Талдыкорган">Талдыкорган</option>
                  <option value="Кокшетау">Кокшетау</option>
                  <option value="Актобе">Актобе</option>
                  <option value="Атырау">Атырау</option>
                  <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                  <option value="Тараз">Тараз</option>
                  <option value="Уральск">Уральск</option>
                  <option value="Караганда">Караганда</option>
                  <option value="Жезказган">Жезказган</option>
                  <option value="Костанай">Костанай</option>
                  <option value="Актау">Актау</option>
                  <option value="Павлодар">Павлодар</option>
                  <option value="Петропавлск">Петропавлск</option>
                  <option value="Шымкент">Шымкент</option>
                  <option value="Семей">Семей</option>
             </select>

        </div>
        
         <div class="second__header__basket">
             <div class="second__basket__icon">
                 <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.2051 12.4785V8.24473H18.5833L12.3771 2.51024C12.4468 2.3138 12.4851 2.10263 12.4851 1.88255C12.4851 0.844509 11.6406 0 10.6025 0C9.5645 0 8.71999 0.844509 8.71999 1.88255C8.71999 2.1026 8.75829 2.3138 8.82798 2.51024L2.62182 8.24473H0V12.4785H0.741216L3.31661 20H17.8884L20.4638 12.4785H21.2051V12.4785ZM14.051 14.7301H11.3458V12.499H14.2713L14.051 14.7301ZM9.85927 18.5135H7.52763L7.30082 16.2167H9.85927V18.5135ZM7.15405 14.7301L6.93373 12.499H9.85927V14.7301H7.15405ZM10.9986 1.88255C10.9986 1.99734 10.9492 2.10057 10.8709 2.17295C10.8003 2.23827 10.7061 2.27856 10.6025 2.27856C10.499 2.27856 10.4049 2.23827 10.3342 2.17295C10.2559 2.10055 10.2065 1.99734 10.2065 1.88255C10.2065 1.76776 10.2559 1.66453 10.3342 1.59215C10.4048 1.52683 10.499 1.48654 10.6025 1.48654C10.7061 1.48654 10.8002 1.52683 10.8709 1.59215C10.9492 1.66456 10.9986 1.76776 10.9986 1.88255ZM9.83708 3.60183C10.0711 3.70645 10.33 3.76513 10.6025 3.76513C10.8751 3.76513 11.134 3.70645 11.368 3.60183L16.3928 8.24478H4.81229L9.83708 3.60183ZM1.48654 9.73128H19.7185V10.992H1.48654V9.73128ZM5.43998 12.499L5.66029 14.7302H3.08348L2.31953 12.499H5.43998ZM4.37889 18.5135L3.59247 16.2167H5.80709L6.03387 18.5135H4.37889ZM11.3458 16.2167H13.9042L13.6774 18.5134H11.3458V16.2167ZM16.8262 18.5135H15.1712L15.398 16.2167H17.6126L16.8262 18.5135ZM18.1216 14.7301H15.5448L15.7651 12.499H18.8856L18.1216 14.7301Z" fill="#292929"/>
                </svg>
             </div>
             <div class="second__basket__content">
                 <span>
                     Ваша корзина
                 </span> 
                 <a href="{{ route('mtshop.cart.index') }}">
                     товаров<span>@if (session()->has('products')) ({{ count(session('products')) }}) @else (0) @endif</span> 
                 </a>
             </div>
         </div>
    </div>
</div>
</div>
