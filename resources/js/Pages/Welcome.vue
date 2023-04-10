<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
    est: {
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome" />


    <header
        class="sticky top-0 z-30 h-[84px] bg-neutral-900 bg-opacity-50 backdrop-blur backdrop-filter  firefox:bg-opacity-90">
        <div class="container mx-auto max-w-8xl xl:px-8 h-full">
            <div class="flex items-center justify-between border-b border-neutral-800 h-full px-4 py-3 sm:px-6 lg:px-8 xl:px-0">
                <Link class="h-full" :href="route('home')">
                    <ApplicationLogo class="fill-current h-full text-black-500 dark:fill-white" />
                </Link>

                <div v-if="canLogin" class="text-right">
                    <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                        class="font-semibold text-neutral-600 hover:text-neutral-900 dark:text-neutral-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                Панель управления</Link>

                    <template v-else>
                        <Link :href="route('login')"
                            class="font-semibold text-neutral-600 hover:text-neutral-400 dark:text-neutral-200 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        Войти</Link>

                        <Link v-if="canRegister" :href="route('register')"
                            class="ml-4 font-semibold text-neutral-600 hover:text-neutral-400 dark:text-neutral-200 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        Регистрация</Link>
                    </template>
                </div>
            </div>
        </div>
    </header>


    <!-- <header
        class="sticky top-0 z-30 h-[72px] bg-gray-900 bg-opacity-50 backdrop-blur backdrop-filter border-b border-gray-800  firefox:bg-opacity-90">
        <div class="mx-auto max-w-8xl xl:px-8">
            <div class="h-full flex items-center justify-between px-4 py-5 sm:px-6 lg:px-8 xl:px-0">
                
            </div>
        </div>
    </header> -->



    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-white dark:bg-neutral-800 bg-center selection:bg-red-500 selection:text-white">
        <div class="container mx-auto p-4">
            <div class="flex justify-space-between mt-16 px-6 dark:text-neutral-400 sm:items-center sm:justify-center">
                <div v-if="est">
                    <div v-for="cell in est">
                    
                                                    
                        <h1 class="text-xl">{{ cell.name }}</h1>
                        <h3 class="text-lg">{{ cell.description }}</h3>
                        <p>{{ cell.address }}</p>
                        <div class="flex flex-row">
                            <img class="m-2" :src="photo.url" alt="" v-for="photo in cell.photos">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
