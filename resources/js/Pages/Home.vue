<script setup lang="ts">
import { incNum } from '@/components/counter';
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue'

const props = defineProps({
    name: String,
})

const num = ref(0)

const inc = () => incNum(num)

</script>

<template>
    <h1>Eureka - {{ name }}</h1>
    <Link href="/about" type="button" class="btn btn-success">About</Link>

    <button type="button" class="btn btn-primary ms-4" @click="inc">Increase: {{ num }}</button>
</template>

<style scoped></style>