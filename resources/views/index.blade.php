@extends('layouts.app')

@section('content')

    {{-- Top Carousel--}}
    <top-carousel></top-carousel>
    {{-- /Top Carousel--}}

    {{-- ИНВЕСТИЦИИ - ЭТО ПРОСТО--}}
    <section class="py-4 investments">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2 class="fs-2-5rem ls-3 m-0">ИНВЕСТИЦИИ - ЭТО ПРОСТО!</h2>
                    <h3 class="fs-1-5rem mt-1">Автономное программное инвестирование</h3>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="investor-scheme py-4">
                        <div class="investor-scheme__el block-1">
                            <img src="images/inv1.png" alt="">
                            <h4>Инвестор</h4>
                        </div>

                        <div class="investor-scheme_arrow">
                            <svg preserveAspectRatio="none"
                                 width="166"
                                 height="38"
                                 fill="white"
                                 data-bbox="23 74.673 155.203 56.815"
                                 xmlns="http://www.w3.org/2000/svg"
                                 viewBox="22.52968787878787 73.90522972972974 156.14362424242427 58.350540540540536"
                                 role="img">
                                <g><path d="M178.203 103.081L129 74.673V101H23v4h106v26.488l49.203-28.407z"></path></g>
                            </svg>
                        </div>

                        <div class="investor-scheme__el block-2">
                            <img src="images/inv2.png" alt="">
                            <h4>Программа</h4>
                        </div>

                        <div class="investor-scheme_arrow">
                            <svg preserveAspectRatio="none"
                                 width="166"
                                 height="38"
                                 fill="white"
                                 data-bbox="23 74.673 155.203 56.815"
                                 xmlns="http://www.w3.org/2000/svg"
                                 viewBox="22.52968787878787 73.90522972972974 156.14362424242427 58.350540540540536"
                                 role="img">
                                <g><path d="M178.203 103.081L129 74.673V101H23v4h106v26.488l49.203-28.407z"></path></g>
                            </svg>
                        </div>

                        <div class="investor-scheme__el block-3">
                            <img src="images/inv3.png" alt="">
                            <h4>Прибыль</h4>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <p>
                        Мы создали чрезвычайно удобный инструмент автоматизации торговых стратегий на основе данных
                        технического анализа.
                    </p>
                    <p>
                        Программное обеспечение принимает решение о покупке или продаже на основе анализа настраиваемых
                        индикаторов увеличивая вашу прибыль.
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- /ИНВЕСТИЦИИ - ЭТО ПРОСТО--}}

    {{-- Наш партнер--}}
    <section class="partner">
        <div class="partner__swissquote">
            <h4 class="mr-2">Наш партнер:</h4>
            <img src="images/part.png" alt="">
        </div>

       <a class="partner_more" href="#">Подробнее</a>
    </section>
    {{-- /Наш партнер--}}

    {{-- СТРАТЕГИИ--}}
    <section class="py-4 strategies">
        <h2 class="fs-2-5rem ls-3">СТРАТЕГИИ</h2>
        <div class="strategies__more"><a href="#">Нажмите чтобы узнать подробнее...</a></div>
        <div class="p-4 strategies_list">
            <ul>
                <li class="fs-1-5rem font-italic">Инвестиции от <br/> <span class="font-weight-bold">200 000 ₽</span></li>
                <li><span class="fs-1-5rem">Сумма дохода от</span> <br/> <span class="fs-2-5rem font-weight-bold">20 000 ₽</span></li>
                <li class="fs-1-5rem">20% <br> годовых</li>
                <li>Срок: от 6 месяцев Получение прибыли по окончанию договора</li>
                <li>Одноразовое предложение*</li>
            </ul>

            <ul>
                <li class="fs-1-5rem font-italic">Инвестиции от <br/> <span class="font-weight-bold">500 000 ₽</span>₽</li>
                <li><span class="fs-1-5rem">Сумма дохода от</span> <br/> <span class="fs-2-5rem font-weight-bold">200 000 ₽</span></li>
                <li class="fs-1-5rem">40% <br> годовых</li>
                <li>Срок: от 12 месяцев Получение прибыли по окончанию договора</li>
                <li>Одноразовое предложение*</li>
            </ul>

            <ul>
                <li class="fs-1-5rem font-italic">Инвестиции от <br/> <span class="font-weight-bold">1 000 000 ₽</span></li>
                <li><span class="fs-1-5rem">Сумма дохода от</span> <br/> <span class="fs-2-5rem font-weight-bold">600 000 ₽</span></li>
                <li class="fs-1-5rem">5% <br> в месяц</li>
                <li>Срок: 12 месяцев Получение прибыли каждый месяц до окончания договора</li>
            </ul>

            <ul>
                <li class="fs-1-5rem font-italic">Инвестиции от <br/> <span class="font-weight-bold">1 000 000 ₽</span>₽</li>
                <li><span class="fs-1-5rem">Сумма дохода от</span> <br/> <span class="fs-2-5rem font-weight-bold">720 000 ₽</span></li>
                <li class="fs-1-5rem">72% <br> годовых</li>
                <li>Срок: 12 месяцев Получение прибыли до окончания договора с условиями капитализации</li>
            </ul>

            <ul class="strategies_list-hot">
                <li class="fs-1-5rem font-italic">Инвестиции в <br/> <span class="font-weight-bold">ДОЛЛАР</span></li>
                <li><span class="fs-1-5rem">Сумма дохода</span> <br/> <span class="fs-2rem font-weight-bold">БЕЗ ЛИМИТА</span></li>
                <li class="fs-1-5rem">Инвестиции от<br> 3000$</li>
                <li>Срок: от 4 месяцев Получение прибыли по окончанию договора</li>
            </ul>
        </div>
    </section>
    {{-- /СТРАТЕГИИ--}}

    {{-- ГАРАНТИИ И СТРАХОВКА--}}
    <section class="py-4 guarantee">
        <h2 class="fs-2-5rem ls-3"><span>ГАРАНТИИ И СТРАХОВКА</span></h2>

        <div class="guarantee__list">
            <div class="guarantee__list-item">
                <img src="images/grnt1.png" alt="">
                <h4 class="fs-1-5rem">ДОГОВОР</h4>
            </div>
            <div class="guarantee__list-item">
                <img src="images/grnt2.png" alt="">
                <h4 class="fs-1-5rem">СТАБ ФОНД</h4>
            </div>
            <div class="guarantee__list-item">
                <img src="images/grnt3.png" alt="">
                <h4 class="fs-1-5rem">СТРАХОВКА</h4>
            </div>
        </div>

        <div class="guarantee__more"><a href="#">Нажмите чтобы узнать подробнее...</a></div>
    </section>
    {{-- /ГАРАНТИИ И СТРАХОВКА--}}

    {{-- ОТЗЫВЫ--}}
    <testimonials-carousel></testimonials-carousel>
    {{-- /ОТЗЫВЫ--}}

    <div class="footer">
        {{-- КОНТАКТЫ--}}
        <section class="text-center about">
            <h2 class="fs-2-5rem ls-3 mt-0"><span>КОНТАКТЫ</span></h2>
            <div class="contact-info">
                <p>
                    Россия, Амурская обл., г. Благовещенск, <br>
                    ул.Горького 242, каб.38 <br>
                    Телефон: +7 (924) 841 04 88
                </p>
            </div>

            <div class="contact-info-separator"></div>
        </section>
        {{-- /КОНТАКТЫ--}}

        {{-- НАПИШИТЕ НАМ--}}
        <section class="text-center feedback">
            <h2 class="fs-2-5rem ls-3 mt-0"><span>НАПИШИТЕ НАМ</span></h2>

            <form action="#" method="POST" class="feedback-form">
                @csrf
                <div class="feedback-form-row">
                    <div class="feedback-form-col-6">
                        <input type="text" class="form-control-input input-name" placeholder="Имя *">
                    </div>
                    <div class="feedback-form-col-6">
                        <input type="text" class="form-control-input input-name" placeholder="Email *">
                    </div>
                </div>

                <input type="text" class="form-control-input input-phone" placeholder="Номер телефона">

                <textarea name="message" cols="30" rows="10" placeholder="Сообщение"></textarea>

                <input type="submit" value="Отправить" class="feedback-form-submit">

            </form>
        </section>
        {{-- /НАПИШИТЕ НАМ--}}
    </div>

@endsection
