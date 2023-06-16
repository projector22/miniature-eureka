<script setup lang="ts">
import FooterBar from './components/FooterBar.vue';
import MainElement from './components/MainElement.vue';
import TopBar from './components/TopBar.vue';
</script>




<template>
    <div id="wrapper" class="bg-gray-200  min-h-screen flex flex-col">
        <TopBar />
        <MainElement />
        <FooterBar />
    </div>
</template>
    <!-- <header>
        <h1 class="text-4xl font-bold mb-3">Minature Eureka Ideas Management</h1>
        <NavBar />
    </header>
    <main>
        <RouterView />
    </main> -->


<script lang="ts">
// import { ref } from 'vue'
// import { RouterView } from 'vue-router'
// import NavBar from './views/NavBar.vue'



export const heading2 = 'text-4xl font-extrabold mb-4';
export const uli = 'space-y-1 list-disc list-inside';

export const nav_btn = 'border-2 border-white border-solid px-5 py-3 mr-4 rounded-lg';
</script>