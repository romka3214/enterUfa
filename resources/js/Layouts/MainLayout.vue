<script setup>
import { Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import 'flowbite';
import {onMounted} from "vue";
import {initFlowbite} from "flowbite";
onMounted(() => {
    initFlowbite();
})
</script>


<template>

    <nav class="sticky top-0 z-30 bg-neutral-900 bg-opacity-50 backdrop-blur backdrop-filter firefox:bg-opacity-90">
        <div class="container flex flex-wrap items-center justify-between mx-auto p-4 md:p-2">
            <Link :href="route('home')" class="flex items-center">
                <ApplicationLogo class="fill-current h-10 md:h-14 mr-3 text-black-500 dark:fill-white" />
            </Link>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-2 md:p-0 mt-4 border border-gray-100 rounded-lg bg-neutral-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-neutral-800 md:dark:bg-transparent dark:border-neutral-700">
                    <li>
                        <Link :href="route('establishments')" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-red-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Заведения</Link>
                    </li>
                    <li>
                        <Link :href="route('recommendations')" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-red-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Рекомендации</Link>
                    </li>
                    <li v-if="$page.props.auth.user.role === 2">
                        <Link :href="route('dashboard')" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-red-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Панель управления</Link>
                    </li>
                    <li v-if="$page.props.auth.user.role === 0">
                        <Link :href="route('profileLK.show')" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-red-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Профиль</Link>
                    </li>
                    <li v-if="$page.props.auth.user.role === 1">
                        <Link :href="route('dashboard')" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-red-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Управление заведением</Link>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

<!--    <header-->
<!--        class="sticky top-0 z-30 h-[84px] bg-neutral-900 bg-opacity-50 backdrop-blur backdrop-filter  firefox:bg-opacity-90">-->
<!--        <div class="container mx-auto max-w-8xl xl:px-8 h-full">-->
<!--            <div class="flex items-center justify-between border-b border-neutral-800 h-full px-4 py-3 sm:px-6 lg:px-8 xl:px-0">-->
<!--                <Link class="h-full" :href="route('home')">-->
<!--                    <ApplicationLogo class="fill-current h-full text-black-500 dark:fill-white" />-->
<!--                </Link>-->
<!--&lt;!&ndash;                {{$page.props.auth.user.role}}&ndash;&gt;-->
<!--&lt;!&ndash;                {{$page.props.auth.user.name}}&ndash;&gt;-->
<!--                <div class="text-right">-->
<!--&lt;!&ndash;                    <Link :href="route('events')"&ndash;&gt;-->
<!--&lt;!&ndash;                          class="mx-2 font-semibold text-neutral-600 hover:text-neutral-900 dark:text-neutral-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">&ndash;&gt;-->
<!--&lt;!&ndash;                        Мероприятия</Link>&ndash;&gt;-->
<!--                    <Link :href="route('establishments')"-->
<!--                          class="mx-2 font-semibold text-neutral-600 hover:text-neutral-900 dark:text-neutral-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">-->
<!--                        Заведения</Link>-->
<!--                    <Link :href="route('recommendations')"-->
<!--                          class="mx-2 font-semibold text-neutral-600 hover:text-neutral-900 dark:text-neutral-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">-->
<!--                        Рекомендации</Link>-->


<!--                    <Link v-if="$page.props.auth.user.role === 2" :href="route('dashboard')"-->
<!--                          class="mx-2 font-semibold text-neutral-600 hover:text-neutral-900 dark:text-neutral-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">-->
<!--                        Панель управления</Link>-->
<!--                    <Link v-if="$page.props.auth.user.role === 0" :href="route('profileLK.show')"-->
<!--                          class="mx-2 font-semibold text-neutral-600 hover:text-neutral-900 dark:text-neutral-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">-->
<!--                        Профиль</Link>-->
<!--                    <Link v-if="$page.props.auth.user.role === 1" :href="route('dashboard')"-->
<!--                          class="mx-2 font-semibold text-neutral-600 hover:text-neutral-900 dark:text-neutral-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">-->
<!--                        Управление заведением</Link>-->


<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </header>-->


    <div
        class="relative sm:flex sm:justify-center min-h-screen bg-white dark:bg-neutral-800 bg-center selection:bg-red-500 selection:text-white">
        <div class="container p-4">
            <slot />
        </div>
    </div>
</template>
