@extends('layouts.app')

@section('content')

    {{-- Top Carousel--}}
    <section class="top-carousel">
        <div>
            <div class="top-carousel__item">
                <div class="top-carousel__item-text top-carousel-text-black">Первое правило бизнеса:</div>
                <div class="top-carousel__item-text top-carousel-text-white">защищайте свои инвестиции.</div>
                <div class="top-carousel__item-text top-carousel-text-red">— этикет банкира, 1775 г.</div>
            </div>
        </div>

        <div>
            <div class="top-carousel__item">
                <div class="top-carousel__item-text top-carousel-text-black">Мы являемся тем, чем мы</div>
                <div class="top-carousel__item-text top-carousel-text-black">занимаемся постоянно.</div>
                <div class="top-carousel__item-text top-carousel-text-white">Непревзойденное мастерство таким</div>
                <div class="top-carousel__item-text top-carousel-text-white">образом – это не действие, а привычка.</div>
            </div>
        </div>

        <div>
            <div class="top-carousel__item">
                <div class="top-carousel__item-text top-carousel-text-black">Никогда не попадайте в зависимость</div>
                <div class="top-carousel__item-text top-carousel-text-black">от единственного источника дохода.</div>
                <div class="top-carousel__item-text top-carousel-text-white">Инвестируйте, чтобы создать второй источник.</div>
            </div>
        </div>
    </section>
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
    <section class="py-4 testimonials">
        <h2 class="fs-2-5rem ls-3"><span>ОТЗЫВЫ</span></h2>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="mt-5 testimonials-box">

                        <div class="testimonials__item">
                            <blockquote class="mb-4 testimonials__item-text">
                                Я как клиент многих банков ради интереса год назад решил попробовать и на сегодня могу
                                сказать что это лучшие ребята в России.
                                Какие только мои капризы они не исполняли, в других местах персональные менеджеры
                                от моих запросов впадали в ступор...
                            </blockquote>
                            <div class="testimonials__item-author">
                                <div class="testimonials__item-author-name">Константин</div>
                                <svg preserveAspectRatio="none"
                                     data-bbox="15.5 78.5 169.001 43"
                                     viewBox="15.5 78.5 169.001 43"
                                     height="50"
                                     width="370"
                                     fill="#303F4D"
                                     xmlns="http://www.w3.org/2000/svg"
                                     data-type="shape"
                                     role="img">
                                    <g>
                                        <path d="M184.218 80.822c.709-1.009 0-2.322-1.215-2.322H16.997c-1.215 0-1.923 1.312-1.215 2.322l13.058 18.37a1.364 1.364 0 0 1 0 1.716l-13.058 18.27c-.709 1.009 0 2.322 1.215 2.322h166.007c1.215 0 1.923-1.312 1.215-2.322l-13.058-18.371a1.364 1.364 0 0 1 0-1.716l13.057-18.269z"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>

                        <div class="testimonials__item">
                            <blockquote class="mb-4 text-center testimonials__item-text">
                                Привет <br>
                                Второй год получаю стабильный, ежемесячный доход. <br>
                                Компания супер! <br>
                                Спасибо за качественную работу и профессионализм.
                            </blockquote>
                            <div class="testimonials__item-author">
                                <div class="testimonials__item-author-name">Денис</div>
                                <svg preserveAspectRatio="none"
                                     data-bbox="15.5 78.5 169.001 43"
                                     viewBox="15.5 78.5 169.001 43"
                                     height="50"
                                     width="370"
                                     fill="#303F4D"
                                     xmlns="http://www.w3.org/2000/svg"
                                     data-type="shape"
                                     role="img">
                                    <g>
                                        <path d="M184.218 80.822c.709-1.009 0-2.322-1.215-2.322H16.997c-1.215 0-1.923 1.312-1.215 2.322l13.058 18.37a1.364 1.364 0 0 1 0 1.716l-13.058 18.27c-.709 1.009 0 2.322 1.215 2.322h166.007c1.215 0 1.923-1.312 1.215-2.322l-13.058-18.371a1.364 1.364 0 0 1 0-1.716l13.057-18.269z"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>

                        <div class="testimonials__item">
                            <blockquote class="mb-4 text-center testimonials__item-text">
                                Давно работаю с этой компанией. <br>
                                Довольна обслуживанием и результатом.
                            </blockquote>
                            <div class="testimonials__item-author">
                                <div class="testimonials__item-author-name">Наталья</div>
                                <svg preserveAspectRatio="none"
                                     data-bbox="15.5 78.5 169.001 43"
                                     viewBox="15.5 78.5 169.001 43"
                                     height="50"
                                     width="370"
                                     fill="#303F4D"
                                     xmlns="http://www.w3.org/2000/svg"
                                     data-type="shape"
                                     role="img">
                                    <g>
                                        <path d="M184.218 80.822c.709-1.009 0-2.322-1.215-2.322H16.997c-1.215 0-1.923 1.312-1.215 2.322l13.058 18.37a1.364 1.364 0 0 1 0 1.716l-13.058 18.27c-.709 1.009 0 2.322 1.215 2.322h166.007c1.215 0 1.923-1.312 1.215-2.322l-13.058-18.371a1.364 1.364 0 0 1 0-1.716l13.057-18.269z"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
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
