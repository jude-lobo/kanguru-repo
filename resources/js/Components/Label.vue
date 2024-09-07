<script setup>
defineProps({
    value: {
        type: String,
    },
});
</script>

<template>
    <label class="form-label" v-if="value">{{value}}</label>
</template>