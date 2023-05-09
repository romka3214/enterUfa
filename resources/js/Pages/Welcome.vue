<script setup>
import {Head, Link} from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';


// Import Swiper Vue.js components
import {EffectFade, Autoplay} from 'swiper';
import {Swiper, SwiperSlide} from 'swiper/vue';

// Import Swiper styles
import 'swiper/css/bundle';


const onSwiper = (swiper) => {
    console.log(swiper);
};
const onSlideChange = () => {
    console.log('slide change');
};


</script>


<template>
    <Head title="Добро пожаловать!"/>


    <main class="h-screen w-screen">
        <swiper
            class="h-screen w-screen after:block after:absolute after:top-0 after:h-full after:w-full after:bg-zinc-900 after:bg-opacity-50 after:z-10"
            :modules="[EffectFade, Autoplay]" effect="fade" :autoplay="{
            delay: 5000
        }"
            :speed="5000"
            :slides-per-view="1" @swiper="onSwiper" @slideChange="onSlideChange">
            <swiper-slide><img class="h-full w-full object-cover" :src="'../storage/2.jpg'" alt=""></swiper-slide>
            <swiper-slide><img class="h-full w-full object-cover" :src="'../storage/prevyu3-min.jpg'" alt="">
            </swiper-slide>
        </swiper>


        <div class="main_box h-full w-full flex items-center justify-center flex-col absolute top-0 z-10 bg-dark-500">
            <!--            <Link class="h-10" :href="route('home')">-->
            <!--            <ApplicationLogo class="fill-current h-full text-black-500 dark:fill-white" />-->
            <!--            </Link>-->
            <div class="container mx-auto px-4">
                <div class="bg-zinc-700 bg-opacity-10 backdrop-blur backdrop-filter rounded-xl p-10 max-w-xl mx-auto">
                    <p class="text-3xl text-neutral-100 font-bold text-center">Добро пожаловать в</p>
                    <Link href="/" class="w-60 block mx-auto">
                        <ApplicationLogo class="h-full fill-current text-black-500 dark:fill-white"/>
                    </Link>
                    <p class="text-base text-neutral-300 mb-10 text-center">Все события и заведения Уфы как на ладони</p>
                    <p class="text-sm text-neutral-300 mb-3 text-center">Для доступа к сайту авторизуйтесь</p>
                    <div class="flex justify-between gap-3 w-100">
                        <Link :href="route('login')"
                              class="w-full bg-current bg-opacity-50 rounded px-5 py-2 flex items-center justify-center font-semibold text-neutral-600 hover:text-neutral-400 dark:text-neutral-200 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Войти
                        </Link>

                        <Link :href="route('register')"
                              class="w-full bg-current bg-opacity-50 rounded px-5 py-2 flex items-center justify-center font-semibold text-neutral-600 hover:text-neutral-400 dark:text-neutral-200 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Регистрация
                        </Link>
                    </div>

                </div>
            </div>


        </div>


    </main>
</template>

