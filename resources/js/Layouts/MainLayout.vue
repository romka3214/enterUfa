<script setup>
import { Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <header
        class="sticky top-0 z-30 h-[84px] bg-neutral-900 bg-opacity-50 backdrop-blur backdrop-filter  firefox:bg-opacity-90">
        <div class="container mx-auto max-w-8xl xl:px-8 h-full">
            <div class="flex items-center justify-between border-b border-neutral-800 h-full px-4 py-3 sm:px-6 lg:px-8 xl:px-0">
                <Link class="h-full" :href="route('home')">
                    <ApplicationLogo class="fill-current h-full text-black-500 dark:fill-white" />
                </Link>

                <div class="text-right">
                    <Link :href="route('dashboard')"
                          class="mx-2 font-semibold text-neutral-600 hover:text-neutral-900 dark:text-neutral-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        Мероприятия</Link>
                    <Link :href="route('dashboard')"
                          class="mx-2 font-semibold text-neutral-600 hover:text-neutral-900 dark:text-neutral-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        Заведения</Link>
                    <Link :href="route('recommendations')"
                          class="mx-2 font-semibold text-neutral-600 hover:text-neutral-900 dark:text-neutral-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        Рекомендации</Link>
                    <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                          class="mx-2 font-semibold text-neutral-600 hover:text-neutral-900 dark:text-neutral-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        Панель управления</Link>


                </div>
            </div>
        </div>
    </header>
    <div
        class="relative sm:flex sm:justify-center min-h-screen bg-white dark:bg-neutral-800 bg-center selection:bg-red-500 selection:text-white">
        <div class="container p-4">
            <slot />
        </div>
    </div>
</template>
