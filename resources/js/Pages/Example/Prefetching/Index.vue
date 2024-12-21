<template>
    <div v-for="user in users">
        <Link :href="href(user['id'])" prefetch>{{user['name']}}</Link>
    </div>
</template>

<script setup lang="ts">
import {Link} from '@inertiajs/vue3';

defineProps({
    users:{
        type: Object
    }
});

const href = (userId: number) => {
    return "/example/prefetching/show/" + userId;
}
</script>

