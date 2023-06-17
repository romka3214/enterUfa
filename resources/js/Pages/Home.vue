<script setup>
import { Head, Link } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';
import Card from '@/Pages/Event/Card.vue';

defineProps({
    newEstablishments: {
        required: true,
    },
});
</script>

<template>
    <Head title="Главная" />

    <MainLayout>




        <h1 class="mt-5 mb-14 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">Ближайшие <span
            class="text-transparent bg-clip-text bg-gradient-to-r to-red-600 from-white">события</span></h1>

        <div v-if="newEstablishments" class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6 dark:text-neutral-400 gap-3">
            <Card v-for="cell in newEstablishments" :event=cell />
        </div>

    </MainLayout>
</template>
