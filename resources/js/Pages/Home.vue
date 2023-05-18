<script setup>
import { Head, Link } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';

defineProps({
    est: {
        required: true,
    },
});
</script>

<template>
    <Head title="Главная" />

    <MainLayout>




        <!--            <form>-->
        <!--                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Поиск</label>-->
        <!--                <div class="relative">-->
        <!--                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">-->
        <!--                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>-->
        <!--                    </div>-->
        <!--                    <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Введите что хотели бы найти :)" required>-->
        <!--                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Поиск</button>-->
        <!--                </div>-->
        <!--            </form>-->

        <div id="vk_auth"></div>
        <div class="flex flex-col justify-space-between mt-16 px-6 dark:text-neutral-400 sm:items-center sm:justify-center">

            <div class="text-xl block">Тут будет что то типо</div>
            <div class="text-lg">популярные заведения</div>
            <div class="text-lg">новые события в любимых заведениях</div>
            <div class="text-lg">и мб что нить ещё</div>

                            <div v-if="est.data">
                                <div v-for="cell in est.data">
                                    <h1 class="text-3xl">Заведение</h1>
                                    <h1 class="text-xl">Название: {{ cell.name }}</h1>
                                    <h3 class="text-lg">Описание: {{ cell.description }}</h3>
                                    <h3 class="text-lg">Адрес: {{ cell.address }}</h3>
                                    <div class="cell w-100">
                                        <img class="m-2 w-100" :src="cell.photos[0].url" alt="">
                                    </div>
                                    <h3 class="text-2xl">События заведения: </h3>
                                    <div class="flex flex-row justify-between gap-1">
                                        <div class="cell w-100" v-for="event in cell.events">
                                            <h1 class="text-xl">Название: {{ event.name }}</h1>
                                            <h3 class="text-lg">Цена: {{ event.price }}</h3>
                                            <img class="m-2" :src="event.photos[0].url" alt="">
                                            <h3 class="text-base">Дата начала: {{ event.date_start }}</h3>
                                            <h3 class="text-base">Дата завршения: {{ event.date_end }}</h3>

                                        </div>

                                    </div>
                                </div>
                            </div>
        </div>
    </MainLayout>
</template>
