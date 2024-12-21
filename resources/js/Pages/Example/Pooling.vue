<template>
    <h1>current time is {{props.currentTime}}</h1>
</template>

<script setup lang="ts">
import {usePoll} from "@inertiajs/vue3";

const props = defineProps({
    currentTime: {
        type: String,
        required: true,
    }
})

usePoll(1000);
</script>
