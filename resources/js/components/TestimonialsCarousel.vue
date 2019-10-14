<template>
    <section class="py-4 testimonials">
        <h2 class="fs-2-5rem ls-3"><span>ОТЗЫВЫ</span></h2>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="mt-5 testimonials-box">

                        <carousel :items="1" :autoplay="true" :nav="false" :dots="true">

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

                        </carousel>


                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import carousel from 'vue-owl-carousel'

    export default {
        mounted() {
            console.log('Component mounted.')
        },

        components: { carousel }
    }
</script>
