<template>
    <Deferred data="user">
        <template #fallback>
            <div>Loading...</div>
        </template>

        <div>
            <h1>user data</h1>
            <ul>
                <li>{{user['id']}}</li>
                <li>{{user['name']}}</li>
                <li>{{user['email']}}</li>
            </ul>
        </div>
    </Deferred>
</template>

<script setup>
import { Deferred } from '@inertiajs/vue3'

defineProps({
    user: {
        type: Object,
    }
})
</script>
