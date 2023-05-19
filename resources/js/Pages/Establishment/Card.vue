<script setup>
import {Link} from '@inertiajs/vue3';
defineProps({
    establishment: {
        required: true,
        type: Object,
    },
});
</script>

<template>
    <Link :href="route('establishments.show', establishment.id)" class="flex flex-col w-100 hover:bg-neutral-700 rounded-xl">
        <div class="w-100">
            <img class="w-100 rounded-xl" :src="establishment.photos[0].url" alt="">
        </div>
        <div class="p-2">
            <h1 class="text-xl">{{ establishment.name }}</h1>

            <div class="flex flex-row gap-1">
                <svg v-for="n in establishment.average_score" aria-hidden="true" class="w-5 h-5 text-neutral-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            </div>
        </div>
    </Link>
</template>
