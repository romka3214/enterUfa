<script setup>
import {Head, Link, router, useForm} from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';
import Card from '@/Pages/Establishment/Card.vue';
import {ref} from "vue";
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
// import {onMounted, ref, toRef, watch} from "vue";
// import {Inertia} from "@inertiajs/inertia";
// import Meilisearch from "meiliseacrh";

defineProps({
    establishments: {
        required: true,
    },
    tags: {
        required: true,
    }
});
onMounted(() => {
    initFlowbite();
})
const searchForm = useForm({
    search: '',
});
const tagSearchForm = useForm({
    searchTags: '',
});

const checkedTags = ref([]);

const tagsSearch = () => {
    tagSearchForm.get(route('establishments'), {
        preserveState: true,
        preserveScroll: true,
    });
};

const searchWithTags = () =>{
    router.get(route('establishments'),{ searchTagsArray: checkedTags.value }, {
        preserveState: true,
        preserveScroll: true,
    });
}

const search = () => {
    searchForm.get(route('establishments'), {
        preserveState: true,
        preserveScroll: true,
    });
};
    const dropdownSeacrhState = ref(false);

    const toggleDropdownSeacrh = () =>{

        dropdownSeacrhState.value = !dropdownSeacrhState.value;
    }

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
                       v-model="searchForm.search">

                <button type="submit"
                        class="text-white absolute right-2.5 bottom-2.5 bg-neutral-700 hover:bg-neutral-800 focus:ring-4 focus:outline-none focus:ring-neutral-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-neutral-600 dark:hover:bg-neutral-700 dark:focus:ring-neutral-800">
                    Поиск
                </button>
            </div>
        </form>

        <button @click="toggleDropdownSeacrh" id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch" class="mt-2 inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Выбор тегов<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>

        <!-- Dropdown menu -->
        <div :class="{ hidden: !dropdownSeacrhState }" id="dropdownSearch" class="z-10 bg-white rounded-lg shadow w-60 dark:bg-gray-700">
            <div class="p-3">
                <label for="input-group-search" class="sr-only">Поиск</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input @input="tagsSearch" v-model="tagSearchForm.searchTags" type="text" id="input-group-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Поиск тегов">
                </div>
            </div>
            <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSearchButton">
                <li v-for="tag in tags">
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <input :id="'checkbox-item-' + tag.id" type="checkbox" :value=tag.id v-model="checkedTags"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label :for="'checkbox-item-' + tag.id" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{ tag.name }}</label>
                    </div>
                </li>
            </ul>
            <a @click="searchWithTags" class="flex items-center p-3 text-sm font-medium text-red-600 border-t border-gray-200 rounded-b-lg bg-gray-50 dark:border-gray-600 hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-red-500 hover:underline">
                <svg class="w-5 h-5 mr-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                Обновить
            </a>
        </div>

        <div v-if="establishments" class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6 dark:text-neutral-400 gap-3">
            <Card v-for="cell in establishments" :establishment=cell />
        </div>

    </MainLayout>
</template>
