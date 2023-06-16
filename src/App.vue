<script setup lang="ts">
import FooterBar from './layout/FooterBar.vue';
import MainElement from './layout/MainElement.vue';
import TopBar from './layout/TopBar.vue';
</script>

<template>
    <div id="wrapper" class="bg-gray-200  min-h-screen flex flex-col">
        <TopBar />
        <MainElement />
        <FooterBar />
    </div>
</template>


<script lang="ts">
// import { ref } from 'vue'
// import { RouterView } from 'vue-router'
// import NavBar from './views/NavBar.vue'



export const heading2 = 'text-4xl font-extrabold mb-4';
export const uli = 'space-y-1 list-disc list-inside';

export const nav_btn = 'border-2 border-white border-solid px-5 py-3 mr-4 rounded-lg';
</script>