<script setup>
import {Link} from '@inertiajs/vue3';
defineProps({
    event: {
        required: true,
        type: Object,
    },
});
</script>

<template>
    <Link :href="route('events.show', event.id)" class="flex flex-col w-100 hover:bg-neutral-700 rounded-xl">
        <div class="w-100">
            <img class="w-100 rounded-xl" :src="event.photos[0].url" alt="">
        </div>
        <div class="p-2">
            <h1 class="text-xl">{{ event.name }}</h1>
            <h1 class="text-lg">Начало {{ event.date_start }}</h1>
            <h1 class="text-lg">{{ event.price }}</h1>
        </div>

    </Link>
</template>
