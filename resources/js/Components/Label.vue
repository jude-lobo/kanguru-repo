<script setup>
defineProps({
    value: {
        type: String,
    },
});
</script>

<template>
    <label class="block text-gray-700 font-bold mb-2" v-if="value">{{value}}</label>
</template>