<template>
    <h1>user data</h1>
    <ul>
        <li>{{user['id']}}</li>
        <li>{{user['name']}}</li>
        <li>{{user['email']}}</li>
    </ul>
</template>

<script setup lang="ts">
defineProps({
    user: {
        type: Object,
        required: true,
    }
})
</script>
