<script setup lang="ts">
import { incNum } from '@/components/counter';
import { ref } from 'vue'
import Layout from '@/Shared/TheLayout.vue'

const props = defineProps({
    name: String,
})

const num = ref(0)

const inc = () => incNum(num)

</script>

<template>
    <Layout>
        <h1>Eureka - {{ name }}</h1>
    
        <button type="button" class="btn btn-primary ms-4" @click="inc">Increase: {{ num }}</button>
    </Layout>
</template>

<style scoped></style>