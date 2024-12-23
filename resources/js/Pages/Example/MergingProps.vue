<template>
    <div>
        <div v-for="user in users">
            <ul>
                <li>{{user['id']}}</li>
                <li>{{user['name']}}</li>
                <li>{{user['email']}}</li>
            </ul>
        </div>
        <button @click="scroll">scrooooooool</button>
    </div>
</template>

<script setup>
import {router} from "@inertiajs/vue3";

const props = defineProps({
    users: {
        type: Array
    }
})
console.log(props.users)

let currentPage = 1;
const scroll = () => {
    router.reload({
        data: {
            'page': currentPage
        }
    });

    currentPage++;
}
</script>
