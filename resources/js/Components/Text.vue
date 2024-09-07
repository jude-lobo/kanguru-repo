<script setup>
import { ref } from 'vue';

const model = defineModel({
    type: String,
    required: true,
});

const input = ref(null);


defineExpose({ focus: () => input.value.focus() });
</script>

<template>
     <input v-model="model" type="text" id="model_name" name="model_name" class="form-control" required />
</template>