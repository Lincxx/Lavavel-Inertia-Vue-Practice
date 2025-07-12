<script setup>
const model = defineModel({
    type: null, 
    required: true
})

defineProps({
    name: {
        type: String,
        required: true
    },
    type: {
        type: String,
        default: 'text'
    },
    message: String
})
</script>

<template>
    <div class="mb-6">
        <label for="">{{ name }}</label>
        <input :type="type" class="form-control" v-model="model" :class="{' !ring-red-500': message}">
        <small class="error" v-if="message">{{ message }}</small>
    </div>
</template>