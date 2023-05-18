<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-neutral-800 dark:text-neutral-200 leading-tight">Панель управления</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-neutral-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-neutral-900 dark:text-neutral-100">Добро пожаловать {{ $page.props.auth.user.name }}!</div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
