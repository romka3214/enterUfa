<script setup>
import {Head, Link, useForm} from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';
import Card from '@/Pages/Establishment/Card.vue';
// import {onMounted, ref, toRef, watch} from "vue";
// import {Inertia} from "@inertiajs/inertia";
// import Meilisearch from "meiliseacrh";

defineProps({
    establishments: {
        required: true,
    },
    status: {
        required: false,
        type: String,
    }
});

const searchForm = useForm({
    query: '',
});

const search = () => {
    searchForm.get(route('establishments'), {
        preserveState: true,
        preserveScroll: true,
    });
};

</script>

<template>
    <Head title="Заведения"/>

    <MainLayout>
        <h1 class="mt-5 mb-14 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">Все <span
            class="text-transparent bg-clip-text bg-gradient-to-r to-red-600 from-white">заведения</span></h1>
        <form @submit.prevent="search">
            <label for="default-search"
                   class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Поиск</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" id="default-search"
                       class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-neutral-500 focus:border-neutral-500 dark:bg-neutral-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-neutral-500 dark:focus:border-neutral-500"
                       placeholder="Введите название заведения"
                       v-model="searchForm.query">

                <button type="submit"
                        class="text-white absolute right-2.5 bottom-2.5 bg-neutral-700 hover:bg-neutral-800 focus:ring-4 focus:outline-none focus:ring-neutral-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-neutral-600 dark:hover:bg-neutral-700 dark:focus:ring-neutral-800">
                    Поиск
                </button>
            </div>
        </form>
        <div v-if="establishments" class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6 dark:text-neutral-400 gap-3">
            <Card v-for="cell in establishments" :establishment=cell />
        </div>

    </MainLayout>
</template>
