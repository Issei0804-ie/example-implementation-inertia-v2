<template>
    <div class="load-when-visible">
        <h1>LoadWhenVisible</h1>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <WhenVisible data="message">
            <template #fallback>
                <div>Loading...</div>
            </template>

            <div>
                <p>{{message}}</p>
            </div>
        </WhenVisible>
    </div>
</template>

<script setup>
import { WhenVisible } from '@inertiajs/vue3'
defineProps({
    message: {
        type: String,
    }
})
</script>

<style scoped>
.load-when-visible {
    width: 500px;
    height: 300px;
    background-color: deepskyblue;
    overflow: scroll;
}
</style>
