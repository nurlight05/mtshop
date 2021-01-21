@extends('home.base')

@section('title', 'Корзина')

@section('content')
<div class="f-container">
    <section class="basket">
      <div class="row">
          <aside class="breadcrumbs">
              <a href="{{ route('mtshop.home.index') }}">
                  Главная
              </a>
              <i class="fa fa-angle-right" aria-hidden="true">
              </i>
              <span class="current">
                    Корзина
              </span>
          </aside>
      </div>
      <div class="row">
          <div class="basket__title">
              <h3>Корзина</h3>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12 p-0">
              <table class="basket__table  table-hover " id="myTable">
                  <thead>
                      <tr>
                          <td>
                              Товар
                          </td>
                          <td>
                              Количество
                          </td>
                          <td>
                              Стоимость
                          </td>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>
                              <img src="{{ asset('assets/home/img/electro_mat/template.png') }}">
                              <a href=""> DeWALT LAKA DWE4051 </a>
                          </td>
                          <td>
                              <input value="1" type="number" min="1" data-validate="{required:true,'validate-greater-than-zero':true}" >
                          </td>
                          <td>
                              <span>
                                  28750 тг
                              </span>
                          </td> 
                          <td><a class="delete__table">
                              <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <circle cx="13.4882" cy="13.4882" r="12.4882" fill="white" stroke="#CCCCCC" stroke-width="2"/>
                              <path d="M9.44141 9.44177L18.2088 18.2091" stroke="#A2A2A2" stroke-width="2" stroke-linecap="round"/>
                              <path d="M18.209 9.44177L9.44162 18.2091" stroke="#A2A2A2" stroke-width="2" stroke-linecap="round"/>
                              </svg>
                          </a>
                          </td>               
                      </tr>
                  </tbody>
                  <tbody>
                      <tr>
                          <td>
                              <img src="{{ asset('assets/home/img/electro_mat/template.png') }}">
                              
                              <a href=""> DeWALT LAKA DWE4051 </a>
                              
                          </td>
                          <td>
                              <div class="">
                                  <input value="1" type="number" min="1" data-validate="{required:true,'validate-greater-than-zero':true}" >
                              </div>
                          </td>
                          <td>
                              <span>
                                  28750 тг
                              </span>
                          </td> 
                          <td><a class="delete__table">
                              <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <circle cx="13.4882" cy="13.4882" r="12.4882" fill="white" stroke="#CCCCCC" stroke-width="2"/>
                              <path d="M9.44141 9.44177L18.2088 18.2091" stroke="#A2A2A2" stroke-width="2" stroke-linecap="round"/>
                              <path d="M18.209 9.44177L9.44162 18.2091" stroke="#A2A2A2" stroke-width="2" stroke-linecap="round"/>
                              </svg>
                          </a>
                          </td>                 
                      </tr>
                  </tbody>
                  <tbody>
                      <tr>
                          <td>
                              <img src="{{ asset('assets/home/img/electro_mat/template.png') }}">
                              
                              <a href=""> DeWALT LAKA DWE4051 </a>
                              
                          </td>
                          <td>
                              <div class="">
                                  <input value="1" type="number" min="1" data-validate="{required:true,'validate-greater-than-zero':true}" >
                              </div>
                          </td>
                          <td>
                              <span>
                                  28750 тг
                              </span>
                          </td> 
                          <td><a class="delete__table">
                              <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <circle cx="13.4882" cy="13.4882" r="12.4882" fill="white" stroke="#CCCCCC" stroke-width="2"/>
                              <path d="M9.44141 9.44177L18.2088 18.2091" stroke="#A2A2A2" stroke-width="2" stroke-linecap="round"/>
                              <path d="M18.209 9.44177L9.44162 18.2091" stroke="#A2A2A2" stroke-width="2" stroke-linecap="round"/>
                              </svg>
                          </a>
                          </td>                 
                      </tr>
                  </tbody>
                 </table>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 p-0">
              <div class="checkout">
                     <form action="" class="checkout__block">
                         <h4>Оформить заказ</h4>
                         <div class="checkout__block__name">
                             <label for="">
                                 Имя *
                             </label>
                             <input type="text">
                         </div>
                         <div class="checkout__block__phone">
                             <label for="">
                                 Телефон *
                             </label>
                             <input type="text">
                         </div>
                         <div class="checkout__block__email">
                             <label for="">
                                 Электронная почта
                             </label>
                             <input type="text">
                         </div>
                         <div class="checkout__block__delivery">
                             <label for="">
                                 Способ доставки:
                             </label>
                          <div class="tabs2">
                              <a class="tab-links2 active" data-tab="1">
                              Самовызов</a>
                              <a class="tab-links2" data-tab="2">Курьером в руки</a>
                          </div>
                          <div class="content-wrapper">
                              <div id="tab-1" class="tab-content2 active">
                                  <p>
                                      Адрес магазина
                                  </p>
                                  <p>
                                      г. Алматы, Ауезовский район, 5 мкр, 5 дом, кв. 95
                                  </p> 
                              </div>
                              <div id="tab-2" class="tab-content2">
                                  <p>
                                      Ваш адрес
                                  </p>
                                     <div class="checkout__button2__input">
                                         <input type="text" placeholder="Город">
                                      <input type="text" placeholder="Улица">
                                      <input type="text" placeholder="Дом/квартира">
                                     </div>
                              </div>
                          </div>
                         </div>
                         <div class="checkout__block__pay">
                             <label for="">
                                 Оплата
                             </label>
                             <div class="checkout__pay__sum">
                                 <div>
                                     <p>
                                         Товары
                                     </p>
                                     <span id="a__calc" value="127750">
                                         127550 тг
                                     </span>
                                 </div>
                                 <div>
                                     <p>
                                         Доставка
                                     </p>
                                     <span id="b__calc" value="1500">
                                         0  тг
                                     </span>
                                 </div>
                                 <hr class="basket__line">
                                 <div>
                                     <p>
                                         Сумма к оплате
                                     </p>
                                     <span id="result__calc">
                                         
                                     </span>
                                 </div>
                                 <div class="checkout__pay__accept">
                                  <input id="checkbox__basket" type="checkbox" onclick="compare();">
                                  <label for="checkbox__basket">
                                      Перезвоните мне для	подтверждения заказа
                                  </label>
                                  <button class="btn-2 btn-basket" type="submit" id="submit2" value="Submit2" disabled>ПОДВЕРДИТЬ ЗАКАЗ</button>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
          </div>
      </div>
  </section>
</div>
@endsection