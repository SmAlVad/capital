<template>
    <section class="top-carousel">

        <carousel :items="1" :autoplay="true" :nav="false" :dots="false">
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
        </carousel>

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
