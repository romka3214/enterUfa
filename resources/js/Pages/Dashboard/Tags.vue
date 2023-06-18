<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, useForm} from '@inertiajs/vue3';
import {onMounted, ref} from "vue";
import {initFlowbite} from "flowbite";

defineProps({
    tags: {
        required: true,
    },
    establishmentTags: {
        required: true,
    },
});
onMounted(() => {
    initFlowbite();
})

const checkedTags = ref([]);

const tagsSearchForm = useForm({
    query: ''
})

const postSearchTags = () => {
    tagsSearchForm.get(route('dashboard.tags'),{
        preserveState: true,
        preserveScroll: true
    })
}
</script>

<template>
    <Head title="Теги" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-neutral-800 dark:text-neutral-200 leading-tight">Теги</h2>
        </template>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch" class="mb-2 mt-2 inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-blue-300 dark:bg-neutral-600 dark:hover:bg-neutral-700" type="button">Добавить теги<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>

                <!-- Dropdown menu -->
                <div id="dropdownSearch" class="hidden z-10 bg-white rounded-lg shadow w-60 dark:bg-neutral-700">
                    <div class="p-3">
                        <label for="input-group-search" class="sr-only">Поиск</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input @input="postSearchTags" v-model="tagsSearchForm.query" type="text" id="input-group-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-neutral-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Поиск тегов">
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
                    <a @click="searchWithTags" class="flex items-center p-3 text-sm font-medium text-red-600 border-t border-gray-200 rounded-b-lg bg-gray-50 dark:border-gray-600 hover:bg-gray-100 dark:bg-neutral-700 dark:hover:bg-gray-600 dark:text-red-100 hover:underline">
                        Добавить
                    </a>
                </div>
                <div class="bg-white dark:bg-neutral-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-neutral-700 dark:text-neutral-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Название
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Действия
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="tag in establishmentTags" class="bg-white border-b dark:bg-neutral-800 dark:border-neutral-700 hover:bg-gray-50 dark:hover:bg-neutral-600">

                                <td class="px-6 py-4">
                                    {{ tag.id }}
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ tag.name }}
                                </th>
                                <td class="flex items-center px-6 py-4 space-x-3">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Изменить</a>
                                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Удалить</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
