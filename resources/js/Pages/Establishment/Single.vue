<script setup>
import {Head, Link} from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';
import {Swiper, SwiperSlide} from 'swiper/vue';
import {Navigation} from 'swiper';
import 'swiper/css/navigation';
import 'swiper/css/bundle';
import Card from '@/Pages/Event/Card.vue';


defineProps({
    establishment: {
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
    <Head :title=establishment.name />

        <MainLayout>
            <h1 class="mt-5 mb-14 text-3xl font-extrabold text-gray-900 dark:text-white md:text-4xl lg:text-5xl">
                Заведение
                {{ establishment.name }} </h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6 dark:text-neutral-400 gap-3 mb-16">
                <div>
                    <swiper
                        :space-between="50"
                        :modules="[Navigation]"
                        :navigation="{
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev'
                        }"
                        :speed="1000"
                        :slides-per-view="1" @swiper="onSwiper" @slideChange="onSlideChange">
                        <swiper-slide v-for="img in establishment.photos">
                            <img class="w-full object-cover" :src=img.url alt="">
                        </swiper-slide>
                        <div class="text-neutral-400 swiper-button-next"></div>
                        <div class="text-neutral-400 swiper-button-prev"></div>
                    </swiper>
                </div>
                <div class="text">
                    <div class="flex flex-row items-center gap-1">
                        <div class="text-xl">
                            Рейтинг
                        </div>
                        <svg v-for="n in establishment.average_score" aria-hidden="true"
                             class="w-5 h-5 text-neutral-300"
                             fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First
                            star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                    <div class="text-xl">Описание: {{ establishment.description }}</div>
                    <div class="text-xl">Адресс: {{ establishment.address }}</div>
                    <div class="text-xl">Теги заведения:
                        <span v-for="n in establishment.tags" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10">{{ n.name }}</span>
                    </div>
                </div>
            </div>
            <h3 class="text-3xl font-bold dark:text-white">События заведения</h3>
            <div v-if="establishment.events"
                 class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6 dark:text-neutral-400 gap-3">
                <Card v-for="event in establishment.events" :event=event />
            </div>

        </MainLayout>
</template>

<style>
:root{
    --swiper-theme-color: #fff;
}
</style>
