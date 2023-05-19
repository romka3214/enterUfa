<script setup>
import {Head, Link} from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';

defineProps({
    all: {
        required: true,
    },
});
</script>

<template>
    <Head title="Рекомендации"/>

    <MainLayout>
        <h1 class="mt-5 mb-14 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">Ваш список <span class="text-transparent bg-clip-text bg-gradient-to-r to-red-600 from-white">рекомендаций</span></h1>
<!--        <form>-->
<!--            <label for="default-search"-->
<!--                   class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Поиск</label>-->
<!--            <div class="relative">-->
<!--                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">-->
<!--                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"-->
<!--                         stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">-->
<!--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"-->
<!--                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>-->
<!--                    </svg>-->
<!--                </div>-->
<!--                <input type="search" id="default-search"-->
<!--                       class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-neutral-500 focus:border-neutral-500 dark:bg-neutral-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-neutral-500 dark:focus:border-neutral-500"-->
<!--                       placeholder="Введите что хотели бы найти :)" required>-->
<!--                <button type="submit"-->
<!--                        class="text-white absolute right-2.5 bottom-2.5 bg-neutral-700 hover:bg-neutral-800 focus:ring-4 focus:outline-none focus:ring-neutral-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-neutral-600 dark:hover:bg-neutral-700 dark:focus:ring-neutral-800">-->
<!--                    Поиск-->
<!--                </button>-->
<!--            </div>-->
<!--        </form>-->

        <div id="vk_auth"></div>
        <div v-if="all" class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6 dark:text-neutral-400 gap-3">

            <div class="flex flex-col w-100" v-for="cell in all">
                <div class="w-100 mb-4">
                    <img class="w-100 rounded-xl" :src="cell.photos[0].url" alt="">
                </div>
                <h1 class="text-xl">{{ cell.name }}</h1>
                <div class="flex flex-row gap-2">
                    <svg v-for="n in cell.average_score" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                         fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                        <path
                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                    </svg>
                </div>


            </div>

        </div>
    </MainLayout>
</template>
