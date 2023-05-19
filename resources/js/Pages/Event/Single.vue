<script setup>
import {Head, Link} from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';
import {Swiper, SwiperSlide} from 'swiper/vue';
import 'swiper/css/bundle';

defineProps({
    event: {
        required: true,
    },
});

const onSwiper = (swiper) => {
    console.log(swiper);
};
const onSlideChange = () => {
    console.log('slide change');
};
</script>

<template>
    <Head :title=event.name />

    <MainLayout>
        <h1 class="mt-5 mb-14 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">Мероприятие {{event.name}} </h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6 dark:text-neutral-400 gap-3">
            <div class="photos">
                <swiper
                    :speed="1000"
                    :slides-per-view="1" @swiper="onSwiper" @slideChange="onSlideChange">
                    <swiper-slide v-for="img in event.photos">
                        <img class="object-cover" :src=img.url alt="">
                    </swiper-slide>
                </swiper>
            </div>
            <div class="text">
                <div class="text-xl">Описание: {{event.description}}</div>
                <div class="text-xl">Начало: {{event.date_start}}</div>
                <div class="text-xl">Конец: {{event.date_end}}</div>
            </div>
        </div>


    </MainLayout>
</template>
