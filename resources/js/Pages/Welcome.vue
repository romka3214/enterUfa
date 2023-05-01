<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';


// Import Swiper Vue.js components
import { EffectFade, Autoplay } from 'swiper';
import { Swiper, SwiperSlide } from 'swiper/vue';

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
    <Head title="Добро пожаловать!" />


    <main class="h-screen w-screen">
        <swiper class="h-screen w-screen" :modules="[EffectFade, Autoplay]" effect="fade" :autoplay="{
            delay: 5000
        }"
        :speed="5000"
            :slides-per-view="1" @swiper="onSwiper" @slideChange="onSlideChange">
            <swiper-slide><img class="h-full w-full object-cover" :src="'../storage/2.jpg'" alt=""></swiper-slide>
            <swiper-slide><img class="h-full w-full object-cover" :src="'../storage/prevyu3-min.jpg'" alt=""></swiper-slide>
        </swiper>

        <div class="main_box h-full w-full flex items-center flex-col absolute top-0 z-10 bg-dark-500">
            <Link class="h-10" :href="route('home')">
            <ApplicationLogo class="fill-current h-full text-black-500 dark:fill-white" />
            </Link>
            <div class="">
                <p>Все события и заведения новой Уфы как на ладони</p>
                <p>Добро пожаловать в EnterUfa</p>
            </div>

        </div>


    </main>
</template>

