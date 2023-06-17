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
                <div v-if="establishment.tags" class="text-xl">Теги заведения:
                    <div class="flex">
                        <span v-for="n in establishment.tags"
                              class="mr-1 inline-flex items-center rounded-md px-2 py-1 text-xs font-medium text-white bg-neutral-700 ring-1 ring-inset ring-neutral-100/10">{{
                                n.name
                            }}</span>
                    </div>
                </div>
                <button
                    class="mt-2 text-white bg-red-700 hover:bg-neutral-800 focus:ring-4 focus:outline-none focus:ring-neutral-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-neutral-700 dark:focus:ring-neutral-800">
                    Подписаться
                </button>
            </div>
        </div>
        <h3 class="text-3xl font-bold dark:text-white">События</h3>
        <div v-if="establishment.events"
             class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6 dark:text-neutral-400 gap-3 mb-6">
            <Card v-for="event in establishment.events" :event=event />
        </div>

        <h3 class="text-3xl font-bold dark:text-white mb-6">Отзывы</h3>
        <div class="mb-6">
            <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Текст отзыва</label>
            <input type="text" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-neutral-500 focus:border-neutral-500 dark:bg-neutral-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-neutral-500 dark:focus:border-neutral-500
        <div v-for="review in establishment.reviews">
            <div v-if="review.published === true" class="flex-col text-neutral-400 mb-6 border-b">
                <div class="text-xl mb-2">
                    {{ review.user.name }}
                </div>

                <div class="flex flex-row items-center gap-1 mb-2">
                    <svg v-for="n in review.score" aria-hidden="true"
                         class="w-5 h-5 text-neutral-300"
                         fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First
                        star</title>
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                </div>
                <div class="text-xl mb-4">
                    {{ review.text }}
                </div>

            </div>
        </div>


    </MainLayout>
</template>

<style>
:root {
    --swiper-theme-color: #fff;
}
</style>
