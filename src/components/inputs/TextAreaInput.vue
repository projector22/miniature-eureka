<script setup lang="ts">
import BoxInput from './BoxInput.vue';
import { rand_id } from '@/App.vue';

const props = defineProps({
    Width: String
})

</script>

<template>
    <BoxInput :id="rand_id()" Type="textarea" rows="10" :Width="Width" />
</template>