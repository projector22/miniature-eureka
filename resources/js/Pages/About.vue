<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    name: String,
})

</script>

<template>
    <h1>About - {{ name }}</h1>
    <Link href="/" type="button" class="btn btn-success">Home</Link>
</template>

<style scoped></style>